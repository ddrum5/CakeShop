-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhngotanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `HoTen`, `TaiKhoan`, `MatKhau`, `permission`) VALUES
(1, 'Admin', 'admin', '$2y$10$haimuoihaihaimuoihai2uW4u/WO1cns8rEnZm7G4JHSfciOcVF12', 1),
(8, 'ql đơn hàng', 'donhang', '$2y$10$haimuoihaihaimuoihai2uW4u/WO1cns8rEnZm7G4JHSfciOcVF12', 0),
(9, 'QL Sản Phẩm', 'sanpham', '$2y$10$haimuoihaihaimuoihai2uW4u/WO1cns8rEnZm7G4JHSfciOcVF12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id` int(11) NOT NULL,
  `MaHoa` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ma_hoa_don` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='chi_tiet_hoa_don';

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_map` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title_website`, `description_website`, `keywords_website`, `phone_number`, `email`, `address`, `google_map`, `logo`, `favicon`) VALUES
(1, 'Bánh ngọt An An', 'Bánh Ngọt An An - Cửa hàng bánh số một Thế Giới', 'banh ngot', '+0999888666', 'banhngotanan@gmail.com', 'Hà Nội', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2037530521707!2d105.79606831493187!3d20.98446808602233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6c44959d5%3A0xd7edcdb815622dd1!2zNTQgUC4gVHJp4buBdSBLaMO6YywgVGhhbmggWHXDom4gTmFtLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1651676625152!5m2!1svi!2s\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'ananbakery.png', 'fav.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoa`
--

CREATE TABLE `hoa` (
  `MaHoa` int(11) NOT NULL,
  `TenHoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenHoa_URL` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  `GiaKhuyenMai` double NOT NULL DEFAULT 200000,
  `ThanhPhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL,
  `SoLuongSP` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa`
--

INSERT INTO `hoa` (`MaHoa`, `TenHoa`, `TenHoa_URL`, `Gia`, `GiaKhuyenMai`, `ThanhPhan`, `NoiDung`, `Hinh`, `MaLoai`, `ThoiGian`, `SoLuongSP`) VALUES
(1, 'Bánh Kem In Hình Tiền Đô', 'banh-kem-in-hinh-tien-do', 360000, 200000, 'abc', 'abc', 'banh-kem-in-hinh-tien-do-247x296.jpg', 6, '2022-03-27', 100),
(2, 'Bánh Kem Tiền Đô', 'banh-kem-tien-do', 430000, 150000, 'abc', 'abc', 'banh-kem-247x296.jpg', 6, '2022-03-27', 100),
(3, 'Bánh Kem Tặng Người Yêu', 'banh-kem-tang-nguoi-yeu', 470000, 130000, 'abc', 'abc', 'banh-kem-tang-nguoi-yeu-247x296.jpg', 6, '2022-03-27', 100),
(4, 'Bánh Kem Kéo Tiền', 'banh-kem-keo-tien', 490000, 290000, 'abc', 'abc', 'banh-kem-trai-tim-in-hinh-247x296.jpg', 6, '2022-03-27', 100),
(5, 'Bánh Sinh Nhật Chai Rượu', 'banh-sinh-nhat-chai-ruou', 430000, 170000, 'abc', 'abc', 'banh-kem-1-247x296.jpg', 6, '2022-03-27', 100),
(6, 'Bánh Kem Thẻ ATM', 'banh-kem-the-atm', 430000, 130000, 'abc', 'abc', 'banh-kem-the-atm-247x296.jpg', 6, '2022-03-27', 100),
(7, 'Bánh Socola Xanh', 'banh-sinh-nhat-socola-mau-xanh', 470000, 140000, 'abc', 'abc', 'banh-kem-don-gian-sang-trong-247x296.jpg', 6, '2022-03-27', 100),
(8, 'Bánh Kem Tặng Bạn Nữ', 'banh-kem-tang-ban-nu', 420000, 300000, 'abc', 'abc', 'Banh-kem-tang-ban-nu-247x296.jpg', 6, '2022-03-27', 100),
(9, 'Bánh Cho Bạn Trai', 'banh-sinh-nhat-cho-ban-trai', 450000, 200000, 'abc', 'abc', 'Banh-sinh-nhat-cho-ban-trai-247x296.jpg', 6, '2022-03-27', 100),
(10, 'Bánh Kem Tặng Bạn Nữ', 'banh-kem-tang-ban-nu', 410000, 160000, 'abc', 'abc', 'Banh-kem-tang-ban-nu-247x296.jpg', 6, '2022-03-27', 100),
(11, 'Bánh Kem Tặng Anh Trai', 'banh-kem-tang-anh-trai', 390000, 250000, 'abc', 'abc', 'Banh-kem-tang-anh-trai-247x296.jpg', 6, '2022-03-27', 100),
(12, 'Bánh Kem Vương Miện', 'banh-kem-vuong-mien', 450000, 200000, 'abc', 'abc', 'Banh-kem-vuong-mien-247x296.jpg', 6, '2022-03-27', 100),
(13, 'Bánh Kem Tặng Bạn Nam', 'banh-kem-tang-ban-nam', 500000, 220000, 'abc', 'abc', 'Banh-kem-tang-ban-nam-247x296.jpg', 6, '2022-03-27', 100),
(14, 'Bánh Kem Tặng Bạn Gái', 'banh-kem-sang-trong-danh-tang-ban-gai', 440000, 270000, 'abc', 'abc', 'Banh-kem-sang-trong-tang-ban-gai-247x296.jpg', 6, '2022-03-27', 100),
(15, 'Bánh Kỉ Niệm Ngày Cưới', 'banh-kem-ki-niem-ngay-cuoi', 490000, 240000, 'abc', 'abc', 'Banh-kem-ki-niem-ngay-cuoi-247x296.jpg', 6, '2022-03-27', 100),
(16, 'Bánh Kem Dễ Thương', 'banh-kem-de-thuong', 460000, 300000, 'abc', 'abc', 'Banh-kem-de-thuong-1-247x296.jpg', 6, '2022-03-27', 100),
(17, 'Bánh Sinh Nhật Sang Trọng', 'banh-sinh-nhat-sang-trong', 420000, 160000, 'abc', 'abc', 'Banh-sinh-nhat-sang-trong-247x296.jpg', 1, '2022-03-27', 100),
(18, 'Bánh Kem Bắp Tặng Ba', 'banh-kem-bap-tang-ba', 390000, 160000, 'abc', 'abc', 'Banh-kem-bap-tang-ba-247x296.jpg', 1, '2022-03-27', 100),
(19, 'Bánh Kem Bắp Tặng Bạn Gái', 'banh-kem-bap-tang-ban-gai', 420000, 120000, 'abc', 'abc', 'Banh-kem-bap-tang-ban-gai-247x296.jpg', 1, '2022-03-27', 100),
(20, 'Bánh Kem Bắp Ngon', 'banh-kem-bap-ngon', 430000, 180000, 'abc', 'abc', 'Banh-kem-bap-ngon-247x296.jpg', 1, '2022-03-27', 100),
(21, 'Bánh Kem Bắp Ngon', 'banh-kem-bap-ngon', 490000, 150000, 'abc', 'abc', 'B%C3%A1nh-kem-b%E1%BA%AFp-ngon-247x296.jpg', 1, '2022-03-27', 100),
(22, 'Bánh Kem Bắp Tặng Mẹ Yêu', 'banh-kem-bap-tang-me-yeu', 370000, 130000, 'abc', 'abc', 'B%C3%A1nh-kem-b%E1%BA%AFp-t%E1%BA%B7ng-m%E1%BA%B9-y%C3%AAu-247x296.jpg', 1, '2022-03-27', 100),
(23, 'Bánh Kem Bắp Tặng Chồng', 'banh-kem-bap-tang-chong', 350000, 110000, 'abc', 'abc', 'B%C3%A1nh-kem-b%E1%BA%AFp-t%E1%BA%B7ng-ch%E1%BB%93ng-247x296.jpg', 1, '2022-03-27', 100),
(24, 'Bánh Kem Bắp Tặng Vợ', 'banh-kem-bap-tang-vo', 370000, 140000, 'abc', 'abc', '14-247x296.jpg', 1, '2022-03-27', 100),
(25, 'Bánh Kem Bắp Tặng Bà Nội', 'banh-kem-bap-tạng-bà-noi', 380000, 160000, 'abc', 'abc', '11-247x296.jpg', 1, '2022-03-27', 100),
(26, 'Bánh Kem Bắp', 'banh-kem-bap', 430000, 190000, 'abc', 'abc', 'Banh-kem-bap-tang-me-1-247x296.jpg', 1, '2022-03-27', 100),
(27, 'Bánh Kem Bắp Tặng Mẹ', 'banh-kem-bap-danh-tang-me', 400000, 210000, 'abc', 'abc', 'b%C3%A1nh-kem-b%E1%BA%AFp-r%C3%BAt-ti%E1%BB%81n-9-247x296.jpg', 1, '2022-03-27', 100),
(28, 'Bánh Kem Bắp Tặng Chồng', 'banh-kem-bap-tang-chong', 480000, 100000, 'abc', 'abc', 'b%C3%A1nh-kem-b%E1%BA%AFp-r%C3%BAt-ti%E1%BB%81n-10-247x296.jpg', 1, '2022-03-27', 100),
(29, 'Bánh Kem Dâu Tươi', 'banh-kem-dau-tuoi', 430000, 180000, 'abc', 'abc', 'Banh-kem-dau-tuoi-247x296.jpg', 1, '2022-03-27', 100),
(30, 'Bánh Kem Bắp Phô Mai', 'banh-kem-bap-pho-mai', 460000, 130000, 'abc', 'abc', 'Banh-kem-bap-247x296.jpg', 1, '2022-03-27', 100),
(31, 'Bánh Kem Bắp Rút Tiền', 'banh-kem-bap-rut-tien', 370000, 180000, 'abc', 'abc', 'banh-kem-bap-rut-tien-247x296.jpg', 1, '2022-03-27', 100),
(32, 'Bánh Bắp Tặng Anh Trai', 'banh-kem-bap-tang-anh-trai', 500000, 150000, 'abc', 'abc', 'banh-kem-bap-4-247x296.jpg', 1, '2022-03-27', 100),
(33, 'Bánh Kem Bắp In Hình', 'banh-kem-bap-in-hinh-tang-nguoi-yeu', 460000, 190000, 'abc', 'abc', 'banh-kem-bap-in-hinh-247x296.jpg', 1, '2022-03-27', 100),
(34, 'Bánh Kem Bắp Tặng Ba', 'banh-kem-bap-tang-ba', 470000, 240000, 'abc', 'abc', 'banh-kem-bap-tang-ba-scaled-247x296.jpg', 1, '2022-03-27', 100),
(35, 'Bánh Kem Bắp Dâu Tây', 'banh-kem-bap-dau-tay', 370000, 160000, 'abc', 'abc', 'banh-kem-bap-dau-247x296.jpg', 1, '2022-03-27', 100),
(36, 'Bánh Kem Bắp Tặng Má', 'banh-kem-bap-tang-ma', 490000, 130000, 'abc', 'abc', 'banh-kem-bap-tang-me-247x296.jpg', 1, '2022-03-27', 100),
(37, 'Bánh Kem Bắp Tặng Bạn Gái', 'banh-kem-bap-tang-ban-gai', 380000, 200000, 'abc', 'abc', 'banh-kem-bap-247x296.jpg', 1, '2022-03-27', 100),
(38, 'Bánh Kem Cho Gái Màu Hồng', 'banh-kem-cho-gai-mau-hong', 470000, 210000, 'abc', 'abc', 'Banh-kem-cho-be-gai-mau-hong-247x296.jpg', 3, '2022-03-27', 100),
(39, 'Bánh Kem Elsa 2 Tầng', 'banh-kem-elsa-2-tang', 350000, 110000, 'abc', 'abc', 'Banh-kem-elsa-2-tang-247x296.jpg', 3, '2022-03-27', 100),
(40, 'Bánh Kem Con Rắn Cho Bé', 'banh-kem-con-ran-cho-be', 450000, 220000, 'abc', 'abc', 'Banh-kem-con-ran-cho-be-247x296.jpg', 3, '2022-03-27', 100),
(41, 'Bánh Kem 2 Tầng', 'banh-kem-2-tang', 410000, 120000, 'abc', 'abc', 'Banh-kem-2-tang-247x296.jpg', 3, '2022-03-27', 100),
(42, 'Bánh Kem Chậu Xương Rồng', 'banh-kem-chau-xuong-rong', 470000, 170000, 'abc', 'abc', 'Banh-kem-chau-xuong-rong-247x296.jpg', 3, '2022-03-27', 100),
(43, 'Bánh Kem Cho Bé Trai', 'banh-kem-cho-be-trai', 500000, 100000, 'abc', 'abc', 'Banh-kem-cho-be-trai-247x296.jpg', 3, '2022-03-27', 100),
(44, 'Bánh Kem 2 Tầng Rút Tiền', 'banh-kem-2-tang-rut-tien', 490000, 140000, 'abc', 'abc', 'Banh-kem-2-tang-rut-tien-247x296.jpg', 3, '2022-03-27', 100),
(45, 'Bánh Kem Thôi Nôi Cho Bé 1 Tuổi', 'banh-kem-thoi-noi-cho-be-1-tuoi', 360000, 200000, 'abc', 'abc', 'Banh-kem-thoi-noi-cho-be-1-tuoi-1-247x296.jpg', 3, '2022-03-27', 100),
(46, 'Bánh Kem Elsa 2 Tầng Cho Bé Gái', 'banh-kem-elsa-2-tang-cho-be-gai', 400000, 120000, 'abc', 'abc', 'Banh-kem-elsa-2-tang-cho-be-gai-247x296.jpg', 3, '2022-03-27', 100),
(47, 'Bánh 2 Tầng Sang Trọng', 'banh-sinh-nhat-2-tang-sang-trong', 400000, 220000, 'abc', 'abc', 'Banh-sinh-nhat-2-tang-sang-trong-247x296.jpg', 3, '2022-03-27', 100),
(48, 'Bánh Sinh Nhật Thôi Nôi', 'banh-sinh-nhat-thoi-noi-be-trai', 430000, 130000, 'abc', 'abc', 'Banh-sinh-nhat-thoi-noi-be-trai-247x296.jpg', 3, '2022-03-27', 100),
(49, 'Bánh Kem 2 Tầng', 'banh-kem-2-tang', 400000, 160000, 'abc', 'abc', 'Banh-kem-2-tang-247x296.jpg', 3, '2022-03-27', 100),
(50, 'Bánh Kem 2 Tầng Hồng', 'banh-kem-2-tang-mau-hong', 380000, 240000, 'abc', 'abc', 'Banh-kem-2-tang-mau-hong-1-247x296.jpg', 3, '2022-03-27', 100),
(51, 'Bánh Kem Dưa Hấu', 'banh-kem-dua-hau', 360000, 200000, 'abc', 'abc', 'Banh-kem-dua-hau-247x296.jpg', 3, '2022-03-27', 100),
(52, 'Bánh Sinh Nhật Hồng', 'banh-sinh-nhat-mau-hong', 500000, 230000, 'abc', 'abc', 'Banh-sinh-nhat-mau-hong-cho-be-gai-1-247x296.jpg', 3, '2022-03-27', 100),
(53, 'Bánh Kem 2 Tầng Tặng Chồng', 'banh-kem-2-tang-tang-chong', 440000, 100000, 'abc', 'abc', 'Banh-kem-2-tang-tang-chong-247x296.jpg', 3, '2022-03-27', 100),
(54, 'Bánh Kem 2 Tầng Cho Bé', 'banh-kem-2-tang-cho-be-trai', 450000, 140000, 'abc', 'abc', 'Banh-kem-2-tang-cho-be-trai-247x296.jpg', 3, '2022-03-27', 100),
(55, 'Bánh Kem Mừng Tân Gia', 'banh-kem-mung-tan-gia', 430000, 230000, 'abc', 'abc', 'Banh-kem-mung-tan-gia-247x296.jpg', 3, '2022-03-27', 100),
(56, 'Bánh Kem 2 Tầng Màu Hồng', 'banh-kem-2-tang-mau-hong', 430000, 110000, 'abc', 'abc', 'Banh-kem-2-tang-mau-hong-247x296.jpg', 3, '2022-03-27', 100),
(57, 'Bánh Kem Sinh Nhật 2 Tầng Cho Bé Trai', 'banh-kem-sinh-nhat-2-tang-cho-be-trai', 380000, 170000, 'abc', 'abc', 'Banh-kem-sinh-nhat-2-tang-cho-be-trai-5-tuoi-247x296.jpg', 3, '2022-03-27', 100),
(58, 'Bánh Kem Mừng Thọ', 'banh-kem-mung-tho', 410000, 100000, 'abc', 'abc', 'Banh-kem-mung-tho-1-247x296.jpg', 3, '2022-03-27', 100),
(59, 'Bánh Kem 2 Tầng Sang Trọng Tặng Bạn Gái', 'banh-kem-2-tang-sang-trong-tang-ban-gai', 370000, 250000, 'abc', 'abc', '9-247x296.jpg', 3, '2022-03-27', 100),
(60, 'Bánh Kem Tặng Sếp Nữ', 'banh-kem-tang-sep-nu', 500000, 130000, 'abc', 'abc', 'B%C3%A1nh-kem-sang-tr%E1%BB%8Dng-t%E1%BA%B7ng-s%E1%BA%BFp-n%E1%BB%AF-247x296.jpg', 3, '2022-03-27', 100),
(61, 'Bánh Kem Tặng Cho Bé', 'banh-kem-tang-cho-be', 490000, 170000, 'abc', 'abc', '15-1-247x296.jpg', 3, '2022-03-27', 100),
(62, 'Bánh Kem 2 Tầng Tặng Bạn Gái', 'banh-kem-2-tang-tang-ban-gai', 420000, 220000, 'abc', 'abc', '16-247x296.jpg', 3, '2022-03-27', 100),
(63, 'Bánh Kem 2 Tầng Sang Trọng', 'banh-kem-2-tang-sang-trong', 420000, 200000, 'abc', 'abc', 'Banh-kem-2-tang-banh-kem-247x296.jpg', 3, '2022-03-27', 100),
(64, 'Bánh Kem 2 Tầng Đẹp', 'banh-kem-2-tang-dep-sang-trong', 360000, 230000, 'abc', 'abc', 'banh-sinh-nhat-2-tang-sang-trong-247x296.jpg', 3, '2022-03-27', 100),
(65, 'Bánh Kem 2 Tầng Con Chuột', 'banh-kem-2-tang-con-chuot', 440000, 190000, 'abc', 'abc', 'banh-kem-2-tang-1-247x296.jpg', 3, '2022-03-27', 100),
(66, 'Bánh 2 Tầng Tặng Bà Xã', 'banh-sinh-nhat-2-tang-tang-ba-xa', 480000, 190000, 'abc', 'abc', 'banh-kem-2-tang-tang-vo-1-247x296.jpg', 3, '2022-03-27', 100),
(67, 'Bánh Kem 2 Tầng Tiền Đô', 'banh-kem-2-tang-tien-do', 370000, 150000, 'abc', 'abc', 'banh-kem-tang-vo-247x296.jpg', 3, '2022-03-27', 100),
(68, 'Bánh Kem 2 Tầng Tặng Vợ', 'banh-kem-2-tang-sang-trong-tang-vo', 480000, 120000, 'abc', 'abc', 'Banh-kem-2-tang-tang-vo-2-247x296.jpg', 3, '2022-03-27', 100),
(69, 'Bánh Kem 2 Tầng Thiên Nga ', 'banh-kem-2-tang-thien-nga-sang-trong', 450000, 230000, 'abc', 'abc', 'banh-kem-2-tang-247x296.jpg', 3, '2022-03-27', 100),
(70, 'Bánh Kem Thôi Nôi 2 Tầng Cho Bé Trai', 'banh-kem-thoi-noi-2-tang-cho-be-trai', 410000, 220000, 'abc', 'abc', 'Banh-kem-2-tang-tang-be-trai-247x296.jpg', 3, '2022-03-27', 100),
(71, 'Bánh Kem 2 Tầng Elsa ', 'banh-kem-2-tang-elsa-de-thuong', 470000, 150000, 'abc', 'abc', 'Banh-kem-2-tang-elsa-247x296.jpg', 3, '2022-03-27', 100),
(72, 'Bánh Thôi Nôi Bé Gái', 'banh-sinh-nhat-thoi-noi-be-gai', 380000, 190000, 'abc', 'abc', 'Banh-kem-thoi-noi-be-gai-giao-tan-noi-247x296.jpg', 3, '2022-03-27', 100),
(73, 'Bánh Kem Hai Tầng', 'banh-kem-hai-tang', 450000, 130000, 'abc', 'abc', 'Banh-kem-hai-tang-1-247x296.jpg', 3, '2022-03-27', 100),
(74, 'Bánh Kem In Hình Tiền Đô', 'banh-kem-in-hinh-tien-do', 450000, 130000, 'abc', 'abc', 'banh-kem-in-hinh-tien-do-247x296.jpg', 2, '2022-03-27', 100),
(75, 'Bánh Kem Kéo Tiền', 'banh-kem-keo-tien', 380000, 220000, 'abc', 'abc', 'banh-kem-trai-tim-in-hinh-247x296.jpg', 2, '2022-03-27', 100),
(76, 'Bánh Sinh Nhật Bạn Trai', 'banh-sinh-nhat-cho-ban-trai', 470000, 250000, 'abc', 'abc', 'Banh-sinh-nhat-cho-ban-trai-247x296.jpg', 2, '2022-03-27', 100),
(77, 'Bánh Kem Tặng Anh Trai', 'banh-kem-tang-anh-trai', 490000, 180000, 'abc', 'abc', 'Banh-kem-tang-anh-trai-247x296.jpg', 2, '2022-03-27', 100),
(78, 'Bánh Kem Tặng Bạn Trai', 'banh-kem-tang-ban-trai', 430000, 230000, 'abc', 'abc', 'Banh-kem-tang-ban-trai-247x296.jpg', 2, '2022-03-27', 100),
(79, 'Bánh Kem Tặng Bạn Nam', 'banh-kem-tang-ban-nam', 430000, 100000, 'abc', 'abc', 'Banh-kem-tang-ban-nam-247x296.jpg', 2, '2022-03-27', 100),
(80, 'Bánh Kem Sang Trọng', 'banh-kem-sang-trong-danh-tang-ban-gai', 500000, 130000, 'abc', 'abc', 'Banh-kem-sang-trong-tang-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(81, 'Bánh Kem In Hình Cho Bạn Gái', 'banh-kem-in-hinh-cho-ban-gai', 430000, 140000, 'abc', 'abc', 'Banh-kem-in-hinh-cho-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(82, 'Bánh Sinh Nhật Tặng Bạn Gái', 'banh-sinh-nhat-danh-tang-ban-gai', 490000, 230000, 'abc', 'abc', 'Banh-sinh-nhat-danh-tang-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(83, 'Bánh Sinh Nhật Xanh Dương', 'banh-sinh-nhat-mau-xanh-duong-sang-trong', 460000, 200000, 'abc', 'abc', 'Banh-sinh-nhat-mau-xanh-duong-sang-trong-247x296.jpg', 2, '2022-03-27', 100),
(84, 'Bánh Kem Xanh Dương Tặng Bạn', 'banh-kem-mau-xanh-duong-tang-ban-gai', 480000, 230000, 'abc', 'abc', 'Banh-kem-mau-xanh-duong-tang-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(85, 'Bánh Kem In Hình Cho Bạn Gái', 'banh-kem-in-hinh-cho-ban-gai', 410000, 220000, 'abc', 'abc', 'Banh-kem-in-hinh-tang-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(86, 'Bánh Kem Tặng Bạn Trai', 'banh-kem-tang-ban-trai', 480000, 200000, 'abc', 'abc', 'Banh-kem-tang-ban-trai-1-247x296.jpg', 2, '2022-03-27', 100),
(87, 'Bánh Sinh Nhật In Hình', 'banh-sinh-nhat-in-hinh', 380000, 160000, 'abc', 'abc', 'Banh-kem-in-hinh-don-gian-247x296.jpg', 2, '2022-03-27', 100),
(88, 'Bánh Sinh Nhật Cho Bạn Gái', 'banh-sinh-nhat-cho-ban-gai', 400000, 130000, 'abc', 'abc', 'Banh-sinh-nhat-cho-ban-gai-247x296.jpg', 2, '2022-03-27', 100),
(89, 'Bánh Kem Kỷ Niệm Ngày Cưới', 'banh-kem-ky-niem-ngay-cuoi', 470000, 150000, 'abc', 'abc', '14-247x296.jpg', 2, '2022-03-27', 100);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `trang_thai` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tong_thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `matKhau`) VALUES
(89, 'dinh', 1, 'phamxuandinh1105@gmail.com', 'Hai phong', '123456789', 'a9b7ba70783b617e9998dc4dd82eb3c5'),
(90, 'dinh', 1, 'makebeatsvn05@gmail.com', 'hai phong', '0123456', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `lich_su`
--

CREATE TABLE `lich_su` (
  `id` int(11) NOT NULL,
  `ma_hoa` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loai_hoa`
--

CREATE TABLE `loai_hoa` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_hoa`
--

INSERT INTO `loai_hoa` (`MaLoai`, `TenLoai`) VALUES
(1, 'Bánh kem bắp'),
(2, 'Bánh kem in hình'),
(3, 'Bánh kem hai tầng'),
(6, 'Bánh kem hiện đại');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tin`
--

CREATE TABLE `loai_tin` (
  `MaLoaiTin` int(11) NOT NULL,
  `TenLoaiTin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_tin`
--

INSERT INTO `loai_tin` (`MaLoaiTin`, `TenLoaiTin`) VALUES
(1, 'Tin tức mới'),
(2, 'Tin công ty'),
(3, 'Tin khuyến mãi');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `hinh`) VALUES
(1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `DuongDan` varchar(255) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `TieuDe`, `Hinh`, `DuongDan`, `ThoiGian`) VALUES
(1, 'QC1 Hoa', 'Banner-cuoi-trang-1.jpg', 'danh-sach-hoa.html', '2022-01-12 18:16:49'),
(2, 'bac', '88335948_100310818267090_5073364426875207680_n.jpg', 'ddd?', '2022-04-29 14:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(100) NOT NULL,
  `DuongDan` varchar(255) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `TieuDe`, `Hinh`, `DuongDan`, `ThoiGian`) VALUES
(1, 'Khai trương shop', '1.jpg', 'danh-sach-hoa', '2022-12-17 13:03:06'),
(2, 'Khuyến mãi noel', '2.png', 'danh-sach-hoa', '2022-12-17 11:47:09'),
(3, 'Khuyến mãi noel', '3.png', 'danh-sach-hoa', '2022-12-17 11:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin`
--

CREATE TABLE `thong_tin` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `DuongDan` varchar(255) NOT NULL,
  `HanhDong` varchar(50) NOT NULL DEFAULT 'Mua Ngay',
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thong_tin`
--

INSERT INTO `thong_tin` (`id`, `TieuDe`, `Hinh`, `DuongDan`, `HanhDong`, `ThoiGian`) VALUES
(1, 'Banner 1', '1.jpg', '.', 'Mua Ngay', '2022-01-12 18:14:50'),
(2, 'Banner 2', '2.jpg', '.', 'Mua Ngay', '2022-01-12 18:15:08'),
(3, 'Banner 3', '3.jpg', '.', 'Mua Ngay', '2022-01-12 18:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `MaTT` int(11) NOT NULL,
  `TenTT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` date NOT NULL,
  `MaLoaiTin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`MaTT`, `TenTT`, `NoiDung`, `Hinh`, `ThoiGian`, `MaLoaiTin`) VALUES
(1, 'Các loại bánh Giáng sinh và những điều chưa biết', '<p style=\"text-align: justify;\">B&aacute;nh kh&uacute;c c&acirc;y &ndash; m&oacute;n b&aacute;nh Gi&aacute;ng sinh truyền thống của Ch&acirc;u &Acirc;u<br />\r\n<br />\r\nN&oacute;i đến Gi&aacute;ng sinh th&igrave; ch&uacute;ng ta kh&ocirc;ng thể qu&ecirc;n m&oacute;n b&aacute;nh kh&uacute;c c&acirc;y đặc biệt chỉ d&agrave;nh ri&ecirc;ng cho dịp lễ đầy sắc m&agrave;u n&agrave;y. B&aacute;nh c&oacute; nguồn gốc từ Ph&aacute;p với t&ecirc;n gọi &ldquo;ch&iacute;nh chủ&rdquo; l&agrave; B&ucirc;che de No&euml;l, c&oacute; &yacute; nghĩa &ldquo;kh&uacute;c c&acirc;y lễ Gi&aacute;ng sinh&quot;.</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Các loại bánh Giáng sinh và những điều chưa biết 1\" src=\"http://ananbakery.com/content/news/cac-loai-banh-giang-sinh-va-nhung-dieu-chua-biet-1.jpg\" title=\"Các loại bánh Giáng sinh và những điều chưa biết 1\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Tương truyền, chiếc b&aacute;nh kh&uacute;c c&acirc;y ra đời khoảng năm 1875 khi một người thợ l&agrave;m b&aacute;nh người Ph&aacute;p c&oacute; s&aacute;ng kiến l&agrave;m chiếc b&aacute;nh ngọt h&igrave;nh kh&uacute;c c&acirc;y cho đ&ecirc;m Gi&aacute;ng sinh thay cho&hellip; kh&uacute;c gỗ thật. V&agrave; để l&agrave;m chiếc b&aacute;nh th&ecirc;m sinh động, c&aacute;c thế hệ sau nghĩ ra th&ecirc;m c&aacute;ch phủ l&ecirc;n đ&oacute; h&igrave;nh ảnh của những c&acirc;y th&ocirc;ng, &ocirc;ng gi&agrave; Noel, thảm cỏ, người tuyết&hellip; khiến bạn li&ecirc;n tưởng đến một khu rừng đầy sắc m&agrave;u.</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;<img alt=\"Các loại bánh Giáng sinh và những điều chưa biết 2\" src=\"http://ananbakery.com/content/news/cac-loai-banh-giang-sinh-va-nhung-dieu-chua-biet-2.jpg\" title=\"Các loại bánh Giáng sinh và những điều chưa biết 2\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Theo một nguồn t&agrave;i liệu kh&aacute;c, trong lễ hội Yule cổ xưa, người ta phải chuẩn bị một kh&uacute;c gỗ lớn v&agrave; đốt l&ecirc;n trong suốt 12 đ&ecirc;m để đ&oacute;n ch&agrave;o sự trở lại của thần mặt trời để thể hiện sự s&ugrave;ng b&aacute;i thần linh. Nếu th&acirc;n c&acirc;y ch&aacute;y trước l&uacute;c kết th&uacute;c lễ hội th&igrave; đ&oacute; l&agrave; b&aacute;o hiệu một điềm chẳng l&agrave;nh cho cả năm.<br />\r\n<br />\r\nCũng c&oacute; &yacute; kiến cho rằng, theo tục lệ v&agrave;o đ&ecirc;m trước Noel, người phương T&acirc;y thường v&agrave;o rừng chặt một kh&uacute;c c&acirc;y lớn v&agrave; đem về nh&agrave; l&agrave;m lễ d&acirc;ng rượu. Kh&uacute;c c&acirc;y được đặt tr&ecirc;n l&ograve; sưởi, rắc th&ecirc;m &iacute;t dầu, muối, rượu n&oacute;ng v&agrave; mọi người bắt đầu nghi thức cầu nguyện. Tương truyền rằng, tiếng lửa k&ecirc;u t&aacute;ch t&aacute;ch v&agrave; bột than từ kh&uacute;c c&acirc;y đ&atilde; ch&aacute;y n&agrave;y sẽ bảo vệ ng&ocirc;i nh&agrave; khỏi thi&ecirc;n tai v&agrave; sự x&acirc;m nhập của ma quỷ.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"Các loại bánh Giáng sinh và những điều chưa biết 3\" src=\"http://ananbakery.com/content/news/cac-loai-banh-giang-sinh-va-nhung-dieu-chua-biet-3.jpg\" title=\"Các loại bánh Giáng sinh và những điều chưa biết 3\" /></p>\r\n\r\n<p style=\"text-align: justify;\">D&ugrave; ở kh&iacute;a cạnh n&agrave;o th&igrave; sự ra đời của m&oacute;n b&aacute;nh kh&uacute;c c&acirc;y nh&acirc;n ng&agrave;y Gi&aacute;ng sinh &iacute;t nhiều cũng mang &yacute; nghĩa cầu mong sự an l&agrave;nh, hạnh ph&uacute;c cho gia chủ.<br />\r\n<br />\r\nKẹo chiếc gậy v&agrave; nghĩa nghĩa th&uacute; vị của n&oacute;<br />\r\n<br />\r\nTừ rất l&acirc;u, kẹo c&acirc;y gậy đ&atilde; trở th&agrave;nh m&oacute;n ăn kh&ocirc;ng thể thiếu trong lễ Gi&aacute;ng sinh. Thuở ban đầu c&acirc;y kẹo n&agrave;y c&oacute; h&igrave;nh d&aacute;ng thẳng v&agrave; chỉ c&oacute; m&agrave;u trắng. Sau n&agrave;y kẹo được th&ecirc;m những vằn đỏ, vị bạc h&agrave; v&agrave; được uốn cong 1 đầu th&agrave;nh h&igrave;nh c&acirc;y gậy như hiện nay.</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;<img alt=\"Các loại bánh Giáng sinh và những điều chưa biết 4\" src=\"http://ananbakery.com/content/news/cac-loai-banh-giang-sinh-va-nhung-dieu-chua-biet-4.jpg\" title=\"Các loại bánh Giáng sinh và những điều chưa biết 4\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Nếu lật ngược c&acirc;y gậy theo bảng chữ c&aacute;i tiếng anh, bạn sẽ thấy c&acirc;y kẹo c&oacute; h&igrave;nh chữ J, đ&oacute; l&agrave; chữ c&aacute;i đầu ti&ecirc;n của t&ecirc;n ch&uacute;a Jesus. M&agrave;u trắng muốt của kẹo biểu hiện cho sự xuất hiện của Đức Mẹ Đồng Trinh, sự trong trắng v&ocirc; tội của Ch&uacute;a.<br />\r\n<br />\r\nĐộ cứng của kẹo biểu trưng cho &yacute; ch&iacute; sắt đ&aacute;, nền tảng vững chắc của nh&agrave; thờ v&agrave; lời hứa cao cả của Ch&uacute;a. Những sọc nhỏ m&agrave;u đỏ tượng trưng cho những giọt m&aacute;u đau đớn m&agrave; &ETH;ức Ch&uacute;a phải chịu đựng trước khi ng&agrave;i chết tr&ecirc;n c&acirc;y Th&aacute;nh gi&aacute;.</p>\r\n', 'cac-loai-banh-giang-sinh-va-nhung-dieu-chua-biet.jpg', '2022-05-05', 1),
(4, 'Cuộc hành trình thú vị của chiếc bánh Croissant', '<p style=\"text-align: justify;\">Nhắc đến chiếc b&aacute;nh Croissant (hay c&ograve;n gọi l&agrave; b&aacute;nh sừng b&ograve;), ch&uacute;ng ta sẽ nghĩ ngay đến thủ đ&ocirc; Paris hoa lệ. Nhưng &iacute;t ai biết rằng, nước &Aacute;o mới l&agrave; v&ugrave;ng đất khai sinh ra m&oacute;n b&aacute;nh nổi tiếng n&agrave;y, v&agrave; h&agrave;nh tr&igrave;nh từ nước &Aacute;o sang đất Ph&aacute;p của Croissant cũng th&uacute; vị v&agrave; li k&igrave; kh&ocirc;ng k&eacute;m bất k&igrave; c&acirc;u chuyện lịch sử n&agrave;o.<br />\r\n<br />\r\nCroissant - Phần thưởng cho người anh h&ugrave;ng<br />\r\n<br />\r\nC&acirc;u chuyện về chiếc b&aacute;nh sừng b&ograve; đ&atilde; th&uacute; vị ngay từ nguồn gốc ra đời. Chuyện kể rằng, v&agrave;o những năm 1683, khi cuộc chiến giữa &Aacute;o v&agrave; Thổ Nhĩ K&igrave; đang trong giai đoạn quyết liệt nhất, v&agrave;o đ&ecirc;m nọ, c&oacute; một người thợ l&agrave;m b&aacute;nh đ&atilde; nghe thấy những tiếng khoan đục k&igrave; lạ ở dưới mặt đất. Kh&ocirc;ng ngần ngại, anh đ&atilde; th&ocirc;ng b&aacute;o việc n&agrave;y cho qu&acirc;n đội nước &Aacute;o, từ đ&oacute; kịp thời ngăn chặn h&agrave;nh động đ&agrave;o đường hầm tiến v&agrave;o thủ đ&ocirc; Vienna của Thổ Nhĩ K&igrave;, tạo tiền đề cho chiến thắng của nước &Aacute;o sau đ&oacute;. &nbsp;<br />\r\nNgười thợ l&agrave;m b&aacute;nh được ban thưởng, nhưng điều duy nhất anh muốn lại chỉ l&agrave; được nướng một mẻ b&aacute;nh thật ngon để ăn mừng chiến thắng nước nh&agrave;. Vậy l&agrave; Kipferl - tiền th&acirc;n của b&aacute;nh Croissant đ&atilde; ra đời.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;<img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 1\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-1.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 1\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Kipferl c&oacute; th&agrave;nh phần v&agrave; c&aacute;ch chế biến rất giống Croissant, nhưng h&igrave;nh d&aacute;ng lại đơn giản hơn.</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nKipferl m&ocirc; phỏng h&igrave;nh trăng lưỡi liềm, đồng thời cũng l&agrave; quốc hiệu của Thổ Nhĩ K&igrave;, nhằm nhắc nhở người &Aacute;o về kẻ th&ugrave; đ&aacute;ng gờm một thời. B&aacute;nh Kipferl l&agrave; m&oacute;n b&aacute;nh truyền thống ưa th&iacute;ch của người &Aacute;o, đến năm 1770 khi C&ocirc;ng ch&uacute;a nước &Aacute;o Marie Antoinette kết h&ocirc;n với Th&aacute;i tử nước Ph&aacute;p, chiếc b&aacute;nh mặt trăng mới du nhập tới kinh đ&ocirc; Paris phồn hoa v&agrave; chuyển m&igrave;nh th&agrave;nh chiếc b&aacute;nh Croissant. &nbsp;<br />\r\nNăm 1920, Croissant ch&iacute;nh thức trở th&agrave;nh b&aacute;nh của người Ph&aacute;p.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;<img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 2\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-2.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 2\" /><br />\r\nB&aacute;nh Croissant Ph&aacute;p ng&agrave;y nay đ&atilde; được đa dạng v&agrave; cầu k&igrave; h&oacute;a</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nĐến c&acirc;u chuyện về n&agrave;ng Th&aacute;i tử phi ki&ecirc;u h&atilde;nh<br />\r\n<br />\r\nMarie Antoinette chắc chắn l&agrave; người c&oacute; c&ocirc;ng đem chiếc b&aacute;nh lưỡi liềm ra khỏi khu&ocirc;n khổ nước &Aacute;o v&agrave; phổ biến n&oacute; khắp Ch&acirc;u &Acirc;u, nhưng những giai thoại về mĩ nh&acirc;n người &Aacute;o c&ugrave;ng m&oacute;n b&aacute;nh ưa th&iacute;ch của n&agrave;ng lại c&oacute; v&ocirc; v&agrave;n dị bản, mu&ocirc;n m&agrave;u mu&ocirc;n vẻ.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 3\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-3.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 3\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Marie Antoinette c&oacute; c&ocirc;ng đem chiếc b&aacute;nh Croissant đến với nước Ph&aacute;p</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nC&oacute; chuyện kể rằng c&ocirc;ng ch&uacute;a Marie về l&agrave;m d&acirc;u nước Ph&aacute;p khi mới 14 tuổi, v&agrave; thứ m&agrave; n&agrave;ng Th&aacute;i tử phi nhỏ tuổi nhớ nhất khi nghĩ về qu&ecirc; hương l&agrave; m&oacute;n b&aacute;nh giản dị c&oacute; h&igrave;nh lưỡi liềm. Từ đ&oacute;, để chiều l&ograve;ng n&agrave;ng, c&aacute;c đầu bếp&nbsp; nước Ph&aacute;p đ&atilde; m&ocirc; phỏng lại b&aacute;nh Kipferl, nhưng với h&igrave;nh d&aacute;ng cầu k&igrave; bắt mắt hơn để ph&ugrave; hợp với b&agrave;n ăn ho&agrave;ng gia, v&agrave; từ đấy Croissant ra đời.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 4\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-8.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 4\" /><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Một c&acirc;u chuyện kh&aacute;c, hấp dẫn v&agrave; được mọi người tin hơn cả ch&iacute;nh l&agrave;: Marie Antoinette, với t&iacute;nh c&aacute;ch ph&oacute;ng kho&aacute;ng đến ngang ngạnh của m&igrave;nh, đ&atilde; từ chối d&ugrave;ng bữa với c&aacute;c th&agrave;nh vi&ecirc;n của ho&agrave;ng tộc Ph&aacute;p. N&agrave;ng thường ngồi y&ecirc;n tr&ecirc;n b&agrave;n ăn chung, kh&ocirc;ng chịu cởi bỏ găng tay, v&agrave; khi về ph&ograve;ng ri&ecirc;ng mới y&ecirc;u cầu dọn ra những m&oacute;n ăn từ qu&ecirc; hương m&igrave;nh - trong đ&oacute; lu&ocirc;n c&oacute; b&aacute;nh Kipferl, dần dần n&agrave;ng chấp nhận cả phi&ecirc;n bản cầu k&igrave; h&oacute;a của n&oacute; l&agrave; Croissant.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 5\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-4.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 5\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Tương truyền rằng, &quot;bữa ăn b&iacute; mật&quot; của Th&aacute;i tử phi chỉ bao gồm b&aacute;nh sừng b&ograve; v&agrave; c&agrave; ph&ecirc;.</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nD&ugrave; l&agrave; giai thoại n&agrave;o đi chăng nữa, cũng kh&ocirc;ng thể kh&ocirc;ng nhắc đến Marie Antoinette như một nh&acirc;n tố quan trọng trong cuộc h&agrave;nh tr&igrave;nh của chiếc b&aacute;nh Croissant, l&agrave; biểu tượng của l&ograve;ng tự t&ocirc;n d&acirc;n tộc ở một C&ocirc;ng ch&uacute;a, Th&aacute;i tử phi, v&agrave; sau n&agrave;y l&agrave; Ho&agrave;ng hậu.</p>\r\n\r\n<p style=\"text-align: justify;\">Nhắc đến chiếc b&aacute;nh Croissant (hay c&ograve;n gọi l&agrave; b&aacute;nh sừng b&ograve;), ch&uacute;ng ta sẽ nghĩ ngay đến thủ đ&ocirc; Paris hoa lệ. Nhưng &iacute;t ai biết rằng, nước &Aacute;o mới l&agrave; v&ugrave;ng đất khai sinh ra m&oacute;n b&aacute;nh nổi tiếng n&agrave;y, v&agrave; h&agrave;nh tr&igrave;nh từ nước &Aacute;o sang đất Ph&aacute;p của Croissant cũng th&uacute; vị v&agrave; li k&igrave; kh&ocirc;ng k&eacute;m bất k&igrave; c&acirc;u chuyện lịch sử n&agrave;o.<br />\r\n<br />\r\nCroissant - Phần thưởng cho người anh h&ugrave;ng<br />\r\n<br />\r\nC&acirc;u chuyện về chiếc b&aacute;nh sừng b&ograve; đ&atilde; th&uacute; vị ngay từ nguồn gốc ra đời. Chuyện kể rằng, v&agrave;o những năm 1683, khi cuộc chiến giữa &Aacute;o v&agrave; Thổ Nhĩ K&igrave; đang trong giai đoạn quyết liệt nhất, v&agrave;o đ&ecirc;m nọ, c&oacute; một người thợ l&agrave;m b&aacute;nh đ&atilde; nghe thấy những tiếng khoan đục k&igrave; lạ ở dưới mặt đất. Kh&ocirc;ng ngần ngại, anh đ&atilde; th&ocirc;ng b&aacute;o việc n&agrave;y cho qu&acirc;n đội nước &Aacute;o, từ đ&oacute; kịp thời ngăn chặn h&agrave;nh động đ&agrave;o đường hầm tiến v&agrave;o thủ đ&ocirc; Vienna của Thổ Nhĩ K&igrave;, tạo tiền đề cho chiến thắng của nước &Aacute;o sau đ&oacute;. &nbsp;<br />\r\nNgười thợ l&agrave;m b&aacute;nh được ban thưởng, nhưng điều duy nhất anh muốn lại chỉ l&agrave; được nướng một mẻ b&aacute;nh thật ngon để ăn mừng chiến thắng nước nh&agrave;. Vậy l&agrave; Kipferl - tiền th&acirc;n của b&aacute;nh Croissant đ&atilde; ra đời.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\">&nbsp;<img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 1\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-1.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 1\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Kipferl c&oacute; th&agrave;nh phần v&agrave; c&aacute;ch chế biến rất giống Croissant, nhưng h&igrave;nh d&aacute;ng lại đơn giản hơn.</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nKipferl m&ocirc; phỏng h&igrave;nh trăng lưỡi liềm, đồng thời cũng l&agrave; quốc hiệu của Thổ Nhĩ K&igrave;, nhằm nhắc nhở người &Aacute;o về kẻ th&ugrave; đ&aacute;ng gờm một thời. B&aacute;nh Kipferl l&agrave; m&oacute;n b&aacute;nh truyền thống ưa th&iacute;ch của người &Aacute;o, đến năm 1770 khi C&ocirc;ng ch&uacute;a nước &Aacute;o Marie Antoinette kết h&ocirc;n với Th&aacute;i tử nước Ph&aacute;p, chiếc b&aacute;nh mặt trăng mới du nhập tới kinh đ&ocirc; Paris phồn hoa v&agrave; chuyển m&igrave;nh th&agrave;nh chiếc b&aacute;nh Croissant. &nbsp;<br />\r\nNăm 1920, Croissant ch&iacute;nh thức trở th&agrave;nh b&aacute;nh của người Ph&aacute;p.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 2\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-2.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 2\" /><br />\r\nB&aacute;nh Croissant Ph&aacute;p ng&agrave;y nay đ&atilde; được đa dạng v&agrave; cầu k&igrave; h&oacute;a</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nĐến c&acirc;u chuyện về n&agrave;ng Th&aacute;i tử phi ki&ecirc;u h&atilde;nh<br />\r\n<br />\r\nMarie Antoinette chắc chắn l&agrave; người c&oacute; c&ocirc;ng đem chiếc b&aacute;nh lưỡi liềm ra khỏi khu&ocirc;n khổ nước &Aacute;o v&agrave; phổ biến n&oacute; khắp Ch&acirc;u &Acirc;u, nhưng những giai thoại về mĩ nh&acirc;n người &Aacute;o c&ugrave;ng m&oacute;n b&aacute;nh ưa th&iacute;ch của n&agrave;ng lại c&oacute; v&ocirc; v&agrave;n dị bản, mu&ocirc;n m&agrave;u mu&ocirc;n vẻ.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 3\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-3.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 3\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Marie Antoinette c&oacute; c&ocirc;ng đem chiếc b&aacute;nh Croissant đến với nước Ph&aacute;p</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nC&oacute; chuyện kể rằng c&ocirc;ng ch&uacute;a Marie về l&agrave;m d&acirc;u nước Ph&aacute;p khi mới 14 tuổi, v&agrave; thứ m&agrave; n&agrave;ng Th&aacute;i tử phi nhỏ tuổi nhớ nhất khi nghĩ về qu&ecirc; hương l&agrave; m&oacute;n b&aacute;nh giản dị c&oacute; h&igrave;nh lưỡi liềm. Từ đ&oacute;, để chiều l&ograve;ng n&agrave;ng, c&aacute;c đầu bếp&nbsp; nước Ph&aacute;p đ&atilde; m&ocirc; phỏng lại b&aacute;nh Kipferl, nhưng với h&igrave;nh d&aacute;ng cầu k&igrave; bắt mắt hơn để ph&ugrave; hợp với b&agrave;n ăn ho&agrave;ng gia, v&agrave; từ đấy Croissant ra đời.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 4\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-8.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 4\" /><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Một c&acirc;u chuyện kh&aacute;c, hấp dẫn v&agrave; được mọi người tin hơn cả ch&iacute;nh l&agrave;: Marie Antoinette, với t&iacute;nh c&aacute;ch ph&oacute;ng kho&aacute;ng đến ngang ngạnh của m&igrave;nh, đ&atilde; từ chối d&ugrave;ng bữa với c&aacute;c th&agrave;nh vi&ecirc;n của ho&agrave;ng tộc Ph&aacute;p. N&agrave;ng thường ngồi y&ecirc;n tr&ecirc;n b&agrave;n ăn chung, kh&ocirc;ng chịu cởi bỏ găng tay, v&agrave; khi về ph&ograve;ng ri&ecirc;ng mới y&ecirc;u cầu dọn ra những m&oacute;n ăn từ qu&ecirc; hương m&igrave;nh - trong đ&oacute; lu&ocirc;n c&oacute; b&aacute;nh Kipferl, dần dần n&agrave;ng chấp nhận cả phi&ecirc;n bản cầu k&igrave; h&oacute;a của n&oacute; l&agrave; Croissant.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"Cuộc hành trình thú vị của chiếc bánh Croissant 5\" src=\"http://ananbakery.com/content/news/cuoc-hanh-trinh-thu-vi-cua-chiec-banh-croissant-4.jpg\" title=\"Cuộc hành trình thú vị của chiếc bánh Croissant 5\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Tương truyền rằng, &quot;bữa ăn b&iacute; mật&quot; của Th&aacute;i tử phi chỉ bao gồm b&aacute;nh sừng b&ograve; v&agrave; c&agrave; ph&ecirc;.</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nD&ugrave; l&agrave; giai thoại n&agrave;o đi chăng nữa, cũng kh&ocirc;ng thể kh&ocirc;ng nhắc đến Marie Antoinette như một nh&acirc;n tố quan trọng trong cuộc h&agrave;nh tr&igrave;nh của chiếc b&aacute;nh Croissant, l&agrave; biểu tượng của l&ograve;ng tự t&ocirc;n d&acirc;n tộc ở một C&ocirc;ng ch&uacute;a, Th&aacute;i tử phi, v&agrave; sau n&agrave;y l&agrave; Ho&agrave;ng hậu.</p>\r\n', 'Cuoc-hanh-trinh-thu-vi-cua-chiec-banh-Croissant.jpg', '2022-05-05', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CT_MON` (`MaHoa`),
  ADD KEY `ma_don_hang` (`ma_hoa_don`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa`
--
ALTER TABLE `hoa`
  ADD PRIMARY KEY (`MaHoa`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaHoa` (`MaHoa`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `lich_su`
--
ALTER TABLE `lich_su`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hoa` (`ma_hoa`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Indexes for table `loai_hoa`
--
ALTER TABLE `loai_hoa`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD PRIMARY KEY (`MaLoaiTin`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin`
--
ALTER TABLE `thong_tin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoa`
--
ALTER TABLE `hoa`
  MODIFY `MaHoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `lich_su`
--
ALTER TABLE `lich_su`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loai_hoa`
--
ALTER TABLE `loai_hoa`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `loai_tin`
--
ALTER TABLE `loai_tin`
  MODIFY `MaLoaiTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thong_tin`
--
ALTER TABLE `thong_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `_FK_chi_tiet_hoa_don_hoa` FOREIGN KEY (`MaHoa`) REFERENCES `hoa` (`MaHoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_FK_chi_tiet_hoa_don_hoa_don` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoa`
--
ALTER TABLE `hoa`
  ADD CONSTRAINT `FK_H_LH` FOREIGN KEY (`MaLoai`) REFERENCES `loai_hoa` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lich_su`
--
ALTER TABLE `lich_su`
  ADD CONSTRAINT `_FK_lich_su_hoa` FOREIGN KEY (`ma_hoa`) REFERENCES `hoa` (`MaHoa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `_FK_lich_su_khach_hang` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_khach_hang`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
