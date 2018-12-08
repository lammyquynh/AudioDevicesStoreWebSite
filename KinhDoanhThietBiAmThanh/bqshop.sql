-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2018 lúc 03:39 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bqshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `matkhau` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ten` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_bin NOT NULL,
  `DienThoai` varchar(100) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `NgayDangKy` int(10) NOT NULL,
  `quyen` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `taikhoan`, `matkhau`, `ten`, `DiaChi`, `DienThoai`, `Email`, `NgayDangKy`, `quyen`) VALUES
(7, 'nongtrungbuu', '123456', 'Nông Trung Bửu', 'TP.HCM', '0933330632', 'nongtrungbuu1903@gmail.com', 20181903, 1),
(2, 'lammyquynh', '123456', 'Lâm Mỹ Quỳnh', 'TP.HCM', '0974442319', 'quynhlam55@gmail.com', 20180407, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `idDH` bigint(20) NOT NULL,
  `idKH` int(11) NOT NULL DEFAULT '0',
  `TongTien` decimal(15,2) NOT NULL DEFAULT '0.00',
  `hinhthuctt` varchar(100) COLLATE utf8_bin NOT NULL,
  `timeGD` int(11) NOT NULL DEFAULT '0',
  `TrangThai` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`idDH`, `idKH`, `TongTien`, `hinhthuctt`, `timeGD`, `TrangThai`) VALUES
(21, 56, '299000.00', '', 20170403, 1),
(20, 55, '739000.00', '', 20170420, 1),
(23, 58, '983000.00', '', 20170421, 1),
(24, 59, '620000.00', '', 0, 0),
(25, 60, '675000.00', '', 0, 0),
(26, 61, '260000.00', '', 0, 0),
(27, 62, '5890000.00', '', 0, 0),
(28, 63, '365000.00', '', 0, 0),
(32, 67, '28769000.00', 'Tructiep', 0, 0),
(33, 68, '0.00', 'Tructiep', 0, 0),
(35, 70, '8490000.00', 'Tructiep', 0, 0),
(36, 71, '0.00', 'Tructiep', 0, 0),
(37, 72, '0.00', 'Tructiep', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idHD` int(255) NOT NULL,
  `idDH` int(10) NOT NULL,
  `idSP` int(255) NOT NULL,
  `TenSP` varchar(100) COLLATE utf8_bin NOT NULL,
  `soluongSP` int(11) NOT NULL DEFAULT '0',
  `DonGia` int(10) NOT NULL,
  `ghichu` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idHD`, `idDH`, `idSP`, `TenSP`, `soluongSP`, `DonGia`, `ghichu`) VALUES
(25, 20, 19, 'Neryu', 1, 299000, ''),
(26, 20, 18, 'Trenu', 1, 230000, ''),
(27, 20, 65, 'Gennary', 1, 210000, ''),
(28, 21, 19, 'Neryu', 1, 299000, ''),
(32, 23, 19, 'Neryu', 1, 299000, ''),
(33, 23, 24, 'Maryt', 1, 214000, ''),
(34, 23, 66, 'Masery', 1, 320000, ''),
(35, 23, 67, 'Xeramy', 1, 150000, ''),
(36, 24, 99, 'Zaxaki', 2, 125000, ''),
(37, 24, 98, 'Maki', 1, 150000, ''),
(38, 24, 6, 'JeanSeku', 1, 220000, ''),
(39, 25, 99, 'Zaxaki', 3, 125000, ''),
(40, 25, 98, 'Maki', 2, 150000, ''),
(41, 26, 100, 'jaennau', 2, 130000, ''),
(42, 27, 3, 'Jeannhat', 26, 215000, ''),
(43, 27, 7, 'JeanTyu', 1, 300000, ''),
(44, 28, 98, 'Maki', 1, 150000, ''),
(45, 28, 62, 'Xukare', 1, 215000, ''),
(49, 32, 9, 'TIVI LED PANASONIC 43 INCH TH-43', 2, 8490000, ''),
(50, 32, 8, 'SMART TIVI TOSHIBA 40 INCH 40L5650V', 1, 11789000, ''),
(51, 35, 9, 'TIVI LED PANASONIC 43 INCH TH-43', 1, 8490000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(255) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `timedk` int(11) NOT NULL,
  `CongThanhToan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten`, `email`, `SDT`, `diachi`, `matkhau`, `timedk`, `CongThanhToan`) VALUES
(60, 'Huỳnh Thi Như', 'nguyenvanan@gmail.com', '01264485962', 'Long An', '', 20170517, 'Tructiep'),
(59, 'nguyen cong luat', 'luat@gmail.com', '01264485962', 'Tp.HCM', '', 20170517, 'Tructiep'),
(58, 'Tran Van Dinh', 'tranvandinh@gmail.com', '01265489531', 'Long An', '', 20170421, 'Tructiep'),
(55, 'Huynh Ngoc Anh', 'anhnh@gmail.com', '01265489531', 'Tp.HCM', '', 20170418, 'Tructiep'),
(53, 'Nguyễn Văn An', 'nguyenvanan@gmail.com', '0126548742', 'Tp.HCM', '', 20170417, 'Tructiep'),
(57, 'Nguyen Van A', 'nguyenvanan@gmail.com', '01265489531', 'Tp.HCM', '', 20170419, 'Tructiep'),
(56, 'Ngo Tan Tai', 'taipap123@gmail.com', '0126548742', 'Tp.HCM', '', 20170419, 'Tructiep'),
(61, 'Huynh Ngoc Anh', 'anhnh@gmail.com', '01265489531', 'Tp.HCM', '', 20170517, 'Tructiep'),
(62, 'Tran Van Dinh', 'peduy989@yahoo.com', '01265489531', 'Long An', '', 20170517, 'Tructiep'),
(63, 'Huynh Ngoc Anh', 'huynhngocanh0601@gmail.com', '0126548742', 'Tp.HCM', '', 20170525, 'Tructiep'),
(64, 'Huynh Ngoc Anh', 'huynhngocanh0601@gmail.com', '0126548742', 'Tp.HCM', '', 20170525, 'Tructiep'),
(65, 'Huynh Ngoc Anh', 'huynhngocanh0601@gmail.com', '01265489531', 'Tp.HCM', '', 20170525, 'Tructiep'),
(66, 'Huynh Ngoc Anh', 'huynhngocanh0601@gmail.com', '0126548742', 'Tp.HCM', '', 20170525, 'Tructiep');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thutu` tinyint(4) NOT NULL DEFAULT '0',
  `idTL` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`, `thutu`, `idTL`) VALUES
(1, 'KARAOKE', 1, 1),
(2, 'LOA', 2, 1),
(3, 'CD', 3, 1),
(4, 'AMPLY', 4, 1),
(5, 'CENTER', 5, 1),
(6, 'SUB', 6, 1),
(7, 'POW', 7, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(255) NOT NULL,
  `idLoaiSP` int(11) NOT NULL,
  `tenSP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` decimal(15,0) NOT NULL DEFAULT '0',
  `GioiThieu` text COLLATE utf8_unicode_ci NOT NULL,
  `GiamGia` int(11) NOT NULL,
  `image_link` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `timeNhap` int(11) NOT NULL DEFAULT '0',
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `SLTon` int(10) NOT NULL,
  `idtin` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idLoaiSP`, `tenSP`, `DonGia`, `GioiThieu`, `GiamGia`, `image_link`, `image_list`, `timeNhap`, `luotxem`, `SLTon`, `idtin`) VALUES
