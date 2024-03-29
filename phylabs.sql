-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 03:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phylabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `compounds`
--

CREATE TABLE `compounds` (
  `id` int(11) NOT NULL,
  `name` varchar(251) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compounds`
--

INSERT INTO `compounds` (`id`, `name`, `updated_at`, `created_at`) VALUES
(33, 'H20+NaOH', '2021-12-28 23:53:13', '2021-12-28 23:53:13'),
(34, 'H20+NaOH', '2021-12-28 23:53:37', '2021-12-28 23:53:37'),
(35, 'H20+NaOH', '2021-12-29 00:02:42', '2021-12-29 00:02:42'),
(36, 'H20+NaOH', '2021-12-29 00:07:26', '2021-12-29 00:07:26'),
(37, 'H20+NaOH', '2021-12-29 00:08:38', '2021-12-29 00:08:38'),
(38, 'H20+NaOH', '2021-12-29 00:09:20', '2021-12-29 00:09:20'),
(39, 'H20+NaOH', '2021-12-29 00:09:24', '2021-12-29 00:09:24'),
(40, 'H20+NaOH', '2021-12-29 00:10:35', '2021-12-29 00:10:35'),
(41, 'H20+NaOH', '2021-12-29 00:10:40', '2021-12-29 00:10:40'),
(42, 'H20+NaOH', '2021-12-29 00:10:49', '2021-12-29 00:10:49'),
(43, 'H20+NaOH', '2021-12-29 00:10:52', '2021-12-29 00:10:52'),
(44, 'H20+NaOH', '2021-12-29 00:13:50', '2021-12-29 00:13:50'),
(45, 'H20+NaOH', '2021-12-29 00:19:21', '2021-12-29 00:19:21'),
(46, 'H20+NaOH', '2021-12-29 00:19:42', '2021-12-29 00:19:42'),
(47, 'H20+NaOH', '2021-12-29 00:24:51', '2021-12-29 00:24:51'),
(48, 'H20+NaOH', '2021-12-29 00:32:29', '2021-12-29 00:32:29'),
(49, 'H20+NaOH', '2021-12-29 00:34:05', '2021-12-29 00:34:05'),
(50, 'H20+NaOH', '2021-12-29 00:34:24', '2021-12-29 00:34:24'),
(51, 'H20+NaOH', '2021-12-29 00:34:35', '2021-12-29 00:34:35'),
(52, 'H20+NaOH', '2021-12-29 00:35:23', '2021-12-29 00:35:23'),
(53, 'H20+NaOH', '2021-12-29 00:37:34', '2021-12-29 00:37:34'),
(54, 'H20+NaOH', '2021-12-29 00:41:59', '2021-12-29 00:41:59'),
(55, 'H20+NaOH', '2021-12-29 00:45:18', '2021-12-29 00:45:18'),
(56, 'H20+NaOH', '2021-12-29 00:49:41', '2021-12-29 00:49:41'),
(57, 'H20+NaOH', '2021-12-29 00:49:55', '2021-12-29 00:49:55'),
(58, 'H20+NaOH', '2021-12-29 07:09:33', '2021-12-29 07:09:33'),
(59, 'H20+NaOH', '2021-12-29 07:10:16', '2021-12-29 07:10:16'),
(60, 'H20+NaOH', '2021-12-29 07:11:01', '2021-12-29 07:11:01'),
(61, 'H20+NaOH', '2021-12-29 07:11:32', '2021-12-29 07:11:32'),
(62, 'H20+NaOH', '2021-12-29 07:17:24', '2021-12-29 07:17:24'),
(63, 'H20+NaOH', '2021-12-29 07:19:54', '2021-12-29 07:19:54'),
(64, 'H20+NaOH', '2021-12-29 07:21:35', '2021-12-29 07:21:35'),
(65, 'H20+NaOH', '2021-12-29 07:23:08', '2021-12-29 07:23:08'),
(66, 'H20+NaOH', '2021-12-29 07:25:06', '2021-12-29 07:25:06'),
(67, 'H20+NaOH', '2021-12-29 07:25:34', '2021-12-29 07:25:34'),
(68, 'H20+NaOH', '2021-12-29 07:26:04', '2021-12-29 07:26:04'),
(69, 'H20+NaOH', '2021-12-29 07:26:43', '2021-12-29 07:26:43'),
(70, 'H20+NaOH', '2021-12-29 07:27:06', '2021-12-29 07:27:06'),
(71, 'H20+NaOH', '2021-12-29 07:27:21', '2021-12-29 07:27:21'),
(72, 'H20+NaOH', '2021-12-29 07:27:35', '2021-12-29 07:27:35'),
(73, 'H20+NaOH', '2021-12-29 07:28:20', '2021-12-29 07:28:20'),
(74, 'H20+NaOH', '2021-12-29 07:28:30', '2021-12-29 07:28:30'),
(75, 'H20+NaOH', '2021-12-29 07:28:46', '2021-12-29 07:28:46'),
(76, 'H20+NaOH', '2021-12-29 07:28:58', '2021-12-29 07:28:58'),
(77, 'H20+NaOH', '2021-12-29 07:29:10', '2021-12-29 07:29:10'),
(78, 'H20+NaOH', '2021-12-29 07:29:27', '2021-12-29 07:29:27'),
(79, 'H20+NaOH', '2021-12-29 07:29:41', '2021-12-29 07:29:41'),
(80, 'H20+NaOH', '2021-12-29 07:31:32', '2021-12-29 07:31:32'),
(81, 'H20+NaOH', '2021-12-29 07:32:18', '2021-12-29 07:32:18'),
(82, 'H20+NaOH', '2021-12-29 07:33:03', '2021-12-29 07:33:03'),
(83, 'H20+NaOH', '2021-12-29 07:34:12', '2021-12-29 07:34:12'),
(84, 'H20+NaOH', '2021-12-29 07:34:36', '2021-12-29 07:34:36'),
(85, 'H20+NaOH', '2021-12-29 07:36:52', '2021-12-29 07:36:52'),
(86, 'H20+NaOH', '2021-12-29 07:37:12', '2021-12-29 07:37:12'),
(87, 'H20+NaOH', '2021-12-29 07:37:52', '2021-12-29 07:37:52'),
(88, 'H20+NaOH', '2021-12-29 07:39:49', '2021-12-29 07:39:49'),
(89, 'H20+NaOH', '2021-12-29 07:39:50', '2021-12-29 07:39:50'),
(90, 'H20+NaOH', '2021-12-29 07:46:39', '2021-12-29 07:46:39'),
(91, 'H20+NaOH', '2021-12-29 07:50:17', '2021-12-29 07:50:17'),
(92, 'H20+NaOH', '2021-12-29 08:21:19', '2021-12-29 08:21:19'),
(93, 'H20+NaOH', '2021-12-29 08:22:02', '2021-12-29 08:22:02'),
(94, 'H20+NaOH', '2021-12-29 08:22:06', '2021-12-29 08:22:06'),
(95, 'H20+NaOH', '2021-12-29 08:22:21', '2021-12-29 08:22:21'),
(96, 'H20+NaOH', '2021-12-29 08:22:45', '2021-12-29 08:22:45'),
(97, 'H20+NaOH', '2021-12-29 08:23:17', '2021-12-29 08:23:17'),
(98, 'H20+NaOH', '2021-12-29 08:23:20', '2021-12-29 08:23:20'),
(99, 'H20+NaOH', '2021-12-29 09:12:48', '2021-12-29 09:12:48'),
(100, 'H20+NaOH', '2021-12-29 09:13:37', '2021-12-29 09:13:37'),
(101, 'H20+NaOH', '2021-12-29 09:14:08', '2021-12-29 09:14:08'),
(102, 'H20+NaOH', '2021-12-29 09:17:06', '2021-12-29 09:17:06'),
(103, 'H20+NaOH', '2021-12-29 09:18:18', '2021-12-29 09:18:18'),
(104, 'H20+NaOH', '2021-12-29 09:18:42', '2021-12-29 09:18:42'),
(105, 'H20+NaOH', '2021-12-29 09:21:46', '2021-12-29 09:21:46'),
(106, 'H20+NaOH', '2021-12-29 09:22:03', '2021-12-29 09:22:03'),
(107, 'H20+NaOH', '2021-12-29 09:22:48', '2021-12-29 09:22:48'),
(108, 'H20+NaOH', '2021-12-29 09:23:01', '2021-12-29 09:23:01'),
(109, 'H20+NaOH', '2021-12-29 09:23:27', '2021-12-29 09:23:27'),
(110, 'H20+NaOH', '2021-12-29 09:23:30', '2021-12-29 09:23:30'),
(111, 'H20+NaOH', '2021-12-29 09:25:03', '2021-12-29 09:25:03'),
(112, 'H20+NaOH', '2021-12-29 09:38:35', '2021-12-29 09:38:35'),
(113, 'H20+NaOH', '2021-12-29 09:39:02', '2021-12-29 09:39:02'),
(114, 'H', '2021-12-29 09:39:31', '2021-12-29 09:39:31'),
(115, 'H20+NaOH', '2021-12-29 10:07:52', '2021-12-29 10:07:52'),
(116, 'H20+NaOH', '2021-12-29 10:08:22', '2021-12-29 10:08:22'),
(117, 'H20+NaOH', '2021-12-29 10:08:41', '2021-12-29 10:08:41'),
(118, 'H20+NaOH', '2021-12-29 10:09:03', '2021-12-29 10:09:03'),
(119, 'H20+NaOH', '2021-12-29 10:09:20', '2021-12-29 10:09:20'),
(120, 'H20+NaOH', '2021-12-29 10:09:56', '2021-12-29 10:09:56'),
(121, 'H20+NaOH', '2021-12-29 10:10:16', '2021-12-29 10:10:16'),
(122, 'H20+NaOH', '2021-12-29 10:11:46', '2021-12-29 10:11:46'),
(123, 'H20+NaOH', '2021-12-29 10:12:08', '2021-12-29 10:12:08'),
(124, 'H20+NaOH', '2021-12-29 10:13:06', '2021-12-29 10:13:06'),
(125, 'H20+NaOH', '2021-12-29 10:14:50', '2021-12-29 10:14:50'),
(126, 'H20+NaOH', '2021-12-29 10:17:23', '2021-12-29 10:17:23'),
(127, 'H20+NaOH', '2021-12-29 10:18:15', '2021-12-29 10:18:15'),
(128, 'H20+NaOH', '2021-12-29 10:19:32', '2021-12-29 10:19:32'),
(129, 'H20+NaOH', '2021-12-29 10:22:55', '2021-12-29 10:22:55'),
(130, 'H20+NaOH', '2021-12-29 10:24:25', '2021-12-29 10:24:25'),
(131, 'H20+NaOH', '2021-12-29 10:25:09', '2021-12-29 10:25:09'),
(132, 'H20+NaOH', '2021-12-29 10:25:43', '2021-12-29 10:25:43'),
(133, 'H20+NaOH', '2021-12-29 10:26:20', '2021-12-29 10:26:20'),
(134, 'H20+NaOH', '2021-12-29 10:27:34', '2021-12-29 10:27:34'),
(135, 'H20+NaOH', '2021-12-29 10:28:05', '2021-12-29 10:28:05'),
(136, 'H20+NaOH', '2021-12-29 10:28:08', '2021-12-29 10:28:08'),
(137, 'H20+NaOH', '2021-12-29 10:28:43', '2021-12-29 10:28:43'),
(138, 'H20+NaOH', '2021-12-29 10:45:39', '2021-12-29 10:45:39'),
(139, 'H20+NaOH', '2021-12-29 10:47:03', '2021-12-29 10:47:03'),
(140, NULL, '2021-12-29 11:32:59', '2021-12-29 11:32:59'),
(141, NULL, '2021-12-29 11:33:03', '2021-12-29 11:33:03'),
(142, 'H20+NaOH', '2021-12-29 12:00:00', '2021-12-29 12:00:00'),
(143, 'H20+NaOH', '2021-12-29 12:00:32', '2021-12-29 12:00:32'),
(144, 'H20+NaOH', '2021-12-29 12:00:59', '2021-12-29 12:00:59'),
(145, 'H20+NaOH', '2021-12-29 12:31:23', '2021-12-29 12:31:23'),
(146, 'H20+NaOH', '2021-12-29 13:15:00', '2021-12-29 13:15:00'),
(147, 'NaOH + H2O', '2021-12-29 13:18:41', '2021-12-29 13:18:41'),
(148, 'NaOH + H2O', '2021-12-29 13:24:16', '2021-12-29 13:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` varchar(3) DEFAULT NULL,
  `name` varchar(69) DEFAULT NULL,
  `symbol` varchar(6) DEFAULT NULL,
  `atomic_number` varchar(13) DEFAULT NULL,
  `atomic_weight` varchar(13) DEFAULT NULL,
  `density` varchar(7) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `name`, `symbol`, `atomic_number`, `atomic_weight`, `density`, `updated_at`, `created_at`) VALUES
