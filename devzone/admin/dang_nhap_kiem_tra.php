<?php 
    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
    $ket_noi = mysqli_connect("localhost", "root", "", "devzone.db");

    // 2. Viết câu lệnh truy vấn để kiểm tra xem NGƯỜI DÙNG có tồn tại trong BẢNG NGƯỜI DÙNG?
    $email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];

    $sql = "
              SELECT * 
              FROM tbl_nguoi_dung
              WHERE email = '".$email."' AND mat_khau = '".$mat_khau."'
           ";

    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
    $xac_thuc_nguoi_dung = mysqli_query($ket_noi, $sql);

    // 4. Xử lý dữ liệu mà các bạn thu được
    $so_luong_ban_ghi = mysqli_num_rows($xac_thuc_nguoi_dung);	

    # TH1: Nếu số lượng bản ghi = 0 --> email, password không chính xác --> đẩu người dùng về trang đăng nhập
    # TH2: Nếu số lượng bản ghi = 1 --> email, password chính xác --> đẩu người dùng về trang quản trị hệ thống

    if ($so_luong_ban_ghi==0) {
		echo "
        	<script type='text/javascript'>
        		window.alert('Bạn không có quyền truy cập');
        	</script>
        ";

        echo "
        	<script type='text/javascript'>
        		window.location.href='dang_nhap.php';
        	</script>
        ";
    } else {
    	// Khởi tạo phiên làm việc cho người đăng nhập thành công
    	session_start();
    	$_SESSION['da_dang_nhap'] = 1;

		echo "
        	<script type='text/javascript'>
        		window.alert('Bạn đã đăng nhập thành công');
        	</script>
        ";

        echo "
        	<script type='text/javascript'>
        		window.location.href='quan_tri_nguoi_dung.php';
        	</script>
        ";
    }
;?>