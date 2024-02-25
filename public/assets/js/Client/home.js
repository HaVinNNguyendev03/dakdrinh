$(document).ready(function() {
    $.ajax({
        url: 'bieudo/getData',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var labels = [];
            var data = [];
    
            if (response) {
                // Thêm dữ liệu vào mảng labels
                var label = "Sản Lượng ngày " + response.ngaynhaplieu;
                labels.push(label);
            
                label = "Mực nước hồ ngày " + response.ngaynhaplieu;
                labels.push(label);
            
                labels.push("Tổng lưu lượng, xả hạ du");
            
                label = "Sản Lượng tháng " + response.thangnhaplieu;
                labels.push(label);
            
                label = "Sản Lượng quý " + response.quynhaplieu;
                labels.push(label);
            
                label = "Sản Lượng năm " + response.namnhaplieu;
                labels.push(label);
            
                // Thêm dữ liệu vào mảng data
                data.push(response.sanluongngay);
                data.push(response.mucnuocho);
                data.push(response.tongluuluong);
                data.push(response.sanluongthang);
                data.push(response.sanluongquy);
                data.push(response.sanluongnam);
            } else {
                console.error("Không có dữ liệu từ API.");
            }
            let namnhaplieuValue = response.namnhaplieu;
            let nambieudo = document.querySelector('#nambieudo');
            nambieudo.textContent = nambieudo.textContent.replace('2023',namnhaplieuValue);
            // Khởi tạo biểu đồ
            var lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Dữ liệu',
                        data: data,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        },
                        x: {
                          Height : 200,
                        } 
                    }
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    }); 
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            800:{
                items:4
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })
   
});
