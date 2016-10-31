-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 06:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cityliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(20) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `AdminPassword` varchar(50) NOT NULL,
  `AdminAddress` varchar(100) NOT NULL,
  `AdminPhoneNo` varchar(20) NOT NULL,
  `AdminEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `AdminPassword`, `AdminAddress`, `AdminPhoneNo`, `AdminEmail`) VALUES
(908, 'Fathehah', 'fathehah1', 'No 73, Lorong 18 Taman Tas Jalan Gambang 25150 Kuantan', '14170742', 'fathehah@gmil.com'),
(909, 'Nuraini', 'nuraini1', 'SC20 0204 Jalan Legenda Mantin 71700 Negeri Sembilan', '136637005', 'nuraini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `BookingID` int(20) NOT NULL AUTO_INCREMENT,
  `BookingStatus` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `BookingDate` date NOT NULL,
  `ScheduleDate` date NOT NULL,
  `NoOfSeat` int(10) NOT NULL,
  `CustomerID` int(20) NOT NULL,
  `RouteID` varchar(20) NOT NULL,
  `SeatID` int(20) NOT NULL,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98483 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `BookingStatus`, `PaymentMethod`, `BookingDate`, `ScheduleDate`, `NoOfSeat`, `CustomerID`, `RouteID`, `SeatID`) VALUES
(1, '', 'PayPal', '0000-00-00', '2016-01-29', 0, 0, 'P2S', 0),
(15411, 'Pending', 'Cash', '0000-00-00', '0000-00-00', 1, 48970147, 'S2M', 36),
(31652, 'Approved', 'PayPal', '0000-00-00', '0000-00-00', 1, 94387412, 'K2S', 7),
(32678, 'Approved', 'Cash', '0000-00-00', '0000-00-00', 1, 13108132, 'S2L', 28),
(34188, 'Approved', 'Cash', '0000-00-00', '0000-00-00', 1, 38795422, 'L2S', 9),
(54214, 'Approved', 'PayPal', '0000-00-00', '0000-00-00', 1, 61717432, 'S2K', 11),
(61354, 'Approved', 'PayPal', '0000-00-00', '0000-00-00', 1, 57711060, 'S2J', 2),
(71291, 'Approved', 'Cash', '0000-00-00', '0000-00-00', 1, 81973765, 'M2S', 13),
(96366, 'Approved', 'PayPal', '0000-00-00', '0000-00-00', 1, 79154863, 'J2S', 13),
(97125, 'Pending', 'PayPal', '0000-00-00', '0000-00-00', 1, 47108403, 'P2S', 15),
(98462, 'Approved', 'PayPal', '0000-00-00', '0000-00-00', 1, 16771461, 'S2P', 24),
(98470, '', 'PayPal', '0000-00-00', '2016-01-30', 0, 0, 'J2S', 0),
(98471, '', 'PayPal', '0000-00-00', '2016-01-30', 0, 0, 'P2S', 0),
(98472, '', 'Cash', '0000-00-00', '2016-01-28', 0, 0, 'M2S', 0),
(98473, '', 'Cash', '0000-00-00', '2016-01-26', 0, 0, 'J2S', 0),
(98474, '', 'Cash', '0000-00-00', '2016-01-26', 0, 0, 'J2S', 0),
(98475, '', 'Cash', '0000-00-00', '2016-01-26', 0, 0, 'J2S', 0),
(98476, '', 'PayPal', '0000-00-00', '2016-01-27', 0, 0, 'S2M', 0),
(98477, '', 'PayPal', '0000-00-00', '2016-01-21', 0, 0, 'S2K', 0),
(98478, '', 'PayPal', '0000-00-00', '2016-01-20', 0, 0, 'M2S', 0),
(98479, '', 'PayPal', '0000-00-00', '2016-01-27', 0, 0, 'M2S', 0),
(98480, '', 'Cash', '0000-00-00', '2016-01-20', 0, 0, 'J2S', 0),
(98481, '', 'Cash', '0000-00-00', '2016-01-19', 0, 0, 'L2S', 0),
(98482, '', 'PayPal', '0000-00-00', '2016-01-20', 0, 0, 'P2S', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `BusID` int(20) NOT NULL,
  `PlateNo` varchar(20) NOT NULL,
  `ServiceDate` date NOT NULL,
  `StaffID` int(20) NOT NULL,
  `ServiceID` int(20) NOT NULL,
  PRIMARY KEY (`BusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BusID`, `PlateNo`, `ServiceDate`, `StaffID`, `ServiceID`) VALUES
(10, 'WXY 1234', '0000-00-00', 10, 111),
(20, 'CCH 8130', '0000-00-00', 20, 222),
(30, 'JKM 3675', '0000-00-00', 30, 333),
(40, 'SQW 4578', '0000-00-00', 40, 444),
(50, 'BAD 6804', '0000-00-00', 50, 555),
(60, 'WWC 3686', '0000-00-00', 60, 666),
(70, 'BWA 8659', '0000-00-00', 70, 777),
(80, 'QYR 9595', '0000-00-00', 80, 888),
(90, 'MMU 6256', '0000-00-00', 90, 999),
(100, 'WTF 3572', '0000-00-00', 100, 1010);

-- --------------------------------------------------------

--
-- Table structure for table `bus_maintenance`
--

CREATE TABLE IF NOT EXISTS `bus_maintenance` (
  `MaintenanceID` int(20) NOT NULL,
  `MaintenanceDate` date NOT NULL,
  `MaintenanceStatus` varchar(50) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `StaffID` int(20) NOT NULL,
  `BusID` int(20) NOT NULL,
  `ServiceID` int(20) NOT NULL,
  PRIMARY KEY (`MaintenanceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_maintenance`
--

INSERT INTO `bus_maintenance` (`MaintenanceID`, `MaintenanceDate`, `MaintenanceStatus`, `Remark`, `StaffID`, `BusID`, `ServiceID`) VALUES
(201, '0000-00-00', 'completed', 'only one tire had changed', 10, 10, 111),
(202, '0000-00-00', 'completed', 'service one air-conditional', 20, 20, 222),
(203, '0000-00-00', 'completed', 'the crude-oil has to be change monthly', 30, 30, 333),
(204, '0000-00-00', 'completed', 'only 34 seat covers were changed', 40, 40, 444),
(205, '0000-00-00', 'completed', 'the old audio system was too slow', 50, 50, 555),
(206, '0000-00-00', 'completed', 'the old television has sound problem', 60, 60, 666),
(207, '0000-00-00', 'completed', 'the engine must be services every month', 70, 70, 777),
(208, '0000-00-00', 'completed', 'the crude-oil has to be change monthly', 80, 80, 888),
(209, '0000-00-00', 'completed', 'the previous seat light has some problem', 90, 90, 999),
(300, '0000-00-00', 'completed', 'the engine must be services every month', 100, 100, 1010);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerPassword` varchar(50) NOT NULL,
  `CustomerAddress` varchar(100) NOT NULL,
  `CustomerPhoneNo` int(20) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94387413 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerPassword`, `CustomerAddress`, `CustomerPhoneNo`) VALUES
(13108132, 'Nurul Izzaty', '32811013', 'No 62, Jalan Gangsa, 31400 Ipoh, Perak', 149117170),
(16771461, 'Wincy Miranda', '61147716', 'No 51, Jalan Seremban 2, 71700 Seremban, Negeri Sembilan', 1626112642),
(38795422, 'Steffan Aaron', '22547938', 'No 89, Jalan Mersing 3, 86800 Mersing, Johor', 167967028),
(47108403, 'Emma Pauline', '3841047', 'No 216, Jalan Muar, 75470 Ayer Keruh, Johor', 122336152),
(48970147, 'Hariharan Rajan', '47019748', 'No 24, Jalan Uda, 05400 Alor Setar, Perlis', 126137423),
(57711060, 'Alicia Wong', '60107157', 'No 76, Jalan Pasirmas, 16060 Bachok, Kelantan', 172356675),
(61717432, 'Hafiz Haniff', '32747161', 'No 43, Jalan Selangor, 68000 Ampang, Selangor', 182634282),
(79154863, 'Shalini Sivam', '63481579', 'No 38, Jalan Saujana, 47100 Puchong, Selangor', 172272519),
(81973765, 'Desmond Capel', '65379781', 'No 10, Jalan Kuantan, 25150 Kuantan, Pahang', 108802270),
(94387412, 'Jackson Liew', '12743894', 'No 5, Jalan Pinang, 10100 Georgetown, Pulau Pinang', 129426565);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `StaffID` int(20) NOT NULL,
  `LicenseNo` int(10) NOT NULL,
  `LicenseDate` date NOT NULL,
  `ExpiryDate` date NOT NULL,
  `RouteID` varchar(20) NOT NULL,
  `TripID` int(20) NOT NULL,
  `BusID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`StaffID`, `LicenseNo`, `LicenseDate`, `ExpiryDate`, `RouteID`, `TripID`, `BusID`) VALUES
