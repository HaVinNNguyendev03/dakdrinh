<?= $this->extend('Client/Layout/Base'); ?>
<?= $this->section('DakDrinh'); ?>
<?php
$ngayHienTai = date("d-m-Y");
?>
<!-- carousel -->
<div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-lg height-carousel_home">
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
<div class="col-10 col-sm-6 col-lg-3 mx-auto h-100 my-4">
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
<div class="col-12 col-sm-10 d-sm-flex  p-sm-2 mx-auto my-2" style="min-height: 220px;">
    <div class="my-2 col-sm-6">
        <a href="#"
            class="block h-56 p-6 bg-white border-top border-r  border-gray-200   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-600 dark:text-white text-right">PV POWER DHC
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">PV POWER DHC dưới sự chỉ đạo điều
                hành quyết liệt của Ban lãnh đạo, đồng bộ các khâu từ quản lý sản xuất, kỹ thuật đến nắm bắt
                thị trường chào giá cạnh tranh, xây dựng hệ thống quản lý công ty theo tiêu chuẩn ISO
                9001-2008 nên hiệu quả sản xuất kinh doanh lũy kế lợi nhuận các năm 2014, 2015, 2016,
                2017, 2018, 2019, 2020, 2021 và 2022 đạt 863 tỷ đồng..</p>
        </a>
    </div>
    <div class="my-2 col-sm-6">
        <div
            class=" block h-56  bg-white border-top  border-gray-200 bg-gray-100   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 id="nambieudo"
                class="mb-2   text-center text-sm font-bold tracking-tight text-blue-600 dark:text-white">
                TÌNH HÌNH SẢN
                XUẤT NĂM 2023</h5>
            <div class="col-sm-12  p-sm-2 mx-auto my-2">
                <div class="col-sm-12">
                    <div
                        class=" block h-56 m-2  bg-white border-gray-200 bg-gray-100   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div style="width: 100%;">
                            <canvas style=" height: 200px;" id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tintuc -->
<div class="col-12 col-lg-10 col-md-10 new-header-tintuc mx-auto">
    <span class="title">Tin Mới Nhất</span>
