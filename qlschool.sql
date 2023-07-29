-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 10:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh`
--

CREATE TABLE `diemdanh` (
  `id` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `ca` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `thang2` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `hocvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hocvienchuoi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monhoc` int(11) NOT NULL,
  `idlophoc` int(5) DEFAULT NULL,
  `hocvien_hocphi` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diemdanh`
--

INSERT INTO `diemdanh` (`id`, `ngay`, `ca`, `thang`, `thang2`, `hocvien`, `hocvienchuoi`, `created_at`, `updated_at`, `monhoc`, `idlophoc`, `hocvien_hocphi`) VALUES
(87, '2020-04-10', 3, 4, '4', '[\"2155\",\"2154\",\"2146\"]', '2155,2154,2146', '2020-04-10 01:58:30', '2020-04-10 01:58:30', 206, 15, '[{\"id\":\"2155\",\"hptheomon\":225000},{\"id\":\"2154\",\"hptheomon\":225000},{\"id\":\"2146\",\"hptheomon\":175000}]'),
(88, '2020-04-10', 2, 4, '4', '[\"2155\",\"2154\",\"2153\",\"2152\",\"2151\",\"2150\",\"2149\",\"2148\",\"2146\"]', '2155,2154,2153,2152,2151,2150,2149,2148,2146', '2020-04-10 07:37:12', '2020-04-10 07:37:12', 206, 15, '[{\"id\":\"2155\",\"hptheomon\":225000},{\"id\":\"2154\",\"hptheomon\":225000},{\"id\":\"2153\",\"hptheomon\":50000},{\"id\":\"2152\",\"hptheomon\":50000},{\"id\":\"2151\",\"hptheomon\":50000},{\"id\":\"2150\",\"hptheomon\":50000},{\"id\":\"2149\",\"hptheomon\":50000},{\"id\":\"2148\",\"hptheomon\":125000},{\"id\":\"2146\",\"hptheomon\":175000}]'),
(89, '2020-04-10', 2, 4, '4', '[\"2155\",\"2154\"]', '2155,2154', '2020-04-10 07:46:27', '2020-04-10 07:46:27', 205, 17, '[{\"id\":\"2155\",\"hptheomon\":180000},{\"id\":\"2154\",\"hptheomon\":180000}]'),
(90, '2020-04-10', 2, 4, '4', '[\"2152\",\"2151\",\"2150\",\"2149\",\"2148\",\"2146\"]', '2152,2151,2150,2149,2148,2146', '2020-04-10 07:46:51', '2020-04-10 07:46:51', 208, 15, '[{\"id\":\"2152\",\"hptheomon\":40000},{\"id\":\"2151\",\"hptheomon\":40000},{\"id\":\"2150\",\"hptheomon\":40000},{\"id\":\"2149\",\"hptheomon\":40000},{\"id\":\"2148\",\"hptheomon\":100000},{\"id\":\"2146\",\"hptheomon\":140000}]');

-- --------------------------------------------------------

--
-- Table structure for table `diemtheomon`
--

