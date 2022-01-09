-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:36 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061112_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(10) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Hoàng Thu Uyên', 'Nữ', '2001-06-08', 'Sinh Viên', '2019-08-21', '2024-06-30', 'Phú Thọ'),
(3, 'Phan Long', 'Nam', '2002-12-11', 'Sinh Viên', '2020-07-09', '2024-09-29', 'Nam Định'),
(4, 'Phạm Ngân', 'Nữ', '1997-10-11', 'Nhân Viên', '2019-06-21', '2024-08-30', 'Hà Giang'),
(5, 'Phan Đăng', 'Nam', '2000-09-20', 'Nhân Viên', '2020-11-21', '2024-01-12', 'Hải Phòng'),
(6, 'Minji', 'Nữ', '2001-08-06', 'Sinh Viên', '2019-05-30', '2023-04-30', 'Lào Cai'),
(7, 'Hoàng Thùy', 'Nữ', '1997-12-12', 'Nhân Viên', '2020-07-21', '2024-08-30', 'Bắc Giang');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
