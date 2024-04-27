<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-sm-10 mx-auto row-pagedetail my-3">
                <div class="col-lg-8 content">
                    <h3 class="pagedetail-title"><?= $baiviet['tieudethongtinduan'] ?></h3>
                    <div class="pagedetail-header my-4">
                    <?= $baiviet['tieudethongtinduan'] ?>
                        </div>
                    <div class="pagedetail-content">
                    <?= $baiviet['noidungthongtinduan'] ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 wapper-newtintucsukien py-4">
        <div class="col-lg-12 col-md-10 new-header-tintucsukien">
            <span class="title">Tin Mới Nhất</span>
        </div>
        <div class="row align-items-start m-0">
            <?php foreach ($baivietmoinhat as $bv): ?>
                <a href="<?= base_url('bai-viet/' . $bv->tieudeurl . '/' . $bv->idbaiviet) ?>">
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
            <?= $this->endSection() ;?>