CREATE TABLE `diemtheomon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sv` int(11) NOT NULL,
  `id_mon` int(11) NOT NULL,
  `hocky` int(11) NOT NULL,
  `namhoc` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemthilan1` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diemthilan2` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tkmon` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tkmon_td10_l2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diemchu_lan1` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diemchu` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diemso_theodiemchu` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemtheo_td4_l2` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_lophoc` int(11) NOT NULL,
  `masv` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem_tbkt` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_tinhvaodiemtk` int(1) NOT NULL,
  `mon_tinvaodiemtichluy` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diemtheomon`
--

INSERT INTO `diemtheomon` (`id`, `id_sv`, `id_mon`, `hocky`, `namhoc`, `diemthilan1`, `diemthilan2`, `tkmon`, `tkmon_td10_l2`, `diemchu_lan1`, `diemchu`, `diemso_theodiemchu`, `diemtheo_td4_l2`, `created_at`, `updated_at`, `id_lophoc`, `masv`, `diem_tbkt`, `mon_tinhvaodiemtk`, `mon_tinvaodiemtichluy`) VALUES
(55, 701, 5, 1, '2019-2020', '7', NULL, '7.16', NULL, 'B', NULL, '3', NULL, '2020-05-23 04:50:38', '2020-05-23 04:50:38', 33, '11CX200103', '7.4', 0, 1),
(56, 701, 3, 1, '2019-2020', '6', NULL, '6.8', NULL, 'C+', NULL, '2.5', NULL, '2020-05-23 04:51:55', '2020-05-23 04:51:55', 33, '11CX200103', '8.0', 0, 1),
(57, 701, 11, 1, '2019-2020', '7', NULL, '6.84', NULL, 'C+', NULL, '2.5', NULL, '2020-05-23 04:54:26', '2020-05-23 04:54:26', 33, '11CX200103', '6.6', 0, 1),
(58, 701, 12, 1, '2019-2020', '9', NULL, '8.52', NULL, 'A', NULL, '4', NULL, '2020-05-23 04:55:48', '2020-05-23 04:55:48', 33, '11CX200103', '7.8', 0, 1),
(60, 701, 9, 1, '2019-2020', '9', NULL, '8.08', NULL, 'B+', NULL, '3.5', NULL, '2020-05-23 04:57:23', '2020-05-23 04:57:23', 33, '11CX200103', '6.7', 0, 1),
(62, 701, 13, 1, '2019-2020', '4', NULL, '5.08', NULL, 'D+', NULL, '1.5', NULL, '2020-05-24 06:51:27', '2020-05-24 06:51:27', 33, '11CX200103', '6.7', 0, 1),
(63, 701, 15, 1, '2019-2020', NULL, NULL, '0', NULL, 'F', '', '0', NULL, '2020-05-24 08:04:44', '2020-05-24 08:04:44', 33, '11CX200103', NULL, 1, NULL),
(65, 701, 14, 1, '2019-2020', NULL, NULL, '5.8', NULL, 'C', '', '2', NULL, '2020-05-24 08:09:49', '2020-05-24 08:09:49', 33, '11CX200103', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diemtongket`
--

