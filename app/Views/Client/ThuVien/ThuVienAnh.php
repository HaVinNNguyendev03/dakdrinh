<?= $this->extend('Client/Layout/Base'); ?>
<?= $this->section('DakDrinh'); ?>

<!-- Slider main container -->
<!-- Swiper & Photoswipe-->
    
<style>
    .gallery {
  float: left;
  padding: 12px;
  cursor: pointer;
}
</style>
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-10 mx-auto">
        <div class="wapper-content-title">Thư Viện</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>thuvien/thuvienanh" data-toggle="tab">Thư Viện Ảnh</a>
                </li>
                <li class="mx-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/banlanhdao" data-toggle="tab">Thư Viện Video</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="thuvienanhslider" class="col-12 mx-auto my-4 d-flex flex-wrap"></div>
<?= $this->endSection(); ?>