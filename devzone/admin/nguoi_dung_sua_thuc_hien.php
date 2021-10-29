<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cập nhật người dùng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            $ket_noi = mysqli_connect("localhost","root","","devzone.db");

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $nguoi_dung_id = $_POST['txtid'];
            $ten_nguoi_dung = $_POST['txttennd'];
            $email = $_POST['txtemail'];
            $ghi_chu = $_POST['txtghichu'];

            $sql = "
            UPDATE `tbl_nguoi_dung` 
            SET `ten_nguoi_dung` = '".$ten_nguoi_dung."', `email` = '".$email."',`ghi_chu` = '".$ghi_chu."' 
            WHERE `tbl_nguoi_dung`.`id_nguoi_dung` = '".$nguoi_dung_id."'
            ";
            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $nd = mysqli_query($ket_noi, $sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật quản trị người dùng thành công');
                    window.location.href='quan_tri_nguoi_dung.php';
                </script>

            ";

        ;?>

    </body>
</html>
