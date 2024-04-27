$(document).ready(function() {
    // Xử lý sự kiện khi click vào nút "Xóa"
    $('.danhmuc-xoa').click(function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút "Xóa"

        var iddanhmuc = $(this).data('iddanhmuc'); // Lấy id bài viết từ thuộc tính data-idbaiviet

        // Hiển thị modal xác nhận xóa
        $('#confirmDeleteModal').modal('show');

        // Xử lý sự kiện khi click vào nút "Xóa" trong modal xác nhận
        $('#confirmDeleteBtn').click(function() {
            $.ajax({
                type: 'DELETE',
                url: '/api/xoadanhmuc/' + iddanhmuc, // Đường dẫn đến phương thức xóa bài viết trong controller
                success: function(response) {
                    if (response.success) {
                        alert('Xóa thành công!');
                        location.reload();
                    } else {
                        alert('Xóa thất bại!');
                        // Xử lý khi xóa không thành công
                    }
                    $('#confirmDeleteModal').modal('hide'); // Ẩn modal sau khi xử lý
                },
                error: function(error) {
                    console.log('Lỗi Ajax: ', error);
                    $('#confirmDeleteModal').modal('hide'); // Ẩn modal nếu có lỗi xảy ra
                }
            });
        });
    });
});