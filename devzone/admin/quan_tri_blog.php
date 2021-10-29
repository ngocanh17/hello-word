<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản trị blog</title>
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
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Nội dung tìm kiếm..." aria-label="Nội dung tìm kiếm..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Tùy chỉnh</a></li>
                        <li><a class="dropdown-item" href="#!">Nhật ký</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Thoát</a></li>
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
                        <h1 class="mt-4">Quản trị blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item active">Quản trị blog</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách bài viết | <a href="blog_them_moi.php">Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Tiêu đề</th>
                                            <th style="text-align: center;">Mô tả</th>
                                            <th style="text-align: center;">Nội dung</th>
                                            <th style="text-align: center;">Hình ảnh</th>
                                            <th style="text-align: center;">Người viết</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: center;">STT</th>
                                            <th style="text-align: center;">Tiêu đề</th>
                                            <th style="text-align: center;">Mô tả</th>
                                            <th style="text-align: center;">Nội dung</th>
                                            <th style="text-align: center;">Hình ảnh</th>
                                            <th style="text-align: center;">Người viết</th>
                                            <th style="text-align: center;">Sửa</th>
                                            <th style="text-align: center;">Xóa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                                        $ket_noi = mysqli_connect("localhost","root","","devzone.db");

                                        // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                                        $sql = "
                                                  SELECT * 
                                                  FROM `tbl_blog` 
                                                  ORDER BY blog_id DESC; 
                                                  ";

                                        // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                        $noi_dung_blog = mysqli_query($ket_noi, $sql);

                                        // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                                        $i=0;
                                        while ($row = mysqli_fetch_array($noi_dung_blog)) 
                                        {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $i;?></td>
                                            <td><?php echo $row["tieu_de"];?></td>
                                            <td><?php echo $row["mo_ta"];?></td>
                                            <td><?php echo $row["noi_dung"];?></td>
                                            <td><?php echo $row["hinh_anh"];?></td>
                                            <td><?php echo $row["nguoi_viet"];?></td>
                                            <td style="text-align: center;"><a href="blog_sua.php?id=<?php echo $row['blog_id'];?>">Sửa</a></td>
                                            <td style="text-align: center;"><a href="blog_xoa.php?id=<?php echo $row['blog_id'];?>">Xóa</a></td>
                                        </tr>                                        
                                        <?php 
                                        }

                                        // 5. Đóng kết nối sau khi sử dụng xong
                                        mysqli_close($ket_noi);
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
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