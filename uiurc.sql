-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 10:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiurc`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `date`, `location`, `image`, `link`) VALUES
(1, 'Meet and Greet', 'The most awaited Phase 2 of Spring 2025 Trimester’s Recruitment Session is finally back on track! This time it isn’t just a regular meet-up, it’s a special alumni reunion + interactive meet-&-greet designed to inspire, connect, and guide!', '2025-08-02', 'Room 631 & 632', '/assets/img/Events/Meet&Greet.jpg', '/MeetAndGreet/index.php'),
(2, 'Majlish-e-Ifter', 'The UIU Robotics Club cordially invites you to Majlish-e-Iftar, a special evening of togetherness, reflection, and celebration of the holy month of Ramadan! 🕌✨', '2025-03-17', 'UIU Cafeteria', '/assets/img/Events/Iftar.jpg', '/Iftar/index.php'),
(3, 'UIU CSE Fest', 'Join us for the UIU CSE Fest, a two-day celebration of technology and innovation, featuring workshops, competitions, and networking opportunities with industry leaders and fellow tech enthusiasts.', '2025-06-17', 'United International University', '/assets/img/Events/CSE_fest.jpg', 'https://csefest.uiu.ac.bd/'),
(4, 'Rush Hour', 'Join us for Rush Hour, an exciting event filled with tech talks, workshops, and networking opportunities, designed to inspire and empower the next generation of innovators and leaders in technology.', '2024-12-04', 'UIU Gallery', '/assets/img/Events/Rush_hour.jpg', '/RushHour/index.php'),
(5, 'Research 101', 'Join us for Research 101, a comprehensive workshop designed to introduce students to the fundamentals of research methodologies, data analysis techniques, and effective presentation skills, empowering them to excel in their academic pursuits.', '2024-10-09', 'Room 126', '/assets/img/Events/Research 101.jpg', '/Research101/index.php'),
(6, 'TechTrove', 'In today''s fast-paced world, robotics is revolutionizing industries and shaping our future. Whether it''s healthcare, manufacturing, or everyday life, understanding robotics is essential for staying ahead. Robotics equips you with problem-solving skills, creativity, and technical expertise.', '2024-07-06', 'Lobby Area', '/assets/img/Events/Techtrove.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `bkash_ref_no` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
