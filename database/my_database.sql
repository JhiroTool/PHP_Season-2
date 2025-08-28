-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2025 at 09:01 AM
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
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `preffix` varchar(255) NOT NULL,
  `seven_digit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `first_name`, `middle_name`, `last_name`, `gender`, `preffix`, `seven_digit`, `email`, `password`) VALUES
(1, 'Timothy', 'Timo', 'Baracael', 'male', '0907', '6757547', 'timo@gmail.com', 'v2swL1jm'),
(2, 'Timothy', 'John', 'Asada', 'male', '0907', '7456267', 'john@gmail.com', 'HWCU5Qkm'),
(3, 'Benedict', 'James', 'Tan', 'male', '0817', '2471627', 'james@gmail.com', 'V06fQCyo'),
(4, 'James', 'Andrei', 'Legaspi', 'male', '0905', '6574556', 'james@gmail.com', 'ldCRjbcE'),
(5, 'Erman', 'Junior', 'Dimayuga', 'male', '0905', '6574557', 'erman@gmail.com', 'rcYZ9DnG'),
(6, 'Cris', 'Carlo', 'Hernandez', 'male', '0906', '7432716', 'cris@gmail.com', 'bmdGeEvT'),
(7, 'Gian', 'Accell', 'Hernandez', 'male', '0817', '6746622', 'gian@gmail.com', 'Tteu4G5I'),
(8, 'Val', 'Anthony', 'De Vega', 'male', '0813', '3419641', 'val@gmail.com', 'QBqvZsEU'),
(9, 'John', 'Marvic', 'Maines', 'male', '0813', '7646216', 'marvic@gmail.com', 'vAChn5yx'),
(10, 'Carl', 'Andrei', 'Rocafor', 'male', '0906', '1346124', 'carl@gmail.com', 'DESKi8vq'),
(11, 'Jastin', 'Mendoza', 'Andal', 'male', '0906', '3736654', 'jastin@gmail.com', 'KximBpnS'),
(12, 'John', 'Paul', 'Pastrana', 'male', '0906', '9476467', 'paul@gmail.com', '5amBYuiw'),
(13, 'Dexter', 'John', 'De Guzman', 'male', '0813', '7947591', 'dex@gmail.com', 'IoZQEdwO'),
(14, 'Josh', 'Andrew', 'Cumpas', 'male', '0905', '3547942', 'josh@gmail.com', 'JEIseZWK'),
(15, 'Johanes', 'Borgs', 'Claus', 'male', '0905', '8471654', 'johanes@gmail.com', 'qLHXuk1E'),
(16, 'Gero', 'Astria', 'Quita', 'male', '0905', '5464441', 'gero@gmail.com', 'lkXGS3Pg'),
(17, 'Kiel', 'Martin', 'Mano', 'male', '0905', '2547471', 'kiel@gmail.com', 'yYZrHb0v'),
(18, 'Rojen', 'Baradilo', 'Hernandez', 'male', '0905', '2564746', 'rojen@gmail.com', 'ngQBvKqa'),
(19, 'Luwe', 'Ewul', 'Gutierez', 'male', '0817', '7498579', 'luwe@gmail.com', '9uC8rWKe'),
(20, 'Tayog', 'Tayog', 'De Castro', 'male', '0817', '7498573', 'tayog@gmail.com', '05piPNEZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
