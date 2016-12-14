-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 05:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediadev02`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_level`
--

CREATE TABLE `access_level` (
  `id` int(11) UNSIGNED NOT NULL,
  `access_level` int(11) DEFAULT NULL,
  `description` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_level`
--

INSERT INTO `access_level` (`id`, `access_level`, `description`) VALUES
(1, 0, 'Super User'),
(2, 1, 'Download'),
(3, 2, 'View Summary');

-- --------------------------------------------------------

--
-- Table structure for table `activity_sector`
--

CREATE TABLE `activity_sector` (
  `id` int(11) UNSIGNED NOT NULL,
  `activity_sector` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_sector`
--

INSERT INTO `activity_sector` (`id`, `activity_sector`) VALUES
(1, 'Agriculture and Mining'),
(2, 'Business Services'),
(3, 'Computer and Electronics'),
(4, 'Retail'),
(5, 'Transportation/Logistics'),
(6, 'Consumer Services'),
(7, 'Education'),
(8, 'Energy and Utilities'),
(9, 'Finance'),
(10, 'Government/Public Sector'),
(11, 'Health'),
(12, 'Manufacturing'),
(13, 'Media and Entertainment'),
(14, 'Non-profit'),
(15, 'Real Estate and Construction'),
(16, 'Retail'),
(17, 'Independent Software Vendor'),
(18, 'Telecommunications'),
(19, 'Travel Recreation and Leisure'),
(20, 'Wholesale and Distribution');

-- --------------------------------------------------------

--
-- Table structure for table `companyactivitypercountry`
--

CREATE TABLE `companyactivitypercountry` (
  `id` int(11) UNSIGNED NOT NULL,
  `unique_company_count` int(11) DEFAULT NULL,
  `activity_sector` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyactivitypercountry`
--

INSERT INTO `companyactivitypercountry` (`id`, `unique_company_count`, `activity_sector`, `country`) VALUES
(1171, 1, 'Education', 'Philippines'),
(1172, 1, 'Energy And Utilities', 'Sweden'),
(1173, 1, 'Enxergy And Utilities', 'Sweden'),
(1174, 1, 'Health, Pharmaceuticals, And Biotech', 'Sweden'),
(1175, 1, 'Manufacturing', 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `companypercountry`
--

CREATE TABLE `companypercountry` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_count` int(11) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companypercountry`
--

INSERT INTO `companypercountry` (`id`, `company_count`, `country`) VALUES
(1734, 1, 'Philippines'),
(1735, 3, 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `companysizepercountry`
--

CREATE TABLE `companysizepercountry` (
  `id` int(11) UNSIGNED NOT NULL,
  `unique_company_count` int(11) DEFAULT NULL,
  `country_company_size` varchar(30) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companysizepercountry`
--

INSERT INTO `companysizepercountry` (`id`, `unique_company_count`, `country_company_size`, `country`, `order_id`) VALUES
(549, 1, '50-99', 'Sweden', 3),
(550, 1, '100-249', 'Philippines', 4),
(551, 2, '1000-2999', 'Sweden', 8);

-- --------------------------------------------------------

--
-- Table structure for table `company_size`
--

CREATE TABLE `company_size` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_size` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_size`
--

INSERT INTO `company_size` (`id`, `company_size`) VALUES
(1, '1-24'),
(2, '25-49'),
(3, '50-99'),
(4, '100-249'),
(5, '250-499'),
(6, '500-749'),
(7, '750-999'),
(8, '1000-2999'),
(9, '3000-4999'),
(10, '5000+');

-- --------------------------------------------------------

--
-- Table structure for table `contactcompanypercountry`
--

CREATE TABLE `contactcompanypercountry` (
  `id` int(11) UNSIGNED NOT NULL,
  `unique_contact_count` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactcompanypercountry`
--

INSERT INTO `contactcompanypercountry` (`id`, `unique_contact_count`, `company_name`, `country`) VALUES
(5616910, 2, 'Vattenfall Business Services Nordic AB', 'Sweden'),
(5616911, 1, 'VENTILATIONSUTVECKLING VUAB AKTIEBOLAG', 'Sweden'),
(5616912, 2, 'VITROLIFE SWEDEN AKTIEBOLAG', 'Sweden'),
(5616913, 3, 'Vittraskolorna AB', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) UNSIGNED NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `A2_ISO` char(2) DEFAULT NULL,
  `A3_UN` char(3) DEFAULT NULL,
  `Num_UN` int(3) DEFAULT NULL,
  `dialing_code` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `A2_ISO`, `A3_UN`, `Num_UN`, `dialing_code`) VALUES
(1, 'Aruba', NULL, NULL, NULL, NULL),
(2, 'Afghanistan', NULL, NULL, NULL, NULL),
(3, 'Angola', NULL, NULL, NULL, NULL),
(4, 'Anguilla', NULL, NULL, NULL, NULL),
(5, 'Aland Island', NULL, NULL, NULL, NULL),
(6, 'Albania', NULL, NULL, NULL, NULL),
(7, 'Andorra', NULL, NULL, NULL, NULL),
(8, 'United Arab Emirates', NULL, NULL, NULL, NULL),
(9, 'Argentina', NULL, NULL, NULL, NULL),
(10, 'Armenia', NULL, NULL, NULL, NULL),
(11, 'American Samoa', NULL, NULL, NULL, NULL),
(12, 'Antarctica', NULL, NULL, NULL, NULL),
(13, 'Antigua and Barbuda', NULL, NULL, NULL, NULL),
(14, 'Australia', NULL, NULL, NULL, NULL),
(15, 'Austria', NULL, NULL, NULL, NULL),
(16, 'Azerbaijan', NULL, NULL, NULL, NULL),
(17, 'Burundi', NULL, NULL, NULL, NULL),
(18, 'Belgium', NULL, NULL, NULL, NULL),
(19, 'Benin', NULL, NULL, NULL, NULL),
(20, 'Burkina Faso', NULL, NULL, NULL, NULL),
(21, 'Bangladesh', NULL, NULL, NULL, NULL),
(22, 'Bulgaria', NULL, NULL, NULL, NULL),
(23, 'Bahrain', NULL, NULL, NULL, NULL),
(24, 'Bahamas', NULL, NULL, NULL, NULL),
(25, 'Bosnia & Herzegovena', NULL, NULL, NULL, NULL),
(26, 'Saint Barthélemy', NULL, NULL, NULL, NULL),
(27, 'Belarus', NULL, NULL, NULL, NULL),
(28, 'Belize', NULL, NULL, NULL, NULL),
(29, 'Bermuda', NULL, NULL, NULL, NULL),
(30, 'Bolivia', NULL, NULL, NULL, NULL),
(31, 'Brazil', NULL, NULL, NULL, NULL),
(32, 'Bhutan', NULL, NULL, NULL, NULL),
(33, 'Bouvet Island', NULL, NULL, NULL, NULL),
(34, 'Botswana', NULL, NULL, NULL, NULL),
(35, 'Central African Republic', NULL, NULL, NULL, NULL),
(36, 'Canada', NULL, NULL, NULL, NULL),
(37, 'Cocos (Keeling) Islands', NULL, NULL, NULL, NULL),
(38, 'Switzerland', NULL, NULL, NULL, NULL),
(39, 'Chile', NULL, NULL, NULL, NULL),
(40, 'China', NULL, NULL, NULL, NULL),
(41, 'Cote d''Ivoire', NULL, NULL, NULL, NULL),
(42, 'Cameroon', NULL, NULL, NULL, NULL),
(43, 'Congo', NULL, NULL, NULL, NULL),
(44, 'Cook Islands', NULL, NULL, NULL, NULL),
(45, 'Colombia', NULL, NULL, NULL, NULL),
(46, 'Comoros', NULL, NULL, NULL, NULL),
(47, 'Cape Verde', NULL, NULL, NULL, NULL),
(48, 'Costa Rica', NULL, NULL, NULL, NULL),
(49, 'Cuba', NULL, NULL, NULL, NULL),
(50, 'Christmas Island', NULL, NULL, NULL, NULL),
(51, 'Cayman Islands', NULL, NULL, NULL, NULL),
(52, 'Cyprus, Republic of', NULL, NULL, NULL, NULL),
(53, 'Czech Republic', NULL, NULL, NULL, NULL),
(54, 'Germany', NULL, NULL, NULL, NULL),
(55, 'Djibouti', NULL, NULL, NULL, NULL),
(56, 'Dominica', NULL, NULL, NULL, NULL),
(57, 'Denmark', NULL, NULL, NULL, NULL),
(58, 'Dominican Republic', NULL, NULL, NULL, NULL),
(59, 'Algeria', NULL, NULL, NULL, NULL),
(60, 'Ecuador', NULL, NULL, NULL, NULL),
(61, 'Egypt', NULL, NULL, NULL, NULL),
(62, 'Eritrea', NULL, NULL, NULL, NULL),
(63, 'Western Sahara', NULL, NULL, NULL, NULL),
(64, 'Spain', NULL, NULL, NULL, NULL),
(65, 'Estonia', NULL, NULL, NULL, NULL),
(66, 'Ethiopia', NULL, NULL, NULL, NULL),
(67, 'Finland', NULL, NULL, NULL, NULL),
(68, 'Fiji', NULL, NULL, NULL, NULL),
(69, 'Falkland Islands', NULL, NULL, NULL, NULL),
(70, 'France', NULL, NULL, NULL, NULL),
(71, 'Faroe Islands', NULL, NULL, NULL, NULL),
(72, 'Micronesia (Federated States of)', NULL, NULL, NULL, NULL),
(73, 'Gabon', NULL, NULL, NULL, NULL),
(74, 'United Kingdom', NULL, NULL, NULL, NULL),
(75, 'Georgia', NULL, NULL, NULL, NULL),
(76, 'Guernsey', NULL, NULL, NULL, NULL),
(77, 'Ghana', NULL, NULL, NULL, NULL),
(78, 'Gibraltar', NULL, NULL, NULL, NULL),
(79, 'Guinea', NULL, NULL, NULL, NULL),
(80, 'Guadeloupe', NULL, NULL, NULL, NULL),
(81, 'Gambia', NULL, NULL, NULL, NULL),
(82, 'Guinea-Bissau', NULL, NULL, NULL, NULL),
(83, 'Equatorial Guinea', NULL, NULL, NULL, NULL),
(84, 'Greece', NULL, NULL, NULL, NULL),
(85, 'Grenada', NULL, NULL, NULL, NULL),
(86, 'Greenland', NULL, NULL, NULL, NULL),
(87, 'Guatemala', NULL, NULL, NULL, NULL),
(88, 'French Guiana', NULL, NULL, NULL, NULL),
(89, 'Guam', NULL, NULL, NULL, NULL),
(90, 'Guyana', NULL, NULL, NULL, NULL),
(91, 'Hong Kong', NULL, NULL, NULL, NULL),
(92, 'Heard and McDonald Islands', NULL, NULL, NULL, NULL),
(93, 'Honduras', NULL, NULL, NULL, NULL),
(94, 'Croatia', NULL, NULL, NULL, NULL),
(95, 'Haiti', NULL, NULL, NULL, NULL),
(96, 'Hungary', NULL, NULL, NULL, NULL),
(97, 'Indonesia', NULL, NULL, NULL, NULL),
(98, 'Isle of Man', NULL, NULL, NULL, NULL),
(99, 'India', NULL, NULL, NULL, NULL),
(100, 'British Indian Ocean Territory', NULL, NULL, NULL, NULL),
(101, 'Ireland', NULL, NULL, NULL, NULL),
(102, 'Iran (Islamic Republic of)', NULL, NULL, NULL, NULL),
(103, 'Iraq', NULL, NULL, NULL, NULL),
(104, 'Iceland', NULL, NULL, NULL, NULL),
(105, 'Israel', NULL, NULL, NULL, NULL),
(106, 'Italy', NULL, NULL, NULL, NULL),
(107, 'Jamaica', NULL, NULL, NULL, NULL),
(108, 'Jersey', NULL, NULL, NULL, NULL),
(109, 'Jordan', NULL, NULL, NULL, NULL),
(110, 'Japan', NULL, NULL, NULL, NULL),
(111, 'Kazakhstan', NULL, NULL, NULL, NULL),
(112, 'Kenya', NULL, NULL, NULL, NULL),
(113, 'Kyrgyzstan', NULL, NULL, NULL, NULL),
(114, 'Cambodia', NULL, NULL, NULL, NULL),
(115, 'Kiribati', NULL, NULL, NULL, NULL),
(116, 'Saint Kitts and Nevis', NULL, NULL, NULL, NULL),
(117, 'Korea, Republic of', NULL, NULL, NULL, NULL),
(118, 'Kuwait', NULL, NULL, NULL, NULL),
(119, 'Laos, People''s Democratic Republic', NULL, NULL, NULL, NULL),
(120, 'Lebanon', NULL, NULL, NULL, NULL),
(121, 'Liberia', NULL, NULL, NULL, NULL),
(122, 'Libyan Arab Jamahiriya', NULL, NULL, NULL, NULL),
(123, 'Saint Lucia', NULL, NULL, NULL, NULL),
(124, 'Liechtenstein', NULL, NULL, NULL, NULL),
(125, 'Sri Lanka', NULL, NULL, NULL, NULL),
(126, 'Lesotho', NULL, NULL, NULL, NULL),
(127, 'Lithuania', NULL, NULL, NULL, NULL),
(128, 'Luxembourg', NULL, NULL, NULL, NULL),
(129, 'Latvia', NULL, NULL, NULL, NULL),
(130, 'Macau', NULL, NULL, NULL, NULL),
(131, 'Saint Martin', NULL, NULL, NULL, NULL),
(132, 'Morocco', NULL, NULL, NULL, NULL),
(133, 'Monaco', NULL, NULL, NULL, NULL),
(134, 'Moldova', NULL, NULL, NULL, NULL),
(135, 'Madagascar', NULL, NULL, NULL, NULL),
(136, 'Maldives', NULL, NULL, NULL, NULL),
(137, 'Mexico', NULL, NULL, NULL, NULL),
(138, 'Marshall Islands', NULL, NULL, NULL, NULL),
(139, 'Macedonia', NULL, NULL, NULL, NULL),
(140, 'Mali', NULL, NULL, NULL, NULL),
(141, 'Malta', NULL, NULL, NULL, NULL),
(142, 'Myanmar', NULL, NULL, NULL, NULL),
(143, 'Montenegro', NULL, NULL, NULL, NULL),
(144, 'Mongolia', NULL, NULL, NULL, NULL),
(145, 'Northern Mariana Islands', NULL, NULL, NULL, NULL),
(146, 'Mozambique', NULL, NULL, NULL, NULL),
(147, 'Mauritania', NULL, NULL, NULL, NULL),
(148, 'Montserrat', NULL, NULL, NULL, NULL),
(149, 'Martinique', NULL, NULL, NULL, NULL),
(150, 'Mauritius', NULL, NULL, NULL, NULL),
(151, 'Malawi', NULL, NULL, NULL, NULL),
(152, 'Malaysia', NULL, NULL, NULL, NULL),
(153, 'Mayotte', NULL, NULL, NULL, NULL),
(154, 'Namibia', NULL, NULL, NULL, NULL),
(155, 'New Caledonia', NULL, NULL, NULL, NULL),
(156, 'Niger', NULL, NULL, NULL, NULL),
(157, 'Norfolk Island', NULL, NULL, NULL, NULL),
(158, 'Nigeria', NULL, NULL, NULL, NULL),
(159, 'Nicaragua', NULL, NULL, NULL, NULL),
(160, 'Niue', NULL, NULL, NULL, NULL),
(161, 'Netherlands', NULL, NULL, NULL, NULL),
(162, 'Norway', NULL, NULL, NULL, NULL),
(163, 'Nepal', NULL, NULL, NULL, NULL),
(164, 'Nauru', NULL, NULL, NULL, NULL),
(165, 'New Zealand', NULL, NULL, NULL, NULL),
(166, 'Oman', NULL, NULL, NULL, NULL),
(167, 'Pakistan', NULL, NULL, NULL, NULL),
(168, 'Panama', NULL, NULL, NULL, NULL),
(169, 'Pitcairn Islands', NULL, NULL, NULL, NULL),
(170, 'Peru', NULL, NULL, NULL, NULL),
(171, 'Philippines', NULL, NULL, NULL, NULL),
(172, 'Palau', NULL, NULL, NULL, NULL),
(173, 'Papua New Guinea', NULL, NULL, NULL, NULL),
(174, 'Poland', NULL, NULL, NULL, NULL),
(175, 'Puerto Rico', NULL, NULL, NULL, NULL),
(176, 'Korea, Democratic People''s Republic', NULL, NULL, NULL, NULL),
(177, 'Portugal', NULL, NULL, NULL, NULL),
(178, 'Paraguay', NULL, NULL, NULL, NULL),
(179, 'Palestine', NULL, NULL, NULL, NULL),
(180, 'French Polynesia', NULL, NULL, NULL, NULL),
(181, 'Qatar', NULL, NULL, NULL, NULL),
(182, 'Reunion', NULL, NULL, NULL, NULL),
(183, 'Romania', NULL, NULL, NULL, NULL),
(184, 'Russian Federation', NULL, NULL, NULL, NULL),
(185, 'Rwanda', NULL, NULL, NULL, NULL),
(186, 'Saudi Arabia', NULL, NULL, NULL, NULL),
(187, 'Sudan', NULL, NULL, NULL, NULL),
(188, 'Senegal', NULL, NULL, NULL, NULL),
(189, 'Singapore', NULL, NULL, NULL, NULL),
(190, 'South Georgia', NULL, NULL, NULL, NULL),
(191, 'St. Helena', NULL, NULL, NULL, NULL),
(192, 'Svalbard and Jan Mayen Islands', NULL, NULL, NULL, NULL),
(193, 'Solomon Islands', NULL, NULL, NULL, NULL),
(194, 'Sierra Leone', NULL, NULL, NULL, NULL),
(195, 'El Salvador', NULL, NULL, NULL, NULL),
(196, 'San Marino', NULL, NULL, NULL, NULL),
(197, 'Somalia', NULL, NULL, NULL, NULL),
(198, 'St. Pierre and Miquelon', NULL, NULL, NULL, NULL),
(199, 'Serbia', NULL, NULL, NULL, NULL),
(200, 'South Sudan', NULL, NULL, NULL, NULL),
(201, 'Sao Tome and Principe', NULL, NULL, NULL, NULL),
(202, 'Suriname', NULL, NULL, NULL, NULL),
(203, 'Slovakia', NULL, NULL, NULL, NULL),
(204, 'Slovenia', NULL, NULL, NULL, NULL),
(205, 'Sweden', NULL, NULL, NULL, NULL),
(206, 'Swaziland', NULL, NULL, NULL, NULL),
(207, 'Seychelles', NULL, NULL, NULL, NULL),
(208, 'Syrian Arab Republic', NULL, NULL, NULL, NULL),
(209, 'Turks and Caicos Islands', NULL, NULL, NULL, NULL),
(210, 'Chad', NULL, NULL, NULL, NULL),
(211, 'Togo', NULL, NULL, NULL, NULL),
(212, 'Thailand', NULL, NULL, NULL, NULL),
(213, 'Tajikistan', NULL, NULL, NULL, NULL),
(214, 'Tokelau', NULL, NULL, NULL, NULL),
(215, 'Turkmenistan', NULL, NULL, NULL, NULL),
(216, 'East Timor', NULL, NULL, NULL, NULL),
(217, 'Tonga', NULL, NULL, NULL, NULL),
(218, 'Trinidad and Tobago', NULL, NULL, NULL, NULL),
(219, 'Tunisia', NULL, NULL, NULL, NULL),
(220, 'Turkey', NULL, NULL, NULL, NULL),
(221, 'Tuvalu', NULL, NULL, NULL, NULL),
(222, 'Taiwan', NULL, NULL, NULL, NULL),
(223, 'Tanzania, United Republic of', NULL, NULL, NULL, NULL),
(224, 'Uganda', NULL, NULL, NULL, NULL),
(225, 'Ukraine', NULL, NULL, NULL, NULL),
(226, 'US Minor Outlying Islands', NULL, NULL, NULL, NULL),
(227, 'Kosovo', NULL, NULL, NULL, NULL),
(228, 'Uruguay', NULL, NULL, NULL, NULL),
(229, 'USA', NULL, NULL, NULL, NULL),
(230, 'Uzbekistan', NULL, NULL, NULL, NULL),
(231, 'Holy See', NULL, NULL, NULL, NULL),
(232, 'Saint Vincent and the Grenadines', NULL, NULL, NULL, NULL),
(233, 'Venezuela', NULL, NULL, NULL, NULL),
(234, 'Virgin Islands (British)', NULL, NULL, NULL, NULL),
(235, 'Virgin Islands (US)', NULL, NULL, NULL, NULL),
(236, 'Vietnam', NULL, NULL, NULL, NULL),
(237, 'Vanuatu', NULL, NULL, NULL, NULL),
(238, 'Wallis and Futuna', NULL, NULL, NULL, NULL),
(239, 'Samoa', NULL, NULL, NULL, NULL),
(240, 'Yemen', NULL, NULL, NULL, NULL),
(241, 'South Africa', NULL, NULL, NULL, NULL),
(242, 'Zambia', NULL, NULL, NULL, NULL),
(243, 'Zimbabwe', NULL, NULL, NULL, NULL),
(244, 'Brunei', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `unique_id` bigint(20) NOT NULL,
  `date_of_last_update` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(75) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salutation` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exact_job_title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_category` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_level` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directline` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity_sector` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subactivity_sector` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annual_turnover` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `global_company_size` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_company_size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `it_dm_cycle_locally_made` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_of_it_dm_cycle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hqlocation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `erp` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `crm` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_users` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_vms` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `virtualization_solution` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backup_recovery_solution` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_solution` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collaboration_tools` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business_intelligence` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cloud_solution` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`unique_id`, `date_of_last_update`, `source`, `comments`, `company_name`, `salutation`, `first_name`, `last_name`, `exact_job_title`, `job_category`, `job_level`, `address1`, `address2`, `postcode`, `city`, `region`, `country`, `phonenumber`, `directline`, `email`, `website`, `activity_sector`, `subactivity_sector`, `annual_turnover`, `global_company_size`, `country_company_size`, `it_dm_cycle_locally_made`, `location_of_it_dm_cycle`, `hqlocation`, `erp`, `crm`, `number_of_users`, `number_of_vms`, `virtualization_solution`, `backup_recovery_solution`, `storage_solution`, `collaboration_tools`, `business_intelligence`, `cloud_solution`) VALUES
(1, NULL, 'Hoovers', NULL, 'Vattenfall Business Services Nordic AB', 'Ms.', 'Penelope', 'Anderson', 'Finance Manager', 'Finance And Accounting', 'Manager', 'Evenemangsgatan 13', NULL, '169 79', 'Stockholm', NULL, 'Sweden', '+46(8)7395000', NULL, 'penelope.anderson@vattenfall.se', 'Www.vattenfall.se', 'Enxergy And Utilities', 'Energy And Utilities', '50 To 249 M€', 'Corporation (>2500 Emp)', '1000-2999', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Hoovers', NULL, 'Vattenfall Business Services Nordic AB', 'Ms.', 'KAREN', 'Lepasoon', 'Head of Group Communications', 'Marketing', 'Director', 'Evenemangsgatan 13', NULL, '169 79', 'Stockholm', NULL, 'Sweden', '+46(8)7395000', NULL, 'karin.lepasoon@vattenfall.se', 'Www.vattenfall.se', 'Energy And Utilities', 'Energy And Utilities', '50 To 249 M€', 'Corporation (>2500 Emp)', '1000-2999', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Cosmo (Client Data)', NULL, 'VENTILATIONSUTVECKLING VUAB AKTIEBOLAG', 'Ms.', 'Cecilia', 'Hojanes', 'IT Manager', 'IT', 'Manager', 'Kemistvagen 2,', NULL, '18379', 'Taby', NULL, 'Sweden', '+46(8)6303000', NULL, 'cecilia.hojanes@vuab.se', 'Www.vuab.se', 'Manufacturing', 'Manufacturing', '0 To 50 M €', 'Medium Size Business (50-249 Emp)', '50-99', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Cosmo (Client Data)', NULL, 'VITROLIFE SWEDEN AKTIEBOLAG', 'Mr.', 'Camile', 'Bodis', 'Sales Director', 'Sales', 'Director', 'Gustaf Werners Gata 2 Vastra Frolunda,', NULL, '421 32', 'Gateborg', NULL, 'Sweden', '+46(3)17218000', NULL, 'gbodis@vitrolife.com', 'Www.vitrolife.com', 'Health, Pharmaceuticals, And Biotech', 'Health, Pharmaceuticals, And Biotech', '50 To 249 M€', 'Corporation (>2500 Emp)', '1000-2999', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Cosmo (Client Data)', NULL, 'VITROLIFE SWEDEN AKTIEBOLAG', 'Ms.', 'ANKIKI', 'Hellstrom Westerling', 'Business Information Manager', 'IT', 'Manager', 'Gustaf Werners Gata 2 Vastra Frolunda,', NULL, '421 32', 'Gateborg', NULL, 'Sweden', '+46(3)17218000', NULL, 'ahwesterling@vitrolife.com', 'Www.vitrolife.com', 'Health, Pharmaceuticals, And Biotech', 'Health, Pharmaceuticals, And Biotech', '50 To 249 M€', 'Corporation (>2500 Emp)', '1000-2999', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Hoovers', 'Vittra and Academedia are same company.', 'Vittraskolorna AB', 'Ms.', 'Henry', 'Sporrong', 'Communications Manager', 'Marketing', 'Manager', 'Sandbacksgatan 10', NULL, '116 21', 'Stockholm', NULL, 'Philippines', '+46(7)71191090', '+46(7)08791984', 'emelie.sporrong@vittra.se', 'Www.vittra.se', 'Education', 'Education', '0 To 50 M €', 'Corporatio', '100-249', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Hoovers', 'Vittra and Academedia are same company.', 'Vittraskolorna AB', 'Ms.', 'Henry', 'Sporrong', 'Communications Manager', 'Marketing', 'Manager', 'Sandbacksgatan 10', NULL, '116 21', 'Stockholm', NULL, 'Philippines', '+46(7)71191090', '+46(7)08791984', 'emelie.sporrong@vittra.se', 'Www.vittra.se', 'Education', 'Education', '0 To 50 M €', 'Corporatio', '100-249', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'Hoovers', 'Vittra and Academedia are same company.', 'Vittraskolorna AB', 'Ms.', 'Henryx', 'Sporrong', 'Communications Manager', 'Marketing', 'Manager', 'Sandbacksgatan 10', NULL, '116 21', 'Stockholm', NULL, 'Philippines', '+46(7)71191090', '+46(7)08791984', 'emelie.sporrong@vittra.se', 'Www.vittra.se', 'Education', 'Education', '0 To 50 M €', 'Corporation (>2500 Emp)', '100-249', NULL, NULL, 'Sweden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1470885337),
('m160811_030619_create_master_table', 1471325129);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `accesslevel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `accesslevel`) VALUES
(1, 'sam', 'e09e0707bd4c0ea80ef1ab60ee276341', 0),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
(4, 'guest', '084e0343a0486ff05530df6c705c8bb4', 2),
(5, 'liz', '56d50a506cbbfb4a918a26898a51c1aa', 0),
(6, 'leo', '0f759dd1ea6c4c76cedc299039ca4f23', 0),
(7, 'lorenzo', '3334703c735bd09f54c377b4dfaac1c3', 1),
(8, 'jerome', '2bb010060d682fee5ad19d973a9a4d2a', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_level`
--
ALTER TABLE `access_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_sector`
--
ALTER TABLE `activity_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyactivitypercountry`
--
ALTER TABLE `companyactivitypercountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companypercountry`
--
ALTER TABLE `companypercountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companysizepercountry`
--
ALTER TABLE `companysizepercountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_size`
--
ALTER TABLE `company_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactcompanypercountry`
--
ALTER TABLE `contactcompanypercountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `company_name` (`company_name`),
  ADD KEY `country` (`country`),
  ADD KEY `activity_sector` (`activity_sector`),
  ADD KEY `country_company_size` (`country_company_size`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_level`
--
ALTER TABLE `access_level`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `activity_sector`
--
ALTER TABLE `activity_sector`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `companyactivitypercountry`
--
ALTER TABLE `companyactivitypercountry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1176;
--
-- AUTO_INCREMENT for table `companypercountry`
--
ALTER TABLE `companypercountry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1736;
--
-- AUTO_INCREMENT for table `companysizepercountry`
--
ALTER TABLE `companysizepercountry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=552;
--
-- AUTO_INCREMENT for table `company_size`
--
ALTER TABLE `company_size`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contactcompanypercountry`
--
ALTER TABLE `contactcompanypercountry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5616914;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `unique_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
