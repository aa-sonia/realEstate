-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2020 at 08:05 AM
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
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `agentview2`
-- (See below for the actual view)
--
CREATE TABLE `agentview2` (
`Agent_ID` int(11)
,`Email` varchar(30)
,`Phone_no` varchar(20)
,`Office_loc` varchar(60)
,`City` char(20)
,`A_img` varchar(200)
,`A_Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `agentview3`
-- (See below for the actual view)
--
CREATE TABLE `agentview3` (
`Agent_ID` int(11)
,`Email` varchar(30)
,`Phone_no` varchar(20)
,`Office_loc` varchar(60)
,`City` char(20)
,`A_img` varchar(200)
,`A_Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `agent_r2`
--

CREATE TABLE `agent_r2` (
  `Agent_ID` int(11) NOT NULL,
  `A_img` varchar(200) NOT NULL,
  `A_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_r2`
--

INSERT INTO `agent_r2` (`Agent_ID`, `A_img`, `A_Name`) VALUES
(1, '1.jpg', 'George Ion'),
(2, '2.jpg', 'Yang Song'),
(3, '3.jpg', 'Sumir Atwal'),
(4, '4.jpg', 'Phyllis Zhou'),
(5, '5.jpg', 'Rahel Staeheli'),
(6, '6.jpg', 'Maria Telfer'),
(7, '7.jpg', 'Joey Dawson'),
(8, '8.jpg', 'Emily Watson'),
(9, '9.jpg', 'George Smith');

-- --------------------------------------------------------

--
-- Table structure for table `agent_r3`
--

CREATE TABLE `agent_r3` (
  `Agent_ID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Office_loc` varchar(60) NOT NULL,
  `City` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_r3`
--

INSERT INTO `agent_r3` (`Agent_ID`, `Email`, `Phone_no`, `Office_loc`, `City`) VALUES
(1, 'george12@gmail.com', '778-230-9870', '2629 Kingsway Vancouver', 'Vancouver'),
(2, 'songyang99@gmail.com', '604-678-9089', '#102-1245 West Broadway, Vancouver', 'Vancouver'),
(3, 'sumir12@gmail.com ', '604-556-8967', '202-8501 162 Street, Surrey', 'Surrey'),
(4, 'phyllisz2389@gmail.com', '778-124-4567', '15595 24 Ave, Surrey', 'Surrey'),
(5, 'staehelirahel@gmail.com', '604-898-1234', '201- 5550 152 Street, Surrey', 'Surrey'),
(6, 'maria5647@gmail.com', '778-788-5612', '#11 8th St, New Westminster', 'New Westminster'),
(7, 'dawsonjoey2345@gmail.com', '604-234-6712', '#8621 201 St, Langley ', 'Langley'),
(8, 'emilywatson12@gmail.com', '778-341-4523', '13536 98a Ave, Surrey', 'Surrey'),
(9, 'george23@gmail.com', '604-230-9845', '3701 Hastings St, Burnaby', 'Burnaby');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `User_ID` char(10) NOT NULL,
  `Preferred_City` char(40) NOT NULL DEFAULT 'Vancouver',
  `Max_price` int(11) NOT NULL,
  `Max_sq_feet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`User_ID`, `Preferred_City`, `Max_price`, `Max_sq_feet`) VALUES
('JMan', 'Delta', 3000000, 4000),
('LVin', 'Vancouver', 80, 9000000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `completelisting`
-- (See below for the actual view)
--
CREATE TABLE `completelisting` (
`Postal_code` varchar(10)
,`City` varchar(20)
,`House_no` int(11)
,`Address` varchar(100)
,`Price_per_sqft` float
,`H_type` varchar(20)
,`H_size` int(11)
,`Price` float
,`List_ID` int(11)
,`Thumbnail` varchar(200)
,`Beds` int(11)
,`Baths` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `completelisting2`
-- (See below for the actual view)
--
CREATE TABLE `completelisting2` (
`Postal_code` varchar(10)
,`City` varchar(20)
,`House_no` int(11)
,`Address` varchar(100)
,`Price_per_sqft` float
,`H_type` varchar(20)
,`H_size` int(11)
,`Price` float
,`Thumbnail` varchar(200)
,`List_ID` int(11)
,`Beds` int(11)
,`Baths` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `feature_r1`
--

CREATE TABLE `feature_r1` (
  `City_groupID` int(11) NOT NULL,
  `Nearby_cities` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_r1`
--

INSERT INTO `feature_r1` (`City_groupID`, `Nearby_cities`) VALUES
(1, 'New Westminister/South Van/Richmond'),
(2, 'Delta/Surrey/Langley/Abbotsford'),
(3, 'North Van/West Van/Downtown Van'),
(4, 'New Westminister/Burnaby/Coquitlam'),
(5, 'Surrey/Langley/Abbotsford');

-- --------------------------------------------------------

--
-- Table structure for table `feature_r2`
--

CREATE TABLE `feature_r2` (
  `House_no` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Beds` int(11) NOT NULL,
  `Baths` int(11) NOT NULL,
  `City_groupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_r2`
--

INSERT INTO `feature_r2` (`House_no`, `Address`, `City`, `Beds`, `Baths`, `City_groupID`) VALUES
(33, ' W Pender St #505', 'Burnaby', 1, 1, 4),
(657, 'Whiting Way #104', 'Vancouver', 3, 2, 4),
(1185, 'Quayside Dr #606', 'New-West', 3, 2, 1),
(1234, 'huhdi', 'Vancouver', 3, 2, 1),
(1240, ' Quayside Dr #105', 'New Westminster', 1, 1, 1),
(1319, 'Oakwood Cres', 'Vancouver', 3, 2, 2),
(1549, ' Kitchener St #407', 'Vancouver', 2, 1, 3),
(1628, ' W 4th Ave #301', 'Vancouver', 2, 2, 3),
(1960, ' Glenaire Dr #6 ', 'Surrey', 4, 3, 1),
(2010, 'W 8th Ave #403', 'Vancouver', 1, 1, 3),
(3197, 'Point Grey Rd', 'Vancouver', 5, 5, 3),
(3459, 'River Rd W #18', 'Delta', 3, 2, 2),
(3579, 'Walker St', 'Vancouver', 6, 4, 3),
(3819, 'Marine Dr', 'Burnaby', 5, 4, 4),
(5155, 'Watling St #112', 'Burnaby', 2, 3, 4),
(5607, ' Royal Oak Ave', 'Burnaby', 5, 4, 3),
(5740, 'Hastings St #4', 'Burnaby', 3, 1, 4),
(5788, 'Sidley St #112', 'Burnaby', 1, 1, 4),
(6185, '188th St', 'Surrey', 4, 3, 5),
(7800, ' 114a St', 'Delta', 6, 4, 2),
(9233, ' Government St #311', 'Burnaby', 2, 2, 4),
(10133, '10133 River Dr #19', 'Richmond', 3, 3, 1),
(13898, ' 64th Ave #165', 'Surrey', 4, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `house_r1`
--

CREATE TABLE `house_r1` (
  `Price_per_sqft` float NOT NULL,
  `Postal_code` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_r1`
--

INSERT INTO `house_r1` (`Price_per_sqft`, `Postal_code`, `City`) VALUES
(368.677, 'V5B 1R6', 'Burnaby'),
(384.319, 'V3S 7V8', 'Surrey'),
(399.938, 'V3W 1L6', 'Surrey'),
(422.013, 'V3M 6T8', 'New-West'),
(487.526, 'V3M 6H1', 'New Westminster'),
(497.842, 'V4K 4Y6', 'Delta'),
(499.915, 'V4C 5L7', 'Delta'),
(539.455, 'V3J 3S2', 'Vancouver'),
(639.665, 'BC V5L 2V8', 'Vancouver'),
(643.204, 'V6X 0K8', 'Richmond'),
(643.563, 'V3N 0A3', 'Burnaby'),
(667.797, 'V5J 1W8', 'Burnaby'),
(746.773, 'V5H 3N2', 'Burnaby'),
(765.124, 'V5J 0E4', 'Burnaby'),
(803.079, 'V5C 2L2', 'Burnaby'),
(804.305, 'V5N 5A8', 'Vancouver'),
(839.99, 'V7P 1Y1', 'Surrey'),
(851.269, 'V5J 3E3', 'Burnaby'),
(874.622, 'V6J 1W5', 'Vancouver'),
(914.25, 'V7P 1L5', 'Vancouver'),
(1005.66, 'BC V6J 0G6', 'Vancouver'),
(4479.42, 'V6K 1B3', 'Vancouver'),
(7058.82, 'BIN MOS', 'Vancouver');

-- --------------------------------------------------------

--
-- Table structure for table `house_r2`
--

CREATE TABLE `house_r2` (
  `House_no` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Price_per_sqft` float NOT NULL,
  `H_type` varchar(20) NOT NULL,
  `H_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_r2`
--

INSERT INTO `house_r2` (`House_no`, `Address`, `Price_per_sqft`, `H_type`, `H_size`) VALUES
(33, ' W Pender St #505', 803.079, 'TownHouse', 747),
(657, 'Whiting Way #104', 539.455, 'Condo', 2091),
(1185, 'Quayside Dr #606', 422.013, 'OpenHouse', 1540),
(1234, 'huhdi', 7058.82, 'Condo', 17),
(1240, ' Quayside Dr #105', 487.526, 'OpenHouse', 962),
(1319, 'Oakwood Cres', 914.25, 'OpenHouse', 1586),
(1549, ' Kitchener St #407', 639.665, 'Appartment', 1016),
(1628, ' W 4th Ave #301', 1005.66, 'Appartment', 884),
(1960, ' Glenaire Dr #6 ', 839.99, 'OpenHouse', 1988),
(2010, 'W 8th Ave #403', 874.622, 'Appartment', 662),
(3197, 'Point Grey Rd', 4479.42, 'OpenHouse', 3304),
(3459, 'River Rd W #18', 497.842, 'OpenHouse', 1205),
(3579, 'Walker St', 804.305, 'TownHouse', 2509),
(3819, 'Marine Dr', 851.269, 'OpenHouse', 3113),
(5155, 'Watling St #112', 667.797, 'TownHouse', 1180),
(5607, ' Royal Oak Ave', 746.773, 'OpenHouse', 2247),
(5740, 'Hastings St #4', 368.677, 'Appartment', 1028),
(5788, 'Sidley St #112', 765.124, 'Appartment', 605),
(6185, '188th St', 384.319, 'OpenHouse', 2857),
(7800, ' 114a St', 499.915, 'OpenHouse', 2340),
(9233, ' Government St #311', 643.563, 'Appartment', 870),
(10133, '10133 River Dr #19', 643.204, 'Appartment', 1236),
(13898, ' 64th Ave #165', 399.938, 'Condo', 1600);

-- --------------------------------------------------------

--
-- Table structure for table `postedlisting`
--

CREATE TABLE `postedlisting` (
  `Agent_ID` int(11) NOT NULL,
  `List_ID` int(11) NOT NULL,
  `User_ID` char(10) NOT NULL,
  `Price` float NOT NULL,
  `List_Date` date NOT NULL,
  `House_no` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Price_per_sqft` float NOT NULL,
  `Thumbnail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postedlisting`
--

INSERT INTO `postedlisting` (`Agent_ID`, `List_ID`, `User_ID`, `Price`, `List_Date`, `House_no`, `Address`, `Price_per_sqft`, `Thumbnail`) VALUES
(1, 665, 'MSte', 788000, '2020-11-27', 5155, 'Watling St #112', 667.797, 'https://photos.zillowstatic.com/fp/6408636308aada071ab5c811fe154f35-uncropped_scaled_within_1536_1152.webp'),
(7, 1182, 'GKan', 795000, '2020-11-27', 10133, '10133 River Dr #19', 643.204, 'https://photos.zillowstatic.com/fp/8a6bee994db975723556fceaad8f366a-cc_ft_768.jpg'),
(9, 4015, 'CKa', 1128000, '2020-11-27', 657, 'Whiting Way #104', 539.455, 'https://photos.zillowstatic.com/fp/4ff83eaf056df5a43ce6d3656aede921-uncropped_scaled_within_1536_1152.webp'),
(3, 6465, 'GDia', 579000, '2020-11-27', 2010, 'W 8th Ave #403', 874.622, 'https://photos.zillowstatic.com/fp/36629734a95b35b22008e6a836628a7f-cc_ft_768.jpg'),
(6, 12518, 'PLat', 1169800, '2020-11-27', 7800, ' 114a St', 499.915, 'https://photos.zillowstatic.com/fp/55bab37d59c36bae0bb490d194dea687-cc_ft_768.jpg'),
(2, 14191, 'KFar', 649900, '2020-11-27', 1549, ' Kitchener St #407', 639.665, 'https://photos.zillowstatic.com/fp/a770333da26b72f61aee24c17360ff36-cc_ft_768.jpg'),
(1, 16403, 'CVin', 2650000, '2020-11-27', 3819, 'Marine Dr', 851.269, 'https://photos.zillowstatic.com/fp/2a8180cccc3de8460a9a63a5dd97a614-uncropped_scaled_within_1536_1152.webp'),
(5, 21080, 'JDea', 14800000, '2020-11-27', 3197, 'Point Grey Rd', 4479.42, 'https://photos.zillowstatic.com/fp/a03250feea5d4648fc5ac2f61673a628-cc_ft_768.jpg'),
(1, 25762, 'PWal', 599900, '2020-11-27', 33, ' W Pender St #505', 803.079, 'https://photos.zillowstatic.com/fp/bcd4399aa4d84d0b8f5fdd5191dc4da6-cc_ft_768.jpg'),
(2, 30473, 'KWas', 639900, '2020-11-27', 13898, ' 64th Ave #165', 399.938, 'https://photos.zillowstatic.com/fp/d9cac08895007917231e64b48e4d1caa-cc_ft_768.jpg'),
(4, 37560, 'THaw', 469000, '2020-11-25', 1240, ' Quayside Dr #105', 487.526, 'https://photos.zillowstatic.com/fp/ffd30baa389b5de8c0dbc68e6105f1b9-uncropped_scaled_within_1344_1008.webp'),
(1, 40274, 'IOil', 559900, '2020-11-27', 9233, ' Government St #311', 643.563, 'https://photos.zillowstatic.com/fp/93f18f1d26b67c4758764b6da50fbce0-cc_ft_768.jpg'),
(2, 43065, 'PWas', 1669900, '2020-11-25', 1960, ' Glenaire Dr #6 ', 839.99, 'https://photos.zillowstatic.com/fp/37ed8d6abdd61ecea235a8d80bc848c9-uncropped_scaled_within_1344_1008.webp'),
(4, 54827, 'AJon', 2018000, '2020-11-27', 3579, 'Walker St', 804.305, 'https://photos.zillowstatic.com/fp/e7d74b28e1a1f9b6adc038be5608b3ee-cc_ft_768.jpg'),
(1, 65172, 'HDaw', 1450000, '2020-11-25', 1319, 'Oakwood Cres', 914.25, 'https://photos.zillowstatic.com/fp/b8c1925d0a8368af490a17905fdb64de-uncropped_scaled_within_1536_1152.webp'),
(4, 70895, 'AHam', 1678000, '2020-11-27', 5607, ' Royal Oak Ave', 746.773, 'https://photos.zillowstatic.com/fp/3ab6ccc5e0edf010a5d865216815cc11-cc_ft_768.jpg'),
(2, 77530, 'SEaf', 1098000, '2020-11-27', 6185, '188th St', 384.319, 'https://photos.zillowstatic.com/fp/1653fefbfa192b6a5993ea1c7d7246a2-cc_ft_768.jpg'),
(8, 80442, 'KLow', 599900, '2020-11-27', 3459, 'River Rd W #18', 497.842, 'https://photos.zillowstatic.com/fp/a8e36dc2385ef81e219b3f60adcdd5d3-cc_ft_768.jpg'),
(5, 83567, 'KGra', 889000, '2020-11-27', 1628, ' W 4th Ave #301', 1005.66, 'https://photos.zillowstatic.com/fp/cb5014282428ba72e3c07bf85a4900cd-uncropped_scaled_within_1536_1152.webp'),
(1, 87577, 'BHam', 379000, '2020-11-27', 5740, 'Hastings St #4', 368.677, 'https://photos.zillowstatic.com/fp/7b0f0d820caf42630c9be050f21116e2-uncropped_scaled_within_1536_1152.webp'),
(4, 96292, 'SAft', 649900, '2020-11-27', 1185, 'Quayside Dr #606', 422.013, 'https://photos.zillowstatic.com/fp/9c186b251a095b05920bc8df2200cf70-uncropped_scaled_within_1536_1152.webp');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `User_ID` char(10) NOT NULL,
  `Max_selling_period` char(25) NOT NULL,
  `Asking_Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`User_ID`, `Max_selling_period`, `Asking_Price`) VALUES
('AHam', '50', 5000000),
('AJon', '30', 30000000),
('BHam', '30', 2000),
('CKa', '3000', 400000),
('CVin', '200', 3000),
('GDia', '30', 3900000),
('GKan', '30', 300000),
('HDaw', '30', 40000000),
('IOil', '300', 2900),
('ISai', '30', 400000),
('JDea', '200', 2000000),
('KFar', '50', 290000),
('KGra', '40', 500000),
('KLow', '30000', 1000000),
('KWas', '30', 30),
('MRa', '40', 400000),
('MSte', '300', 3000),
('PLat', '300', 300000),
('PWal', '20', 30000),
('PWas', '50', 1500000),
('RFas', '70', 1300000),
('SAft', '60', 600000),
('SEaf', '30', 10000),
('THaw', '60', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `user_r1`
--

CREATE TABLE `user_r1` (
  `Postal_code` varchar(25) NOT NULL,
  `City` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_r1`
--

INSERT INTO `user_r1` (`Postal_code`, `City`) VALUES
('kjkh', 'kjkjh'),
('V0P M2G', 'Burnaby'),
('V0V 2L2', 'Burnaby'),
('V1C 3XJ', 'Surrey'),
('V1M H4L', 'Vancouver'),
('V2M 7Q9', 'Burnaby'),
('V3H F5L', 'E Vancouver'),
('V3M K5L', 'New Westminster'),
('V3N 0A3', 'Burnaby'),
('V3N 0A4', 'Burnaby'),
('V5B 1R6', 'Burnaby'),
('V5K 0A1', 'New Westminster'),
('V5N 5A8', 'Delta'),
('V5Z 4S7', 'Vancouver'),
('V6G H24', 'Vancouver'),
('V6M 8L0', 'W Lake Drive'),
('V6Y J8X', 'Langley'),
('V74 E5K', 'Delta'),
('V7H G5K', 'New Westminster'),
('V7H G9L', 'Burnaby'),
('V7I 5D3', 'Langley'),
('V7J 5F3', 'Delta'),
('V7L L9M', 'Coquitlam'),
('V8B B9M', 'Coquitlam'),
('V8H J9L', 'Richmond'),
('V8Y H6L', 'Coquitlam'),
('VB7 9L3', 'Surrey'),
('VJ1 D9Z', 'Delta');

-- --------------------------------------------------------

--
-- Table structure for table `user_r2`
--

CREATE TABLE `user_r2` (
  `User_ID` char(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(40) NOT NULL,
  `Postal_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_r2`
--

INSERT INTO `user_r2` (`User_ID`, `Name`, `Email`, `DOB`, `Address`, `Postal_code`) VALUES
('AHam', 'Alex Harden', 'AHam@gmail.com', '1974-04-05', '3490 W Rochester Road', 'V7H G9L'),
('AJon', 'Anthony Johnson', 'AJohnson@gmail.com', '1965-11-11', '5894 Florist Lane', 'V5K 0A1'),
('BHam', 'Bernard Hamilton', 'BHam@gmail.com', '1923-09-07', '7677 Dalia Street', 'V5B 1R6'),
('CKa', 'Cathy Kal', 'CKa@gmail.com', '1998-03-03', '123 U blv', 'V7L L9M'),
('CVin', 'Carl Penton', 'CVin@gmail.com', '1988-05-08', '7832 Nate Street', 'V0V 2L2'),
('GDia', 'Gina Diamond', 'GDiamond@gmail.com', '1923-04-03', '4563 E Foxglove Drive', 'V5N 5A8'),
('GKan', 'George Kern', 'GKan@gmail.com', '1997-02-01', '2857', 'V6M 8L0'),
('HDaw', 'Henry Dawson', 'HDawson@gmail.com', '1988-07-09', '2245 W Elm Way', 'V74 E5K'),
('IOil', 'Issac Oiler', 'IOil@gmail.com', '1985-02-02', '8760 Sears Street', 'V3N 0A3'),
('ISai', 'Idenn Saiser', 'ISai@gmail.com', '1978-06-01', '5980 Vermont Drive', 'V5Z 4S7'),
('JDea', 'James Dean', 'JDea@gmail.com', '1955-04-08', '1280 Gambrel Lane', 'V1M H4L'),
('JMan', 'James Mansfield', 'JMan@gmail.com', '2000-11-30', '1778 W 22 Street', 'V6G H24'),
('KFar', 'Kent Farthington', 'KFar@gmail.com', '1986-12-24', '1289 Glenn Road', 'V8H J9L'),
('KGra', 'Kelsey Grammar', 'KGra@gmail.com', '2002-05-03', '3450 River Road', 'V8B B9M'),
('KLow', 'Kat Lith', 'Klow@gmail.com', '1955-01-01', '223 I drive', 'VJ1 D9Z'),
('KWas', 'Kim Washington', 'K@gmail.com', '1956-01-01', '4498 Grant Road', 'V7I 5D3'),
('LVin', 'Lenny Vincent', 'LVincent@gmail.com', '2000-07-08', '33300 E Nelson Way', 'V3H F5L'),
('MRa', 'Mary Rans', 'MRa@gmail.com', '1977-01-01', '3290 Potlane Road', 'V1C 3XJ'),
('MSte', 'Martha Stewart', 'MSte@gmail.com', '1994-05-07', '8907 Titan Way', 'V0P M2G'),
('PLat', 'Patricia Lansing', 'PLat@gmail.com', '1966-01-01', '239 Un Road', 'V7J 5F3'),
('PWal', 'Pantene Lashburn', 'PWal@gmail.com', '1993-01-10', '1670 W Real Street', 'V2M 7Q9'),
('PWas', 'Pamela Washer', 'Pwasher@gmail.com', '1977-03-08', '12255 W Farsle lane', 'V6Y J8X'),
('RFas', 'Richard Fasbender', 'RFasbender@yahoo.net', '1996-09-03', '3328 E River Drive', 'V8Y H6L'),
('SAft', 'Sierra Aften', 'SAft', '1998-03-02', '1536 Desolation Lane', 'V3M K5L'),
('SEaf', 'Sam Eafer', 'SEaf@gmail.com', '2000-07-01', '2780 Klark Way', 'VB7 9L3'),
('THaw', 'Tom Hawthorn', 'THawthorn@gmail.com', '1967-06-05', '4455 Heather Road', 'V7H G5K');

-- --------------------------------------------------------

--
-- Table structure for table `user_r3`
--

CREATE TABLE `user_r3` (
  `Address` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Postal_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_r3`
--

INSERT INTO `user_r3` (`Address`, `City`, `Postal_code`) VALUES
('12255 W Farsle lane', 'Langley', 'V6Y J8X'),
('123 U blv', 'Coquitlam', 'V7L L9M'),
('1280 Gambrel Lane', 'Vancouver', 'V1M H4L'),
('1289 Glenn Road', 'Richmond', 'V8H J9L'),
('1536 Desolation Lane', 'New Westminster', 'V3M K5L'),
('1670 W Real Street', 'Burnaby', 'V2M 7Q9'),
('1778 W 22 Street', 'Vancouver', 'V6G H24'),
('223 I drive', 'Delta', 'VJ1 D9Z'),
('2245 W Elm Way', 'Delta', 'V74 E5K'),
('239 Un Road', 'Delta', 'V7J 5F3'),
('2780 Klark Way', 'Surrey', 'VB7 9L3'),
('2857', 'W Lake Drive', 'V6M 8L0'),
('3290 Potlane Road', 'Surrey', 'V1C 3XJ'),
('3328 E River Drive', 'Coquitlam', 'V8Y H6L'),
('33300 E Nelson Way', 'E Vancouver', 'V3H F5L'),
('3450 River Road', 'Coquitlam', 'V8B B9M'),
('3490 W Rochester Road', 'Burnaby', 'V7H G9L'),
('4455 Heather Road', 'New Westminster', 'V7H G5K'),
('4498 Grant Road', 'Langley', 'V7I 5D3'),
('4563 E Foxglove Drive', 'Delta', 'V5N 5A8'),
('5894 Florist Lane', 'New Westminster', 'V5K 0A1'),
('5980 Vermont Drive', 'Vancouver', 'V5Z 4S7'),
('7677 Dalia Street', 'Burnaby', 'V5B 1R6'),
('7832 Nate Street', 'Burnaby', 'V0V 2L2'),
('8760 Sears Street', 'Burnaby', 'V3N 0A3'),
('8907 Titan Way', 'Burnaby', 'V0P M2G'),
('hjkhkjh', 'kjkjh', 'kjkh');

-- --------------------------------------------------------

--
-- Structure for view `agentview2`
--
DROP TABLE IF EXISTS `agentview2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `agentview2`  AS SELECT `r3`.`Agent_ID` AS `Agent_ID`, `r3`.`Email` AS `Email`, `r3`.`Phone_no` AS `Phone_no`, `r3`.`Office_loc` AS `Office_loc`, `r3`.`City` AS `City`, `r2`.`A_img` AS `A_img`, `r2`.`A_Name` AS `A_Name` FROM (`agent_r3` `r3` join `agent_r2` `r2` on(`r3`.`Agent_ID` = `r2`.`Agent_ID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `agentview3`
--
DROP TABLE IF EXISTS `agentview3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `agentview3`  AS SELECT `agent_r3`.`Agent_ID` AS `Agent_ID`, `agent_r3`.`Email` AS `Email`, `agent_r3`.`Phone_no` AS `Phone_no`, `agent_r3`.`Office_loc` AS `Office_loc`, `agent_r3`.`City` AS `City`, `agent_r2`.`A_img` AS `A_img`, `agent_r2`.`A_Name` AS `A_Name` FROM (`agent_r3` join `agent_r2` on(`agent_r3`.`Agent_ID` = `agent_r2`.`Agent_ID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `completelisting`
--
DROP TABLE IF EXISTS `completelisting`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `completelisting`  AS SELECT `h1`.`Postal_code` AS `Postal_code`, `h1`.`City` AS `City`, `h2`.`House_no` AS `House_no`, `h2`.`Address` AS `Address`, `h1`.`Price_per_sqft` AS `Price_per_sqft`, `h2`.`H_type` AS `H_type`, `h2`.`H_size` AS `H_size`, `p`.`Price` AS `Price`, `p`.`List_ID` AS `List_ID`, `p`.`Thumbnail` AS `Thumbnail`, `f2`.`Beds` AS `Beds`, `f2`.`Baths` AS `Baths` FROM ((((`house_r1` `h1` join `house_r2` `h2` on(`h1`.`Price_per_sqft` = `h2`.`Price_per_sqft`)) join `postedlisting` `p` on(`p`.`Price_per_sqft` = `h2`.`Price_per_sqft`)) join `feature_r2` `f2` on(`p`.`House_no` = `f2`.`House_no` and `p`.`Address` = `f2`.`Address` and `h1`.`City` = `f2`.`City`)) join `feature_r1` `f1` on(`f1`.`City_groupID` = `f2`.`City_groupID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `completelisting2`
--
DROP TABLE IF EXISTS `completelisting2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `completelisting2`  AS SELECT `h1`.`Postal_code` AS `Postal_code`, `h1`.`City` AS `City`, `h2`.`House_no` AS `House_no`, `h2`.`Address` AS `Address`, `h1`.`Price_per_sqft` AS `Price_per_sqft`, `h2`.`H_type` AS `H_type`, `h2`.`H_size` AS `H_size`, `p`.`Price` AS `Price`, `p`.`Thumbnail` AS `Thumbnail`, `p`.`List_ID` AS `List_ID`, `f2`.`Beds` AS `Beds`, `f2`.`Baths` AS `Baths` FROM ((((`house_r1` `h1` join `house_r2` `h2` on(`h1`.`Price_per_sqft` = `h2`.`Price_per_sqft`)) join `postedlisting` `p` on(`p`.`Price_per_sqft` = `h2`.`Price_per_sqft`)) join `feature_r2` `f2` on(`p`.`House_no` = `f2`.`House_no` and `p`.`Address` = `f2`.`Address` and `h1`.`City` = `f2`.`City`)) join `feature_r1` `f1` on(`f1`.`City_groupID` = `f2`.`City_groupID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_r2`
--
ALTER TABLE `agent_r2`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `agent_r3`
--
ALTER TABLE `agent_r3`
  ADD PRIMARY KEY (`Agent_ID`,`Email`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`User_ID`) USING BTREE;

--
-- Indexes for table `feature_r1`
--
ALTER TABLE `feature_r1`
  ADD PRIMARY KEY (`City_groupID`);

--
-- Indexes for table `feature_r2`
--
ALTER TABLE `feature_r2`
  ADD PRIMARY KEY (`House_no`,`Address`,`City`),
  ADD KEY `City_groupID` (`City_groupID`);

--
-- Indexes for table `house_r1`
--
ALTER TABLE `house_r1`
  ADD PRIMARY KEY (`Price_per_sqft`);

--
-- Indexes for table `house_r2`
--
ALTER TABLE `house_r2`
  ADD PRIMARY KEY (`House_no`,`Address`,`Price_per_sqft`),
  ADD KEY `Price_per_sqft` (`Price_per_sqft`);

--
-- Indexes for table `postedlisting`
--
ALTER TABLE `postedlisting`
  ADD PRIMARY KEY (`List_ID`),
  ADD KEY `Agent_ID` (`Agent_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `House_no` (`House_no`,`Address`,`Price_per_sqft`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`) USING BTREE;

--
-- Indexes for table `user_r1`
--
ALTER TABLE `user_r1`
  ADD PRIMARY KEY (`Postal_code`);

--
-- Indexes for table `user_r2`
--
ALTER TABLE `user_r2`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Postal_code` (`Postal_code`);

--
-- Indexes for table `user_r3`
--
ALTER TABLE `user_r3`
  ADD PRIMARY KEY (`Address`,`City`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent_r3`
--
ALTER TABLE `agent_r3`
  ADD CONSTRAINT `agent_r3_ibfk_1` FOREIGN KEY (`Agent_ID`) REFERENCES `agent_r2` (`Agent_ID`),
  ADD CONSTRAINT `agent_r3_ibfk_2` FOREIGN KEY (`Agent_ID`) REFERENCES `agent_r2` (`Agent_ID`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_r2` (`User_ID`);

--
-- Constraints for table `feature_r2`
--
ALTER TABLE `feature_r2`
  ADD CONSTRAINT `feature_r2_ibfk_1` FOREIGN KEY (`City_groupID`) REFERENCES `feature_r1` (`City_groupID`);

--
-- Constraints for table `house_r2`
--
ALTER TABLE `house_r2`
  ADD CONSTRAINT `house_r2_ibfk_1` FOREIGN KEY (`Price_per_sqft`) REFERENCES `house_r1` (`Price_per_sqft`);

--
-- Constraints for table `postedlisting`
--
ALTER TABLE `postedlisting`
  ADD CONSTRAINT `postedlisting_ibfk_1` FOREIGN KEY (`Agent_ID`) REFERENCES `agent_r2` (`Agent_ID`),
  ADD CONSTRAINT `postedlisting_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `seller` (`User_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `postedlisting_ibfk_3` FOREIGN KEY (`House_no`,`Address`,`Price_per_sqft`) REFERENCES `house_r2` (`House_no`, `Address`, `Price_per_sqft`) ON DELETE CASCADE;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_r2` (`User_ID`),
  ADD CONSTRAINT `seller_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_r2` (`User_ID`),
  ADD CONSTRAINT `seller_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `user_r2` (`User_ID`);

--
-- Constraints for table `user_r2`
--
ALTER TABLE `user_r2`
  ADD CONSTRAINT `user_r2_ibfk_1` FOREIGN KEY (`Postal_code`) REFERENCES `user_r1` (`Postal_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
