
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
// Gửi yêu cầu Ajax để lấy thông tin từ session

  function submitForm() {
    //  Lấy giá trị từ các trường input
    var id = document.querySelector('h1[name="id"]').innerText;
  var tentaikhoan = document.querySelector('h1[name="tentaikhoan"]').innerText;
    var tieudebaiviet = document.querySelector('input[name="tieudebaiviet"]').value;
    var iddanhmuc = document.querySelector('select[name="iddanhmuc"]').value;
    var tomtatbaiviet = document.querySelector('input[name="tomtatbaiviet"]').value;
    var ngaydang = document.querySelector('input[name="ngaydang"]').value;
    var noidungbaiviet = CKEDITOR.instances['content'].getData(); // Lấy nội dung từ CKEditor
    // Lấy giá trị của trường input cho việc tải lên ảnh đại diện
    var anhrthumnailInput = document.querySelector('input[name="anhrthumnail"]');
    var anhrthumnailFile = anhrthumnailInput.files[0]; // Lấy tệp đã chọn
    
    // In ra để kiểm tra
    console.log("Tiêu đề bài viết: " + tieudebaiviet);
    console.log("ID danh mục: " + iddanhmuc);
    console.log("Tóm tắt bài viết: " + tomtatbaiviet);
    console.log("Ngày đăng: " + ngaydang);
    console.log("Nội dung bài viết: " + noidungbaiviet);
    console.log("Ảnh đại diện: " + anhrthumnailFile);

          // thêm dữ liệu từ form
          let formData = new FormData();
          formData.append('iduser',id);
          formData.append('tieudebaiviet', tieudebaiviet);
          formData.append('iddanhmuc', iddanhmuc);
          formData.append('tomtatbaiviet', tomtatbaiviet);
          formData.append('ngaydang', ngaydang);
          formData.append('noidungbaiviet', noidungbaiviet);
          formData.append('anhrthumnail', anhrthumnailFile);
          formData.append('tennguoidung',tentaikhoan);
          // Gửi Ajax request
          $.ajax({
              type: 'POST',
              url: 'api/addbaiviet', // Thay thế ĐƯỜNG_DẪN_CONTROLLER bằng đường dẫn đến controller của bạn
              data: formData,
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
          });
  }

