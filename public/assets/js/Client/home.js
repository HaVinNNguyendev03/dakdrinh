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
                type: 'bar',
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
            678:{
                items:2
            },
            768:{
                items:3
            },
            1024:{
                items:4
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })
   
    
    //responsive
    // tin moi nhat
    function hideElement(){
        let screenWidth = window.innerWidth;
        let cardtitle = document.querySelectorAll('.card-title');
        let cardtime = document.querySelectorAll('.card-time');
        if (screenWidth >= 375 && screenWidth <= 767) {
           cardtitle.forEach(function(item){
                item.style.display = 'none';
           });
           cardtime.forEach(function(item){
            item.style.display = 'none';
       })
       } else {
        cardtitle.forEach(function(item){
            item.style.display = 'block';
       });
       cardtime.forEach(function(item){
        item.style.display = 'block';
        })
        }
    }
    window.onload = hideElement;
    window.onresize = hideElement;
});
// // Xử lý sự kiện hover
// // Xử lý sự kiện hover
// document.addEventListener('DOMContentLoaded', function () {
//     // Lấy tất cả các button dropdown
//     var dropdowns = document.querySelectorAll('.dropdown-trigger');

//     // Duyệt qua từng button dropdown
//     dropdowns.forEach(function (dropdown) {
//         // Thêm sự kiện hover vào mỗi button dropdown
//         dropdown.addEventListener('mouseover', function () {
//             // Lấy id của dropdown content tương ứng
//             var dropdownContentId = this.getAttribute('id').replace('dropdownNavbarLink', 'dropdownNavbar');

//             // Lấy dropdown content tương ứng
//             var dropdownContent = document.getElementById(dropdownContentId);

//             // Hiển thị dropdown content và áp dụng CSS
//             dropdownContent.style.display = 'block';
//             dropdownContent.style.position = 'absolute';
//             dropdownContent.style.top = 'auto';
//             dropdownContent.style.right = 'auto';
//             dropdownContent.style.bottom = 'auto';
//             dropdownContent.style.left = 'auto';
//             dropdownContent.style.transform = 'translate3d(-30px, 30px, 50px)';
//         });

//         // Thêm sự kiện mouseout để ẩn dropdown content khi rời khỏi button
//         dropdown.addEventListener('mouseout', function () {
//             // Lấy id của dropdown content tương ứng
//             var dropdownContentId = this.getAttribute('id').replace('dropdownNavbarLink', 'dropdownNavbar');

//             // Ẩn dropdown content
//             document.getElementById(dropdownContentId).style.display = 'none';
//         });
//     });
// });


