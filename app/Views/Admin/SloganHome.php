<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Slogan</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Slogan
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
       
        <table id="exampleslogan" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nội Dung Slogan</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slogan as $sg): ?>
                    <tr>
                        <td>
                            <?= $sg['idslogan'] ?>
                        </td>
                        <td>
                            <?= $sg['noidungslogan'] ?>
                        </td>
                        <td>
                            <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" role="button">
                                Xem
                            </a>
                        </td>
                        <td>
                            <a class="btn text-white" href="<?= base_url('sloganhome/getsloganhome/' . $sg['idslogan']) ?>"
                                data-mdb-ripple-init style="background-color: #ffac44;" role role="button">
                                Sửa
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Nội Dung Slogan</th>
                    <th>Xem</th>
                    <th>Sửa</th>
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