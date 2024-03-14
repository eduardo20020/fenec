-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 06:32 AM
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
-- Database: `fenec`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuarios`, `password`, `rol`) VALUES
('admin', '$2y$10$PP363.3B/wk1ds6k0ipmye2q/N7.ntPzNi592W8ru.Z2lFD2pFbo.', 'admin'),
('alumno', '$2y$10$YuNZnUBqWaWm1FiP4ztHzOjVNC0WiSXAlp./9FTmqqkwSU2jAlM/u', 'alumno'),
('brandon', '$2y$10$2ll/m49ZNtp5DZRZ9ihvoeghWTKPZyg3Snepq/4w.9671NVUxAtrC', 'alumno'),
('brandon2', '$2y$10$tqviCrBqBjQ4Tc0LrYP/ReJNTdD7bAGcdg5vQ3i7YIE8IsPpeycSm', 'admin'),
('doris', '$2y$10$QrFYg/gKWz3FbKN6u7E2p.nWIILhFPcrTuz9fpGkv83Dl2q.A4xKy', 'alumno'),
('pepe', '$2y$10$dxwShvuwYNkju9QlZ.hNuuXNKixpohRfAp2j19ivzctjPjJqMBtBu', 'alumno'),
('root', '$2y$10$UhfOEao4N8N7Ft0ha8id9uisU.Bo67nEdvWX5MHO/U3ljUFkOcHTG', 'alumno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
