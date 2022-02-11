-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `News_heading` varchar(100) NOT NULL,
  `news_description` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`News_heading`, `news_description`, `category`) VALUES
('CLOSING GROUND FOR MAINTENANCE', 'All Students are informed that the football ground of the premises are being closed for the maintenance work !! No student is allowed to move and play in the ground !!', 'football'),
('CSE PLACEMENTS', '* Highest package this year is 1.5 crores/annum.... \r\n\r\n   ..... * Average package this year is 55 lacs/annum \r\n\r\n    ........ * Lowest package this year is 30 lacs/annum', 'placements'),
('ECE PLACEMENTS', 'highest package this year is 80 lacs/annum\r\naverage package this year is 45 lacs/annum\r\nlowest package this year is  25 lacs/annum', 'placements'),
('GRADUATION CEREMONY ', 'Graduation ceremony for Computer Science students to be held on 29th Nov.!!', 'events'),
('GSOC INTERNSHIP', 'Interested students may apply form the on-campus GSOC Internship from 1st March to 12th of March !!', 'internship'),
('IIIT COMMITTE', '* Organising the events for \"Enhancing the skills\" this winter break for the overall development of the individual', 'events'),
('INTERVIEW OF TECH GIANTS', ' The interview rounds for the Tech Companies like Microsoft, Google, Apple will be conducted from 1st April to 5th April !! The Selection will comprise of 6 rounds including coding rounds !!', 'placements'),
('LAST YEAR INTERNSHIP', 'Companies are Google , Microsoft, Samsung !!', 'internship'),
('NOTIFICATION', ' Students who wants to practice in nets may get the cricket kit from the sport complex building !!', 'cricket'),
('Online Semester', 'Online semester for 2nd year will be commencing from 1st January 2022 !! \r\n * All students are advised to get vaccinated as early as possible *', 'academics'),
('PRIZE MONEY', 'Winning Team will get the prize money of 9000 Rs and defending team will get 5000 Rs !!', 'football'),
('PRIZE MONEY FOR TOURNAMENT', 'Prize money for the upcoming tournament will be 10000 Rs for the winning team !! Defending team will get 7000 Rs !!', 'cricket'),
('PROJECT FOR CSE ECE STUDENTS', 'On-Campus project for CSE and ECE students for the 5 credits is going to organize in the Winter Break from 11th December to 19th December !!', 'academics'),
('Related to CSE', 'The institute is offering a new course of Hacking this upcoming semester for undergraduate students,\r\n* Students from any discipline may opt for this course  ', 'academics'),
('Related to ECE', 'There will be a new course for computer organisation and architecture this upcoming smemester ! ', 'academics'),
('RESULTS', '* Results for this year undergraduate students will be announced on 31st NOVEMBER !', 'academics'),
('Skill Seminar', 'There will be a skill boosting seminar for 2nd year students on 29th November..!! Interested students may \r\nregister for the same.', 'events'),
('Students Placed', 'Google -- 23.\r\nMeta -- 21.\r\nInfosys-- 22.\r\nIsro -- 35.\r\nOracle -- 20.', 'placements'),
('SUMMER INTERNSHIPS', 'On-Campus Summer Internships for the 3rd year students will be starting from 20th April 2022.. !!', 'internship'),
('TEAM SELECTION', 'Selection of the members for IIIT Jabalpur Football team will be from 21st November !! No Eligibilty criteria', 'football'),
('TOURNAMENT', 'Inter IIIT Football Tournament will be going to start from 30th November to 11th December !! \r\n* 4th year students are not allowed to participate in the tournament *', 'football'),
('TRAINING CAMP', 'Cricket training camp for the Undergraduate students will be held from 11th December to 15th December !!', 'cricket'),
('UPCOMING CODING COMPETITION', 'Codechef long challenge is coming in the upcoming month.', 'events'),
('UPCOMING EVENTS', 'The Inter -IIIT Cricket match will be played between IIIT JABALPUR and IIIT GWALIOR on 31st NOV. ', 'cricket'),
('WINNER CEREMONY', 'The winner ceremony for the last week\'s Cricket match between IIIT Jabalpur and NIT Jaipur will be held on 21st November !! ', 'cricket'),
('WINTER INTERNSHIPS', 'Students in their 4th semester and 5th semester may opt for the On-Campus Internships starting from 31st November !', 'internship'),
('yyyyy', 'ttttttt', 'academics');

-- --------------------------------------------------------

--
-- Table structure for table `login_check`
--

CREATE TABLE `login_check` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ROLL_NO` varchar(11) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `admin` tinyint(1) DEFAULT 0,
  `authenticate` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_check`
--

INSERT INTO `login_check` (`Firstname`, `Lastname`, `Email`, `ROLL_NO`, `Branch`, `admin`, `authenticate`) VALUES
('Devansh', 'Khandelwal', '20bcs071@iiitdmj.ac.in', '71', 'CSE', 0, 1),
('ryan ', 'panwar', '20bcs086@iiitdmj.ac.in', '86', 'CSE', 0, 1),
('ABC', 'DHJ', '20bcs098@iiitdmj.ac.in', '98', 'CSE', 0, 1),
('Sandeep', 'Panwar', '20bcs099@iiitdmj.ac.in', '99', 'CSE', 0, 1),
('rajesh', 'Panwar', '20bcs10000000000@iiitdmj.ac.in', '1000000000', 'CSE', 0, 1),
('man', 'man', '20bcs11111@iiitdmj.ac.in', '111111', 'CSE', 0, 1),
('bhupender', 'Panwar', '20bcs125@iiitdmj.ac.in', '125', 'CSE', 0, 1),
('mohanish', 'chavan', '20bcs133@iiitdmj.ac.in', '133', 'CSE', 0, 1),
('paras', 'gami', '20bcs151@iiitdmj.ac.in', '100', 'CSE', 0, 1),
('Rahul', 'Panwar', '20bcs171@iiitdmj.ac.in', '171', 'CSE', 1, 1),
('Dinesh', 'Bhateshwar', '20bcs172@iiitdmj.ac.in', '172', 'CSE', 0, 1),
('Rajat', 'Goyal', '20bcs173@iiitdmj.ac.in', '173', 'CSE', 0, 1),
('Ramesh', 'Panwar', '20bcs175@iiitdmj.ac.in', '1', 'CSE', 0, 1),
('rajkaran', 'singh', '20bcs176@iiitdmj.ac.in', '176', 'CSE', 0, 1),
('praveen', 'singh', '20bcs176@iiitdmj.ac.in', '90', 'CSE', 0, 1),
('xx', 'yy', '20bcs555@iiitdmj.ac.in', '555', 'CSE', 0, 1),
('CC ', 'FF', '20bcs567@iiitdmj.ac.in', '567', 'CSE', 0, 1),
('Human5 ', 'Being5', '20bcs577@iiitdmj.ac.in', '577', 'CSE', 0, 0),
('AA', 'BB', '20bcs666@iiitdmj.ac.in', '20BCS125', 'CSE', 0, 1),
('Rkaran', 'Chabra', '20bcs777@iiitdmj.ac.in', '777', 'CSE', 0, 0),
('Sonya', 'Panwar', '20bcs888@iiitdmj.ac.in', '888', 'CSE', 0, 1),
('AA', 'DD', '20bcs999@iiitdmj.ac.in', '999', 'CSE', 0, 1),
('Rajat', 'Goyal', 'rajatgoyal376@gmail.com', '175', 'CSE', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`News_heading`);

--
-- Indexes for table `login_check`
--
ALTER TABLE `login_check`
  ADD PRIMARY KEY (`Email`,`ROLL_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
