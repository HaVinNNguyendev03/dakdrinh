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
                    <a href="<?php echo base_url() ?>gioithieu/banlanhdao" data-toggle="tab">Thư Viện Video</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-12 col-md-10 mx-auto" style="align-items: flex-start;">
            <?php foreach ($thuvienvideo as $item): ?>
                <div class="col-md-4 px-2 my-2">
                    <div class="card"
                        style="max-height: 300px;height: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                        <iframe class="col-12 mx-auto my-1" width="auto" height="300" src="<?= $item['linkvideo'] ?>"
                            frameborder="0" allowfullscreen title="YouTube Video"></iframe>
                    </div>
                    <div class="card-body p-0" style="flex-grow: 1; overflow: hidden;">
                        <p class="card-title">
                            <?= $item['tenvideo'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
<?= $this->endSection(); ?>