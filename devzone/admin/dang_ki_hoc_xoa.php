<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang xóa người đăng kí học</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
    	<?php  
	          //1.
	         $ket_noi = mysqli_connect("localhost","root","","devzone.db");
	         //2.
	         $dang_ki_hoc_id = $_GET["id"];
	         //3. 
	         $sql= "
	         		DELETE 
                    FROM `tbl_dang_ki_hoc` 
                    WHERE `tbl_dang_ki_hoc`.`dang_ki_hoc_id` ='".$dang_ki_hoc_id."'
                    ";
	              
	          //4. thu thi cau lenh truy van (muc dich tra ve du lieu cac ban can)
	          $noi_dung_dang_ki_hoc = mysqli_query($ket_noi,$sql);
	          //5. hiện ra thông báo các bạn đã thêm mới tin tức thành công
	          echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã thực hiện xóa thành công');
            	</script>
            ";
	          echo "
            	<script type='text/javascript'>
            		window.location.href='quan_tri_dang_ki_hoc.php';
            	</script>
            ";

    ;?>
    </body>
</html>
