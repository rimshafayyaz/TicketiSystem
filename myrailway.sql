-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 05:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myrailway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminUsername` varchar(30) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `AdminEmail` varchar(40) NOT NULL,
  `Passwords` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AdminUsername`, `AdminName`, `AdminEmail`, `Passwords`) VALUES
('Admin', 'Kanwal', 'kanwal@gmail.com', 'Admin-73'),
('Admin2', 'Misha', 'misha@gmail.com', 'Admin-70'),
('Admin3', 'Hassan', 'ranashb@gmail.com', 'Admin-76');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `NameOfPassenger` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(11) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `SeatClass` varchar(10) NOT NULL,
  `BookingDate` date NOT NULL,
  `TotalBookedSeats` int(11) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `TravelingDate` date NOT NULL,
  `TotalFare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookingID`, `Username`, `NameOfPassenger`, `Gender`, `Age`, `TrainName`, `SeatClass`, `BookingDate`, `TotalBookedSeats`, `FromStation`, `ToStation`, `TravelingDate`, `TotalFare`) VALUES
(2, 'Rimsha25', 'Rimsha', 'female', 20, '10UP', 'Business', '2021-01-09', 4, 'Gujranwala', 'Islamabad', '2021-01-16', 16000),
(3, '', 'Rimsha', 'female', 20, '10UP', 'Standard', '2021-01-09', 2, 'Gujranwala', 'Islamabad', '2021-01-23', 8000),
(4, 'noorfayyaz11', 'Mahnoor Fayyaz', 'female', 20, '10UP', 'Business', '2021-01-10', 3, 'Gujranwala', 'Islamabad', '2021-01-19', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `name`, `email`, `phoneno`, `address`, `gender`, `age`) VALUES
('', '', '', '', '', '', 0),
('Ayesha12', 'Ayesha Kanwal', 'ayeshakanwal@gmail.com', '03004979242', 'Kanwal Villas,Layyah', 'Female', 20),
('Hassan07', 'Hassan Latif', 'hassanlatif@gmail.com', '03224600404', 'UET,Lahore', 'Male', 19),
('Mahnoor17', 'Mahnoor Fayyaz', 'mahnoor@gmail.com', '03248406639', 'Street No.58, House No.372 Ramgarh Mughalpura Laho', 'Female', 22),
('Momee07', 'Momme ', 'momee07@gmail.com', '03004979242', 'Lahore', 'Male', 21),
('Mudassar23', 'Mudassar Ali', 'mudassarali@gmail.com', '03054707053', 'ST : 27,H : 58 Lahore', 'Male', 19),
('noorfayyaz11', 'Mahnoor Fayyaz', 'noorfayyaz11@gmail.com', '03054707053', '21-A Shalimar link road, Lahore', 'Female', 24),
('Rimsha25', 'Rimsha Fayyaz', 'mishafayyaz@gmail.com', '03248406639', 'Street No.58, House No.372 Ramgarh Mughalpura Laho', 'Female', 20);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `BusinessClassFare` int(11) NOT NULL,
  `EconomicalClassFare` int(11) NOT NULL,
  `StandardClassFare` int(11) NOT NULL,
  `ArrivalTime` time NOT NULL,
  `DepartureTime` time NOT NULL,
  `TotalDistance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `TrainName`, `FromStation`, `ToStation`, `BusinessClassFare`, `EconomicalClassFare`, `StandardClassFare`, `ArrivalTime`, `DepartureTime`, `TotalDistance`) VALUES
(1, 'Karachi Express', 'Bahawalpur', 'Multan Cantonment', 950, 900, 75, '20:08:00', '22:19:00', 106),
(2, 'Karachi Express', 'Hyderabad Junction', 'Bahawalpur', 2040, 1860, 1520, '10:44:00', '19:53:00', 664),
(3, 'Karachi Express', 'Karachi Cantonment', 'Hyderabad Junction', 950, 900, 750, '08:00:00', '10:39:00', 169),
(4, 'Karachi Express', 'Sahiwal', 'Lahore Junction', 950, 900, 75, '02:15:00', '04:26:00', 202),
(5, 'Karachi Express', 'Multan Cantonment', 'Sahiwal', 950, 900, 75, '22:26:00', '01:59:00', 192),
(6, 'Multan Express', 'Okara', 'Raiwind Junction', 950, 900, 75, '12:33:00', '14:30:00', 105),
(7, 'Multan Express', 'Raiwind Junction', 'Lahore Junction', 530, 420, 280, '14:45:00', '15:32:00', 46),
(8, 'Multan Express', 'Khanewal Junction', 'Okara', 950, 900, 75, '09:30:00', '12:18:00', 207),
(9, 'Multan Express', 'Multan Cantonment', 'Khanewal Junction', 530, 420, 280, '08:00:00', '09:15:00', 65),
(10, 'Multan Express', 'Khanewal Junction', 'Okara', 950, 900, 759, '09:30:00', '12:18:00', 207),
(11, 'Akbar Express', 'Quetta', 'Jacobabad Junction', 950, 900, 750, '08:00:00', '13:15:00', 192),
(12, 'Akbar Express', 'Jacobabad Junction', 'Rohri Junction', 530, 420, 280, '13:15:00', '14:49:00', 79),
(13, 'Akbar Express', 'Khanpur Junction', 'Shorkot Cantonment Junction', 1050, 900, 750, '17:44:00', '21:47:00', 338),
(14, 'Akbar Express', 'Shorkot Cantonment Junction', 'Lahore Junction', 1030, 870, 710, '21:47:00', '00:42:00', 232),
(15, 'Akbar Express', 'Rohri Junction', 'Khanpur Junction', 1030, 870, 710, '14:49:00', '17:44:00', 248),
(16, 'Awam Express', 'Bahawalpur', 'Sahiwal', 1030, 870, 710, '21:17:00', '01:17:00', 239),
(17, 'Awam Express', 'Gujranwala', 'Rawalpindi', 1030, 870, 710, '07:45:00', '11:31:00', 212),
(18, 'Awam Express', 'Karachi Cantonment', 'Nawabshah', 1030, 870, 710, '08:00:00', '12:14:00', 271),
(19, 'Awam Express', 'Mirpur Mathelo', 'Bahawalpur', 1030, 870, 710, '16:50:00', '21:02:00', 290),
(20, 'Awam Express', 'Nawabshah', 'Ranipur Riyasat', 950, 900, 750, '12:14:00', '14:24:00', 135),
(21, 'Awam Express', 'Nawabshah', 'Ranipur Riyasat', 950, 900, 750, '12:14:00', '14:24:00', 135),
(22, 'Awam Express', 'Ranipur Riyasat', 'Mirpur Mathelo', 950, 900, 750, '14:24:00', '16:50:00', 154),
(23, 'Awam Express', 'Rawalpindi', 'Peshawar Cantonment', 950, 900, 750, '11:45:00', '14:26:00', 187),
(24, 'Awam Express', 'Sahiwal', 'Gujranwala', 1030, 870, 710, '01:32:00', '07:30:00', 261),
(25, 'Badar Express', 'Farooq Abad', 'Safdarabad', 1030, 870, 710, '09:37:00', '10:17:00', 26),
(26, 'Badar Express', 'Lahore Junction', 'Farooq Abad', 530, 420, 280, '08:00:00', '09:22:00', 60),
(27, 'Badar Express', 'Safdarabad', 'Chak Jhumra Junction', 530, 420, 280, '10:17:00', '11:28:00', 55),
(28, 'Badar Express', 'Chak Jhumra Junction', 'Faisalabad', 340, 270, 130, '11:33:00', '12:00:00', 21),
(29, 'Islamabad Express', 'Lahore Junction', 'Chaklala', 1050, 950, 830, '08:00:00', '12:31:00', 374),
(30, 'Islamabad Express', 'Rawalpindi', 'Islamabad', 340, 270, 130, '13:15:00', '13:55:00', 21),
(31, 'Islamabad Express', 'Chaklala', 'Rawalpindi', 340, 270, 130, '12:31:00', '12:57:00', 12),
(32, 'Pakistan Express', 'Karachi Cantonment', 'Hyderabad Junction', 950, 900, 75, '08:00:00', '10:40:00', 169),
(33, 'Pakistan Express', 'Shorkot Cantonment Junction', 'Faisalabad', 950, 900, 75, '00:15:00', '02:21:00', 134),
(34, 'Pakistan Express', 'Hyderabad Junction', 'Rohri Junction', 1050, 950, 830, '10:55:00', '15:54:00', 304),
(35, 'Pakistan Express', 'Rohri Junction', 'Bahawalpur', 1050, 950, 830, '16:05:00', '20:35:00', 362),
(36, 'Pakistan Express', 'Bahawalpur', 'Shorkot Cantonment Junction', 950, 900, 75, '20:50:00', '23:59:00', 199),
(37, 'Pakistan Express', 'Faisalabad', 'Gujrat', 1050, 950, 830, '02:36:00', '06:24:00', 205),
(38, 'Allama Iqbal Express', 'Bahawalpur', 'Okara', 1050, 950, 830, '20:50:00', '00:36:00', 321),
(39, 'Allama Iqbal Express', 'Okara', 'Lahore Junction', 920, 810, 700, '00:50:00', '03:32:00', 134),
(40, 'Allama Iqbal Express', 'Kotri Junction', 'Hyderabad Junction', 590, 360, 250, '10:45:00', '11:10:00', 9),
(41, 'Allama Iqbal Express', 'Hyderabad Junction', 'Bahawalpur', 1245, 1030, 850, '11:25:00', '20:34:00', 664),
(42, 'Allama Iqbal Express', 'Karachi Cantonment', 'Kotri Junction', 950, 900, 750, '08:00:00', '10:32:00', 164),
(43, 'HassanExpress', 'Lahore Junction', 'Islamabad', 2000, 1500, 1000, '21:30:00', '01:45:00', 260),
(44, 'LocalExpress', 'Islamabad', 'Lahore Junction', 1800, 1000, 1400, '21:30:00', '13:41:00', 290),
(45, 'Local Express', 'Hyderabad Junction', 'Nawabshah', 1000, 800, 600, '15:39:00', '17:39:00', 300),
(46, 'Akbar Express', 'Lahore Junction', 'Islamabad', 1500, 1200, 1000, '20:45:00', '01:50:00', 370),
(47, 'Allama Iqbal Express', 'Lahore Junction', 'Islamabad', 1399, 1150, 900, '13:51:00', '18:53:00', 372),
(48, 'Awam Express', 'Lahore Junction', 'Islamabad', 1450, 1300, 1200, '01:50:00', '18:50:00', 374),
(49, 'Badar Express', 'Lahore Junction', 'Islamabad', 1600, 1300, 1100, '15:50:00', '19:00:00', 373);

-- --------------------------------------------------------

--
-- Table structure for table `seatavailablility`
--

CREATE TABLE `seatavailablility` (
  `ID` int(11) NOT NULL,
  `TrainNo` varchar(10) NOT NULL,
  `BusinessBookedseats` int(11) DEFAULT NULL,
  `BusinessAvailableseats` int(11) DEFAULT NULL,
  `EconomicalBookedseats` int(11) DEFAULT NULL,
  `EconomicalAvailableseats` int(11) DEFAULT NULL,
  `StandardBookedseats` int(11) DEFAULT NULL,
  `StandardAvailableseats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatavailablility`
--

INSERT INTO `seatavailablility` (`ID`, `TrainNo`, `BusinessBookedseats`, `BusinessAvailableseats`, `EconomicalBookedseats`, `EconomicalAvailableseats`, `StandardBookedseats`, `StandardAvailableseats`) VALUES
(1, '9UP', 17, 13, 10, 26, 16, 24),
(2, '13UP', 10, 20, 10, 26, 10, 30),
(3, '15UP', 10, 20, 10, 26, 10, 30),
(4, '23UP', 10, 20, 10, 26, 10, 30),
(5, '45UP', 10, 20, 10, 26, 10, 30),
(6, '111UP', 10, 20, 10, 26, 10, 30),
(7, '117UP', 10, 20, 10, 26, 10, 30),
(8, '147UP', 10, 20, 10, 26, 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `StationID` int(11) NOT NULL,
  `StationName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`StationID`, `StationName`) VALUES
