

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Khóa học thêm mới</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('../config.php');

            // 2. Lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
            //$khoa_hoc_id = $_POST["txtID"];
            $ten_khoa_hoc = $_POST["txttenkhoahoc"];
            $hinh_thuc = $_POST["txthinhthuc"];
            $buoi_hoc = $_POST["txtbuoihoc"];
            $thoi_gian = $_POST["txtthoigian"];
            $gia = $_POST["txtgia"];
            $mo_ta = $_POST["txtMoTa"];
            // Lấy ra được thông tin liên quan Ảnh minh họa & đẩy nội dung bức ảnh vào 1 thư mục nào đó trên Máy chủ Web
            $noi_dat_file_anh_minh_hoa = "../assets/img/hiền".basename($_FILES["txtanhkhoahoc"]["name"]);
            $file_anh_tam = $_FILES["txtanhkhoahoc"]["tmp_name"];
            $ket_qua_up_anh = move_uploaded_file($file_anh_tam, $noi_dat_file_anh_minh_hoa);
            if(!$ket_qua_up_anh) {
                $anh_khoa_hoc = NULL;
            } else {
                $anh_khoa_hoc = basename($_FILES["txtanhkhoahoc"]["name"]);
            }

            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL)
            $sql = "  
                    INSERT INTO `tbl_khoa_hoc`(`khoa_hoc_id`, `ten_khoa_hoc`, `hinh_thuc`, `buoi_hoc`, `thoi_gian`, `gia`, `anh_khoa_hoc`, `mo_ta`) 
                    VALUES ( NULL , '".$ten_khoa_hoc."', '".$hinh_thuc."', '".$buoi_hoc."', '".$thoi_gian."','".$gia."', '".$anh_khoa_hoc."', '".$mo_ta."' )
                   ";
                     
            // echo $sql; exit();

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $khoa_hoc_id = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới bài viết thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='quan_tri_khoa_hoc.php';
                </script>
            ";
        ;?>
    </body>
</html>