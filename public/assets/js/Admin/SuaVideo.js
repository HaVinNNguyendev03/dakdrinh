
$(document).ready(function(){
    let idvideo = $('#idvideo').text();
    $.ajax({
        type: 'GET',
        url: 'api/getvideo/' + idvideo,
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="tenvideo"]').val(response.tenvideo);
            $('input[name="linkvideo"]').val(response.linkvideo);
            // In ra để kiểm tra
            console.log("Dữ liệu bài viết: ", response);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    })
});
$('#editvideo').click(function() {
    submitFormEditVideo();
});
function submitFormEditVideo(){
    let idvideo = $('#idvideo').text();
    //lay gia tri
    let tenvideo = document.querySelector('#tenvideo').value;
    let linkvideo = document.querySelector('#linkvideo').value;
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('tenvideo',tenvideo);
    formdata.append('linkvideo',linkvideo);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/editvideo/' + idvideo ,
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
            boxshow("sửa video")
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