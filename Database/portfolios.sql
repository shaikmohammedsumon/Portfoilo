-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2024 at 05:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolios`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_area`
--

CREATE TABLE `brand_area` (
  `id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brand_area`
--

INSERT INTO `brand_area` (`id`, `image`, `status`) VALUES
(4, '53-1725296992-02-Sep-2024.jpg', 'active'),
(5, '53-1725296999-02-Sep-2024.jpg', 'active'),
(6, '53-1725297011-02-Sep-2024.jpeg', 'active'),
(7, '53-1725297020-02-Sep-2024.jpg', 'active'),
(8, '53-1725297355-02-Sep-2024.jpg', 'active'),
(9, '53-1725297372-02-Sep-2024.jpg', 'active'),
(10, '53-1725297380-02-Sep-2024.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `ratio` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `ratio`, `status`) VALUES
(13, 'Aut expedita dolorem', '2007', '65', 'active'),
(14, 'Aut expedita dolorem', '2007', '65', 'active'),
(16, 'Fugit ipsa commodo', '2006', '99', 'active'),
(17, 'Ad eveniet ut quae ', '2003', '97', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `body`) VALUES
(12, 'sumon', 'mdsumonshik945@gmail.com', 'hi i am\r\n'),
(13, 'sumon', 'mdsumonshik945@gmail.com', 'ioiou\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `fact_area`
--

CREATE TABLE `fact_area` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fact_area`
--

INSERT INTO `fact_area` (`id`, `title`, `number`, `icon`, `status`) VALUES
(1, 'amni', '888', 'fa fa-battery-half', 'active'),
(2, 'Sint molestias tempo', '943', 'fa fa-battery-full', 'active'),
(5, 'Magna elit suscipit', '257', 'fa fa-birthday-cake', 'active'),
(6, 'Aut qui itaque labor', '246', 'fa fa-clone', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instragram` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `telegram` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `facebook`, `instragram`, `twitter`, `telegram`, `status`) VALUES
(4, 53, 'https://www.facebook.com/mohammedsumonsheik', 'https://www.instagram.com/mohammedsumonsheik/', 'https://www.instagram.com/mohammedsumonsheik/', 'https://www.facebook.com/mohammedsumonsheik', 'active'),
(5, 53, 'https://www.facebook.com/mohammedsumonsheik', 'https://www.instagram.com/mohammedsumonsheik/', 'https://www.instagram.com/mohammedsumonsheik/', 'https://www.facebook.com/mohammedsumonsheik', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `link_tnd`
--

CREATE TABLE `link_tnd` (
  `id` int NOT NULL,
  `wellcome` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `link_tnd`
--

INSERT INTO `link_tnd` (`id`, `wellcome`, `name`, `description`, `status`) VALUES
(8, 'WellCome!!', 'My name', 'Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi ', 'active'),
(9, 'Hello!', 'I am', 'Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi ', 'deactive'),
(10, 'biferaq@mailinator.com', 'fisymakywa@mailinator.com', 'sikavida@mailinator.com', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `subtitle`, `description`, `image`, `status`) VALUES
(29, 'Porro voluptatem sed', 'Tempora reprehenderi', 'Do qui voluptatem do', '50-Porro voluptatem sed-29-08-2024.jpeg', 'active'),
(30, 'Consectetur dolores ', 'Excepturi proident ', 'Quia ad sint anim ut', '53-Consectetur dolores -02 Sep 2024.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'profile.png',
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `image`, `password`) VALUES
(92, 'gajejir', 'mdsumonshik945@gmail.com', 'profile.png', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(93, 'muburesi', 'dusagepan@mailinator.com', 'profile.png', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(94, 'defys', 'mdsumonshik@gmail.com', '94-defys-09-09-24.jpg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d'),
(95, 'S M SUMON', 'mdsumonshik1@gmail.com', '95-sumon-12-09-24.png', 'ac748cb38ff28d1ea98458b16695739d7e90f22d');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(21, 'df', 'Omnis qui est minim', 'fa fa-arrow-circle-left', 'active'),
(22, 'Quod facilis assumen', 'Non voluptates atque', 'fa fa-floppy-o', 'active'),
(23, 'Anim voluptatem illu', 'Ex tempora blanditii Ex tempora blanditii Ex tempora blanditii', 'fa fa-battery-full', 'active'),
(24, 'Android', 'Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hi Nostrum qui dicta hiNostrum qui dicta hi Nostrum qui dicta hi ', 'fa fa-battery-3', 'active'),
(25, 'Quasi voluptates eni', 'Totam reiciendis obc', 'fa fa-file-excel-o', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `descprition` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `title`, `descprition`, `image`, `status`) VALUES
(13, 'Forrest Ware', 'Aliquid similique ip', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '53-Aliquid similique ip-02 Sep 2024.jpeg', 'active'),
(14, 'Cherokee Hartman', 'Et qui omnis accusan', 'Velit consectetur et', '53-Et qui omnis accusan-02 Sep 2024.jpeg', 'active'),
(15, 'Carl Marks', 'Et cillum numquam re', 'Occaecat quos ut cul', '53-Et cillum numquam re-02 Sep 2024.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_area`
--
ALTER TABLE `brand_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact_area`
--
ALTER TABLE `fact_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_tnd`
--
ALTER TABLE `link_tnd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_area`
--
ALTER TABLE `brand_area`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fact_area`
--
ALTER TABLE `fact_area`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `link_tnd`
--
ALTER TABLE `link_tnd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
