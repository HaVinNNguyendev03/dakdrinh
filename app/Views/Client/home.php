<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<?php
$ngayHienTai = date("d-m-Y");
?>
<!-- carousel -->
<div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 h-35rem">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url(); ?>assets/img/slide1.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url(); ?>assets/img/slider10.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url(); ?>assets/img/sxkd.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<!-- infomation -->
<div class="col-3 mx-auto h-100 my-4">
    <div class="row align-items-center h-100">
        <div class="container rounded">
            <div class="slider">
                <div class="logos">
                    <div class="logo-nhan">
                        <div class="logo-text">
                            <p>Chào Mừng Năm Mới Giáp Thìn 2024</p>
                        </div>
                        <!-- <div class="logo-text">
                            <p>Kỷ Niệm Ngày Thủy Điện Dakdrinh Thành Lập</p>
                        </div>
                        <div class="logo-text">
                            <p>Mực Nước Ngày <?php echo $ngayHienTai; ?> là 200 </p>
                        </div>
                        <div class="logo-text">
                            <p>Chất Lượng-An Toàn-Hiệu Quả-Phát Triển</p>
                        </div> -->
                    </div>
                </div>
                <div class="logos">
                    <div class="logo-nhan">
                        <div class="logo-text">
                            <p>Chào Mừng Năm Mới Giáp Thìn 2024</p>
                        </div>
                        <!-- <div class="logo-text">
                            <p>Kỷ Niệm Ngày Thủy Điện Dakdrinh Thành Lập</p>
                        </div>
                        <div class="logo-text">
                            <p>Mực Nước Ngày <?php echo $ngayHienTai; ?> là 200 </p>
                        </div>
                        <div class="logo-text">
                            <p>Chất Lượng-An Toàn-Hiệu Quả-Phát Triển</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-sm-12 p-sm-2 mx-auto my-2">
    <h5 class="mb-2 text-center text-sm font-bold tracking-tight text-blue-600 dark:text-white">
        TÌNH HÌNH SẢN XUẤT NĂM 2024</h5>
    <div class="col-sm-10 d-sm-flex  p-sm-2 mx-auto my-2">

        <div class=" col-sm-6 ">
            <div
                class=" block h-56 m-2  bg-white border-top  border-gray-200 bg-gray-100   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-center text-sm font-bold tracking-tight text-blue-600 dark:text-white">
                    Biểu Đồ Đường</h5>
                <div style="width: 100%;">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>

        </div>
        <div class=" col-sm-6 ">
            <div
                class=" block h-56 m-2  bg-white border-top  border-gray-200 bg-gray-100   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-center text-sm font-bold tracking-tight text-blue-600 dark:text-white">
                    Biểu Đồ Cột</h5>
                <div style="width: 100%;">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tintuc -->
<div class="col-lg-10 col-md-10 new-header-tintuc mx-auto">
    <span class="title">Tin Mới Nhất</span>
</div>
<div class="col-sm-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row col-12">
        <!-- Ảnh lớn bên trái -->
        <div class="col-md-6 " style="height: 100%;">
            <div class="card bg-dark text-white" style="height: 100%;">
                <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                    alt="Card image">
                <div class="card-img-overlayfix">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>

            <!-- Tiêu đề chuyên mục và nội dung mô tả ngắn -->
        </div>
        <!-- 4 ảnh nhỏ và nội dung bên trái -->
        <div class="col-md-6">
            <div class="row">
                <!-- item 1 -->
                <div class="col-md-12 d-flex flex-row py-2" style="padding-top: 0px !important;">
                    <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2">
                    <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 m-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-->
<!-- tintucvasukien -->
<div class="col-sm-10 mt-1 d-flex mx-auto align-items-center">
    <b></b>
    <span style="color:rgb(0, 137, 225);" class="text-center text-2xl font-bold mx-2">TIN TỨC-SỰ KIỆN</span>
    <b></b>