</div>
<div class="col-12 col-sm-10 d-sm-flex flex-wrap p-sm-2 mx-auto my-2">
    <div class="row col-12 g-0">
        <!-- Ảnh lớn bên trái -->
        <div class="col-12 col-sm-6" style="height: 100%;">
            <div class="card bg-dark text-white" style="height: 100%;">
                <img class="tintuc-imglon card-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg"
                    alt="Card image">
                <div class="card-img-overlayfix">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-time">Last updated 3 mins ago</p>
                </div>
            </div>

            <!-- Tiêu đề chuyên mục và nội dung mô tả ngắn -->
        </div>
        <!-- 4 ảnh nhỏ và nội dung bên trái -->
        <div class="col-12 col-md-6 mt-2 mt-sm-0">
            <div class="row g-0">
                <!-- item 1 -->
                <div class="col-md-12 d-flex flex-row p-0" style="padding-top: 0px !important;">
                    <div class="col-4 col-sm-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 col-sm-6 ps-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-time">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2">
                    <div class="col-4 col-sm-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 col-sm-6 ps-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-time">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                    <div class="col-4 col-sm-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg" class=""
                            alt="Small Image 1"></div>
                    <div class="col-8 col-sm-6 ps-2">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-time">Last updated 3 mins ago</p>
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
    <div id="default-carousel" class="relative px-sm-2 mb-sm-8 col-12" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">TIN TỨC SỰ KIỆN</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative height-carousel_ttsk overflow-hidden col-12">
            <!-- Item 1 -->
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div class="col-12 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="col-12 static" href="#">
                        <img class="col-12 height-carousel_ttsk-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5 class="text-carousel_ttsk border-b-2 border-b-2 border-gray-200 mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
                                    </p>
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
    <div id="default-carousel" class="relative px-sm-2 mb-sm-8 col-12" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">TIN TỨC SỰ KIỆN</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative height-carousel_ttsk overflow-hidden col-12">
            <!-- Item 1 -->
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div class="col-12 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="col-12 static" href="#">
                        <img class="col-12 height-carousel_ttsk-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5 class="text-carousel_ttsk border-b-2 border-b-2 border-gray-200 mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
                                    </p>
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
    <div id="default-carousel" class="relative px-sm-2 mb-sm-8 col-12" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">TIN TỨC SỰ KIỆN</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative height-carousel_ttsk overflow-hidden col-12">
            <!-- Item 1 -->
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div class="col-12 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="col-12 static" href="#">
                        <img class="col-12 height-carousel_ttsk-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5 class="text-carousel_ttsk border-b-2 border-b-2 border-gray-200 mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
                                    </p>
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
    <div id="default-carousel" class="relative px-sm-2 mb-sm-8 col-12" data-carousel="slide">
        <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
        <div class="col-12 bg-blue-700 qhcd-top">
            <P class="qhcd-text">TIN TỨC SỰ KIỆN</P>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative height-carousel_ttsk overflow-hidden col-12">
            <!-- Item 1 -->
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div class="col-12 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="col-12 static" href="#">
                        <img class="col-12 height-carousel_ttsk-img" src="<?php echo base_url(); ?>assets/img/thuvien2.jpg" alt="" />
                        <div class="absolute left-0 top-0 box-day ">
                            <h1 class="font-bold">23</h1>
                            <p class="font-bold">Th11</p>
                        </div>
                    </a>
                    <div class="my-8 mx-4  text-center   ">
                        <div class="my-8">
                            <a class="" href="#">
                                <h5 class="text-carousel_ttsk border-b-2 border-b-2 border-gray-200 mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
                                    </p>
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
            <div class="hidden col-12  duration-700 ease-in-out" data-carousel-item>
                <div
                    class="col-12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="col-12 height-carousel_ttsk-img rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
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
                                    <p  class="text">Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023 Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2023
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
                                    <img src="<?php echo base_url(); ?>assets/img/qhcdtl.jpg" class="img-fluid mx-auto">
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
                                    <img src="<?php echo base_url(); ?>assets/img/qhcddhcd.jpg">
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
                                    <img src="<?php echo base_url(); ?>assets/img/qhcdbctc.jpg" alt=""
                                        class="img-fluid mx-auto">
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
<!-- thongtinduan -->
<div class="thongtinduan bg-grey-1">
    <div class="container ">
        <div class="block">
            <div class="section-heading">
                <h2 class="heading"><span class="heading-icon-3 pt-4"><img
                            src="<?php echo base_url(); ?>assets/img/icon-thongtinduan.jpg" class="img-fluid">Thông tin dự
                        án</span></h2>
            </div>
            <div class="section-content-thongtinduan">
                <div class="owl-carousel owl-theme">
                    <div class="item">

                        <div class="project-item">
                            <div class="post-image" style="max-height: 200px; overflow: hidden;">
                                <a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1"
                                    title="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img post-avatar avatar-xs">
                                    <img alt="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img-fluid"
                                        src="<?php echo base_url(); ?>assets/img/duandakrinh.jpg" style="">
                                </a>
                            </div>
                            <h3 class="title"><a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1">THỦY ĐIỆN
                                    DARDRINK</a></h3>
                        </div>

                    </div>
                    <div class="item">

                        <div class="project-item">
                            <div class="post-image" style="max-height: 200px; overflow: hidden;">
                                <a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1"
                                    title="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img post-avatar avatar-xs">
                                    <img alt="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img-fluid"
                                        src="<?php echo base_url(); ?>assets/img/duan.jpg" style="">
                                </a>
                            </div>
                            <h3 class="title"><a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1">NHIỆT ĐIỆN KHÍ NHƠN
                                    TRẠCH 2</a></h3>
                        </div>

                    </div>
                    <div class="item">
                        <div class="project-item">
                            <div class="post-image" style="max-height: 200px; overflow: hidden;">
                                <a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1"
                                    title="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img post-avatar avatar-xs">
                                    <img alt="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img-fluid"
                                        src="<?php echo base_url(); ?>assets/img/duan.jpg" style="">
                                </a>
                            </div>
                            <h3 class="title"><a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1">NHIỆT ĐIỆN KHÍ CÀ
                                    MAU</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-item">
                            <div class="post-image" style="max-height: 200px; overflow: hidden;">
                                <a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1"
                                    title="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img post-avatar avatar-xs">
                                    <img alt="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img-fluid"
                                        src="<?php echo base_url(); ?>assets/img/duanthanvungan.jpg" style="">
                                </a>
                            </div>
                            <h3 class="title"><a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1">NHIỆT ĐIỆN KHÍ THAN VŨNG
                                    ÁN 1 & 2</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-item">
                            <div class="post-image" style="max-height: 200px; overflow: hidden;">
                                <a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1"
                                    title="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img post-avatar avatar-xs">
                                    <img alt="NHIỆT ĐIỆN KHÍ CÀ MAU 1 &amp; 2" class="img-fluid"
                                        src="<?php echo base_url(); ?>assets/img/duannuha.jpg" style="">
                                </a>
                            </div>
                            <h3 class="title"><a href="/vi/project/nhiet-dien-khi-ca-mau-1-2-1">THỦY ĐIỆN NỦA HA</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- thuvien -->
<div class="">
    <div class="col-sm-10 mt-1 d-flex mx-auto align-items-center">
        <b></b>
        <span style="color:rgb(0, 137, 225);" class="text-center text-2xl font-bold mx-2 mx-auto">Thư Viện</span>
        <b></b>
    </div>  
    <div class="thuvien-flex col-12 mx-auto">
        <div class="thuvien-content-anh col-12">
            <h1 class="col-8 text-center text-2xl mx-auto">TTHƯ VIỆN ẢNH</h1>
            <div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative height-thuvienanh overflow-hidden rounded-lg h-80">
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
        <div class="thuvien-content col-12">
            <h1 class="text-center text-2xl mb-2 col-8 mx-auto">THƯ VIỆN VIDEO</h1>
            <div class="thuvienvideo">
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
<?= $this->endSection(); ?>