(10, 5992505, '2014-07-14', '2016-07-14', 'S2P', 76, 10),
(20, 6321887, '2014-04-19', '2016-04-19', 'S2K', 41, 20),
(30, 7315462, '2015-05-20', '2017-05-20', 'S2L', 21, 30),
(70, 6132788, '2014-10-05', '2016-10-05', 'L2S', 62, 70),
(90, 5631529, '2014-08-26', '2016-08-26', 'M2S', 32, 90),
(100, 7316243, '2015-01-17', '2017-01-17', 'J2S', 53, 100),
(40, 3641134, '2014-09-08', '2016-09-08', 'K2S', 23, 40),
(60, 4631526, '2014-07-22', '2016-07-22', 'S2J', 75, 60),
(80, 7631291, '2015-04-27', '2017-07-14', 'S2M', 51, 80),
(50, 4916273, '2015-02-15', '2016-01-01', 'P2S', 42, 50);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentID` int(20) NOT NULL,
  `TypeOfPayment` varchar(30) NOT NULL,
  `PaymentAmount` varchar(50) NOT NULL,
  `BookingID` int(20) NOT NULL,
  `StaffID` int(20) NOT NULL,
  PRIMARY KEY (`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `TypeOfPayment`, `PaymentAmount`, `BookingID`, `StaffID`) VALUES
