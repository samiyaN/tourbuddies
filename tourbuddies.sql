-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourbuddies`
--

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `orgranizer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `orgranizer_id`, `name`, `mobile`) VALUES
(1, 21, 'Foysal', 1620321122),
(2, 2, 'Mahfuz', 1620321157),
(3, 8, 'Ahsan', 1620321134),
(4, 6, 'Foysal', 1620321157),
(5, 13, 'riaz', 1620321133),
(6, 16, 'shafiul', 1620321157),
(7, 17, 'shorif', 1620321134),
(8, 13, 'amin', 1620321133),
(9, 2, 'nahid', 1620321122),
(10, 6, 'mithu', 1620321134),
(11, 13, 'test', 34343434),
(12, 16, 'man', 123),
(13, 16, 'new manger', 154415),
(14, 16, 'tes', 2323),
(15, 17, 'new mine', 23232),
(18, 16, 'dzfcsda', 0),
(19, 16, 'testsessss', 0),
(20, 16, 'brand new', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `date` date NOT NULL,
  `duration` int(3) NOT NULL,
  `maxBooking` int(3) NOT NULL,
  `booked` tinyint(1) NOT NULL,
  `isFull` tinyint(1) NOT NULL,
  `picture` varchar(64) NOT NULL,
  `organizerId` int(3) NOT NULL,
  `Rating` int(3) NOT NULL,
  `managerID` int(3) NOT NULL,
  `managerRating` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `place`, `cost`, `date`, `duration`, `maxBooking`, `booked`, `isFull`, `picture`, `organizerId`, `Rating`, `managerID`, `managerRating`) VALUES
