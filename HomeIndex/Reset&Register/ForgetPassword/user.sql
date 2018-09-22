-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 03:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `phone`, `isEmailConfirmed`, `token`) VALUES
('anianianoano', 'aniani.anoano@gmail.com', '$2y$10$RJtAozPluuVGVcZ7wXeC0uaxguSJlhu3NEDS8KpIX9sxuVd22shq6', '123456789', 1, 'NrQw146O*B'),
('zerahya', 'zerahyaa@gmail.com', '$2y$10$dt4n1tk8LT8BHw2rloujYOnPeIBMcrSbwT8ATWXuDLcvx7tAQX6U2', '0892839218392', 0, 'SA5EPZWq9h'),
('Agung', 'Agungskak22@gmail.com', '$2y$10$WP0swpYjIACpGGpgNY0nY.C8SeufnG4u0pqqYtiq9L4jfJMinVuBK', '123456', 0, 'ry(8p$lZ)R'),
('Arifandi Hartono', 'aniani.anoano@gmail.com', '$2y$10$bcUq6AlHF5oCo8vzJjwOM.OZmOHJYb5iZx9x6nCvr1kH3TgFJD4PO', '123', 0, 'xW9img(NA0'),
('123', 'aniani.anoano@gmail.com', '$2y$10$7KU1rcF6xLq5xXQ1QrnD8u7rC17tfOcIFvrFiB1xvhamvyb8Pc2s2', '123', 0, 'NcJlmOWj!y'),
('123', 'aniani.anoano@gmail.com', '$2y$10$nhqnV5mw46QRkaP2UR/yG.YyFOBvvvJjMve8r5.mXF.8FTjJqN5cm', '123', 0, 'fBuC13jhw4'),
('123', 'aniani.anoano@gmail.com', '$2y$10$hIXN/bQcuvUEb1eigYFPVOVCFD5aIyVM9hA0e9Gvfj/xdc.Bvp2DW', '123', 0, 'Z3vrIJek4b'),
('123', 'aniani.anoano@gmail.com', '$2y$10$92gTdFvuSOPfnu0d9S2aZOnKv4a6vFU1fF3wYeTGUwYTVGK/YxNo2', '123', 0, 'h*DiwyBEq4'),
('123', 'aniani.anoano@gmail.com', '$2y$10$7qdhmCtE6gKXT.UUD0FeReMn9.tAcIlm5MytoE1k8FMh7yQb/IRYy', '123', 0, 'F15LoJHecU'),
('123', 'aniani.anoano@gmail.com', '$2y$10$Klkje1Z7LWgPmrJbPVa8J.wWyHp3.jJyEEv2dOd0XJ8BkYgAaFS4G', '123', 0, 'ECg)WA*Hit'),
('123', 'aniani.anoano@gmail.com', '$2y$10$I1u2ll5xo8AQlE0wyufBFuts7YEvDDc5gYNk7PHYP/V/EUGAaQ3Na', '123', 0, 'myX9Ot*5Li'),
('123', 'aniani.anoano@gmail.com', '$2y$10$zApFDrAfDiACkNke7mR3wu8iAikf64bTA6ZnL.38E89ijn1yL0IWW', '123', 0, '!vk0AYDi7L'),
('123', 'aniani.anoano@gmail.com', '$2y$10$dxfpcpqW5xJczePXLBgam.5aimkY.HoYut9aM3qa/OZCB3AwwOOnK', '123', 0, 't3eHNSLG(E'),
('123', 'aniani.anoano@gmail.com', '$2y$10$a/KkURjSqQE0HjNlzty68eEhkxjBg73nIHC/fGILZ3TmXBgN9zjge', '123', 0, 'oTLG8np$gB'),
('123', 'aniani.anoano@gmail.com', '$2y$10$zHTFVPK/oQ9no1pzGhn97.L41IZoYFQ9JLbBR9vfTAwJx7cN2rWuC', '123', 0, '!dZAeLUT$W'),
('123', 'aniani.anoano@gmail.com', '$2y$10$HSHEX50..lOJjo8WRki3HuIs3PE5TcGTi9vd1xzWdNyFW9BllwFaa', '123', 0, 'gmiHYfqlFL'),
('123', 'aniani.anoano@gmail.com', '$2y$10$KHG0vrAFZ2ACgpXUIgfriefA7/7q7YIR3M1vRldRTu7xFiXtItccC', '123', 0, 'o9VKRdhab3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
