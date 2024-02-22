<?= $this->extend('Client/Layout/Base'); ?>
<?= $this->section('DakDrinh'); ?>

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
<div class="col-10 mx-auto my-4 d-flex flex-wrap">
    <?php foreach ($thuvienanh as $danhmucnamanh => $data): ?>
        <div class="col-5 px-4 mx-auto container-block">
            <div class="container-top">
                <h1>Danh Mục Ảnh Năm <?php echo $danhmucnamanh; ?></h1>
            </div>
            <div id="carouselExampleCaptions_<?php echo $danhmucnamanh; ?>" class="carousel slide">
                <div class="carousel-inner">
                    <?php foreach ($data as $key => $item): ?>
                        <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>">
                            <?php echo $item['hinhanh'] ?>
                            <div class="carousel-caption d-none d-md-block">
                                <p><?php echo $item['chuthichanh']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions_<?php echo $danhmucnamanh; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions_<?php echo $danhmucnamanh; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"
    integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?= $this->endSection(); ?>