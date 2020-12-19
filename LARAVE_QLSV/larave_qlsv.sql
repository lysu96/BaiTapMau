-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2018 lúc 03:46 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `id` int(10) UNSIGNED NOT NULL,
  `maLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  `tenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`,`tenHSX`,`tenLop`) VALUES
(1,'CNTT','Công nghệ thông tin'),
(2,'KTPM','Kỹ thuật phần mền'),
(3,'QTVP','Quản trị văn phòng');

-- --------------------------------------------------------

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`);

--
-- Cấu trúc bảng cho bảng `sv`
--

CREATE TABLE `sinhvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `maSV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  `hoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  `ngaySinh` date() NOT NULL
  `gioiTinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  `maLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sv`
--

INSERT INTO `lop` (`id`,`maSV`,`hoTen`,`ngaySinh`,`gioiTinh`,`maLop`) VALUES
(1,'DTC05','Nguyễn văn A','30/11/1996','1','QTVP'),
(2,'DTC02','Nguyễn Thi B','5/2/1997','2','CNTT'),
(3,'DTC07','Nguyễn văn D','3/1/1995','1','KTPM');
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maLop` (`maLop`),
  ADD UNIQUE KEY `tenLop` (`tenLop`),
  ADD KEY `khoa` (`maLop`);

--

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--

--
-- Các ràng buộc cho bảng `sv`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `khoa` FOREIGN KEY (`malop`) REFERENCES `lop` (`id`);

--



