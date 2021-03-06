<?php 
    // Mục đích kiểm tra xem bạn có quyền truy cập trang này không thông qua BIẾN $_SESSION['da_dang_nhap']
    session_start();
    if (!$_SESSION["da_dang_nhap"]) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
;?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang quản trị hệ thống </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">DevZone</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dang_nhap.php">Đăng nhập tài khoản khác</a></li>
                        <li><a class="dropdown-item" href="dang_xuat.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Danh mục</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hệ thống
                            </a>
                            <a class="nav-link" href="quan_tri_lien_he.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị liên hệ
                            </a>
                            <a class="nav-link" href="quan_tri_dang_ki_hoc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị người đăng kí
                            </a>
                            <a class="nav-link" href="quan_tri_blog.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị blog
                            </a>
                            <a class="nav-link" href="quan_tri_nguoi_dung.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị người dùng
                            </a>
                            <a class="nav-link" href="quan_tri_khoa_hoc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị khóa học
                            </a>
                            <a class="nav-link" href="quan_tri_thanh_vien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị thành viên
                            </a>
                        </div>
                    </div>
                </nav>
            </div>


         <?php  
                  //1.
                include('../config.php');
                 //2.
                $sql1= "
                        SELECT *
                        FROM tbl_lien_he";
                $sql2="
                        SELECT *
                        FROM tbl_dang_ki_hoc";
                $sql3="
                        SELECT *
                        FROM tbl_nguoi_dung";

                $sql4="
                        SELECT *
                        FROM tbl_blog";

                $sql5= "
                        SELECT *
                        FROM tbl_khoa_hoc";
                $sql6 = "
                        SELECT *
                        FROM tbl_thanh_vien";
                  //3. 
                  $noi_dung_lien_he = mysqli_query($ket_noi,$sql1);
                  $noi_dung_dang_ki_hoc= mysqli_query($ket_noi,$sql2);
                  $noi_dung_nguoi_dung = mysqli_query($ket_noi,$sql3);
                  $noi_dung_blog = mysqli_query($ket_noi,$sql4);
                  $noi_dung_khoa_hoc = mysqli_query($ket_noi,$sql5);
                  $noi_dung_thanh_vien = mysqli_query($ket_noi,$sql6);

                  //4. đếm
                  $so_luong_lien_he= mysqli_num_rows($noi_dung_lien_he);
                  $so_luong_dang_ki_hoc= mysqli_num_rows($noi_dung_dang_ki_hoc);
                  $so_luong_nguoi_dung = mysqli_num_rows($noi_dung_nguoi_dung);
                  $so_luong_blog = mysqli_num_rows($noi_dung_blog);
                  $so_luong_khoa_hoc = mysqli_num_rows($noi_dung_khoa_hoc);
                  $so_luong_thanh_vien = mysqli_num_rows($noi_dung_thanh_vien);
            ;?>




            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị hệ thống</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6" style="margin-left: 80px;">
                                <div class="card bg-primary text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị liên hệ <div style="width: 30%;float: right;"><img src="../images/pic3.png"></div>
                                    <br><?php echo $so_luong_lien_he;?> thông tin 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"  style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_lien_he.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="margin-left: 35px;">
                                <div class="card bg-warning text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị người đăng kí <div style="width: 25%;float: right;"><img src="../images/pic2.png"></div>
                                    <br><?php echo $so_luong_dang_ki_hoc;?> đăng kí học</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_dang_ki_hoc.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="margin-left: 35px;">
                                <div class="card bg-success text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị Blog <div style="width: 30%;float: right;"><img src="../images/pic4.png"></div>
                                    <br><?php echo $so_luong_blog;?> blog</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_blog.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="margin-left: 80px;">
                                <div class="card bg-danger text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị người dùng <div style="width: 30%;float: right;"><img src="../images/pic1.png"></div>
                                    <br><?php echo $so_luong_nguoi_dung;?> người dùng<br> </div> 
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_nguoi_dung.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="margin-left: 35px;">
                                <div class="card bg-success text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị khóa học <div style="width: 30%;float: right;"><img src="../images/pic5.png"></div>
                                    <br><?php echo $so_luong_khoa_hoc;?> khóa học</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_khoa_hoc.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="margin-left: 35px;">
                                <div class="card bg-warning text-white mb-4" style="border: 1px solid #2e4757; width: 295px; height: 135px;">
                                    <div class="card-body" style="color: black; background-color: #ffffff;">Quản trị thành viên <div style="width: 30%;float: right;"><img src="../images/pic6.png"></div>
                                    <br><?php echo $so_luong_thanh_vien;?> thành viên</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #2e4757">
                                        <a class="small text-white stretched-link" href="quan_tri_thanh_vien.php">chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Cộng đồng lập trình DevZone</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>