
$(document).ready(function () {
    let idmenu = $('#idmenu').text(); // Lấy nội dung của thẻ có id là "idurl"
    $.ajax({
        type: 'GET',
        url: '/api/getdatamenu/' + idmenu, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="tenmenu"]').val(response.tenmenu);
            $('input[name="ghichu"]').val(response.ghichu);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    });
});
$('#editmenu').click(function() {
    submitFormUpdatemenu();
});
    function submitFormUpdatemenu() {
        let idmenu = $('#idmenu').text(); 
    let ghichu = document.querySelector('input[name="ghichu"]').value;
    let tenmenu = document.querySelector('input[name="tenmenu"]').value;
    let urlmenu = convertUrl(tenmenu);
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('ghichu',ghichu);
    formdata.append('tenmenu',tenmenu);
    formdata.append('urlmenu',urlmenu);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'/api/editmenu/' + idmenu,
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
           boxshow("sửa menu")
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