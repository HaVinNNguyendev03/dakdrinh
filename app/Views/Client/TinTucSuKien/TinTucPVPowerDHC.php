<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-12 wapper px-2 pt-5">
    <div class="wapper-content px-2 col-10 mx-auto">
        <div class="wapper-content-title">TIN TỨC – SỰ KIỆN</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>tintuc/hoatdongcongdong" data-toggle="tab">Hoat Dong Cong Dong</a>
                </li>
                <li class="mx-4 my-4">
                    <a href="<?php echo base_url() ?>tintuc/hoatdongnganhdien" data-toggle="tab">Hoat Dong Nganh
                        Dien</a>
                </li>
                <li class="mx-4 my-4">
                    <a href="<?php echo base_url() ?>tintuc/tintucpvpower" data-toggle="tab">Tin Tuc PVPower</a>
                </li>
                <li class="my-4">
                    <a href="<?php echo base_url() ?>tintuc/tintucpvpowerdhc" data-toggle="tab">Tin Tuc PVPowerDHC</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end tab -->
<!-- content -->
<div class="col-sm-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row col-12 align-items-start">
        <!-- Ảnh lớn bên trái -->
        <div class="col-md-8" style="height: 100%;">
            <?php if (!empty($baiviet)): ?>
                <a class="card px-2 " href="<?= base_url('bai-viet/' . $baiviet[0]['idbaiviet']) ?>">
                    <img style="max-height: 500px;" class="tintuc-imglon card-img" src="<?= $baiviet[0]['anhrthumnail'] ?>"
                        alt="Card image">
                    <div class="card-content">
                        <h5 class="card-title title-baiviet">
                            <?= $baiviet[0]['tieudebaiviet'] ?>
                        </h5>
                        <p class="card-text content-baiviet">
                            <?= $baiviet[0]['tomtatbaiviet'] ?>
                        </p>
                        <p class="card-text date-baiviet">
                            Ngày Đăng Bài:
                            <?= $baiviet[0]['ngaydang'] ?>
                        </p>
                    </div>
                </a>
            <?php endif; ?>
            <div class="card-content col-12 my-4 d-flex flex-wrap">
                <?php if (!empty($baiviet)): ?>
                    <?php foreach ($baiviet as $bv): ?>
                        <a class="card col-6 px-2 my-2" href="<?= base_url('bai-viet/' . $bv['idbaiviet']) ?>">
                            <img style="height: 259px;" class="tintuc-imglon card-img" src="<?= $bv['anhrthumnail'] ?>" alt="Card image">
                            <div class="card-content">
                                <h5 class="card-title title-baiviet">
                                    <?= $bv['tieudebaiviet'] ?>
                                </h5>
                                <p class="card-text content-baiviet">
                                    <?= $bv['tomtatbaiviet'] ?>
                                </p>
                                <p class="card-text date-baiviet">Ngày Đăng Bài:
                                    <?= $bv['ngaydang'] ?>
                                </p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?= $pager->makeLinks($currentPage, $perPage, $total, 'pagination') ?>
            </div>
        </div>
        <!-- 4 ảnh nhỏ và nội dung bên trái -->
        <div class="col-md-4 wapper-newtintucsukien py-4">
            <div class="col-lg-12 col-md-10 new-header-tintucsukien">
                <span class="title">Tin Mới Nhất</span>
            </div>
            <div class="row align-items-start">

                <!-- item 1 -->
                <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                    <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy
                            bay</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                    <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy
                            bay</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                    <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy
                            bay</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                    <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy
                            bay</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                    <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy
                            bay</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pagination --><?= $this->endSection() ;?>