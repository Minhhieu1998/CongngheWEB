-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 01:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `58ht`
--

CREATE TABLE `58ht` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `masv` int(11) DEFAULT NULL,
  `diemqt` int(11) NOT NULL,
  `diemthi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `58ht`
--

INSERT INTO `58ht` (`id`, `name`, `masv`, `diemqt`, `diemthi`) VALUES
(13, 'Nguyá»…n Äá»©c Huy', 1651160931, 0, 0),
(12, 'Tráº§n Viá»‡t Nam HoÃ ng', 1651160931, 0, 0),
(11, 'Nguyá»…n Thá»‹ HÃ²a', 1651160931, 0, 0),
(10, 'LÃª Thá»‹ Háº±ng', 1651160931, 0, 0),
(9, 'Nguyá»…n Thá»‹ Háº¡nh', 1651160931, 0, 0),
(8, 'PhÃ¹ng Thá»‹ Thu HÃ ', 1651160931, 0, 0),
(7, 'TrÆ°Æ¡ng Minh Äá»©c', 1651160931, 0, 0),
(6, 'Nguyá»…n Há»¯u Äá»©ch', 1651160931, 0, 0),
(5, 'Äinh ÄÄƒng Äá»©c', 1651160931, 0, 0),
(4, 'Nguyá»…n Thá»‹ DuyÃªn', 1651160931, 0, 0),
(3, 'Äáº·ng Quang CÆ°á»ng', 1651160931, 0, 0),
(2, 'LÃª VÄƒn Cáº§m', 1651160931, 0, 0),
(1, 'Nguyá»…n Thá»‹ Nháº­t Ãnh', 1651160931, 0, 0),
(14, 'LÃ£ Thá»‹ Thu HÆ°Æ¡ng', 1651160931, 0, 0),
(15, 'LÃª Quáº£n Giang HÆ°Æ¡ng', 1651160931, 0, 0),
(16, 'Tráº§n Thá»‹ Mai HÆ°Æ¡ng', 1651160931, 0, 0),
(17, 'Nguyá»…n Äá»©c LÃ¢m', 1651160931, 0, 0),
(18, 'Vi Tháº¿ TrÆ°á»ng LÃ¢m', 1651160931, 0, 0),
(19, 'Phan Thá»‹ Thuá»³ LiÃªn', 1651160931, 0, 0),
(20, 'PhÃ¹ng HoÃ ng Long ', 1651160931, 0, 0),
(21, 'ÄÃ o Quang Minh', 1651160931, 0, 0),
(26, '', NULL, 5, 7),
(27, '', NULL, 9, 5),
(28, '', NULL, 9, 2),
(29, '', NULL, 10, 2),
(30, '', NULL, 4, 6),
(31, '', NULL, 5, 5),
(32, '', NULL, 5, 8),
(33, '', NULL, 5, 1),
(34, '', NULL, 7, 5),
(35, '', NULL, 8, 7),
(36, '', NULL, 4, 5),
(37, '', NULL, 10, 8),
(38, '', NULL, 4, 3),
(39, '', NULL, 5, 7),
(40, '', NULL, 10, 7),
(41, '', NULL, 10, 5),
(42, '', NULL, 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `58th1`
--

CREATE TABLE `58th1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `age` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `58th1`
--

