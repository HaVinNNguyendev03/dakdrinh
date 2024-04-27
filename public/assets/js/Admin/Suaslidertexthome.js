$(function () {
    CKEDITOR.replace("textsliderhome", {
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
$(document).ready(function(){
    let idslidertexthome = $('#idslidertexthome').text();
    $.ajax({
        type: 'GET',
        url: 'api/getslidertexthome/' + idslidertexthome,
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            CKEDITOR.instances['textsliderhome'].setData(response.textsliderhome); // Đặt nội dung cho CKEditor
            // In ra để kiểm tra
            console.log("Dữ liệu bài viết: ", response);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    })
});
$('#suanoidungslidertexthome').click(function() {
    submitFormEditslidertexthome();
});
function submitFormEditslidertexthome(){
    let idslidertexthome = $('#idslidertexthome').text();
    //lay gia tri
    let noidungslidertexthome = CKEDITOR.instances['textsliderhome'].getData();
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('textsliderhome',noidungslidertexthome);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/editslidertexthome/' + idslidertexthome ,
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
            boxshow("sửa slidertexthome")
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
