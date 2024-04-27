<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<!-- Page wrapper  -->
<p style="display:flex;" id="idlogoweb"><?= $logoweb['id'] ?></p>
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
                Logo và tên web
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
          <div class="card-body">
            <h4 class="card-title">Sửa Logoweb</h4>
            <h1 name="id" style="display: none;">
              <?php echo session()->get('id'); ?>
            </h1>
            <h1 name="tentaikhoan" style="display: none;">
              <?php echo session()->get('tentaikhoan'); ?>
            </h1>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label">Ảnh logo </label>
            <div class="col-md-9">
              <div class="custom-file">
                <input name="anhlogo" type="file" class="custom-file-input" id="validatedCustomFile" required
                  style="border: 1px solid;" />
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 text-end control-label col-form-label">Ảnh icon </label>
            <div class="col-md-9">
              <div class="custom-file">
                <input name="anhicon" type="file" class="custom-file-input" id="validatedCustomFile" required
                  style="border: 1px solid;" />
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Số Điện Thoại</label>
            <div class="col-sm-9">
              <input name="sodienthoai" type="text" class="form-control" id="sodienthoai"
                placeholder="First Name Here" />
            </div>
          </div>
          <div class="form-group row">
            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Đường Link Email</label>
            <div class="col-sm-9">
              <input name="linkemail" type="text" class="form-control" id="linkemail" placeholder="First Name Here" />
            </div>
          </div>
          <div class="form-group row">
            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên Website</label>
            <div class="col-sm-9">
              <input name="tenweb" type="text" class="form-control" id="tenweb" placeholder="First Name Here" />
            </div>
          </div>
          <div class="border-top">
            <div class="card-body text-end">
              <button id="sualogoweb" type="button" class="btn btn-primary" onclick="">
                Sửa
              </button>
            </div>
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
  <scrip  type="module" src="<?php echo base_url();?>assets/js/Admin/Sualogonameweb.js"></script>
<!-- end pagewrapper -->
<?= $this->endSection(); ?>