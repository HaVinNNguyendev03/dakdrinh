-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 04:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dakdrinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbaiviet`
--

CREATE TABLE `tbbaiviet` (
  `idbaiviet` int(11) NOT NULL,
  `iddanhmuc` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `tomtatbaiviet` text DEFAULT NULL,
  `anhrthumnail` varchar(255) DEFAULT NULL,
  `tinnoibat` tinyint(1) NOT NULL DEFAULT 0,
  `tieudebaiviet` varchar(255) NOT NULL,
  `tieudeurl` text NOT NULL,
  `noidungbaiviet` text DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngaydang` text DEFAULT NULL,
  `tennguoidung` varchar(255) DEFAULT NULL,
  `idmenu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbaiviet`
--

INSERT INTO `tbbaiviet` (`idbaiviet`, `iddanhmuc`, `iduser`, `tomtatbaiviet`, `anhrthumnail`, `tinnoibat`, `tieudebaiviet`, `tieudeurl`, `noidungbaiviet`, `ngaytao`, `ngaydang`, `tennguoidung`, `idmenu`) VALUES
(6, 101, 1, 'test2', 'http://localhost:8080/uploads/1707119856_3a243efaf70cd0012228.jpg', 0, 'test2', '', '<p>test2</p>\r\n', '2024-02-05 07:57:36', 'test2', 'admin', NULL),
(7, 101, 1, 'test2', 'http://localhost:8080/uploads/1707119858_b024c49bfab260e46b31.jpg', 0, 'test2', '', '<p>test2</p>\r\n', '2024-02-05 07:57:38', 'test2', 'admin', NULL),
(9, 101, 1, 'test3', 'http://localhost:8080/uploads/1708065486_6b273dd122c7639ed0d5.jpg', 0, 'test3', '', '<p>nội dung&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/1.png\" style=\"height:639px; width:1600px\" />ch&uacute; th&iacute;ch ảnh</p>\r\n\r\n<p>nội dung</p>\r\n', '2024-02-16 06:38:06', '16/02/2024', 'admin', NULL),
(10, 101, 1, 'test3', 'http://localhost:8080/uploads/1708065521_b2c685b29ca66baf0c84.jpg', 0, 'test3', '', '<p>nội dung&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/1.png\" style=\"height:639px; width:1600px\" />ch&uacute; th&iacute;ch ảnh</p>\r\n\r\n<p>nội dung</p>\r\n', '2024-02-16 06:38:41', '16/02/2024', 'admin', NULL),
(11, 101, 1, 'test4', 'http://localhost:8080/uploads/1708065535_0e8d3f10621926e95e85.jpg', 0, 'test4', '', '<p>nội dung&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/1.png\" style=\"height:639px; width:1600px\" />ch&uacute; th&iacute;ch ảnh</p>\r\n\r\n<p>nội dung</p>\r\n', '2024-02-16 06:38:55', '16/02/2024', 'admin', NULL),
(12, 101, 1, 'test5', 'http://localhost:8080/uploads/1708065541_5b5763a6b9d87ccc5ed0.jpg', 0, 'test5', '', '<p>nội dung&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/1.png\" style=\"height:639px; width:1600px\" />ch&uacute; th&iacute;ch ảnh</p>\r\n\r\n<p>nội dung</p>\r\n', '2024-02-16 06:39:01', '16/02/2024', 'admin', NULL),
(13, 101, 1, 'test6', 'http://localhost:8080/uploads/1708065547_340b902e2e9673e72dc9.jpg', 0, 'test666666', '', '<p>nội dung&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/1.png\" style=\"height:639px; width:1600px\" />ch&uacute; th&iacute;ch ảnh</p>\r\n\r\n<p>nội dung</p>\r\n', '2024-02-16 06:39:07', '16/02/2024', 'admin', NULL),
(14, NULL, 1, NULL, 'http://localhost:8080/uploads/1708065554_86002e1176c2f572edcc.jpg', 0, '', '', NULL, '2024-02-16 06:39:14', NULL, 'admin', NULL),
(15, NULL, 1, NULL, 'http://localhost:8080/uploads/1708415685_fdaa0428cbac06c5cd8f.jpg', 0, '', '', NULL, '2024-02-20 07:54:45', NULL, 'admin', NULL),
(16, 203, 1, 'CHÚC MỪNG PV POWER ĐẠT GIẢI BA GIẢI CHẠY MARATHON QUẢNG NGÃI - CUP BSR 2023', 'http://localhost:8080/uploads/1708505524_0bb768bb3482e92697bb.jpg', 0, 'CHÚC MỪNG PV POWER ĐẠT GIẢI BA GIẢI CHẠY MARATHON QUẢNG NGÃI - CUP BSR 2024', '', '<p>Xin ch&uacute;c mừng tất cả c&aacute;c runners Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam &ndash; CTCP (PV Power) Đ&atilde; ho&agrave;n th&agrave;nh đường chạy Quảng Ng&atilde;i Marathon &ndash; Cup BSR 2023, do UBND tỉnh Quảng Ng&atilde;i phối hợp c&ugrave;ng C&ocirc;ng ty Cổ phần Lọc h&oacute;a dầu B&igrave;nh Sơn (BSR) tổ chức với gần 2.000 vận động vi&ecirc;n tr&ecirc;n khắp cả nước về tham gia. Giải chạy đ&atilde; kh&eacute;p lại với h&agrave;ng ng&agrave;n c&aacute;c cung bậc cảm x&uacute;c v&agrave; những trải nghiệm qu&yacute; gi&aacute; đối với runners ch&uacute;ng ta.</p>\r\n\r\n<p>Tham gia tại giải lần n&agrave;y với sự g&oacute;p mặt của 11 Đo&agrave;n vi&ecirc;n C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần Thủy điện Đakđrinh (DHC) v&agrave; 03 Đo&agrave;n vi&ecirc;n C&ocirc;ng đo&agrave;n C&ocirc;ng ty Điện lực Dầu kh&iacute; Nhơn trạch (NT), thuộc C&ocirc;ng đo&agrave;n cơ sở Tổng C&ocirc;ng ty Điện lực dầu kh&iacute; Việt Nam &ndash; CTCP.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/marator.jpg\" style=\"height:506px; width:900px\" /><em>C&aacute;c vận động vi&ecirc;n tham gia&nbsp;</em><em>giải chạy marathon tỉnh Quảng Ng&atilde;i - Cup BSR 2023</em></p>\r\n\r\n<p>C&aacute;c vận động vi&ecirc;n l&agrave; đo&agrave;n vi&ecirc;n c&ocirc;ng đo&agrave;n C&ocirc;ng ty tham gia tranh t&agrave;i với 3 cự ly 5km, 10 km v&agrave; 21km&nbsp;<em>(trong đ&oacute; c&oacute; 01 vận động vi&ecirc;n tham gia tranh t&agrave;i với cự ly 21 km, 02 vận động vi&ecirc;n tham gia tranh t&agrave;i với cự ly 10km v&agrave; 11 vận động vi&ecirc;n tham gia tranh t&agrave;i với cự ly 5 km).</em></p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"/ckfinder/userfiles/files/marator1.jpg\" style=\"height:600px; width:900px\" />Vận động vi&ecirc;n tham gia giải chạy marathon tỉnh Quảng Ng&atilde;i - Cup BSR 2023 Cự ly 5km</em></p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"/ckfinder/userfiles/files/marator2.jpg\" style=\"height:600px; width:900px\" />Vận động vi&ecirc;n tham gia giải chạy marathon tỉnh Quảng Ng&atilde;i - Cup BSR 2023 Cự ly 10km</em></p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"/ckfinder/userfiles/files/marator3.jpg\" style=\"height:600px; width:900px\" />Vận động vi&ecirc;n tham gia giải chạy marathon tỉnh Quảng Ng&atilde;i - Cup BSR 2023 Cự ly 21km</em></p>\r\n\r\n<p>C&aacute;c vận động vi&ecirc;n l&agrave; đo&agrave;n vi&ecirc;n c&ocirc;ng đo&agrave;n C&ocirc;ng ty đ&atilde; tham gia chạy rất nhiệt t&igrave;nh từ l&uacute;c 4h30 s&aacute;ng ng&agrave;y 07 th&aacute;ng 05 năm 2023 c&ugrave;ng với gần 2.000 vận động vi&ecirc;n tr&ecirc;n cả nước về tham gia. C&aacute;c vận động vi&ecirc;n tham dự sự kiện n&agrave;y kh&ocirc;ng chỉ để r&egrave;n luyện v&agrave; lan tỏa tinh thần thể thao, biểu tượng về sự dẻo dai, &yacute; ch&iacute; ki&ecirc;n cường, bền bỉ, m&agrave; c&ograve;n l&agrave; dịp để quảng b&aacute; h&igrave;nh ảnh du lịch, văn h&oacute;a, con người Quảng Ng&atilde;i, g&oacute;p phần ph&aacute;t triển kinh tế - x&atilde; hội v&agrave; du lịch tỉnh.</p>\r\n\r\n<p>Kết th&uacute;c giải chạy marathon tỉnh Quảng Ng&atilde;i &ndash; Cup BSR 2023, PV Power c&oacute; vận động vi&ecirc;n Nguyễn Ch&iacute; Linh lọt v&agrave;o t&oacute;p 02 vận động nam ở cự ly 21 km dưới 40 tuổi.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em>Ph&oacute; Chủ tịch Thường trực UBND tỉnh Trần Ho&agrave;ng Tuấn trao giải cho c&aacute;c VĐV ở hạng mục dưới 40 tuổi đạt th&agrave;nh t&iacute;ch cao</em><img alt=\"\" src=\"/ckfinder/userfiles/files/marator4.jpg\" style=\"height:600px; width:900px\" /></p>\r\n', '2024-02-21 08:52:04', '21/02/2024', 'admin', NULL),
(17, 204, 1, 'Toàn cảnh chương trình \"Xuân nghĩa tình Dầu khí - Tết ấm áp sẻ chia\" năm 2024 tại thuỷ điện Đakđrinh.', 'http://localhost:8080/uploads/1708760862_733ddccf4e298b10af23.jpg', 0, 'Toàn cảnh chương trình \"Xuân nghĩa tình Dầu khí - Tết ấm áp sẻ chia\" năm 2024 tại thuỷ điện Đakđrinh.', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:47:42', '24/02/2024', '\r\n                                admin                            ', NULL),
(18, 204, 1, 'Toàn cảnh chương trình \"Xuân nghĩa tình Dầu khí - Tết ấm áp sẻ chia\" năm 2024 tại thuỷ điện Đakđrinh.', 'http://localhost:8080/uploads/1708760897_bd6cf3c21ac3b97ab95f.jpg', 0, 'Đặc sắc chương trình “Xuân nghĩa tình Dầu khí - Tết Ấm áp sẻ chia” tại thủy điện Đakđrinh', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:48:17', '24/02/2024', '\r\n                                admin                            ', NULL),
(19, 204, 1, 'Toàn cảnh chương trình \"Xuân nghĩa tình Dầu khí - Tết ấm áp sẻ chia\" năm 2024 tại thuỷ điện Đakđrinh.', 'http://localhost:8080/uploads/1708760928_9c5215937abf572d31bf.jpg', 0, 'Đặc sắc chương trình Chạy Marathor', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:48:48', '24/02/2024', '\r\n                                admin                            ', NULL),
(20, 204, 1, 'Toàn cảnh chương trình \"Xuân nghĩa tình Dầu khí - Tết ấm áp sẻ chia\" năm 2024 tại thuỷ điện Đakđrinh.', 'http://localhost:8080/uploads/1708760939_8e2420e1ead643399319.jpg', 0, 'Đặc sắc chương trình Chạy Marathor Việt Nam', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:48:59', '24/02/2024', '\r\n                                admin                            ', NULL),
(21, 203, 1, 'Thủy điện Đakđrinh về đích sớm 33 ngày', 'http://localhost:8080/uploads/1709512527_8de5cdf0dfcd6c16a569.jpg', 0, 'Thủy điện Đakđrinh về đích sớm 33 ngày', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:49:39', '24/02/2024', '\r\n                                admin                            ', NULL),
(22, 203, 1, 'Thủy điện Đakđrinh về đích sớm 33 ngày', 'http://localhost:8080/uploads/1708761006_1f1e220facb49c41ed18.jpg', 0, 'Sum vầy Tết trung thu 2023', '', '<h4>Ng&agrave;y 25/01/2024, C&ocirc;ng đo&agrave;n C&ocirc;ng ty cổ phần thủy điện Đakđrinh (PV Power DHC) đ&atilde; tổ chức chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; - Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 cho to&agrave;n thể CBCNV. Chương tr&igrave;nh được C&ocirc;ng ty tổ chức với kh&ocirc;ng kh&iacute; vui tươi, ấm &aacute;p để tri &acirc;n Người lao động (NLĐ) v&agrave; hướng đến ch&agrave;o mừng tết Nguy&ecirc;n đ&aacute;n Gi&aacute;p Th&igrave;n 2024.</h4>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/files/2.JPG\" style=\"height:600px; width:900px\" /><em>Đồng ch&iacute; Nguyễn Ngọc Hải &ndash; B&iacute; thư chi bộ, Chủ tịch HĐQT ph&aacute;t biểu tại chương tr&igrave;nh.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong chương tr&igrave;nh &ldquo;Xu&acirc;n nghĩa t&igrave;nh Dầu kh&iacute; &ndash; Tết Ấm &aacute;p sẻ chia&rdquo; năm 2024 do CĐ DKVN ph&aacute;t động, thuỷ điện Đakđrinh đ&atilde; hưởng ứng v&agrave; tổ chức l&agrave;m mới chương tr&igrave;nh với nhiều hoạt động đặc sắc, &yacute; nghĩa. Cụ thể, đơn vị đ&atilde; thực hiện nhiều hoạt động gắn kết NLĐ, gắn với truyền thống đ&oacute;n Tết người Việt như thi g&oacute;i v&agrave; nấu b&aacute;nh chưng, b&aacute;nh t&eacute;t, thi trang tr&iacute; b&aacute;nh chưng b&aacute;nh t&eacute;t. thuỷ điện Đakđrinh cũng tổ chức thi c&aacute;c m&ocirc;n thể thao như tennis, cầu l&ocirc;ng, b&oacute;ng đ&aacute; tạo s&acirc;n chơi thể dục thể thao cho CBCNV. Đặc biệt, gắn với văn ho&aacute; c&ocirc;ng ty, thuỷ điện Đakđrinh đ&atilde; tổ chức tr&ograve; chơi t&igrave;m hiểu về sổ tay văn h&oacute;a doanh nghiệp của PV Power, qua đ&oacute;, tạo s&acirc;n chơi v&agrave; gắn với những kiến thức bổ &iacute;ch cho NLĐ.</p>\r\n', '2024-02-24 07:50:06', '24/02/2024', '\r\n                                admin                            ', NULL),
(23, 101, 1, 'test', 'http://localhost:8080/uploads/1709454682_51b065a4af704a6a7e96.jpg', 0, 'tets', '', '<p>test</p>\r\n', '2024-03-03 08:31:22', '3/3/2024', '\r\n                                admin                            ', NULL),
(31, 402, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2024', 'http://localhost:8080/uploads/1709522004_1a6c27a68511f2ac8409.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2024', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:13:24', '04/03/2024', 'admin', NULL),
(32, 403, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522016_67b90813e6f8fd87e62d.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:13:36', '04/03/2024', 'admin', NULL),
(33, 403, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522026_b350b31443127e1dbd78.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:13:46', '04/03/2024', 'admin', NULL),
(34, 403, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522033_dd4b2d198e82158e2f9e.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:13:53', '04/03/2024', 'admin', NULL),
(35, 501, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522046_74b11c52c66954b90d06.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:14:06', '04/03/2024', 'admin', NULL),
(36, 501, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522054_8a54ca7d82db4432a9bc.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:14:14', '04/03/2024', 'admin', NULL),
(37, 501, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522065_f5f080178fbc934f4e32.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:14:25', '04/03/2024', 'admin', NULL),
(38, 502, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522077_3eea425b4b6bb1aefeb7.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:14:37', '04/03/2024', 'admin', NULL),
(39, 502, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1709522087_2aa8249f46dc76a5506a.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>cscascasc</p>\r\n', '2024-03-04 03:14:47', '04/03/2024', 'admin', NULL),
(40, 502, 1, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', 'http://localhost:8080/uploads/1711186581_7a07b55a35fd270b908b.jpg', 0, 'Diễn tập ứng cứu tình huống khẩn cấp & đảm bảo an toàn đập, hồ chứa đập thủy điện Đakđrinh năm 2025', '', '<p>người lao động</p>\r\n', '2024-03-04 03:14:58', '04/03/2024', 'admin', NULL),
(43, 302, 1, 'sss', 'http://localhost:8080/uploads/1711356949_f41a309b8e91756d7b4e.jpg', 0, 'test', '', '<p>scassac</p>\r\n', '2024-03-25 08:55:49', '25/03/2024', 'admin', NULL),
(45, 401, 1, 'test', 'http://localhost:8080/uploads/1713683234_a23be4ec9663c9c41069.png', 1, 'test ', '', '<p>fsdcsdcs</p>\r\n', '2024-04-21 07:07:14', '21/04/2024', 'admin', 4),
(46, 401, 1, NULL, 'http://localhost:8080/uploads/1713704150_a145330cc37ef322d254.jpg', 1, 'test2222', '', '<p>test</p>\r\n', '2024-04-21 12:55:50', '21/04/2024', 'admin', 4),
(47, 401, 1, NULL, 'http://localhost:8080/uploads/1713704207_00453a7e41bc084aad37.png', 1, 'ạckjsacsa', '', '<p>sấcc</p>\r\n', '2024-04-21 12:56:47', '21/04/2024', 'admin', 4),
(48, 401, 1, NULL, 'http://localhost:8080/uploads/1713704254_e784befd4a50489a2997.png', 1, 'ạckjsacsa', '', '<p>sấcc</p>\r\n', '2024-04-21 12:57:34', '21/04/2024', 'admin', 4),
(49, 401, 1, NULL, 'http://localhost:8080/uploads/1713704529_ad87888ac0f1614c3180.jpg', 1, 'ahsbcjanksa', '', '<p>s&acirc;csacsac</p>\r\n', '2024-04-21 13:02:10', '21/04/2024', 'admin', 4),
(50, 501, 1, NULL, 'http://localhost:8080/uploads/1713707546_2cf14b6595489190a341.jpg', 0, 'testbacnsajcsac', '', '<p>acsacsacsa</p>\r\n', '2024-04-21 13:52:26', '21/04/2024', 'admin', 5),
(51, 302, 1, NULL, 'http://localhost:8080/uploads/1713707709_34401f2e8dd3b5b63ca5.jpg', 0, 'asacascacsac', '', '<p>ấccascsac</p>\r\n', '2024-04-21 13:55:09', '21/04/2024', 'admin', 3),
(52, 201, 1, NULL, 'http://localhost:8080/uploads/1713715472_1d6bc9b1a98fb89e1498.jpg', 1, 'Bài Viết Về Bóng Đá', '', '<p>b&agrave;i viết test</p>\r\n', '2024-04-21 16:04:32', '21/04/2024', 'admin', 2),
(53, 201, 1, NULL, 'http://localhost:8080/uploads/1713715688_3336a4a7ab949fd2abea.jpg', 1, 'Bài Viết Về Lập Trình', '', '<p>lập tr&igrave;nh l&agrave; nhất</p>\r\n', '2024-04-21 16:08:08', '21/04/2024', 'admin', 2),
(54, 201, 1, NULL, 'http://localhost:8080/uploads/1713715726_06fc93d340330533c0a7.jpg', 1, 'Bài Viết Về Lập Trình', 'bai-viet-ve-lap-trinh', '<p>lập tr&igrave;nh l&agrave; nhất</p>\r\n', '2024-04-21 16:08:46', '21/04/2024', 'admin', 2),
(55, 105, 1, NULL, 'http://localhost:8080/uploads/1713792085_5e7d05012d1e3de4a4e4.png', 0, 'Giới thiệu', 'gioi-thieu', '<h3>PV POWER DHC dưới sự chỉ đạo điều h&agrave;nh quyết liệt của Ban l&atilde;nh đạo, đồng bộ c&aacute;c kh&acirc;u từ quản l&yacute; sản xuất, kỹ thuật đến nắm bắt thị trường ch&agrave;o gi&aacute; cạnh tranh, x&acirc;y dựng hệ thống quản l&yacute; c&ocirc;ng ty theo ti&ecirc;u chuẩn ISO 9001-2008 n&ecirc;n hiệu quả sản xuất kinh doanh lũy k&ecirc;́ lợi nhu&acirc;̣n các năm 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021 v&agrave; 2022 đạt 863 tỷ đồng.</h3>\r\n\r\n<p>C&ocirc;ng ty Cổ phần Thủy điện Đakđrinh được th&agrave;nh lập ng&agrave;y 16/3/2007 bởi 4 cổ đ&ocirc;ng s&aacute;ng lập: Tập đo&agrave;n Dầu kh&iacute; quốc gia Việt Nam nay chuyển quyền cho Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam - CTCP (PV Power), Ng&acirc;n h&agrave;ng TMCP Đầu tư v&agrave; Ph&aacute;t triển Việt Nam (BIDV), Tổng C&ocirc;ng ty S&ocirc;ng Đ&agrave; - CTCP (S&ocirc;ng Đ&agrave;) v&agrave; Tổng C&ocirc;ng ty LICOGI - CTCP (LICOGI), theo Giấy chứng nhận đăng k&yacute; kinh doanh C&ocirc;ng ty cổ phần số 4300350203 do Sở Kế hoạch v&agrave; Đầu tư tỉnh Quảng Ng&atilde;i cấp lần đầu ng&agrave;y 21/03/2007, với số vốn điều lệ l&agrave; 930.000.000.000 đồng.</p>\r\n\r\n<p>C&ocirc;ng ty Cổ phần Thủy điện Đakđrinh l&agrave; chủ đầu tư Dự &aacute;n thủy điện Đakđrinh, dự &aacute;n được bố tr&iacute; ở lưu vực s&ocirc;ng Đakđrinh thuộc huyện Sơn T&acirc;y tỉnh Quảng Ng&atilde;i v&agrave; huyện Kon Pl&ocirc;ng tỉnh Kon Tum c&aacute;ch th&agrave;nh phố Quảng Ng&atilde;i khoảng 70km về ph&iacute;a t&acirc;y. Đ&acirc;y l&agrave; dự &aacute;n nằm trong chương tr&igrave;nh trọng điểm ph&aacute;t triển Kinh tế - X&atilde; hội, An ninh năng lượng của Quốc gia n&oacute;i chung v&agrave; tỉnh Quảng Ng&atilde;i n&oacute;i ri&ecirc;ng.</p>\r\n\r\n<p>Nh&agrave; m&aacute;y thủy điện Đakđrinh c&oacute; c&ocirc;ng suất thiết kế 125MW, bao gồm 02 tổ m&aacute;y với tổng mức đầu tư 5.921 tỷ đồng, sản lượng điện trung b&igrave;nh h&agrave;ng năm l&agrave; 540,925 triệu KWh.</p>\r\n\r\n<p>Nh&agrave; m&aacute;y vận h&agrave;nh ph&aacute;t điện thương mại h&ograve;a v&agrave;o mạng lưới Quốc gia tổ m&aacute;y số 1 v&agrave;o th&aacute;ng 6 năm 2014, tổ m&aacute;y số 2 v&agrave;o th&aacute;ng 9 năm 2014. Nh&agrave; m&aacute;y thủy điện Đakđrinh c&ograve;n tham gia ph&ograve;ng chống lũ v&agrave;o m&ugrave;a mưa v&agrave; bổ sung nước m&ugrave;a hạn cho hạ du.</p>\r\n\r\n<p><strong>Dự &aacute;n đ&atilde; triển khai:</strong></p>\r\n\r\n<p>- Nh&agrave; m&aacute;y thủy điện Đakđrinh, huyện Sơn T&acirc;y, tỉnh Quảng Ngãi và huy&ecirc;̣n Kon Pl&ocirc;ng tỉnh Kon Tum</p>\r\n\r\n<p>+ C&ocirc;ng suất lắp m&aacute;y 125MW.</p>\r\n\r\n<p>+ Điện lượng b&igrave;nh qu&acirc;n năm 540,925 triệu kWh.</p>\r\n\r\n<p>+ Khởi c&ocirc;ng từ năm 2007 v&agrave; vận h&agrave;nh ph&aacute;t điện v&agrave;o th&aacute;ng 6/2014.</p>\r\n\r\n<p><strong>Định hướng chiến lược ph&aacute;t triển C&ocirc;ng ty từ năm 2015-2020, tầm nh&igrave;n đến 2030:</strong></p>\r\n\r\n<ul>\r\n	<li><strong><em>Tầm nh&igrave;n:&nbsp;</em></strong>C&ocirc;ng ty Cổ phần Thủy&nbsp;điện Đakđrinh ph&aacute;t triển bền vững, trở th&agrave;nh một trong những C&ocirc;ng ty Cổ phần hoạt động sản xuất, kinh doanh điện hiệu quả khu vực miền Trung.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong><em>Sứ mệnh:&nbsp;</em></strong>Cung cấp điện đảm bảo chất lượng điện năng, đề cao tinh thần hợp t&aacute;c bền vững đối với cổ đ&ocirc;ng v&agrave; đối t&aacute;c. X&acirc;y dựng m&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp, năng động, s&aacute;ng tạo, hiệu quả v&agrave; nh&acirc;n văn, c&oacute; tr&aacute;ch nhiệm với x&atilde; hội.</li>\r\n</ul>\r\n\r\n<p><strong>H&igrave;nh thức khen thưởng đ&atilde; đạt được:</strong></p>\r\n\r\n<ul>\r\n	<li>Danh hiệu thi đua:</li>\r\n</ul>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Năm</p>\r\n			</td>\r\n			<td>\r\n			<p>Danh hiệu thi đua</p>\r\n			</td>\r\n			<td>\r\n			<p>Số, ng&agrave;y, th&aacute;ng, năm của quyết định c&ocirc;ng nhận danh hiệu thi đua; Cơ quan ban h&agrave;nh quyết định</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2012</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động xuất sắc</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 608/QĐ-ĐLDK ng&agrave;y 04/12/2012 của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2013</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động xuất sắc</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 665/QĐ-ĐLDK ng&agrave;y 29/11/2013 của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2015</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động ti&ecirc;n tiến</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 956/QĐ-ĐLDK ng&agrave;y 01/12/2015 của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2016</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động ti&ecirc;n tiến</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 1313/QĐ-ĐLDK ng&agrave;y 01/12/2016&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2017</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động ti&ecirc;n tiến</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 1158/QĐ-ĐLDK ng&agrave;y 01/12/2017&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2018</p>\r\n			</td>\r\n			<td>\r\n			<p>Tập thể lao động ti&ecirc;n tiến</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 698/QĐ-ĐLDK ng&agrave;y 06/12/2018&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam - CTCP</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul>\r\n	<li>H&igrave;nh thức khen thưởng:</li>\r\n</ul>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Năm</p>\r\n			</td>\r\n			<td>\r\n			<p>H&igrave;nh thức khen thưởng</p>\r\n			</td>\r\n			<td>\r\n			<p>Số, ng&agrave;y, th&aacute;ng, năm của quyết định khen thưởng; Cơ quan ban h&agrave;nh quyết định</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2012</p>\r\n			</td>\r\n			<td>\r\n			<p>Giấy khen của Tổng C&ocirc;ng ty</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 609/QĐ-ĐLDK ng&agrave;y 4/12/2012&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2014</p>\r\n			</td>\r\n			<td>\r\n			<p>Bằng khen của Bộ Trưởng Bộ C&ocirc;ng Thương</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 783/QĐ-BCT ng&agrave;y 22/01/2014 của Bộ Trưởng Bộ C&ocirc;ng Thương</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2015</p>\r\n			</td>\r\n			<td>\r\n			<p>Giấy khen của Tổng C&ocirc;ng ty</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 959/QĐ-ĐLDK ng&agrave;y 7/12/2015&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2016</p>\r\n			</td>\r\n			<td>\r\n			<p>Bằng khen của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 1699/QĐ-UBND ng&agrave;y 20/9/2016 của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2016</p>\r\n			</td>\r\n			<td>\r\n			<p>Giấy khen của Tổng C&ocirc;ng ty</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 1312/QĐ-ĐLDK ng&agrave;y 1/12/2016&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2017</p>\r\n			</td>\r\n			<td>\r\n			<p>Bằng khen của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 496/QĐ-UBND ng&agrave;y 23/3/2017 của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2017</p>\r\n			</td>\r\n			<td>\r\n			<p>Giấy khen của Tổng C&ocirc;ng ty</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 1160/QĐ-ĐLDK ng&agrave;y 01/12/2017&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2018</p>\r\n			</td>\r\n			<td>\r\n			<p>Bằng khen của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 185/QĐ-UBND ng&agrave;y 30/01/2018 của UBND tỉnh Quảng Ng&atilde;i</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2018</p>\r\n			</td>\r\n			<td>\r\n			<p>Giấy khen của Tổng C&ocirc;ng ty</p>\r\n			</td>\r\n			<td>\r\n			<p>QĐ số 697/QĐ-ĐLDK ng&agrave;y 06/12/2018&nbsp; của Tổng C&ocirc;ng ty Điện lực Dầu kh&iacute; Việt Nam.- CTCP</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>KHẲNG ĐỊNH THƯƠNG HIỆU</strong></p>\r\n\r\n<p>PV POWER DHC đ&atilde; ph&aacute;t triển rất t&ocirc;́t: Tổng số vốn điều lệ ban đầu l&agrave; 930 tỷ đồng sau gần 12 năm hoạt động, vốn điều lệ l&ecirc;n đến 1.160,01 tỷ đồng; c&oacute; 4 ph&ograve;ng ban v&agrave; 01 ph&acirc;n xưởng VHSC; Nh&agrave; m&aacute;y Thủy điện Đakđrinh với tổng sản lượng điện h&agrave;ng năm gần 540,925 triệu kWh. PV POWER DHC có k&ecirc;́ hoạch sẽ ni&ecirc;m yết hơn 116 triệu cổ phiếu l&ecirc;n sàn chứng khoán và sẽ trở th&agrave;nh c&ocirc;ng ty đại ch&uacute;ng trong lĩnh vực đầu tư x&acirc;y dựng sản xuất kinh doanh điện năng trong thời gian tới; Thương hiệu PV POWER DHC sẽ được khẳng định tr&ecirc;n thị trường.</p>\r\n\r\n<p>Đến nay, 2 tổ m&aacute;y ph&aacute;t điện của Nh&agrave; m&aacute;y Thủy điện Đakđrinh vận h&agrave;nh ổn định. PV POWER DHC dưới sự chỉ đạo điều h&agrave;nh quyết liệt của Ban l&atilde;nh đạo, đồng bộ c&aacute;c kh&acirc;u từ quản l&yacute; sản xuất, kỹ thuật đến nắm bắt thị trường ch&agrave;o gi&aacute; cạnh tranh, x&acirc;y dựng hệ thống quản l&yacute; c&ocirc;ng ty theo ti&ecirc;u chuẩn ISO 9001-2008 n&ecirc;n hiệu quả sản xuất kinh doanh lũy k&ecirc;́ lợi nhu&acirc;̣n các năm 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021 v&agrave; 2022 đạt 863 tỷ đồng.</p>\r\n', '2024-04-22 13:21:25', '22/04/2024', 'admin', 1),
(56, 1102, 1, NULL, 'http://localhost:8080/uploads/1713836448_6a5a379afce3cda7a07d.jpg', 1, 'Biểu Tình Phản Đối Chiến Tranh Tại Mỹ', 'bieu-tinh-phan-doi-chien-tranh-tai-my', '<p>mỹ c&uacute;t ngụy nh&agrave;o</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/download%20(1).jpg\" style=\"height:225px; width:225px\" /></p>\r\n', '2024-04-23 01:40:48', '23/04/2024', 'admin', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbbieudothuydien`
--

CREATE TABLE `tbbieudothuydien` (
  `idbieudothuydien` int(16) NOT NULL,
  `sanluongngay` int(16) NOT NULL,
  `mucnuocho` int(16) NOT NULL,
  `tongluuluong` int(16) NOT NULL,
  `sanluongthang` int(16) NOT NULL,
  `sanluongquy` int(16) NOT NULL,
  `sanluongnam` int(16) NOT NULL,
  `ngaynhaplieu` int(16) NOT NULL,
  `thangnhaplieu` int(16) NOT NULL,
  `quynhaplieu` text NOT NULL,
  `namnhaplieu` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbieudothuydien`
--

INSERT INTO `tbbieudothuydien` (`idbieudothuydien`, `sanluongngay`, `mucnuocho`, `tongluuluong`, `sanluongthang`, `sanluongquy`, `sanluongnam`, `ngaynhaplieu`, `thangnhaplieu`, `quynhaplieu`, `namnhaplieu`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, '1', 1),
(2, 1, 1, 1, 1, 1, 1, 1, 1, '1', 1),
(3, 1000, 10000, 50000, 40000, 70000, 100000, 23, 2, 'I', 2024),
(4, 1, 1, 1, 1, 1, 1, 1, 1, '1', 1),
(5, 1000, 10000, 50000, 40000, 70000, 100000, 23, 2, 'I', 2024),
(6, 1000, 10000, 30000, 40000, 90000, 150000, 25, 2, 'I', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `tbcauhinhweb`
--

CREATE TABLE `tbcauhinhweb` (
  `id` int(11) NOT NULL,
  `anhlogo` text NOT NULL,
  `sodienthoai` text NOT NULL,
  `tenweb` text NOT NULL,
  `anhicon` text NOT NULL,
  `linkemail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcauhinhweb`
--

INSERT INTO `tbcauhinhweb` (`id`, `anhlogo`, `sodienthoai`, `tenweb`, `anhicon`, `linkemail`) VALUES
(1, 'http://localhost:8080/uploads/1713691260_5e9dc962e46d3cea9721.jpg', '097649601444444444', 'thủy điện dahdrink', 'http://localhost:8080/uploads/1713691260_4b6c0cd20e960e5278fe.jpg', 'phuocdhc2023@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbdanhmuc`
--

CREATE TABLE `tbdanhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `urldanhmuc` text NOT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdanhmuc`
--

INSERT INTO `tbdanhmuc` (`iddanhmuc`, `idmenu`, `tendanhmuc`, `urldanhmuc`, `ghichu`) VALUES
(101, 1, 'Thông Tin Doanh Nghiệp', 'thongtindoanhnghiep', 'chú thích thông tin doanh nghiệp'),
(102, 1, 'Ngành Nghề Kinh Doanh', '', 'bổ sung danh mục'),
(103, 1, 'Lịch sử hình thành & phát triển', '', 'bổ sung danh mục'),
(104, 1, 'Dự Án', '', 'Chú thích dự án '),
(105, 1, 'Giới Thiệu', 'gioithieu', 'Giới thiệu '),
(106, 1, 'Ban Lãnh Đạo', '', 'danh mục này không phục vụ việc đăng tin'),
(201, 2, 'Hoạt Động Cộng Đồng', '', NULL),
(202, 2, 'Hoạt Động Ngành Điện', '', NULL),
(203, 2, 'Tin Tức PVPower', '', NULL),
(204, 2, 'Tin Tức PVPowerDHC', '', NULL),
(301, 3, 'Chiến Lược Mục Tiêu', '', NULL),
(302, 3, 'Tình HÌnh Sản Xuất Kinh Doanh', '', NULL),
(303, 3, 'Kế Hoạch Sản Xuất Kinh Doanh', '', NULL),
(401, 4, 'Thông Báo Đấu Thầu', 'thongbaodauthau', 'thongbaodauthau'),
(402, 4, 'Thông Báo Tuyển Dụng', 'thongbaotuyendung', 'thongbaotuyendung'),
(403, 4, 'Thông Báo Báo Chí', 'thongbaobaochi', 'thongbaobaochi'),
(501, 5, 'Cộng Đồng', '', NULL),
(502, 5, 'Người Lao Động', '', NULL),
(503, 5, 'Các Chính Sách Môi Trường', '', NULL),
(601, 6, 'Thông Tin/Tài Liệu Cổ Đông', '', NULL),
(602, 6, 'Đại Hội Cổ Đông', '', NULL),
(603, 6, 'Báo Cáo Tài Chính', '', NULL),
(701, 7, 'Thư Viện Ảnh', '', 'Thư Viện Ảnh'),
(702, 7, 'Thư Viện Video', '', 'Thư Viện Video'),
(801, 8, 'Liên Hệ', 'lienhe', 'danh mục này không phục vụ đăng tin'),
(1101, 11, 'Trực Tiếp Tại Việt Nam', 'tructieptaivietnam', 'test menu động '),
(1102, 11, 'Trực Tiếp Tại Mỹ', 'tructieptaimy', 'test menu động'),
(1103, 11, 'Trực Tiếp Tại Nhật', 'tructieptainhat', 'test menu động ');

-- --------------------------------------------------------

--
-- Table structure for table `tbdanhsachbaiviet`
--

CREATE TABLE `tbdanhsachbaiviet` (
  `idbaiviet` int(11) NOT NULL,
  `tieudebaiviet` varchar(255) NOT NULL,
  `tennguoidung` varchar(255) NOT NULL,
  `anhrthumnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbmenu`
--

CREATE TABLE `tbmenu` (
  `idmenu` int(11) NOT NULL,
  `tenmenu` text NOT NULL,
  `urlmenu` text NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmenu`
--

INSERT INTO `tbmenu` (`idmenu`, `tenmenu`, `urlmenu`, `ghichu`) VALUES
(1, 'GIỚI THIỆU', 'gioithieu', ''),
(2, 'TIN TỨC SỰ KIỆN', 'tintucsukien', ''),
(3, 'HOẠT ĐỘNG SXKD', 'hoatdongsxkd', ''),
(4, 'THÔNG BÁO', 'thongbao', ''),
(5, 'AT-SK-MT', 'at-sk-mt', ''),
(6, 'QUAN HỆ CỔ ĐÔNG', 'quanhecodong', ''),
(7, 'THƯ VIỆN', 'thuvien', ''),
(8, 'LIÊN HỆ', 'lienhe', ''),
(11, 'Chương Trình Trực Tiếp', 'chuongtrinhtructiep', 'test menu động ');

-- --------------------------------------------------------

--
-- Table structure for table `tbsliderhome`
--

CREATE TABLE `tbsliderhome` (
  `idsliderhome` int(16) NOT NULL,
  `chuthichanhsliderhome` text NOT NULL,
  `anhsliderhome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbsliderhome`
--

INSERT INTO `tbsliderhome` (`idsliderhome`, `chuthichanhsliderhome`, `anhsliderhome`) VALUES
(1, 'test', 'http://localhost:8080/uploads/1710593337_26a25818ba7acbaa9899.jpg'),
(2, 'test 2', 'http://localhost:8080/uploads/1710318209_dfc0361af856d089ab92.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbsliderlogo`
--

CREATE TABLE `tbsliderlogo` (
  `id` int(11) NOT NULL,
  `tenlogo` text NOT NULL,
  `anhlogo` text NOT NULL,
  `chuthich` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbsliderlogo`
--

INSERT INTO `tbsliderlogo` (`id`, `tenlogo`, `anhlogo`, `chuthich`) VALUES
(3, 'logo 2', 'http://localhost:8080/uploads/1713685336_2b3f8e297998351eccb6.jpg', 'logo 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbslidertexthome`
--

CREATE TABLE `tbslidertexthome` (
  `idslidertexthome` int(11) NOT NULL,
  `textsliderhome` text NOT NULL,
  `chuthich` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbslidertexthome`
--

INSERT INTO `tbslidertexthome` (`idslidertexthome`, `textsliderhome`, `chuthich`) VALUES
(1, '<p><span style=\"color:#c0392b\"><span style=\"font-size:16px\">CH&Uacute;C MỪNG NĂM MỚI 2025</span></span></p>\r\n', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbslogan`
--

CREATE TABLE `tbslogan` (
  `idslogan` int(11) NOT NULL,
  `noidungslogan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbslogan`
--

INSERT INTO `tbslogan` (`idslogan`, `noidungslogan`) VALUES
(1, '<p>PV POWER DHC dưới sự chỉ đạo điều h&agrave;nh quyết liệt của Ban l&atilde;nh đạo, đồng bộ c&aacute;c kh&acirc;u từ quản l&yacute; sản xuất, kỹ thuật đến nắm bắt thị trường ch&agrave;o gi&aacute; cạnh tranh, x&acirc;y dựng hệ thống quản l&yacute; c&ocirc;ng ty theo ti&ecirc;u chuẩn ISO 9001-2008 n&ecirc;n hiệu quả sản xuất kinh doanh lũy k&ecirc;́ lợi nhu&acirc;̣n các năm 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021 v&agrave; 2022 đạt 1001 tỷ đồng..</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbthongtinduan`
--

CREATE TABLE `tbthongtinduan` (
  `idthongtinduan` int(16) NOT NULL,
  `anhrthumnail` text DEFAULT NULL,
  `tieudethongtinduan` text DEFAULT NULL,
  `noidungthongtinduan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbthongtinduan`
--

INSERT INTO `tbthongtinduan` (`idthongtinduan`, `anhrthumnail`, `tieudethongtinduan`, `noidungthongtinduan`) VALUES
(1, 'http://localhost:8080/uploads/1710658654_39a143d7164ac8080ac4.jpg', 'Thủy Điện Dardrink', '<p>nội dung thủy điẹn&nbsp;</p>\r\n'),
(2, 'http://localhost:8080/uploads/1710661216_6930d52a0d2e0753a321.jpg', 'tesst1', '<p>vjhsavcjhasbjksa</p>\r\n'),
(3, 'http://localhost:8080/uploads/1713691843_925d0ba9f2ecda194c26.jpg', 'tesst4', '<p>vjhsavcjhasbjksa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbthuvienanh`
--

CREATE TABLE `tbthuvienanh` (
  `idthuvienanh` int(11) NOT NULL,
  `danhmucnamanh` int(11) NOT NULL,
  `ngaydanganh` text NOT NULL,
  `hinhanh` text NOT NULL,
  `chuthichanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbthuvienanh`
--

INSERT INTO `tbthuvienanh` (`idthuvienanh`, `danhmucnamanh`, `ngaydanganh`, `hinhanh`, `chuthichanh`) VALUES
(10, 2022, '22/03/2024', 'http://localhost:8080/uploads/1711076347_625a95b6314c58f8c53d.jpg', 'image demo by dev havinnguyen'),
(11, 2022, '20/03/2024', 'http://localhost:8080/uploads/1711078538_09f24e76c7c19c4295cb.jpg', 'image demo by dev havinnguyen'),
(12, 2021, '20/03/2024', 'http://localhost:8080/uploads/1711078547_f36d07e2d95662252641.jpg', 'image demo by dev havinnguyen'),
(13, 2021, '10/03/2024', 'http://localhost:8080/uploads/1711078554_79be018e226c955f084d.jpg', 'image demo by dev havinnguyen'),
(14, 2023, '10/03/2024', 'http://localhost:8080/uploads/1711078565_766d691e3389e164be7c.jpg', 'image demo by dev havinnguyen'),
(15, 2023, '12/03/2024', 'http://localhost:8080/uploads/1711078579_1ff5faa557dbb7128c06.jpg', 'image demo by dev havinnguyen'),
(16, 2024, '2/03/2024', 'http://localhost:8080/uploads/1713708660_ddaa6e1c8daae328e1b3.jpg', 'image demo by dev phúc nguyễn');

-- --------------------------------------------------------

--
-- Table structure for table `tbthuvienvideo`
--

CREATE TABLE `tbthuvienvideo` (
  `idvideo` int(11) NOT NULL,
  `tenvideo` text NOT NULL,
  `linkvideo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbthuvienvideo`
--

INSERT INTO `tbthuvienvideo` (`idvideo`, `tenvideo`, `linkvideo`) VALUES
(7, 'Video năm ', 'https://www.youtube.com/embed/nKVQTC-OJCk?si=X7HOVomT8emcH9oD');

-- --------------------------------------------------------

--
-- Table structure for table `tbtruycap`
--

CREATE TABLE `tbtruycap` (
  `idtruycap` int(11) NOT NULL,
  `truycapngay` text NOT NULL,
  `truycaptuan` text NOT NULL,
  `tongtruycap` text NOT NULL,
  `ngay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtruycap`
--

INSERT INTO `tbtruycap` (`idtruycap`, `truycapngay`, `truycaptuan`, `tongtruycap`, `ngay`) VALUES
(1, '18', '', '', '2024-04-26'),
(28, '53', '', '', '2024-04-27'),
(29, '', '71', '', '2024-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(11) NOT NULL,
  `tennguoidung` varchar(255) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `rule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `tennguoidung`, `tentaikhoan`, `matkhau`, `rule`) VALUES
(1, 'admin', 'admin', 'a123123', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  ADD PRIMARY KEY (`idbaiviet`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `fk_tbmenu_tbbaiviet` (`idmenu`);

--
-- Indexes for table `tbbieudothuydien`
--
ALTER TABLE `tbbieudothuydien`
  ADD PRIMARY KEY (`idbieudothuydien`);

--
-- Indexes for table `tbcauhinhweb`
--
ALTER TABLE `tbcauhinhweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbdanhmuc`
--
ALTER TABLE `tbdanhmuc`
  ADD PRIMARY KEY (`iddanhmuc`),
  ADD KEY `fk_tbmenu_idmenu` (`idmenu`);

--
-- Indexes for table `tbdanhsachbaiviet`
--
ALTER TABLE `tbdanhsachbaiviet`
  ADD PRIMARY KEY (`idbaiviet`);

--
-- Indexes for table `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tbsliderhome`
--
ALTER TABLE `tbsliderhome`
  ADD PRIMARY KEY (`idsliderhome`);

--
-- Indexes for table `tbsliderlogo`
--
ALTER TABLE `tbsliderlogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbslidertexthome`
--
ALTER TABLE `tbslidertexthome`
  ADD PRIMARY KEY (`idslidertexthome`);

--
-- Indexes for table `tbslogan`
--
ALTER TABLE `tbslogan`
  ADD PRIMARY KEY (`idslogan`);

--
-- Indexes for table `tbthongtinduan`
--
ALTER TABLE `tbthongtinduan`
  ADD PRIMARY KEY (`idthongtinduan`);

--
-- Indexes for table `tbthuvienanh`
--
ALTER TABLE `tbthuvienanh`
  ADD PRIMARY KEY (`idthuvienanh`);

--
-- Indexes for table `tbthuvienvideo`
--
ALTER TABLE `tbthuvienvideo`
  ADD PRIMARY KEY (`idvideo`);

--
-- Indexes for table `tbtruycap`
--
ALTER TABLE `tbtruycap`
  ADD PRIMARY KEY (`idtruycap`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `tentaikhoan` (`tentaikhoan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  MODIFY `idbaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbbieudothuydien`
--
ALTER TABLE `tbbieudothuydien`
  MODIFY `idbieudothuydien` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbcauhinhweb`
--
ALTER TABLE `tbcauhinhweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbdanhmuc`
--
ALTER TABLE `tbdanhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1104;

--
-- AUTO_INCREMENT for table `tbmenu`
--
ALTER TABLE `tbmenu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbsliderhome`
--
ALTER TABLE `tbsliderhome`
  MODIFY `idsliderhome` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbsliderlogo`
--
ALTER TABLE `tbsliderlogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbslidertexthome`
--
ALTER TABLE `tbslidertexthome`
  MODIFY `idslidertexthome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbslogan`
--
ALTER TABLE `tbslogan`
  MODIFY `idslogan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbthongtinduan`
--
ALTER TABLE `tbthongtinduan`
  MODIFY `idthongtinduan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbthuvienanh`
--
ALTER TABLE `tbthuvienanh`
  MODIFY `idthuvienanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbthuvienvideo`
--
ALTER TABLE `tbthuvienvideo`
  MODIFY `idvideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbtruycap`
--
ALTER TABLE `tbtruycap`
  MODIFY `idtruycap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbbaiviet`
--
ALTER TABLE `tbbaiviet`
  ADD CONSTRAINT `fk_tbmenu_tbbaiviet` FOREIGN KEY (`idmenu`) REFERENCES `tbmenu` (`idmenu`),
  ADD CONSTRAINT `tbbaiviet_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `tbdanhmuc` (`iddanhmuc`),
  ADD CONSTRAINT `tbbaiviet_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `tbuser` (`iduser`);

--
-- Constraints for table `tbdanhmuc`
--
ALTER TABLE `tbdanhmuc`
  ADD CONSTRAINT `fk_tbmenu_idmenu` FOREIGN KEY (`idmenu`) REFERENCES `tbmenu` (`idmenu`);

--
-- Constraints for table `tbdanhsachbaiviet`
--
ALTER TABLE `tbdanhsachbaiviet`
  ADD CONSTRAINT `tbdanhsachbaiviet_ibfk_1` FOREIGN KEY (`idbaiviet`) REFERENCES `tbbaiviet` (`idbaiviet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
