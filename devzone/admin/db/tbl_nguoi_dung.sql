-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 05:11 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuvankhoahoc.db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id_nguoi_dung` int(10) NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id_nguoi_dung`, `ten_nguoi_dung`, `email`, `mat_khau`, `ghi_chu`) VALUES
(1, 'Nguyễn Ngọc Anh', 'anhhhh1712@gmail.com', '123456', '<p>Nh&oacute;m Trưởng</p>'),
(2, 'Đồng Thị Sen', 'dongsen2001@gmail.com', '234567', NULL),
(3, 'Trịnh Minh Hiếu', 'hieutrinh6798@gmail.com', '345678', NULL),
(4, 'Nguyễn Thị Phương Thảo', '22a4040033@gmail.com', '456789', NULL),
(5, 'Vũ Thị Thu Hiền', 'vuthithuhien30@gmail.com', '012345', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id_nguoi_dung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
