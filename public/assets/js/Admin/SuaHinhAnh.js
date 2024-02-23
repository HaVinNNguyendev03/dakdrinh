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
$(document).ready(function(){
    let idhinhanh = $('#idthuvienanh').text();
    $.ajax({
        type: 'GET',
        url: 'api/gethinhanh/' + idhinhanh,
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="ngaydanganh"]').val(response.ngaydanganh);
            $('input[name="danhmucnamanh"]').val(response.danhmucnamanh);
            $('input[name="chuthichanh"]').val(response.chuthichanh);
            CKEDITOR.instances['content'].setData(response.hinhanh); // Đặt nội dung cho CKEditor
            // In ra để kiểm tra
            console.log("Dữ liệu bài viết: ", response);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    })
});
$('#suahinhanh').click(function() {
    submitFormEditHinhAnh();
});
function submitFormEditHinhAnh(){
    let idhinhanh = $('#idthuvienanh').text();
    //lay gia tri
    let ngaydanganh = document.querySelector('#ngaydanganh').value;
    let danhmucnamanh = document.querySelector('#danhmucnamanh').value;
    let chuthichanh = document.querySelector('#chuthichanh').value;
    let hinhanh = CKEDITOR.instances['content'].getData();
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('ngaydanganh',ngaydanganh);
    formdata.append('danhmucnamanh',danhmucnamanh);
    formdata.append('chuthichanh',chuthichanh);
    formdata.append('hinhanh',hinhanh);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/edithinhanh/' + idhinhanh ,
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
