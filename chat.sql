-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 01:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 4, 'sjkdhwqkjfhekwhf', '2020-09-02 07:57:18', 1),
(2, 0, 5, 'hello<div><br></div>', '2020-09-02 11:26:05', 1),
(3, 3, 5, 'hello how are you?', '2020-09-02 11:26:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Manas', '$2y$10$xusdMlDKUggzZE5yqsr7jeNrONHvd5W4pnaZdk4Zb/F88O2NkPRwS', 'bhavnam.1907@gmail.com'),
(2, 'rohit', '$2y$10$NSSFCGiHgBIUbI94s2wFYu05nyZ1wh6fbk/WfW5oE.2lZ5BpcSviO', 'bansalpo4371@gmail.com'),
(3, 'kriti', '$2y$10$OaFGtmJxq5Dv3.XxRpXnKedcQfTuiu/bCd/J2aeU/HgNNbN1/Z7tS', 'Hardiksachdeva31@gmail.com'),
(4, 'abcde', '$2y$10$6A5IgnSCU0KP40DCHswxA.LQhdWe58V5aF1Aziz5ncnqKA3kD4khS', 'prachisachdeva171@gmail.com'),
(5, 'abce', '$2y$10$eezRmA1ltJM60MkIRznebeQvi6u35JR0HPaqAOanlro3b5y/F3N8.', 'prachisachdeva171@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2020-09-02 08:07:35', 'no'),
(2, 5, '2020-09-02 08:16:09', 'no'),
(3, 6, '2020-09-02 08:44:44', 'no'),
(4, 6, '2020-09-02 09:07:52', 'no'),
(5, 6, '2020-09-02 09:13:37', 'no'),
(6, 6, '2020-09-02 09:14:52', 'no'),
(7, 6, '2020-09-02 09:16:27', 'no'),
(8, 6, '2020-09-02 09:44:02', 'no'),
(9, 8, '2020-09-02 10:12:15', 'no'),
(10, 3, '2020-09-02 10:34:46', 'no'),
(11, 4, '2020-09-02 11:16:03', 'no'),
(12, 5, '2020-09-02 11:26:32', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