(4, 'Bahawalpur'),
(21, 'Chak Jhumra Junction'),
(23, 'Chaklala'),
(22, 'Faisalabad'),
(19, 'Farooq Abad'),
(16, 'Gujranwala'),
(28, 'Gujrat'),
(3, 'Hyderabad Junction'),
(24, 'Islamabad'),
(8, 'Jacobabad Junction'),
(1, 'Karachi Cantonment'),
(26, 'Khanewal Junction'),
(10, 'Khanpur Junction'),
(2, 'Kotri Junction'),
(6, 'Lahore Junction'),
(14, 'Mirpur Mathelo'),
(25, 'Multan Cantonment'),
(12, 'Nawabshah'),
(5, 'Okara'),
(18, 'Peshawar Cantonment'),
(7, 'Quetta'),
(27, 'Raiwind Junction'),
(13, 'Ranipur Riyasat'),
(17, 'Rawalpindi'),
(9, 'Rohri Junction'),
(20, 'Safdarabad'),
(15, 'Sahiwal'),
(11, 'Shorkot Cantonment Junction');

-- --------------------------------------------------------

--
-- Table structure for table `status of booking`
--

CREATE TABLE `status of booking` (
  `booking id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `TrainNo` varchar(10) NOT NULL,
  `TrainName` varchar(30) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `TotalDistance` int(11) NOT NULL,
  `BusinessSeats` int(11) NOT NULL,
  `EconomicalSeats` int(11) NOT NULL,
  `StandardSeats` int(11) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`TrainNo`, `TrainName`, `FromStation`, `ToStation`, `TotalDistance`, `BusinessSeats`, `EconomicalSeats`, `StandardSeats`, `Img`, `id`) VALUES
('10UP', 'Local Express', 'Gujranwala', 'Islamabad', 222, 50, 50, 50, '1apic.jpg', 1),
('111UP', 'Badar Express', 'Lahore Junction', 'Faisalabad', 162, 80, 40, 50, '20pic.jpg', 6),
('117UP', 'Multan Express', 'Multan Cantonment', 'Lahore Junction', 423, 80, 70, 100, '24pic.jpg', 8),
('13UP', 'Awam Express', 'Karachi Cantonment', 'Peshawar Cantonment', 1749, 70, 100, 90, '5pic.jpg', 4),
('147UP', 'Islamabad Express', 'Lahore Junction', 'Islamabad', 290, 50, 80, 70, '11pic.jpg', 7),
('15UP', 'Karachi Express', 'Karachi Cantonment', 'Lahore Junction', 1332, 80, 100, 50, '19pic.jpg', 5),
('18UP', 'Hassan Express ', 'Okara', 'Faisalabad', 200, 60, 80, 40, '3apic.jpg', 9),
('210UP', 'Latif Express', 'Gujranwala', 'Kotri Junction', 300, 40, 80, 100, '1cpic.jpg', 2),
('23UP', 'Akbar Express', 'Quetta', 'Lahore Junction', 1088, 100, 100, 89, '26pic.jpg', 10),
('45UP', 'Pakistan Express', 'Karachi Cantonment', 'Rawalpindi', 1542, 40, 80, 60, '23pic.jpg', 6),
('9UP', 'Allama Iqbal Express', 'Karachi Cantonment', 'Lahore Junction', 1292, 100, 80, 100, '1pic.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Passwords` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`UserID`, `Username`, `Passwords`) VALUES
(7, 'Rimsha25', 'rimsha25'),
(10, 'Ayesha12', 'ayesha12'),
(11, 'Hassan07', 'hassan07'),
(13, 'Mudassar23', 'mudassar23'),
(18, 'Mahnoor17', 'mahnoor17'),
(22, 'Momee07', 'momee07'),
(23, 'noorfayyaz11', '12345678'),
(24, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminUsername`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `TrainNo` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`,`TrainName`,`FromStation`,`ToStation`),
  ADD KEY `TrainName` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `seatavailablility`
