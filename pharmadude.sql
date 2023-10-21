-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 05:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmadude`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `pid`, `quantity`) VALUES
(36, 'pranav@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(35) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `type`) VALUES
(1, 'Test', 'sugartest'),
(2, 'Product', 'sanitizer'),
(3, 'Product', 'mask'),
(4, 'Test', 'X-Ray'),
(7, 'Test', 'MRI'),
(8, 'Test', 'Antigen'),
(9, 'Test', 'Blood'),
(10, 'Product', 'Immunity Booster '),
(11, 'Product', 'Protein Powder'),
(12, 'Product', 'PPE Kit');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaintid` int(11) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `reply` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT -1,
  `priority` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaintid`, `userid`, `subject`, `description`, `datetime`, `reply`, `status`, `priority`) VALUES
(4, 'pranav@gmail.com', 'just', 'no', '2022-01-09 10:48:06', 'Get A Screenshot', 1, 'med'),
(5, 'pranav@gmail.com', 'Login Error', 'I Cannot login after signing out for a long time', '2022-01-16 22:18:43', NULL, -1, 'hig');

-- --------------------------------------------------------

--
-- Table structure for table `cuser`
--

CREATE TABLE `cuser` (
  `userid` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(25) NOT NULL,
  `distid` int(11) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cuser`
--

INSERT INTO `cuser` (`userid`, `name`, `address`, `dob`, `gender`, `city`, `distid`, `pincode`, `profilepic`, `email`, `phone`) VALUES
(1, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '2022-01-04', 'Male', 'Thodupuzha', 4, '987654', 'person5.jpg', 'pranav@gmail.com', '9061865672');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `distid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`distid`, `dname`) VALUES
(1, 'Thiruvananthapuram'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikode'),
(12, 'Wayanad'),
(13, 'Kannur'),
(14, 'Kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `message`) VALUES
(1, 'Dominic K Paulraj', 'dominickpaulraj@gmail.com', 'Good Services'),
(2, 'Manu', 'dominickpaulraj@gmail.com', 'Nice one keep it up'),
(3, 'George', 'dominickpaulraj@gmail.com', 'Really love this'),
(4, 'Joseph', 'dominickpaulraj@gmail.com', 'Awesome Speed Delivery'),
(5, 'K Paulraj', 'dominickpaulraj@gmail.com', 'Really helped me to book tests');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `labid` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `distid` int(11) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `licenseno` varchar(50) NOT NULL,
  `profilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`labid`, `name`, `address`, `city`, `distid`, `pincode`, `email`, `phone`, `licenseno`, `profilepic`) VALUES
