

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa khóa học</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
          tinymce.init({
            selector: '#txtMoTa'
          });
        </script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">DEVZONE</a>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị khóa học</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item active">Quản trị khóa học</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách khóa học | <a href="khoa_hoc_them_moi.php">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <?php
                                    // Viết ra các câu lệnh để load dữ liệu và hiển thị lên Webpage; giúp người quản trị chỉ cần hiệu chỉnh những nội dung mà họ mong muốn
                                        
                                    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                     include('../config.php');

                                    // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                                    $khoa_hoc_id = $_GET["id"];

                                    $sql = "
                                              SELECT * 
                                              FROM tbl_khoa_hoc 
                                              WHERE khoa_hoc_id = ".$khoa_hoc_id."
                                              ORDER BY khoa_hoc_id DESC
                                    ";

                                    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                    $khoa_hoc_id = mysqli_query($ket_noi, $sql);

                                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                                    $row = mysqli_fetch_array($khoa_hoc_id);
                                ;?>
                                <form method="POST" action="khoa_hoc_sua_thuc_hien.php" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txttenkhoahoc" name="txttenkhoahoc" placeholder="Tên khóa học" value="<?php echo $row['ten_khoa_hoc'];?>" />
                                        <label for="txttenkhoahoc">Tên khóa học</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txthinhthuc" name="txthinhthuc" placeholder="hình thức của khóa học" value="<?php echo $row['hinh_thuc'];?>" />
                                        <label for="txthinhthuc">Hình thức khóa học</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtbuoihoc" name="txtbuoihoc" placeholder="số buổi học" value="<?php echo $row['buoi_hoc'];?>" />
                                        <label for="txtbuoihoc">buổi học</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtthoigian" name="txtthoigian" placeholder="Thời gian" value="<?php echo $row['thoi_gian'];?>" />
                                        <label for="txtthoigian">Thời gian</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtgia" name="txtgia" placeholder="Gía của khóa học" value="<?php echo $row['gia'];?>" />
                                        <label for="txtgia">Giá</label>
                                    </div>                                   
                                    <div class="form-floating mb-3">
                                        <input type="file" class="form-control" id="txtanhkhoahoc" name="txtanhkhoahoc" placeholder="Ảnh khóa học" value="<?php echo $row['anh_khoa_hoc'];?>" />
                                        <label for="txtanhkhoahoc">Ảnh khóa học</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="txtMoTa" name="txtMoTa" placeholder="Mô tả khóa học"><?php echo $row['mo_ta'];?></textarea>
                                        <label for="txtMoTa">Mô tả khóa học</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <input type="hidden" name="txtID" value="<?php echo $row['khoa_hoc_id'];?>">
                                        <div class="d-grid"><button type="submit">Cập nhật</button></div>
                                    </div>
                                </form>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>