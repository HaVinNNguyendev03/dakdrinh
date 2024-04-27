
$('#danghinhanh').click(function() {
    submitFormDangHinhAnh();
});
function submitFormDangHinhAnh(){
    //lay gia tri
    let danhmucnamanh = document.querySelector('input[name="danhmucnamanh"]').value;
    let ngaydanganh = document.querySelector('input[name="ngaydanganh"]').value;
    let hinhanhINPUT =document.querySelector('input[name="hinhanh"]');
    let chuthichanh = document.querySelector('input[name="chuthichanh"]').value;
    let hinhanh = hinhanhINPUT.files[0];
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('danhmucnamanh',danhmucnamanh);
    formdata.append('ngaydanganh',ngaydanganh);
    formdata.append('hinhanh',hinhanh);
    formdata.append('chuthichanh',chuthichanh);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/danghinhanh',
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
           let text = "Đăng Ảnh"
           boxshow(text)
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