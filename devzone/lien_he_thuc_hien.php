<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang liên hệ thực hiện</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
    	           <?php
                    $ket_noi = mysqli_connect("localhost","root","","devzone.db");

                    if(isset($_POST['THUCHIEN']))
                    {
                      $ho_ten = $_POST['txtHoTen'];
                      $email = $_POST['txtEmail'];
                      $sdt = $_POST['txtSdt'];
                      $noi_dung = $_POST['txtNoiDung'];
                    }
                      $sql_lienhe= mysqli_query($ket_noi,"INSERT INTO `tbl_lien_he` (`lien_he_id`, `ho_ten`, `email`, `sdt`, `noi_dung`, `ngay_gui`) 
                          VALUES (NULL, '".$ho_ten."', '".$email."', '".$sdt."', '".$noi_dung."', current_timestamp())");
                      echo "
                            <script type='text/javascript'>
                                window.alert('Cảm ơn bạn đã gửi liên hệ cho chúng tôi');
                            </script>
                            ";
                      echo "
                        <script type='text/javascript'>
                            window.location.href='index.php';
                        </script>
                            ";
                    ;?>
    </body>
</html>
