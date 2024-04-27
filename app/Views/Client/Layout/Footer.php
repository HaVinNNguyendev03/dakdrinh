<div class=" p-4 col-12 f-wapper">
                <!--Grid row-->
                <div class="row2 col-12">
                    <div class="mx-auto col-12 logofooter" style="
    padding-top: 40px;
">
                        <img src="<?php echo base_url() ?>assets/img/LogoPVPDHC.png" alt="">
                    </div>
                    <div class="text-center col-12">
                        <span style="color: blue;font-size: 9px;font-weight: 700;">CHẤT LƯỢNG-AN TOÀN-HIỆU QUẢ-PHÁT TRIỂN</span>
                         <br>
                         <span style="
                         color: blue;
    font-size: 20px;
">CÔNG TY CỔ PHẦN THỦY ĐIỆN ĐAKDRINH</span>
                         <br>
                         <span style="
                         color: #ffffff;font-size: 12px;">Thôn Ra Nhua, xã Sơn Tân, huyện Sơn Tây, tỉnh Quảng Ngãi (0255) 629 3777</span>
                    </div>
                    <!--Grid column-->
                        <div class=" mb-4 col-12 mb-md-0 p-2 mx-auto">
                            <ul class="list-unstyled mb-0 col-12" style="display: flex;justify-content: space-evenly;">
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base trang font-medium"><i class="fa-solid fa-user"></i>
                                        Đang online: 
                                     <?php if ($online) : ?>
                                       1
                                     <?php else : ?>    
                                       0
                                     <?php endif ?>
                                    </a>  
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base trang font-medium"><i class="fa-solid fa-user"></i>
                                        Truy Cập Ngày <?= $currentDay ?> : <?= $currentAccess ?>
                                    </a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base trang font-medium"><i class="fa-solid fa-user"></i>
                                        Tuần Này: <?= $currentWeek ?></a>
                                </li>
                                <li class="h-8">
                                    <a href="#!" class="text-body text-base trang font-medium"><i class="fa-regular fa-user"></i>
                                        Tổng Lượt Truy Cập: <?= $totalAccess ?></a>
                                </li>
                            </ul>
                        </div>
                    <div class="mx-auto">
                        <img src="<?php echo base_url() ?>assets/img/line-bottom-footer.jpg" alt="">
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>