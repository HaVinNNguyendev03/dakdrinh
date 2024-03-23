<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<!-- Page wrapper  -->

<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cấu Hình Web</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                               Sửa Thông Tin Dự Án
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
                            <h4 class="card-title">Sửa Thông Tin Dự Án</h4>
                            <h1 name="id" style="display: none;">
                                <?php echo session()->get('id'); ?>
                            </h1>
                            <h1 name="tentaikhoan" style="display: none;">
                                <?php echo session()->get('tentaikhoan'); ?>
                            </h1>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tiêu Đề Dự Án</label>
                                <div class="col-sm-9">
                                    <input name="tieudebaiviet" type="text" class="form-control" id="fname"
                                        placeholder="First Name Here" />
                                </div>
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
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Nội Dung Dự Án</label>
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
                                <button id="dangbai" type="button" class="btn btn-primary" onclick="submitForm()">
                                    Sửa
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