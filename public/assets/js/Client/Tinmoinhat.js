$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: 'api/baivietmoinhat',
        dataType: 'json',
        success: function(response) {
            let html = '';
            console.log(response);
            response.forEach(function(baiviet) {
                html += '<div class="col-md-12 d-flex flex-row align-items-center py-2" style="padding-top: 0px !important;">';
            html += '<div class="col-4 pagedetail-componet-img"><img src="' + baiviet.anhrthumnail + '" class="" alt="Thumbnail"></div>';
            html += '<div class="col-8 m-2">';
            html += '<h5 class="card-title-pagedetail">' + baiviet.tieudebaiviet + '</h5>';
            html += '<p class="card-text">Last updated ' + baiviet.ngaytao + '</p>';
            html += '</div></div>';
            });
            $('#latest-posts-container').html(html);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    })
})