(1, 'Shunamganj', 5000, '2020-05-25', 5, 10, 0, 0, '', 16, 0, 6, 0),
(2, 'Cox\'s Bazar', 6000, '2020-05-20', 4, 10, 0, 0, '', 13, 0, 8, 0),
(3, 'Bandarban', 10000, '2020-05-21', 7, 15, 10, 0, '', 2, 0, 2, 0),
(4, 'volaganj', 300, '2020-05-20', 2, 18, 18, 1, '', 13, 0, 5, 0),
(5, 'channdpur', 1500, '2020-05-29', 1, 20, 14, 0, '', 8, 4, 3, 4),
(6, 'Bichanakandi', 3000, '2020-05-20', 3, 15, 15, 1, '', 6, 5, 10, 5),
(7, 'Napittachora', 2000, '2020-05-30', 2, 15, 10, 0, '', 17, 3, 7, 3),
(8, 'Shitakundo', 4000, '2020-05-26', 1, 20, 6, 0, '', 17, 4, 7, 3),
(9, 'Srimongol', 5000, '2020-05-24', 3, 10, 10, 1, '', 2, 4, 9, 2),
(10, 'Sajek', 8000, '2020-05-26', 7, 15, 9, 0, '', 21, 3, 1, 4),
(11, 'Bandarban', 1200, '2020-05-13', 3, 20, 10, 0, '', 16, 4, 13, 3),
(12, 'Ut voluptatem rerum ', 8403, '1993-06-01', 5, 45, 0, 0, '', 16, 0, 12, 0),
(13, 'Saudi Arabia ', 1800, '2020-05-20', 3, 14, 0, 0, '', 16, 0, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tour_user`
--

CREATE TABLE `tour_user` (
  `id` int(32) NOT NULL,
  `userId` int(32) NOT NULL,
  `tourId` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_user`
--

INSERT INTO `tour_user` (`id`, `userId`, `tourId`) VALUES
(1, 1, 3),
(2, 1, 12),
(3, 1, 12),
(4, 1, 11),
(5, 1, 12),
(6, 1, 4),
(7, 50, 11),
(8, 50, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nid` int(15) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `nid`, `phone`, `gender`, `role`) VALUES
(1, 'samiya', 'nasir', 'samiya', '123', 'samiya@gmail.com', 1234567, 1718811528, 'female', 'admin'),
(2, 'Jobayer', 'Abedin', 'Jobayer', '123', 'jobayer@gmail.com', 121232343, 1718811528, 'male', 'eventplanner'),
(3, 'Aysha', 'Akter', 'aysha', '123', 'aysha@gmail.com', 2132434, 1718811528, 'female', 'traveller'),
(4, 'sadiya', 'nasir', 'sadiya', '1233', 'sadiya@gmail.com', 121454, 1718812345, 'female', 'traveller'),
(5, 'sahira', 'nasir', 'sahira', '1234', 'sahira@gmail.com', 2315465, 1717612345, 'female', 'traveller'),
(6, 'rashedul', 'islam', 'rashedul', '123', 'rashedul@gmail.com', 1232345, 1718811528, 'male', 'eventplanner'),
(7, 'Zaima', 'Zakir', 'zaima', '12434', 'zaima@gmail.com', 1234567, 1715371556, 'female', 'traveller'),
(8, 'Sumaiya', 'nasir', 'sumaiya', '1233', 'sumaiya@gmail.com', 1232345, 1718811528, 'female', 'eventplanner'),
(9, 'Faiza ', 'Islam', 'faiza', '1232', 'faiza@gmail.com', 21346787, 1715371556, 'female', 'traveller'),
(10, 'Anisha ', 'Haque', 'anisha', '213234', 'anisha@gmail.com', 12332243, 1718811654, 'female', 'eventplanner'),
(11, 'Ismam ', 'haque', 'ismam', '1221', 'ismam@gmail.com', 12343, 1715371234, 'male', 'traveller'),
(12, 'Samiy', 'aa', 'planner', '0273b494d66af726729c3817b9e194e3', 'planner@pla.com', 343443, 342424, 'Female', 'eventPlanner'),
(13, 'Aliful', 'Haque', 'alif', '1233', 'alif@gmail.com', 12332243, 1718811528, 'male', 'eventplanner'),
(14, 'Nila', 'Ahammed', 'nila', '234', 'nila@gmail.com', 32546754, 1715371556, 'female', 'traveller'),
(15, 'Israt', 'Jahan', 'israt', '123', 'israt@gmail.com', 123323468, 1718812323, 'female', 'traveller'),
(16, 'Dip', 'Alam', 'dip', '123', 'dip@gmail.com', 124354, 1718811528, 'male', 'eventplanner'),
(17, 'redad', 'hassan', 'redad', '1233', 'redad@gmail.com', 1232345, 1717612375, 'male', 'eventplanner'),
(18, 'Ibtasim', 'bohordar', 'ibtasim', '1234', 'ibtasim@gmail.com', 1234, 1715371556, 'male', 'traveller'),
(19, 'Nafiz', 'Ahmed', 'Nafiz', '3243', 'nafiz@gmail.com', 4326587, 1715371556, 'male', 'traveller'),
(20, 'saad', 'ahmed', 'saad', '24344', 'saad@gmail.com', 12332243, 1718811528, 'male', 'traveller'),
(21, 'Zahid', 'khan', 'zahid', '1233', 'zahid@gmail.com', 12332243, 1718811528, 'male', 'eventplanner'),
(22, 'kazi', 'rahiv', 'rahiv', '23234', 'rahiv@gmail.com', 32435, 1715371556, 'male', 'traveller'),
(26, 'hello', '5jlMIFAbWs', '6WLgBUmLAc', 'Fugiat consequuntur', 'nasoqar@mailinator.net', 926420, 2342, 'Male', 'Traveller'),
(27, 'new user', 'new ', 'newuser', '123', 'newuser@fmial.coim', 23232, 154442000, 'Male', 'Traveller'),
(28, 'new user', 'new ', 'newuser', 'Fugiat consequuntur', 'newuser@fmial.coim', 23232, 165554, 'Male', 'Traveller'),
(29, 'Clinton', 'Rose', 'xudagupiro', 'Pa$$w0rd!', 'relazotuhi@mailinator.net', 44, 70, 'Male', 'eventPlanner'),
(30, 'Grady', 'Mathis', 'gunidipu', 'Pa$$w0rd!', 'fuqo@mailinator.net', 97, 73, 'Female', 'Traveller'),
(31, 'Gloria', 'Foreman', 'vupehehox', 'Pa$$w0rd!', 'hyfewaqo@mailinator.net', 87, 89, 'Male', 'eventPlanner'),
(32, 'dfsds', 'sdfsdf', 'plan', '123', 'sadfjsdoi@gmail.com', 3434, 23232, 'Male', 'eventPlanner'),
(33, 'gUfTrmNTS3', '7X3Bn1aa7p', 'ZxYpBkZxRy', 'Fugiat consequuntur', 'nasoqar@mailinator.net', 322112, 196254, 'Male', 'Traveller'),
(34, 'gUfTrmNTS3', '7X3Bn1aa7p', 'ZxYpBkZxRy', 'Fugiat consequuntur', 'nasoqar@mailinator.net', 322112, 196254, 'Male', 'Traveller'),
(35, 'gUfTrmNTS3', '7X3Bn1aa7p', 'ZxYpBkZxRy', 'Fugiat consequuntur', 'nasoqar@mailinator.net', 322112, 196254, 'Male', 'Traveller'),
(46, 'test2', '7XA6zylJ00', 'test2', 'test2', 'nasoqar@mailinator.net', 896025, 43316, 'Male', 'Traveller'),
(47, 'test2', '7XA6zylJ00', 'test2', 'test2', 'nasoqar@mailinator.net', 896025, 43316, 'Male', 'Traveller'),
(48, 'test2', '9ee7Yi4WQX', 'test3', 'test3', 'nasoqar@mailinator.net', 483678, 897654, 'Male', 'traveller'),
(50, 'test2', 'gzrZ69N4Xh', 'test4', 'test4', 'nasoqar@mailinator.net', 794195, 341843, 'Male', 'traveller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orgranizer_id` (`orgranizer_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizerId` (`organizerId`),
  ADD KEY `managerID` (`managerID`);

--
-- Indexes for table `tour_user`
--
ALTER TABLE `tour_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourId` (`tourId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tour_user`
--
ALTER TABLE `tour_user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`orgranizer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`organizerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tours_ibfk_2` FOREIGN KEY (`managerID`) REFERENCES `managers` (`id`);

--
-- Constraints for table `tour_user`
--
ALTER TABLE `tour_user`
  ADD CONSTRAINT `tour_user_ibfk_1` FOREIGN KEY (`tourId`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `tour_user_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
