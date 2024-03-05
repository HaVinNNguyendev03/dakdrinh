<!doctype html>
<html lang="en">

    <head>
        <title>Login 08</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/auth.css">
    </head>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Đăng Nhập Admin</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5" style="
   padding: 30px 30px 100px 30px!important;
">
                            <div class="color icon d-flex align-items-center justify-content-center" style="
    background-color: #151f41 !important;
">
                                <img src="<?php echo base_url() ?>assets/img/logofooterr.png" alt=""
                                    style="width: 40px;">
                            </div>
                            <h3 class="text-center mb-4">Xin Chào Quản Trị Viên</h3>
                            <form action="/loginauth" method="post" class="login-form">
                                <div class="form-group mb-3">
                                    <input name="tentaikhoan" type="text" class="form-control rounded-left" placeholder="Tên Đăng Nhập"
                                        required>
                                </div>
                                <div class="form-group d-flex">
                                    <input name="matkhau" type="password" class="form-control rounded-left" placeholder="Mật Khẩu"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" style="
    background-color: #151f41 !important;
">Đăng Nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/Admin/auth.js"></script>

    </body>

</html>