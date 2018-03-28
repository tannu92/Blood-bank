-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 08:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_blood`
--

CREATE TABLE `available_blood` (
  `id` int(20) NOT NULL,
  `bldgrp` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `hospital_id` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_blood`
--

INSERT INTO `available_blood` (`id`, `bldgrp`, `quantity`, `hospital_id`, `date`) VALUES
(1, 'AB+', 50, 8, '2018-03-03'),
(2, 'A+', 7, 8, '2018-03-01'),
(3, 'B-', 40, 3, '2018-04-03'),
(4, 'A+', 100, 2, '2018-03-15'),
(5, 'O+', 400, 1, '2018-02-28'),
(6, 'B+', 100, 8, '2018-02-28'),
(7, 'AB+', 100, 2, '2018-03-05'),
(8, 'A-', 56, 2, '2018-02-09'),
(12, 'A-', 50, 1, '2018-02-25'),
(13, 'B+', 60, 4, '2018-03-15'),
(14, 'A-', 70, 3, '2018-02-28'),
(15, 'O+', 100, 3, '2018-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `name`, `email`, `password`, `address`) VALUES
(1, 'Medanta', 'medanta@gmail.com', 'hello', 'gurgaon'),
(2, 'fortis', 'fortis@gmail.com', '123', 'gurgaon'),
(3, 'paras', 'paras@gmail.com', '123', 'gurgaon'),
(4, 'aiims', 'aiims@gmail.com', '123', 'gurgaon'),
(6, 'mars', 'mars@gmail.com', '123', 'gurgaon'),
(7, 'metro', 'metro@gmail.com', '12345', 'rewari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `bloodgrp`, `date_of_birth`) VALUES
(1, 'sumit', 'sumit@spars.in', 'hello', 'male', 'A+', '1993-02-02'),
(2, 'tannu', 'tannu92@outlook.com', '123', 'female', 'B+', '1994-05-24'),
(3, 'MANJU', 'tannu92@outlook.com', '123', 'female', 'AB+', '1994-02-22'),
(5, 'shivani', 'shivani@gmail.com', '12345', 'female', 'O+', '1995-02-22'),
(8, 'yy', 'yy@gmail.com', '12', 'Male', '', '1997-02-22'),
(9, 'pp', 'p@gmail.com', '123', 'Male', '', '1995-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `hospital_id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `No_of_units` int(100) NOT NULL,
  `bldgrp` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`hospital_id`, `user_id`, `No_of_units`, `bldgrp`, `status`, `id`) VALUES
(7, 2, 20, 'A+', '1', 1),
(6, 1, 20, 'B+', '1', 2),
(2, 3, 40, 'O-', '1', 3),
(1, 4, 50, 'B-', '1', 4),
(4, 1, 30, 'AB-', '1', 5),
(5, 4, 50, 'B+', '1', 6),
(2, 2, 50, 'AB+', '1', 55),
(7, 2, 50, 'AB+', '2', 56),
(1, 2, 60, 'A-', '0', 57),
(1, 2, 40, 'AB+', '0', 58);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_blood`
--
ALTER TABLE `available_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_blood`
--
ALTER TABLE `available_blood`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
