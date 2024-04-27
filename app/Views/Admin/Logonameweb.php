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
        <?php foreach ($logoweb as $item) : ?>
          <li><?= $item['id'] ?></li>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm Thông Tin Dự Án</h4>
              <h1 name="id" style="display: none;">
                <?php echo session()->get('id'); ?>
              </h1>
              <h1 name="tentaikhoan" style="display: none;">
                <?php echo session()->get('tentaikhoan'); ?>
              </h1>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Ảnh logo :</label>
                <div class="col-md-4">
                <img src="<?= $item['anhlogo'] ?>" alt="">
                </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-3 text-end control-label col-form-label">Ảnh icon :</label>
              <div class="col-md-4">
               <img src="<?= $item['anhicon'] ?>" alt="">
              </div>
            </div>
            <div class="form-group row">
              <label for="fname" class="col-sm-3 text-end control-label col-form-label">Số Điện Thoại</label>
              <div class="col-sm-9">
                <p><?= $item['sodienthoai'] ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="fname" class="col-sm-3 text-end control-label col-form-label">Đường Link Email</label>
              <div class="col-sm-9">
              <p><?= $item['linkemail'] ?></p>  
              </div>
            </div>
            <div class="form-group row">
              <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên Website</label>
              <div class="col-sm-9">
              <p><?= $item['tenweb'] ?></p>
              </div>
            </div>
            <div class="border-top">
              <div class="card-body text-end">
                <button  id="SuaSlogan" type="button" class="btn btn-primary text-white"  onclick="">
                  <a href="<?= base_url('logoweb/editlogoweb/' . $item['id']) ?>">Tới Trang Sửa</a>
                </button>
              </div>
        </div>
        <?php endforeach ?>
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