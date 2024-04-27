$(document).ready(function(){
        let idlogoweb = $('#idlogoweb').text();
        $.ajax({
            type: 'GET',
            url: '/api/getlogonameweb/' + idlogoweb,
            success: function (response) {
                // Chèn dữ liệu vào các trường input
                $('input[name="tenweb"]').val(response.tenweb);
                $('input[name="sodienthoai"]').val(response.sodienthoai);
                $('input[name="linkemail"]').val(response.linkemail);
                // In ra để kiểm tra
                console.log("Dữ liệu logoweb: ", response);
            },
            error: function (error) {
                console.log('Lỗi Ajax khi lấy dữ liệu web: ', error);
            }
        })
});
    $('#sualogoweb').click(function() {
        submitFormEditlogoweb();
    });
    function submitFormEditlogoweb(){
        let idlogoweb = $('#idlogoweb').text();
        //lay gia tri
        let hinhanhINPUT1 =document.querySelector('input[name="anhlogo"]');
        let anhlogo = hinhanhINPUT1.files[0];
        let hinhanhINPUT2 =document.querySelector('input[name="anhicon"]');
        let anhicon = hinhanhINPUT2.files[0];
        let sodienthoai = document.querySelector('#sodienthoai').value;
        let tenweb = document.querySelector('#tenweb').value;
        let linkemail = document.querySelector('#linkemail').value;
        //them du lieu vao form
        let formdata = new FormData();
        formdata.append('anhlogo',anhlogo);
        formdata.append('anhicon',anhicon);
        formdata.append('sodienthoai',sodienthoai);
        formdata.append('tenweb',tenweb);
        formdata.append('linkemail',linkemail);
        //gui ajax
        $.ajax({
            type: 'POST',
            url:'api/editlogonameweb/' + idlogoweb ,
            data: formdata,
            contentType: false,
            processData: false,
            success: function(response) {
                boxshow("sửa logonameweb")
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