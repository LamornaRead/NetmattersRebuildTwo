-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 09:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsletter`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `fullname` text NOT NULL,
  `company` text NOT NULL,
  `email` text NOT NULL,
  `telephone` text NOT NULL,
  `comment` text NOT NULL,
  `marketing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`fullname`, `company`, `email`, `telephone`, `comment`, `marketing`) VALUES
('lamorna', 'NA', 'lamornaread@gmail.com', '07934858981', 'hello', 'accepted'),
('darren', 'eta', 'darren@gmail.com', '076666666666', 'done', 'declined'),
('lamrona', 'NA', 'random@hotmail.com', '03424234234234', 'hello', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `main_class` text NOT NULL,
  `button_color` text NOT NULL,
  `link_title` text NOT NULL,
  `main_image` text NOT NULL,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `avatar` text NOT NULL,
  `author` text NOT NULL,
  `date_added` date NOT NULL,
  `date_string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`main_class`, `button_color`, `link_title`, `main_image`, `title`, `info`, `avatar`, `author`, `date_added`, `date_string`) VALUES
('notables', 'notables-btn', 'News', 'img/news/march-notables-2023-A3oK-2.png', 'March Notables 2023', 'Each month, various departments recognise those employees and helped...', 'img/avatars/netmatters-ltd-VXAv.webp', 'Netmatters', '2023-04-06', '6th April 2023'),
('insights', 'insights-btn', 'Insights', 'img/news/5-signs-your-E7Sj-2.png', '5 Signs Your Buisness needs an Intranet Solut...', 'Being able to communicate and collaborate is essential to any organisation\'s success in...', 'img/avatars/alex-hall-UIuf.webp', 'Alex Hall', '2023-03-31', '31st March 2023'),
('digital', 'digital-btn', 'News', 'img/news/-GezN-2.png', 'Jim Becomes the Netmatters Digital Director', 'Netmatters continues to grow year on year: this means the management team is growing in line with ou...', 'img/avatars/tessa-woodrow-7iGC.webp', 'Tessa Dempsey', '2023-03-29', '29th March 2023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
