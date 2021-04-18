-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 09:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_cruds`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `file`, `view_count`, `created_at`, `updated_at`, `status`) VALUES
(1, 'sldkcnlds', 'lsdknclsncs', 'sdlkcnslcs', 1, '2021-04-18 12:04:03', '2021-04-18 12:04:03', 1),
(2, 'salam', 'salammm', './uploads/article/6ba0a4060bdc9bb6f5317e9b23a9dc3f0.jpg', 1, '2021-04-18 08:06:05', '2021-04-18 08:06:05', 1),
(3, 'salam1', 'salammm1', '0def8091877777b8305d800790c7f6ec0.jpg', 1, '2021-04-18 08:06:47', '2021-04-18 08:06:47', 1),
(4, 'sdjnslc', 'sdkcnslc', 'e2556cc54c5708d4dda3fa55268790ff0.jpg', 1, '2021-04-18 08:08:53', '2021-04-18 08:08:53', 1),
(5, 'sldcknslcs', 'kcndslcsd', '4f4e253b43b26c2f097834bedd90279b0.jpg', 1, '2021-04-18 08:09:16', '2021-04-18 08:09:16', 1),
(6, 'sldkcnsldc', 'sldkcnslc', '1cf1b6e1cec06d80f041849866eb57850.jpg', 1, '2021-04-18 08:10:15', '2021-04-18 08:10:15', 1),
(7, 'cknsldcslcknl', 'lkdsncslckn', '04a65815e94fecc0ba9a1764c3cdc4dc0.jpg', 1, '2021-04-18 08:14:57', '2021-04-18 08:14:57', 1),
(8, 'cknsldcslcknl', 'lkdsncslckn', '26939c22e64a645494620dd6f9e434840.jpg', 1, '2021-04-18 08:15:37', '2021-04-18 08:15:37', 1),
(9, 'cknsldcslcknl', 'lkdsncslckn', '65a29654ba528036278b72c86b15a4490.jpg', 1, '2021-04-18 08:16:18', '2021-04-18 08:16:18', 1),
(10, 'cknsldcslcknl', 'lkdsncslckn', 'cb5b17bce5e3f82c9f6a6ffb2426f1510.jpg', 1, '2021-04-18 08:16:45', '2021-04-18 08:16:45', 1),
(11, 'cknsldcslcknl', 'lkdsncslckn', '84e9c426b5551ccb02f782d0ec7e3aac0.jpg', 1, '2021-04-18 08:17:24', '2021-04-18 08:17:24', 1),
(12, 'ldskcnlscs', 'sdcmn;scms;cl', 'c3b47e85d47b210d8bb86ec2212735ed0.jpg', 1, '2021-04-18 08:50:41', '2021-04-18 08:50:41', 1),
(13, 'lkdsnlsc', 'dslcms;dlcms;dc', '9555517d8053027b01b6f2438315b6d70.jpg', 1, '2021-04-18 08:51:37', '2021-04-18 08:51:37', 1),
(14, 'sldkcnslkcs', 'sldkcnscknlskclsn', '3a039e9e42a492636367f2121316d2880.jpg', 1, '2021-04-18 08:55:33', '2021-04-18 08:55:33', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
