<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="<?php echo base_url(); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?php echo base_url(); ?>assets/img/Logo_DHC.png" class="h-16" alt="Flowbite Logo" />
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

<nav class="bg-primary bg-gray-50 dark:bg-gray-700 footer-bg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="icon-header md:hidden flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><i
                    class="fa-solid fa-house"></i></span>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto footer-bg" id="navbar-multi-level">
            <ul
                class="menu-bg flex flex-col font-medium p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 ">
                <li>    
                    <button id="dropdownNavbarLink6" data-dropdown-toggle="dropdownNavbar6"
                        class="flex items-center boxshadow justify-between w-full text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">GIỚI THIỆU<i class="fa-solid fa-angle-down"></i>
                      </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar6"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                                <a href="<?php echo base_url() ?>gioithieu/gioithieuchung"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Giới
                                    thiệu chung</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>gioithieu/banlanhdao"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ban
                                    lãnh đạo</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>gioithieu/duan"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dự
                                    án</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>gioithieu/thongtindoanhnghiep"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thông
                                    tin doanh nghiệp</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>gioithieu/nganhnghekinhdoanh"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ngành Nghề Kinh Doanh</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>gioithieu/lichsu"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lịch Sử Hình Thành Và Phát Triển</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink5" data-dropdown-toggle="dropdownNavbar5"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">TIN TỨC & SỰ KIỆN<i class="fa-solid fa-angle-down"></i>
                        </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar5"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>tintuc/hoatdongcongdong"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hoạt
                                    động cộng đồng</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>tintuc/hoatdongnganhdien"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hoạt
                                    động của ngành điện</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>tintuc/tintucpvpower"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tin
                                    tức PV Power</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>tintuc/tintucpvpowerdhc"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tin
                                    tức PV Power DHC</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink4" data-dropdown-toggle="dropdownNavbar4"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">HOẠT ĐỘNG SX-KD<i class="fa-solid fa-angle-down"></i>
                        </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar4"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>hdsx/chienluocmuctieu"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Chiến
                                    lược mục tiêu</a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url() ?>hdsx/tinhhinhsx"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tình
                                    hình sản xuất kinh doanh</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>hdsx/kehoachsx"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kế
                                    hoạch sản xuất kinh doanh</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">THÔNG BÁO<i class="fa-solid fa-angle-down"></i>
                       </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar3"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>thongbao/thongbaodauthau"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thông
                                    báo đấu thầu</a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url() ?>thongbao/thongbaotuyendung"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thông
                                    báo tuyển dụng</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>thongbao/thongbaobaochi"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thông
                                    báo báo chí</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">AT-SK-MT<i class="fa-solid fa-angle-down"></i>
                       </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar2"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>at-sk-mt/congdong"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cộng
                                    đồng</a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url() ?>at-sk-mt/nguoilaodong"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Người
                                    lao động</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>at-sk-mt/chinhsach"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Các
                                    chính sách môi trường</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">QUAN HỆ CỔ ĐÔNG<i class="fa-solid fa-angle-down"></i>
                        </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>quanhecodong/thongtintailieu"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thông Tin Tài Liệu Cổ Đông</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>quanhecodong/daihoicodong"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Đại Hội Cổ Đông</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>quanhecodong/baocaotaichinh"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Báo Cáo Tài Chính Thường Niên</a>
                            </li>
                        </ul>
                       
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">THƯ VIỆN<i class="fa-solid fa-angle-down"></i>
                        </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar1"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>thuvien/thuvienanh"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thư Viện Ảnh</a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url() ?>thuvien/thuvienvideo"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Thư Viện Video</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink8" data-dropdown-toggle="dropdownNavbar8"
                        class="flex items-center boxshadow justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">LIÊN HỆ<i class="fa-solid fa-angle-down"></i>
                        </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar8"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?php echo base_url() ?>lienhe"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>