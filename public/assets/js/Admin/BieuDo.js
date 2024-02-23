// // Dữ liệu minh họa
// var labels = ["Sản Lượng ngày 21/12", "Mực nước hồ ngày 21/12", "Tổng lưu lượng, xả hạ du", "Sản Lượng tháng 12", "Sản Lượng quý IV", "Sản Lượng năm 2023"];
// var data = [5000, 20000, 10000, 3000, 8000, 15000];

// // Biểu đồ đường
// var lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
//     type: 'line',
//     data: {
//         labels: labels,
//         datasets: [{
//             label: 'Dữ liệu',
//             data: data,
//             borderColor: 'rgba(75, 192, 192, 1)',
//             borderWidth: 2,
//             fill: false
//         }]
//     },
// });

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
                          Height : 300,
                        } 
                    }
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    }); 
    $('#importBtn').click(function(e) {
        e.preventDefault();
        
        var formData = new FormData();
        var fileInput = $('#file')[0].files[0];
        formData.append('file', fileInput);

        $.ajax({
            url: 'import/import',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Xử lý khi import thành công
                console.log(response);
                alert('Dữ liệu đã được nhập thành công');
                // Thực hiện các hành động cần thiết sau khi import thành công
            },
            error: function(xhr, status, error) {
                // Xử lý khi có lỗi xảy ra trong quá trình import
                console.log(xhr.responseText);
                alert('Không thể nhập dữ liệu');
                // Thực hiện các hành động cần thiết khi có lỗi xảy ra
            }
        });
    })
});