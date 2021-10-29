<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php         
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('../config.php');


            // 2. Lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
            $id_blog = $_POST["txtID"];
            $tieu_de = $_POST["txtTieuDe"];
            $mo_ta = $_POST["txtMoTa"];
            $noi_dung = $_POST["txtNoiDung"];
            $nguoi_viet = $_POST["txtNguoiViet"];

            // Lấy ra được thông tin liên quan Ảnh minh họa & đẩy nội dung bức ảnh vào 1 thư mục nào đó trên Máy chủ Web
            $noi_dat_file_anh = "../images/".basename($_FILES["txtHinhAnh"]["name"]);
            $file_anh_tam = $_FILES["txtHinhAnh"]["tmp_name"];
            $ket_qua_up_anh = move_uploaded_file($file_anh_tam, $noi_dat_file_anh);
            if(!$ket_qua_up_anh) {
                $hinh_anh = NULL;
            } else {
                $hinh_anh = basename($_FILES["txtHinhAnh"]["name"]);
            }

            // 3. Viết câu lệnh truy vấn để sửa dữ liệu vào bảng TIN TỨC trong CSDL)
            if($hinh_anh == NULL) {
                $sql = "
                    UPDATE `tbl_blog` 
                    SET `tieu_de` = '".$tieu_de."', `mo_ta` = '".$mo_ta."', `noi_dung` = '".$noi_dung."', `nguoi_viet` = '".$nguoi_viet."' 
                    WHERE `tbl_blog`.`blog_id` = '".$id_blog."'; 
                    ";
            } else {          
                $sql = "
                    UPDATE `tbl_blog` 
                     SET `tieu_de` = '".$tieu_de."', `mo_ta` = '".$mo_ta."', `noi_dung` = '".$noi_dung."', `hinh_anh` = '".$hinh_anh."', `nguoi_viet` = '".$nguoi_viet."' 
                     WHERE `tbl_blog`.`blog_id` = '".$id_blog."'; 
                    ";                
            }

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_sua= mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã sửa tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã sửa bài viết thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='quan_tri_blog.php';
                </script>
            ";
        ;?>
    </body>
</html>