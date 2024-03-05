<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<!-- Slider main container -->
<!-- Swiper & Photoswipe-->
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
<div class="header d-flex flex-column align-items-center">
  <h1 class="display-6 mt-3 mb-0">lightGallery</h1>
  <p class="lead mt-2 mb-4">
 Bootstrap is the most popular CSS Framework for developing responsive and mobile-first websites. Here is the demo adding lightBox gallery support for Bootstrap video carousel.


  </p>
  <a class="btn mb-5 btn-outline-primary" href="https://github.com/sachinchoolur/lightGallery" target="_blank">View on GitHub</a>
</div>
<div id="bootstrap-gallery-container" class="carousel slide"  data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#bootstrap-gallery-container" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#bootstrap-gallery-container" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#bootstrap-gallery-container" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a
        data-lg-size="1600-1144"
        class="lg-item"
        data-src="https://images.unsplash.com/photo-1476842384041-a57a4f124e2e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80"
    >
        <img
            class="img-responsive"
            src="https://images.unsplash.com/photo-1476842384041-a57a4f124e2e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1200&q=80"
        />
    </a>
    </div>
    <div class="carousel-item">
         <a
        data-lg-size="1600-1067"
        class="lg-item"
        data-src="https://images.unsplash.com/photo-1505820013142-f86a3439c5b2?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80"
    >
        <img
            class="img-responsive"
            src="https://images.unsplash.com/photo-1505820013142-f86a3439c5b2?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1200&q=80"
        />
    </a>
    </div>
    <div class="carousel-item">
         <a
        data-lg-size="1600-1067"
        class="lg-item"
        data-src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80"
    >
        <img
            class="img-responsive"
            src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1200&q=80"
        />
     </a>
    </div>
 

  </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#bootstrap-gallery-container" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bootstrap-gallery-container" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?= $this->endSection() ;?>