$(document).ready(function() {
    $('.textwith').each(function() {
        var textContainer = $(this);
        var lineHeight = parseInt(textContainer.css('line-height'));
        var maxHeight = lineHeight * 2; // Chiều cao tương ứng với khoảng 2 dòng văn bản

        if (textContainer.height() > maxHeight) {
            var originalText = textContainer.text();
            var truncatedText = originalText.substring(0, originalText.lastIndexOf(' ')) + '...'; // Thêm dấu ba chấm vào cuối từ cuối cùng
            textContainer.text(truncatedText);
            textContainer.css('max-height', lineHeight * 2 + 'px');
        } else {
            textContainer.css('max-height', 'none');
        }
    });
});