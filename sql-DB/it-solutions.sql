-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 05:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it-solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_desp` text NOT NULL,
  `banner_btn` varchar(50) NOT NULL,
  `banner_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_title`, `banner_desp`, `banner_btn`, `banner_img`) VALUES
(0, 'WEB DEVELOPMENT', 'Web development is the work involved in developing a Web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, electronic businesses.', 'View More', '0.jpg'),
(0, 'Web Design', 'Web Design is the work involved in developing a Web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, electronic businesses.', 'Reed More', '0.jpg'),
(0, 'jahid uddin', 'Web development is the work involved in developing a Web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, electronic businesses.', 'Reed More', '0.jpg'),
(0, 'jahid', 'Web development is the work involved in developing a Web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, electronic businesses.', 'Reed More', '0.jpg'),
(0, 'add bannenr', 'aaaaaaaaaaaaaadddddddddddddddddddddddd', 'Reed More', '0.jpg'),
(0, 'web design', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellat debitis saepe rem error delectus iste magni excepturi quae ratione laudantium aspernatur voluptates itaque minus quia voluptate suscipit incidunt iure, nulla necessitatibus enim, optio rerum dolorum! Explicabo quod dolor similique qui ipsa, eaque accusantium iure labore blanditiis sequi aut ea!', 'Reed More', '0.jpg'),
(0, 'web_designn', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellat debitis saepe rem error delectus iste magni excepturi quae ratione laudantium aspernatur voluptates itaque minus quia voluptate suscipit incidunt iure, nulla necessitatibus enim, optio rerum dolorum! Explicabo quod dolor similique qui ipsa, eaque accusantium iure labore blanditiis sequi aut ea!</p>', 'Reed More', '0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `itinfo`
--

CREATE TABLE `itinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `picher` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinfo`
--

INSERT INTO `itinfo` (`id`, `name`, `email`, `password`, `gender`, `picher`) VALUES
(1, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '1.jpg'),
(3, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '3.jpg'),
(6, 'jahid', 'jahidhasen@gmail.com', 'jahid123', 'male', '6.jpg'),
(8, 'jak', 'jak@gmail.com', 'jak', 'male', '8.jpg'),
(9, 'nayeem', 'nayeem@gmail.com', 'nayeem2222', 'male', '9.jpg'),
(10, 'jak', 'jak@gmail.com', 'jakjak', 'male', '10.jpg'),
(11, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '11.jpg'),
(12, 'nisat', 'nisat@gmail.com', 'nisat', 'male', '12.jpg'),
(13, 'nisat', 'nisat@gmail.com', 'nisat', 'male', '13.jpg'),
(14, 'nishet', 'nishet@gmail.com', 'nishet', 'male', '14.jpg'),
(15, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '15.jpg'),
(16, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '16.jpg'),
(18, 'abcd', 'abcd@gmail.com', 'abcd123123', 'male', '18.jpg'),
(19, 'loop', 'loop@gmail.com', 'loop123', 'male', '19.jpg'),
(20, 'foisal', 'foisal@gmail.com', 'foisal', 'male', '20.jpg'),
(27, 'tarik', 'tarik@gmail.com', 'tarik', 'male', '27.jpg'),
(28, 'jahid', 'jahid@gmail.com', 'jahid', 'male', '28.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itinfo`
--
ALTER TABLE `itinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itinfo`
--
ALTER TABLE `itinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
