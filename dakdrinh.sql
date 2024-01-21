-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2024 lúc 03:23 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dakdrinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbbaiviet`
--

CREATE TABLE `tbbaiviet` (
  `idbaiviet` int(11) NOT NULL,
  `iddanhmuc` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `tomtatbaiviet` text DEFAULT NULL,
  `anhrthumnail` varchar(255) DEFAULT NULL,
  `tieudebaiviet` varchar(255) NOT NULL,
  `noidungbaiviet` text DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngaydang` date DEFAULT NULL,
  `tennguoidung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdanhmuc`
--

CREATE TABLE `tbdanhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbdanhsachbaiviet`
--

CREATE TABLE `tbdanhsachbaiviet` (
  `idbaiviet` int(11) NOT NULL,
  `tieudebaiviet` varchar(255) NOT NULL,
  `tennguoidung` varchar(255) NOT NULL,
  `anhrthumnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(11) NOT NULL,
  `tennguoidung` varchar(255) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `rule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `tennguoidung`, `tentaikhoan`, `matkhau`, `rule`) VALUES
(1, 'admin', 'admin', 'a123123', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  ADD PRIMARY KEY (`idbaiviet`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `tbdanhmuc`
--
ALTER TABLE `tbdanhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `tbdanhsachbaiviet`
--
ALTER TABLE `tbdanhsachbaiviet`
  ADD PRIMARY KEY (`idbaiviet`);

--
-- Chỉ mục cho bảng `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `tentaikhoan` (`tentaikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  MODIFY `idbaiviet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbdanhmuc`
--
ALTER TABLE `tbdanhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  ADD CONSTRAINT `tbbaiviet_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `tbdanhmuc` (`iddanhmuc`),
  ADD CONSTRAINT `tbbaiviet_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `tbuser` (`iduser`);

--
-- Các ràng buộc cho bảng `tbdanhsachbaiviet`
--
ALTER TABLE `tbdanhsachbaiviet`
  ADD CONSTRAINT `tbdanhsachbaiviet_ibfk_1` FOREIGN KEY (`idbaiviet`) REFERENCES `tbbaiviet` (`idbaiviet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
