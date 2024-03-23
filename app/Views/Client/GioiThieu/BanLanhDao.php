<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
<div class="col-12 wapper px-2 pt-2">
    <div class="wapper-content px-2 col-12 col-md-10 mx-auto">
        <div class="wapper-content-title">Giới Thiệu</div>
        <div class="wapper-content-tab">
            <ul class="tab-ul d-md-flex">
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/gioithieuchung" data-toggle="tab">Giới Thiệu Chung</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/banlanhdao" data-toggle="tab">Ban Lãnh Đạo</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/duan" data-toggle="tab">Dự Án</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/thongtindoanhnghiep" data-toggle="tab">Thông Tin Doanh
                        Nghiệp</a>
                </li>
                <li class="mx-md-4 my-4">
                    <a href="<?php echo base_url() ?>gioithieu/nganhnghekinhdoanh" data-toggle="tab">Ngành Nghề Kinh Doanh</a>
                </li>
                <li class="my-4">
                    <a href="<?php echo base_url() ?>gioithieu/lichsu" data-toggle="tab">Lịch Sử Hình Thành Và Phát Triển</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-wrapper public-page-view" id="content">
    <!-- BEGIN CONTENT BODY -->

    <section class="section" style="
    width: 83%;
    margin: auto;
">
        <div class="container">
            <div class="banlanhdao">
                <div class="leaderGroup">
                    <h1 style="text-align: left;">Hội đồng Quản trị</h1>
                    <div class="row leaderRow clearfix my-4" style="text-align: left;"> 
                        <div class="leader col-sm-12 ">
                            <div class="thumb"><img class="mx-auto" src="<?php echo base_url() ?>assets/img/ct.nguyenngochai.png" alt=""
                                    width="118" height="122">
                                <div class="name text-center">Ông Nguyễn Ngọc Hải</div>
                                <div class="position text-center">Chủ tịch Hội đồng Quản trị</div>
                                <div class="position text-center"></div>
                                <div class="scrollable mx-auto">
                                    <table border="0"
                                        style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 358px;">
                                        <tbody>
                                            <tr style="height: 175px;">
                                                <td class="td-boder" style="width: 25%; text-align: center; height: 175px;">
                                                    <div class="position text-center"><img class="mx-auto" 
                                                            src="<?php echo base_url() ?>assets/img/uvhdqt-doxuanbinh.png" alt=""
                                                            width="118" height="122">
                                                    <div class="position text-center">Ông Đỗ Xuân Bình</div>
                                                    <div class="position text-center">Ủy viên HĐQT</div>
                                                </td>
                                               
                                                <td class="td-boder" style="width: 23.216939%; text-align: center; height: 175px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/uvhdqt-lequanghao.png"
                                                            alt=""  width="118" height="122"></div>
                                                    <div class="name text-center">Ông Lê Quang Hào</div>
                                                    <div class="position text-center">Ủy viên HĐQT</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="position text-center"></div>
                        </div>
                    </div>
                </div>
                <div class="leaderGroup" style="text-align: left;">
                    <h1>Ban Giám đốc</h1>
                    <div class="row leaderRow clearfix">
                        <div class="leader   col-sm-12 ">
                            <div class="position text-center">
                                <div class="scrollable">
                                    <table border="0" style="width: 100%; border-collapse: collapse;">
                                        <tbody>
                                            <tr>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/uvhdqt-doxuanbinh.png"
                                                            alt=""  width="118" height="122"></div>
                                                    <div class="name text-center">Ông Đỗ Xuân Bình</div>
                                                    <div class="position text-center">Giám đốc</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/pgd-lenang.jpg"
                                                            alt=""  width="118" height="122"></div>
                                                    <div class="name text-center">Ông Lê Năng</div>
                                                    <div class="position text-center">Phó Giám đốc</div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row leaderRow clearfix">
                        <div class="leader   col-sm-6 ">
                            <div class="position text-center"></div>
                        </div>
                    </div>
                </div>
                <div class="leaderGroup">
                    <h1 style="text-align: left;">Ban kiểm soát</h1>
                    <div class="row leaderRow clearfix" style="text-align: left;">
                        <div class="leader   col-sm-12 ">
                            <div class="thumb"><img class="mx-auto" src="<?php echo base_url() ?>assets/img/bks-nguyenthanhkhiet.jpg" alt=""
                                    width="118" height="122"></div>
                            <div class="name text-center">Ông Nguyễn Thanh Khiết</div>
                            <div class="position text-center">Trưởng Ban kiểm soát</div>
                            <div class="position text-center">
                                <div class="scrollable">
                                    <table border="0" style="width: 100%; border-collapse: collapse;">
                                        <tbody>
                                            <tr>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="position text-center"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/bks-nguyentrungtuan.jpg"
                                                            width="118" height="122" alt=""></div>
                                                    <div class="position text-center">Ông Nguyễn Trung Tấn </div>
                                                    <div class="position text-center">Thành Viên BKS</div>
                                                </td>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/bks-nguyenthihonghanh.png"
                                                            alt="" width="118" height="122"></div>
                                                    <div class="name text-center">Bà Nguyễn Thị Hồng Hạnh</div>
                                                    <div class="position text-center">Thành Viên BKS</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row leaderRow clearfix">
                        <div class="leader   col-sm-3 " style="text-align: left;">
                            <div class="position text-center"></div>
                        </div>
                        <div class="leader   col-sm-3 " style="text-align: left;">
                            <div class="position text-center"></div>
                        </div>
                        <div class="leader   col-sm-3 " style="text-align: left;">
                            <div class="position text-center"></div>
                        </div>
                        <div class="leader   col-sm-3 ">
                            <div class="position text-center" style="text-align: left;"></div>
                            <div class="position text-center">
                                <div class="position text-center" style="text-align: left;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ;?>