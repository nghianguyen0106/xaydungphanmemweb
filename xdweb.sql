-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th4 09, 2021 lúc 05:48 PM
-- Phiên bản máy phục vụ: 5.7.28
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xdweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `hdMa` char(50) NOT NULL,
  `spMa` char(50) NOT NULL,
  `cthdGia` int(11) NOT NULL,
  `cthdSoluong` int(11) NOT NULL,
  KEY `hdMa` (`hdMa`),
  KEY `spMa` (`spMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`hdMa`, `spMa`, `cthdGia`, `cthdSoluong`) VALUES
('50', '14335', 350000, 1),
('50', '1435', 350000, 1),
('50', '3280', 800000, 1),
('50', '2334', 250000, 1),
('50', '2212', 3750000, 3),
('10', '143235', 350000, 1),
('10', '14335', 350000, 1),
('10', '1435', 350000, 1),
('10', '3280', 800000, 1),
('10', '2334', 250000, 1),
('85', '1216', 16500000, 1),
('85', '123', 249000, 1),
('85', '1212', 120000001, 1),
('85', '143235', 350000, 1),
('85', '14335', 350000, 1),
('85', '3280', 800000, 1),
('69', '1212', 12000000, 1),
('69', '1216', 16500000, 1),
('69', '14335', 350000, 1),
('69', '2212', 2500000, 2),
('14', '1212', 72000000, 6),
('65', '1435', 350000, 1),
('22', '123', 249000, 1),
('82', '34546', 350000, 1),
('82', '34543', 350000, 1),
('46', '1212', 12000000, 1),
('27', '1212', 24000000, 2),
('80', '1216', 16500000, 1),
('93', '1212', 12000000, 1),
('95', '1212', 12000000, 1),
('95', '1216', 16500000, 1),
('79', '1212', 12000000, 1),
('79', '1216', 16500000, 1),
('77', '1212', 12000000, 1),
('77', '1216', 16500000, 1),
('44', '1212', 12000000, 1),
('44', '1216', 16500000, 1),
('92', '1212', 12000000, 1),
('92', '1216', 16500000, 1),
('33', '1212', 12000000, 1),
('33', '1216', 16500000, 1),
('29', '1212', 12000000, 1),
('29', '1216', 16500000, 1),
('56', '1212', 12000000, 1),
('56', '1216', 16500000, 1),
('9', '1212', 12000000, 1),
('9', '1216', 49500000, 3),
('16', '1212', 12000000, 1),
('16', '1216', 49500000, 3),
('4', '1212', 24000000, 2),
('4', '1216', 33000000, 2),
('60', '1212', 12000000, 1),
('60', '14335', 700000, 2),
('31', '123', 498000, 2),
('31', '2334', 250000, 1),
('31', '2140', 400000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `hdMa` char(50) NOT NULL,
  `khMa` char(50) NOT NULL,
  `hdTongtien` int(11) NOT NULL,
  `hdTongsp` int(11) NOT NULL,
  `hdNgaylap` date NOT NULL,
  PRIMARY KEY (`hdMa`),
  KEY `khMa` (`khMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`hdMa`, `khMa`, `hdTongtien`, `hdTongsp`, `hdNgaylap`) VALUES
