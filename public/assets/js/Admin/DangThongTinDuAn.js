$('#dangduan').click(function () {
    submitFormDuAn();
});
$(function () {
    CKEDITOR.replace("noidungthongtinduan", {
        height: 300,

        // Configure your file manager integration. This example uses CKFinder 3 for PHP.
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        ckfinder: {
            uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
        },
        filebrowserWindowWidth: '1000',
        filebrowserWindowHeight: '700',
        removeButtons: 'PasteFromWord',
        language: 'vi'
    });
})
// Gửi yêu cầu Ajax để lấy thông tin từ session

function submitFormDuAn() {
    //  Lấy giá trị từ các trường input
    var tieudeduan = document.querySelector('input[name="tieudethongtinduan"]').value;
    var noidungduan = CKEDITOR.instances['noidungthongtinduan'].getData(); // Lấy nội dung từ CKEditor
    var anhrthumnailInput = document.querySelector('input[name="anhrthumnail"]');
    var anhrthumnailFile = anhrthumnailInput.files[0]; // Lấy tệp đã chọn
    // thêm dữ liệu từ form
    let formData = new FormData();
    formData.append('anhrthumnail', anhrthumnailFile);
    formData.append('tieudethongtinduan', tieudeduan);
    formData.append('noidungthongtinduan', noidungduan);
    // Gửi Ajax request
    $.ajax({
        type: 'POST',
        url: 'api/dangthongtinduan',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
           boxshow("dangthongtinduan")
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