</div>
<div class="col-sm-10 d-sm-flex flex-wrap  mx-auto my-2 pb-4">
    <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">TIN TỨC SỰ KIỆN</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-80">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="static" href="#">
                        <img class="" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Thủy điện vượt mức tăng trưởng đề ra
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
                            alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Bảo trì tốt thủy điện
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch chuyển đổi số năm 2024
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- caro 2 -->
    <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">SẢN XUẤT KINH DOANH</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-80">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="static" href="#">
                        <img class="" src="<?php echo base_url(); ?>assets/img/sxkd.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Sản lượng thủy điện đảm bảo như cầu đề ra
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/capcuu.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch bổ sung công tác hỗ trợ bảo trì
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch chuyển đổi số năm 2024
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- caro 3 -->
    <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <img class="" src="<?php echo base_url(); ?>assets/img/AT-SK-MT.png" alt="" srcset="">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-80">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="static" href="#">
                        <img class="min-height" src="<?php echo base_url(); ?>assets/img/traidat.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch thủy điện xanh
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/sxkd.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Đảm bảo nhu cầu điện trước các thánh thức đến từ mẹ thiên nhiên
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch chuyển đổi số năm 2024
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- caro 4 -->
    <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <img class="" src="<?php echo base_url(); ?>assets/img/TIN-TUC-NGANH-DIEN.png" alt="" srcset="">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-80">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="static" href="#">
                        <img class=" min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Trung Ương ra kế hoạch quy hoạch thủy điện dakdrinh trở thành thủy điện
                                    lớn nhất quảng ngãi
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/traidat.jpg"
                            alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Ngành điện bước vào "kỉ nguyên mới" với chuyển đổi xanh
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5
                                    class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                    Kế hoạch chuyển đổi số năm 2024
                                </h5>
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            XEM THÊM
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-slate-400 dark:bg-gray-800/30  group-focus:ring-4 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<!-- quanhecodong -->
<section class="section mb-0 pb-0" style="background-color: #898fa3;">
        <div class="">
            <div class="newest-post">
                <div class="section-heading">
                    <h2 class="heading"><span class="heading-icon-2 font-white">Quan hệ cổ đông</span></h2>
                </div>
                <div class="section-content row m-0">
                                                                    
                                                    <div class="col-md-4 p-0">
                                <a href="/vi/tag/thong-tin-tai-lieu-co-dong-20.htm">
                                    <div class="cate-item" style="background-color: #069dd8">
                                        <div class="text-center">
                                            <div class="image">
                                                <img src="<?php echo base_url(); ?>assets/img/qhcdtl.jpg" class="img-fluid">
                                            </div>
                                            <div class="title text-uppercase font-white">Thông tin/Tài liệu cổ đông</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                                            
                                                    <div class="col-md-4 p-0">
                                <a href="/vi/tag/dai-hoi-co-dong-23.htm">
                                    <div class="cate-item" style="background-color: #0063af">
                                        <div class="text-center">
                                            <div class="image">
                                                <img src="<?php echo base_url(); ?>assets/img/qhcddhcd.jpg" >
                                            </div>
                                            <div class="title text-uppercase font-white">Đại hội cổ đông</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                                            
                                                    <div class="col-md-4 p-0">
                                <a href="/vi/tag/bao-cao-tai-chinh-10.htm">
                                    <div class="cate-item" style="background-color: #151f41">
                                        <div class="text-center">
                                            <div class="image">
                                            <img src="<?php echo base_url(); ?>assets/img/qhcdbctc.jpg" alt="" class="img-fluid">
                                            </div>
                                            <div class="title text-uppercase font-white">Báo cáo tài chính/Báo cáo thường niên</div>
                                        </div>
                                    </div>
                                </a>
                            </div>  
                                                                                            
                                                                                            
                                                                                            
                                                            </div>
            </div>
        </div>
    </section>
<!-- thuvien -->
<div class="">
    <div class="col-sm-10 mt-1 d-flex mx-auto align-items-center">
        <b></b>
        <span style="color:rgb(0, 137, 225);" class="text-center text-2xl font-bold mx-2">Thư Viện</span>
        <b></b>
    </div>
    <div class="thuvien-flex col-10 mx-auto">
        <div class="thuvien-content-anh col-5">
            <h1 class="text-center text-2xl">TTHƯ VIỆN ẢNH</h1>
            <div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg h-80">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url(); ?>assets/img/slide1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url(); ?>assets/img/slide1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="thuvien-content col-5">
            <h1 class="text-center text-2xl mb-2">THƯ VIỆN VIDEO</h1>
            <div class="">
                <iframe width="560" height="300" src="https://www.youtube.com/embed/AoPiLg8DZ3A" frameborder="0"
                    allowfullscreen title="YouTube Video"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- logo-nhan -->
<div class="container h-100 my-4">
    <div class="row align-items-center h-100">
        <div class="container rounded">
            <div class="slider">
                <div class="logos">
                    <div class="logo-nhan">
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/bidv.jpg" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/bidv.jpg" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/sd.png" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/ligogi-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="logos">
                    <div class="logo-nhan">
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/bidv.jpg" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/bidv.jpg" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/sd.png" alt="">
                        </div>
                        <div class="logo-nhan-img">
                            <img src="<?php echo base_url(); ?>assets/img/ligogi-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ;?>