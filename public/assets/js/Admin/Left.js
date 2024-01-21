$(document).ready(function() {
    $('#left-sub').on('click', function() {
      if ($(this).hasClass('collapse')) {
        // Nếu có class 'collage', loại bỏ nó
        $(this).removeClass('collapse');
      } else {
        // Nếu không có class 'collage', thêm nó
        $(this).addClass('collapse');
      }
    });
  });