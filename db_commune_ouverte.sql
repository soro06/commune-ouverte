-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2022 at 01:38 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_commune_ouverte`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_commune`
--

CREATE TABLE `sys_commune` (
  `id` int(11) NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `designation` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idProvince` int(11) DEFAULT NULL,
  `idRegion` int(11) DEFAULT NULL,
  `isDeleted` tinyint(4) DEFAULT '0',
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` int(11) DEFAULT NULL,
  `updatedOn` timestamp NULL DEFAULT NULL,
  `updateBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_commune`
--

INSERT INTO `sys_commune` (`id`, `code`, `designation`, `idProvince`, `idRegion`, `isDeleted`, `createdOn`, `createdBy`, `updatedOn`, `updateBy`) VALUES
(1, 'OUA', 'Ouagadougou', 1, 1, 0, '2022-05-07 11:41:14', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_menu`
--

CREATE TABLE `sys_menu` (
  `id` int(11) NOT NULL,
  `code` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idParent` int(11) NOT NULL DEFAULT '0',
  `icon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `orderBy` int(11) NOT NULL,
  `isActivated` tinyint(4) NOT NULL DEFAULT '1',
  `isAction` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_menu`
--

INSERT INTO `sys_menu` (`id`, `code`, `idParent`, `icon`, `url`, `orderBy`, `isActivated`, `isAction`) VALUES
(100, 'dashboard', 0, '<span class=\"svg-icon menu-icon\"> 						<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg--> 						<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\"> 							<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> 								<polygon points=\"0 0 24 0 24 24 0 24\" /> 								<path d=\"M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z\" fill=\"#000000\" fill-rule=\"nonzero\" /> 								<path d=\"M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z\" fill=\"#000000\" opacity=\"0.3\" /> 							</g> 						</svg> 						<!--end::Svg Icon--> 					</span>', '', 1, 1, 0),
(12000, 'administration', 0, '<span class=\"svg-icon menu-icon\"> <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\"> 												<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"> 													<rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect> 													<path d=\"M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z\" fill=\"#000000\"></path> 													<path d=\"M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z\" fill=\"#000000\" opacity=\"0.3\"></path> 												</g> 											</svg> 											</span>', '', 13, 1, 0),
(12100, 'profiles', 12000, '', 'administration/user_profile', 1, 1, 0),
(12200, 'users', 12000, '', 'administration/user_accounts', 2, 1, 0),
(12300, 'preference', 12000, '', 'administration/system_preference', 3, 1, 0),
(12400, 'system_update', 12000, '', 'administration/system_upgrade', 4, 1, 0),
(13000, 'settings_saas', 0, '<span class=\"svg-icon \r\nsvg-icon-2x\"><!--begin::Svg Icon | path:C:\\wamp64\\www\\keenthemes\\themes\\metronic\\theme\\html\\demo1\\dist/../src/media/svg/icons\\Weather\\Cloud2.svg--><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">\r\n    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">\r\n        <polygon points=\"0 0 24 0 24 24 0 24\"/>\r\n        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"16\" cy=\"10\" r=\"5\"/>\r\n        <path d=\"M5.74714567,18.0425758 C4.09410362,16.9740356 3,15.1147886 3,13 C3,9.6862915 5.6862915,7 9,7 C11.7957591,7 14.1449096,8.91215918 14.8109738,11.5 L17.25,11.5 C19.3210678,11.5 21,13.1789322 21,15.25 C21,17.3210678 19.3210678,19 17.25,19 L8.25,19 C7.28817895,19 6.41093178,18.6378962 5.74714567,18.0425758 Z\" fill=\"#000000\"/>\r\n    </g>\r\n</svg><!--end::Svg Icon--></span>', '', 14, 1, 0),
(13001, 'new_company', 13000, '', '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

CREATE TABLE `sys_user` (
  `id` int(11) NOT NULL,
  `nompren` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `isActivated` tinyint(4) NOT NULL DEFAULT '1',
  `idProfile` int(11) NOT NULL,
  `idCommune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`id`, `nompren`, `login`, `pwd`, `email`, `isActivated`, `idProfile`, `idCommune`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admi@bbc-partners.com', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user_profile`
--

CREATE TABLE `sys_user_profile` (
  `id` int(11) NOT NULL,
  `designation` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` int(11) NOT NULL,
  `updatedOn` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `idCommune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_user_profile`
--

INSERT INTO `sys_user_profile` (`id`, `designation`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`, `idCommune`) VALUES
(3, 'Admin', '2022-05-07 11:42:12', 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user_profile_menu`
--

CREATE TABLE `sys_user_profile_menu` (
  `idMenu` int(11) NOT NULL,
  `idProfile` int(11) NOT NULL,
  `add` tinyint(4) NOT NULL DEFAULT '1',
  `edit` tinyint(4) NOT NULL DEFAULT '1',
  `delete` tinyint(4) NOT NULL DEFAULT '1',
  `view` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sys_user_profile_menu`
--

INSERT INTO `sys_user_profile_menu` (`idMenu`, `idProfile`, `add`, `edit`, `delete`, `view`) VALUES
(100, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_commune`
--
ALTER TABLE `sys_commune`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_ibfk_country` (`isDeleted`);

--
-- Indexes for table `sys_menu`
--
ALTER TABLE `sys_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_user`
--
ALTER TABLE `sys_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_company` (`idCommune`);

--
-- Indexes for table `sys_user_profile`
--
ALTER TABLE `sys_user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profile_ibfk_company` (`idCommune`);

--
-- Indexes for table `sys_user_profile_menu`
--
ALTER TABLE `sys_user_profile_menu`
  ADD PRIMARY KEY (`idMenu`,`idProfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_commune`
--
ALTER TABLE `sys_commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_menu`
--
ALTER TABLE `sys_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13003;

--
-- AUTO_INCREMENT for table `sys_user`
--
ALTER TABLE `sys_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_user_profile`
--
ALTER TABLE `sys_user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