INSERT INTO `58th1` (`id`, `name`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Ripley Verbruggen', '576-94-8396', '', '', ''),
(2, 'Dodie Hirjak', '655-73-9016', '', '', ''),
(3, 'Louisette Dunkley', '592-26-5067', '', '', ''),
(4, 'Selene Duerdin', '473-52-2028', '', '', ''),
(5, 'Wylma Darch', '819-11-2212', '', '', ''),
(6, 'Cirillo Mazzey', '699-63-8086', '', '', ''),
(7, 'Cindi Borrett', '486-79-9339', '', '', ''),
(8, 'Phillipe Allsworth', '484-94-0170', '', '', ''),
(9, 'Wynn Merriday', '160-98-0092', '', '', ''),
(10, 'Lissi Saby', '522-62-0209', '', '', ''),
(11, 'Ripley Verbruggen', '576-94-8396', '', '', ''),
(12, 'Dodie Hirjak', '655-73-9016', '', '', ''),
(13, 'Louisette Dunkley', '592-26-5067', '', '', ''),
(14, 'Selene Duerdin', '473-52-2028', '', '', ''),
(15, 'Wylma Darch', '819-11-2212', '', '', ''),
(16, 'Cirillo Mazzey', '699-63-8086', '', '', ''),
(17, 'Cindi Borrett', '486-79-9339', '', '', ''),
(18, 'Phillipe Allsworth', '484-94-0170', '', '', ''),
(19, 'Wynn Merriday', '160-98-0092', '', '', ''),
(20, 'Lissi Saby', '522-62-0209', '', '', ''),
(21, 'Ripley Verbruggen', '576-94-8396', '', '', ''),
(22, 'Dodie Hirjak', '655-73-9016', '', '', ''),
(23, 'Louisette Dunkley', '592-26-5067', '', '', ''),
(24, 'Selene Duerdin', '473-52-2028', '', '', ''),
(25, 'Wylma Darch', '819-11-2212', '', '', ''),
(26, 'Cirillo Mazzey', '699-63-8086', '', '', ''),
(27, 'Cindi Borrett', '486-79-9339', '', '', ''),
(28, 'Phillipe Allsworth', '484-94-0170', '', '', ''),
(29, 'Wynn Merriday', '160-98-0092', '', '', ''),
(30, 'Lissi Saby', '522-62-0209', '', '', ''),
(31, 'Ripley Verbruggen', '576-94-8396', '', '', ''),
(32, 'Dodie Hirjak', '655-73-9016', '', '', ''),
(33, 'Louisette Dunkley', '592-26-5067', '', '', ''),
(34, 'Selene Duerdin', '473-52-2028', '', '', ''),
(35, 'Wylma Darch', '819-11-2212', '', '', ''),
(36, 'Cirillo Mazzey', '699-63-8086', '', '', ''),
(37, 'Cindi Borrett', '486-79-9339', '', '', ''),
(38, 'Phillipe Allsworth', '484-94-0170', '', '', ''),
(39, 'Nguyá»…n Minh Ãnh', '160-98-0092', '', '', ''),
(40, 'Nguyáº¿n Anh', '522-62-0209', '', '', 'ngu');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `permision` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `is_public`, `createdate`, `updatedate`) VALUES
(16, 'ahihi', 'hihiihiiiii fdskfkdsf sdfdsff à dsf dsf sdf ', 6, 1, '2018-10-16 13:32:34', '2018-10-16 13:32:34'),
(15, 'bai viet 1', 'dep trai', 6, 1, '2018-10-16 13:32:21', '2018-10-16 13:32:21'),
(14, 'Bai viet 4', 'minh hieu ', 6, 1, '2018-10-16 13:32:04', '2018-10-16 13:32:04'),
(13, 'bai viet 2', 'TEST 2', 6, 0, '2018-10-16 10:45:23', '2018-10-16 10:45:23'),
(12, 'Bai viet 1', 'TETS 1', 6, 0, '2018-10-16 10:45:07', '2018-10-16 10:45:07'),
(11, 'Bai viet 1', 'TETS 1', 6, 0, '2018-10-16 10:45:04', '2018-10-16 10:45:04'),
(17, 'bai viet 5', 'aaaaaaaaaaaaaaaaaa', 6, 1, '2018-10-16 13:32:50', '2018-10-16 13:32:50'),
(18, 'bai viet 6', 'vbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 6, 1, '2018-10-16 13:32:59', '2018-10-16 13:32:59'),
(19, 'bai viet 7', '', 6, 1, '2018-10-16 13:33:05', '2018-10-16 13:33:05'),
(20, 'BAI VIET 8', 'MINH HIEU DEEP TRY', 6, 1, '2018-10-16 13:34:41', '2018-10-16 13:34:41'),
(21, 'BAI VIET 9', 'OK OKO OKOKOKOKOKOKOKO', 6, 1, '2018-10-16 13:34:53', '2018-10-16 13:34:53'),
(22, 'BAI ~!)', 'jịe', 6, 1, '2018-10-16 14:47:14', '2018-10-16 14:47:14'),
(23, 'TRƯỜNG ĐH THỦY LỢI TUYỂN SINH', 'đại học thủy lơi sẽ tuyển thêm 1000 sinh viên theo học tại các khoa trong trường', 6, 1, '2018-10-29 14:51:39', '2018-10-29 14:51:39'),
(24, 'TRƯỜNG ĐH THỦY LỢI TUYỂN SINH', 'đại học thủy lơi sẽ tuyển thêm 1000 sinh viên theo học tại các khoa trong trường', 6, 1, '2018-10-29 14:52:04', '2018-10-29 14:52:04'),
(25, 'Khởi sự kinh doanh, từ khi còn ngồi trên giảng đường đại học', 'Hiện nay nhiều người trẻ với nhiệt huyết và tư duy sáng tạo, họ khởi nghiệp không chỉ tạo ra lợi nhuận mà còn mong muốn giải quyết những vấn đề của xã hội.\r\nCó lẽ cụm từ khởi nghiệp không còn xa lạ trong xã hội ngày nay, không chỉ là một trào lưu, khởi nghiệp còn là cách nhiều bạn trẻ lựa chọn để thể hiện tầm nhìn, ước mơ, mong muốn tạo sự thay đổi. Nhiều bạn trẻ đã gặt hái được thành công chỉ từ những ý tưởng kinh doanh đơn giản, thiết thực đối với xã hội, con người.\r\n\r\n\r\n\r\nKhóa học thu hút được sự hứng thú của người học\r\n\r\nNhằm đáp ứng nhu cầu khởi nghiệp của thế hệ trẻ, đặc biệt là sinh viên Trường Đại học Thủy lợi, bổ sung kiến thức, kỹ năng và thái độ cần thiết để các bạn sinh viên có khả năng khởi nghiệp bền vững; Viện Đào tạo và Phát triển Quản lý Davilaw kết hợp với Khoa Kinh tế và Quản lý tổ chức khóa học: Khởi sự kinh doanh (lớp thứ 3). Khóa học được diễn ra từ ngày 21-22/10/2018 tại Trường Đại học Thủy lợi.\r\n\r\nTheo bà Lê Thị Mỹ Dung, giảng viên ngành Quản trị kinh doanh cho biết, “tính đến nay khóa học khởi sự kinh doanh được Viện Đào tạo và Phát triển Quản lý Davilaw kết hợp với khoa tổ chức được 3 khóa đào tạo. Đã có khoảng 300 học viên tham gia các khóa học này. Đối tượng tham gia khá là mở, gồm các sinh viên năm thứ 3, năm thứ 4 của khối ngành Kinh tế và Quản trị kinh doanh, cùng các sinh viên ngành khác có nguyện vọng muốn học”.\r\n\r\nNội dung của khóa học tập trung vào các vấn đề được các bạn trẻ khá là quan tâm và rất hứng thú học tập như: Sự khác biệt giữa Khởi nghiệp và Start-up; những kiến thức và kỹ năng cần thiết để thành lập doanh nghiệp; Nhận thức kinh doanh và ý tưởng kinh doanh; những nội dung cơ bản của bản kế hoạch kinh doanh, kế hoạch marketing trong khởi sự kinh doanh; xây dựng đội ngũ trong khởi sự kinh doanh; Quản trị vốn trong khởi sự kinh doanh.\r\n\r\n\r\n\r\nCác thầy cô giáo khoa Kinh tế và Quản lý tham gia buổi khai mạc khóa học\r\n\r\n      Giảng viên lớp học là các thầy cô trong khoa Kinh tế và Quản lý, các chuyên gia về khởi nghiệp, Marketing của Viện Đào tạo và Phát triển Quản lý Davilaw đã truyền đạt những kiến thức bổ ích, những ví dụ sinh động để khơi dậy tính sáng tạo, động lực khởi nghiệp của các bạn trẻ.\r\n\r\n\r\n\r\nTS Đỗ Văn Quang, Trưởng khoa Kinh tế và Quản lý phát biểu trong buổi khai mạc\r\n\r\nĐược biết, đây là khóa học kinh doanh hoàn toàn miễn phí, ngoài việc được cung cấp kiến thức mới, cập nhật về khởi sự, các học viên còn được Viện Đào tạo và Phát triển Quản lý Davilaw cấp chứng chỉ hoàn thành khóa học.\r\n\r\nThực hiện: Bình Dương, Ảnh - Khoa Kinh tế và Quản lý cung cấp\r\n\r\n ', 6, 1, '2018-10-29 17:14:40', '2018-10-29 17:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `age` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Grease', 1651662486, '~~~', '0', '.....'),
(2, 'Adhesive Epoxy', 1651166974, '~~~', '0', '....'),
(11, 'PhÃ¹ng HoÃ ng Long	', 165116489, '~~~', '0', '....'),
(10, 'Äinh Thá»‹ LÃ½	', 1651166668, '~~~', '0', '....'),
(9, 'Nguyá»…n Äá»©c Máº¡nh	', 165116248, '~~~', '0', '....'),
(8, 'ÄÃ o Quang Minh	', 1651166233, '~~~', '0', '....'),
(7, 'Tráº§n CÃ´ng Minh	', 1651164877, '~~~', '0', '....'),
(6, 'Äáº·ng Quang CÆ°á»ng	', 165116389, '~~~', '0', '....'),
(5, 'VÅ© XuÃ¢n CÆ°á»ng	', 145682486, '~~~', '0', '...'),
(4, 'Adhesive Epoxy', 1651166974, '~~~', '0', '...'),
(3, 'Grease', 1651174928, '~~~', '0', '...'),
(12, 'ÄoÃ n VÄƒn Long	', 1651166877, '~~~', '0', '....'),
(13, 'Nguyá»…n Anh Linh	 ', 165112568, '~~~', '0', '...'),
(14, 'Nguyá»…n Thá»‹ Tuyáº¿t Linh', 165116359, '~~~', '0', '....'),
(15, 'HoÃ ng Thá»‹ ThÃ¹y Linh	', 165116258, '~~~', '0', '...'),
(16, 'Phan Thá»‹ Thuá»³ LiÃªn	', 165116245, '~~~', '0', '....'),
(17, 'Vi Tháº¿ TrÆ°á»ng LÃ¢m	', 1651162456, '~~~', '0', '....'),
(18, 'Nguyá»…n Äá»©c LÃ¢m	', 1651166884, '~~~', '0', '...'),
(19, 'Tráº§n Thá»‹ Mai HÆ°Æ¡ng	', 165116248, '~~~', '0', '...'),
(20, 'LÃª Quáº£n Giang HÆ°Æ¡ng	', 1651166879, '~~~', '0', '..'),
(21, 'LÃ£ Thá»‹ Thu HÆ°Æ¡ng	', 165116248, '~~~', '0', '...'),
(22, 'Pháº¡m Viá»‡t Giang', 165116235, '~~~', '0', '...'),
(23, 'Nguyá»…n VÄƒn Chung', 1651160468, '~~~', '0', '...'),
(24, 'Nguyá»…n Há»¯u CÆ°á»ng ', 1651160458, '~~~', '0', '...'),
(25, 'Äáº·ng Tháº¿ Ãnh', 1651160152, '~~~', '0', '...'),
(26, 'Nguyáº¿n Thá»‹ Kiá»u An', 1651166974, '~~~', '0', '......');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `permision` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `createdate`, `is_block`, `permision`) VALUES
(6, 'hieu', 'minhhieu98', 'ntminhhieu98@gmail.com', 'Nguyen Tran MInh Hieu', '2018-10-16 10:02:37', 0, 2),
(8, 'hieuu', 'minhhieu98', 'hieu@gmail.com', 'HIEU', '2018-10-16 10:35:14', 0, 0),
(10, 'hieu1', 'minhhieu98', 'ntminhi@gmail.com', 'HIẾU 1', '2018-10-16 15:25:01', 1, 0),
(11, 'hieu3', 'minhhieu98', 'hieuuuu@gmail.com', 'hiếu 3', '2018-10-16 15:25:52', 0, 0),
(12, 'hhhh', '123456', 'hagg@gmail.com', 'HAAAA', '2018-10-16 15:31:12', 0, 0),
(13, 'ha', 'ha', 'ha@gmail.com', 'ha', '2018-10-18 13:57:30', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `58ht`
--
ALTER TABLE `58ht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `58th1`
--
ALTER TABLE `58th1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `58ht`
--
ALTER TABLE `58ht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `58th1`
--
ALTER TABLE `58th1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
