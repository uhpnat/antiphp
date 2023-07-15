<?php
include_once  '../module/lib/database.php';
include_once '../module/helpers/format.php';
spl_autoload_register(function ($className) {
  include_once '../module/classes/' . $className . '.php';
});
$db = new Database();
$fm = new Format();
$ct = new cart();
$cs = new customer();
$user = new user();
$cat = new category();
$product = new product();
$brand = new brand();
?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<!--end::Theme mode setup on page load-->
<!--Begin::Google Tag Manager (noscript) -->
<!--End::Google Tag Manager (noscript) -->
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./categories.php">categories.php</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./brand.php">brand.php</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./products.php">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./list.php">Người dùng</a>
        </li>

      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>