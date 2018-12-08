--
-- Database: `ql_ban_sua`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `So_hoa_don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_sua` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`So_hoa_don`, `Ma_sua`, `So_luong`, `Don_gia`) VALUES
('hd04', 'ABPES', 3, 0),
('hd05', 'ABGR4', 5, 0),
('HD1', 'ABGR3', 1, 248000),
('hd2', 'ABGR3', 3, 248000),
('hd3', 'NTF08', 3, 130000);

-- --------------------------------------------------------

--
-- Table structure for table `hang_sua`
--

CREATE TABLE `hang_sua` (
  `Ma_Hang` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Ten_Hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Mã Hãng';

--
-- Dumping data for table `hang_sua`
--

INSERT INTO `hang_sua` (`Ma_Hang`, `Ten_Hang`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('AB', 'Abbort', 'Công ty nhập khẩu Việt Nam', '0913456789', 'Abbort@gmail.com'),
('DL', 'Dutch Lady', 'Khu Công nghiệp Biên hoà - Đồng nai', '0913245678', 'DutchLady@gmail.com'),
('DM', 'Dumex', 'Khu Công nghiệp Sóng Thần Bình Dương', '0918456678', 'Dumex@gmail.com'),
('DS', 'Daisy ', 'Khu Công nghiệp Sóng Thần Bình Dương', '0916345678', 'Daisy@gmail.com'),
('MJ', 'Mead Jonhson', 'Khu Công nghiệp tân bình', '0913123567', 'MJ@gmail.com'),
('NAN', 'Công ty NAN', 'Quận 10', '0917456678', 'Nan@gmail.com'),
('NTF', 'Nutifood', 'Khu công nghiệp tân bình', '0913345524', 'SuaNTF@gmail.com'),
('TH', 'TH true milk', 'Quận Tân phú', '0918526619', 'THmil@gmail.com'),
('VNM', 'Vinamilk', '140, Lên trọng tấn, tây thạnh, tân phú', '0913456643', 'suavnm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `So_Hoa_Don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_HD` datetime NOT NULL,
  `Ma_khach_hang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Tri_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`So_Hoa_Don`, `Ngay_HD`, `Ma_khach_hang`, `Tri_gia`) VALUES
('hd04', '2017-10-18 00:00:00', 'kh006', 0),
('hd05', '2017-10-18 00:00:00', 'kh006', 0),
('HD1', '2017-10-11 00:00:00', 'MK004', 248000),
('hd2', '2017-10-17 00:00:00', 'kh002', 744000),
('hd3', '2016-10-17 00:00:00', 'kh002', 390000);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Ma_khach` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_Khach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phai` tinyint(1) NOT NULL DEFAULT '1',
  `Dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_khach`, `Ten_Khach`, `Phai`, `Dien_thoai`, `Email`, `Dia_chi`) VALUES
('kh002', 'Đỗ Thị Liên Hương', 0, '0918456612', 'Huongld@gmail.com', 'Hóc Môn'),
('kh006', 'Phan Như Nguyệt', 0, '0913143917', 'nguyetnp@gmail.com', 'Quận 9'),
('kh02', 'Lê Thị Liên', 1, '0918453328', 'LienLT@gmail.com', 'Bình Tân'),
('kh03', 'Phan Chí Kiên', 0, '0903345675', 'KienPC@gmail.com', 'Quận 1'),
('KH04', 'Phan Thuỳ Anh', 0, '0913564871', 'AnhPT@gmail.com', 'Bến tre'),
('kh05', 'Lê Nam', 1, '0916453345', 'NamL@gmail.com', 'Long An'),
('kh06', 'Nguyễn Văn Minh Tâm', 1, '0916453001', 'TamNVM@gmail.com', 'Đồng Tháp'),
('kh07', 'Nguyễn Hiền', 1, '0918453326', 'HienN@gmail.com', 'Trà Vinh'),
('kh08', 'Nguyễn Văn Linh', 1, '0918342212', 'LinhVN@gmail.com', 'Tân Bình'),
('MK004', 'Phan Thị Ngọc Mai', 0, '0918526619', 'maiptn@cntp.edu.vn', 'Quận Tân ');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sua`
--

CREATE TABLE `loai_sua` (
  `Ma_loai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_sua`
--

INSERT INTO `loai_sua` (`Ma_loai`, `Ten_loai`, `mo_ta`) VALUES
('1', 'Loại 1', ''),
('2', 'Loại 2', ''),
('3', 'Loại 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanvien` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenNhanvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dienthoai` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanvien`, `TenNhanvien`, `Email`, `Diachi`, `Dienthoai`) VALUES
('NV2', 'L? Th? Ng?c Minh', 'hong@gmail.com', 'B?nh t?n', 918345567),
('NV5', 'L? V?n Nam', 'nam@gmail.com', 'B?nh t?n', 918543346),
('nv10', 'Lê Thị Hồng Gấm', 'gam@gmail.com', 'Tân phú', 918524456);

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `Ma_sua` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_sua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_hang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TL` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL,
  `TP_DD` text COLLATE utf8_unicode_ci NOT NULL,
  `LI` text COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Sữa';

--
-- Dumping data for table `sua`
--

INSERT INTO `sua` (`Ma_sua`, `Ten_sua`, `Ma_hang`, `Ma_loai`, `TL`, `Don_gia`, `TP_DD`, `LI`, `Hinh`) VALUES
('ABGR3', 'SỮA ABBOTT GROW SỐ 3', 'AB', '1', 900, 248000, '\r\n\r\nGiúp tăng cường sức đề kháng\r\nchiều cao\r\ncân nặng\r\nTrẻ trên 3 tuổi', 'SỮA ABBOTT GROW SỐ 3 900G 1-3 TUỔI', 'ABGR3.jpg'),
('ABGR4', 'SỮA ABBOTT GROW SỐ 4', 'AB', '1', 900, 558000, '\r\nGiúp tăng cường sức đề kháng\r\nTăng chiều cao, cân nặng\r\nDành cho trẻ từ 3 tới 6 tuổi', 'SỮA ABBOTT GROW SỐ 4 900G 3-6 TUỔI', 'ABGR4.jpg'),
('ABPDS', 'SỮA ABBOTT PEDIASURE ', 'AB', '1', 850, 558000, 'Hỗ trợ hệ miễn dịch\r\nTăng cường trí nhớ; khả năng học hỏi\r\nDành cho trẻ biếng ăn', 'SỮA ABBOTT PEDIASURE 850G 1-10 TUỔI', 'ABPDS.jpg'),
('ABPES', 'SỮA ABBOTT PEDIASURE', 'AB', '1', 400, 258000, 'Dành cho trẻ từ 1 đến 10 tuổi\r\nGiúp trẻ biếng ăn phát triển khỏe mạnh\r\nSản phẩm của Abbott - Hoa Kỳ', 'SỮA ABBOTT PEDIASURE 400G 1-10 TUỔI', 'ABPES.jpg'),
('MJSO0', 'SỮA MEIJI SỐ 0', 'MJ', '1', 800, 510000, 'Dành cho bé từ 0 - 12 tháng tuổi\r\nSữa có bổ sung DHA, ARA\r\nGiúp bé phát triển toàn diện', 'SỮA MEIJI SỐ 0 800G 0-1 TUỔI', 'MJSO0.jpg'),
('NTF08', 'Summy Maman Chocolate', 'NTF', '1', 800, 130000, 'Sữa đặc có đường: được sản xuất tại Malaysia, nơi có nguồn nguyên liệu đường chất lượng tốt nhất, giá cạnh tranh nhất và có nền công nghiệp thực phẩm đạt chuẩn trong khu vực.', '', 'NTFG1.jpg'),
('NTFG1', 'Sữa NutiFood Grow Plus+', 'NTF', '2', 900, 286000, '  \r\nChứa nhiều dưỡng chất và vi chất cần thiết\r\nTăng cường sức đề kháng\r\nGiúp trẻ tăng cân\r\nDành cho trẻ trên 1 tuổi', 'Sữa NutiFood Grow Plus+ 900g trên 1 tuổi cho trẻ thấp còi', ''),
('NTFGP', 'SỮA NUTIFOOD GROW PLUS', 'NTF', '1', 900, 185, 'cho trẻ tăng cân khỏe mạnh\r\nBổ sung năng lượng\r\nGiúp trẻ phát triển chiều cao\r\nGiá tốt từ nơi bán: 185.00', 'TRÊN 1 TUỔI CHO TRẺ TĂNG CÂN KHỎE MẠNH', ''),
('NTFPP', 'SỮA NUTIFOOD PEDIA PLUS ', 'NTF', '1', 900, 258000, 'Dành cho trẻ biếng ăn\r\nDành cho trẻ trên 2 tuổi\r\nThương hiệu Việt Nam', 'TRẺ BIẾNG ĂN TRÊN 2 TUỔI\r\n', ''),
('VNMDA', 'Dielac Pedia', 'VNM', '1', 900, 160000, 'loại sữa chứa nhiều dinh dưỡng đặc thù dành cho trẻ biếng ăn, chán ăn ở lứa tuổi từ 1 đến 3. Với nhiều thành phần dinh dưỡng tự nhiên và hương vị thơm ngon giúp kích thích bé phát triển và ăn nhiều cảm giác ngon miệng hơn. Trẻ biếng ăn, chán ăn suy dinh dưỡng sẽ không còn là nỗi bận tâm cho các bà mẹ.', '', ''),
('VNMDO', 'Dielac Optimum 123', 'VNM', '1', 900, 200000, 'Với công thức Opti – Digest hỗ trợ hệ tiêu hóa, tạo nền tảng để bé hấp thu tốt các dưỡng chất cần thiết cho cơ thể. Đạm Whey giàu Alpha Lactalbumin là loại đạm dễ tiêu hóa hấp thụ, cung cấp lượng axít amin thiết yếu cao, cân đối, hỗ trợ hoạt động hệ tiêu hóa của bé.\r\nNgoài ra đạm Whey còn chứa hàm lượng cao axit amin Tryptophan giúp bé ngủ ngon, tham gia dẫn truyền thần kinh và phát triển chức năng não bộ cho bé giúp bé có thể phát triển toàn diện về thể chất và trí tuệ.', '', ''),
('VNMDP', 'Dielac Pedia 3+ 900g', 'VNM', '3', 900, 200000, 'Dành riêng cho trẻ biếng ăn từ 4-6 tuổi, trên cơ sở kích thích trẻ ăn ngon miệng, hỗ trợ sức khỏe hệ tiêu hóa để giúp trẻ hấp thu đầy đủ các dưỡng chất cần thiết, khắc phục được chứng biếng ăn và bắt kịp nhịp tăng trưởng của trẻ.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `IDTV` int(4) NOT NULL,
  `username` varchar(52) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(52) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`IDTV`, `username`, `password`, `Level`) VALUES
(0, 'mai', '12345', 1),
(1, 'Linh', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`So_hoa_don`),
  ADD KEY `Ma_sua` (`Ma_sua`);

--
-- Indexes for table `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`Ma_Hang`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`So_Hoa_Don`),
  ADD KEY `Ma_khach_hang` (`Ma_khach_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_khach`);

--
-- Indexes for table `loai_sua`
--
ALTER TABLE `loai_sua`
  ADD PRIMARY KEY (`Ma_loai`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`Ma_sua`),
  ADD KEY `Ma_hang` (`Ma_hang`),
  ADD KEY `Ma_loai` (`Ma_loai`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`IDTV`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `FK_ChiTietHoaDonVaSoHoaDon` FOREIGN KEY (`So_hoa_don`) REFERENCES `hoa_don` (`So_Hoa_Don`),
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`Ma_sua`) REFERENCES `sua` (`Ma_sua`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `FK_Khachhang_Hoadon` FOREIGN KEY (`Ma_khach_hang`) REFERENCES `khach_hang` (`Ma_khach`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `FK_Hang_sua_va_Sua` FOREIGN KEY (`Ma_hang`) REFERENCES `hang_sua` (`Ma_Hang`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sua_ibfk_1` FOREIGN KEY (`Ma_loai`) REFERENCES `loai_sua` (`Ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sua_ibfk_2` FOREIGN KEY (`Ma_loai`) REFERENCES `loai_sua` (`Ma_loai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
