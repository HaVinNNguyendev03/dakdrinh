
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
            alert('đã gửi');
            // Xử lý kết quả nếu cần
            console.log(response);
        },
        error: function(error) {
            console.log('Lỗi Ajax: ', error);
        }
    })
}
