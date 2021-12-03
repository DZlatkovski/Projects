-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 04:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(256) NOT NULL,
  `academy` varchar(128) NOT NULL,
  `project` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `image`, `academy`, `project`, `description`, `start_date`, `end_date`) VALUES
(1, 'assets/images/marketing6.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(2, 'assets/images/programming1.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(3, 'assets/images/design3.jpg', 'design', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(4, 'assets/images/programming2.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(5, 'assets/images/marketing5.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(6, 'assets/images/programming3.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(7, 'assets/images/programming4.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(8, 'assets/images/programming5.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(9, 'assets/images/marketing6.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(10, 'assets/images/design1.jpg', 'design', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(11, 'assets/images/programming6.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(12, 'assets/images/marketing3.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(13, 'assets/images/programming7.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(14, 'assets/images/design4.jpg', 'design', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(15, 'assets/images/marketing2.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(16, 'assets/images/programming8.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(17, 'assets/images/programming9.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(18, 'assets/images/marketing1.jpg', 'marketing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(19, 'assets/images/design2.jpg', 'design', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01'),
(20, 'assets/images/programming10.jpg', 'programing', '<b>Име на проектот стои овде<br> во две линии</b>', 'Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.', '2020-04-01', '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_surname` varchar(64) DEFAULT NULL,
  `company` varchar(64) DEFAULT NULL,
  `mail` varchar(64) DEFAULT NULL,
  `phone` int(10) UNSIGNED DEFAULT NULL,
  `student_type` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name_surname`, `company`, `mail`, `phone`, `student_type`) VALUES
(51, 'Dragan Zlatkovski', 'KOMPANIJA', 'rdmc.superdream@gmail.com', 79313929, 'programing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
