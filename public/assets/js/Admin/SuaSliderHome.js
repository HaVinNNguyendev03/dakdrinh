
$(document).ready(function () {
    let idsliderhome = $('#idsliderhome').text(); // Lấy nội dung của thẻ có id là "idurl"
    $.ajax({
        type: 'GET',
        url: 'api/getsliderhome/' + idsliderhome, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="chuthichanhsliderhome"]').val(response.chuthichanhsliderhome);
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    });
});
$('#dangsliderhome').click(function() {
    submitFormUpdateSliderhome();
});
    function submitFormUpdateSliderhome() {
        let idsliderhome = $('#idsliderhome').text(); 
        let hinhanhINPUT = document.querySelector('input[name="anhsliderhome"]');
    let chuthichanh = document.querySelector('input[name="chuthichanhsliderhome"]').value;
    let hinhanh = hinhanhINPUT.files[0];
    //them du lieu vao form
    let formdata = new FormData();
    formdata.append('chuthichanhsliderhome',chuthichanh);
    formdata.append('anhsliderhome',hinhanh);
    //gui ajax
    $.ajax({
        type: 'POST',
        url:'api/editsliderhome/' + idsliderhome,
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
    
