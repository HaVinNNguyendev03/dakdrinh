<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"
            integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lg-fb-comment-box.min.css" integrity="sha512-JeQRe3W6dq6H+AAnkomgU8XWGCTM53GmkoYb/R8nmHNOk8xWLwt8bzQmT2cr1Ra0I/WaSTiBOmQOkj7iHXi//w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
       
        <link rel="stylesheet" href="https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        
         <!-- Custom CSS -->
    <link href="<?php echo base_url()?>Admin/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>Admin/dist/css/style.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Admin.css">
    <link rel="stylesheet"type="text/css"href="<?php echo base_url()?>Admin/assets/libs/quill/dist/quill.snow.css"/>
    
</head>     
<body class="w-100">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
     <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    <header class="topbar" data-navbarbg="skin5">
        <?= $this->include('Admin/Layout/Header') ;?>
    </header>
     <main>
        <?= $this->include('Admin/Layout/Left') ;?>
        <?= $this->renderSection('Admin') ;?>
     </main>
     <footer class="bg-body-tertiary text-center text-lg-start bg-primary footer footer-bg">
        <?= $this->include('Admin/Layout/Footer') ;?>
     </footer>
    </div>
     
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="module" src="<?php echo base_url();?>assets/js/Client/thuvienanh.js"></script>
 <!-- All Jquery -->
    <!-- ============================================================== --> 
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>Admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>Admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>Admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>Admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url() ?>Admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/dist/js/pages/chart/chart-page-init.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/chart/turning-series.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/chart/matrix.charts.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>Admin/assets/libs/quill/dist/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js" integrity="sha512-FJ2OYvUIXUqCcPf1stu+oTBlhn54W0UisZB/TNrZaVMHHhYvLBV9jMbvJYtvDe5x/WVaoXZ6KB+Uqe5hT2vlyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="<?php echo base_url();?>assets/js/Admin/Left.js"></script>
    <script type="module" src="<?php echo base_url();?>assets/js/Admin/DanhSachDangTin.js"></script>
    <script type="module" src="<?php echo base_url();?>assets/js/Admin/SuaTin.js"></script>
    <script type="module" src="<?php echo base_url();?>assets/js/Admin/XoaTin.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="<?php echo base_url()?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/Admin/DangTin.js"></script>
    <script src="<?php echo base_url()?>ckfinder/ckfinder.js"></script>
</html>