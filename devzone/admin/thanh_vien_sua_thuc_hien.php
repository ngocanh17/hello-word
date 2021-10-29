<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật thành viên</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('../config.php');

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id_thanh_vien = $_POST['txtid'];
            $ten_thanh_vien = $_POST['txttennd'];
            $email_thanh_vien = $_POST['txtemail'];
            $so_dien_thoai = $_POST['txtsdt'];
            $facebook = $_POST['txtfb'];
            $ghi_chu = $_POST['txtghichu'];
            // Lấy ra được thông tin liên quan Ảnh minh họa & đẩy nội dung bức ảnh vào 1 thư mục nào đó trên Máy chủ Web
            $noi_dat_file_anh = "../images/".basename($_FILES["txtanh"]["name"]);
            $file_anh_tam = $_FILES["txtanh"]["tmp_name"];
            $ket_qua_up_anh = move_uploaded_file($file_anh_tam, $noi_dat_file_anh);
            if(!$ket_qua_up_anh) {
                $hinh_anh = NULL;
            } else {
                $hinh_anh = basename($_FILES["txtanh"]["name"]);
            }
            if($hinh_anh == NULL) {
                $sql = "
                     UPDATE `tbl_thanh_vien`  
                        SET `ten_thanh_vien` = '".$ten_thanh_vien."', `email_thanh_vien` = '".$email_thanh_vien."', `so_dien_thoai` = '".$so_dien_thoai."', `facebook` = '".$facebook."', `ghi_chu` = '".$ghi_chu."'
                     WHERE `tbl_thanh_vien`.`thanh_vien_id` = '".$id_thanh_vien."';

                    ";
            } else {          
                    $sql = "
                        UPDATE `tbl_thanh_vien` 
                        SET `ten_thanh_vien` = '".$ten_thanh_vien."', `email_thanh_vien` = '".$email_thanh_vien."',`so_dien_thoai` = '".$so_dien_thoai."',`anh` = '".$hinh_anh."',`facebook` = '".$facebook."',`ghi_chu` = '".$ghi_chu."' 
                        WHERE `tbl_thanh_vien`.`thanh_vien_id` = '".$id_thanh_vien."';
                         
                                ";                
            }



            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nd = mysqli_query($ket_noi, $sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật thành viên thành công');
                    window.location.href='quan_tri_thanh_vien.php';
                </script>

            ";

        ;?>

    </body>
</html>
