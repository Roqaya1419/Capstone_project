-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 05:35 PM
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
-- Database: `al-ahsaa_heritage_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `deal_table`
--

CREATE TABLE `deal_table` (
  `Provider_ID` int(250) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Provider_Name` varchar(100) NOT NULL,
  `Provider_Email` varchar(100) NOT NULL,
  `Commercial_Registration_Number` int(10) NOT NULL,
  `Expiration_CRN` date NOT NULL,
  `Type_of_Ticket` varchar(100) NOT NULL,
  `Deal_Description` varchar(100) NOT NULL,
  `Total_Ticket` int(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Ticket_Name` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `Ticket_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal_table`
--

INSERT INTO `deal_table` (`Provider_ID`, `username`, `Provider_Name`, `Provider_Email`, `Commercial_Registration_Number`, `Expiration_CRN`, `Type_of_Ticket`, `Deal_Description`, `Total_Ticket`, `location`, `Ticket_Name`, `Price`, `image`, `Ticket_Date`) VALUES
(1, 'Roqaya', 'Roqaya Hussain', 'FBburgerkSA@gmail.com', 2147483647, '2024-06-21', 'Restaurant', 'Buy one, get one for 10SR', 25, 'Dhahran road', 'F&B Burger', 26, 'o1.jpeg', '2021-06-24'),
(2, 'Marwah_21', 'Marwah saad', 'Maestro21@gmail.com', 1010168969, '2025-05-24', 'Restaurant', '3 large pizza for 75SR', 30, 'AlMobaraz', 'Maestro', 78, 'o2.jpeg', '2022-09-13'),
(3, 'Marwah_21', 'Marwah saad', 'Chix_crazy@gmail.com', 2147483647, '2033-11-04', 'Restaurant', 'Twins Burger+ Fries for 19 SR only', 35, 'AlHofof- 60 Road', 'Chix go crazy', 19, 'o3.jpeg', '2024-06-14'),
(4, 'Roqaya', 'Batool', 'Batool@gmail.com', 2147483647, '2028-06-30', 'Restaurant', '50% discount', 8, 'almansora', 'Dominos', 20, 'o2.jpeg', '2021-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `Booking_ID` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Number_of_Tickets_Purchased` int(200) NOT NULL,
  `Credit_Card_Number` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Expiration_month` int(2) NOT NULL,
  `Expiration_year` int(4) NOT NULL,
  `CVV` int(3) NOT NULL,
  `Price` int(10) NOT NULL,
  `Provider_ID` int(4) DEFAULT NULL,
  `System_ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`Booking_ID`, `username`, `Number_of_Tickets_Purchased`, `Credit_Card_Number`, `First_Name`, `Last_Name`, `Expiration_month`, `Expiration_year`, `CVV`, `Price`, `Provider_ID`, `System_ID`) VALUES
(1, 'Roqaya', 3, 2147483647, 'Roqaya', 'Alwabari', 3, 2022, 323, 30, NULL, 1),
(2, 'Roqaya', 3, 2147483647, 'shahad', 'Alwabari', 2, 2022, 212, 702, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_tickets_table`
--

CREATE TABLE `system_tickets_table` (
  `System_ID` int(4) NOT NULL,
  `Type_of_Ticket` varchar(100) NOT NULL,
  `Ticket_Name` varchar(100) NOT NULL,
  `Total_Ticket` int(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ticket_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_tickets_table`
--

INSERT INTO `system_tickets_table` (`System_ID`, `Type_of_Ticket`, `Ticket_Name`, `Total_Ticket`, `location`, `Price`, `Ticket_Date`) VALUES
(1, 'Events', 'Flowers Carnaval', 50, 'Jawatha Park', 10, '2021-05-01'),
(2, 'Events', '\r\nAnber 9', 100, 'Alrashed town square', 100, '2021-06-10'),
(3, 'Place', 'Jawatha Park', 80, 'AlKlabiah', 10, '2021-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `email`, `password`) VALUES
(5, 'Ahmed', 'Ahmed_75@gmail.com', '3210'),
(3, 'Fatema', 'Fatema_77@gmail.com', 'Fa#567'),
(4, 'Khaled', 'Khaled_143@hotmail.com', 'Kh432'),
(2, 'Marwah_21', 'Marwah_912@gmail.com', '098'),
(1, 'Roqaya', 'roqaya-1419@hotmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deal_table`
--
ALTER TABLE `deal_table`
  ADD PRIMARY KEY (`Provider_ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `Price` (`System_ID`),
  ADD KEY `Provider_ID` (`Provider_ID`);

--
-- Indexes for table `system_tickets_table`
--
ALTER TABLE `system_tickets_table`
  ADD PRIMARY KEY (`System_ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deal_table`
--
ALTER TABLE `deal_table`
  MODIFY `Provider_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `Booking_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_tickets_table`
--
ALTER TABLE `system_tickets_table`
  MODIFY `System_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deal_table`
--
ALTER TABLE `deal_table`
  ADD CONSTRAINT `deal_table_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD CONSTRAINT `payment_table_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_table_ibfk_2` FOREIGN KEY (`Provider_ID`) REFERENCES `deal_table` (`Provider_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_table_ibfk_3` FOREIGN KEY (`System_ID`) REFERENCES `system_tickets_table` (`System_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
