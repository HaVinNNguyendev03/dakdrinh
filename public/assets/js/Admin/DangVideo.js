
$('#dangvideo').click(function() {
    submitFormDangVideo();
});
function submitFormDangVideo(){
    //lay gia tri
    let tenvideo = document.querySelector('input[name="tenvideo"]').value;
    let linkvideo = document.querySelector('input[name="linkvideo"]').value;
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('tenvideo',tenvideo);
    formdata.append('linkvideo',linkvideo);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/dangvideo',
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