--
ALTER TABLE `seatavailablility`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TrainNo` (`TrainNo`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`StationID`),
  ADD UNIQUE KEY `StationName` (`StationName`);

--
-- Indexes for table `status of booking`
--
ALTER TABLE `status of booking`
  ADD KEY `booking id` (`booking id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`TrainNo`,`TrainName`),
  ADD UNIQUE KEY `TrainName` (`TrainName`),
  ADD KEY `FromStation` (`FromStation`),
  ADD KEY `ToStation` (`ToStation`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`UserID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `seatavailablility`
--
ALTER TABLE `seatavailablility`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `StationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customers` (`username`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `bookings_ibfk_4` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `seatavailablility`
--
ALTER TABLE `seatavailablility`
  ADD CONSTRAINT `seatavailablility_ibfk_1` FOREIGN KEY (`TrainNo`) REFERENCES `trains` (`TrainNo`);

--
-- Constraints for table `status of booking`
--
ALTER TABLE `status of booking`
  ADD CONSTRAINT `status of booking_ibfk_1` FOREIGN KEY (`booking id`) REFERENCES `bookings` (`BookingID`);

--
-- Constraints for table `trains`
--
ALTER TABLE `trains`
  ADD CONSTRAINT `trains_ibfk_1` FOREIGN KEY (`FromStation`) REFERENCES `station` (`StationName`),
  ADD CONSTRAINT `trains_ibfk_2` FOREIGN KEY (`ToStation`) REFERENCES `station` (`StationName`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customers` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
