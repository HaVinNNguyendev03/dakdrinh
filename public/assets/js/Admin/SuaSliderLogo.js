
$(document).ready(function () {
    let idsliderlogo = $('#idlogo').text(); // Lấy nội dung của thẻ có id là "idurl"
    $.ajax({
        type: 'GET',
        url: '/api/getdatamenu/' + idsliderlogo, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="chuthich"]').val(response.chuthich);
            $('input[name="tenlogo"]').val(response.tenlogo);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    });
});
$('#editsliderlogo').click(function() {
    submitFormUpdatesliderlogo();
});
    function submitFormUpdatesliderlogo() {
        let idsliderlogo = $('#idlogo').text(); 
        let hinhanhINPUT = document.querySelector('input[name="anhlogo"]');
    let chuthich = document.querySelector('input[name="chuthich"]').value;
    let tenlogo = document.querySelector('input[name="tenlogo"]').value;
    let hinhanh = hinhanhINPUT.files[0];
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('chuthich',chuthich);
    formdata.append('anhlogo',hinhanh);
    formdata.append('tenlogo',tenlogo);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/editsliderlogo/' + idsliderlogo,
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
           boxshow("sửa sliderlogo")
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