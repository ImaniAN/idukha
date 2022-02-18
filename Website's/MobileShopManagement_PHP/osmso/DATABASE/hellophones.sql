-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 12:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hellophones`
--

-- --------------------------------------------------------

--
-- Table structure for table `blanch`
--

CREATE TABLE IF NOT EXISTS `blanch` (
`IDBranch` int(11) NOT NULL,
  `BranchName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blanch`
--

INSERT INTO `blanch` (`IDBranch`, `BranchName`, `Address`) VALUES
(1, 'KCT Branch', 'Kigali City Tower'),
(2, 'UTC Branch', 'UTC ville');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`IDInvoice` int(11) NOT NULL,
  `InvoiceNumber` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`IDInvoice`, `InvoiceNumber`) VALUES
(6, 3005),
(7, 3006),
(8, 3007),
(9, 3008),
(10, 3009),
(11, 3010);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
`IDMail` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`IDMail`, `IDUser`, `Time`, `Message`) VALUES
(176, 5, 1473872222, 'mmn,nm,n'),
(177, 5, 1473872223, 'mmn,nm,n'),
(178, 5, 1474010350, 'jklhjkhl'),
(179, 4, 1474035659, 'hello guyz');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
`IDPrice` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`IDPrice`, `IDProduct`, `Price`) VALUES
(1, 7, 300000),
(2, 8, 175000),
(3, 10, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`productid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `displaysize` varchar(100) NOT NULL,
  `operatingsystem` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `InternalMemory` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `cameradescription` varchar(100) NOT NULL,
  `batterylife` varchar(100) NOT NULL,
  `weight` varchar(35) NOT NULL,
  `model` varchar(40) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `ASIN` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `flaturedimage` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDBranch` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `product_name`, `brand`, `price`, `quantity`, `TotalPrice`, `displaysize`, `operatingsystem`, `Processor`, `InternalMemory`, `RAM`, `cameradescription`, `batterylife`, `weight`, `model`, `dimension`, `ASIN`, `description`, `flaturedimage`, `status`, `date`, `IDUser`, `IDBranch`) VALUES
