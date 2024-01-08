<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-10 mx-auto">
        <div class="wapper-content-title">Giới Thiệu</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/gioithieuchung" data-toggle="tab">Giới Thiệu Chung</a>
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
<div class="col-lg-10 col-md-10 new-header-tintuc mx-auto">
    <span class="title">Tin Mới Nhất</span>
</div>
<div class="col-sm-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row col-12">
        <!-- Ảnh lớn bên trái -->
        <div class="col-md-8 " style="height: 100%;">
            <div class="card-content col-12 my-4 d-flex flex-wrap">
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2" style="max-height: 200px;overflow: hidden;">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/duan.jpg"
                        alt="Card image">
                    <div class="duan-title">
                        <a href="#" class="card-title">NHIỆT KHÍ NHƠN TRẠCH</a>
                    </div>
                </div>
            </div>
            <!-- Tiêu đề chuyên mục và nội dung mô tả ngắn -->
        </div>
        <!-- 4 ảnh nhỏ và nội dung bên trái -->
        <div class="col-md-4 wapper-newtintucsukien py-4">
            <div class="col-lg-12 col-md-10 new-header-tintucsukien">
                <span class="title">Tin Mới Nhất</span>
            </div>
            <div class="row align-items-start">
                <!-- item 1 -->
                <div class="col-md-12 d-flex flex-row py-2" style="padding-top: 0px !important;">
                    <div class="col-5 duan-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-7 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2">
                    <div class="col-5 duan-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-7 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>

                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-5 duan-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-7 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-5 duan-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-7 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ;?>