(316245, 'PayPal', 'RM55', 97125, 140),
(316715, 'PayPal', 'RM28', 61354, 150),
(316997, 'PayPal', 'RM30.20', 31652, 140),
(364152, 'Cash', 'RM7.50', 15411, 140),
(569532, 'Cash', 'RM7.50', 71291, 150),
(726131, 'PayPal', 'RM30.20', 54214, 150),
(791354, 'PayPal', 'RM28', 96366, 140),
(822544, 'PayPal', 'RM55', 98462, 150),
(916896, 'Cash', 'RM6.10', 34188, 140),
(936178, 'Cash', 'RM6.10', 32678, 150);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `PromotionID` int(20) NOT NULL,
  `PromotionName` varchar(100) NOT NULL,
  `PromotionDesc` varchar(100) NOT NULL,
  `PromotionPrice` varchar(20) NOT NULL,
  PRIMARY KEY (`PromotionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PromotionID`, `PromotionName`, `PromotionDesc`, `PromotionPrice`) VALUES
(30, 'Chinese New Year Promotion', 'From Seremban to Penang for ADULT ticket', 'RM45'),
(31, 'Chinese New Year Promotion', 'From Seremban to Kuantan for ADULT ticket', 'RM27'),
(32, 'Chinese New Year Promotion', 'From Seremban to Johor for ADULT ticket', 'RM25'),
(33, 'Chinese New Year Promotion', 'From Seremban to KL for CHILD ticket', 'FREE');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `RouteID` varchar(20) NOT NULL,
  `FromRoute` varchar(50) NOT NULL,
  `ToRoute` varchar(50) NOT NULL,
  `Fares` varchar(20) NOT NULL,
  `BusID` int(20) NOT NULL,
  PRIMARY KEY (`RouteID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`RouteID`, `FromRoute`, `ToRoute`, `Fares`, `BusID`) VALUES
('J2S', 'Johor', 'Seremban', '28', 80),
('K2S', 'Kuantan', 'Seremban', '30.20', 70),
('L2S', 'KL', 'Seremban', '6.10', 100),
('M2S', 'Melaka', 'Seremban', '7.50', 90),
('P2S', 'Penang', 'Seremban', '55', 60),
('S2J', 'Seremban', 'Johor', '28', 30),
('S2K', 'Seremban', 'Kuantan', '30.20', 20),
('S2L', 'Seremban', 'KL', '6.10', 50),
('S2M', 'Seremban', 'Melaka', '7.50', 40),
('S2P', 'Seremban', 'Penang', '55', 10);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `ScheduleID` int(20) NOT NULL,
  `ScheduleTime` varchar(10) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `RouteID` varchar(20) NOT NULL,
  `BusID` int(20) NOT NULL,
  `StaffID` int(20) NOT NULL,
  PRIMARY KEY (`ScheduleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ScheduleID`, `ScheduleTime`, `ScheduleDate`, `RouteID`, `BusID`, `StaffID`) VALUES
(1, '0900AM', '0000-00-00', 'S2P', 10, 10),
(2, '1100AM', '0000-00-00', 'S2K', 20, 20),
(3, '0330PM', '0000-00-00', 'S2J', 30, 30),
(4, '0930AM', '0000-00-00', 'S2M', 40, 40),
(5, '0630PM', '0000-00-00', 'S2L', 50, 50),
(6, '1100AM', '0000-00-00', 'P2S', 60, 60),
(7, '1030AM', '0000-00-00', 'K2S', 70, 70),
(8, '0400PM', '0000-00-00', 'J2S', 80, 80),
(9, '0600AM', '0000-00-00', 'M2S', 90, 90),
(10, '0120PM', '0000-00-00', 'L2S', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `SeatID` int(20) NOT NULL,
  `TotalSeats` int(20) NOT NULL,
  `SeatsBooked` int(20) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `RouteID` varchar(20) NOT NULL,
  `BusID` int(20) NOT NULL,
  PRIMARY KEY (`SeatID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`SeatID`, `TotalSeats`, `SeatsBooked`, `ScheduleDate`, `RouteID`, `BusID`) VALUES