(28, 28, 'DÀN ÂM THANH SAMSUNG', '92900000', '', 0, 'image\\hinhloa\\dan-am-thanh-samsung-ht-j5150k-2.jpg', '', 0, 6, 5, 0),
(29, 28, 'DÀN ÂM THANH PIONEER', '69900000', '', 0, 'image\\hinhloa\\Karaoke16.jpg', '', 0, 1, 10, 0),
(30, 28, 'DÀN ÂM THANH JAMO', '134900000', '', 0, 'image\\hinhloa\\Loa20.jpg', '', 0, 0, 7, 0),
(25, 28, 'DÀN ÂM THANH SONY', '44900000', '', 0, 'image\\hinhloa\\sony-dan-thanh-nghe-nhac-hay-nhat-hien-nay.jpg', '', 0, 0, 0, 0),
(26, 28, 'DÀN ÂM THANH BW', '13410000', '', 0, 'image\\hinhloa\\tải xuống (2).jpg', '', 0, 0, 0, 0),
(27, 28, 'DÀN ÂM THANH JBL', '13860000', '', 0, 'image\\hinhloa\\tải xuống (3).jpg', '', 0, 1, 0, 0),
(21, 28, 'DÀN ÂM THANH JVS', '49000000', '', 0, 'image\\hinhloa\\Karaoke15.jpg', '', 0, 0, 3, 0),
(22, 28, 'DÀN ÂM THANH APTECH', '10990000', '', 0, 'image\\hinhloa\\tải xuống (1).jpg', '', 0, 1, 0, 0),
(23, 28, 'DÀN ÂM THANH MARANT', '74900000', '', 0, 'image\\hinhloa\\Loa15.jpg', '', 0, 0, 6, 0),
(24, 28, 'DÀN ÂM THANH SUBMAX', '64900000', '', 0, 'image\\hinhloa\\Loa19m.jpg', '', 0, 1, 0, 0),
(17, 26, 'ĐẦU CD GỖ CỰC HIẾM', '19710000', '', 0, 'image\\hinhloa\\CD1.jpg', '', 0, 0, 2, 0),
(18, 26, 'ĐẦU CD TEAC', '20900000', '', 0, 'image\\hinhloa\\CD2.jpg', '', 0, 6, 0, 0),
(19, 26, 'ĐẦU CD MARANT', '24000000', '', 0, 'image\\hinhloa\\CD3.jpg', '', 0, 5, 8, 0),
(20, 26, 'ĐẦU CD PHILLIP', '19000000', '', 0, 'image\\hinhloa\\CD4.jpg', '', 0, 1, 0, 0),
(13, 26, 'ĐẦU CD REGA', '8400000', '', 0, 'image\\hinhloa\\CD5.jpg', '', 0, 4, 11, 0),
(14, 26, 'ĐẦU CD MUSICCORE', '10710000', '', 0, 'image\\hinhloa\\CD6.jpg', '', 0, 0, 0, 0),
(15, 26, 'AMPLY AIRPHOXE', '15210000', '', 0, 'image\\hinhloa\\Amply.jpg', '', 0, 0, 12, 0),
(16, 26, 'AMPLY ACCUPHASE', '15210000', '', 0, 'image\\hinhloa\\Amply1.jpg', '', 0, 0, 0, 0),
(10, 2, 'BỘ KARAOKE BOSE 301 SERIES 3', '12600000', '', 0, 'image\\hinhloa\\Karaoke8.jpg', '', 0, 4, 5, 0),
(11, 26, 'AMPLY Lo-D', '11610000', '', 0, 'image\\hinhloa\\Amply2.jpg', '', 0, 0, 0, 0),
(12, 26, 'AMPLY SMART', '10990000', '', 0, 'image\\hinhloa\\Amply3.jpg', '', 0, 0, 16, 0),
(6, 1, 'BỘ KARAOKE BOSE 4.2 SERIES II', '10750000', '', 0, 'image\\hinhloa\\Karaoke6.jpg', '', 0, 1, 0, 0),
(7, 1, 'BỘ KARAOKE BMW 450W', '5500000', '', 0, 'image\\hinhloa\\Karaoke5.jpg', '', 0, 2, 50, 0),
(8, 1, 'BỘ KARAOKE BC-34GD', '14500000', '', 0, 'image\\hinhloa\\Karaoke3.jpg', '', 0, 2, 49, 0),
(9, 2, 'DÀN KARAOKE JAGUAR JS-455', '19300000', '', 0, 'image\\hinhloa\\Karaoke2.jpg', '', 0, 12, 47, 0),
(3, 1, 'BỘ KARAOKE PARAMAX P-500', '7500000', '', 0, 'image\\hinhloa\\Karaoke9.jpg', '', 0, 3, 0, 0),
(4, 1, 'BỘ KARAOKE ARIANG', '7500000', '', 0, 'image\\hinhloa\\Karaoke12.png', '', 0, 3, 17, 0),
(5, 1, 'BỘ KARAOKE GIA ĐÌNH KPDA 1006', '7450000', '', 0, 'image\\hinhloa\\dan-am-thanh-khang-phudat_02.png', '', 0, 1, 9, 0),
(2, 1, 'BỘ KARAOKE B&W 604Gs', '19300000', '', 0, 'image\\hinhloa\\Karaoke2.jpg', '', 0, 2, 8, 0),
(1, 1, 'BỘ KARAOKE BMB', '8990000', '', 0, 'image\\hinhloa\\tải xuống (4).jpg', '', 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTL` int(10) NOT NULL,
  `TenTL` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTL`, `TenTL`) VALUES
