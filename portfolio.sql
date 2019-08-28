-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 09:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_footer`
--

CREATE TABLE `contact_footer` (
  `id` int(11) NOT NULL,
  `c_title` varchar(60) NOT NULL,
  `c_hire` varchar(60) NOT NULL,
  `c_location` varchar(500) NOT NULL,
  `c_phone` int(20) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_web` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_footer`
--

INSERT INTO `contact_footer` (`id`, `c_title`, `c_hire`, `c_location`, `c_phone`, `c_email`, `c_web`) VALUES
(1, 'Contacts', 'Hire Me.', 'Brookyln, New York.', 2147483647, 'alex.teseira@gmail.com', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `titlebelow` varchar(60) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `alldetails` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `titlebelow`, `subtitle`, `alldetails`) VALUES
(1, 'HTML5/CSS3', '', '', 'Html is a mark up language'),
(2, 'Photoshop', '', '', 'Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor'),
(3, 'Front-end', '', '', 'Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor');

-- --------------------------------------------------------

--
-- Table structure for table `image_upload`
--

CREATE TABLE `image_upload` (
  `id` int(11) NOT NULL,
  `image_name` varchar(800) NOT NULL,
  `img_dir` varchar(1000) NOT NULL,
  `img_size` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_upload`
--

INSERT INTO `image_upload` (`id`, `image_name`, `img_dir`, `img_size`) VALUES
(1, '01.jpg', 'uploads/01.jpg', 63349);

-- --------------------------------------------------------

--
-- Table structure for table `introsection`
--

CREATE TABLE `introsection` (
  `id` int(11) NOT NULL,
  `intro` varchar(60) NOT NULL,
  `introbelow` varchar(60) NOT NULL,
  `details` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introsection`
--

INSERT INTO `introsection` (`id`, `intro`, `introbelow`, `details`) VALUES
(1, 'Intro my', 'What I am all about', 'Industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the le into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s ');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `position` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `firstname`, `lastname`, `position`) VALUES
(1, 'Alex', 'costa', 'Web designer and  developer');

-- --------------------------------------------------------

--
-- Table structure for table `skilltable`
--

CREATE TABLE `skilltable` (
  `id` int(11) NOT NULL,
  `skill` varchar(60) NOT NULL,
  `skillvalue` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skilltable`
--

INSERT INTO `skilltable` (`id`, `skill`, `skillvalue`) VALUES
(1, 'php', '80'),
(2, 'html1', '50'),
(3, 'css', '50'),
(12, 'jquer', '88');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `dribble` varchar(100) NOT NULL,
  `behance` varchar(100) NOT NULL,
  `linkdin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `twitter`, `dribble`, `behance`, `linkdin`) VALUES
(1, 'https://example.facebook.com    ', 'https://xample.dribble.com ', 'https://example.dribble.com  ', 'https://example.behance.com   ', 'https://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'karthik', 'karthik', '2019-02-19 16:36:24'),
(2, 'hitesh', 'hitesh', '2019-02-20 11:33:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_footer`
--
ALTER TABLE `contact_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_upload`
--
ALTER TABLE `image_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introsection`
--
ALTER TABLE `introsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skilltable`
--
ALTER TABLE `skilltable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_footer`
--
ALTER TABLE `contact_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `image_upload`
--
ALTER TABLE `image_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `introsection`
--
ALTER TABLE `introsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skilltable`
--
ALTER TABLE `skilltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
