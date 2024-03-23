
$(document).ready(function(){
    let idvideo = $('#idvideo').text();
    $.ajax({
        type: 'GET',
        url: 'api/getvideo/' + idvideo,
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="tenvideo"]').val(response.tenvideo);
            $('input[name="linkvideo"]').val(response.linkvideo);
            // In ra để kiểm tra
            console.log("Dữ liệu bài viết: ", response);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    })
});
$('#editvideo').click(function() {
    submitFormEditVideo();
});
function submitFormEditVideo(){
    let idvideo = $('#idvideo').text();
    //lay gia tri
    let tenvideo = document.querySelector('#tenvideo').value;
    let linkvideo = document.querySelector('#linkvideo').value;
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('tenvideo',tenvideo);
    formdata.append('linkvideo',linkvideo);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/editvideo/' + idvideo ,
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
