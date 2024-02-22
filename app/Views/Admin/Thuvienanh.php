<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<!-- <img class="tintuc-imglon card-img" src=""
                            alt="Card image"
                            style="max-width: 200px; max-height: 100px; margin: auto; object-fit: contain;"> -->
<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<div class="page-wrapper">
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
                    href="<?php echo base_url() ?>admin/danghinhanh" role="button">
                    Thêm Hình Ảnh
                </a>
            </div>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Idhinhanh</th>
                    <th>Danh Mục Năm</th>
                    <th>Ngày Đăng</th>
                    <th>Hình Ảnh</th>
                    <th>Chú Thích</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thuvienanh as $ha) : ?>
                    <tr>
                    <td><?= $ha['idthuvienanh'] ?></td>
                    <td><?= $ha['danhmucnamanh'] ?></td>
                    <td><?= $ha['ngaydanganh'] ?></td>
                    <td><?= $ha['hinhanh'] ?></td>
                    <td><?= $ha['chuthichanh'] ?></td>
                    <td><a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" role="button">
                            Xem
                        </a></td>
                    <td><a class="btn text-white" data-mdb-ripple-init style="background-color: #ffac44;" role
                            role="button">
                            Sửa
                        </a></td>
                    <td><a class="btn Baiviet-xoa text-white" data-mdb-ripple-init style="background-color: #dd4b39;"
                            role="button">
                            Xóa
                        </a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Idhinhanh</th>
                    <th>Danh Mục Năm</th>
                    <th>Ngày Đăng</th>
                    <th>Hình Ảnh</th>
                    <th>Chú Thích</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </tfoot>
        </table>
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