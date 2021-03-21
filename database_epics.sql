-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 01:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epics`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`question`, `answer`, `username`, `date`, `time`) VALUES
('second ques', 'okay answering 2nd ques xD', 'prasuna16', '2021-02-01', '22:21:11'),
('second ques', 'my second answer for 2nd ques ;)', 'prasuna16', '2021-02-01', '22:31:11'),
('adding a new question', 'adding answer to the question asked', 'prasuna16', '2021-03-08', '10:10:45'),
('p do', 'dh', 'prasuna16', '2021-03-10', '17:10:32'),
('hello', 'hell', 'qwertyy', '2021-03-20', '10:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `sno` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`sno`, `title`, `location`) VALUES
(5, 'myPDF', 'documents/myPDF.pdf'),
(10, '93940', 'documents/93940.pdf'),
(11, '64100', 'documents/64100.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `code` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`code`, `group_name`, `owner`) VALUES
('sXY8bs268Q', 'grp1', 'prasuna16'),
('tGHQWfYRBR', 'group2', 'qwertyy'),
('ZiyA5iH2Sr', 'Group1', 'qwertyy');

-- --------------------------------------------------------

--
-- Table structure for table `group_details`
--

CREATE TABLE `group_details` (
  `user` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_details`
--

INSERT INTO `group_details` (`user`, `code`) VALUES
('qwertyy', 'tGHQWfYRBR'),
('prasuna16', 'sXY8bs268Q'),
('qwertyy', 'sXY8bs268Q');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `username` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `group_code` varchar(255) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`username`, `description`, `date`, `time`, `group_code`, `group_name`) VALUES
('prasuna16', 'first post', '0000-00-00', '14:32:28', '', ''),
('suna', 'atleast 2', '2021-01-31', '14:32:28', '', ''),
('evaro', 'idhi chudham', '0000-00-00', '00:00:00', '', ''),
('Anonymous', 'now', '2021-01-31', '16:01:17', '', ''),
('Anonymous', 'crazy', '2021-01-31', '16:05:25', '', ''),
('Anonymous', 'my first post posting using app\nhope it works\npleacheee', '2021-01-31', '16:12:59', '', ''),
('Anonymous', 'adding new post', '2021-01-31', '16:16:31', '', ''),
('Anonymous', 'see now', '2021-01-31', '16:16:57', '', ''),
('prasuna16', 'trying using usernames', '2021-02-01', '21:19:03', '', ''),
('prasuna16', 'this must be the latest post now', '2021-02-01', '21:21:21', '', ''),
('prasuna16', 'sample post', '2021-03-08', '10:09:36', '', ''),
('prasuna16', 'did', '2021-03-10', '17:09:40', '', ''),
('qwertyy', 'public post', '2021-03-21', '10:45:51', NULL, NULL),
('Anonymous', 'anonymous', '2021-03-21', '10:46:10', NULL, NULL),
('qwertyy', 'group post', '2021-03-21', '10:46:29', 'tGHQWfYRBR', 'group2'),
('prasuna16', 'posting to grp1', '2021-03-21', '10:57:08', 'sXY8bs268Q', 'grp1');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `badge` varchar(255) NOT NULL,
  `wishlist` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `points`, `badge`, `wishlist`) VALUES
('prasuna16', 0, 'None', ''),
('abc@gmail.com', 0, 'None', ''),
('xyz@gmail.com', 0, 'None', ''),
('abc', 0, 'None', ''),
('abc', 0, 'None', ''),
('qwe', 0, 'None', ''),
('new@gmail.com', 0, 'None', ''),
('qwerty@gmail.com', 0, 'None', ''),
('qwertyy', 0, 'None', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `postedby` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `question` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`postedby`, `date`, `time`, `question`, `status`) VALUES
('prasuna16', '2021-02-01', '21:51:58', 'my first question', 1),
('prasuna16', '2021-02-01', '21:59:42', 'second ques', 1),
('prasuna16', '2021-02-01', '22:01:24', 'last 😥', 1),
('prasuna16', '2021-02-01', '22:03:04', 'try this', 1),
('prasuna16', '2021-03-08', '10:10:04', 'adding a new question', 1),
('prasuna16', '2021-03-10', '17:10:11', 'p do', 1),
('qwertyy', '2021-03-20', '10:33:39', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IPaddress` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IPaddress`, `FullName`, `Email`, `username`, `Password`, `Status`) VALUES
('192.168.43.1', 'Prasuna', 'prasunap2001@gmail.com', 'prasuna16', 'suna16', 1),
('192.168.43.1', 'Abc', 'abc@gmail.com', 'abc', 'abc123', 1),
('192.168.43.1', 'xyz', 'xyz@gmail.com', 'xyz', 'xyz123', 1),
('192.168.43.1', 'abc', 'abc', 'abc', 'abc', 1),
('192.168.43.1', 'abc', 'abc', 'abc', 'abc', 1),
('192.168.43.1', 'qwe', 'qwe', 'qwe', 'qwe', 1),
('192.168.43.1', 'new', 'new@gmail.com', 'new', 'new123', 1),
('192.168.43.1', 'qwerty', 'qwerty@gmail.com', 'qwertyy', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
