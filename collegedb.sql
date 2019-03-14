-- --------------------------------------------------------
-- Host:                         192.168.31.162
-- Server version:               8.0.15 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for collegedatabase
DROP DATABASE IF EXISTS `collegedatabase`;
CREATE DATABASE IF NOT EXISTS `collegedatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `collegedatabase`;

-- Dumping structure for table collegedatabase.commitee
DROP TABLE IF EXISTS `commitee`;
CREATE TABLE IF NOT EXISTS `commitee` (
  `comm_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `head` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dept_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(40) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.leave_register
DROP TABLE IF EXISTS `leave_register`;
CREATE TABLE IF NOT EXISTS `leave_register` (
  `staff_id` int(11) DEFAULT NULL,
  `leaveappnumber` int(11) DEFAULT NULL,
  `dateofapplication` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `fromdate` int(11) DEFAULT NULL,
  `todate` int(11) DEFAULT NULL,
  `reason` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.notices
DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `not_id` int(11) DEFAULT NULL,
  `noticelink` varchar(30) DEFAULT NULL,
  `noticedate` int(11) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.salary_info
DROP TABLE IF EXISTS `salary_info`;
CREATE TABLE IF NOT EXISTS `salary_info` (
  `staff_id` int(11) DEFAULT NULL,
  `salary_infoId` int(11) DEFAULT NULL,
  `basicpay` int(11) DEFAULT NULL,
  `rateofpay` int(11) DEFAULT NULL,
  `fixedpay` int(11) DEFAULT NULL,
  `leavecount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.staff
DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `fathername` varchar(30) DEFAULT NULL,
  `spousename` varchar(40) DEFAULT NULL,
  `pancard_id` int(11) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `stafftype` varchar(40) DEFAULT NULL,
  `qualification` varchar(40) DEFAULT NULL,
  `biodata` varchar(40) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.staff_bank_details
DROP TABLE IF EXISTS `staff_bank_details`;
CREATE TABLE IF NOT EXISTS `staff_bank_details` (
  `SBDID` varchar(30) DEFAULT NULL,
  `bankbranch` varchar(40) DEFAULT NULL,
  `IFSCCode` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `bankname` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
-- Dumping structure for table collegedatabase.url
DROP TABLE IF EXISTS `url`;
CREATE TABLE IF NOT EXISTS `url` (
  `link_id` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
