
$('#dangsliderhome').click(function() {
    submitFormDangsliderhome();
});
function submitFormDangsliderhome(){
    //lay gia tri
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
        url:'api/dangsliderhome',
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
