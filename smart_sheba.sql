-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 11:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_sheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `id` bigint(255) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `academy_name` varchar(30) NOT NULL,
  `academy_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`id`, `owner_name`, `academy_name`, `academy_details`) VALUES
(1, 'foysal', 'ICC', 'International Cricket Council'),
(2, 'admin', 'BCB', 'Bangladesh Cricket Board'),
(4, 'admin', 'WCB', 'Westindies Cricket Board'),
(5, 'foysal', 'SLCB', 'Srilanka Cricket Board ');

-- --------------------------------------------------------

--
-- Table structure for table `academy_member`
--

CREATE TABLE `academy_member` (
  `id` bigint(255) NOT NULL,
  `academy_id` bigint(255) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_details` text NOT NULL,
  `member_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academy_member`
--

INSERT INTO `academy_member` (`id`, `academy_id`, `member_name`, `member_details`, `member_image`) VALUES
(1, 1, 'Zaheer Abbas ', 'President', 'member_image_28d5069.jpg'),
(2, 1, 'Lotus Kamal ', 'Vice_President', 'member_image_8b9f221.jpg'),
(3, 5, 'Thilanga Sumathipala', 'President', 'member_image_0292118.jpg'),
(4, 5, 'Mohan De Silva', 'Vice_President', 'member_image_5e6d8d6.jpg'),
(5, 2, 'Nazmul Hasan Papon ', 'President', 'member_image_373d71f.jpg'),
(6, 2, 'Mr. Ali', 'vice_president', 'member_image_42aa61c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `cid` bigint(255) NOT NULL,
  `sender_id` bigint(255) NOT NULL,
  `request_id` bigint(255) NOT NULL,
  `request_name` varchar(40) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`cid`, `sender_id`, `request_id`, `request_name`, `status`) VALUES
(2, 1, 12, 'Admiral Aladeen', 0);

-- --------------------------------------------------------

--
-- Table structure for table `information_client`
--

