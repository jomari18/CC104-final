-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 04:31 PM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(7, 'jom', 'moj', 'Jom'),
(20, 'Mojxd', '$2y$10$S62yohef9.PgPW1Q08AtlOTAdkoUo0eu0r0hpshzFA9HiV6xw/hhS', 'Jomari Candido'),
(21, 'Mojxd1', '$2y$10$cWpH6Xa0RiZE56U7DuRhOegANH52ETP5bygp8jaNhuD7b72VdRrnO', 'Candido, Jomari M.'),
(22, 'Mojxd123', '$2y$10$v5VnTW4MvPT6DMmF8noyzuCsOG0vurF2vjfH66OrpoksYrqVVv2ZO', 'hahahapogi'),
(23, 'Moj123', '$2y$10$ZnxlvnSdF55zayPU/n5wx.9g2jxxeON4kLwueA1W37O/.53CbjVIK', 'Candidooo'),
(24, 'moj', '$2y$10$nX6Kz1iIcgsmR5X9K53ziOSnN0S0DXT9KV6FanHfNDiWkDeQmeAWC', 'Jom'),
(25, '123', '$2y$10$RwSEtHH6N3sDY44qcXWQ.uAlOpEgK0IXIPzSaim3oiLwzAXeGFeRC', '123'),
(26, 'Joseph', '$2y$10$nO1UoGAGn1OVPv1RS8rBWeC6ZRJccd3VERZ9./k2oyHyUy4B9bX2m', 'Josephn Marlon'),
(27, 'asdfg', '$2y$10$oPVN/IceoVUcuvz66mGozeeJgLchvCdwtIdLVnCTJAEij0nM9PEqq', 'asdfg'),
(28, '09', '$2y$10$UpGhD661b9yazSUJwzvbZutePJU.vz.1NMtrpODOTgDlzIeBkVyka', '12334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
