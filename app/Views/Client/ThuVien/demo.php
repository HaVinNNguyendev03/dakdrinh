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
<!-- <div class="container d-flex flex-wrap mx-auto justify-content-center"> -->
<div class="col-3 m-4 swiper mySwiper" id="my-gallery">
    <ul class="swiper-wrapper" itemscope itemtype="http://schema.org/ImageGallery">
        <!-- Slides -->
        <li id="slide_1" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/911/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/911/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 1 description" />
            </a>
        </li>
        <li id="slide_2" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/777/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/777/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 2 description" />
            </a>
        </li>
        <li id="slide_3" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/234/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/234/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 3 description" />
            </a>
        </li>
        <li id="slide_4" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/203/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/203/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 4 description" />
            </a>
        </li>
    </ul>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<div class="col-3 m-4 swiper mySwiper1" id="my-gallery1">
    <ul class="swiper-wrapper1" itemscope itemtype="http://schema.org/ImageGallery">
        <!-- Slides -->
        <li id="slide_1-1" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/911/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/911/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 1 description" />
            </a>
        </li>
        <li id="slide_2-1" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/777/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/777/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 2 description" />
            </a>
        </li>
        <li id="slide_3-1" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/234/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/234/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 3 description" />
            </a>
        </li>
        <li id="slide_4-1" class="swiper-slide" itemprop="associatedMedia" itemscope
            itemtype="http://schema.org/ImageObject">
            <a itemprop="contentUrl" href="https://picsum.photos/id/203/1600/900" data-pswp-width="1600"
                data-pswp-height="900" target="_blank">
                <img src="https://picsum.photos/id/203/1600/900" alt="" itemprop="thumbnail"
                    alt="Image 4 description" />
            </a>
        </li>
    </ul>
    <!-- If we need pagination -->
    <div class="swiper-pagination1"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev1"></div>
    <div class="swiper-button-next1"></div>
</div>
<!-- </div> -->
<div class="swiperGrid">
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <img src="http://schema.org/ImageGallery" alt="Image 1">
      </div>
      <div class="swiper-slide">
        <img src="http://schema.org/ImageGallery" alt="Image 2">
      </div>
      <!-- Add more slides as needed -->
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<?= $this->endSection() ;?>