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
                    Bạn có chắc chắn muốn xóa ảnh slider này không?
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
                <h4 class="page-title">Sliderhome</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                sliderhome
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
                    href="<?php echo base_url() ?>admin/dangthongtinduan" role="button">
                    Thêm Dự Án
                </a>
            </div>
        </div>
        <table id="examplethongtinduan" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tiêu Đề Dự Án</th>
                    <th>Nội Dung Dự Án</th>
                    <th>Hình Ảnh</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($duan as $da): ?>
                    <tr>
                        <td>
                            <?= $da['idthongtinduan'] ?>
                        </td>
                        <td>
                            <?= $da['tieudethongtinduan'] ?>
                        </td>
                        <td>
                            <?= $da['noidungthongtinduan'] ?>
                        </td>
                        <td>
                           <img class="anhsliderhomecss" src="<?= $da['anhrthumnail'] ?>" alt="">
                        </td>
                        <td><a class="btn text-white" href="<?= base_url('du-an/' . $da['idthongtinduan']) ?>" data-mdb-ripple-init style="background-color: #55acee;" role="button">
                                Xem
                            </a></td>
                        <td><a class="btn text-white" href="<?= base_url('thongtinduan/dangthongtinduan/' . $da['idthongtinduan']) ?>"
                                data-mdb-ripple-init style="background-color: #ffac44;" role role="button">
                                Sửa
                            </a></td>
                        <td><a class="btn thongtinduan-xoa text-white" data-idthongtinduan= "<?= $da['idthongtinduan'] ?>" style="background-color: #dd4b39;"
                                role="button">
                                Xóa
                            </a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Tiêu Đề Dự Án</th>
                    <th>Nội Dung Dự Án</th>
                    <th>Hình Ảnh</th>
                    <th>Xem</th>
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