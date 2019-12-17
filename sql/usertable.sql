-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 09:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icimudatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `title` varchar(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`title`, `fname`, `lname`, `gender`, `country`) VALUES
('', '', '', '', ''),
('Mr', 'Abubaker', 'Gaber', 'M', 'MALAYSIA'),
('Prof Dr', 'Ainin', 'Sulaiman', 'F', 'MALAYSIA'),
('Mr', 'Alauddin', 'Md', 'M', 'MALAYSIA'),
('Mr.', 'Muhammad Alif Ammar', 'Bin Suhaimi', 'M', 'MALAYSIA'),
('Mr', 'KESAVA RAO', 'ALLA', 'M', 'MALAYSIA'),
('Mr', 'atheer', 'bassel', 'M', 'MALAYSIA'),
('Ms', 'AZIMAH', 'ABDUL GHAPAR', 'F', 'MALAYSIA'),
('Assoc Prof', 'Azizah', 'Suliman', 'F', 'MALAYSIA'),
('Dr.', 'Azlan', 'Iqbal', 'M', 'MALAYSIA'),
('Dr', 'Noor Azurati', 'Ahmad', 'F', 'MALAYSIA'),
('Dr', 'Badariah', 'Solemon', 'F', 'MALAYSIA'),
('Mrs', 'Cecilia', 'Adrian', 'F', 'MALAYSIA'),
('Mrs', 'Chai Phing', 'Chen', 'F', 'MALAYSIA'),
('Mr', 'Ean Heng', 'Lim', 'M', 'MALAYSIA'),
('Dr', 'Evi Indriasari', 'Mansor', 'F', 'SAUDI ARABIA'),
('Mrs', 'HAZILA ', 'HASAN', 'F', 'MALAYSIA'),
('Dr', 'Mohd Fairuz', 'Shiratuddin', 'M', 'AUSTRALIA'),
('Ms', 'Feninferina', 'Azman', 'F', 'MALAYSIA'),
('Mr', 'Sufri', 'Muhammad', 'M', 'MALAYSIA'),
('Dr', 'Gin Xian', 'Kok', 'M', 'MALAYSIA'),
('Dr', 'Hairoladenan', 'Kasim', 'M', 'MALAYSIA'),
('Ms', 'Hayatunnufus', 'Ahmad', 'F', 'MALAYSIA'),
('Mr.', 'Mohd Hazli', 'Mohamed Zabil', 'M', 'MALAYSIA'),
('Dr.', 'Hidayah', 'Sulaiman', 'F', 'MALAYSIA'),
('MR', 'MUHAMMAD HIDZER', 'AMER', 'M', 'KEDAH, MALAYSIA'),
('Ms.', 'Husna', 'Jamal Abdul Nasir', 'F', 'MALAYSIA'),
('Mr', 'Haikal Hafiz', 'Kadar', 'M', 'MALAYSIA'),
('mr', 'Idham', 'Halim', 'M', 'MALAYSIA'),
('Miss', 'NUR ILYANA', 'BINTI ISMARAU TAJUDDIN', 'F', 'MALAYSIA'),
('Mr', 'Mohd Ismifaizul', 'Mohd Ismail', 'M', 'SELANGOR MALAYSIA'),
('Mr', 'Izwan', 'Mohd Ismail', 'M', 'MALAYSIA'),
('Dr', 'Jian Ding', 'Tan', 'M', 'MALAYSIA'),
('Ms', 'Noor Qamarina', 'Mohd Noor', 'F', 'MALAYSIA'),
('Mr', 'Khairol Amin', 'Mohd Salleh', 'M', 'MALAYSIA'),
('Mrs', 'Khadijah', 'Chamili', 'F', 'MALAYSIA'),
('Mr.', 'Mohd Khidhir', 'Eddy Yusrizal', 'M', 'MALAYSIA'),
('Mr', 'Kok Cheng', 'Lim', 'M', 'MALAYSIA'),
('Assistant Professor', 'Madihah', 'S. Abd. Aziz', 'F', 'MALAYSIA'),
('Dr', 'Marini', 'Othman', 'F', 'MALAYSIA'),
('Miss', 'Maryam Jamilah', 'Asha''ari', 'F', 'MALAYSIA'),
('Ms', 'maryam', 'Altalhi', 'M', 'Ø§Ù„Ù…Ù…Ù„ÙƒØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©'),
('Ms', 'Mastuti', 'Puspitasari', 'F', 'INDONESIA'),
('Ms', 'Mastuti', 'Puspitasari', 'F', 'INDONESIA'),
('Dr', 'Mazeyanti', 'Mohd Ariffin', 'F', 'MALAYSIA'),
('Mr', 'Md Nabil', 'Zawawi', 'M', 'MALAYSIA'),
('Mr.', 'SOHRAB', 'KHAN', 'M', 'MALAYSIA'),
('Assoc. Prof. Dr.', 'Mira', 'Kartiwi', 'F', 'MALAYSIA'),
('Mr', 'Mishal', 'Almazrooie', 'M', 'MALAYSIA'),
('Ms', 'Mimi Liza', 'Abdul Majid', 'F', 'MALAYSIA'),
('Dr.', 'Moamin', 'Mahmoud', 'M', 'MALAYSIA'),
('Dr.', 'Moamin', 'Mahmoud', 'M', 'MALAYSIA'),
('Miss', 'Nor Nashrah', 'Azmi', 'F', 'MALAYSIA'),
('Dr', 'Noor Azizah', 'Mohamadali', 'F', 'MALAYSIA'),
('Dr', 'Nazrita', 'Ibrahim', 'F', 'MALAYSIA'),
('Dr', 'Nilam Nur', 'Amir Sjarif', 'F', 'MALAYSIA'),
('Mrs', 'Noor Hafizah', 'Hassan', 'F', 'MALAYSIA'),
('Mr', 'Noraimi', 'Shafie', 'M', 'MALAYSIA'),
('MS', 'NORIHA', 'ADZAHA', 'F', 'MALAYSIA'),
('MRS', 'NORMALA', 'RAHIM', 'F', 'MALAYSIA'),
('Dr', 'Nurazean', 'Maarop', 'F', 'MALAYSIA'),
('Dr', 'Nurazean', 'Maarop', 'F', 'MALAYSIA'),
('Dr', 'Nurul Amelina', 'Nasharuddin', 'F', 'MALAYSIA'),
('Mr', 'Rahmat', 'Ilahi', 'M', 'MALAYSIA'),
('Mrs', 'Rajermani', 'Thinakaran', 'F', 'MALAYSIA'),
('Mr', 'Redza', 'Zainudin', 'M', 'MALAYSIA'),
('-', 'Rhun Ming', 'Teo', 'M', 'MALAYSIA'),
('Dr.', 'Rohayanti', 'Hassan', 'F', 'MALAYSIA'),
('Prof.', 'Salina', 'Daud', 'F', 'MALAYSIA'),
('Assoc. Prof. Dr.', 'Salman', 'Yussof', 'M', 'MALAYSIA'),
('Assoc. Prof. Dr.', 'Salman', 'Yussof', 'M', 'MALAYSIA'),
('Assoc Prof Dr', 'Salwani', 'Mohd Daud', 'M', 'MALAYSIA'),
('Mr.', 'Saufi', 'Bukhari', 'M', 'MALAYSIA'),
('Dr', 'Hitham', 'Alhussian', 'M', 'MALAYSIA'),
('Mrs', 'Siti Husna', 'Abdul Rahman', 'F', 'MALAYSIA'),
('Dr', 'Suhaimi', 'Ab Rahman', 'M', 'MALAYSIA'),
('Dr', 'SARASWATHY ', 'SHAMINI', 'F', 'MALAYSIA'),
('Mr', 'Jagatheesan', 'Kunasaikaran', 'M', 'MALAYSIA'),
('Dr', 'Sulfeeza', 'Mohd Drus', 'F', 'MALAYSIA'),
('Dr', 'Suraya', 'Ya''acob', 'F', 'MALAYSIA'),
('Mr', 'Surizal', 'Nazeri', 'M', 'MALAYSIA '),
('En', 'Mohamad', 'Razali', 'M', 'MALAYSIA'),
('Mr', 'Wan Azlan ', 'Wan Hassan', 'M', 'MALAYSIA'),
('Mrs', 'Wan Nooraishya', 'Wan Ahmad', 'F', 'MALAYSIA'),
('Hoo', 'Yong Leng', 'Hoo', 'M', 'MALAYSIA'),
('Mr', 'Yousif', 'AlRaheem', 'M', 'MALAYSIA'),
('Ms', 'Zailani', 'Ibrahim', 'F', 'MALAYSIA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
