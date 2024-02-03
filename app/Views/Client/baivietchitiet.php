<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-sm-10 mx-auto row-pagedetail my-3">
                <div class="col-lg-8 content">
                    <h3 class="pagedetail-title"><?= $baiviet['tieudebaiviet'] ?></h3>
                    <div class="pagedetail-day">
                        <div class="text-capitalize">Ngay Dang<?= date('l, d F Y H:i', strtotime($baiviet['ngaydang'])) ?></div>
                    </div>
                    <div class="pagedetail-header my-4">
                    <?= $baiviet['tomtatbaiviet'] ?>
                        </div>
                    <div class="pagedetail-content">
                    <?= $baiviet['noidungbaiviet'] ?>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div class="col-lg-10 col-md-10 header-pagedetail mx-auto mb-2">
                       <span class="title">Tin Mới Nhất</span>
                    </div>
                    <div class="row" style="margin: 0px 25px 0px;">
                            <!-- item 1 -->
                            <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                                <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy bay</h5>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                                <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy bay</h5>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                                <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy bay</h5>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                                <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy bay</h5>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row align-items-center py-2 " style="padding-top: 0px !important;">
                                <div class="col-4 pagedetail-componet-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title-pagedetail">BSR tối ưu công suất phân xưởng, đẩy mạnh sản xuất xăng máy bay</h5>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <?= $this->endSection() ;?>