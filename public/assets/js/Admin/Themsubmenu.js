$(document).ready(function() {
        // Gọi API để lấy dữ liệu menu
        $.ajax({
            url: '/api/getMenu',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var selectMenu = $('select[name="idmenu-DanhMuc"]');
                
                // Lặp qua từng mục trong dữ liệu và thêm vào thẻ select
                data.forEach(function(item) {
                    var option = $('<option>').attr('value', item.idmenu).text(item.tenmenu);
                    selectMenu.append(option);
                }); 
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    });

$('#themdanhmuc').click(function() {
    submitFormDanhMucUpdate();
});
    function submitFormDanhMucUpdate() {
        // Lấy giá trị từ các trường input
        var idmenu = document.querySelector('select[name="idmenu-DanhMuc"]').value;
        var tendanhmuc = document.querySelector('input[name="tendanhmuc"]').value;
        var ghichu = document.querySelector('input[name="ghichu"]').value;
        let urldanhmuc = convertUrl(tendanhmuc);
        // Tạo đối tượng FormData và thêm dữ liệu vào đó
        var formData = new FormData();
        formData.append('idmenu', idmenu);
        formData.append('tendanhmuc', tendanhmuc);
        formData.append('ghichu', ghichu);
        formData.append('urldanhmuc', urldanhmuc);
        // Gửi Ajax request
        $.ajax({
            type: 'POST',
            url: '/api/adddanhmuc',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                let jsonResponse = JSON.parse(response);
                console.log(jsonResponse);  
                console.log(typeof jsonResponse.status)
                if (jsonResponse.status === "success") {
                   boxshow("thêm danh mục")
                    
                } else {
                    alert('them thất bại!');
                }
            },
            error: function (error) {
                console.log('Lỗi Ajax: ', error);
            }
        });
    }
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
    function convertUrl(str) {
        str = str.toLowerCase(); // Chuyển thành chữ thường
        var unicode = {
            'a': 'áàảãạăắằẳẵặâấầẩẫậ',
            'd': 'đ',
            'e': 'éèẻẽẹêếềểễệ',
            'i': 'íìỉĩị',
            'o': 'óòỏõọôốồổỗộơớờởỡợ',
            'u': 'úùủũụưứừửữự',
            'y': 'ýỳỷỹỵ'
        };
    
        for (var nonUnicode in unicode) {
            if (unicode.hasOwnProperty(nonUnicode)) {
                var uni = unicode[nonUnicode];
                var regex = new RegExp("[" + uni + "]", "gu");
                str = str.replace(regex, nonUnicode);
            }
        }
    
        return str.replace(/\s+/g, ''); // '' => tùy dấu,có thể để '-','+','' hoặc để trống.
    }