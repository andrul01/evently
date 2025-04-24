-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 06:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evently`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `oid` int(30) NOT NULL,
  `vid` int(30) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `odate` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`oid`, `vid`, `vname`, `odate`, `status`) VALUES
(1, 1, 'andrul', '2025-04-16 00:00:00', ''),
(2, 4, 'andrul', '2025-04-29 00:00:00', ''),
(3, 6, 'andrul', '2025-04-21 00:00:00', 'pending'),
(4, 2, 'andrul', '2025-04-16 00:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`cid`, `name`, `email`, `number`, `subject`, `message`, `dt`) VALUES
(1, 'Dipendra Chaturvedi', 'dipendra2k25@gmail.com', 2147483647, 'fdfgdgfsg', 'sdgdsgsdg', '2025-04-17 22:37:20'),
(7, 'Dipendra Chaturvedi', 'dipendra2k25@gmail.com', 2147483647, 'fdfgdgfsg', 'sdgdsgsdg', '2025-04-17 22:55:25'),
(8, 'Andrul', 'andrul@gmail.com', 2147483647, 'hello', 'i want to collabe ', '2025-04-18 09:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(30) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `gimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gname`, `gimage`) VALUES
(5, 'Birthday Party', 'g1.jpg'),
(6, 'Wedding Event', 'g2.jpg'),
(7, 'Cultural Event', 'g3.jpg'),
(8, 'Party Celebration', 'g4.jpg'),
(9, 'Entertainment Event', 'g5.jpg'),
(10, 'Bachelors party', 'g6.jpg'),
(11, 'Enogration Ceremoney', 'g7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `cpassword`, `dt`) VALUES
(3, 'vedant', 'vedant@gmail.com', '$2y$10$0LyEToqFDfWXDzjlDhkIAuvv4uxbvKCm6vVWxz2gS1UGgAKXy7nJq', '$2y$10$0LyEToqFDfWXDzjlDhkIAuvv4uxbvKCm6vVWxz2gS1UGgAKXy7nJq', '2025-04-16 20:18:57'),
(7, 'andrul', 'andrumorallies@gmail.com', '$2y$10$RYBOADgDk3.8ExtiAbPuAev0h2xZ3PtmT6H9nfkPYKwX1l8XsE08a', '$2y$10$RYBOADgDk3.8ExtiAbPuAev0h2xZ3PtmT6H9nfkPYKwX1l8XsE08a', '2025-04-17 16:05:02'),
(13, 'sanket ', 'sanket@gmail.com', '$2y$10$0ZTG6wgYxxTRPu5yPM.eOO8UbL8XPX.PZeQZfJOo2nBPAv3eP5A2K', '$2y$10$0ZTG6wgYxxTRPu5yPM.eOO8UbL8XPX.PZeQZfJOo2nBPAv3eP5A2K', '2025-04-17 23:51:20'),
(14, 'tejash', 'tejash@gmail.com', '$2y$10$oOCY4iCI3iqzkf9H6a6rhe3FtYS6tzrGu7L/G7D9jCPx2kBQJycYO', '$2y$10$oOCY4iCI3iqzkf9H6a6rhe3FtYS6tzrGu7L/G7D9jCPx2kBQJycYO', '2025-04-23 10:09:55'),
(15, 'andrul', 'andrul@gmail.com', '$2y$10$Sc1.fFYaiLpyRYz.CHxqleD1dNtRq8Q12dKsTV2su09DQU85OAhrC', '$2y$10$Sc1.fFYaiLpyRYz.CHxqleD1dNtRq8Q12dKsTV2su09DQU85OAhrC', '2025-04-23 15:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `vid` int(10) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `vimage` varchar(100) NOT NULL,
  `vdesc` varchar(100) NOT NULL,
  `vprice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`vid`, `vname`, `vimage`, `vdesc`, `vprice`) VALUES
(1, 'Banquet Halls', 'bouquet.jpg', 'Spacious, elegant indoor venues ideal for weddings, receptions, and formal celebrations with premium', 5000000),
(2, 'Garden Venues', 'garden.jpg', 'Beautiful open-air garden spaces perfect for outdoor events, day functions, and nature-themed celebr', 400000),
(3, 'Beachside Venues', 'beachside.jpg', 'Enjoy your events with a view of the waves — great for sunset ceremonies and beach parties.', 4600000),
(4, 'Corporate Event Spaces', 'corporate.jpg', 'Fully equipped venues for meetings, seminars, and office parties with modern infrastructure and AV s', 600000),
(5, 'Rooftop Venues', 'rooftop.jpg', 'Chic city-view rooftops designed for evening parties, engagements, or small gatherings with a vibran', 750000),
(6, 'Luxury Resorts', 'luxary.jpg', 'Premium destinations with stay and celebration facilities — perfect for destination weddings or week', 20000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `oid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
