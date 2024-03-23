<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-12 col-md-10 mx-auto">
        <div class="wapper-content-title">Giới Thiệu</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-md-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/gioithieuchung" data-toggle="tab">Giới Thiệu Chung</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/banlanhdao" data-toggle="tab">Ban Lãnh Đạo</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/duan" data-toggle="tab">Dự Án</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/thongtindoanhnghiep" data-toggle="tab">Thông Tin Doanh
                        Nghiệp</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/nganhnghekinhdoanh" data-toggle="tab">Ngành Nghề Kinh Doanh</a>
                </li>
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/lichsu" data-toggle="tab">Lịch Sử Hình Thành Và Phát Triển</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-12 col-xl-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row g-0 g-xl-3 col-12 align-items-start">
        <!-- Ảnh lớn bên trái -->
        <div class="col-sm-12 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row col-12">
        <!-- Ảnh lớn bên trái -->
        <div class="col-md-8 " style="height: 100%;">
            <div class="card-content col-12 my-4 d-flex flex-wrap">
                <?php foreach ($baiviet as $item) : ?>
                    <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?= $item['anhrthumnail'] ?>"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="<?= base_url('du-an/' . $item['idthongtinduan']) ?>" class="card-title"><?= $item['tieudethongtinduan'] ?></a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <!-- Tiêu đề chuyên mục và nội dung mô tả ngắn -->
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
<?= $this->endSection() ;?>