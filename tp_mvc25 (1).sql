-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 05:30 PM
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
-- Database: `tp_mvc25`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(1, 'Computer Science', 'Jurusan Ilmu Komputer & Pemrograman'),
(2, 'Mathematics Education', 'Jurusan Pendidikan Matematika'),
(3, 'Physics Education', 'Jurusan Pendidikan Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `join_date` date NOT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `nidn`, `phone`, `join_date`, `department_id`) VALUES
(1, 'Dewi Lestari', '1990012345', '082345678901', '2021-02-15', 1),
(2, 'Budi Hartono', '1988001122', '081312345678', '2019-06-10', 2),
(3, 'Siti Rahmawati', '1995123456', '081223344556', '2022-01-20', 1),
(4, 'Rizky Maulana', '1987112233', '081355667788', '2018-11-05', 3),
(5, 'Indah Fitriani', '1999332211', '082113579246', '2023-03-12', 1),
(6, 'Taufik Hidayat', '1978123499', '081298765432', '2017-09-25', 3),
(7, 'Nina Marlina', '2000123455', '083812345678', '2024-04-02', 2),
(8, 'Hendra Saputra', '1989332299', '081377744411', '2016-12-01', 3),
(9, 'Lukman Fajar', '1997881122', '081290011223', '2020-05-30', 1),
(10, 'Wulan Anggraini', '1999112200', '082212345987', '2022-07-07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `lecturer_id`, `address`, `birthdate`, `bio`) VALUES
(1, 1, 'Jl. Merdeka No.10, Bandung', '1985-03-12', 'Ahli Machine Learning & Data Science.'),
(2, 2, 'Jl. Veteran No.5, Cimahi', '1980-11-22', 'Dosen senior matematika terapan.'),
(3, 3, 'Jl. Anggrek No.7, Bandung', '1990-01-08', 'Fokus pada jaringan komputer & keamanan.'),
(4, 4, 'Jl. Sukajadi No.15, Bandung', '1983-07-17', 'Mengajar fisika dasar & elektronika.'),
(5, 5, 'Jl. Melati No.3, Cimahi', '1992-09-28', 'Peneliti di bidang kecerdasan buatan.'),
(6, 6, 'Jl. Kenanga No.4, Bandung', '1979-04-02', 'Dosen fisika eksperimen & laboratoris.'),
(7, 7, 'Jl. Raya UPI No.19, Bandung', '2000-02-19', 'Fokus pada pendidikan matematika modern.'),
(8, 8, 'Jl. Terusan No.12, Bandung', '1988-12-05', 'Ahli fisika komputasi & simulasi.'),
(9, 9, 'Jl. Cikutra No.9, Bandung', '1996-06-14', 'Mengajar basis data & backend dev.'),
(10, 10, 'Jl. Pajajaran No.20, Bandung', '1999-10-30', 'Minat pada AI education & teknologi pembelajaran.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dept` (`department_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `fk_dept` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
