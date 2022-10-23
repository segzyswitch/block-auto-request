-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 02:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blocksp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `wallet_id` varchar(255) NOT NULL,
  `login_pwd` varchar(255) NOT NULL,
  `request` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `response` text NOT NULL,
  `status` int(10) NOT NULL,
  `moment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `session_id`, `wallet_id`, `login_pwd`, `request`, `type`, `response`, `status`, `moment`) VALUES
(10, 'f762e2bbedc82164dd9322ff13f97d49', 'EWFNIOERNVDNKJVOKVNLD', 'NVEIRNVKJN', 'Authorization required. Please check your mailbox', '', '', 0, '2022-10-23 12:46:55'),
(11, 'a74ad38486e8dcca72f99687682cedc6', 'EWFNIOERNVDNKJVOKVNLD', 'eocimjsi', 'Authorization required. Please check your mailbox', '', '', 0, '2022-10-23 12:50:07'),
(12, '882d936b9f4f99575897e76ecdf0b5d7', 'EWFNIOERNVDNKJVOKVNLD', 'dsvlmjdrfvmoldfr', 'Authorization required. Please check your mailbox', '', '', 0, '2022-10-23 12:52:05'),
(13, '21be19d1fd00cfcef328c760078ee590', 'EWFNIOERNVDNKJVOKVNLD', 'evomseriom', 'Authorization required. Please check your mailbox', '', '', 0, '2022-10-23 12:53:59'),
(14, 'a771691171d0ae4472559b11666fa449', 'EWFNIOERNVDNKJVOKVNLD', 'dfvknol', 'login', '', '', 0, '2022-10-23 12:55:21'),
(15, '326379a243a1c65703cca0ef05bcb597', 'EWFNIOERNVDNKJVOKVNLD', 'sdrvopmerpo', 'login', '', '', 0, '2022-10-23 12:56:40'),
(16, '2bb8a395c04124f200bd2fcbe674cffa', 'EWFNIOERNVDNKJVOKVNLD', 'ergml', 'login', '', '', 0, '2022-10-23 12:57:10'),
(17, '089a49d26566ba783d49d6f2ccdb779f', 'EWFNIOERNVDNKJVOKVNLD', 'dvmsolk', 'login', '', '', 0, '2022-10-23 12:58:00'),
(18, '8685d113e546c03b4d3dcc1640503ad5', 'EWFNIOERNVDNKJVOKVNLD', 'dswsmp', 'login', '', '', 0, '2022-10-23 12:58:30'),
(19, 'fb4f138892a558378d1173fde7965ad4', 'EWFNIOERNVDNKJVOKVNLD', 'dfvdsl;m', 'Authorization required. Please check your mailbox', '', '', 0, '2022-10-23 12:59:52'),
(20, '4ddfd47b9b07d5cfd6759c2917b63ad0', 'EWFNIOERNVDNKJVOKVNLD', 'rvopmdr', 'Enter code', '', '', 0, '2022-10-23 13:04:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
