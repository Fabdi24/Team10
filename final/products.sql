-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 04:02 PM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_210083008_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `colour` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `colour`, `quantity`, `price`, `image`) VALUES
('Razer Kishi for Android', 'CLOUD GAMING COMPATIBLE With the reality of playing AAA versions on any screen, having the controller connected to your device provides a convenient form factor and portable enough to play anywhere', 'black', 20, 79, 'src=\"img/products/f1.jpg\"'),
('Logitech G29 Driving Force Gaming Steering Wheel - Playstation, PC', 'Engineered for the perfect driving experience with dual-motor force feedback, stainless steel paddle shifters and hand stitched leather wheel.', 'black', 20, 78, 'src=\"img/products/f2.jpg\"'),
('Razer Wolverine V2 - White - Wired Gaming Controller\r\n', 'Featuring 6 remappable buttons and a Hair Trigger Mode, this Razer controller keeps you in control while you play your favourite PC and Xbox games.', 'White', 20, 99, 'src=img/products/f3.jpg'),
('Thrustmaster T.16000M FCS FLIGHT PACK\r\n', 'The T.16000M FCS FLIGHT PACK has been designed for advanced fliers looking for comprehensive, realistic controls as an alternative to using a mouse and keyboard\r\n.', 'Black', 20, 199, 'src=img/products/f4.jpg'),
('TSS HANDBRAKE Sparco Mod\r\n', 'The TSS Handbrake Sparco Mod + offers two highly realistic modes: Progressive handbrake mode, for better control of turns and drifting.\r\n', 'Silver', 20, 329, 'src=img/products/f5.jpg'),
('PS5 Controller - Emerald Green skin', 'PlayStation 5 Controller Skin High quality vinyl with air channel adhesive for easy bubble free install & mess free removal', 'Emerald Green', 20, 99, 'src=img/products/f6.jpg'),
('Xbox Wireless Controller - Mineral Camo Special Edition', 'Textured triggers and bumpers | Hybrid D-pad | Button mapping | Bluetooth® technology', 'Mineral Camo', 20, 59, 'src=img/products/f7.jpg'),
('Aim Orange Matt PS5 Controller', 'The matte orange PS5 DualSense Aim Controller looks great in every player’s corner. The high-quality controller guarantees many years of use without any complaints.', 'Orange Matt', 20, 99, 'src=img/products/f8.jpg'),
('Yellow Green Fade - PS5 Controller', 'Our Yellow Green Fade PS5 Controller Skin features a classic yellow green fade that reminds us of the warmth of sunlight in springtime.', 'Yellow Green Fade', 20, 99, 'src=img/products/n1.jpg'),
('Xbox Series X Custom Controller - Zombie Edition', 'Our Zombie Soft Touch Custom Xbox X/S Controller is made using the latest genuine brand new Xbox Wireless Controllers. Further, these are compatible with Xbox Series X, Xbox Series S, Xbox One, Windows 10 PC and Android.', 'Zombie skin', 20, 79, 'src=img/products/n2.jpg'),
('Turtle Beach Recon Controller - Black\r\n', 'Unlike any controller before, the Recon™ Controller pairs game-changing audio innovations with game-winning controls. Plug in a 3.5mm headset and instantly upgrade your audio with proven Turtle Beach audio features.\r\n', 'Black', 20, 59, 'src=img/products/n3.jpg'),
('Red Street Camo Special Edition - PS5 Controller', 'The protective decals are made of high-quality vinyl, cut precisely and fit perfectly to protect your gaming device from scratches and dust.', 'Red Street Camo', 20, 99, 'src=img/products/n4.jpg'),
('Yellow pulse DR.AimKing Edition - PS4 Controller', 'We have an exclusive Aim controller in the DR.AimKing design.', 'Customised skin', 20, 69, 'src=img/products/n5.jpg'),
('Moza Racing Sim FSR Steering Wheel', 'The MOZA FSR wheel is a formula style racing wheel. A 280 mm sim wheel designed for maximum immersion and ultimate racing experiencen.', 'Black', 20, 580, 'src=img/products/n6.jpg'),
('Ice and fire Controller - Series S / X', 'High quality and wear-resistant and with your favorite character design on both sides, these controllers include a brand new wireless connection that lets you rid yourself of cable lines to enjoy a great wireless range!', 'Red & Blue', 20, 59, 'src=img/products/n7.jpg'),
('AimControllers RL9 Black/Red', 'Limited edition controller for the popular Xbox Series x/s console. Dedicated to fans of Robert Lewandowski and lovers of video games.', 'Black & Red', 20, 219, 'src=img/products/n8.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;