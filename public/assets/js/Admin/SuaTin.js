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

$(document).ready(function () {
    let idbaiviet = $('#idurl').text(); // Lấy nội dung của thẻ có id là "idurl"
    $.ajax({
        type: 'GET',
        url: 'api/getbaiviet/' + idbaiviet, // Thêm ID vào URL
        success: function (response) {
            // Chèn dữ liệu vào các trường input
            $('input[name="tieudebaiviet"]').val(response.tieudebaiviet);
            $('select[name="iddanhmuc"]').val(response.iddanhmuc);
            $('select[name="idmenu"]').val(response.idmenu);
            // $('input[name="tomtatbaiviet"]').val(response.tomtatbaiviet);
            $('input[name="ngaydang"]').val(response.ngaydang);
            $('input[name="tinnoibat"]').prop('checked', response.tinnoibat);
            CKEDITOR.instances['content'].setData(response.noidungbaiviet); // Đặt nội dung cho CKEditor
        },
        error: function (error) {
            console.log('Lỗi Ajax khi lấy dữ liệu bài viết: ', error);
        }
    });
});
$('#dangbai').click(function() {
    submitFormUpdate();
});
    function submitFormUpdate() {
        var idbaiviet = document.getElementById('idurl').innerText; // Lấy ID bài viết từ thẻ có id là 'idurl'
        // Lấy giá trị từ các trường input
        var tieudebaiviet = document.querySelector('input[name="tieudebaiviet"]').value;
        var iddanhmuc = document.querySelector('select[name="iddanhmuc"]').value;
        var idmenu = document.querySelector('select[name="idmenu"]').value;
        // var tomtatbaiviet = document.querySelector('input[name="tomtatbaiviet"]').value;
        var ngaydang = document.querySelector('input[name="ngaydang"]').value;
        var tinnoibat = document.querySelector('input[name="tinnoibat"]').checked ? 1 : 0;
        var noidungbaiviet = CKEDITOR.instances['content'].getData(); // Lấy nội dung từ CKEditor
        var anhrthumnailInput = document.querySelector('input[name="anhrthumnail"]');
        var anhrthumnailFile = anhrthumnailInput.files[0]; 
        // Tạo đối tượng FormData và thêm dữ liệu vào đó
        var formData = new FormData();
        formData.append('tieudebaiviet', tieudebaiviet);
        formData.append('iddanhmuc', iddanhmuc);
        // formData.append('tomtatbaiviet', tomtatbaiviet);
        formData.append('ngaydang', ngaydang);
        formData.append('noidungbaiviet', noidungbaiviet);
        formData.append('anhrthumnail', anhrthumnailFile);
        formData.append('tinnoibat', tinnoibat);
        formData.append('idmenu', idmenu);
        // Gửi Ajax request
        $.ajax({
            type: 'POST',
            url: 'api/updateBaiviet/' + idbaiviet, // Đường dẫn đến phương thức cập nhật bài viết trong controller
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status === 'success') {
                   boxshow("sửa tin")
                    
                } else {
                    alert('Cập nhật thất bại!');
                    // Xử lý khi cập nhật không thành công
                }
            },
            error: function (error) {
                console.log('Lỗi Ajax: ', error);
            }
        });
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
