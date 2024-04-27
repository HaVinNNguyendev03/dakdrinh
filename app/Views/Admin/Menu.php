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
                    Bạn có chắc chắn muốn xóa Menu này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Quản Lý Menu</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Quản Lý Menu
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
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="card-button text-right">
                <a class="btn text-white" data-mdb-ripple-init="" style="background-color: #55acee;"
                    href="<?php echo base_url() ?>admin/dangmenu" role="button">
                    Thêm Menu
                </a>
            </div>
        </div>
        <table id="examplemenu" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>idmenu</th>
                    <th>Tên Menu</th>
                    <th>Chú Thích</th>
                    <th>Xem Submenu</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $mn): ?>
                    <tr>
                        <td>
                            <?= $mn['idmenu'] ?>
                        </td>
                        <td>
                            <?= $mn['tenmenu'] ?>
                        </td>
                        <td>
                            <?= $mn['ghichu'] ?>
                        </td>
                        <td>
                            <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" href="<?= base_url('/api/getsubmenu/' . $mn['idmenu']) ?>" data-idmenu="<?= $mn['idmenu'] ?>" role="button">
                                Xem
                            </a>
                        </td>
                        <td>
                            <a class="btn text-white" href="<?= base_url('/api/suamenu/' . $mn['idmenu']) ?>"
                                data-mdb-ripple-init style="background-color: #ffac44;" role role="button">
                                Sửa
                            </a>
                        </td>
                        <td>
                            <a class="btn menu-xoa text-white" href="<?= base_url('/api/xoamenu/' . $mn['idmenu']) ?>" data-idmenu = "<?= $mn['idmenu'] ?>" style="background-color: #dd4b39;"
                                role="button">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>idmenu</th>
                    <th>Tên Menu</th>
                    <th>Chú Thích</th>
                    <th>Xem Submenu</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<?= $this->endSection(); ?>