CREATE TABLE `diemtongket` (
  `id` int(50) NOT NULL,
  `id_sv` int(20) DEFAULT NULL,
  `id_mon` int(5) DEFAULT NULL,
  `tk_monlan1` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_monlan2` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_lop` int(10) DEFAULT NULL,
  `hocky` int(1) DEFAULT NULL,
  `masv` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhoc` int(1) DEFAULT NULL,
  `diemthilan1` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemtrungbinhkiemtra` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kgdu_dkthi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diemtongket`
--

INSERT INTO `diemtongket` (`id`, `id_sv`, `id_mon`, `tk_monlan1`, `tk_monlan2`, `id_lop`, `hocky`, `masv`, `namhoc`, `diemthilan1`, `diemtrungbinhkiemtra`, `kgdu_dkthi`, `updated_at`) VALUES
(36, 747, 4, '7', NULL, 35, 2, '11CX200207', 2, '7', '7', 'Đã thi', '2021-04-30 08:32:05'),
(37, 746, 4, '7.2', NULL, 35, 2, '11CX200206', 2, '7', '7.5', 'Đã thi', '2021-04-30 08:32:05'),
(38, 745, 4, '8', NULL, 35, 2, '11CX200204', 2, '8', '8', 'Đã thi', '2021-04-30 08:32:05'),
(39, 744, 4, NULL, NULL, 35, 2, '11CX200203', 2, '0', '5', 'KĐT', NULL),
(40, 743, 4, '8', NULL, 35, 2, '11CX200201', 2, '8', '8', 'Đã thi', '2021-04-30 08:32:05'),
(41, 747, 9, NULL, NULL, 33, 1, '11CX200207', 2, '0', '7', 'KĐT', NULL),
(42, 746, 9, NULL, NULL, 33, 1, '11CX200206', 2, '0', '7', 'KĐT', NULL),
(43, 745, 9, NULL, NULL, 33, 1, '11CX200204', 2, '0', '8', 'KĐT', NULL),
(44, 744, 9, '7.7', NULL, 33, 1, '11CX200203', 2, '7.5', '8', 'Đã thi', '2021-05-01 02:16:24'),
(45, 743, 9, '6.8', NULL, 33, 1, '11CX200201', 2, '6', '8', 'Đã thi', '2021-05-01 02:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

CREATE TABLE `hocky` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hocky` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `ma` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketquahoctap`
--

CREATE TABLE `ketquahoctap` (
  `id` int(11) NOT NULL,
  `id_sv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_lop` int(11) NOT NULL,
  `namhoc` int(1) NOT NULL,
  `id_monhoc` int(5) NOT NULL,
  `hocky` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `diemtrungbinhkiemtra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_bomon` int(1) DEFAULT 1,
  `status_view` int(1) DEFAULT 1 COMMENT 'trang thai hien thi: null hien thi; 1 xoa khong hien thi',
  `diemthilan1` varchar(255) COLLATE utf8_unicode_ci DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_diemthi` int(1) DEFAULT 0,
  `status_daotao` int(1) DEFAULT 0,
  `dieukienthi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tp_khaothiduyet` int(1) DEFAULT 0,
  `tinchimon` int(1) DEFAULT NULL,
  `masv` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `kgdu_dkthi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gv_tao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bomon_duyet` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoaduyet` int(1) DEFAULT 0,
  `gio_khoaduyet` timestamp NULL DEFAULT NULL,
  `gio_bomonduyet` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gv_sua` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysua` timestamp NULL DEFAULT NULL,
  `daotaoduyet` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gio_daotaoduyet` timestamp NULL DEFAULT NULL,
  `nguoiduyet_khoa` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhsachthi_status` int(1) DEFAULT 0,
  `diemthilan2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketquahoctap`
--

INSERT INTO `ketquahoctap` (`id`, `id_sv`, `id_lop`, `namhoc`, `id_monhoc`, `hocky`, `diemtrungbinhkiemtra`, `status_bomon`, `status_view`, `diemthilan1`, `created_at`, `status_diemthi`, `status_daotao`, `dieukienthi`, `tp_khaothiduyet`, `tinchimon`, `masv`, `kgdu_dkthi`, `gv_tao`, `bomon_duyet`, `khoaduyet`, `gio_khoaduyet`, `gio_bomonduyet`, `updated_at`, `gv_sua`, `ngaysua`, `daotaoduyet`, `gio_daotaoduyet`, `nguoiduyet_khoa`, `danhsachthi_status`, `diemthilan2`) VALUES
(25, '[\"747\",\"746\",\"745\",\"744\",\"743\"]', 33, 2, 12, '2', '[\"7\",\"3\",\"5\",\"5\",\"8\"]', 2, 0, '[\"8\",\"0\",\"7.5\",\"6\",\"6\"]', '2021-05-02 08:11:39', 0, 1, '[\"\\u0110\\u01b0\\u1ee3c thi\",\"K\\u0110T\",\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\"]', 0, NULL, '[\"11CX200207\",\"11CX200206\",\"11CX200204\",\"11CX200203\",\"11CX200201\"]', '[\"\\u0110\\u00e3 thi\",\"K\\u0110T\",\"\\u0110\\u00e3 thi\",\"\\u0110\\u00e3 thi\",\"\\u0110\\u00e3 thi\"]', 'admin', 'admin', 1, '2021-05-02 03:47:49', '2021-05-02 03:47:31', NULL, 'admin', '2021-05-02 03:54:34', 'admin', '2021-05-02 03:48:02', 'admin', 0, NULL),
(26, '[\"747\",\"746\",\"745\",\"744\",\"743\"]', 35, 2, 12, '1', '[\"8.2\",\"7\",\"5\",\"7.5\",\"8\"]', 2, 1, '[\"8\",\"7\",\"6\",\"0\",\"5\"]', '2021-05-02 08:54:32', 0, 1, '[\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\",\"K\\u0110T\",\"\\u0110\\u01b0\\u1ee3c thi\"]', 0, NULL, '[\"11CX200207\",\"11CX200206\",\"11CX200204\",\"11CX200203\",\"11CX200201\"]', '[\"\\u0110\\u00e3 thi\",\"\\u0110\\u00e3 thi\",\"\\u0110\\u00e3 thi\",\"K\\u0110T\",\"\\u0110\\u00e3 thi\"]', 'admin', 'admin', 1, '2021-05-02 08:12:57', '2021-05-02 08:12:52', NULL, NULL, NULL, 'admin', '2021-05-02 08:13:03', 'admin', 0, '[\"7\",\"7\",\"7\",\"0\",\"7\"]'),
(27, '[\"747\",\"746\",\"745\",\"744\",\"743\"]', 35, 3, 13, '2', '[\"7\",\"8\",\"8.2\",\"7.5\",\"8\"]', 2, 1, '1', '2021-05-02 08:16:44', 0, 1, '[\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\",\"K\\u0110T\",\"\\u0110\\u01b0\\u1ee3c thi\",\"\\u0110\\u01b0\\u1ee3c thi\"]', 0, NULL, '[\"11CX200207\",\"11CX200206\",\"11CX200204\",\"11CX200203\",\"11CX200201\"]', NULL, 'admin', 'admin', 1, '2021-05-02 08:16:42', '2021-05-02 08:16:41', NULL, NULL, NULL, 'admin', '2021-05-02 08:16:44', 'admin', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usercreat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_hocvien` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `name`, `usercreat`, `created_at`, `updated_at`, `id_hocvien`) VALUES
(33, 'CX20.1', 'admin', '2020-05-23 04:42:30', '2020-05-23 04:42:30', '742,741,740,739,738,737,736,735,734,733,732,731,730,729,728,727,726,725,724,723,722,721,720,719,718,717,716,715,714,713,712,711,710,709,708,707,706,705,704,703,702,701'),
(35, 'CX20.2', 'admin', '2021-04-25 17:21:59', '2021-04-25 17:21:59', '747,746,745,744,743');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_01_135502_create_products_table', 2),
(4, '2020_03_20_021146_create_migrationlophoc', 3),
(5, '2020_04_15_091850_create_table_hocky_table', 4),
(6, '2020_04_15_092449_create_table_diemtheomon_table', 5),
(7, '2020_04_15_100722_create_table_sinhvien_table', 6),
(8, '2020_04_17_040951_create_table_monhoc_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinchi` int(11) NOT NULL,
  `nguoitao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mamon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `ten`, `tinchi`, `nguoitao`, `created_at`, `updated_at`, `mamon`) VALUES
(2, 'AUTOCAD', 4, 'admin', '2020-04-17 03:00:11', '2020-04-17 03:00:11', 'AUTOCAD'),
(3, 'Pháp luật đại cương', 2, 'admin', '2020-04-17 03:01:59', '2020-04-17 03:01:59', 'PLĐC'),
(4, 'Pháp luật xây dựng', 2, 'admin', '2020-04-17 03:02:15', '2020-04-17 03:02:15', 'PLXD'),
(5, 'Chính trị', 4, 'admin', '2020-05-03 18:41:17', '2020-05-03 18:41:17', 'CT'),
(9, 'Tin học', 3, 'admin', '2020-05-03 18:45:00', '2020-05-03 18:45:00', 'TH'),
(11, 'Ngoại Ngữ 1', 3, 'admin', '2020-05-09 08:18:45', '2020-05-09 08:18:45', 'NN1'),
(12, 'Vẽ xây dựng 1', 3, 'admin', '2020-05-09 09:07:55', '2020-05-09 09:07:55', 'VXD1'),
(13, 'Vật liệu xây dựng', 2, 'admin', '2020-05-09 09:10:37', '2020-05-09 09:10:37', 'VLXD'),
(14, 'Giáo dục thể chất', 2, 'admin', '2020-05-13 01:53:34', '2020-05-13 01:53:34', 'GDTC'),
(15, 'Giáo dục quốc phòng', 3, 'admin', '2020-05-13 01:55:50', '2020-05-13 01:55:50', 'GDQP');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_tendem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noisinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhaphoc` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoitao` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(60) COLLATE utf8mb4_unicode_ci DEFAULT '123123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `ho_tendem`, `ten`, `ma`, `created_at`, `updated_at`, `lop`, `ngaysinh`, `gioitinh`, `noisinh`, `nhaphoc`, `nguoitao`, `ghichu`, `password`) VALUES
(701, 'Nguyễn Văn', 'Nam', '11CX200103', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '01/11/1998', 'Nam', 'Hải Hậu - Nam Định ', '43515', 'admin', NULL, '123123'),
(702, 'Trương Thanh', 'Hà', '11CX200104', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '08/03/1997', 'Nam', 'Tân Yên - Bắc Giang ', '43528', 'admin', NULL, '123123'),
(703, 'Nguyễn Công Hoàng', 'Ninh', '11CX200105', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '15/11/1991', 'Nam', 'Thuận Thành - Bắc Ninh', '43532', 'admin', NULL, '123123'),
(704, 'Trương Viết', 'Quốc', '11CX200106', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '30/08/2000', 'Nam', 'Thạch Hà - Hà Tĩnh ', '43543', 'admin', NULL, '123123'),
(705, 'Nguyễn Ngọc', 'Huy', '11CX200107', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '05/01/1999', 'Nam', 'Ba Vì - Hà Nội', '43546', 'admin', 'CX18.3 xuống BL GDQP, GDTC', '123123'),
(706, 'Lưu Đình Hoàng', 'Ánh', '11CX200108', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '12/12/1999', 'Nam', 'Thành phố Hòa Bình - Hòa Bình', '43556', 'admin', NULL, '123123'),
(707, 'Võ Viết', 'Sơn', '11CX200109', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '05/12/1998', 'Nam', 'Yên Định - Thanh Hóa ', '43556', 'admin', NULL, '123123'),
(708, 'Nguyễn Hữu', 'Tú', '11CX200110', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '02/08/1997', 'Nam', 'Thanh Trì - Hà Nội ', '43559', 'admin', NULL, '123123'),
(709, 'Đặng Minh', 'Hoàng', '11CX200111', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '13/04/1997', 'Nam', 'Vĩnh Yên - Vĩnh Phúc', '43573', 'admin', NULL, '123123'),
(710, 'Nguyễn Văn', 'Thiên', '11CX200112', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '02/09/1997', 'Nam', 'Thạch Hà - Hà Tĩnh ', '43609', 'admin', NULL, '123123'),
(711, 'Đỗ Ngọc', 'Hiếu', '11CX200113', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '25/03/1999', 'Nam', 'Thạch Thất - Hà Nội', '43614', 'admin', NULL, '123123'),
(712, 'Nguyễn Văn', 'Hạnh', '11CX200114', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '20/04/1991', 'Nam', 'Lục Nam - Bắc Giang', '43633', 'admin', NULL, '123123'),
(713, 'Nguyễn Văn', 'Đại', '11CX200115', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '05/08/1989', 'Nam', 'Lập Thạch - Vĩnh Phúc', NULL, 'admin', NULL, '123123'),
(714, 'Đinh Văn', 'Phương', '11CX200116', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '12/09/1989', 'Nam', 'Ứng Hòa - Hà Nội ', NULL, 'admin', NULL, '123123'),
(715, 'Nguyễn Quang', 'Anh', '11CX200117', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '24/01/2001', 'Nam', 'Ý Yên - Nam Định ', NULL, 'admin', NULL, '123123'),
(716, 'Đỗ Hoàng', 'Anh', '11CX200118', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '28/03/2001', 'Nam', 'Hà Đông - Hà Nội', NULL, 'admin', NULL, '123123'),
(717, 'Nguyễn Tuấn', 'Anh', '11CX200119', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '04/06/2001', 'Nam', 'Đan Phượng - Hà Nội', NULL, 'admin', NULL, '123123'),
(718, 'Lưu Bá', 'Đạt', '11CX200120', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '01/12/2001', 'Nam', 'Thanh Oai - Hà Nội', NULL, 'admin', NULL, '123123'),
(719, 'Nguyễn Doãn', 'Đức', '11CX200121', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '13/07/2001', 'Nam', 'Đông Anh - Hà Nội ', NULL, 'admin', NULL, '123123'),
(720, 'Phùng Văn', 'Hà', '11CX200122', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '26/03/2001', 'Nam', 'Ba Vì - Hà Nội', NULL, 'admin', NULL, '123123'),
(721, 'Nguyễn Ngọc', 'Hải', '11CX200123', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '10/03/2001', 'Nam', 'Hà Đông - Hà Nội', NULL, 'admin', NULL, '123123'),
(722, 'Chu Văn', 'Hạnh', '11CX200124', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '21/04/2001', 'Nam', 'Nam Đàn - Nghệ An ', NULL, 'admin', NULL, '123123'),
(723, 'Phạm Quang ', 'Hiệp', '11CX200125', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '20/12/2001', 'Nam', 'Mê Linh - Hà Nội', NULL, 'admin', NULL, '123123'),
(724, 'Lê Trung', 'Hiếu', '11CX200126', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '14/11/2000', 'Nam', 'Thanh Oai - Hà Nội', NULL, 'admin', NULL, '123123'),
(725, 'Đinh Quang', 'Hiếu', '11CX200127', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '15/05/2001', 'Nam', 'Hưng Hà - Thái Bình', NULL, 'admin', NULL, '123123'),
(726, 'Phạm Xuân', 'Hoàng', '11CX200128', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '29/03/2001', 'Nam', 'Kiến Xương - Thái Bình', NULL, 'admin', NULL, '123123'),
(727, 'Nguyễn Doãn', 'Hồng', '11CX200129', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '05/04/2001', 'Nam', 'Đông Anh - Hà Nội', NULL, 'admin', NULL, '123123'),
(728, 'Đỗ Quang', 'Huy', '11CX200130', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '01/01/2001', 'Nam', 'Thọ Xuân - Thanh Hóa ', NULL, 'admin', NULL, '123123'),
(729, 'Vũ Đức', 'Khiêm', '11CX200131', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '25/10/2000', 'Nam', 'Thái Thụy - Thái Bình', NULL, 'admin', NULL, '123123'),
(730, 'Nguyễn Trung', 'Kiên', '11CX200132', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '07/10/2001', 'Nam', 'Đông Hưng - Thái Bình', NULL, 'admin', NULL, '123123'),
(731, 'Nguyễn Tiến', 'Mạnh', '11CX200133', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '02/08/2001', 'Nam', 'Phú Xuyên - Hà Nội', NULL, 'admin', NULL, '123123'),
(732, 'Lê Hồng', 'Minh', '11CX200134', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '12/04/2001', 'Nam', 'Phù Cừ - Hưng Yên ', NULL, 'admin', NULL, '123123'),
(733, 'Nguyễn Văn', 'Phong', '11CX200135', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '21/02/2001', 'Nam', 'Kim Động - Hưng Yên ', NULL, 'admin', NULL, '123123'),
(734, 'Đỗ Văn', 'Phúc', '11CX200136', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '24/01/2001', 'Nam', 'Hải Hậu - Nam Định ', NULL, 'admin', NULL, '123123'),
(735, 'Trần Văn', 'Sơn', '11CX200137', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '23/06/2000', 'Nam', 'Tiên Lữ - Hưng Yên ', NULL, 'admin', NULL, '123123'),
(736, 'Chu Văn', 'Sơn', '11CX200138', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '08/05/2001', 'Nam', 'Ba Vì - Hà Nội', NULL, 'admin', NULL, '123123'),
(737, 'Vũ Việt', 'Tây', '11CX200139', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '23/11/2001', 'Nam', 'Thường Tín - Hà Nội', NULL, 'admin', NULL, '123123'),
(738, 'Nguyễn Tiến', 'Thắng', '11CX200140', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '09/09/1995', 'Nam', 'Bắc Từ Liêm - Hà Nội', NULL, 'admin', NULL, '123123'),
(739, 'Đinh Quang ', 'Trường', '11CX200141', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '24/09/2001', 'Nam', 'Hưng Hà - Thái Bình', NULL, 'admin', NULL, '123123'),
(740, 'Đinh Như', 'Quynh', '11CX200142', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '10/09/1997', 'Nam', 'Đông Hưng - Thái Bình', NULL, 'admin', NULL, '123123'),
(741, 'Phùng Minh', 'Sơn', '11CX200101', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '16/10/2000', 'Nam', 'Mê Linh - Hà Nội', '43480', 'admin', 'QĐXT số 32 ngày 13.01.20', '123123'),
(742, 'Giang Văn', 'Danh', '11CX200102', '2020-05-23 04:37:44', '2020-05-23 04:37:44', 'CX20.1', '25/02/1995', 'Nam', 'Thái Thụy - Thái Bình', '43511', 'admin', 'QĐXT số 32 ngày 13.01.20', '123123'),
(743, 'Nguyễn Thành', 'An', '11CX200201', '2021-04-25 17:21:19', '2021-04-25 17:21:19', 'CX20.2', '28/12/2001', 'Nam', 'Ba Vì - Hà Nội', 'null', 'admin', 'null', '123123'),
(744, 'Nguyễn Mỹ', 'Âu', '11CX200203', '2021-04-25 17:21:19', '2021-04-25 17:21:19', 'CX20.2', '01/04/1996', 'Nam', 'Đô Lương - Nghệ An ', 'null', 'admin', 'null', '123123'),
(745, 'Nguyễn Văn', 'Đạt', '11CX200204', '2021-04-25 17:21:19', '2021-04-25 17:21:19', 'CX20.2', '21/05/2001', 'Nam', 'Gia Viễn - Ninh Bình ', 'null', 'admin', 'null', '123123'),
(746, 'Nguyễn Huy', 'Đức', '11CX200206', '2021-04-25 17:21:19', '2021-04-25 17:21:19', 'CX20.2', '04/10/1997', 'Nam', 'Kiến Xương - Thái Bình', 'null', 'admin', 'null', '123123'),
(747, 'Trương Huỳnh', 'Đức', '11CX200207', '2021-04-25 17:21:19', '2021-04-25 17:21:19', 'CX20.2', '22/05/2001', 'Nam', 'Văn Chấn - Yên Bái ', 'null', 'admin', 'null', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quyentao` int(1) DEFAULT 0,
  `bomon_duyet` int(1) DEFAULT 0,
  `khoaduyet` int(1) DEFAULT 0,
  `daotaoduyet` int(1) DEFAULT 0,
  `tpkhaothi_duyet` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `quyentao`, `bomon_duyet`, `khoaduyet`, `daotaoduyet`, `tpkhaothi_duyet`) VALUES