(1, 'Aditi Medicals', 'Vengalloor,near Smitha Hospital', 'Thodupuzha', 2, '987654', 'dom@gmail', '9876543212', ' #L38TDPA-10010110101938', 'person2.jpg'),
(28, 'Jeeva Medicals', 'Kolani Jn.', 'Thodupuzha', 6, '685583', 'jeeva@gmail.com', '8281149230', '#L03TDPA-01982635353', 'person6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `labtest`
--

CREATE TABLE `labtest` (
  `testid` int(11) NOT NULL,
  `labid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `testrate` decimal(10,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `homeservice` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `labtest`
--

INSERT INTO `labtest` (`testid`, `labid`, `categoryid`, `description`, `testrate`, `image`, `homeservice`) VALUES
(1, 1, 1, 'Sugartest at home', 340.00, 'sugar.jpg', 'Yes'),
(2, 1, 4, 'Deep Xray', 500.00, 'xray1.jpg', 'No'),
(4, 1, 8, 'Covid-19 Test', 300.00, 'covid.jpg', 'Yes'),
(5, 1, 9, 'HG,white cells count check', 300.00, 'blod1.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `utype` varchar(2) NOT NULL DEFAULT 'u'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `status`, `utype`) VALUES
('admin@gmail.com', 'admin12345', '1', 'a'),
('d@gmail.com', 'Ddd@12345', '0', 's'),
('dom@gmail', 'Dom@12345', '0', 'l'),
('dominic@gmail.com', '123@abcd', '1', 'l'),
('jeeva@gmail.com', 'Jjj@12345', '0', 'l'),
('pranav@gmail.com', 'Ppp@12345', '0', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderitemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderitemid`, `quantity`, `orderid`, `pid`) VALUES
(16, 1, 10, 2),
(17, 1, 11, 3),
(18, 1, 12, 2),
(19, 1, 13, 2),
(20, 1, 14, 3),
(21, 1, 15, 3),
(22, 1, 16, 4),
(23, 1, 17, 3),
(24, 1, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `paymentmode` varchar(10) NOT NULL,
  `orderdate` date DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `name`, `address`, `phone`, `emailid`, `paymentmode`, `orderdate`, `status`, `price`) VALUES
(1, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'abhij@gmail.com', 'cod', '2021-12-30', '1', '220.00'),
(2, 'Biby', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'abhij@gmail.com', 'cod', '2021-12-30', '1', '90.00'),
(3, 'Manu K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '8061865672', 'abhij@gmail.com', 'cod', '2022-01-03', '0', '1370.00'),
(4, 'Joice', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(5, 'Dominic ', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '550.00'),
(6, 'Manu', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(7, ' K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(8, ' K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(9, ' K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(10, 'Dasan', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '50.00'),
(11, 'pranav', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'cod', '2022-01-04', '0', '500.00'),
(13, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'NETBANKING', '2022-01-09', '-1', '50'),
(14, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'NETBANKING', '2022-01-09', '-1', '500'),
(15, 'Abhi', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'NETBANKING', NULL, '0', '500'),
(16, 'jio', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'NETBANKING', NULL, '0', '690'),
(17, 'john', 'Kollikkunnel(H) Vazhithala P.O.', '0906186567', 'pranav@gmail.com', 'NETBANKING', NULL, '1', '550');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `labid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prate` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `homeservice` varchar(3) NOT NULL,
  `rating` decimal(10,2) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `labid`, `categoryid`, `pname`, `quantity`, `unit`, `description`, `image`, `prate`, `stock`, `homeservice`, `rating`, `review`) VALUES
(1, 1, 2, 'Cipla', 200, 'ml', 'Blue Sanitizer', 'sag.png', 90.00, 8, 'No', 0.00, ''),
(2, 1, 3, 'Cipla', 5, 'packets', 'Black,Gray,White', 'surgical.jpg', 50.00, 1, 'No', 0.00, ''),
(3, 1, 10, 'Immune Syrup', 300, 'ml', 'Prevents Covid-19,Pneumonia,etc', 'immune.jpg', 500.00, 2, 'No', 0.00, ''),
(4, 1, 11, 'MAX', 500, 'gm', 'High quality Protein powder', 'protein.png', 690.00, 7, 'No', 0.00, ''),
(5, 1, 12, 'Cipla', 3, 'set', 'Blue,White Colours', 'ppe.jpg', 820.00, 6, '', 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `scollector`
--

CREATE TABLE `scollector` (
  `sid` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `distid` int(11) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `profilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `scollector`
--

INSERT INTO `scollector` (`sid`, `name`, `address`, `dob`, `city`, `distid`, `pincode`, `email`, `phone`, `profilepic`) VALUES
(1, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', '0000-00-00', 'Thodupuzha', 2, '987654', 'd@gmail.com', '9876543212', 'person3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testbooking`
--

CREATE TABLE `testbooking` (
  `tbookingid` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `bookingdate` date DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '-1',
  `slot` varchar(25) DEFAULT NULL,
  `result` varchar(500) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testbooking`
--

INSERT INTO `testbooking` (`tbookingid`, `testid`, `name`, `address`, `phone`, `emailid`, `bookingdate`, `status`, `slot`, `result`, `rate`) VALUES
(10, 5, 'Dominic K Paulraj', 'Kollikkunnel(H) Vazhithala P.O.', 2147483647, 'pranav@gmail.com', '2022-01-28', '3', '14:00', 'count-normal\r\nhg-100/ml\r\nbh-230/ml\r\nchol.-normal', 340.00),
(19, 5, 'Jince', 'Kollikkunnel(H) Vazhithala P.O.', 2147483647, 'pranav@gmail.com', '0000-00-00', '3', '01:58', 'B+ve blood group', 340.00),
(20, 5, 'johns', 'Kollikkunnel(H) Vazhithala P.O.', 2147483647, 'pranav@gmail.com', '2022-01-20', '2', NULL, '', 340.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintid`);

--
-- Indexes for table `cuser`
--
ALTER TABLE `cuser`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`distid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`labid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `labtest`
--
ALTER TABLE `labtest`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`orderitemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `scollector`
--
ALTER TABLE `scollector`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `testbooking`
--
ALTER TABLE `testbooking`
  ADD PRIMARY KEY (`tbookingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cuser`
--
ALTER TABLE `cuser`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `distid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `labtest`
--
ALTER TABLE `labtest`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `orderitemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scollector`
--
ALTER TABLE `scollector`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testbooking`
--
ALTER TABLE `testbooking`
  MODIFY `tbookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
