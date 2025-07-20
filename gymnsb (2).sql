-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 01:44 PM
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
-- Database: `gymnsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `profile_pic` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `name`, `gender`, `contact`, `address`, `email`, `profile_pic`, `date_created`, `code`, `status`) VALUES
(2, 'qayzer', 'f2d0ff370380124029c2b807a924156c', 'ahmed mohammed omer', 'Male', '633048757', 'xawaadle', 'ahmedmohammedomer304@gmail.com', '1715628900_85f67c0f-d0c8-47fa-8ad9-d13849fb5b69.jfif', '2024-05-13 12:35:58', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `message`, `date`) VALUES
(7, 'This is to announce that our GYM will remain close for 51 days due to COVID-19.', '2020-03-30'),
(8, 'Opening of GYM Halls and Clubs are not fixed yet. Stay tuned for more updates!!', '2020-04-03'),
(9, 'Renovation Going On...', '2020-04-04'),
(10, 'This is a demo announcement from admin', '2022-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `curr_date` text NOT NULL,
  `curr_time` text NOT NULL,
  `present` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `amount`, `quantity`, `vendor`, `description`, `address`, `contact`, `date`) VALUES
(3, 'Treadmill', 909, 4, 'DnS', 'Edited Description', '7 Cedarstone Drive', '8521479633', '2019-03-07'),
(4, 'Vertical Press Machine', 949, 3, 'SS Industries', 'For Biceps And Triceps, Upper Back, Chest', '7 Cedarstone Drive', '1245558980', '2020-03-19'),
(5, 'Dumbell - Adjustable', 102, 26, 'Uptown Suppliers', 'Material: Steel, Rubber Plastic, Concrete', '7 Cedarstone Drive', '9875552100', '2020-03-29'),
(6, 'Multi Bench Press Machine', 219, 2, 'DnS Suppliers', '6 In 1 Multi Bench With Incline, Flat, Decline Ben', '7 Cedarstone Drive', '7410001010', '2020-04-05'),
(7, 'Demo', 265, 5, 'Demo', 'This is a demo test.', '77 Demo Lane', '8524445452', '2020-04-03'),
(10, 'RowWarrior Fitness Rowing Mach', 5616, 12, 'Roww Stores', 'HIGHEST QUALITY: This best of class air rowing mac', '52 Weekley Street', '7412585555', '2021-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `category`, `amount`, `description`, `expense_date`) VALUES
(1, 'Utilities', 500.00, 'Electricity bill for April 2025', '2025-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `gym_schedule`
--

CREATE TABLE `gym_schedule` (
  `id` int(11) NOT NULL,
  `day_of_week` enum('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday') NOT NULL,
  `workout_type` varchar(100) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date_taken` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `repayment_terms` text DEFAULT NULL,
  `status` enum('Pending','Paid') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `staff_id`, `amount`, `date_taken`, `due_date`, `repayment_terms`, `status`) VALUES
(1, 3, 1000.00, '2025-04-15', '2025-06-15', 'To be repaid in 2 months', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dor` date NOT NULL,
  `services` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `paid_date` date NOT NULL,
  `p_year` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `attendance_count` int(100) NOT NULL,
  `ini_weight` int(100) NOT NULL DEFAULT 0,
  `curr_weight` int(100) NOT NULL DEFAULT 0,
  `ini_bodytype` varchar(50) NOT NULL,
  `curr_bodytype` varchar(50) NOT NULL,
  `progress_date` date NOT NULL,
  `reminder` int(11) NOT NULL DEFAULT 0,
  `profile_pic` text NOT NULL,
  `code` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_id`, `fullname`, `username`, `email`, `password`, `gender`, `dor`, `services`, `amount`, `paid_date`, `p_year`, `plan`, `address`, `contact`, `status`, `attendance_count`, `ini_weight`, `curr_weight`, `ini_bodytype`, `curr_bodytype`, `progress_date`, `reminder`, `profile_pic`, `code`) VALUES
