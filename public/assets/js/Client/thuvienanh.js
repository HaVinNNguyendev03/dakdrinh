
import lightGallery from "https://cdn.skypack.dev/lightgallery@2.4.0";

import lgZoom from "https://cdn.skypack.dev/lightgallery@2.4.0/plugins/zoom";
import lgThumbnail from "https://cdn.skypack.dev/lightgallery@2.4.0/plugins/thumbnail";
$(document.querySelector("#thuvienanhslider")).ready(function() {
$.ajax({
    type: 'GET',
    url: '/api/getthuvienanh',
    dataType: 'json',
    contentType: false,
    processData: false,
    success: function (response) {
        console.log('Dữ liệu:', response.data);
        var keys = Object.keys(response.data);
        let numberOfArrays = keys.length;
         // Tạo thẻ div
        for (var i = 1; i <= numberOfArrays; i++) {
            let box = document.createElement("div");
            box.className = "col-5 mx-auto container-block";
            box.id = "thuvienanhbox" + i;
            document.getElementById("thuvienanhslider").appendChild(box);
            let div = document.createElement("div");
            div.id = "inline-gallery-container" + i;
            div.className = "inline-gallery-container";
            document.getElementById("thuvienanhbox" + i).appendChild(div);
            var currentArrayData = response.data[keys[i - 1]];
            for (var j = 0; j < 1; j++) {
                var currentItemData = currentArrayData[j];
                var titleDiv = document.createElement("div");
                titleDiv.className = "container-top";
                titleDiv.innerHTML = `<h1>Danh Mục Ảnh Năm ${currentArrayData[0].danhmucnamanh}</h1>`;

                // Thêm thẻ div phần tựa đề vào DOM
                document.getElementById("thuvienanhbox" + i).appendChild(titleDiv);
            }
        }

        // Lặp qua số lượng mảng con
        for (var i = 1; i <= numberOfArrays; i++) {
            var currentArrayData = response.data[keys[i - 1]];
            // Tạo id của thẻ div "inline-gallery-container" tương ứng
            var id = "inline-gallery-container" + i;
            // Lấy thẻ div có id là id
            var $lgContainer = document.getElementById(id);
            var dynamicEl = [];
            for (var j = 0; j < currentArrayData.length; j++) {
                var currentItemData = currentArrayData[j];
                // Tạo subHtml từ trường ngaydanganh
                var subHtml = `<div class="lightGallery-captions">
                        <h4>Ngày đăng ảnh: ${currentItemData.ngaydanganh}</h4>
                        <p>Năm  ${currentItemData.danhmucnamanh}</p>
                    </div>`;
                let src = `${currentItemData.hinhanh}`;
                // Thêm đối tượng dynamicEl vào mảng dynamicEl
                dynamicEl.push({
                    src: src,
                    responsive: "",
                    thumb: "",
                    subHtml: subHtml
                });
            }
            // Áp dụng lightGallery cho thẻ div hiện tại
            const inlineGallery = lightGallery($lgContainer, {
                container: $lgContainer,
                dynamic: true,
                hash: false,
                closable: false,
                showMaximizeIcon: true,
                appendSubHtmlTo: ".lg-item",
                slideDelay: 400,
                plugins: [lgZoom, lgThumbnail],
                dynamicEl: dynamicEl,
                thumbWidth: 60,
                thumbHeight: "40px",
                thumbMargin: 4
            });

            // Mở gallery sau một khoảng thời gian nhất định (optional)
            setTimeout(() => {
                inlineGallery.openGallery();
            }, 200);
        }

    },
    error: function (xhr, status, error) {
        console.log('Lỗi Ajax: ', xhr.responseText);
    }
});
});