('10', 'DHE', 2100000, 5, '2021-03-24'),
('14', '44587', 72000000, 6, '2021-04-08'),
('16', '44587', 61500000, 4, '2021-04-09'),
('22', '44587', 249000, 1, '2021-04-08'),
('27', '44587', 24000000, 2, '2021-04-08'),
('29', '44587', 28500000, 2, '2021-04-09'),
('31', '44587', 1148000, 4, '2021-04-09'),
('33', '44587', 28500000, 2, '2021-04-09'),
('4', '11292', 57000000, 4, '2021-04-09'),
('44', '44587', 28500000, 2, '2021-04-09'),
('46', '44587', 12000000, 1, '2021-04-08'),
('50', 'DHE', 5500000, 7, '2021-03-24'),
('56', '44587', 28500000, 2, '2021-04-09'),
('60', '44587', 12700000, 3, '2021-04-09'),
('65', '44587', 350000, 1, '2021-04-08'),
('69', '44587', 31350000, 5, '2021-04-08'),
('77', '44587', 28500000, 2, '2021-04-09'),
('79', '44587', 28500000, 2, '2021-04-09'),
('80', '44587', 16500000, 1, '2021-04-08'),
('82', 'DHE', 700000, 2, '2021-04-08'),
('85', 'ADMIN_MASTER', 138249001, 6, '2021-03-24'),
('9', '44587', 61500000, 4, '2021-04-09'),
('92', '44587', 28500000, 2, '2021-04-09'),
('93', '44587', 12000000, 1, '2021-04-09'),
('95', '44587', 28500000, 2, '2021-04-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `khMa` char(50) NOT NULL,
  `khTen` varchar(255) NOT NULL,
  `khSdt` text NOT NULL,
  `khNgaysinh` date NOT NULL,
  `khTaikhoan` text NOT NULL,
  `khMatkhau` text NOT NULL,
  `khQuyen` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`khMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`khMa`, `khTen`, `khSdt`, `khNgaysinh`, `khTaikhoan`, `khMatkhau`, `khQuyen`, `email`) VALUES
('11292', 'n', '1232121', '1111-02-02', 'n', 'c4ca4238a0b923820dcc509a6f75849b', 0, 'nguyenchinghia199916@gmail.com'),
('22317', 'ng', '231231313', '1111-01-01', 'ng', '202cb962ac59075b964b07152d234b70', 0, 'nguyenchinghia199916@gmail.com'),
('22374', 'ch ngh', '234324', '1999-01-01', 'ng', '202cb962ac59075b964b07152d234b70', 0, '3nhankaiser@gmail.com'),
('33484', 'a', '3424', '1999-01-01', 'aaa', 'c4ca4238a0b923820dcc509a6f75849b', 0, 'a@b.com'),
('41220', 'kh01', '113', '2021-03-05', 'kh01', '62c22e7a4db31ae3b1c67a334ded83e0', 0, 'kh1@kh.com'),
('41361', 'kh02', '134645', '2021-03-21', 'kh02', '40f5888b67c748df7efba008e7c2f9d2', 0, 'kh2@kh.com'),
('44587', 'trung nhan', '4564546', '1999-08-22', 'nhan', '202cb962ac59075b964b07152d234b70', 0, 'letrungnhan99@gmail.com'),
('ADMIN_MASTER', 'ADMIN', '0123456789', '2021-03-02', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 100, 'a@a.com'),
('DHE', 'nghia', '031235', '2021-03-03', 'nghia', 'c4ca4238a0b923820dcc509a6f75849b', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

DROP TABLE IF EXISTS `kho`;
CREATE TABLE IF NOT EXISTS `kho` (
  `spMa` char(50) NOT NULL,
  `khoSoluong` int(11) NOT NULL,
  KEY `spMa` (`spMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`spMa`, `khoSoluong`) VALUES
