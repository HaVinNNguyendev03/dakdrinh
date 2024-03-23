<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<div class="page-wrapper">
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa video này không?
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
                <h4 class="page-title">Thư Viện Ảnh</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Thư Viện Ảnh
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
            </div>
            <div class="card-button text-right">
                <a class="btn text-white" data-mdb-ripple-init="" style="background-color: #55acee;"
                    href="<?php echo base_url() ?>admin/dangvideo" role="button">
                    Thêm Video
                </a>
            </div>

        </div>
        <div class="row" style="align-items: flex-start;">
            <?php foreach ($video as $item): ?>
                <div class="col-md-4 px-2 my-2">
                    <div class="card"
                        style="max-height: 300px;height: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                        <iframe class="col-12 mx-auto my-1" width="auto" height="300" src="<?= $item['linkvideo'] ?>"
                            frameborder="0" allowfullscreen title="YouTube Video"></iframe>
                    </div>
                    <div class="card-body p-0" style="flex-grow: 1; overflow: hidden;">
                        <p class="card-title">
                            <?= $item['tenvideo'] ?>
                        </p>
                    </div>
                    <div class="card-button text-right">
                        <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;"
                            href="<?php echo base_url() ?>thuvien/thuvienvideo" role="button">
                            Xem
                        </a>
                        <a class="btn text-white" data-mdb-ripple-init style="background-color: #ffac44;"
                        href="<?= base_url('thuvienvideo/getvideo/' . $item['idvideo']) ?>" role="button">
                            Sửa
                        </a>
                        <a class="btn Video-xoa text-white" data-mdb-ripple-init style="background-color: #dd4b39;" href="<?= base_url('xoavideo/' . $item['idvideo']) ?>"  data-idvideo ="<?= $item['idvideo'] ?>" role="button">Xóa</a>
                    </div>
                </div>
            <?php endforeach ?>
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
<?= $this->endSection(); ?>