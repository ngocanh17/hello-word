<?php
 
// Include database, session, general info
require_once 'dang_nhap_kiem_tra.php';
// Xoá session
$_SESSION->destroy();
// Trở về trang chủ
header('Location: dang_nhap.php');
?>