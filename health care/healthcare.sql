-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(230) NOT NULL DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_name`, `doctor`, `service`, `appointment_date`, `appointment_time`, `details`, `created_at`, `status`) VALUES
(4, 'sushil', 'amol', 'general_checkup', '2024-06-21', '21:00:00', 'trail', '2024-06-24 11:29:18', 'booked'),
(5, 'sagar', 'dr_smith', 'dental', '2024-06-28', '23:09:00', 'ttt', '2024-06-24 11:38:19', 'booked'),
(6, 'prakash', 'amol', 'general_checkup', '2024-06-25', '18:00:00', 'general check up', '2024-06-25 11:41:08', 'booked'),
(7, 'ABC', 'amol23', 'orthopedic', '1211-12-23', '17:05:00', 'Health Checkup', '2024-06-29 14:43:44', 'booked'),
(8, 'qwqw', 'amol', 'dental', '0000-00-00', '12:12:00', '12', '2024-07-01 14:45:50', 'booked'),
(9, 'Sujal', 'Dr. Aman', 'dental', '2024-05-06', '17:42:00', '', '2024-07-04 18:11:01', 'booked'),
(10, 'Testing', 'Dr. Aman', 'dental', '2024-04-07', '05:12:00', '', '2024-07-04 18:13:05', 'booked'),
(11, 'fff', 'Dr. Aman', 'general_checkup', '2024-07-05', '21:26:00', 'ujubkbj', '2024-07-05 12:51:33', 'booked'),
(12, 'Akash', 'Dr. Aman', 'dermatology', '2024-08-07', '18:06:00', 'Checkup', '2024-07-06 15:08:25', 'booked'),
(13, 'Ajay', 'Dr. Aman', 'orthopedic', '2024-06-07', '23:12:00', 'Check', '2024-07-06 16:44:35', 'booked'),
(14, 'parth', 'Dr. Aman', 'orthopedic', '2024-06-07', '18:30:00', '.', '2024-07-06 16:45:49', 'booked'),
(15, 'Akash Londe', 'Dr. Sujal', 'orthopedic', '2024-07-07', '10:40:00', 'I want to do Health Checkup', '2024-07-07 03:08:24', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `specialization` varchar(230) NOT NULL,
  `contact` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `fees` varchar(230) NOT NULL,
  `password` varchar(230) NOT NULL DEFAULT '123456'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specialization`, `contact`, `email`, `fees`, `password`) VALUES
(1, 'Dr. Amol', 'General Physician', '1234567890', 'shraddhawarhade941@gmail.com', '230', 'amol@123'),
(2, 'Dr. Aman', 'Child Specialist', '9886267412', 'draman@gmail.com', '200', 'aman@123'),
(3, 'Dr.Swapnil Molke', 'General Physician', '8460212270', 'swapnil@gmail.com', '250', 'swapnil@123'),
(4, 'Dr. Nimbhorkar', 'Physiotherapy', '7383241684', 'nimbhorkar@gmail.com', '500', 'nimbhorkar@123'),
(5, 'Dr. Pachbuddhe', 'Homeopathy', '9054049468', 'pachbuddhe@gmail.com', '450', 'pachbuddhe@900'),
(6, 'Dr. Jaiswal', 'Child Care', '79477435584', 'jaiswal@gmail.com', '550', 'jaiswal@379'),
(7, 'Dr. Mandar', 'Homeopathy', '7383457264', 'mandar@gmail.com', '300', 'mandar@743'),
(8, 'Dr. Anikt Sarda', 'Orthopaedic', '9834724764', 'anikt sarda@gmail.com', '150', 'anikt sarda@478'),
(9, 'Dr. Bhele', 'Child Care', '8976453656', 'bhele@gmail.com', '290', 'bhele@349'),
(10, 'Dr. Aman', 'Child Specialist', '9886267412', 'draman@gmail.com', '200', 'aman@123'),
(11, 'Dr. Sujal', 'Child Specialist', '1234567890', 'sujal@gmail.com', '230', '123456'),
(24, 'Dr. Akhil S', 'Child Care', '8946356475', 'akhil@gmail.com', '498', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `provider_name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `price`, `provider_name`, `contact`, `city`) VALUES
(3, 'Oxygen Services', 650.00, 'Meditrust Medical Equipments', '9054623490', 'Amravati'),
(4, 'Blood Bank', 300.00, 'Balaji Blood Bank', '9854672345', 'Amravati'),
(5, 'Blood Bank', 500.00, 'RIIMS', '9864736547', 'Amravati'),
(6, 'Oxygen Services', 350.00, 'RIIMS', '9845364756', 'Amravati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
