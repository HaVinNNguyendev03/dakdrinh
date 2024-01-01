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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pagedetail.css">
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
            <!--page detail -->
            <div class="row my-3">
                <div class="col-lg-8 content">
                    <h3>test commit phuc</h3>
                    <h3>test commit phuc 123</h3>
                </div>
            </div>
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