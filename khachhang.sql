-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 01:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khachhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `muahang`
--

CREATE TABLE `muahang` (
  `tenkhachang` text NOT NULL,
  `tendangnhap` text NOT NULL,
  `sodienthoai` text NOT NULL,
  `tenhang` text NOT NULL,
  `mahang` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` bigint(20) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoankhachang`
--

CREATE TABLE `taikhoankhachang` (
  `tendangnhap` text NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinhanghoa`
--

CREATE TABLE `thongtinhanghoa` (
  `tenhang` int(11) NOT NULL,
  `mahang` int(11) NOT NULL,
  `giatien` bigint(20) NOT NULL,
  `ngaynhap` date NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachhang`
--

CREATE TABLE `thongtinkhachhang` (
  `tenkhachang` text NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