('1216', 30),
('32800', 40),
('1212', 10),
('2212', 50),
('3280', 10),
('14335', 50),
('143235', 60),
('35543', 30),
('34543', 50),
('678', 50),
('54546', 60),
('466544', 60),
('1435', 60),
('123', 60),
('46467', 50),
('567576', 50),
('576', 10),
('56756', 30),
('2334', 40),
('64344', 60),
('34546', 10),
('8675', 40),
('76', 30),
('87656', 40),
('9756', 10),
('2140', 30),
('2140', 60),
('31355', 10),
('1140', 30),
('3135', 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `loaiMa` int(11) NOT NULL AUTO_INCREMENT,
  `loaiTen` varchar(255) NOT NULL,
  PRIMARY KEY (`loaiMa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`loaiMa`, `loaiTen`) VALUES
(1, 'Thắt lưng'),
(2, 'Giày'),
(3, 'Áo nữ'),
(4, 'Áo nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `spMa` char(50) NOT NULL,
  `spTen` varchar(255) NOT NULL,
  `spGia` int(11) NOT NULL,
  `thMa` int(11) NOT NULL,
  `loaiMa` int(11) NOT NULL,
  `spBaohanh` int(11) NOT NULL,
  `spHinh` text NOT NULL,
  `spTinhtrang` int(11) NOT NULL,
  PRIMARY KEY (`spMa`),
  KEY `loaiMa` (`loaiMa`),
  KEY `thMa` (`thMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`spMa`, `spTen`, `spGia`, `thMa`, `loaiMa`, `spBaohanh`, `spHinh`, `spTinhtrang`) VALUES
('1140', 'Thắt lưng nam khóa chữ C', 400000, 1, 1, 3, 'tl5.png', 1),
('1212', 'Giày GC thể thao', 12000000, 1, 2, 6, 'giay4.png', 1),
('1216', 'Giày thể thao GC Rhyton', 16500000, 1, 2, 4, 'giay5.png', 1),
('123', 'Áo sơ mi nam ngắn tay', 249000, 2, 4, 5, 'nam1.png', 1),
('143235', 'Áo sơ mi LINEN ROUTINE', 350000, 1, 4, 3, 'nam9.png', 1),
('14335', 'Áo sơ mi hoạ tiết GC SLIM', 350000, 1, 4, 3, 'nam10.png', 1),
('1435', 'Áo AQUA TREE', 350000, 1, 4, 9, 'nam5.png', 1),
('2140', 'Thắt lưng L.VIS', 400000, 2, 1, 12, 'tl1.png', 1),
('2175', 'Thắt lưng nam da bò AL', 750000, 2, 1, 3, 'tl4.png', 1),
('2212', 'Giày tây L.V nam', 1250000, 2, 2, 6, 'giay3.png', 1),
('2334', 'Áo kiểu xẻ trụ cotton brush', 250000, 3, 3, 1, 'nu4.png', 1),
('3135', 'Thắt lưng INF sọc tam giác', 350000, 3, 1, 12, 'tl2.png', 1),
('31355', 'Thắt lưng INF sọc ngang', 350000, 3, 1, 12, 'tl3.png', 1),
('3280', 'Giày thể thao INF xám', 800000, 3, 2, 3, 'giay1.png', 1),
('32800', 'Giày thể thao INF trắng', 800000, 3, 2, 6, 'giay2.png', 1),
('34543', 'Áo CLOUD FULLTAG', 350000, 2, 4, 3, 'nam7.png', 1),
('34546', 'Áo nữ cổ bẻ lá 1 nút', 350000, 3, 3, 1, 'nu3.png', 1),
('35543', 'Áo sơ mi LV sọc caro', 299000, 2, 4, 3, 'nam8.png', 1),
('46467', 'Áo thun DSS MASCOT', 250000, 3, 4, 9, 'nam3.png', 1),
('466544', 'Áo DSW JACKET', 390000, 3, 4, 9, 'nam4.png', 1),
('54546', 'Áo thun DSS Tee', 250000, 2, 4, 6, 'nam2.png', 1),
('56756', 'Áo nữ viên lá sen kẻ sọc Boho', 299000, 2, 3, 3, 'nu6.png', 1),
('567576', 'Áo thun sọc ngựa vằn gợi cảm', 450000, 1, 3, 3, 'nu9.png', 1),
('576', 'Áo thun đen trơn gợi cảm', 369000, 2, 3, 1, 'nu10.png', 1),
('64344', 'Áo nữ cắt màu đen trơn gợi cảm', 250000, 3, 3, 3, 'nu7.png', 1),
('678', 'Áo MENDE-TAINBLUE', 350000, 2, 4, 9, 'nam6.png', 1),
('76', 'Áo GC Gang nữ unisex', 800000, 1, 3, 1, 'nu1.png', 1),
('8675', 'Áo thun viền lá sen trắng trơn', 185000, 2, 3, 1, 'nu8.png', 1),
('87656', 'Áo vest thắt lưng màu trơn', 460000, 2, 3, 3, 'nu5.png', 1),
('9756', 'Áo sơ mi tay dài nữ, nhúng đô sau', 450000, 3, 3, 1, 'nu2.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

DROP TABLE IF EXISTS `thuonghieu`;
CREATE TABLE IF NOT EXISTS `thuonghieu` (
  `thMa` int(11) NOT NULL AUTO_INCREMENT,
  `thTen` varchar(255) NOT NULL,
  PRIMARY KEY (`thMa`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`thMa`, `thTen`) VALUES
(1, 'Gucci'),
(2, 'L.Vis'),
(3, 'Infinity'),
(14, 'Adidas'),
(15, 'Bitis\'s'),
(16, 'Ultraboots');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`hdMa`) REFERENCES `hoadon` (`hdMa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`spMa`) REFERENCES `sanpham` (`spMa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`khMa`) REFERENCES `khachhang` (`khMa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `kho`
--
ALTER TABLE `kho`
  ADD CONSTRAINT `kho_ibfk_1` FOREIGN KEY (`spMa`) REFERENCES `sanpham` (`spMa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaiMa`) REFERENCES `loai` (`loaiMa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`thMa`) REFERENCES `thuonghieu` (`thMa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
