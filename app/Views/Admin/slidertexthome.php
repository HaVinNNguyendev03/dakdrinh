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
                <h4 class="page-title">slidertexthome</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                slidertexthome
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
       
        <table id="exampleslidertexthome" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nội Dung sldiertexthome</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slidertexthome as $slt): ?>
                    <tr>
                        <td>
                            <?= $slt['idslidertexthome'] ?>
                        </td>
                        <td>
                            <?= $slt['textsliderhome'] ?>
                        </td>
                        <td>
                            <a class="btn text-white" data-mdb-ripple-init style="background-color: #55acee;" role="button">
                                Xem
                            </a>
                        </td>
                        <td>
                            <a class="btn text-white" href="<?= base_url('slidertexthome/getslidertexthome/' . $slt['idslidertexthome']) ?>"
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