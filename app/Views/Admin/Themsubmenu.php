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
                <h4 class="page-title">Quản Lý Menu</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                               Thêm Menu
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
                            <h4 class="card-title">Thêm Danh Mục</h4>
                            <h1 name="id" style="display: none;">
                                <?php echo session()->get('id'); ?>
                            </h1>
                            <h1 name="tentaikhoan" style="display: none;">
                                <?php echo session()->get('tentaikhoan'); ?>
                            </h1>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Chú Thích Danh Mục</label>
                                <div class="col-sm-9">
                                    <input name="ghichu" type="text" class="form-control" id="fname"
                                        placeholder="First Name Here" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên Danh Mục</label>
                                <div class="col-sm-9">
                                    <input name="tendanhmuc" type="text" class="form-control" id="fname"
                                        placeholder="First Name Here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Mục Menu</label>
                                <div class="col-md-9">
                                    <select name="idmenu-DanhMuc" class=" form-select shadow-none"
                                        style="width: 100%; height: 36px">
                                        <option>Chọn Menu</option>
                                    </select>
                                </div>
                            </div>
                        <div class="border-top">
                            <div class="card-body text-end">
                                <button id="themdanhmuc" type="button" class="btn btn-primary" onclick="">
                                    Thêm
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