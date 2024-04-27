<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<!-- Page wrapper  -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmDeleteModalLabel">Thông Báo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Đã Đăng Bài Viết
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>
<!-- ============================================================== -->
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
                                Đăng Tin
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
                            <h4 class="card-title">Đăng Tin</h4>
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
                                        placeholder="First Name Here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Menu Bài Viết</label>
                                <div class="col-md-9">
                                    <select name="idmenu" class=" form-select shadow-none"
                                        style="width: 100%; height: 36px">
                                        <option>Chọn Menu</option>
                                        <optgroup label="Menu"> 
                                            <?php foreach ($menus as $menu): ?>
                                                   <option value="<?= $menu['idmenu'] ?>"><?= $menu['tenmenu'] ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Danh Mục Bài Viết</label>
                                <div class="col-md-9">
                                    <select name="iddanhmuc" class="select2 form-select shadow-none"
                                        style="width: 100%; height: 36px">
                                        <option class ="h4">Chọn Danh Mục</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Tóm Tắt Bài
                                Viết</label>
                            <div class="col-sm-9">
                                <input name="tomtatbaiviet" type="text" class="form-control" id="lname"
                                    placeholder="Last Name Here" />
                            </div>
                        </div> -->
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
                        <div class="form-group row">
    <label class="col-sm-3 text-end control-label col-form-label">Tin nổi bật</label>
    <div class="col-md-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="tinnoibat" name="tinnoibat">
            <label class="form-check-label" for="tinnoibat">
                Đánh dấu nếu tin này là tin nổi bật
            </label>
        </div>
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
                                <button id="dangbai" type="button" class="btn btn-primary" onclick="submitForm()">
                                    Đăng
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