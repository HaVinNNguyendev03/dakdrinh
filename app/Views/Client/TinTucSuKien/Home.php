<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<!-- tab -->
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
            <div class="card px-2">
                <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                    alt="Card image">
                <div class="card-content">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
            <div class="card-content col-12 my-4 d-flex flex-wrap">
                <div class="card col-6 px-2 my-2">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                        alt="Card image">
                    <div class="card-content">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                        alt="Card image">
                    <div class="card-content">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                        alt="Card image">
                    <div class="card-content">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card col-6 px-2 my-2">
                    <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                        alt="Card image">
                    <div class="card-content">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <nav class="col-10 mx-auto" aria-label="Page navigation example" style="
    display: flex;
    justify-content: center;
">
  <ul class="pagination mt-5">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">9</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
            </div>
        </div>  
        <!-- 4 ảnh nhỏ và nội dung bên trái -->
        <div class="col-md-4 wapper-newtintucsukien py-4">
        <div class="col-lg-10 col-md-10 new-header-tintucsukien">
               <span class="title">Tin Mới Nhất</span>
            </div>
            <div class="row align-items-start">
                <!-- item 1 -->
                <div class="col-md-12 d-flex flex-row py-2" style="padding-top: 0px !important;">
                    <div class="col-6 tintuc-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2">
                    <div class="col-6 tintuc-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>

                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-6 tintuc-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-6 tintuc-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-6 tintuc-ttsk-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                            class="" alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pagination -->

<?= $this->endSection() ;?>