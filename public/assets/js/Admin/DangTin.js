$(document).ready(function() {
  var quill = new Quill("#editor", {
    theme: "snow",
    modules: {
      toolbar: [
        // Các nút cơ bản
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        ['link', 'image', 'video'],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'align': [] }],
  
        // Các tùy chọn mở rộng
        ['blockquote', 'code-block'],
        [{ 'indent': '-1' }, { 'indent': '+1' }],
        [{ 'color': [] }, { 'background': [] }],
        ['clean'],
      ],
      // Module cho việc chèn hình ảnh
      imageUploader: {
        upload: file => {
          return yourImageUploadFunction(file);
        },
      },
    },
  });
var delta = quill.getContents();
console.log(delta);
// Hàm xử lý tải lên hình ảnh
function yourImageUploadFunction(file) {
  return new Promise((resolve, reject) => {
    // Tạo một đối tượng FileReader để đọc file hình ảnh
    const reader = new FileReader();

    reader.onload = function (event) {
      // Tạo một hình ảnh mới để thực hiện các thay đổi
      const img = new Image();
      img.src = event.target.result;

      // Thực hiện các thay đổi (chỉnh kích thước, thêm ghi chú, ...)
      img.onload = function () {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');

        // Chuyển đổi canvas thành dạng base64 để tải lên
        const editedImageData = canvas.toDataURL('image/jpeg');

        // Trả về URL của hình ảnh đã chỉnh sửa
        resolve(editedImageData);
      };
    };

    // Đọc file hình ảnh
    reader.readAsDataURL(file);
  });
};
$('#dangbai').on('click', function() {
  submitForm();
})
function submitForm() { 
 
}
    // Lấy nội dung từ trình soạn thảo Quill

    var content = quill.getContents();
    var jsoncontent = JSON.stringify(content);
    var iduser =  "<?php echo json_encode($session->get('iduser')); ?>";
    var tennguoidung = "<?php echo json_encode($session->get('iduser')); ?>";
    console.log(iduser);
    //call api
    // $ajax({
    //   type: 'POST',
    //   url : 'api/admin/addbaiviet',
    //   data: {
    //     'iddanhmuc': $('select[name="iddanhmuc"]').val(),
    //     'iduser':
    //     'tieudebaiviet': $('input[name="tieudebaiviet"]').val(),
    //     'tomtatbaiviet': $('input[name="tomtatbaiviet"]').val(),
    //     'anhrthumnail': $('input[name="anhrthumnail"]').val(),
    //     'noidungbaiviet': jsoncontent,
    //     'ngaydang': $('input[name="ngaydang"]').val(),
    //   },
    //   success: function(response) {
    //     // Xử lý phản hồi từ server (nếu cần)
    //     console.log(response);  
    // },
    // error: function(error) {
    //     // Xử lý lỗi (nếu có)
    //     console.log(error);
    // }
    // });

});
