-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 03, 2023 lúc 12:00 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doantest1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

DROP TABLE IF EXISTS `cauhoi`;
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `MACAUHOI` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOIDUNG` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `GHICHU` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANGDUNG` int(11) NOT NULL,
  `MALOAI` int(11) NOT NULL,
  `MAMON` int(11) DEFAULT NULL,
  `DOKHO` int(11) NOT NULL,
  `MADAPAN` int(11) NOT NULL,
  PRIMARY KEY (`MACAUHOI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dapan`
--

DROP TABLE IF EXISTS `dapan`;
CREATE TABLE IF NOT EXISTS `dapan` (
  `MADAPAN` int(11) NOT NULL AUTO_INCREMENT,
  `NOIDUNG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KIEUDAPAN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MADAPAN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

DROP TABLE IF EXISTS `ketqua`;
CREATE TABLE IF NOT EXISTS `ketqua` (
  `MAKQ` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIEM` int(11) NOT NULL,
  `DANHGIA` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANGDUNG` int(11) NOT NULL,
  `MAMON` int(11) NOT NULL,
  PRIMARY KEY (`MAKQ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaicauhoi`
--

DROP TABLE IF EXISTS `loaicauhoi`;
CREATE TABLE IF NOT EXISTS `loaicauhoi` (
  `MALOAI` int(11) NOT NULL AUTO_INCREMENT,
  `TENLOAI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MALOAI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MAMON` int(11) NOT NULL AUTO_INCREMENT,
  `TENMON` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MAMON`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `MANGDUNG` int(11) NOT NULL AUTO_INCREMENT,
  `HO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TEN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `EMAIL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MATK` int(11) NOT NULL,
  PRIMARY KEY (`MANGDUNG`),
  KEY `MATK` (`MATK`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MANGDUNG`, `HO`, `TEN`, `NGAYSINH`, `EMAIL`, `SDT`, `MATK`) VALUES
(1, 'admin', 'admin', '2023-04-02', 'nhan26052000@gmail.com', '0779984041', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `TAIKHOAN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MATKHAU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MATK` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`MATK`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TAIKHOAN`, `MATKHAU`, `MATK`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
