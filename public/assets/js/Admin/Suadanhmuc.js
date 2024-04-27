
$(document).ready(function () {
    let iddanhmuc = $('#iddanhmuc').text(); 
    $.ajax({
        type: 'GET',
        url: '/api/getdataeditdanhmuc/' + iddanhmuc, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="ghichu"]').val(response.ghichu);
            $('input[name="tendanhmuc"]').val(response.tendanhmuc);
        },
            error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu danhmuc: ', error);
        }
    });
});
$('#editdanhmuc').click(function() {
    submitFormEditDanhmuc();
});
    function submitFormEditDanhmuc() {
        let iddanhmuc = $('#iddanhmuc').text(); 
        var tendanhmuc = document.querySelector('input[name="tendanhmuc"]').value;
        var ghichu = document.querySelector('input[name="ghichu"]').value;
        let urldanhmuc = convertUrl(tendanhmuc);
        // Tạo đối tượng FormData và thêm dữ liệu vào đó
        var formData = new FormData();
        formData.append('tendanhmuc', tendanhmuc);
        formData.append('ghichu', ghichu);
        formData.append('urldanhmuc', urldanhmuc);
    //gui ajax
    $.ajax({    
        type: 'POST',
        url:'/api/editdanhmuc/' + iddanhmuc,
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
           boxshow("sửa danh mục")
        },
        error: function(error) {
            console.log('Lỗi Ajax: ', error);
        }
    })
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
  
      return str.replace(/\s+/g, ''); // Thay thế dấu cách bằng dấu "-"
  }