<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
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
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Tên Video</label>
                            <div class="col-sm-9">
                                <input type="text" name="tenvideo" class="form-control" id="tenvideo"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Link Video</label>
                            <div class="col-sm-9">
                                <input type="text" name="linkvideo" class="form-control" id="linkvideo"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>
                       
                        <div class="border-top">
                            <div class="card-body text-end">
                                <button id="dangvideo" type="button" class="btn btn-primary" onclick="submitFormDangVideo()">
                                    Đăng
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>