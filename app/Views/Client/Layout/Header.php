
<?php foreach ($cauhinhweb as $item): ?>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="<?php echo base_url(); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= $item['anhlogo'] ?>" class="h-16" alt="Flowbite Logo" />
                <!-- <span  
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline"><i
                        class="fa-solid fa-phone"></i><?= $item['sodienthoai'] ?></a>
                <a href="<?= $item['linkemail'] ?>" class="text-sm  text-gray-500 dark:text-white hover:underline"><i
                        class="fa-regular fa-envelope"></i> contact</a>
                <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"><i
                        class="fa-solid fa-clock"></i> 7h00-17h00</a>
            </div>
        </div>
    </nav>
<?php endforeach ?>
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
        <ul class="menu-bg flex flex-col font-medium p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    <?php
    // Mảng tạm thời để lưu trữ idmenu đã xuất ra
    $processedIds = [];

    // Vòng lặp để hiển thị thông tin menu
    foreach ($menuhome as $item) {
        // Kiểm tra xem idmenu đã tồn tại trong mảng tạm thời chưa
        if (!in_array($item['idmenu'], $processedIds)) {
            ?>
            <li class="relative">
                <button id="dropdownNavbarLink" class="dropdown-trigger flex items-center boxshadow justify-between w-full text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    <?php echo $item['tenmenu'] ?><i class="fa-solid fa-angle-down"></i>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="dropdown-content z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <?php
                        // Xuất các danh mục của menu hiện tại
                        foreach ($menuhome as $subItem) {
                            if ($subItem['idmenu'] == $item['idmenu']) {
                                ?>
                                <li>
                                    <a href="<?php echo base_url() ?>menu/<?php echo $subItem['urldanhmuc'] ?>/<?php echo $subItem['iddanhmuc'] ?>"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?php echo $subItem['tendanhmuc'] ?></a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </li>
            <?php
            // Thêm idmenu vào mảng tạm thời
            $processedIds[] = $item['idmenu'];
        }
    }
    ?>
</ul>

        </div>
    </div>
</nav>