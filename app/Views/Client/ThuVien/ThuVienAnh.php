<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>

<!-- Slider main container -->
<!-- Swiper & Photoswipe-->
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-10 mx-auto">
        <div class="wapper-content-title">Thư Viện</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>thuvien/thuvienanh" data-toggle="tab">Thư Viện Ảnh</a>
                </li>
                <li class="mx-4 my-4">  
                    <a href="<?php echo base_url() ?>gioithieu/banlanhdao" data-toggle="tab">Ban Lãnh Đạo</a>
                </li>
                <li class="mx-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/duan" data-toggle="tab">Dự Án</a>
                </li>
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/thongtindoanhnghiep" data-toggle="tab">Thông Tin Doanh
                        Nghiệp</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-10 mx-auto my-4">
    <div class="container d-flex flex-wrap mx-auto justify-content-center">
        <div class="content text-start col-12 my-2">
            <h1>Năm 2024</h1>
            <span>08.08.2024</span>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="content text-start col-12 my-2">
            <h1>Năm 2023</h1>
            <span>08.08.2023</span>
        </div>
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="content text-start col-12 my-2">
            <h1>Năm 2022</h1>
            <span>08.08.2022</span>
        </div>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="content text-start col-12 my-2">
            <h1>Năm 2021</h1>
            <span>08.08.2021</span>
        </div>
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo base_url() ?>assets/img/capcuu.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"
    integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    zoom: {
        toggle: true,
    },
});
var swiper1 = new Swiper(".mySwiper1", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper2 = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper3 = new Swiper(".mySwiper3", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>
<?= $this->endSection() ;?>