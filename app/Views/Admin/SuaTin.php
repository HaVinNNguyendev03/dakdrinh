<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<p id="idurl"><?= $baiviet['idbaiviet'] ?></p>
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh Mục</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Sửa Tin
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- content -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Sửa Tin</h4>
                            <h1 name="id" style="display: none;">
                                <?php echo session()->get('id'); ?>
                            </h1>
                            <h1 name="tentaikhoan" style="display: none;">
                                <?php echo session()->get('tentaikhoan'); ?>
                            </h1>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tiêu Đề Bài
                                    Viết</label>
                                <div class="col-sm-9">
                                    <input name="tieudebaiviet" type="text" class="form-control" id="fname"
                                        placeholder="First Name Here" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Danh Mục Bài Viết</label>
                                <div class="col-md-9">
                                    <select name="iddanhmuc" class="select2 form-select shadow-none"
                                        style="width: 100%; height: 36px">
                                        <option>Chọn Danh Mục</option>
                                        <optgroup label="Giới Thiệu">
                                            <option value="101">Thông Tin Doanh Nghiệp</option>
                                        </optgroup>
                                        <optgroup label="Tin Tức Sự Kiện">
                                            <option value="201">Hoạt Động Cộng Đồng</option>
                                            <option value="202">Hoạt Động Ngành Điện</option>
                                            <option value="203">Tin Tức PVPower</option>
                                            <option value="204">Tin Tức PVPowerDHC</option>
                                        </optgroup>
                                        <optgroup label="Hoạt Động SX-KD">
                                            <option value="301">Chiến Lược Mục Tiêu</option>
                                            <option value="302">Tình HÌnh Sản Xuất Kinh Doanh</option>
                                            <option value="303">Kế Hoạch Sản Xuất Kinh Doanh</option>
                                        </optgroup>
                                        <optgroup label="Thông Báo">
                                            <option value="401">Thông Báo Đấu Thầu</option>
                                            <option value="402">Thông Báo Tuyển Dụng</option>
                                            <option value="403">Thông Báo Báo Chí</option>
                                        </optgroup>
                                        <optgroup label="AT-SK-MT">
                                            <option value="501">Cộng Đồng</option>
                                            <option value="502">Người Lao Động</option>
                                            <option value="503">Các Chính Sách Môi Trường</option>
                                        </optgroup>
                                        <optgroup label="QUAN HỆ CỔ ĐÔNG">
                                            <option value="501">Thông Tin/Tài Liệu Cổ Đông</option>
                                            <option value="502">Đại Hội Cổ Đông</option>
                                            <option value="503">Báo Cáo Tài Chính</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Tóm Tắt Bài
                                Viết</label>
                            <div class="col-sm-9">
                                <input name="tomtatbaiviet" type="text" class="form-control" id="lname"
                                    placeholder="Last Name Here" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-end control-label col-form-label">Ảnh Đại Diện</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="anhrthumnail" type="file" class="custom-file-input"
                                        id="validatedCustomFile" required style="border: 1px solid;" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Ngày
                                Đăng</label>
                            <div class="col-sm-9">
                                <input type="text" name="ngaydang" class="form-control" id="email1"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>

                        <div class="form-group row align-items-start">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Nội Dung Bài
                                Viết</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body " style="padding: 5px !important;">
                                                <h4 class="card-title">Trình Soạn Thảo Văn Bản</h4>
                                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-end">
                                <button id="dangbai" type="button" class="btn btn-primary">
                                    Chỉnh Sửa
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- end content-->
</div>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> -->
<script>
    // 
</script>
<!-- end pagewrapper -->
<?= $this->endSection(); ?>