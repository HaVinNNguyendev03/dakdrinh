<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"
            integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    </head>

    <body>
        <!-- header -->
        <header>
            <nav class="bg-white border-gray-200 dark:bg-gray-900">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                    <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="<?php echo base_url(); ?>assets/img/Logo.png" class="h-16" alt="Flowbite Logo" />
                        <!-- <span  
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
                    </a>
                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                        <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline"><i
                                class="fa-solid fa-phone"></i> (555)
                            412-1234</a>
                        <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline"><i
                                class="fa-regular fa-envelope"></i> contact</a>
                        <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"><i
                                class="fa-solid fa-clock"></i> 7h00-17h00</a>
                    </div>
                </div>
            </nav>
            <nav class="bg-primary bg-gray-50 dark:bg-gray-700">
                <div class="max-w-screen-xl px-3 py-2 mx-auto">
                    <div class="flex items-center">
                        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                            <li>
                                <a href="#" class="text-gray-900 text-white hover:underline" aria-current="page">GIỚI
                                    THIỆU</a>
                            </li>
                            <li>
                                <a id="dropdownDefaultButton1" data-dropdown-toggle="dropdown1"
                                    class="text-white hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">TIN TỨC & SỰ KIỆN<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </a>

                                <!-- Dropdown menu -->
                                <div id="dropdown1"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton1">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <a id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2"
                                    class="text-white hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">HOẠT ĐỘNG SX-KD<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </a>

                                <!-- Dropdown menu -->
                                <div id="dropdown2"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton2">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="text-white hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">THÔNG BÁO<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </a>

                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                            <li>
                                <a id="dropdownDefaultButton3" data-dropdown-toggle="dropdown3"
                                    class="text-white hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">QUAN HỆ CỔ ĐÔNG<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </a>

                                <!-- Dropdown menu -->
                                <div id="dropdown3"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton3">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a id="dropdownDefaultButton3" data-dropdown-toggle="dropdown3"
                                    class="text-white hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm  text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">THƯ VIỆN<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </a>

                                <!-- Dropdown menu -->
                                <div id="dropdown3"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton3">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- main -->
        <main>
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
                        <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
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
            <div class="col-sm-10 d-sm-flex  p-sm-2 mx-auto my-2">
                <div class=" col-sm-6 ">
                    <a href="#"
                        class="block h-56 p-6 bg-white border-top border-r  border-gray-200   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-600 dark:text-white text-right">PV
                            POWER DHC
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">PV POWER DHC dưới sự chỉ đạo điều
                            hành quyết liệt của Ban lãnh đạo, đồng bộ các khâu từ quản lý sản xuất, kỹ thuật đến nắm bắt
                            thị trường chào giá cạnh tranh, xây dựng hệ thống quản lý công ty theo tiêu chuẩn ISO
                            9001-2008 nên hiệu quả sản xuất kinh doanh lũy kế lợi nhuận các năm 2014, 2015, 2016,
                            2017, 2018, 2019, 2020, 2021 và 2022 đạt 863 tỷ đồng..</p>
                    </a>
                </div>
                <div class=" col-sm-6 ">
                    <div
                        class=" block h-56 m-2  bg-white border-top  border-gray-200 bg-gray-100   hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-center text-sm font-bold tracking-tight text-blue-600 dark:text-white">
                            TÌNH HÌNH SẢN
                            XUẤT NĂM2024</h5>
                        <div class="bg-blue-600 p-4 ">
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Sản Lượng ngày
                                21/12(kwh):10000knw</p>
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Mực nước hồ ngày
                                21/12(kwh):10000knw</p>
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Tổng lưu lượng,xả
                                hạ du:10000knw</p>
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Sản lượng tháng 12
                                (kwh):10000knw</p>
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Sản lượng quý
                                IV(kwh):10000knw</p>
                            <p class="text-white text-sm py-1"><i class="fa-solid fa-thumbtack"></i> Sản lượng năm
                                2023(kwh):10000knw</p>
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
                                <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row py-2">
                                <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
                                <div class="col-8 m-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row py-2" style="padding-bottom: 0px !important;">
                                <div class="col-6 tintuc-img"><img src="<?php echo base_url(); ?>assets/img/anhnho.jpg"
                                        class="" alt="Small Image 1"></div>
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
            <div class="col-sm-10 d-sm-flex flex-wrap  mx-auto my-2">
                <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
                    <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
                    <img class="" src="<?php echo base_url(); ?>assets/img/TIN-TU-SU-KIEN.png" alt="" srcset="">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden md:h-80">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
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
                                    <img class="rounded-t-lg min-height"
                                        src="<?php echo base_url(); ?>assets/img/nganhdien.jpg" alt="" />
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg"
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <!-- caro 2 -->
                <div id="default-carousel" class="relative w-25 px-2 mb-8" data-carousel="slide">
                    <!-- <h1 class="text-center py-3 text-blue-500 bg-gray-500/50 font-bold text-2xl">Sản Xuất Kinh Doanh</h1> -->
                    <img class="" src="<?php echo base_url(); ?>assets/img/SAN-XUAT-KINH-DOANH.png" alt="" srcset="">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden md:h-80">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/capcuu.jpg"
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg"
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
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
                            <div
                                class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                                <a class="static" href="#">
                                    <img class="min-height" src="<?php echo base_url(); ?>assets/img/traidat.jpg"
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/sxkd.jpg"
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg"
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
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
                            <div
                                class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                                <a class="static" href="#">
                                    <img class=" min-height" src="<?php echo base_url(); ?>assets/img/nganhdien.jpg"
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
                                    <img class="rounded-t-lg min-height"
                                        src="<?php echo base_url(); ?>assets/img/traidat.jpg" alt="" />
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
                                    <img class="rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg"
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <!-- caro 5 -->

                <!-- caro 6 -->

                <!-- caro 7 -->

                <!-- caro 8 -->

            </div>
            <!-- quanhecodong -->
            <div class="col-sm-10 mt-1 d-flex mx-auto align-items-center">
                <b></b>
                <span style="color:rgb(0, 137, 225);" class="text-center text-2xl font-bold mx-2">QUAN HỆ CỔ ĐÔNG</span>
                <b></b>
            </div>
            <div class="col-sm-10 d-sm-flex p-sm-2 mx-auto my-2">
                <div class=" mx-auto max-w-sm bg-white">
                    <img class="" src="<?php echo base_url(); ?>assets/img/THONG-TIN-TAI-LIEU-CO-DONG.png" alt=""
                        srcset="">
                    <a href="#">
                        <div class="relative">
                            <img class=" rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                            <div class="absolute left-0 top-0 box-day ">
                                <h1 class="font-bold">23</h1>
                                <p class="font-bold">Th11</p>
                            </div>
                        </div>
                    </a>
                    <div class="px-5">
                        <a href="#">


                        </a>
                        <div class="my-8 mx-4  text-center   ">
                            <div class="my-8">
                                <a class="" href="#">
                                    <h5
                                        class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                        Nơi Lưu Trữ Dữ Liệu Cổ Đông
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
                <div class=" mx-auto max-w-sm bg-white">
                    <img class="" src="<?php echo base_url(); ?>assets/img/THONG-TIN-TAI-LIEU-CO-DONG.png" alt=""
                        srcset="">
                    <a href="#">
                        <div class="relative">
                            <img class=" rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                            <div class="absolute left-0 top-0 box-day ">
                                <h1 class="font-bold">23</h1>
                                <p class="font-bold">Th11</p>
                            </div>
                        </div>
                    </a>
                    <div class="px-5">
                        <a href="#">


                        </a>
                        <div class="my-8 mx-4  text-center   ">
                            <div class="my-8">
                                <a class="" href="#">
                                    <h5
                                        class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                        Nơi Lưu Trữ Dữ Liệu Cổ Đông
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
                <div class=" mx-auto max-w-sm bg-white">
                    <img class="" src="<?php echo base_url(); ?>assets/img/THONG-TIN-TAI-LIEU-CO-DONG.png" alt=""
                        srcset="">
                    <a href="#">
                        <div class="relative">
                            <img class=" rounded-t-lg" src="<?php echo base_url(); ?>assets/img/slide3.jpg" alt="" />
                            <div class="absolute left-0 top-0 box-day ">
                                <h1 class="font-bold">23</h1>
                                <p class="font-bold">Th11</p>
                            </div>
                        </div>
                    </a>
                    <div class="px-5">
                        <a href="#">


                        </a>
                        <div class="my-8 mx-4  text-center   ">
                            <div class="my-8">
                                <a class="" href="#">
                                    <h5
                                        class=" border-b-2 border-b-2 border-gray-200 text mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                        Nơi Lưu Trữ Dữ Liệu Cổ Đông
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
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="<?php echo base_url(); ?>assets/img/slide1.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="<?php echo base_url(); ?>assets/img/slide3.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div
                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="thuvien-content col-5">
                        <h1 class="text-center text-2xl mb-2">THƯ VIỆN VIDEO</h1>
                        <div class="">
                            <iframe width="560" height="300" src="https://www.youtube.com/embed/AoPiLg8DZ3A"
                                frameborder="0" allowfullscreen title="YouTube Video"></iframe>
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
            <!-- gg map -->

        </main>
        <!-- footer -->
        <footer class="bg-body-tertiary text-center text-lg-start bg-primary footer">
            <!-- Grid container -->
            <div class=" p-4 col-12 f-wapper">
                <!--Grid row-->
                <div class="row2 col-12 f-height">
                    <!--Grid column-->
                    <div class=" col-4 mb-4 mb-md-0 p-2 ">
                        <h5 class="text-uppercase font-bold text-blue-700 text-blue">LIÊN HỆ</h5>

                        <ul class="list-unstyled mb-0">
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-bold f-red"><i
                                        class="fa-solid fa-building"></i> CÔNG TY CỔ PHẦN THỦY ĐIỆN ĐAKĐRINH</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body font-medium text-sm"><i
                                        class="fa-solid fa-location-dot"></i> Thôn Ra Nhua, xã Sơn Tân, huyện Sơn Tây,
                                    tỉnh Quảng Ngãi</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i class="fa-solid fa-phone"></i>
                                    0976496014</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i
                                        class="fa-solid fa-envelope"></i> nguyenvanphucdev03@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="mb-4 col-4 mb-md-0 p-2 ">
                        <h5 class="text-uppercase font-bold text-blue-700 mb-0">MENU</h5>
                        <div class="d-flex justify-content-around">
                            <ul class="list-unstyled">
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-newspaper"></i> Tin Tức</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-arrow-trend-up"></i> Phát Triển Bềnh Vững</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-boxes-stacked"></i> Quan Hệ Cổ Đông</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-photo-film"></i> Video</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-industry"></i> Hoạt Động Sản Xuất</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-bell"></i> Thông Báo</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-solid fa-image"></i> Hình Ảnh</a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base font-medium"><i
                                            class="fa-regular fa-id-card"></i> Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=" mb-4 col-4 mb-md-0 p-2">
                        <h5 class="text-uppercase font-bold text-blue-700">THỐNG KÊ TRUY CẬP</h5>

                        <ul class="list-unstyled mb-0">
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i class="fa-solid fa-user"></i>
                                    Đang online: 1</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i class="fa-solid fa-user"></i>
                                    Hôm Nay: 20</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i class="fa-solid fa-user"></i>
                                    Tuần Này: 300</a>
                            </li>
                            <li class="h-8">
                                <a href="#!" class="text-body text-base font-medium"><i class="fa-regular fa-user"></i>
                                    Tổng Lượt Truy Cập: 1000</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->


                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <!-- Copyright -->
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js">
    < /html>