<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
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
                    <a href="<?php echo base_url() ?>gioithieu/thongtindoanhnghiep" data-toggle="tab">Thông Tin Doanh Nghiệp</a>
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
                            <div class="thumb"><img class="mx-auto" src="<?php echo base_url() ?>assets/img/banlanhdao.jpg" alt=""
                                    width="118" height="122">
                                <div class="name text-center">Ông Hoàng Văn Quang</div>
                                <div class="position text-center">Chủ tịch Hội đồng Quản trị</div>
                                <div class="position text-center"></div>
                                <div class="scrollable mx-auto">
                                    <table border="0"
                                        style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 358px;">
                                        <tbody>
                                            <tr style="height: 175px;">
                                                <td class="td-boder" style="width: 25%; text-align: center; height: 175px;">
                                                    <div class="position text-center"><img class="mx-auto" 
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="position text-center">Ông Lê Như Linh</div>
                                                    <div class="position text-center">Thành viên HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%; text-align: center; height: 175px;">
                                                    <div class="position text-center"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="position text-center">Ông Nguyễn Anh Tuấn</div>
                                                    <div class="position text-center">Thành viên HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 26.783061%; text-align: center; height: 175px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Bà Nguyễn Thị Ngọc Bích</div>
                                                    <div class="position text-center">Thành viên HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 23.216939%; text-align: center; height: 175px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Bà Vũ Thị Tố Nga</div>
                                                    <div class="position text-center">Thành viên HĐQT</div>
                                                </td>
                                            </tr>
                                            <tr style="height: 183px;">
                                                <td class="td-boder" style="width: 25%; text-align: center; height: 183px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Bà Nguyễn Hoàng Yến</div>
                                                    <div class="position text-center">Thành viên HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%; text-align: center; height: 183px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Vũ Chí Cường</div>
                                                    <div class="position text-center">Thành viên độc lập HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 26.783061%; text-align: center; height: 183px;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Nguyễn Bá Phước</div>
                                                    <div class="position text-center">Thành viên độc lập HĐQT</div>
                                                </td>
                                                <td class="td-boder" style="width: 23.216939%; text-align: center; height: 183px;"></td>
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
                    <h1>Ban Tổng Giám đốc</h1>
                    <div class="row leaderRow clearfix">
                        <div class="leader   col-sm-12 ">
                            <div class="thumb"><img class="mx-auto" src="<?php echo base_url() ?>assets/img/banlanhdao.jpg" alt="">
                            </div>
                            <div class="name text-center">Ông Lê Như Linh</div>
                            <div class="position text-center">Tổng Giám đốc</div>
                            <div class="position text-center">
                                <div class="scrollable">
                                    <table border="0" style="width: 100%; border-collapse: collapse;">
                                        <tbody>
                                            <tr>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Phan Ngọc Hiền</div>
                                                    <div class="position text-center">Phó Tổng giám đốc</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Nguyễn Minh Đạo</div>
                                                    <div class="position text-center">Phó Tổng Giám đốc</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="position text-center"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            width="118" height="128" alt=""></div>
                                                    <div class="position text-center">
                                                        <div class="name text-center">Ông Ngô Văn Chiến</div>
                                                        <div class="position text-center">Phó Tổng Giám đốc</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Nguyễn Duy Giang</div>
                                                    <div class="position text-center">Phó Tổng Giám đốc</div>
                                                </td>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="position text-center"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            width="125" height="125" alt=""></div>
                                                    <div class="position text-center">
                                                        <div class="name text-center">Ông Trương Việt Phương</div>
                                                        <div class="position text-center">Phó Tổng Giám đốc</div>
                                                    </div>
                                                </td>
                                                <td class="td-boder" style="width: 25%;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Ông Nguyễn Kiên</div>
                                                    <div class="position text-center">Phó Tổng Giám đốc</div>
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
                            <div class="thumb"><img class="mx-auto" src="<?php echo base_url() ?>assets/img/banlanhdao.jpg" alt=""
                                    width="118" height="122"></div>
                            <div class="name text-center">Ông Phạm Minh Đức</div>
                            <div class="position text-center">Trưởng Ban kiểm soát</div>
                            <div class="position text-center">
                                <div class="scrollable">
                                    <table border="0" style="width: 100%; border-collapse: collapse;">
                                        <tbody>
                                            <tr>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="position text-center"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            width="118" height="122" alt=""></div>
                                                    <div class="position text-center">Bà Nguyễn Thị Thanh Hương</div>
                                                    <div class="position text-center">Kiểm soát viên</div>
                                                </td>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Bà Vũ Thị Ngọc Dung</div>
                                                    <div class="position text-center">Kiểm soát viên</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="thumb"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""></div>
                                                    <div class="name text-center">Bà Hà Thị Minh Nguyệt</div>
                                                    <div class="position text-center">Kiểm soát viên</div>
                                                </td>
                                                <td class="td-boder" style="width: 33.333333%; text-align: center;">
                                                    <div class="thumb" style="text-align: left;"><img class="mx-auto"
                                                            src="<?php echo base_url() ?>assets/img/banlanhdao.jpg"
                                                            alt=""
                                                            style="display: block; margin-left: auto; margin-right: auto;">
                                                    </div>
                                                    <div class="name text-center">Bà Đoàn Thị Thu Hà</div>
                                                    <div class="position text-center">Kiểm soát viên</div>
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