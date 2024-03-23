<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<!-- tab -->
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-12 col-md-10 mx-auto">
        <div class="wapper-content-title">Hoạt Động Sản Xuất Kinh Doanh</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-md-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>hdsx/chienluocmuctieu" data-toggle="tab">Chiến Lược Mục Tiêu</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>hdsx/tinhhinhsx" data-toggle="tab">Tình Hình Sản Xuất Kinh Doanh</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>hdsx/kehoachsx" data-toggle="tab">Kế Hoạch Sản Xuất Kinh Doanh</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end tab -->
<!-- content -->
<div class="col-12 col-xl-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row g-0 g-xl-3 col-12 align-items-start">
        <!-- Ảnh lớn bên trái -->
        <div class="col-12 col-lg-8">
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
                            <img class="tintuc-imglon card-img" src="<?= $bv['anhrthumnail'] ?>" alt="Card image">
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
        <div class="col-12 col-lg-4 wapper-newtintucsukien py-4">
            <div class="col-lg-12 col-md-10 new-header-tintucsukien">
                <span class="title">Tin Mới Nhất</span>
            </div>
            <div class="row align-items-start m-0">
                <?php foreach ($baivietmoinhat as $bv): ?>
                    <a href="<?= base_url('bai-viet/' . $bv->idbaiviet) ?>">
                        <div class="col-md-12 d-flex flex-row align-items-center py-2" style="padding-top: 0px !important;">
                            <div class="col-4 pagedetail-componet-img"><img src="<?= $bv->anhrthumnail; ?>" class=""
                                    alt="Thumbnail"></div>
                            <div class="col-8 m-2">
                                <h5 class="card-title-pagedetail text">
                                    <?= $bv->tieudebaiviet; ?>
                                </h5>
                                <p class="card-text">Ngày Tạo
                                    <?= $bv->ngaytao; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- pagination -->

<?= $this->endSection() ;?>