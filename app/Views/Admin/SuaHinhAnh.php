<?= $this->extend('Admin/Layout/base'); ?>
<?= $this->section('Admin'); ?>
<p style="display:none;" id="idthuvienanh"><?= $hinhanh['idthuvienanh'] ?></p>
<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Sửa Hình Ảnh</h4>
                            <h1 name="id" style="display: none;">
                                <?php echo session()->get('id'); ?>
                            </h1>
                            <h1 name="tentaikhoan" style="display: none;">
                                <?php echo session()->get('tentaikhoan'); ?>
                            </h1>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Ngày
                                Đăng</label>
                            <div class="col-sm-9">
                                <input type="text" name="ngaydanganh" class="form-control" id="ngaydanganh"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Danh Mục Năm</label>
                            <div class="col-sm-9">
                                <input type="text" name="danhmucnamanh" class="form-control" id="danhmucnamanh"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Chú Thích</label>
                            <div class="col-sm-9">
                                <input type="text" name="chuthichanh" class="form-control" id="chuthichanh"
                                    placeholder="Company Name Here" />
                            </div>
                        </div>
                        <div class="form-group row align-items-start">
                        <label class="col-sm-3 text-end control-label col-form-label">Ảnh Thư Viện</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input name="hinhanh" type="file" class="custom-file-input"
                                        id="validatedCustomFile" required style="border: 1px solid;" />
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body text-end">
                                <button id="suahinhanh" type="button" class="btn btn-primary" onclick="submitFormEditHinhAnh()">
                                    Chỉnh Sửa
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>