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
    <div class="wapper-content px-2 col-12 col-md-10 mx-auto">
        <?php foreach ($menu as $mn) : ?>
            <div class="wapper-content-title"><?= $mn['tenmenu'] ?></div> 
        <?php endforeach ?>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-md-flex">
                <?php foreach ($danhmuc as $item) : ?>
                <li class="my-4">
                    <a href="<?= base_url() . 'menu/' . $item['urldanhmuc'] . '/' . $item['iddanhmuc']; ?>" data-toggle="tab"><?= $item['tendanhmuc'] ?></a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
<div id="thuvienanhslider" class="col-12 mx-auto my-4 d-flex flex-wrap"></div>
<?= $this->endSection(); ?>