(1, 'LOẠI THIẾT BỊ'),
(2, 'HÃNG SẢN XUẤT'),
(3, 'KHUYẾN MÃI'),
(4, 'THƯỢNG HẠNG'),
(5, 'TRUNG BÌNH'),
(6, 'BÌNH DÂN'),
(7, 'QUỐC GIA SẢN XUẤT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtin` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_minhhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `soluotxem` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtin`, `tieude`, `image_minhhoa`, `noidung`, `soluotxem`, `iduser`) VALUES
(1, 'KARAOKE GIA ĐÌNH CỰC RẺ', 'image\\hinhloa\\Karaoke5.jpg', '', 0, 0),
(2, 'DÀN ÂM THANH CỰC KHỦNG', 'image\\hinhloa\\am_thanh_gia_dinh-700x400.jpg', '', 0, 0),
(3, 'SIÊU THỊ ÂM THANH TRONG NHÀ', 'image\\hinhloa\\Chia-se-kinh-nghiem-hay-khi-mua-he-thong-am-thanh-cho-gia-dinh (3).jpg', '', 0, 0),
(4, 'CHẾ ĐỘ KHUYẾN MÃI CỰC HOT', 'image\\hinhloa\\dan-am-thanh-khang-phudat_02.png', '', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`idDH`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);
ALTER TABLE `sanpham` ADD FULLTEXT KEY `tenSP` (`tenSP`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTL`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `idDH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