CREATE TABLE `information_client` (
  `id` bigint(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `client_id` int(10) NOT NULL,
  `info_title` varchar(30) NOT NULL,
  `info_description` text NOT NULL,
  `info_category` varchar(30) NOT NULL,
  `info_mobile` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `info_website` varchar(30) NOT NULL,
  `info_location` text NOT NULL,
  `info_image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information_client`
--

INSERT INTO `information_client` (`id`, `date`, `status`, `client_id`, `info_title`, `info_description`, `info_category`, `info_mobile`, `email`, `info_website`, `info_location`, `info_image`) VALUES
(1, '2016-06-21', 1, 11, 'Fair', 'Food Fair', 'Resturent', '01478963254', 'foysal.cse12@yahoo.com', '', 'Tongi,Manikgonj,Dhaka', 'image_814a9c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(255) NOT NULL,
  `my_id` bigint(255) NOT NULL,
  `to_id` bigint(255) NOT NULL,
  `msg` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_client`
--

CREATE TABLE `product_client` (
  `id` bigint(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `client_id` int(10) NOT NULL,
  `pr_title` varchar(20) NOT NULL,
  `pr_category` varchar(20) NOT NULL,
  `pr_details` text NOT NULL,
  `pr_condition` text NOT NULL,
  `pr_discount` float DEFAULT NULL,
  `pr_price` int(8) NOT NULL,
  `pr_commission` int(7) NOT NULL,
  `pr_previous_price` int(7) NOT NULL,
  `location` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pr_image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_client`
--

INSERT INTO `product_client` (`id`, `date`, `status`, `client_id`, `pr_title`, `pr_category`, `pr_details`, `pr_condition`, `pr_discount`, `pr_price`, `pr_commission`, `pr_previous_price`, `location`, `mobile`, `email`, `pr_image`) VALUES
(1, '2016-06-18', 1, 11, 'Smart Phone', 'electronics', 'one plus X', 'Good', 0, 18000, 0, 20000, 'Abdullahpur,,Gazipur,Dhaka', '01478963254', 'foysal.cse12@yahoo.com', 'pr_image_59ae859.jpg'),
(2, '2016-06-18', 0, 11, 'Car', 'car_and_others', 'Tyota Corolla', 'Avarage', 0, 500000, 10, 600000, 'sadar,,Kurigram,Rang', '01478963254', 'foysal.cse12@yahoo.com', 'image_0300481.jpg'),
(3, '2016-06-18', 0, 11, 'Smart Watch', 'electronics', 'Moto 360', 'Good', 0, 90000, 0, 0, 'Lalpahar,,Manikgonj,Dhaka', '01478963254', 'foysal.cse12@yahoo.com', 'pr_image_42819db.jpg'),
(6, '2016-06-18', 1, 21, 'general11', 'other', 'Gree1', 'Good', 0, 5000, 0, 7000, 'jani', '01925857890', 'general@hotmail.com', 'pr_image_afd208b.jpg'),
(8, '2016-06-18', 0, 1, 'Smartphone', 'electronics', 'HTC', 'Good', NULL, 10200, 0, 20000, 'jani', '01318765498', 'foysal.cse@yahoo.com', 'pr_image_7a4a467.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `status` int(2) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `permanent_address` varchar(40) NOT NULL,
  `date_of_birth` varchar(40) NOT NULL,
  `professional_address` varchar(40) NOT NULL,
  `social_link` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `work_history` text,
  `study_background` text,
  `describe_myself` text,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `date`, `username`, `password`, `type`, `fullname`, `father_name`, `mother_name`, `permanent_address`, `date_of_birth`, `professional_address`, `social_link`, `gender`, `blood_group`, `age`, `work_history`, `study_background`, `describe_myself`, `address`, `image`, `email`, `mobile`) VALUES
(1, 1, '2016-05-18', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admiral Aladeen', '', '', 'gfhfgh', '', 'gfhgfhgfh', '', 'male', 'AB-', 46, 'Winskit.Int', 'JU', 'The National Registered Apprenticeship System operates in cooperation with State agencies, businesses, industry, employers, employer associations, labor and management organizations and educational institutions. It is the nationally recognized credentialing system for skilled and technical occupational training programs with almost 500,000 active apprentices in the U.S.', 'Mohakhali DOHS,Dhaka', 'image_fb89705.jpg', 'foysal.cse@yahoo.com', '01318765498'),
(11, 1, '2016-06-15', 'foysal', 'af0ee6d85e06244c052741ec4f52bba6', 'client', 'Abdullah Al Foysal', 'abc', 'xyz', 'Rangpur', '03-02-1993', 'Dhaka', '', 'male', '', 22, 'Winskit.Int', 'AIUB', 'There is nothing special to tell about me. Always try to do something new. At present i am completing my BSC in electrical and electronic engineering (EEE) at AUST. I like music. Beside website designing i like to read books. Favourite writer Humayun Ahmed.', 'Uttara,Dhaka', 'image_f7fa6ac.jpg', 'foysal.cse12@yahoo.com', '01478963254'),
(12, 1, '2016-06-15', 'tanvir', '5db85fe4d7c285f5b49749b7a411daf6', 'client', 'Tanvir Islam', '', '', 'Dhaka', '', '', '', 'male', 'A+', 20, 'Winskit.Int', 'AIUB', 'There is nothing special to tell about me. Always try to do something new. At present i am completing my BSC in Computer Science and Software engineering (CSSE) at AIUB. I like music. Beside website designing. I like to read books. Favourite writer Humayun Ahmed.', 'Banani,Dhaka', 'image_ae0da2b.png', 'tanvir.islam03@gmail.com', '01253214562'),
(13, 1, '2016-06-15', 'shakil', 'fbf832bc8d7e746434993cec0061a682', 'client', 'Zahangir Alam', '', '', '', '', '', '', 'male', 'B+', 24, 'Winskit.Int', 'AUST', 'There is nothing special to tell about me. Always try to do something new. At present i am completing my BSC in electrical and electronic engineering (EEE) at AUST. I like music. Beside website designing i like to read books. Favourite writer Humayun Ahmed.', 'Mohakhali DOHS,Dhaka', 'image_c5b2a38.PNG', 'ohokbd@gmail.com', '01235214523'),
(19, 1, '2016-06-16', 'badhon', 'e19081b10e39141eba29c76b28b16d0c', 'g_client', 'badhon khan', '', '', '', '', '', '', 'male', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'foysak@gmail.com', '01478963254'),
(21, 1, '2016-06-16', 'general1', '5952fbfdf2bd7e80b7fd446206ec06f4', 'g_client', 'general1', '', '', 'xyz.....', '', 'xyz.....', '', 'male', '', 29, 'BRAC', 'JU', 'abcd.....', 'xyz.....', NULL, 'general@hotmail.com', '01925857890'),
(22, 0, '2016-06-16', 'general2', 'f104343c324d56da93eb6b41e5cea641', 'g_client', 'general2', '', '', '', '', '', '', 'male', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'general2@hotmail.com', '01925857890'),
(26, 1, '2016-06-16', 'premium2', '96807e0c6d33e2b356d9afdbf44e3276', 'client', 'premium2', '', '', '', '', '', '', 'male', 'B+', 100, 'vcb', 'vbv', 'bcbcv', 'bbcb', 'image_ecf5631.jpg', 'primium1@hotmail.com', '01925857890'),
(28, 0, '2016-06-16', 'premium4', 'f3f465cc6d0450c1d25dd5845c97211d', 'client', 'premium4', '', '', '', '', '', '', 'male', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'primium2@hotmail.com', '01925857890'),
(29, 0, '2016-06-27', 'zaqwer', 'e10adc3949ba59abbe56e057f20f883e', 'g_client', 'dfgf', 'dfgf', 'dfgf', 'dfgf', 'dfgf', 'dfgf', 'dfgf', 'male', 'dfgf', 0, 'dfgf', NULL, NULL, 'dfgf', NULL, 'foysal.cse2@gmail.com', '01925857890'),
(31, 0, '2016-06-30', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'g_client', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'fdgfdg', 'male', 'fdgfd', 0, 'fdgfdg', NULL, NULL, 'fdgfdg', NULL, 'foysal.cse3@gmail.com', '01478963254');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academy_member`
--
ALTER TABLE `academy_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `information_client`
--
ALTER TABLE `information_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_client`
--
ALTER TABLE `product_client`
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
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `academy_member`
--
ALTER TABLE `academy_member`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `cid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `information_client`
--
ALTER TABLE `information_client`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_client`
--
ALTER TABLE `product_client`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
