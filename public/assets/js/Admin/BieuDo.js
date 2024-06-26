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

$('#charts').ready(function() {
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
            var lineChart = new Chart(document.getElementById('lineChart'),
            {
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
               let text = "import"
               boxshow(text)
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
function boxshow(params) {
   
    const modalHtml = `
    <div class="modal fade" id="boxshow" tabindex="-1" aria-labelledby="boxshowLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="boxshowLabel">Thông Báo ${params}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Đã ${params}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
    `;
    // Chèn modal vào body của trang
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    // Hiển thị modal
    $('#boxshow').modal('show');
}