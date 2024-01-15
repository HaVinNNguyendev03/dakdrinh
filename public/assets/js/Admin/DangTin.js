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

// Hàm xử lý tải lên hình ảnh
function yourImageUploadFunction(file) {
  // Thực hiện xử lý tải lên và trả về URL của hình ảnh
  // (Cần tùy chỉnh theo hệ thống của bạn)
  return "https://example.com/path/to/uploaded/image.jpg";
}