(6, 'ahmed qayzer', 'qayzer', 'axmedmoha304@gmail.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2019-12-25', 'Fitness', 165, '2022-06-02', 2021, '3', '64 Mulberry Lane', '8545878545', 'Active', 4, 54, 62, 'Slim', 'Buffed', '2020-04-22', 0, '1715628900_85f67c0f-d0c8-47fa-8ad9-d13849fb5b69.jfif', 0),
(8, 'Charles Anderson', 'charles', 'charles@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2020-01-02', 'Fitness', 55, '2020-04-01', 2020, '3', '99 Heron Way', '8520258520', 'Active', 14, 92, 85, 'Fat', 'Bulked', '2020-04-22', 1, '', 0),
(11, 'Justin Schexnayder', 'justin', 'justin@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2019-01-25', 'Cardio', 35, '2020-03-31', 2020, '3', '14 Blair Court', '7535752220', 'Active', 9, 0, 0, '', '', '0000-00-00', 0, '', 0),
(14, 'Ryan Crowl', 'ryan', 'ryan@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2019-07-13', 'Fitness', 55, '2020-04-02', 2020, '12', '34 Twin Oaks Drive', '1578880010', 'Active', 13, 59, 63, 'Slim', 'Slim', '2020-04-23', 0, '', 0),
(16, 'TrialsChanged', 'trials', 'trials@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '2020-04-01', 'Fitness', 0, '2021-06-12', 2021, '0', '4 Demo Lane', '741111110', 'Expired', 26, 50, 61, 'Slim', 'Slim', '2021-06-11', 1, '', 0),
(17, 'Karen McGray', 'karen', 'karen@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '2020-04-02', 'Cardio', 120, '2022-05-31', 2020, '3', '23 Rubaiyat Road', '7441002540', 'Active', 12, 0, 0, '', '', '0000-00-00', 0, '', 0),
(18, 'Jeanne Pratt', 'prattj', 'prattj@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '2020-04-04', 'Fitness', 55, '2021-06-11', 2021, '1', '86 Hilltop Street', '7854445410', 'Active', 11, 0, 0, '', '', '0000-00-00', 0, '', 0),
(19, 'George Fann', 'george', 'george@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2019-04-02', 'Fitness', 55, '2021-06-11', 2021, '1', '43 Oak Drive', '0258987850', 'Active', 22, 0, 0, '', '', '0000-00-00', 1, '', 0),
(20, 'Wendy Scott', 'wendy', 'wendy@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '2020-03-21', 'Fitness', 55, '2021-06-11', 2021, '1', '24 Cody Ridge Road', '8547896520', 'Active', 18, 0, 0, '', '', '0000-00-00', 0, '', 0),
(21, 'Patrick Wilson', 'patrick', 'patrick@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2020-04-02', 'Cardio', 120, '2022-06-01', 2021, '3', '24 Cody Ridge Road', '9874568520', 'Active', 11, 0, 0, '', '', '0000-00-00', 0, '', 0),
(22, 'Tommy Marks', 'tommy', 'tommy@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2020-04-01', 'Fitness', 55, '2020-04-05', 2020, '3', '22 Franklin Street', '8529997500', 'Active', 7, 0, 0, '', '', '0000-00-00', 0, '', 0),
(23, 'Keith Martin', 'martin', 'martin@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '2020-04-02', 'Cardio', 120, '2022-06-02', 2021, '3', '89 Smithfield Avenue', '7895456250', 'Active', 24, 51, 68, 'Slim', 'Muscular', '2022-06-02', 0, '', 0),
(24, 'Richard G Langston', 'richard', 'richard@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '1990-02-02', 'Sauna', 420, '2022-05-31', 2022, '12', '541  Raoul Wallenber', '7012545580', 'Active', 1, 0, 0, '', '', '0000-00-00', 0, '', 0),
(25, 'Raymond Ledesma', 'raymond', 'raymond@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '1986-02-19', 'Cardio', 480, '2022-06-02', 2022, '12', '2954  Robinson Lane', '4785450002', 'Active', 2, 0, 0, '', '', '0000-00-00', 0, '', 0),
(26, 'Mattie F. Maher', 'mattie', 'mattie@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '1995-05-18', 'Sauna', 420, '2022-06-01', 2022, '12', '73 Settlers Lane', '9995554444', 'Active', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(27, 'Justin C. Lusk', 'justin', 'justin@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Male', '1995-12-12', 'Cardio', 40, '2022-05-30', 2022, '1', '45 Bell Street', '3545785540', 'Active', 1, 0, 0, '', '', '0000-00-00', 0, '', 0),
(29, 'Kathy J. Glennon', 'kathy', 'kathy@example.com', 'cac29d7a34687eb14b37068ee4708e7b', 'Female', '2022-06-02', 'Fitness', 330, '2022-06-02', 0, '6', '87 Harry Place', '7896587458', 'Active', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(0, 'cumar', 'cumar', '', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2025-04-23', 'Fitness', 0, '0000-00-00', 0, '1', 'xero awr', '333', 'Pending', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(0, 'cismaan', 'cismaan', 'cismaan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2025-04-23', 'Fitness', 0, '0000-00-00', 0, '12', 'jigjiga yar', '8796769', 'Pending', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(0, 'C/risaaq Mohamed', 'saaqo', '', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2025-04-23', 'Fitness', 0, '0000-00-00', 0, '6', 'xawaadle', '4333333', 'Pending', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(0, 'vjfjhfd', 'cali', '', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2025-04-25', 'Fitness', 0, '0000-00-00', 0, '12', 'jsgdfghj', '3574876439', 'Pending', 0, 0, 0, '', '', '0000-00-00', 0, '', 0),
(0, 'hfg', 'calii', '', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2025-04-25', 'Fitness', 0, '0000-00-00', 0, '3', 'vdv', '324', 'Pending', 0, 0, 0, '', '', '0000-00-00', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `barcode` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `category`, `price`, `quantity`, `barcode`, `created_at`, `updated_at`) VALUES
(1, 'Whey Protein 5lbs', 'Premium whey protein isolate', 'Supplements', 49.99, 100, '123456789012', '2025-04-24 18:01:08', NULL),
(2, 'Weightlifting Gloves', 'Premium leather gloves', 'Apparel', 24.99, 50, '234567890123', '2025-04-24 18:01:08', NULL),
(3, 'Gym Water Bottle', '1L insulated stainless bottle', 'Accessories', 19.99, 75, '345678901234', '2025-04-24 18:01:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `name`, `charge`) VALUES
(1, 'Fitness', '55'),
(2, 'Sauna', '35'),
(3, 'Cardio', '40');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `name`, `message`, `status`, `date`, `user_id`) VALUES
(12, 'staff', 'asd', 'unread', '2020-04-16 22:39:59', 0),
(13, 'staff', 'asdasdas', 'unread', '2020-04-16 22:40:49', 0),
(14, 'staff', 'ASasA', 'unread', '2020-04-16 22:41:59', 0),
(15, 'staff', 'asdasdasd', 'unread', '2020-04-16 22:42:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `staff_id`, `amount`, `payment_date`, `description`) VALUES
(1, 2, 3000.00, '2025-05-01', 'Monthly salary for May 2025');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `sale_date` datetime DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` enum('Cash','Credit Card','Mobile Payment') DEFAULT 'Cash',
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sale_detail_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` int(10) NOT NULL,
  `profile_pic` text NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `note_type` enum('Plan','Progress','Weight Log','Other','In Progress','Pending') NOT NULL,
  `note_text` text NOT NULL,
  `weight_kg` decimal(5,2) DEFAULT NULL,
  `mood` enum('Motivated','Tired','Normal','Happy','Sad') DEFAULT 'Normal',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `note_type`, `note_text`, `weight_kg`, `mood`, `created_at`, `user_id`) VALUES
(21, 'Weight Log', 'Miisaankaygu wuxuu gaaray 79.8kg maanta, horumar fiican!', 79.80, 'Happy', '2025-04-22 11:56:26', 6),
(22, 'Progress', 'Standing Workouts For Flat Abs', NULL, 'Normal', '2025-04-22 11:56:26', 6),
(23, 'Progress', 'Triceps Buildup - 3 set', NULL, 'Normal', '2025-04-22 11:56:26', 14),
(24, 'Pending', 'Decline dumbbell bench press', NULL, 'Normal', '2025-04-22 11:56:26', 6),
(27, 'Pending', 'dddd', NULL, 'Normal', '2025-04-22 11:56:26', 0),
(28, 'Progress', 'Test 1', NULL, 'Normal', '2025-04-22 11:56:26', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_schedule`
--
ALTER TABLE `gym_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sale_detail_id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gym_schedule`
--
ALTER TABLE `gym_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sale_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`user_id`);

--
-- Constraints for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `sales_details_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
