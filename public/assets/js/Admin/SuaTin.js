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

$(document).ready(function () {
    let idbaiviet = $('#idurl').text(); // Lấy nội dung của thẻ có id là "idurl"
    $.ajax({
        type: 'GET',
        url: 'api/getbaiviet/' + idbaiviet, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="tieudebaiviet"]').val(response.tieudebaiviet);
            $('select[name="iddanhmuc"]').val(response.iddanhmuc);
            $('input[name="tomtatbaiviet"]').val(response.tomtatbaiviet);
            $('input[name="ngaydang"]').val(response.ngaydang);
            CKEDITOR.instances['content'].setData(response.noidungbaiviet); // Đặt nội dung cho CKEditor
            // In ra để kiểm tra
            console.log("Dữ liệu bài viết: ", response);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    });
    
});
$('#dangbai').click(function() {
    submitFormUpdate();
});
    function submitFormUpdate() {
        var idbaiviet = document.getElementById('idurl').innerText; // Lấy ID bài viết từ thẻ có id là 'idurl'

        // Lấy giá trị từ các trường input
        var tieudebaiviet = document.querySelector('input[name="tieudebaiviet"]').value;
        var iddanhmuc = document.querySelector('select[name="iddanhmuc"]').value;
        var tomtatbaiviet = document.querySelector('input[name="tomtatbaiviet"]').value;
        var ngaydang = document.querySelector('input[name="ngaydang"]').value;
        var noidungbaiviet = CKEDITOR.instances['content'].getData(); // Lấy nội dung từ CKEditor

        // Tạo đối tượng FormData và thêm dữ liệu vào đó
        var formData = new FormData();
        formData.append('tieudebaiviet', tieudebaiviet);
        formData.append('iddanhmuc', iddanhmuc);
        formData.append('tomtatbaiviet', tomtatbaiviet);
        formData.append('ngaydang', ngaydang);
        formData.append('noidungbaiviet', noidungbaiviet);

        // Gửi Ajax request
        $.ajax({
            type: 'POST',
            url: 'api/updateBaiviet/' + idbaiviet, // Đường dẫn đến phương thức cập nhật bài viết trong controller
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    alert('Cập nhật thành công!');
                    // Redirect hoặc làm gì đó khi cập nhật thành công
                } else {
                    alert('Cập nhật thất bại!');
                    // Xử lý khi cập nhật không thành công
                }
            },
            error: function (error) {
                console.log('Lỗi Ajax: ', error);
            }
        });
    }
    
