<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa bài viết này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
      </div>
    </div>
  </div>
</div>
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
                Danh Sach Bảng Tin
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
    <div class="row" style="align-items: flex-start;">
      <?php if (!empty($baiviet)): ?>
        <?php foreach ($baiviet as $bv): ?>
          <div class="col-md-3 px-2 my-2">
            <div class="card"
              style="max-height: 300px;height: 300px; display: flex; flex-direction: column; justify-content: space-between;">
              <img class="tintuc-imglon card-img" src="<?= $bv['anhrthumnail'] ?>" alt="Card image"
                style="max-width: 296px; max-height: 160px;">
              <div class="card-body" style="flex-grow: 1; overflow: hidden;">
                <a class="card-title" href="<?= base_url('bai-viet/' . $bv['idbaiviet']) ?>">
                  <?= $bv['tieudebaiviet'] ?>
                </a>
                <p class="textwith">
                  <?= $bv['tomtatbaiviet'] ?>
                </p>
              </div>
            </div>
            <div class="card-button text-right">
              <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" href="<?= base_url('bai-viet/' . $bv['idbaiviet']) ?>" role="button">
                Xem
              </a>
              <a class="btn text-white" data-mdb-ripple-init style="background-color: #ffac44;"  href="<?= base_url('sua-bai-viet/' . $bv['idbaiviet']) ?>" role="button">
                Sửa
              </a>
              <a class="btn Baiviet-xoa text-white" data-mdb-ripple-init style="background-color: #dd4b39;" href="<?= base_url('xoa-bai-viet/' . $bv['idbaiviet']) ?>"  data-idbaiviet="<?= $bv['idbaiviet'] ?>" role="button">
                Xóa
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <?= $pager->makeLinks($currentPage, $perPage, $total, 'pagination') ?>
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
<!-- end pagewrapper -->
<?= $this->endSection(); ?>