(2, 44, 1, '0000-00-00', 'S2J', 30),
(7, 44, 1, '0000-00-00', 'K2S', 70),
(9, 44, 1, '0000-00-00', 'L2S', 100),
(10, 44, 1, '0000-00-00', 'M2S', 90),
(11, 44, 1, '0000-00-00', 'S2K', 20),
(13, 44, 1, '0000-00-00', 'J2S', 80),
(15, 44, 1, '0000-00-00', 'P2S', 60),
(24, 44, 1, '0000-00-00', 'S2P', 10),
(28, 44, 1, '0000-00-00', 'S2L', 50),
(36, 44, 1, '0000-00-00', 'S2M', 40);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `ServiceID` int(20) NOT NULL,
  `ServiceName` varchar(100) NOT NULL,
  `ServiceAmount` varchar(100) NOT NULL,
  PRIMARY KEY (`ServiceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceID`, `ServiceName`, `ServiceAmount`) VALUES
(111, 'change tires', 'RM200'),
(222, 'service air-conditional', 'RM300'),
(333, 'refueled crude oil', 'RM350'),
(444, 'change seat cover', 'RM250'),
(555, 'upgrade bus audio', 'RM399'),
(666, 'change bus television', 'RM500'),
(777, 'service bus engine', 'RM450'),
(888, 'refueled crude oil', 'RM350'),
(999, 'upgrade seat light', 'RM300'),
(1010, 'service bus engine', 'RM450');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` int(20) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `StaffType` varchar(50) NOT NULL,
  `StaffAddress` varchar(100) NOT NULL,
  `StaffGender` varchar(10) NOT NULL,
  `StaffPhoneNo` int(20) NOT NULL,
  `StaffEmail` varchar(50) NOT NULL,
  `StaffPassword` varchar(20) NOT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffType`, `StaffAddress`, `StaffGender`, `StaffPhoneNo`, `StaffEmail`, `StaffPassword`) VALUES