(8, 'nokia lumia', 'noka', 50000, 23, 1500000, 'tytry', '657457', 'yurtyu', 'tyurtu', 'tyutyu', 'tyutu', 'tyutyu', 'utyuryu', 'tyurtu', 'tyutu', 'tyutyu', '<b>rturuy6uer<br>ukityiuyiyui</b>', '12-Free-Books-for-Learning-Theoretical-Computer-Science.jpg', 'Available', '2016-09-05', 0, 2),
(7, 'Samsung Galaxy Note 10.1', 'Samsung ', 300000, 41, 6000000, '1280 x 800 pixels', 'Android 4.0 Ice Cream Sandwich', '1.4 GHz / Quad Core / Exynos 4412', '16 GB', '2 GB', '5 Mpixels', 'up to 1500h', '600 g', 'GT 8000', '262 x 180 x 8.9 mm', 'DFGDFGRT243', 'GALAXY Note 10.1', 'Samsung-Galaxy-Note-10.1-.jpg', 'Available', '2016-09-05', 0, 2),
(10, 'BOOM G7', 'Techno', 170000, 50, 8500000, '380 x 100 pixels', 'Android 4.0', '1.4 GHz ', '32GB', '2 GB', '5 Mpixels', 'up to 1500h', '100 g', 'W2L17UA#ABA', '52 x 80 x 8.9 mm', '345FGDDGSDG', 'T6UYRTYDRTY DYRTY&nbsp;', 'hand-shake-with--phone-icon-92648.png', 'Available', '2016-09-14', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`purchaseid` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `SupplierName` varchar(100) NOT NULL,
  `SupplierPhone` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDBranch` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `IDProduct`, `Quantity`, `Price`, `TotalPrice`, `SupplierName`, `SupplierPhone`, `Date`, `IDUser`, `IDBranch`) VALUES
(1, 7, 10, 80000, 800000, '0', '+250 784 522 478', '2016-09-07', 4, 0),
(2, 7, 5, 50000, 250000, 'ABC LTD', '+250 785 451 245', '2016-09-07', 4, 0),
(3, 7, 2, 76000, 152000, 'ABC LTD', '+250 874 545 454', '2016-09-07', 4, 0),
(4, 7, 0, 0, 0, '', '', '2016-09-13', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`salesid` int(20) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `QuatityInStore` int(11) NOT NULL,
  `QuantitySold` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `AmountPaid` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL,
  `SaleDate` varchar(30) NOT NULL,
  `IDInvoice` int(11) NOT NULL,
  `IDUSer` int(11) NOT NULL,
  `IDBranch` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `IDProduct`, `Price`, `QuatityInStore`, `QuantitySold`, `TotalPrice`, `AmountPaid`, `Balance`, `ClientName`, `PhoneNumber`, `SaleDate`, `IDInvoice`, `IDUSer`, `IDBranch`) VALUES
(1, 7, 200000, 20, 15, 3000000, 3005000, 5000, 'ISHIMWE Jules', '078566548', '2016-09-07', 3005, 4, 0),
(2, 7, 200000, 35, 2, 400000, 400000, 0, 'karera indiane', '0785456488', '2016-09-07', 3006, 4, 0),
(3, 8, 150000, 30, 2, 300000, 300000, 0, 'karera indiane', '0785456488', '2016-09-07', 3006, 4, 0),
(4, 7, 200000, 50, 5, 1000000, 1000000, 0, 'bella', '+250 656 565 655', '2016-09-09', 3007, 4, 0),
(5, 8, 150000, 28, 2, 300000, 300000, 0, 'bella', '+250 598 989 898', '2016-09-09', 3007, 4, 0),
(6, 7, 200000, 45, 2, 400000, 500000, 100000, 'hgkjhgkjh', '+250 787 455 454', '2016-09-13', 3009, 4, 0),
(7, 7, 300000, 43, 2, 600000, 600000, 0, 'cedrick', '+250 567 567 567', '2016-09-14', 3010, 5, 2),
(8, 8, 150000, 26, 1, 450000, 450000, 0, 'cedrick', '+250 787 856 785', '2016-09-14', 3010, 5, 2),
(9, 8, 175000, 25, 2, 350000, 350000, 0, 'KANEZA Lily', '+250 548 784 454', '17/9/2016', 3010, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(25) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwourd` varchar(35) NOT NULL,
  `role` varchar(45) NOT NULL,
  `activate` varchar(50) NOT NULL,
  `profilepicture` varchar(55) NOT NULL,
  `IDBranch` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `address`, `e-mail`, `username`, `passwourd`, `role`, `activate`, `profilepicture`, `IDBranch`) VALUES
(4, 'HARRY DEN', 'Kicukiro', 'kwizerobert@gmail.com', 'manager', '12345', 'Manager', 'Activate', 'roberto.jpg', 2),
(5, 'NEMA Roy', 'Kicukiro', 'nemaroy@gmail.com', 'nemaroy', '12345', 'Seller', 'Activate', 'AD-letter-logo-advanced-dental-designs-inc-logo.png', 2),
(6, 'IRERA Brown', 'kanombe', 'irera@yahoo.fr', 'irera', '12345', 'Seller', 'Activate', 'ad-logo1_1x.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blanch`
--
ALTER TABLE `blanch`
 ADD PRIMARY KEY (`IDBranch`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`IDInvoice`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
 ADD PRIMARY KEY (`IDMail`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
 ADD PRIMARY KEY (`IDPrice`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blanch`
--
ALTER TABLE `blanch`
MODIFY `IDBranch` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `IDInvoice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
MODIFY `IDMail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
MODIFY `IDPrice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `salesid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
