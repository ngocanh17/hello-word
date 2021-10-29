<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang đăng kí học thực hiện</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php  
            //1.
            include('config.php');

             //2. 
             $ho_ten = $_POST["txtHoTen"];
             $email = $_POST["txtEmail"];
             $sdt = $_POST["txtSdt"];
             $khoa_hoc = $_POST["txtKhoaHoc"];
             $loi_nhan = $_POST["txtLoiNhan"];


             //3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
             $sql= "
                    INSERT INTO `tbl_dang_ki_hoc` (`dang_ki_hoc_id`, `ho_ten`, `email`, `sdt`, `khoa_hoc`, `loi_nhan`, `ngay_gui`) 
                    VALUES (NULL, '".$ho_ten."', '".$email."', '".$sdt."', '".$khoa_hoc."', '".$loi_nhan."', current_timestamp())
                    ";
                  
              //4.
              $noi_dung_dang_ki_hoc = mysqli_query($ket_noi,$sql);
              //5. 
              echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã đăng kí khóa học thành công');
                </script>
            ";
              echo "
                <script type='text/javascript'>
                    window.location.href='dang_ki_hoc.php';
                </script>
            ";

    ;?>
    </body>
</html>
