$('#dangslogan').click(function () {
    submitFormSlogan();
});
$(function () {
    CKEDITOR.replace("noidungslogan", {
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

function submitFormSlogan() {
    //  Lấy giá trị từ các trường input
   
    var noidungslogan = CKEDITOR.instances['noidungslogan'].getData(); // Lấy nội dung từ CKEditor
    // thêm dữ liệu từ form
    let formData = new FormData();
    formData.append('noidungslogan', noidungslogan);
    // Gửi Ajax request
    $.ajax({
        type: 'POST',
        url: 'api/dangslogan',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            alert('đã gửi');
            // Xử lý kết quả nếu cần
            console.log(response);
        },
        error: function (error) {
            console.log('Lỗi Ajax: ', error);
        }
    });
}

