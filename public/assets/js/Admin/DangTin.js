// $(document).ready(function() {
//   $('#idmenu').change(function() {
//       var label = $('#idmenu option:selected').parent().prop('label');
//       var idmenu = getIdMenuByLabel(label);
//       console.log(idmenu); // In ra idmenu
//   });
  
//   function getIdMenuByLabel(label) {
//       switch(label) {
//           case 'GIỚI THIỆU':
//               return 1;
//           case 'TIN TỨC SỰ KIỆN':
//               return 2;
//           case 'HOẠT ĐỘNG SX-KD':
//               return 3;
//           case 'THÔNG BÁO':
//               return 4;
//           case 'AT-SK-SM':
//               return 5;
//           case 'QUAN HỆ CỔ ĐÔNG':
//               return 6;
//           case 'THƯ VIỆN':
//               return 7;
//           case 'LIÊN HỆ':
//               return 8;
//           default:
//               return null;
//       }
//   }
// });
$(document).ready(function() {
  // Gọi API bằng AJAX  
  $.ajax({
      url: '/api/getDanhmuc',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
          // Lặp qua mỗi nhóm
          data.forEach(function(group) {
              var optgroup = $('<optgroup>').attr('label', group.label);
              
              // Lặp qua mỗi mục trong nhóm
              group.items.forEach(function(item) {
                  var option = $('<option>').attr('value', item.id).text(item.name);
                  optgroup.append(option);
              });
              
              // Thêm nhóm vào dropdown
              $('.select2').append(optgroup);
          });
          
          // Khởi tạo plugin select2
          $('.select2').select2();
      },
      error: function(xhr, status, status) {
          console.error(xhr, status,status);
      }
  });
});
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
document.getElementById("submitButton").addEventListener("click", submitForm);
  function submitForm() {
    //  Lấy giá trị từ các trường input
    var id = document.querySelector('h1[name="id"]').innerText.trim();
  var tentaikhoan = document.querySelector('h1[name="tentaikhoan"]').innerText.trim();
    var tieudebaiviet = document.querySelector('input[name="tieudebaiviet"]').value;
    var idmenu = document.querySelector('select[name="idmenu"]').value;
    var iddanhmuc = document.querySelector('select[name="iddanhmuc"]').value;
    // var tomtatbaiviet = document.querySelector('input[name="tomtatbaiviet"]').value;
    var ngaydang = document.querySelector('input[name="ngaydang"]').value;
    var tinnoibat = document.querySelector('input[name="tinnoibat"]').checked ? 1 : 0;
    var noidungbaiviet = CKEDITOR.instances['content'].getData(); // Lấy nội dung từ CKEditor
    // Lấy giá trị của trường input cho việc tải lên ảnh đại diện
    var anhrthumnailInput = document.querySelector('input[name="anhrthumnail"]');
    var anhrthumnailFile = anhrthumnailInput.files[0]; // Lấy tệp đã chọn
    let tieudeurl = convertUrl(tieudebaiviet);
    // In ra để kiểm tra
    console.log("Tiêu đề bài viết: " + tieudebaiviet);
    console.log("ID danh mục: " + iddanhmuc);
    // console.log("Tóm tắt bài viết: " + tomtatbaiviet);
    console.log("Ngày đăng: " + ngaydang);
    console.log("Nội dung bài viết: " + noidungbaiviet);
    console.log("Ảnh đại diện: " + anhrthumnailFile);
    console.log("tinnoibat : " + tinnoibat);
    console.log("id: " + id);
          // thêm dữ liệu từ form
          let formData = new FormData();
          formData.append('iduser',id);
          formData.append('tieudebaiviet', tieudebaiviet);
          formData.append('iddanhmuc', iddanhmuc);
          // formData.append('tomtatbaiviet', tomtatbaiviet);
          formData.append('ngaydang', ngaydang);
          formData.append('noidungbaiviet', noidungbaiviet);
          formData.append('anhrthumnail', anhrthumnailFile);
          formData.append('tennguoidung',tentaikhoan);
          formData.append('tinnoibat', tinnoibat);
          formData.append('idmenu', idmenu);
          formData.append('tieudeurl', tieudeurl);
          // Gửi Ajax request
          $.ajax({
              type: 'POST',
              url: 'api/addbaiviet', 
              data: formData,
              contentType: false,
              processData: false,
              success: function(response) {
                let text = "Đăng Tin";
                boxshow(text);
              },
              error: function(error) {
                $('#confirmDeleteModal').modal('show');
              }
          });
  }
  function convertUrl(str) {
    str = str.toLowerCase(); // Chuyển thành chữ thường
    var unicode = {
        'a': 'áàảãạăắằẳẵặâấầẩẫậ',
        'd': 'đ',
        'e': 'éèẻẽẹêếềểễệ',
        'i': 'íìỉĩị',
        'o': 'óòỏõọôốồổỗộơớờởỡợ',
        'u': 'úùủũụưứừửữự',
        'y': 'ýỳỷỹỵ'
    };

    for (var nonUnicode in unicode) {
        if (unicode.hasOwnProperty(nonUnicode)) {
            var uni = unicode[nonUnicode];
            var regex = new RegExp("[" + uni + "]", "gu");
            str = str.replace(regex, nonUnicode);
        }
    }

    return str.replace(/\s+/g, '-'); // Thay thế dấu cách bằng dấu "-"
}
  function boxshow(params) {
   
    const modalHtml = `
    <div class="modal fade" id="boxshow" tabindex="-1" aria-labelledby="boxshowLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="boxshowLabel">Thông Báo ${params}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Đã ${params}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
    `;
    // Chèn modal vào body của trang
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    // Hiển thị modal
    $('#boxshow').modal('show');
}