(10, 'Razak', 'Driver', 'No 13 Lorong 18 Taman Gelora 71700 Mantin, Negeri Sembilan', 'Male', 145789076, 'razak@gmail.com', 'razak1'),
(20, 'Farid', 'Driver', 'No 36 Lorong 6 Taman Selasih 71700 Nilai, Negeri Sembilan', 'Male', 10752577, 'farid@gmail.com', 'farid1'),
(30, 'Kamil', 'Driver', 'No 68 Lorong 1 Taman Murni 68000 Klang, Selangor', 'Male', 126785356, 'kamil@gmail.com', 'kamil1'),
(40, 'Samuel', 'Driver', 'No 02 Lorong 3 Taman Damai 31400 Ipoh Perak', 'Male', 1357854321, 'samuel@gmail.com', 'samuel1'),
(50, 'Jaerul', 'Driver', 'No 45 Lorong 15 Taman Kota 10100 Georgetown Penang', 'Male', 174315678, 'jaerul@gmail.com', 'jaerul1'),
(60, 'Adha', 'Driver', 'No 20 Lorong 6 Taman Jaya 75470 Muar Johor', 'Male', 165432157, 'adha@gmail.com', 'adha1'),
(70, 'Shahir', 'Driver', 'No 23 Lorong 19 Taman Sahabat 75470  Mersing Johor', 'Male', 197643135, 'shahir@gmail.com', 'shahir1'),
(80, 'Lee', 'Driver', 'No 17 Lorong 33 Taman Wawasan 31400 Ampang Kuala Lumpur', 'Male', 18213678, 'lee@gmail.com', 'lee1'),
(90, 'David', 'Driver', 'No 12 Lorong 2 Taman Gelora Mantin Negeri Sembilan', 'Male', 19654246, 'david@gmail.com', 'david1'),
(100, 'Cheong', 'Driver', 'No 5 Lorong 7 Taman Gelora Mantin Negeri Sembilan', 'Male', 126780075, 'cheong@gmail.com', 'cheong1'),
(110, 'Farah', 'Admin', 'No 56, Jalan Biru, 31400 Ipoh, Perak', 'Female', 123469115, 'farah@gmail.com', 'farah1'),
(120, 'Jeyraj', 'Manager', 'No 99, Jalan Putra Entah, 55100 Pandan Jaya, Selangor', 'Male', 169357412, 'jeyraj@gmail.com', 'jeyraj1'),
(140, 'Gurmesh Singh', 'Cash Register', 'No 15, S2 B7, 70300 Seremban, Negeri Sembilan', 'Male', 127154298, 'gurmesh@gmail.com', 'gurmesh1'),
(150, 'Stacie Kwah', 'Cash Register', 'No 34, Jalan BBN 2, Nilai, Negeri Sembilan', 'Female', 186135544, 'staciek@gmail.com', 'staciek1');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE IF NOT EXISTS `trip` (
  `TripID` int(20) NOT NULL,
  `RouteID` varchar(20) NOT NULL,
  `DepartureTime` varchar(20) NOT NULL,
  `ArrivalTime` varchar(20) NOT NULL,
  PRIMARY KEY (`TripID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`TripID`, `RouteID`, `DepartureTime`, `ArrivalTime`) VALUES
(11, 'S2P', '9:00AM', '1:15PM'),
(12, 'S2P', '12:00PM', '4:15PM'),
(13, 'S2P', '4:30PM', '9:00PM'),
(21, 'P2S', '11:00AM', '3:15PM'),
(22, 'P2S', '2:15PM', '7:00PM'),
(23, 'P2S', '6:00PM', '10:30PM'),
(31, 'S2K', '8:00AM', '1:45AM'),
(32, 'S2K', '11:00AM', '3:30PM'),
(33, 'S2K', '5:00PM', '9:00PM'),
(41, 'K2S', '10:30AM', '2:15PM'),
(42, 'K2S', '1:15PM', '5:00PM'),
(43, 'K2S', '8:00PM', '11:15PM'),
(51, 'S2J', '8:00AM', '10:45AM'),
(52, 'S2J', '11:00AM', '1:45PM'),
(53, 'S2J', '3:30PM', '6:05PM'),
(61, 'J2S', '9:00AM', '11:45AM'),
(62, 'J2S', '11:30AM', '2:15PM'),
(63, 'J2S', '4:00PM', '7:00AM'),
(71, 'S2L', '6:00AM', '6:50AM'),
(72, 'S2L', '6:30AM', '7:20AM'),
(73, 'S2L', '7:15AM', '8:05AM'),
(74, 'S2L', '8:30AM', '9:30AM'),
(75, 'S2L', '9:30AM', '10:20AM'),
(76, 'S2L', '11:30AM', '12:20PM'),
(77, 'S2L', '2:00PM', '2:50PM'),
(78, 'S2L', '4:30PM', '5:20PM'),
(79, 'S2L', '5:00PM', '6:00PM'),
(80, 'S2L', '6:30PM', '7:30PM'),
(81, 'S2L', '8:00PM', '9:00PM'),
(100, 'S2M', '6:00AM', '6:50AM'),
(101, 'S2M', '6:30AM', '7:20AM'),
(102, 'S2M', '7:15AM', '8:05AM'),
(103, 'S2M', '8:30AM', '9:30AM'),
(104, 'S2M', '9:30AM', '10:20AM'),
(105, 'S2M', '11:30AM', '12:20PM'),
(106, 'S2M', '2:00PM', '2:50PM'),
(107, 'S2M', '4:30PM', '5:20PM'),
(108, 'S2M', '5:00PM', '6:00PM'),
(109, 'S2M', '6:30PM', '7:30PM'),
(110, 'S2M', '8:00PM', '9:00PM'),
(120, 'L2S', '6:00AM', '6.50AM'),
(121, 'L2S', '7:15AM', '8.05AM'),
(122, 'L2S', '8:00AM', '8.50AM'),
(123, 'L2S', '8:30AM', '9.15AM'),
(124, 'L2S', '10:00AM', '10.50AM'),
(125, 'L2S', '12:00PM', '12:50PM'),
(126, 'L2S', '1:30PM', '2:20PM'),
(127, 'L2S', '5:00PM', '6:00PM'),
(128, 'L2S', '6:00PM', '7:00PM'),
(129, 'L2S', '7:30PM', '8:30PM'),
(130, 'L2S', '9:00PM', '10:00PM'),
(140, 'M2S', '6:00AM', '6:50AM'),
(141, 'M2S', '7:15AM', '8:05AM'),
(142, 'M2S', '8:00AM', '8:50AM'),
(143, 'M2S', '8:30AM', '9:15AM'),
(144, 'M2S', '10:00AM', '10:50AM'),
(145, 'M2S', '12:00PM', '12:50PM'),
(146, 'M2S', '1:30PM', '2:20PM'),
(147, 'M2S', '5:00PM', '6:00PM'),
(148, 'M2S', '6:00PM', '7:00PM'),
(149, 'M2S', '7:30PM', '8:30PM'),
(150, 'M2S', '9:00PM', '10:00PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
