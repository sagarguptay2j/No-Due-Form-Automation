-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 26, 2021 at 07:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `no_due_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(30) NOT NULL DEFAULT 'admin',
  `Password` varchar(30) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('517', 'dslab'),
('101-B', 'Accounts'),
('100', 'Principal'),
('519', 'Programming'),
('518', 'oopmlab'),
('113', 'aplab'),
('212', 'Computercenter'),
('012', 'Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `Roll Number` varchar(30) NOT NULL,
  `LabId` varchar(80) NOT NULL,
  `Title` tinytext DEFAULT NULL,
  `document` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`Roll Number`, `LabId`, `Title`, `document`) VALUES
('18CE1098', '517', 'RAIT Pay Receipt', 'file_1613983860767.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `Lab` varchar(80) NOT NULL,
  `LabId` varchar(80) NOT NULL,
  `Department` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`Lab`, `LabId`, `Department`) VALUES
('Data Structure Lab', '517', 'Computer'),
('Programming Lab', '519', 'Computer'),
('Object Oriented Lab', '518', 'Computer'),
('Student Section', '101-A', 'Computer'),
('Accounts Section', '101-B', 'Computer'),
('Examination Section', '104', 'Computer'),
('Store', 'B03', 'Computer'),
('Library', '312', 'Computer'),
('Basic Workshop', 'B-007', 'Computer'),
('Electrical Lab', '008', 'Computer'),
('Drawing', '012', 'Computer'),
('Engineering Mechanics', '013', 'Computer'),
('Chemistry Lab', '002', 'Computer'),
('Physics Lab', '113', 'Computer'),
('Computer Centre', '212', 'Computer'),
('Project Lab', '513', 'Computer'),
('Network Security Lab', '516', 'Computer'),
('Data Processing lab', '520', 'Computer'),
('Digital Forensic Lab', '521', 'Computer'),
('Wireless Computing Lab', '522', 'Computer'),
('e-Yantra', '012-B', 'Computer'),
('PG Laboratory', '501-A', 'Computer'),
('Department Library', '-', 'Computer'),
('Training & Placement', '512', 'Computer'),
('Student Section(Submit ID Card)', '101-A', 'Electronics and Telecommunication'),
('Accounts Section', '101-B', 'Electronics and Telecommunication'),
('Examination Section', '104', 'Electronics and Telecommunication'),
('Store', 'B03', 'Electronics and Telecommunication'),
('Library(Submit Lib,ID Card)', '312', 'Electronics and Telecommunication'),
('Basic Workshop', 'B-007', 'Electronics and Telecommunication'),
('Electrical Lab(BEE)', '008', 'Electronics and Telecommunication'),
('Drawing', '012', 'Electronics and Telecommunication'),
('Engineering Mechanics', '013', 'Electronics and Telecommunication'),
('Chemistry Lab', '002', 'Electronics and Telecommunication'),
('Physics Lab', '113', 'Electronics and Telecommunication'),
('Computer Centre', '212', 'Electronics and Telecommunication'),
('Microprocessor & Microcontroller', '201', 'Electronics and Telecommunication'),
('Signal Processing', '202', 'Electronics and Telecommunication'),
('Basic Electronics & Integrated Circuit', '208', 'Electronics and Telecommunication'),
('Basic & Advanced Commumnication Lab ', '308', 'Electronics and Telecommunication'),
('Microwave & Antenna Lab', '311', 'Electronics and Telecommunication'),
('PG Labroratory', '11B', 'Electronics and Telecommunication'),
('e-Yantra', '012-A', 'Electronics and Telecommunication'),
('Project Lab', '213-A', 'Electronics and Telecommunication'),
('Computational Lab', '613-B', 'Electronics and Telecommunication'),
('Department Library', '-', 'Electronics and Telecommunication'),
('Training & Placement Lab', '512', 'Electronics and Telecommunication'),
('Student Section', '101-A', 'Instrumentation'),
('Accounts Section', '101-B', 'Instrumentation'),
('Examination Section', '104', 'Instrumentation'),
('Store', 'B03', 'Instrumentation'),
('Library', '312', 'Instrumentation'),
('Basic Workshop', 'B-007', 'Instrumentation'),
('Electrical Lab', '008', 'Instrumentation'),
('Drawing Lab', '012', 'Instrumentation'),
('Engineering Mechanics', '013', 'Instrumentation'),
('Chemistry Lab', '002', 'Instrumentation'),
('Physics Lab', '113', 'Instrumentation'),
('Computer Centre', '212', 'Instrumentation'),
('Process/DCS Lab', '011', 'Instrumentation'),
('Transducer & Signal Conditioning Lab', '111', 'Instrumentation'),
('Control & Automation Lab', '108', 'Instrumentation'),
('Analytical & Biomedical Lab', '112A', 'Instrumentation'),
('Project Lab', '112B', 'Instrumentation'),
('Computational Lab', '112C', 'Instrumentation'),
('e-Yantra', '012-C', 'Instrumentation'),
('Department Library', '', 'Instrumentation'),
('Training & Placement', '512', 'Instrumentation'),
('Student Section', '101-A', 'Electronics'),
('Accounts Section', '101-B', 'Electronics'),
('Examination Section', '102', 'Electronics'),
('Store', 'B03', 'Electronics'),
('Library', '312', 'Electronics'),
('Basic Workshop', 'B-007', 'Electronics'),
('Electrical Lab', '008', 'Electronics'),
('Drawing', '012', 'Electronics'),
('Engineering Mechanics', '013', 'Electronics'),
('Chemistry Lab', '002', 'Electronics'),
('Physics Lab', '113', 'Electronics'),
('Computer Centre', '212', 'Electronics'),
('e-Yantra', '011-A', 'Electronics'),
('VLSI and Embedded system', '204', 'Electronics'),
('Signal processing Lab', '205', 'Electronics'),
('Integrated circuit Lab', '211', 'Electronics'),
('Digital Laboratory', '408', 'Electronics'),
('Control and power Elect Lab', '411', 'Electronics'),
('Advanced Communication', '413', 'Electronics'),
('PG Laboratories', '401-A', 'Electronics'),
('Training & Placement', '512', 'Electronics'),
('Department Library', '', 'Electronics'),
('Student Section', '101-A', 'Information Technology'),
('Accounts Section', '101-B', 'Information Technology'),
('Examination Section', '104', 'Information Technology'),
('Store', 'B03', 'Information Technology'),
('Library', '312', 'Information Technology'),
('Basic Workshop', 'B-007', 'Information Technology'),
('Electrical Lab(BEE)', '008', 'Information Technology'),
('Drawing', '012', 'Information Technology'),
('Engineering Mechanics', '013', 'Information Technology'),
('Chemistry Lab', '002', 'Information Technology'),
('Physics Lab', '113', 'Information Technology'),
('Computer Centre', '212', 'Information Technology'),
('Project Lab', '613A', 'Information Technology'),
('Database Lab', '616A', 'Information Technology'),
('Data mining Lab', '616B', 'Information Technology'),
('I.P. Lab', '617', 'Information Technology'),
('Software Testing Lab', '618', 'Information Technology'),
('Networking Lab', '619', 'Information Technology'),
('I.D.M Lab', '620 A/B', 'Information Technology'),
('Server Room', '621', 'Information Technology'),
('PG Lab', '601A', 'Information Technology'),
('Department Library', '-', 'Information Technology'),
('Training & Placement', '512', 'Information Technology'),
('Principal', '100', 'Computer'),
('Principal', '100', 'Electronics and Telecommunication'),
('Principal', '100', 'Instrumentation'),
('Principal', '100', 'Electronics'),
('Principal', '100', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `nodue_status`
--

CREATE TABLE `nodue_status` (
  `Roll Number` varchar(80) NOT NULL,
  `Lab` varchar(80) NOT NULL,
  `Status` varchar(80) NOT NULL DEFAULT 'Pending',
  `Remark` varchar(200) NOT NULL DEFAULT 'No Remarks',
  `Date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nodue_status`
--

INSERT INTO `nodue_status` (`Roll Number`, `Lab`, `Status`, `Remark`, `Date`) VALUES
('18CE1031', 'Data Structure Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Programming Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Object Oriented Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Student Section', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Accounts Section', 'Verified', 'No Remarks', '2021-03-01'),
('18CE1031', 'Examination Section', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Store', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Library', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Basic Workshop', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Electrical Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Drawing', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Engineering Mechanics', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Chemistry Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Physics Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Computer Centre', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Project Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Network Security Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Data Processing lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Digital Forensic Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Wireless Computing Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'e-Yantra', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'PG Laboratory', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Department Library', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Training & Placement', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1031', 'Principal', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1098', 'Data Structure Lab', 'Approved', 'No Remarks', '2021-03-01'),
('18CE1098', 'Programming Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Object Oriented Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Student Section', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Accounts Section', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Examination Section', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Store', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Library', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Basic Workshop', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Electrical Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Drawing', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Engineering Mechanics', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Chemistry Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Physics Lab', 'Hold', 'Rs 100 fine', '2021-03-26'),
('18CE1098', 'Computer Centre', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Project Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Network Security Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Data Processing lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Digital Forensic Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Wireless Computing Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'e-Yantra', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'PG Laboratory', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Department Library', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Training & Placement', 'Pending', 'No Remarks', '2021-03-01'),
('18CE1098', 'Principal', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Student Section', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Accounts Section', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Examination Section', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Store', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Library', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Basic Workshop', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Electrical Lab(BEE)', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Drawing', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Engineering Mechanics', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Chemistry Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Physics Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Computer Centre', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Project Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Database Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Data mining Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'I.P. Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Software Testing Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Networking Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'I.D.M Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Server Room', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'PG Lab', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Department Library', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Training & Placement', 'Pending', 'No Remarks', '2021-03-01'),
('18IT1030', 'Principal', 'Pending', 'No Remarks', '2021-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Firstname` varchar(30) NOT NULL,
  `Middlename` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Department` varchar(80) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Sem` varchar(5) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Roll Number` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Firstname`, `Middlename`, `Lastname`, `Department`, `Email`, `Class`, `Sem`, `Mobile`, `Username`, `Password`, `Roll Number`, `Name`) VALUES
('Devjani', 'Ranjit', 'Mallick', 'Computer', 'devjanimallick27@gmail.com', 'BE', '8', '9769145076', 'Devjani27', 'DM@123', '18CE1031', 'Devjani Mallick'),
('Reyashree', 'Ranjit', 'Mallick', 'Computer', 'reyashreemallick20@gmail.com', 'BE', '8', '7738036876', 'Reya20', 'RM@123', '18CE1098', 'Reyashree Mallick'),
('Shruthi', 'Ramakant', 'Ramakrishnan', 'Information Technology', 'shruthi@gmail.com', 'BE', '8', '9869242984', 'Shruthi21', 'SR@123', '18IT1030', 'Shruthi Ramakrishnan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
