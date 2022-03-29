-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem-biu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(100) NOT NULL,
  `ad_name` varchar(20) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'admin', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `short` varchar(100) NOT NULL,
  `descrip` varchar(500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `category`, `short`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(18, 'Kerjasama BEM BIU dengan ACT untuk Penggalangan Dana', '', 'Dalam kegiatan kemanusiaan akibat bencana alam Bem Biu melakukan kerjasama penggalangan dana untuk k', '<p><br></p>', '870683572277847727penggalan-dana.jpg', '', 'Wed 23 Mar 2022', '0'),
(19, 'Liga Futsal Mahasiswa di LIFUMA', '', 'UKM futsal bina insani mengikuti liga LIIFUMA 2022 yang diadakan di STIE ', '<p><br></p><div><span data-metadata=\"<!--(figmeta)eyJmaWxlS2V5IjoiNFZhOU83QVRvQVh2U3RTT1BXME1kTiIsInBhc3RlSUQiOjI4NDI2MzM0NSwiZGF0YVR5cGUiOiJzY2VuZSJ9Cg==(/figmeta)-->\"></span><span data-buffer=\"<!--(figma)ZmlnLWtpd2kPAAAAgikAALV8e5hkSVVnRGRmPbq6e57MDAMiIiIi6ryAARG5mXmz8nbl4869N6u6x5EkK/NW1aXzRd7M6q4RERAVcXg/5SXMDojIIiIKsoiIqIiIiIiIiIjo7rKs6+66u6676+7vnIj7yKoev/1HPqbixIkTJ06cOHHixImb/QHZDOO4tx8GR9NQiKvOtZ1W1w8sLxD4X6tdtbuVutXatH1UZce3vVxdMbXdqgIu+M5my2oAKvrBhYYNoMRA17eJ1wrTMueuv+W4Xc9utC3qudpqB0', '18196962381910640843futsal.jpg', '', 'Wed 23 Mar 2022', '0'),
(21, 'Program Kerja Divisi Kominfo x Minat Bakat', '', 'Program kerja yang akan dilaksanakan oleh divisi Kominfo dan Minat Bakat di bulan april 2022 nanti.', '<p>Program kerja yang akan dilaksanakan oleh divisi Kominfo dan Minat Bakat di bulan april 2022 nanti</p>', '151768481pameran.jpg', '', 'Tue 22 Mar 2022', '0'),
(22, 'Liga Futsal Mahasiswa di LIFUMA 2022', '', 'UKM Futsal Bina Insani mengikuti liga LIFUMA 2022 ', '<p>UKM Futsal Bina Insani mengikuti liga LIFUMA 2022 yang diadakan di STIE<br></p>', '19524815858138859321910640843futsal.jpg', '', 'Tue 22 Mar 2022', '0'),
(24, 'Kerjasama BEM BiU dengan ACT untuk Pelanggalangan Dana', '', 'Dalam kegiatan kemanusiaan akibat bencana alam Bem Biu melakukan kerjasama penggalangan dana', '<p>Dalam rangka kegiatan kemanusiaan akibat bencana alam BiU melaksanakan kerjasama penggalangan dana untuk korban bencana alam</p><div><span data-metadata=\"<!--(figmeta)eyJmaWxlS2V5IjoiNFZhOU83QVRvQVh2U3RTT1BXME1kTiIsInBhc3RlSUQiOjE0MjI4NjMxNDcsImRhdGFUeXBlIjoic2NlbmUifQo=(/figmeta)-->\"></span><span data-buffer=\"<!--(figma)ZmlnLWtpd2kPAAAAgikAALV8e5hkSVVnRGRmPbq6e57MDAMiIiIi6ryAARG5mXmz8nbl4869N6u6x5EkK/NW1aXzRd7M6q4RERAVcXg/5SXMDojIIiIKsoiIqIiIiIiIiIjo7rKs6+66u6676+7vnIj7yKoev/1HPqbixIkTJ06cOH', '277847727penggalan-dana.jpg', '', 'Tue 22 Mar 2022', '0'),
(25, 'Sertijab  Angkatan 2022/2023', '', 'Badan Eksekutif Mahasiswa Bina Insani University akan melaksanakan sertijab setelah melakukan Pemira', '<p><span data-metadata=\"<!--(figmeta)eyJmaWxlS2V5IjoiNFZhOU83QVRvQVh2U3RTT1BXME1kTiIsInBhc3RlSUQiOjE4MjQzMDM5MDMsImRhdGFUeXBlIjoic2NlbmUifQo=(/figmeta)-->\"></span><span data-buffer=\"<!--(figma)ZmlnLWtpd2kPAAAAgikAALV8e5hkSVVnRGRmPbq6e57MDAMiIiIi6ryAARG5mXmz8nbl4869N6u6x5EkK/NW1aXzRd7M6q4RERAVcXg/5SXMDojIIiIKsoiIqIiIiIiIiIjo7rKs6+66u6676+7vnIj7yKoev/1HPqbixIkTJ06cOHHixImb/QHZDOO4tx8GR9NQiKvOtZ1W1w8sLxD4X6tdtbuVutXatH1UZce3vVxdMbXdqgIu+M5my2oAKvrBhYYNoMRA17eJ1wrTMueuv+W4Xc9utC3qudpqB07tQtevtzuNarf', '1747618980876964702paslon-1-1.jpg', '', 'Tue 22 Mar 2022', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(12, 'Minbak'),
(11, 'Kominfo'),
(10, 'Keilmuan'),
(13, 'Sosmas'),
(14, 'SDM'),
(15, 'PKM');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descc` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `descc`, `status`) VALUES
(2, 'What is included in your service?', 'qual blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0'),
(3, 'What warranties do i have for my shipments?', 'Equal blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0'),
(4, ' What are the usual methods of freight payment in transida?', 'Equal blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0'),
(5, ' Can i get payment terms?', 'Equal blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `type`, `img`, `status`) VALUES
(35, 'asdf', 'VEGETABLE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(17, '7544.jpg', '2020-11-26 12:20:22', '1'),
(18, '8396.jpg', '2020-11-26 12:20:22', '1'),
(19, '3942239.jpg', '2020-11-26 12:20:22', '1'),
(20, '19834.jpg', '2020-11-26 16:21:04', '1'),
(21, 'closeup-calculator-stethoscope-healthcare-expenses-concept.jpg', '2020-11-26 16:31:14', '1'),
(24, 'Untitled.png', '2020-11-27 20:58:31', '1'),
(25, 'Charge Posting.png', '2020-11-28 13:29:43', '1'),
(26, 'Payment Posting.png', '2020-11-28 13:29:43', '1'),
(27, 'AR follow up.png', '2020-11-28 14:02:30', '1'),
(28, 'portrait-woman-customer-service-worker.jpg', '2020-12-03 16:12:51', '1'),
(29, '19197572.jpg', '2020-12-03 16:13:19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `short` varchar(100) DEFAULT NULL,
  `descrip` varchar(500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `category` varchar(55) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short`, `descrip`, `img`, `url`, `date`, `category`, `status`) VALUES
(41, 'Rumah Mengajar', 'rumah mengajar biu, dimana BEM turun ke masyarakat untuk mengajar anak anak SD - SMP', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus consectetur iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce hendrerit nulla nisi, id condimentum dolor rutrum eu. Duis interdum leo nec erat sagittis, vitae porta arcu ornare. Fusce augue nunc, suscipit eget rhoncus et, aliquet in leo. Morbi laoreet malesuada en', '839562272bansos.jpeg', NULL, 'Tue 22 Mar 2022', 'Keilmuan', '0'),
(42, 'test aja ini cuma test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus consectetur iaculis. Vestib', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus consectetur iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce hendrerit nulla nisi, id condimentum dolor rutrum eu. Duis interdum leo nec erat sagittis, vitae porta arcu ornare. Fusce augue nunc, suscipit eget rhoncus et, aliquet in leo. Morbi laoreet malesuada en', '685573949razia.jpeg', NULL, 'Tue 22 Mar 2022', 'Kominfo', '0'),
(43, 'hanya test aja maksimal 60 karakter yak gaes buat judulnya..', 'halo deskripsi ini di program maupun berita maksimal 100 karakter yak gaes gak bisa lebih overflow', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus consectetur iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce hendrerit nulla nisi, id condimentum dolor rutrum eu. Duis interdum leo nec erat sagittis, vitae porta arcu ornare. Fusce augue nunc, suscipit eget rhoncus et, aliquet in leo. Morbi laoreet malesuada en', '844040101studi_banding.jpeg', NULL, 'Tue 22 Mar 2022', 'Sosmas', '0');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `header_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_desc` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `email`, `phone`, `phone2`, `footer_logo`, `footer_desc`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `address`, `city`, `state`, `country`, `pin`, `map`, `site_name`) VALUES
(1, '1077930642754453333Logo 1-min.png', 'BEM@gmail.com', '08756756756', '+91 9899 007 899', '1328530813Logo 1.PNG', '', '#', '#', '#', '#', '#', 'BEKASI', '', '', '', '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.7963837922716!2d-75.52637848464192!3d39.15661257953152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c764aa67a3b055%3A0x3ae0e625add8fccf!2s8%20The%20Green%20STE%20A%2C%20Dover%2C%20DE%2019901%2C%20USA!5e0!3m2!1sen!2sin!4v1611844096495!5m2!1sen!2sin\" width=\"600\" height=\"490\" style=\"border:0; width: 100%\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'BEM BIU');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `designation`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(1, 'James Smith', 'PR Manager', '', '1190809899user-4-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0'),
(2, 'Jill Peterson', 'Tour Consultant', '', '495717868user-3-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0'),
(3, 'Peter McMillan', 'Travel Agent', '', '1112007742user-2-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
