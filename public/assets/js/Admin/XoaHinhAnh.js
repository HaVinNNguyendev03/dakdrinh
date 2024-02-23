$(document).ready(function() {
    // Xử lý sự kiện khi click vào nút "Xóa"
    $('.Hinhanh-xoa').click(function(event) {
        event.preventDefault();

        var idhinhanh = $(this).data('idthuvienanh'); 

        // Hiển thị modal xác nhận xóa  
        $('#confirmDeleteModal').modal('show');

        // Xử lý sự kiện khi click vào nút "Xóa" trong modal xác nhận
        $('#confirmDeleteBtn').click(function() {
            $.ajax({
                type: 'DELETE',
                url: '/api/deletedhinhanh/' + idhinhanh, 
                success: function(response) {
                    if (response.success) {
                        alert('Xóa thành công!');
                        location.reload();
                    } else {
                        alert('Xóa thất bại!');
                        // Xử lý khi xóa không thành công
                    }
                    $('#confirmDeleteModal').modal('hide'); 
                },
                error: function(error) {
                    console.log('Lỗi Ajax: ', error);
                    $('#confirmDeleteModal').modal('hide'); 
                }
            });
        });
    });
});