(5, 'quoclap', 'dantri@gmail.com', '$2y$10$MCUzlNQEzgdw0Rw.6n1ft.cidHDxiIEk/rC1GOxyPYZ557HlM1piq', 1, NULL, '2017-10-16 19:31:17', '2017-10-16 19:31:17', NULL, 0, NULL, NULL, NULL),
(6, 'admin', 'lap123@gmail.com', '$2y$10$iZ8tRanoZmDm5RveYHNK1uXMopu2p1yphpU0iffWeUSKkf.c51mxy', 1, 'xfI5ygPu1TMNkPUq0aQqkioASRbQdHCBxB4FPfKR8kbFLTxv7P98cQ1sVrZF', '2017-10-16 20:28:56', '2019-08-15 02:33:29', NULL, 0, NULL, NULL, NULL),
(9, 'hoaphuong@gmail.com', 'phuong@gmail.com', '$2y$10$jjIv.99NugWagllLMjXRq.xtE3wlp/NuMGxnyX4zwpK3LelIaKcTm', 1, NULL, '2018-02-17 06:40:38', '2018-02-17 06:40:38', NULL, 0, NULL, NULL, NULL),
(10, 'vukhacanh', 'vukhacanh17@gmail.com', '$2y$10$NGGr.PAyPwUFOXuIQtbTaecyUbsrDV21HhC8GI.kNgXAC64kRq49i', 1, 'ykzZX0GloWhO4EHSeonQYVciPCIstx4GdcNPSF7wujHDS5KqpdzWBG7noTdk', '2018-11-14 06:29:34', '2018-11-16 20:43:26', NULL, 0, NULL, NULL, NULL),
(11, 'laptrinh678', 'laptrinh678@gmail.com', '$2y$10$Yywppw.HNqFHSshI1hyKMu79uv33jpYnP7KgKdkpjUCJp9uQiZbHK', 1, NULL, '2018-11-14 07:19:59', '2018-11-14 07:19:59', NULL, 0, NULL, NULL, NULL),
(12, 'netvu', 'netvu1980@gmail.com', '$2y$10$1gSM5FzhxPORxObFpcO7GOSBHeDNcTo5lsRG6r3GaEr5jlS2arSmq', 2, NULL, '2021-05-01 01:11:09', '2021-05-01 01:11:09', NULL, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diemtheomon`
--
ALTER TABLE `diemtheomon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diemtongket`
--
ALTER TABLE `diemtongket`
  ADD KEY `id` (`id`);

--
-- Indexes for table `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diemdanh`
--
ALTER TABLE `diemdanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `diemtheomon`
--
ALTER TABLE `diemtheomon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `diemtongket`
--
ALTER TABLE `diemtongket`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `hocky`
--
ALTER TABLE `hocky`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=748;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
