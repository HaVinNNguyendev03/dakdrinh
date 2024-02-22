$(function () {
    CKEDITOR.replace("content", {
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
$('#danghinhanh').click(function() {
    submitFormDangHinhAnh();
});
function submitFormDangHinhAnh(){
    //lay gia tri
    let danhmucnamanh = document.querySelector('input[name="danhmucnamanh"]').value;
    let ngaydanganh = document.querySelector('input[name="ngaydanganh"]').value;
    let hinhanh =  CKEDITOR.instances['content'].getData();
    let chuthichanh = document.querySelector('input[name="chuthichanh"]').value;
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
            alert('đã gửi');
            // Xử lý kết quả nếu cần
            console.log(response);
        },
        error: function(error) {
            console.log('Lỗi Ajax: ', error);
        }
    })
}
