
$('#dangvideo').click(function() {
    submitFormDangVideo();
});
function submitFormDangVideo(){
    //lay gia tri
    let tenvideo = document.querySelector('input[name="tenvideo"]').value;
    let linkvideo = document.querySelector('input[name="linkvideo"]').value;
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('tenvideo',tenvideo);
    formdata.append('linkvideo',linkvideo);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/dangvideo',
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
          boxshow("đăng video")
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
