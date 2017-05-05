-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2017-05-05 12:30:39
-- 服务器版本： 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `older`
--
CREATE DATABASE IF NOT EXISTS `older` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `older`;

-- --------------------------------------------------------

--
-- 表的结构 `active`
--

CREATE TABLE `active` (
  `id` int(11) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `content` varchar(140) NOT NULL,
  `time` datetime NOT NULL,
  `class` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `comm_notice`
--

CREATE TABLE `comm_notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `doc_advice`
--

CREATE TABLE `doc_advice` (
  `id` int(11) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `advice` varchar(1000) NOT NULL,
  `time` datetime NOT NULL,
  `doc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `doc_info`
--

CREATE TABLE `doc_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `idcard` varchar(4) NOT NULL,
  `age` int(2) NOT NULL,
  `grade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `oldid` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `man_info`
--

CREATE TABLE `man_info` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(2) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `idcard` varchar(4) NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mood_reply`
--

CREATE TABLE `mood_reply` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `reply` varchar(140) NOT NULL,
  `mood_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `old_info`
--

CREATE TABLE `old_info` (
  `id` int(18) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `password` varchar(16) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `comm` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `case` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `old_mood`
--

CREATE TABLE `old_mood` (
  `id` int(11) NOT NULL,
  `old_id` int(18) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mood` varchar(140) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `relative`
--

CREATE TABLE `relative` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `old_id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `see_doc`
--

CREATE TABLE `see_doc` (
  `id` int(11) NOT NULL,
  `oldid` varchar(18) NOT NULL,
  `idcard` varchar(4) NOT NULL,
  `case` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `vedio`
--

CREATE TABLE `vedio` (
  `id` int(11) NOT NULL,
  `idcard` varchar(4) NOT NULL,
  `date` datetime NOT NULL,
  `time` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comm_notice`
--
ALTER TABLE `comm_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_advice`
--
ALTER TABLE `doc_advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_info`
--
ALTER TABLE `doc_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`,`oldid`);

--
-- Indexes for table `man_info`
--
ALTER TABLE `man_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mood_reply`
--
ALTER TABLE `mood_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_info`
--
ALTER TABLE `old_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_mood`
--
ALTER TABLE `old_mood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relative`
--
ALTER TABLE `relative`
  ADD PRIMARY KEY (`id`,`old_id`);

--
-- Indexes for table `see_doc`
--
ALTER TABLE `see_doc`
  ADD PRIMARY KEY (`id`,`oldid`,`idcard`);

--
-- Indexes for table `vedio`
--
ALTER TABLE `vedio`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `active`
--
ALTER TABLE `active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `comm_notice`
--
ALTER TABLE `comm_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `doc_info`
--
ALTER TABLE `doc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `man_info`
--
ALTER TABLE `man_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `mood_reply`
--
ALTER TABLE `mood_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `relative`
--
ALTER TABLE `relative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `vedio`
--
ALTER TABLE `vedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
