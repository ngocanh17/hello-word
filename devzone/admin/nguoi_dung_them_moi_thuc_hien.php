<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản trị người dùng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
                // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà các b muốn lấy dl
                $ket_noi = mysqli_connect("localhost","root","","devzone.db");
                //2. Lấy ra dữ liệu mong muốn(Tin tức)
                $id_nguoi_dung = $_POST['txtid'];
                $ten_nguoi_dung = $_POST['txttennd'];
                $email = $_POST['txtemail'];
                $mat_khau = $_POST['txtmatkhau'];
                $ghi_chu = $_POST['txtghichu'];
            $sql = "
                INSERT INTO `tbl_nguoi_dung` (`id_nguoi_dung`, `ten_nguoi_dung`, `email`, `mat_khau`, `ghi_chu`)
                VALUES (NULL, '".$ten_nguoi_dung."', '".$email."', '".$mat_khau."', '".$ghi_chu."')";
                //3. Thực thi câu lệnh lấy dữ liệu mong muốn
                      $nd = mysqli_query($ket_noi, $sql);
                //4.  Thông báo chèn dữ liệu thành công và đẩy các bạn về trang quản trị tin tức
                      echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm người dùng thành công');
                    window.location.href='quan_tri_nguoi_dung.php';
                </script>
                      ";
                  ;?>

    </body>
</html>