('1', 'Hydrogen', 'H', '1', '1.00794', '0.0899', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('2', 'Helium', 'He', '2', '4.002602', '0.1785', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('3', 'Lithium', 'Li', '3', '6.941', '0.535', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('4', 'Beryllium', 'Be', '4', '9.012182', '1.848', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('5', 'Boron', 'B', '5', '10.811', '2.46', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('6', 'Carbon', 'C', '6', '12.0107', '2.26', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('7', 'Nitrogen', 'N', '7', '14.0067', '1.251', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('8', 'Oxygen', 'O', '8', '15.9994', '1.429', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('9', 'Fluorine', 'F', '9', '18.9984032', '1.696', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('10', 'Neon', 'Ne', '10', '20.1797', '0.9', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('11', 'Sodium', 'Na', '11', '22.98977', '0.968', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('12', 'Magnesium', 'Mg', '12', '24.305', '1.738', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('13', 'Aluminum', 'Al', '13', '26.981538', '2.7', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('14', 'Silicon', 'Si', '14', '28.0855', '2.33', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('15', 'Phosphorus', 'P', '15', '30.97361', '1.823', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('16', 'Sulfur', 'S', '16', '32.065', '1.96', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('17', 'Chlorine', 'Cl', '17', '35.453', '3.214', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('18', 'Argon', 'Ar', '18', '39.948', '1.784', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('19', 'Potassium', 'K', '19', '39.0983', '0.856', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('20', 'Calcium', 'Ca', '20', '40.078', '1.55', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('21', 'Scandium', 'Sc', '21', '44.95591', '2.985', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('22', 'Titanium', 'Ti', '22', '47.867', '4.507', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('23', 'Vanadium', 'V', '23', '50.9415', '6.11', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('24', 'Chromium', 'Cr', '24', '51.9961', '7.14', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('25', 'Manganese', 'Mn', '25', '54.938049', '7.47', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('26', 'Iron', 'Fe', '26', '55.845', '7.874', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('27', 'Cobalt', 'Co', '27', '58.9332', '8.9', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('28', 'Nickel', 'Ni', '28', '58.6934', '8.908', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('29', 'Copper', 'Cu', '29', '63.546', '8.92', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('30', 'Zinc', 'Zn', '30', '65.409', '7.14', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('31', 'Gallium', 'Ga', '31', '69.723', '5.904', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('32', 'Germanium', 'Ge', '32', '72.64', '5.323', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('33', 'Arsenic', 'As', '33', '74.9216', '5.727', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('34', 'Selenium', 'Se', '34', '78.96', '4.819', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('35', 'Bromine', 'Br', '35', '79.904', '3.12', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('36', 'Krypton', 'Kr', '36', '83.798', '3.75', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('37', 'Rubidium', 'Rb', '37', '85.4678', '1.532', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('38', 'Strontium', 'Sr', '38', '87.62', '2.63', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('39', 'Yttrium', 'Y', '39', '88.90585', '4.472', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('40', 'Zirconium', 'Zr', '40', '91.224', '6.511', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('41', 'Niobium', 'Nb', '41', '92.90638', '8.57', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('42', 'Molybdenum', 'Mo', '42', '95.94', '10.28', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('43', 'Technetium', 'Tc', '43', '98', '11.5', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('44', 'Ruthenium', 'Ru', '44', '101.07', '12.37', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('45', 'Rhodium', 'Rh', '45', '102.9055', '12.45', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('46', 'Palladium', 'Pd', '46', '106.42', '12.023', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('47', 'Silver', 'Ag', '47', '107.8682', '10.49', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('48', 'Cadmium', 'Cd', '48', '112.411', '8.65', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('49', 'Indium', 'In', '49', '114.818', '7.31', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('50', 'Tin', 'Sn', '50', '118.71', '7.31', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('51', 'Antimony', 'Sb', '51', '121.76', '6.697', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('52', 'Tellurium', 'Te', '52', '127.6', '6.24', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('53', 'Iodine', 'I', '53', '126.90447', '4.94', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('54', 'Xenon', 'Xe', '54', '131.293', '5.9', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('55', 'Cesium', 'Cs', '55', '132.90545', '1.879', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('56', 'Barium', 'Ba', '56', '137.327', '3.51', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('57', 'Lanthanum', 'La', '57', '138.9055', '6.146', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('58', 'Cerium', 'Ce', '58', '140.116', '6.689', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('59', 'Praseodymium', 'Pr', '59', '140.90765', '6.64', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('60', 'Neodymium', 'Nd', '60', '144.24', '7.01', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('61', 'Promethium', 'Pm', '61', '145', '7.264', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('62', 'Samarium', 'Sm', '62', '150.36', '7.353', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('63', 'Europium', 'Eu', '63', '151.964', '5.244', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('64', 'Gadolinium', 'Gd', '64', '157.25', '7.901', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('65', 'Terbium', 'Tb', '65', '158.92534', '8.219', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('66', 'Dysprosium', 'Dy', '66', '162.5', '8.551', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('67', 'Holmium', 'Ho', '67', '164.93032', '8.795', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('68', 'Erbium', 'Er', '68', '167.259', '9.066', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('69', 'Thulium', 'Tm', '69', '168.93421', '9.321', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('70', 'Ytterbium', 'Yb', '70', '173.04', '6.57', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('71', 'Lutetium', 'Lu', '71', '174.967', '9.841', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('72', 'Hafnium', 'Hf', '72', '178.49', '13.31', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('73', 'Tantalum', 'Ta', '73', '180.9479', '16.65', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('74', 'Tungsten', 'W', '74', '183.84', '19.25', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('75', 'Rhenium', 'Re', '75', '186.207', '21.02', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('76', 'Osmium', 'Os', '76', '190.23', '22.61', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('77', 'Iridium', 'Ir', '77', '192.217', '22.65', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('78', 'Platinum', 'Pt', '78', '195.078', '21.09', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('79', 'Gold', 'Au', '79', '196.96655', '19.3', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('80', 'Mercury', 'Hg', '80', '200.59', '13.534', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('81', 'Thallium', 'Tl', '81', '204.3833', '11.85', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('82', 'Lead', 'Pb', '82', '207.2', '11.34', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('83', 'Bismuth', 'Bi', '83', '208.98038', '9.78', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('84', 'Polonium', 'Po', '84', '209', '9.196', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('85', 'Astatine', 'At', '85', '210', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('86', 'Radon', 'Rn', '86', '222', '9.73', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('87', 'Francium', 'Fr', '87', '223', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('88', 'Radium', 'Ra', '88', '226', '5', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('89', 'Actinium', 'Ac', '89', '227', '10.07', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('90', 'Thorium', 'Th', '90', '232.0381', '11.724', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('91', 'Protactinium', 'Pa', '91', '231.03588', '15.37', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('92', 'Uranium', 'U', '92', '238.02891', '19.05', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('93', 'Neptunium', 'Np', '93', '237', '20.45', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('94', 'Plutonium', 'Pu', '94', '244', '19.816', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('95', 'Americium', 'Am', '95', '243', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('96', 'Curium', 'Cm', '96', '247', '13.51', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('97', 'Berkelium', 'Bk', '97', '247', '14.78', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('98', 'Californium', 'Cf', '98', '251', '15.1', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('99', 'Einsteinium', 'Es', '99', '252', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('100', 'Fermium', 'Fm', '100', '257', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('101', 'Mendelevium', 'Md', '101', '258', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('102', 'Nobelium', 'No', '102', '259', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('103', 'Lawrencium', 'Lr', '103', '262', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('104', 'Rutherfordium', 'Rf', '104', '261', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('105', 'Dubnium', 'Db', '105', '262', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('106', 'Seaborgium', 'Sg', '106', '266', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('107', 'Bohrium', 'Bh', '107', '264', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('108', 'Hassium', 'Hs', '108', '277', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('109', 'Meitnerium', 'Mt', '109', '268', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('110', 'Darmstadtium', 'Ds', '110', '281', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('111', 'Roentgenium', 'Rg', '111', '272', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('112', 'Copernicium', 'Cn', '112', '285', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('113', 'Nihonium', 'Nh', '113', '286', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('114', 'Flerovium', 'Fl', '114', '289', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('115', 'Moscovium', 'Mc', '115', '290', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('116', 'Livermorium', 'Lv', '116', '292', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('117', 'Tennessine', 'Ts', '117', '294', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('118', 'Oganesson', 'Og', '118', '294', '#N/A', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', '', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'References:', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', '? NIST.gov', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', '* Mathematica (references.wolfram.com)', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'Various including:', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://education.jlab.org/qa/discover_ele.html', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://www.lenntech.com/periodic-chart-elements/inventor-surname.htm', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://www.sciencegeek.net/tables/lbltable.pdf', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://ptable.com', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://en.wikipedia.org/wiki/Atomic_radii_of_the_elements_(data_page)', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://environmentalchemistry.com/yogi/periodic/crystal.html', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
('', 'http://www.periodictable.com', '', '', '', '', '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
(NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
(NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
(NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-27 23:00:00', '2021-12-27 23:00:00'),
(NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-27 23:00:00', '2021-12-27 23:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compounds`
--
ALTER TABLE `compounds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compounds`
--
ALTER TABLE `compounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
