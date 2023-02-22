<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/admin.css">
  <script src="https://kit.fontawesome.com/d829d3809c.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <nav style="background-color: #1D2B36;padding-bottom: 400px;" class="sidebar" id="sidebar">
        <ul  class="nav">
          <li style="display: flex;gap: 20px;padding: 20px 50px;align-items: center;" class=" nav-profile">
           
              <div class="nav-profile-image">
                <img width="50px"  src="../view/images/adminlogo.png" alt="profile">
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="text-white font-weight-bold mb-2">Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
           
          </li>
          <li style="background-color: #1D2B36;margin-top: 5%;" class="nav-item">

            <a class="nav-link" href="index.php?act=home">
              <span class="menu-title text-white">Dashboard</span>
              <i style="color:white;margin-left: 35%;" class="fa-solid fa-house"></i>
            </a>
          </li>
          <li style="background-color: #1D2B36;" class="nav-item">

            <a class="nav-link" href="index.php?act=listdm">
              <span class="menu-title text-white">Danh mục</span>
              <i style="color:white;margin-left: 38%;" class="fa-solid fa-list"></i>
            </a>
          </li>
          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href="index.php?act=listsp">
              <span class="menu-title text-white">Sản phẩm</span>
              <i style="color:white;margin-left: 38%;" class="fa-solid fa-folder"></i>
            </a>
          </li>
          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href="index.php?act=dskh">
              <span class="menu-title text-white">Khách hàng</span>
              <i style="color:white;margin-left: 33%;" class="fa-solid fa-person"></i>
            </a>
          </li>
          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href="index.php?act=dsbl">
              <span class="menu-title text-white">Bình luận</span>
              <i style="color:white;margin-left: 37%;" class="fa-solid fa-users"></i>
            </a>
          </li>
          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href="index.php?act=thongke">
              <span class="menu-title text-white">Thống kê</span>
              <i style="color:white;margin-left: 38%;" class="fa-solid fa-layer-group"></i>
            </a>
          </li>

          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href=" index.php?act=listbill">
              <span class="menu-title text-white">Đơn hàng</span>
              <i style="color:white;margin-left: 35%;" class="fa-solid fa-cart-shopping"></i>
            </a>
          </li>

          <li style="background-color: #1D2B36;" class="nav-item">
            <a class="nav-link" href="http://localhost/PHP1/ky4/greenshop/">
              <span class="menu-title text-white">Thoát</span>
              <i style="color:white;margin-left: 47%;" class="fa-solid fa-right-to-bracket"></i>
            </a>
          </li>

      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div style="background-color: white;" class="content-wrapper">

          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">

              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">

              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">

              </div>
            </div>
          </div>