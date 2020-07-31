-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2020 lúc 06:43 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ebook`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `file` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`ID`, `title`, `des`, `image`, `price`, `file`, `catID`) VALUES
(54, 'Mua Dây Buộc Mình ', 'ABC', 'http://[::1]/ebook/uploads/thiet-ke-bia-sach-dep.jpg', 25000, 'http://[::1]/ebook/uploadsebook/Untitled.png', 1),
(55, 'Dế Mèn', 'TONY BUỔI SÁNG', 'http://[::1]/ebook/uploads/Untitled.png', 500000, 'http://[::1]/ebook/uploadsebook/Untitled.png', 2),
(56, 'Dế Mèn', 'TONY BUỔI SÁNG', 'http://[::1]/ebook/uploads/038017977e65833bda74.jpg', 500000, 'http://[::1]/ebook/uploadsebook/SN.No C 2 mm..Se 2.Img 1-160.jpg', 4),
(57, 'Dế Mèn', 'ABC', 'http://[::1]/ebook/uploads/SN.No C 2 mm..Se 2.Img 1-160.jpg', 500000, 'http://[::1]/ebook/uploadsebook/PA.Se 2.Img 2-1.jpg', 3),
(58, 'Dế Mèn', 'TONY BUỔI SÁNG1111111', 'http://[::1]/ebook/uploads/SN.No C 2 mm..Se 2.Img 1-160.jpg', 50000, 'http://[::1]/ebook/uploadsebook/PA.Se 2.Img 2-1.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catogery`
--

CREATE TABLE `catogery` (
  `catID` int(11) NOT NULL,
  `catName` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catogery`
--

INSERT INTO `catogery` (`catID`, `catName`) VALUES
(1, 'VĂN HỌC'),
(2, 'TOÁN HỌC'),
(3, 'TIN HỌC'),
(4, 'KỸ NĂNG SỐNG');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `catID` (`catID`);

--
-- Chỉ mục cho bảng `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`catID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `catogery` (`catID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
