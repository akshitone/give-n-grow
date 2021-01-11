-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2019 at 02:49 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agency`
--

DROP TABLE IF EXISTS `tbl_agency`;
CREATE TABLE IF NOT EXISTS `tbl_agency` (
  `AgencyId` int(12) NOT NULL AUTO_INCREMENT,
  `AgencyName` varchar(50) NOT NULL,
  `AgencyIcon` text,
  `AgencyContact` bigint(20) NOT NULL,
  `AgencyEmail` varchar(50) NOT NULL,
  `AgencyCode` int(12) NOT NULL,
  `AgencyUserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `IsActive` varchar(1) NOT NULL DEFAULT 'N',
  `RegistrationTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OTPCode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AgencyId`),
  UNIQUE KEY `AgencyContact` (`AgencyContact`,`AgencyEmail`,`AgencyCode`,`AgencyUserName`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agency`
--

INSERT INTO `tbl_agency` (`AgencyId`, `AgencyName`, `AgencyIcon`, `AgencyContact`, `AgencyEmail`, `AgencyCode`, `AgencyUserName`, `Password`, `IsActive`, `RegistrationTime`, `OTPCode`) VALUES
(12, 'BroadGrowth', '12955_12_.jpg', 8320236259, 'broadgrowth@gmail.com', 101, '@broadgrowth', 'broadgrowth', 'Y', '2019-01-17 14:16:49', '6604'),
(13, 'Farmory', '12328_13_.jpg', 7575853095, 'farmory@gmail.com', 102, '@farmory', 'farmory', 'N', '2019-01-25 14:26:18', '6927'),
(14, 'ShieldFarm', '86355_14_.jpg', 8460387950, 'shieldfarm@gmail.com', 103, '@shieldfarm', 'shieldfarm', 'Y', '2019-02-07 14:27:15', NULL),
(15, 'Agricultive', '96028_15_.jpg', 9824443602, 'agricultive@gmail.com', 104, '@agricultive', 'agricultive', 'Y', '2019-02-21 14:28:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

DROP TABLE IF EXISTS `tbl_answer`;
CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `AnswerId` int(12) NOT NULL AUTO_INCREMENT,
  `QuestionId` int(12) NOT NULL,
  `ExpertId` int(12) NOT NULL,
  `AnswerText` text NOT NULL,
  `AnswerDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsApprove` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`AnswerId`),
  KEY `FK_Question` (`QuestionId`),
  KEY `FK_AnsExpertId` (`ExpertId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`AnswerId`, `QuestionId`, `ExpertId`, `AnswerText`, `AnswerDateTime`, `IsApprove`) VALUES
(1, 7, 4, 'it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more.  it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more. it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more. ', '2019-03-04 14:38:27', 'Y'),
(2, 9, 3, 'it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more.  it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more. it is simple. take a seat. wait for vegetable to grow. but first give them water to grow more. ', '2019-03-04 14:38:27', 'Y'),
(7, 6, 6, 'Starting a farm is no easy task.  It involves many variables involving where you want to farm, how you want to farm, what you want to farm, and how big you want your farm to be.  There are many things to consider, and even though this is a how-to guide to get you started on starting a farm, the rest is up to you.', '2019-04-04 18:27:22', 'Y'),
(12, 14, 4, 'okay.. i will see..', '2019-04-18 12:31:54', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE IF NOT EXISTS `tbl_article` (
  `ArticleId` int(12) NOT NULL AUTO_INCREMENT,
  `ExpertId` int(12) NOT NULL,
  `CategoryId` int(12) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Image1` text,
  `Image2` text,
  `VideoUrl` text,
  `ArticleDateTime` date NOT NULL,
  `Source` text,
  `AddedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsApprove` varchar(1) NOT NULL DEFAULT 'N',
  `Tags` text,
  PRIMARY KEY (`ArticleId`),
  KEY `FK_CategoryType` (`CategoryId`),
  KEY `FK_ExpertId` (`ExpertId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`ArticleId`, `ExpertId`, `CategoryId`, `Title`, `Description`, `Image1`, `Image2`, `VideoUrl`, `ArticleDateTime`, `Source`, `AddedDateTime`, `IsApprove`, `Tags`) VALUES
(5, 4, 36, 'Emerging Challenges for Horticulture', 'The organized supply of a wide range of reasonably priced horticultural crops in most developed countries has led to a marked gratification about the need for ongoing R&D programmes in horticulture. Consequently, many governments world-wide have scaled back funding for food production (at least in the applied areas of R&D) and unfortunately, most research- driven universities have now disbanded horticulture/horticultural science departments and combined them into plant science departments with a', '75244_5_.jpg', '87877_5_.jpg', 'file:///C:/wamp64/www/Demo7/demos/demo7/forms.input-groups.html', '2019-02-08', 'facebook', '2019-02-21 13:55:08', 'N', 'plant'),
(6, 3, 37, 'Emerging Challenges for Horticulture', 'The organized supply of a wide range of reasonably priced horticultural crops in most developed countries has led to a marked gratification about the need for ongoing R&D programmes in horticulture. Consequently, many governments world-wide have scaled back funding for food production (at least in the applied areas of R&D) and unfortunately, most research- driven universities have now disbanded horticulture/horticultural science departments and combined them into plant science departments with a', '15554_6_.jpg', '98369_6_.jpg', 'file:///C:/wamp64/www/Demo7/demos/demo7/forms.input-groups.html', '2019-02-21', 'googlr', '2019-02-21 14:02:47', 'Y', 'horticulture'),
(7, 5, 38, 'Organic Vegetable Production', 'There are many reasons to consider growing organic vegetables. Organic production is a system that lends itself well to small-scale and part-time farming operations. Additionally, although the cost of certification and the time and labor involved in managing the system are high, returns have the potential to be high where markets are well developed for organic products.', '74216_7_.jpg', '68869_7_.jpg', 'http://localhost/MarketProject/index.php/home/QuestionController/insertData', '2019-02-21', 'instagram', '2019-02-21 14:06:31', 'Y', 'vegetable production'),
(8, 6, 35, 'The Green Revolution', 'The Green Revolution was initiated in the 1960’s to address the issue of malnutrition in the developing world. The technology of the Green Revolution involved bio-engineered seeds that worked in conjunction with chemical fertilizers and heavy irrigation to increase crop yields. The technology was readily adopted in many stated in India and for some was a great success.', '12470_8_.jpg', '41346_8_.jpg', 'http://digitalcommons.unl.edu/envstudtheses/10/', '2019-02-21', 'google', '2019-02-21 14:10:00', 'Y', 'Green Revolution'),
(9, 4, 37, 'Propagation by specialized organs', 'In order to continue life on this planet, plants are the basic and immediate needs of the living things including of human beings. Among the existed plant species, the higher plant has occupied wide habitats than the others. These plants reproduce to perpetuate their off springs by sexual and asexual means of reproduction. The Sexual reproduction method produces offspring by the fusion of gametes, resulting in offspring genetically different from the parent plants due to genetic exchange occur d', '23838_9_.jpg', '26380_9_.jpg', 'https://www.google.com/search?q=horticulture+images&rlz=1C1CHBF', '2019-03-02', 'facebook', '2019-02-21 14:12:35', 'Y', 'Propagation'),
(10, 5, 38, 'Methods of production', 'Using simple random sampling technique, a total of 275 seed producers and seed users were selected for the study purpose from four districts. Among them, 175 seed producers were from Rukum and Kavre; 100 seed users were from Rupandehi and Palpa. In addition, 75 seed companies/agro-vets/cooperatives/traders/service providers were selected purposely from all study districts. Indexing techniques.', '35378_10_.jpg', '64765_10_.jpg', 'http://localhost/MarketProject/index.php/home/QuestionController/insertData', '2019-03-01', 'instagram', '2019-02-21 14:15:21', 'Y', 'ProductionTech');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyer`
--

DROP TABLE IF EXISTS `tbl_buyer`;
CREATE TABLE IF NOT EXISTS `tbl_buyer` (
  `BuyerId` int(12) NOT NULL AUTO_INCREMENT,
  `BuyerName` varchar(50) NOT NULL,
  `BuyerIcon` text,
  `BuyerContact` bigint(20) NOT NULL,
  `BuyerAddress` varchar(500) NOT NULL,
  `RegistrationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(1) NOT NULL DEFAULT 'N',
  `BuyerCode` int(12) NOT NULL,
  PRIMARY KEY (`BuyerId`),
  UNIQUE KEY `BuyerContact` (`BuyerContact`,`BuyerCode`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buyer`
--

INSERT INTO `tbl_buyer` (`BuyerId`, `BuyerName`, `BuyerIcon`, `BuyerContact`, `BuyerAddress`, `RegistrationDate`, `Status`, `BuyerCode`) VALUES
(5, 'Yash Fanawala', '74894_5_.jpg', 9909639708, 'bhestan', '2019-02-25 17:54:47', 'Y', 501),
(6, 'Nilkanth Mathawala', '72639_6_.jpg', 7383050200, 'Althan', '2019-02-25 18:21:55', 'Y', 502),
(7, 'Raj Patel', '25146_7_.jpg', 9909977077, 'Magdallah', '2019-03-12 12:43:54', 'Y', 503),
(8, 'Neel Jariwala', '92114_8_.jpg', 9870987099, 'Piplod', '2019-03-12 12:44:44', 'Y', 504),
(9, 'Jay Mashalawala', '55010_9_.jpg', 7878909070, 'New City Light', '2019-03-12 12:45:53', 'Y', 505),
(19, 'Raj Patel', '42729_19_.jpg', 7878909070, 'adajan', '2019-04-12 10:49:07', 'N', 507),
(20, 'casdda', '28797_20_.jpg', 1231231235, 'fsdfdfsfs', '2019-04-15 13:56:38', 'N', 567);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `CategoryId` int(12) NOT NULL AUTO_INCREMENT,
  `CategoryType` varchar(50) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `CategoryIcon` text,
  PRIMARY KEY (`CategoryId`),
  UNIQUE KEY `CategoryType` (`CategoryType`,`CategoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`CategoryId`, `CategoryType`, `CategoryName`, `CategoryIcon`) VALUES
(26, 'Product', 'Vegetables', '26443_26_.jpg'),
(27, 'Product', 'Fruits', '43568_27_.jpg'),
(30, 'Expert', 'Agriculture', '18663_30_.jpg'),
(31, 'Expert', 'Crop improvement', '63088_31_.jpg'),
(32, 'Expert', 'Plant protection', '23331_32_.jpg'),
(33, 'Expert', 'plan production', '42095_33_.jpg'),
(34, 'Expert', 'Environmental science', '69094_34_.jpg'),
(35, 'Article', 'Plant Breeding and Genetics', '92127_35_.jpg'),
(36, 'Article', 'Plant Pathology', '62952_36_.jpg'),
(37, 'Article', 'Horticulture', '39309_37_.jpg'),
(38, 'Article', 'Production techniques', '84252_38_.jpg'),
(40, 'Question', 'Organic production', '74924_40_.jpg'),
(41, 'Question', 'Organic product', '53268_41_.jpg'),
(42, 'Question', 'trade of product', '61319_42_.jpg'),
(43, 'Question', 'Co-operation and expert advise', '43950_43_.jpg'),
(44, 'Question', 'facts and figures', '68272_44_.jpg'),
(57, 'Subsidy', 'Help for Subsidy', '29307_57_.jpg'),
(58, 'Question', 'Others', '82739_58_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_reply`
--

DROP TABLE IF EXISTS `tbl_comment_reply`;
CREATE TABLE IF NOT EXISTS `tbl_comment_reply` (
  `CommentId` int(12) NOT NULL AUTO_INCREMENT,
  `ArticleId` int(12) NOT NULL,
  `FarmerId` int(12) NOT NULL,
  `CommentText` text NOT NULL,
  `CommentDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsApprove` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`CommentId`),
  KEY `FK_ArticleId` (`ArticleId`),
  KEY `FK_FarmerId` (`FarmerId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment_reply`
--

INSERT INTO `tbl_comment_reply` (`CommentId`, `ArticleId`, `FarmerId`, `CommentText`, `CommentDateTime`, `IsApprove`) VALUES
(2, 6, 10, 'Nice article. It\'s good for me to farming good in my field.', '2019-03-06 17:47:27', 'Y'),
(3, 6, 14, 'Great article. It\'s help to us.', '2019-03-06 17:47:56', 'Y'),
(7, 6, 16, 'Good thought.', '2019-03-13 18:14:01', 'Y'),
(8, 6, 13, 'Helpful article to all farmer.', '2019-03-14 09:56:31', 'Y'),
(11, 6, 10, 'nice article', '2019-04-08 11:40:02', 'Y'),
(14, 9, 10, 'good article', '2019-04-16 12:14:29', 'Y'),
(15, 9, 16, 'hello', '2019-04-16 12:14:42', 'Y'),
(26, 10, 10, 'good going', '2019-04-16 12:17:29', 'Y'),
(27, 10, 10, 'nice article', '2019-04-16 12:17:35', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert`
--

DROP TABLE IF EXISTS `tbl_expert`;
CREATE TABLE IF NOT EXISTS `tbl_expert` (
  `ExpertId` int(12) NOT NULL AUTO_INCREMENT,
  `ExpertName` varchar(50) NOT NULL,
  `ExpertContact` bigint(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ExpertIcon` text NOT NULL,
  `ExpertCoverIcon` text NOT NULL,
  `ExpertQualification` varchar(50) NOT NULL,
  `ExpertExperience` int(12) NOT NULL,
  `CategoryId` int(12) NOT NULL,
  `IsActive` varchar(1) NOT NULL DEFAULT 'N',
  `ExpertUserName` varchar(50) NOT NULL,
  `ExpertPassword` varchar(50) NOT NULL,
  `RegistrationDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OTPCode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ExpertId`),
  UNIQUE KEY `ExpertContact` (`ExpertContact`,`Email`,`ExpertUserName`),
  KEY `FK_CategoryType` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expert`
--

INSERT INTO `tbl_expert` (`ExpertId`, `ExpertName`, `ExpertContact`, `Email`, `ExpertIcon`, `ExpertCoverIcon`, `ExpertQualification`, `ExpertExperience`, `CategoryId`, `IsActive`, `ExpertUserName`, `ExpertPassword`, `RegistrationDateTime`, `OTPCode`) VALUES
(3, 'Meet Patel', 8460307987, 'meet21@gmail.com', '42217_3_.jpg', '', 'Diploma in argriculture', 5, 30, 'Y', '@meet21', 'meet21', '2019-02-19 10:12:03', NULL),
(4, 'Akshit Mithaiwala', 7874987797, 'akshit08@gmail.com', '88400_4_.jpg', '', 'Ph.D. in environmental', 6, 34, 'Y', '@akshit08', 'akshit08', '2019-02-19 10:13:11', '3566'),
(5, 'Pooja Mistry', 8460397897, 'pooja21@gmail.com', '31011_5_.jpg', '', 'Ph.D. in agronomy', 5, 33, 'N', '@pooja21', 'pooja21', '2019-02-19 10:15:02', NULL),
(6, 'Vaishnavi Pandit', 9898333054, 'vaishnavi16@gmail.com', '52487_6_.jpg', '', 'Diploma in horticulture', 6, 31, 'Y', '@vaishnavi16', 'vaishnavi16', '2019-02-19 10:16:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

DROP TABLE IF EXISTS `tbl_faq`;
CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `FAQId` int(12) NOT NULL AUTO_INCREMENT,
  `FAQCatId` int(12) NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  PRIMARY KEY (`FAQId`),
  KEY `FK_FAQcatId` (`FAQCatId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`FAQId`, `FAQCatId`, `Question`, `Answer`) VALUES
(1, 1, 'What is organic farming and why is it important?', 'Organic farming is agriculture that makes healthy food, healthy soils, healthy plants, and healthy environments a priority, along with crop productivity. Organic farmers use biological fertilizer inputs and management practices such as cover cropping and crop rotation to improve soil quality and build organic soil matter.'),
(2, 1, 'What does certified organic mean and how is certification regulated?', 'The National Organic Program (NOP) develops the rules and regulations for the production, handling, labeling, and enforcement of all USDA organic products. This process, referred to as rulemaking, involves input from the National Organic Standards Board (a Federal Advisory Committee made up of fifteen members of the public) and the public.'),
(3, 1, 'Can GMOs be used in organic products?', 'The use of genetic engineering, or genetically modified organisms (GMOs) is prohibited in organic products. This means an organic farmer can’t plant GMO seeds, an organic cow can’t eat GMO alfalfa or corn, and an organic soup producer can’t use any GMO ingredients.'),
(4, 2, 'What crops do you raise?', 'We raise corn, soybeans, popcorn, and wheat.  More specifically we grow dent corn, waxy corn, commercial soybeans, soybeans for seed, popcorn, and winter wheat.'),
(5, 2, 'What is waxy corn?', 'Inevitably when I mention waxy corn I get asked, “What is waxy corn?”  Waxy has a different starch content than normal field corn.  All of our waxy is sold to Tate & Lyle and “is used primarily for creating stabilisers, thickeners and emulsifiers for the food industry.”'),
(6, 2, 'Where does your harvest go?', 'Many people are interested in what happens to our grain after we harvest.  Much of it is stored on our farm following harvest except for popcorn and wheat.  Throughout the year we deliver grain to various places. '),
(7, 3, 'How does industrial hemp fit into our crop rotations?', 'In Kentucky, Tennessee, and the Carolina’s, traditional crop rotations utilize corn, soybean, and tobacco. Currently, hemp has been filling the void created by the decline of tobacco. It is a spring-planted crop and naturally fits into the space tobacco is leaving behind.'),
(8, 3, 'What is needed for hemp in terms of soil prep and planting?', 'There’s no need for extreme fertilization or soil amendment processes and tilling is equally low maintenance; with the option to pursue vertical tilling, minimal tilling, or even no tilling. Once the soil preparation process is complete, a basic broadcast spreader, cultipacker, or even a modern-day air drill can be used to spread the seeds.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_category`
--

DROP TABLE IF EXISTS `tbl_faq_category`;
CREATE TABLE IF NOT EXISTS `tbl_faq_category` (
  `FAQCatId` int(12) NOT NULL AUTO_INCREMENT,
  `FAQCatName` varchar(500) NOT NULL,
  PRIMARY KEY (`FAQCatId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq_category`
--

INSERT INTO `tbl_faq_category` (`FAQCatId`, `FAQCatName`) VALUES
(1, 'Organic Farming'),
(2, 'About Farmer'),
(3, 'Agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

DROP TABLE IF EXISTS `tbl_farmer`;
CREATE TABLE IF NOT EXISTS `tbl_farmer` (
  `FarmerId` int(12) NOT NULL AUTO_INCREMENT,
  `FarmerName` varchar(50) NOT NULL,
  `FarmerIcon` text,
  `FarmerContact` bigint(20) NOT NULL,
  `FarmerAddress` varchar(500) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RegistrationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FarmerCode` int(12) NOT NULL,
  `Status` varchar(1) NOT NULL DEFAULT 'N',
  `AadharNumber` bigint(50) NOT NULL,
  `AadharFrontImage` text,
  `AadharBackImage` text,
  `OTPcode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`FarmerId`),
  UNIQUE KEY `FarmerContact` (`FarmerContact`,`FarmerAddress`,`FarmerCode`,`AadharNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_farmer`
--

INSERT INTO `tbl_farmer` (`FarmerId`, `FarmerName`, `FarmerIcon`, `FarmerContact`, `FarmerAddress`, `Password`, `RegistrationDate`, `FarmerCode`, `Status`, `AadharNumber`, `AadharFrontImage`, `AadharBackImage`, `OTPcode`) VALUES
(10, 'Rahul Lad', '74655_10_.jpg', 8320236259, 'citylight, surat', 'rahul123', '2019-01-31 14:57:50', 201, 'Y', 123456123456, 'id1.jpg', 'id2.jpg', '6176'),
(11, 'Rajan Maurya', '16015_11_.jpg', 9825142648, 'parvat patiya, surat', 'rajan123', '2019-01-17 15:02:25', 202, 'Y', 112233445566, 'id1.jpg', 'id2.jpg', NULL),
(12, 'Seema Pandey', '59898_12_.jpg', 9979526588, 'bhathena, surat', 'seema123', '2019-02-06 15:03:39', 203, 'Y', 123456789123, 'id1.jpg', 'id2.jpg', NULL),
(13, 'Atri Joshi', '53748_13_.jpg', 9909639708, 'rander, surat', 'atri123', '2019-01-17 15:06:36', 204, 'Y', 123456789012, 'id1.jpg', 'id2.jpg', NULL),
(14, 'Isha Lad', '45054_14_.jpg', 7878785656, 'bhestan, surat', 'isha123', '2019-02-21 15:08:01', 205, 'Y', 987934563455, 'id1.jpg', 'id2.jpg', NULL),
(16, 'Kunjal Joshi', '83262_16_.jpg', 9909639708, 'adajan, surat', 'kunjal123', '2019-03-14 15:09:50', 206, 'Y', 345345123123, 'id1.jpg', 'id2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `FeedbackId` int(12) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Feedback` text NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`FeedbackId`, `UserName`, `EmailId`, `Feedback`) VALUES
(1, 'akshit', 'ak47@gmail.com', 'nice website'),
(2, 'rahul', 'rahul@gmail.com', 'good product');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_final_payment`
--

DROP TABLE IF EXISTS `tbl_final_payment`;
CREATE TABLE IF NOT EXISTS `tbl_final_payment` (
  `PaymentId` int(12) NOT NULL AUTO_INCREMENT,
  `RequestId` int(12) NOT NULL,
  `PaymentDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Amount` bigint(50) NOT NULL,
  `Remark` text NOT NULL,
  `TransactionNumber` varchar(100) NOT NULL,
  `PaymentType` varchar(20) NOT NULL,
  PRIMARY KEY (`PaymentId`),
  UNIQUE KEY `TransactionNumber` (`TransactionNumber`),
  KEY `FK_RequestId` (`RequestId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_final_payment`
--

INSERT INTO `tbl_final_payment` (`PaymentId`, `RequestId`, `PaymentDateTime`, `Amount`, `Remark`, `TransactionNumber`, `PaymentType`) VALUES
(1, 2, '2019-03-28 19:38:49', 1000, 'for fun', 'am1027001', 'Cheque'),
(2, 4, '2019-04-02 21:01:39', 5000, 'for emergency', 'am1027002', 'RTGS'),
(3, 6, '2019-04-02 21:02:07', 2500, 'for tuition fees', 'am1027003', 'RTGS'),
(4, 2, '2019-04-02 21:03:07', 1000, 'for fun', 'am1027005', 'NEFT'),
(5, 12, '2019-04-02 21:03:39', 2500, 'for tuition fees', 'am1027006', 'Cheque'),
(6, 8, '2019-04-02 21:04:14', 1000, 'for fun', 'am1027007', 'NEFT'),
(7, 15, '2019-04-08 11:39:13', 200, 'Urgent!!', '209876', 'Cheque'),
(9, 1, '2019-04-10 19:45:44', 500, 'for food', 'am10270010', 'Cheque'),
(10, 9, '2019-04-10 19:47:57', 700, 'for bank FD', 'am10270021', 'RTGS'),
(11, 19, '2019-04-14 18:56:08', 2000, 'for game', 'am102700100', 'Cheque'),
(12, 21, '2019-04-15 14:40:30', 1000, 'for game', '12311231', 'Cheque'),
(14, 20, '2019-04-15 14:41:53', 500, 'sdasdas', '1231312313', 'RTGS'),
(15, 18, '2019-04-15 14:43:21', 1000, 'for laptop', 'am10270012', 'Cheque'),
(16, 14, '2019-04-15 14:45:53', 500, 'dsadsadasd', 'am10270013', 'Cheque'),
(17, 22, '2019-04-15 17:43:17', 500, 'Emergency', 'am102700134', 'Cheque'),
(18, 23, '2019-04-18 12:35:54', 500, 'urgent', 'am10270011', 'Cheque');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

DROP TABLE IF EXISTS `tbl_like`;
CREATE TABLE IF NOT EXISTS `tbl_like` (
  `LikeId` int(12) NOT NULL AUTO_INCREMENT,
  `ArticleId` int(12) NOT NULL,
  `FarmerId` int(12) NOT NULL,
  `LikeDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Dislike` int(1) NOT NULL,
  PRIMARY KEY (`LikeId`),
  KEY `FK_AnswerId` (`ArticleId`),
  KEY `FK_LikeFarmerId` (`FarmerId`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_like`
--

INSERT INTO `tbl_like` (`LikeId`, `ArticleId`, `FarmerId`, `LikeDateTime`, `Dislike`) VALUES
(2, 6, 11, '2019-03-13 18:22:37', 0),
(7, 5, 11, '2019-03-16 10:29:25', 0),
(8, 7, 11, '2019-03-16 10:30:47', 0),
(9, 8, 11, '2019-03-16 10:30:59', 0),
(10, 10, 11, '2019-03-16 10:33:46', 0),
(11, 9, 11, '2019-03-16 10:34:08', 0),
(12, 6, 12, '2019-03-16 10:37:30', 0),
(13, 5, 12, '2019-03-16 10:38:15', 0),
(14, 9, 12, '2019-03-16 10:39:38', 0),
(15, 10, 12, '2019-03-16 10:41:08', 0),
(16, 8, 12, '2019-03-16 10:41:19', 0),
(17, 7, 12, '2019-03-16 10:43:12', 0),
(18, 6, 13, '2019-03-16 10:44:44', 0),
(19, 5, 13, '2019-03-16 10:44:51', 0),
(20, 9, 13, '2019-03-16 10:46:01', 0),
(21, 10, 13, '2019-03-16 10:46:07', 0),
(22, 8, 13, '2019-03-16 10:46:48', 0),
(23, 6, 14, '2019-03-16 10:47:59', 0),
(24, 5, 14, '2019-03-16 10:48:43', 0),
(27, 7, 14, '2019-03-16 10:52:23', 0),
(28, 8, 14, '2019-03-16 10:52:31', 0),
(29, 10, 14, '2019-03-16 10:52:36', 0),
(30, 9, 14, '2019-03-16 10:52:47', 0),
(31, 9, 10, '2019-04-13 19:06:32', 0),
(32, 6, 10, '2019-04-16 12:11:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `LoginId` int(12) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Icon` text,
  `Contact` bigint(20) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`LoginId`),
  UNIQUE KEY `Contact` (`Contact`,`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`LoginId`, `Name`, `Icon`, `Contact`, `UserName`, `Password`) VALUES
(1, 'ADMIN', 'admin.jpg', 7874987797, 'admin@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

DROP TABLE IF EXISTS `tbl_notification`;
CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `NotificationId` int(12) NOT NULL AUTO_INCREMENT,
  `FarmerId` int(12) DEFAULT NULL,
  `AgencyId` int(12) DEFAULT NULL,
  `ExpertId` int(12) DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `NotificationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`NotificationId`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`NotificationId`, `FarmerId`, `AgencyId`, `ExpertId`, `Title`, `Description`, `NotificationDate`) VALUES
(1, NULL, 12, NULL, 'Akshit', 'nothing', '2019-03-27 16:27:06'),
(2, NULL, NULL, 4, 'Emerging', 'apna time ayenga', '2019-03-27 16:30:02'),
(3, 10, NULL, NULL, 'Organic ', 'apna time ayenga', '2019-03-27 16:32:32'),
(4, 10, NULL, NULL, 'broadgrowth', 'you need to pay your bill', '2019-03-28 08:54:56'),
(6, 11, NULL, NULL, 'Akshit', 'apna time ayenga', '2019-03-28 09:00:21'),
(7, 11, NULL, NULL, 'Akshit', 'apna time ayenga', '2019-03-28 09:01:17'),
(16, NULL, NULL, NULL, 'Product Added', 'New Product Added by Agency', '2019-04-07 20:31:32'),
(17, NULL, NULL, NULL, 'Farmer Added', 'New Farmer Added by Agency', '2019-04-07 20:32:47'),
(18, NULL, NULL, NULL, 'Buyer Added', 'New Buyer Added by Agency', '2019-04-07 20:33:37'),
(19, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request', '2019-04-07 20:34:51'),
(20, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by Agency', '2019-04-07 20:35:28'),
(21, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by Agency', '2019-04-07 20:40:11'),
(23, NULL, NULL, NULL, 'Farmer Added', 'New Farmer Added by Agency', '2019-04-07 20:53:40'),
(25, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by Agency', '2019-04-08 11:31:41'),
(27, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request', '2019-04-08 11:38:25'),
(28, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by Agency', '2019-04-08 11:49:23'),
(30, NULL, NULL, NULL, 'Buyer Added', 'New Buyer Raj Patel Added by BroadGrowth Agency', '2019-04-12 10:49:07'),
(32, NULL, NULL, NULL, 'Farmer Added', 'New Farmer koi pan Added by BroadGrowth Agency', '2019-04-12 10:59:41'),
(36, NULL, NULL, NULL, 'Product Added', 'New Product Ladyfingera Added by Agricultive Agency', '2019-04-12 11:06:43'),
(38, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rajan Maurya amount of 1000', '2019-04-12 11:12:15'),
(39, NULL, NULL, NULL, 'Stock Added', 'New Stock 20 of 29 Added by 10 Farmer in Agricultive Agency ', '2019-04-12 11:21:03'),
(53, NULL, NULL, NULL, 'Farmer Added', 'New Farmer kush Added by BroadGrowth Agency', '2019-04-14 18:42:05'),
(54, NULL, NULL, NULL, 'Stock Added', 'New Stock 20 of 31 Added by 10 Farmer in BroadGrowth Agency ', '2019-04-14 18:49:13'),
(55, NULL, NULL, NULL, 'Stock Selling', 'Stock 10 of 25 Selling by BroadGrowth Agency to 5 Buyer', '2019-04-14 18:51:23'),
(56, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rahul Lad amount of 2000', '2019-04-14 18:55:36'),
(57, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rahul Lad amount of 500', '2019-04-15 13:45:16'),
(58, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rahul Lad amount of 1000', '2019-04-15 13:50:43'),
(59, NULL, NULL, NULL, 'Stock Selling', 'Stock 5 of 25 Selling by BroadGrowth Agency to 5 Buyer', '2019-04-15 13:51:27'),
(60, NULL, NULL, NULL, 'Stock Selling', 'Stock 5 of 28 Selling by BroadGrowth Agency to 7 Buyer', '2019-04-15 13:53:05'),
(61, NULL, NULL, NULL, 'Farmer Added', 'New Farmer kush Added by BroadGrowth Agency', '2019-04-15 13:53:51'),
(62, NULL, NULL, NULL, 'Product Added', 'New Product kanda Added by BroadGrowth Agency', '2019-04-15 13:55:41'),
(63, NULL, NULL, NULL, 'Buyer Added', 'New Buyer casdda Added by BroadGrowth Agency', '2019-04-15 13:56:38'),
(64, 20, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(65, 19, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(66, 10, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(67, 14, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(68, 11, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(69, 16, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(70, 13, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(71, 12, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:02'),
(72, 20, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(73, 19, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(74, 10, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(75, 14, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(76, 11, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(77, 16, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(78, 13, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(79, 12, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 14:15:33'),
(80, 10, NULL, NULL, 'Payment', 'Your Payment Request is acceppted.', '2019-04-15 14:45:53'),
(81, NULL, NULL, NULL, 'Stock Added', 'New Stock 10 of 25 Added by 10 Farmer in BroadGrowth Agency ', '2019-04-15 17:26:36'),
(82, NULL, NULL, NULL, 'Stock Selling', 'Stock 5 of 25 Selling by BroadGrowth Agency to 5 Buyer', '2019-04-15 17:28:37'),
(83, NULL, NULL, NULL, 'Stock Selling', 'Stock 10 of 28 Selling by BroadGrowth Agency to 5 Buyer', '2019-04-15 17:29:35'),
(84, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rahul Lad amount of 500', '2019-04-15 17:42:51'),
(85, 10, NULL, NULL, 'Payment', 'Your Payment Request is acceppted.', '2019-04-15 17:43:17'),
(86, 14, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(87, 10, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(88, 11, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(89, 16, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(90, 13, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(91, 12, NULL, NULL, 'Article', 'New Article Added', '2019-04-15 17:48:08'),
(92, NULL, NULL, NULL, 'Farmer Added', 'New Farmer  Added by  Agency', '2019-04-15 18:06:06'),
(94, NULL, NULL, NULL, 'Stock Added', 'New Stock 45 of 25 Added by 10 Farmer in BroadGrowth Agency ', '2019-04-16 11:07:13'),
(110, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by BroadGrowth Agency', '2019-04-16 14:07:22'),
(111, NULL, NULL, NULL, 'Stock Selling', 'Stock Selling by BroadGrowth Agency', '2019-04-16 14:07:46'),
(112, NULL, NULL, NULL, 'Product Added', 'New Product vefegeg Added by BroadGrowth Agency', '2019-04-16 18:55:06'),
(113, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by BroadGrowth Agency', '2019-04-18 07:29:45'),
(114, NULL, NULL, NULL, 'Stock Added', 'New Stock Added by BroadGrowth Agency', '2019-04-18 12:22:52'),
(115, NULL, NULL, NULL, 'Stock Selling', 'Stock Selling by BroadGrowth Agency', '2019-04-18 12:28:54'),
(116, NULL, NULL, NULL, 'Withdraw Request', 'New Withdraw Request of Rahul Lad amount of 500', '2019-04-18 12:35:36'),
(117, 10, NULL, NULL, 'Payment', 'Your Payment Request is acceppted.', '2019-04-18 12:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `ProductId` int(12) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` text NOT NULL,
  `ProductIcon` text,
  `IsActive` varchar(1) NOT NULL DEFAULT 'N',
  `ProductAddedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Weight` varchar(10) NOT NULL,
  PRIMARY KEY (`ProductId`),
  UNIQUE KEY `ProductName` (`ProductName`),
  KEY `FK_CategoryId` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`ProductId`, `CategoryId`, `ProductName`, `ProductDescription`, `ProductIcon`, `IsActive`, `ProductAddedDate`, `Weight`) VALUES
(24, 26, 'Tomato', 'Tomatoes are a juicy, sweet and slightly sour fruit.\r\n\r\nYes, fruit; botanically speaking tomatoes are a fruit.\r\n\r\nHowever, when was the last time you saw tomato in a fruit salad? While tomatoes, technically, are a fruit, we use them as a vegetable in cooking.\r\n\r\nThey’re a crucial culinary ingredient too, and they’re a key feature of world cuisine, from Italian to Indian food.\r\n\r\nThey’re good for our health too, and they contain the polyphenol lycopene. Studies suggest this compound may have anti-cancer and cardioprotective benefits (62).\r\n\r\nNutritionally speaking, tomatoes provide a good amount of beta-carotene and vitamin C (63);\r\n\r\nCalories: 18 kcal\r\nCarbohydrate: 3.9 g\r\nFiber: 1.2 g\r\nSugar: 2.6g\r\nFat: 0.2 g\r\nProtein: 0.9 g\r\nVitamin C: 21% RDA\r\nVitamin A: 17% RDA\r\nVitamin K1: 10% RDA\r\nPotassium: 7% RDA\r\nManganese: 6% RDA\r\n', '14284_24_.jpg', 'Y', '2019-01-18 19:19:38', 'KG'),
(25, 27, 'Apple', 'Apples are a sweet fleshy fruit that grow around the world.\r\n\r\nBelieved to originate in Central Asia, there are now hundreds of varieties of apples, ranging from sweet to sour.\r\n\r\nNutritionally speaking, apples are a relatively high-carbohydrate fruit and their most significant nutrient is vitamin C.\r\n\r\nThey’re a very versatile fruit; while often eaten as a snack, they’re also used in a variety of dessert recipes.\r\n\r\nPer large apple, the nutrient profile looks like this (1);\r\n\r\nCalories: 104 kcal\r\nCarbohydrate: 27.6 g\r\nFiber: 2.8 g\r\nSugar: 21.8 g\r\nFat: 0.3 g\r\nProtein: 0.6 g\r\nVitamin C: 14% RDA\r\nPotassium: 6% RDA\r\nManganese: 4% RDA\r\nVitamin B6: 4% RDA\r\nVitamin B2: 4% RDA', '32212_25_.jpg', 'Y', '2019-01-18 19:20:06', 'BOX'),
(26, 26, 'Ladyfinger', 'Okra is an unusual looking vegetable, and it is otherwise known as ‘ladies’ fingers’.  \r\n\r\nThe vegetable has green stems that contain edible seeds, and both the outer and inner of the vegetable are eaten.  \r\nOkra can be served raw, cooked, and we can sometimes find it in salads.  It has a notably slimy texture. \r\n \r\nHere are the nutritional properties of okra (42);  \r\nCalories: 31 kcal \r\nCarbohydrate: 7.0 g \r\nFiber: 3.2 g \r\nSugar: 1.2g \r\nFat: 0.2 g \r\nProtein: 2.0 g \r\nVitamin K1: 66% RDA \r\nManganese: 50% RDA \r\nVitamin C: 35% RDA \r\nFolate: 22% RDA \r\nMagnesium: 14% RDA', '62461_26_.jpg', 'Y', '2019-01-18 19:20:37', 'KG'),
(27, 26, 'Potato', 'While a traditional staple food in the East is rice, potatoes fill that bracket for much of the West.  \r\n\r\nPotatoes are one of the higher carbohydrate sources on this list of vegetables.  \r\n\r\nHowever, they are not as high in carbs as many people presume.  At around 18g carbohydrate per 100g, they are a lot lower than legumes and grains – and even some other vegetables.  \r\n\r\nNutritionally, they provide a good source of potassium and vitamin C (47);\r\n  \r\nCalories: 77 kcal \r\nCarbohydrate: 18.4 g \r\nFiber: 2.2 g \r\nSugar: 0.8g \r\nFat: 0.1 g \r\nProtein: 2.0 g \r\nVitamin C: 33% RDA \r\nVitamin B6: 15% RDA \r\nPotassium: 12% RDA \r\nManganese: 8% RDA \r\nPhosphorus: 6% RDA', '46080_27_.jpg', 'Y', '2019-01-18 19:21:09', 'KG'),
(28, 27, 'Banana', 'The banana is a tropical fruit with a long body covered in a yellow skin.  It’s a very common fruit and—despite needing a hot climate—it’s available in most countries.  \r\n\r\nSince bananas have a very sweet taste, dessert recipes often use them.  In particular, banana splits, banana milk, and banana bread are some of the most popular options.\r\n \r\nDue to their accessibility and inexpensive price, bananas are one of the most popular types of fruit in the world.  \r\n\r\nOne medium banana has the following nutrient profile (4);  \r\nCalories: 105 kcal \r\nCarbohydrate: 27.0 g \r\nFiber: 3.1 g \r\nSugar: 14.4 g \r\nFat: 0.4 g \r\nProtein: 1.3 g \r\nVitamin B6: 22% RDA \r\nVitamin C: 17% RDA \r\nManganese: 16% RDA \r\nPotassium: 12% RDA \r\nMagnesium: 8% RDA', '42149_28_.jpg', 'Y', '2019-01-18 19:21:39', 'BOX'),
(29, 27, 'Mango', 'Sometimes referred to as the “king of fruits”, mangoes are a tropical fruit with an extremely sweet and juicy flesh.  \r\nThey are native to South Asia, and they’re a common fruit in countries such as India, the Philippines, and Thailand.\r\n  \r\nMangoes contain a stone (making them a drupe) surrounded by sweet yellow flesh; this taste is slightly sweet, soft, and tangy.  \r\n\r\nGenerally, people eat the fruit in its raw, whole state, but there are also many smoothie and dessert recipes.  \r\nThe sweet taste makes sense when we consider that mangoes are one of the highest carbohydrate/sugar fruits. \r\n \r\nPer cup (165g) serving, mangoes provide (32);  \r\nCalories: 107 kcal \r\nCarbohydrate: 28.1 g \r\nFiber: 3.0 g \r\nSugar: 24.4 g \r\nFat: 0.4 g \r\nProtein: 0.8 g \r\nVitamin C: 76% RDA \r\nVitamin A: 25% RDA \r\nVitamin B6: 11% RDA \r\nCopper: 9% RDA \r\nVitamin E: 9% RDA', '59562_29_.jpg', 'Y', '2019-01-18 19:22:32', 'BOX'),
(30, 26, 'Methi', 'As their name may suggest, collard greens are a leafy green vegetable.\r\n  \r\nThis vegetable is popular throughout the world, and it is usually served either boiled, steamed, or in stews. \r\n \r\nCollard greens have a slightly bitter flavor, and they provide a wide range of nutrients.  \r\n\r\nIn fact, they are among the most nutrient-dense options on this list of vegetables (23);  \r\n\r\nCalories: 30 kcal \r\nCarbohydrate: 5.7 g \r\nFiber: 3.6 g \r\nSugar: 0.5 g \r\nFat: 0.4 g \r\nProtein: 2.5 g \r\nVitamin K1: 638% RDA \r\nVitamin A: 133% RDA \r\nVitamin C: 59% RDA \r\nFolate: 41% RDA \r\nManganese: 14% RDA', '91674_30_.jpg', 'Y', '2019-01-18 19:23:09', 'KG'),
(31, 27, 'Orange', 'Oranges are among the most common fruit in the world.  \r\n\r\nThe orange is a citrus fruit and, surprisingly, it is a hybrid rather than an original species. \r\n\r\nIf you didn’t know about this point, then oranges are actually a hybrid of the pomelo and mandarin.  Oranges have a tough outer peel that encases the soft, juicy center. \r\n\r\nGenerally speaking, the fruit has a sweet and (very slight) sour taste. However, there are hundreds of orange varieties and they can vary between sweet, bitter, and sour.  \r\n\r\nThe sweet varieties are generally the edible kind we find in shops and in orange juice.  Oranges are a relatively high-carbohydrate fruit and they provide a decent amount of vitamin C. \r\n \r\nOne large orange supplies (36);  \r\nCalories: 86.5 kcal \r\nCarbohydrate: 78.8 g \r\nFiber: 4.4 g \r\nSugar: 17.2 g \r\nFat: 0.2 g \r\nProtein: 1.7 g \r\nVitamin C: 163% RDA \r\nFolate: 14% RDA \r\nVitamin B1: 11% RDA \r\nPotassium: 10% RDA \r\nVitamin A: 8% RDA', '99652_31_.jpg', 'Y', '2019-01-18 19:23:41', 'BOX'),
(32, 27, 'watermalon', 'The origin of watermelons is Southern Africa, and it is a large fruit that grows in tropical and subtropical regions.\r\n\r\nAs you might guess from the name, watermelons are another fruit with a high water content; 91.5% to be exact.\r\n\r\nThe fruit can wildly vary in size, with some fruit being a few kilograms in weight, but others reaching gigantic proportions.\r\n\r\nApparently, the largest watermelon on record was from Tennessee and weighed in at 159kg (351 pounds).\r\n\r\nWatermelons taste sweet and juicy, and provide the following nutrients per cup (154g) (59);\r\n\r\nCalories: 46.2 kcal\r\nCarbohydrate: 11.6 g\r\nFiber: 0.6 g\r\nSugar: 9.5 g\r\nFat: 0.2 g\r\nProtein: 0.9 g\r\nVitamin C: 21% RDA\r\nVitamin A: 18% RDA\r\nPotassium: 5% RDA\r\nMagnesium: 4% RDA\r\nVitamin B5: 3% RDA', '99522_32_.jpg', 'Y', '2019-02-27 21:30:32', 'BOX'),
(33, 26, 'Cabbage', 'Green and red cabbage are different in color, but they are basically the same type of vegetable.\r\n\r\nDespite a similar appearance, the major contrast is the dark red/purple leaves of red cabbage.\r\n\r\nHowever, their nutrient profile is slightly different, and red cabbage offers more in the way of vitamins and minerals (16);\r\n\r\nCalories: 31 kcal\r\nCarbohydrate: 7.4 g\r\nFiber: 2.1 g\r\nSugar: 3.8 g\r\nFat: 0.2 g\r\nProtein: 1.4 g\r\nVitamin C: 95% RDA\r\nVitamin K1: 48% RDA\r\nVitamin A: 22% RDA\r\nManganese: 12% RDA\r\nVitamin B6: 10% RDA', '64211_33_.jpg', 'Y', '2019-03-12 11:50:18', 'KG'),
(34, 26, 'Eggplant', 'While it goes by the name of eggplant in the US, the UK uses the French name of aubergine.\r\n\r\nThis vegetable belongs to the nightshade family of plants, alongside others such as tomatoes, bell peppers, and tomatillos.\r\n\r\nIt seems that with eggplant, people either love it or hate it – and the way of cooking probably has a lot to do with it.\r\n\r\nBoiled eggplant? Not so tasty.\r\n\r\nOn the other hand, roasted eggplant cooked with some fat tastes delicious.\r\n\r\nEggplants offer the following nutrients (27);\r\n\r\nCalories: 24 kcal\r\nCarbohydrate: 5.7 g\r\nFiber: 3.4 g\r\nSugar: 2.4 g\r\nFat: 0.2 g\r\nProtein: 1.0 g\r\nManganese: 13% RDA\r\nPotassium: 7% RDA\r\nFolate: 5% RDA\r\nVitamin C: 4% RDA\r\nCopper: 4% RDA', '81396_34_.jpg', 'Y', '2019-03-12 11:52:47', 'KG'),
(35, 26, 'Garlic', 'Garlic is one of those types of vegetables that confuses people; is it truly a vegetable?\r\n\r\nOr is it a herb?\r\n\r\nWhile some people refer to garlic as a herb, it is a type of bulb, and it is more accurate to call it a root vegetable.\r\n\r\nHowever, although roasted garlic tastes delicious, garlic is frequently used as a herb for flavoring.\r\n\r\nGarlic has a lot of research behind it, and studies indicate that it may help with lowering blood pressure (29).\r\n\r\nNutritionally, it offers (30);\r\n\r\nCalories: 149 kcal\r\nCarbohydrate: 33.1 g\r\nFiber: 2.1 g\r\nSugar: 1.0 g\r\nFat: 0.5 g\r\nProtein: 6.4 g\r\nManganese: 84% RDA\r\nVitamin B6: 62% RDA\r\nVitamin C: 52% RDA\r\nSelenium: 20% RDA\r\nCalcium: 18% RDA', '52926_35_.jpg', 'Y', '2019-03-12 11:53:57', 'KG'),
(36, 27, 'Pineapple', 'Pineapples are a sweet and slightly sour tropical fruit originating from South America.\r\n\r\nIt is now very common in tropical regions of the world such as the Philippines and the Caribbean.\r\n\r\nPineapples have a firm yellow flesh that supplies a juicy, sweet taste.\r\n\r\nSimilar to other tropical fruits, pineapples have many culinary uses. For instance, they’re a popular choice in juices, smoothies, desserts, and even pizzas.\r\n\r\nPineapples are very rich in vitamin C and the mineral manganese. Per cup (165g) serving, pineapples provide (42);\r\n\r\nCalories: 82.5 kcal\r\nCarbohydrate: 21.6 g\r\nFiber: 2.3 g\r\nSugar: 16.3 g\r\nFat: 0.2 g\r\nProtein: 0.9 g\r\nVitamin C: 131% RDA\r\nManganese: 76% RDA\r\nVitamin B1: 9% RDA\r\nVitamin B6: 9% RDA\r\nCopper: 9% RDA', '11729_36_.png', 'Y', '2019-03-12 11:55:04', 'BOX'),
(37, 27, 'Avocado', 'Avocados are an interesting fruit because they are very low in carbohydrate yet high in healthy fats.\r\n\r\nThe fruit originated in South America, possibly in Mexico or Peru, and it was first referred to in English by the name of “crocodile pear”.\r\n\r\nOne of the best things about the avocado is just how adaptable it is.\r\n\r\nFor instance, you may have heard of ‘avocado toast’, a trendy breakfast at the moment. However, there are many different ways to use avocados – such as making guacamole, avocado ice-cream, chocolate mousses, and many other interesting dishes.\r\n\r\nCold-pressed avocado oil also gives olive oil a run for its money in the ‘healthiest oil’ department; it’s a heat-stable fat that contains various protective nutrients.\r\n\r\nAvocados are extremely nutrient-dense, and they are rich in fiber, protein, vitamins, and minerals – especially potassium.\r\n\r\nHere is the nutrition breakdown per standard avocado (3);\r\n\r\nCalories: 322 kcal\r\nCarbohydrate: 17.1 g\r\nFiber: 13.5 g\r\nSugar: 0.2 g\r\nFat: 29.5 g\r\nProtein: 4 g\r\nVitamin K: 53% RDA\r\nFolate: 41% RDA\r\nVitamin C: 33% RDA\r\nPotassium: 28% RDA\r\nVitamin B5: 28% RDA', '26139_37_.jpg', 'Y', '2019-03-12 11:57:01', 'BOX'),
(38, 27, 'BlackBerries', 'Blackberries are one of the tastiest fruits around.\r\n\r\nThey are a small edible fruit with a big taste, and botanically they are a kind of berry that grow on brambles. The fruit has a sweet and succulent taste despite being relatively low in fructose compared to most types of fruit.\r\n\r\nBlackberries are one of the most commonly cultivated fruits. However, we can also find them growing in their wild state – which purportedly have a better nutritional profile and more polyphenols (5).\r\n\r\nCombine them with some fresh cream for a delicious, sweet and creamy dessert.\r\n\r\nBlackberries are especially good for vitamin C and the health benefits it provides.\r\n\r\nNutritionally, here is what blackberries look like per 100g (6);\r\n\r\nCalories: 43 kcal\r\nCarbohydrate: 10.2 g\r\nFiber: 5.3 g\r\nSugar: 4.9 g\r\nFat: 0.5 g\r\nProtein: 1.4 g\r\nVitamin C: 35% RDA\r\nManganese: 32% RDA\r\nVitamin K: 25% RDA\r\nCopper: 8% RDA\r\nVitamin E: 6% RDA', '17569_38_.jpg', 'Y', '2019-03-12 11:58:58', 'BOX');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_price_date`
--

DROP TABLE IF EXISTS `tbl_product_price_date`;
CREATE TABLE IF NOT EXISTS `tbl_product_price_date` (
  `PriceId` int(12) NOT NULL AUTO_INCREMENT,
  `ProductId` int(12) NOT NULL,
  `PriceDate` date NOT NULL,
  `BuyerPrice1` int(12) NOT NULL,
  `SellerPrice1` int(12) NOT NULL,
  `BuyerPrice2` int(12) NOT NULL,
  `SellerPrice2` int(12) NOT NULL,
  `BuyerPrice3` int(12) NOT NULL,
  `SellerPrice3` int(12) NOT NULL,
  `AddedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`PriceId`),
  KEY `FK_ProductId` (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_price_date`
--

INSERT INTO `tbl_product_price_date` (`PriceId`, `ProductId`, `PriceDate`, `BuyerPrice1`, `SellerPrice1`, `BuyerPrice2`, `SellerPrice2`, `BuyerPrice3`, `SellerPrice3`, `AddedDate`) VALUES
(21, 24, '2019-04-13', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(22, 24, '2019-04-14', 22, 32, 17, 22, 10, 15, '2019-03-12 12:01:56'),
(23, 24, '2019-04-15', 23, 33, 20, 25, 15, 20, '2019-03-12 12:01:56'),
(25, 25, '2019-04-13', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(26, 25, '2019-04-14', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(27, 25, '2019-04-15', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(28, 28, '2019-04-13', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(29, 28, '2019-04-14', 22, 32, 17, 22, 10, 15, '2019-03-12 12:01:56'),
(30, 28, '2019-04-15', 23, 33, 20, 25, 15, 20, '2019-03-12 12:01:56'),
(31, 33, '2019-04-14', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(32, 33, '2019-04-15', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(33, 33, '2019-04-16', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(34, 26, '2019-04-13', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(35, 26, '2019-04-14', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(36, 26, '2019-04-15', 25, 35, 20, 25, 10, 15, '2019-03-12 12:01:56'),
(37, 29, '2019-04-13', 300, 400, 250, 350, 200, 250, '2019-03-12 12:01:56'),
(38, 29, '2019-04-14', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(39, 29, '2019-04-15', 330, 430, 300, 350, 250, 300, '2019-03-12 12:01:56'),
(40, 31, '2019-04-13', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(41, 31, '2019-04-14', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(42, 31, '2019-04-15', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(46, 27, '2019-04-13', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(47, 27, '2019-04-14', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(48, 27, '2019-04-15', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(52, 35, '2019-04-14', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(53, 35, '2019-04-15', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(54, 35, '2019-04-16', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(55, 34, '2019-04-13', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(56, 34, '2019-04-14', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(57, 34, '2019-04-15', 25, 35, 20, 25, 10, 15, '2019-03-12 12:01:56'),
(58, 32, '2019-04-14', 300, 400, 250, 350, 200, 250, '2019-03-12 12:01:56'),
(59, 32, '2019-04-15', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(60, 32, '2019-04-16', 330, 430, 300, 350, 250, 300, '2019-03-12 12:01:56'),
(61, 38, '2019-04-15', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(62, 38, '2019-04-16', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(63, 38, '2019-04-17', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(67, 37, '2019-04-14', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(68, 37, '2019-04-15', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(69, 37, '2019-04-16', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(70, 36, '2019-04-14', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(71, 36, '2019-04-15', 22, 32, 17, 22, 10, 15, '2019-03-12 12:01:56'),
(72, 36, '2019-04-16', 23, 33, 20, 25, 15, 20, '2019-03-12 12:01:56'),
(73, 24, '2019-04-06', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(74, 24, '2019-04-05', 32, 42, 27, 32, 20, 25, '2019-03-12 12:01:56'),
(75, 24, '2019-03-15', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(76, 25, '2019-04-04', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(77, 25, '2019-04-05', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(78, 25, '2019-04-06', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(79, 28, '2019-04-17', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(80, 28, '2019-03-14', 32, 42, 27, 32, 20, 25, '2019-03-12 12:01:56'),
(81, 28, '2019-03-15', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(82, 33, '2019-03-16', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(83, 33, '2019-03-14', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(84, 33, '2019-03-15', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(85, 26, '2019-04-17', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(86, 26, '2019-04-06', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(87, 26, '2019-04-07', 25, 35, 20, 25, 10, 15, '2019-03-12 12:01:56'),
(88, 29, '2019-04-17', 400, 500, 350, 450, 300, 350, '2019-03-12 12:01:56'),
(89, 29, '2019-03-14', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(90, 29, '2019-03-15', 430, 530, 300, 450, 350, 400, '2019-03-12 12:01:56'),
(91, 31, '2019-04-16', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(92, 31, '2019-04-17', 220, 320, 80, 120, 60, 100, '2019-03-12 12:01:56'),
(93, 31, '2019-03-15', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(94, 27, '2019-04-16', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(95, 27, '2019-04-17', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(96, 27, '2019-04-06', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(97, 35, '2019-03-16', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(98, 35, '2019-03-14', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(99, 35, '2019-03-15', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(100, 34, '2019-03-16', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(101, 34, '2019-03-14', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(102, 34, '2019-03-15', 35, 45, 30, 35, 20, 25, '2019-03-12 12:01:56'),
(103, 32, '2019-04-17', 300, 400, 250, 350, 200, 250, '2019-03-12 12:01:56'),
(104, 32, '2019-03-14', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(105, 32, '2019-03-15', 430, 530, 400, 450, 350, 400, '2019-03-12 12:01:56'),
(106, 38, '2019-03-16', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(107, 38, '2019-03-14', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(108, 38, '2019-03-15', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(109, 37, '2019-03-16', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(110, 37, '2019-03-14', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(111, 37, '2019-03-15', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(112, 36, '2019-03-16', 40, 50, 35, 40, 30, 35, '2019-03-12 12:01:56'),
(113, 36, '2019-03-14', 42, 52, 37, 42, 20, 25, '2019-03-12 12:01:56'),
(114, 36, '2019-03-15', 43, 63, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(115, 30, '2019-04-16', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(116, 30, '2019-04-17', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(117, 30, '2019-03-12', 25, 35, 20, 25, 10, 15, '2019-03-12 12:01:56'),
(118, 30, '2019-03-16', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(119, 30, '2019-03-14', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(120, 30, '2019-03-15', 35, 45, 30, 35, 20, 25, '2019-03-12 12:01:56'),
(121, 36, '2019-03-13', 40, 50, 35, 40, 30, 35, '2019-03-12 12:01:56'),
(122, 38, '2019-03-13', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(123, 32, '2019-03-13', 300, 400, 250, 350, 200, 250, '2019-03-12 12:01:56'),
(124, 34, '2019-03-13', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(125, 25, '2019-04-07', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(126, 37, '2019-03-13', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(127, 35, '2019-03-13', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(128, 27, '2019-03-13', 40, 50, 35, 45, 30, 35, '2019-03-12 12:01:56'),
(129, 31, '2019-03-13', 100, 200, 75, 100, 50, 75, '2019-03-12 12:01:56'),
(130, 29, '2019-03-13', 400, 500, 350, 450, 300, 350, '2019-03-12 12:01:56'),
(131, 26, '2019-03-13', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(132, 33, '2019-03-13', 30, 40, 25, 35, 20, 25, '2019-03-12 12:01:56'),
(133, 24, '2019-04-04', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(134, 28, '2019-03-13', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(135, 30, '2019-04-14', 15, 20, 10, 15, 5, 10, '2019-03-12 12:01:56'),
(136, 24, '2019-04-17', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(137, 25, '2019-04-08', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(138, 28, '2019-03-17', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(139, 33, '2019-04-13', 33, 43, 30, 35, 25, 30, '2019-03-12 12:01:56'),
(140, 26, '2019-04-16', 25, 35, 20, 25, 10, 15, '2019-03-12 12:01:56'),
(141, 29, '2019-04-16', 430, 530, 300, 450, 350, 400, '2019-03-12 12:01:56'),
(142, 31, '2019-03-17', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(143, 27, '2019-04-08', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(144, 35, '2019-03-17', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(145, 34, '2019-04-16', 35, 45, 30, 35, 20, 25, '2019-03-12 12:01:56'),
(146, 32, '2019-03-17', 430, 530, 400, 450, 350, 400, '2019-03-12 12:01:56'),
(147, 38, '2019-04-14', 130, 230, 90, 150, 70, 100, '2019-03-12 12:01:56'),
(148, 37, '2019-04-13', 43, 53, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(149, 36, '2019-03-17', 43, 63, 40, 45, 35, 40, '2019-03-12 12:01:56'),
(150, 30, '2019-04-15', 35, 45, 30, 35, 20, 25, '2019-03-12 12:01:56'),
(151, 24, '2019-03-19', 32, 42, 27, 32, 20, 25, '2019-03-12 12:01:56'),
(152, 25, '2019-03-19', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(153, 28, '2019-03-19', 32, 42, 27, 32, 20, 25, '2019-03-12 12:01:56'),
(154, 33, '2019-03-19', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(155, 26, '2019-03-19', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(156, 29, '2019-03-19', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(157, 31, '2019-03-19', 220, 320, 80, 120, 60, 100, '2019-03-12 12:01:56'),
(158, 27, '2019-04-07', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(159, 35, '2019-04-13', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(160, 34, '2019-04-17', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(161, 32, '2019-03-19', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(162, 38, '2019-03-19', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(163, 37, '2019-03-19', 42, 52, 37, 47, 30, 35, '2019-03-12 12:01:56'),
(164, 36, '2019-04-13', 42, 52, 37, 42, 20, 25, '2019-03-12 12:01:56'),
(165, 30, '2019-03-19', 30, 40, 25, 30, 20, 25, '2019-03-12 12:01:56'),
(166, 25, '2019-04-16', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(167, 28, '2019-04-16', 22, 32, 17, 22, 10, 15, '2019-03-12 12:01:56'),
(168, 33, '2019-04-17', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(169, 26, '2019-04-08', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(170, 29, '2019-03-18', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(171, 31, '2019-03-18', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(172, 27, '2019-03-18', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(173, 35, '2019-04-17', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(174, 34, '2019-03-18', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(175, 32, '2019-04-13', 320, 420, 270, 370, 200, 250, '2019-03-12 12:01:56'),
(176, 38, '2019-04-13', 120, 220, 70, 110, 50, 90, '2019-03-12 12:01:56'),
(177, 37, '2019-04-17', 32, 42, 27, 37, 20, 25, '2019-03-12 12:01:56'),
(178, 36, '2019-04-17', 22, 32, 17, 22, 10, 15, '2019-03-12 12:01:56'),
(179, 30, '2019-04-13', 20, 30, 15, 20, 10, 15, '2019-03-12 12:01:56'),
(180, 24, '2019-04-16', 32, 42, 27, 32, 20, 25, '2019-03-12 12:01:56'),
(181, 25, '2019-04-17', 30, 32, 40, 42, 50, 55, '2019-04-08 10:38:29'),
(182, 25, '2019-04-14', 40, 50, 30, 40, 10, 20, '2019-04-14 18:33:42'),
(183, 25, '2019-04-18', 40, 50, 30, 40, 20, 30, '2019-04-18 12:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

DROP TABLE IF EXISTS `tbl_question`;
CREATE TABLE IF NOT EXISTS `tbl_question` (
  `QuestionId` int(12) NOT NULL AUTO_INCREMENT,
  `FarmerId` int(12) NOT NULL,
  `CategoryId` int(12) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `ImageUrl` text,
  `QuestionDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsApprove` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`QuestionId`),
  KEY `FK_QueCategoryId` (`CategoryId`),
  KEY `FK_QueFarmerId` (`FarmerId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`QuestionId`, `FarmerId`, `CategoryId`, `Title`, `Description`, `ImageUrl`, `QuestionDateTime`, `IsApprove`) VALUES
(6, 12, 41, 'How To farming?', '\r\nHorticulture is a boon of nature which is refined by human skill as a science to obtain more and more benefits. It involves rigorous cropping expertise, including the improvement, production, distribution and use of vegetables, fruits, woody landscape and greenhouse plants. Horticulture is now one of the fastest growing industry with striking professional opportunities. ', '19099_6_.jpg', '2019-02-21 14:26:45', 'Y'),
(7, 10, 40, 'How To Produce Vegetables?', 'An increasing proportion of the world’s population is living in metropolitan environments where their understanding of farming, and therefore of food production, is becoming progressively more poor. While in 1950 approximately 71% of the world’s population lived in rural locations, this had declined to 50% in 2011 and is anticipated to be as low as 30% globally by 2050.', '23838_9_.jpg', '2019-02-21 14:37:11', 'Y'),
(8, 13, 42, 'What to do with fruits?', ' Ironically however, these same urban-based consumers have become increasing verbal about various issues such as use of pesticides, labour conditions for farm workers, carbon taxes, buy-local campaigns, and the sustainability of production methods. These are often driven as “matters of ethics” and are in isolation from the reality of current production methods or of the opportunity to realistically meet these consumer demands.', '79239_8_.jpg', '2019-03-02 17:39:34', 'Y'),
(9, 16, 41, 'what is agriculture?', '\r\nHorticulture is a boon of nature which is refined by human skill as a science to obtain more and more benefits. It involves rigorous cropping expertise, including the improvement, production, distribution and use of vegetables, fruits, woody landscape and greenhouse plants. Horticulture is now one of the fastest growing industry with striking professional opportunities. ', '79239_8_.jpg', '2019-02-21 14:26:45', 'N'),
(10, 11, 44, 'When to do farm?', 'An increasing proportion of the world’s population is living in metropolitan environments where their understanding of farming, and therefore of food production, is becoming progressively more poor. While in 1950 approximately 71% of the world’s population lived in rural locations, this had declined to 50% in 2011 and is anticipated to be as low as 30% globally by 2050.', '80658_7_.jpg', '2019-02-21 14:37:11', 'N'),
(11, 14, 43, 'Why we do farming?', ' Ironically however, these same urban-based consumers have become increasing verbal about various issues such as use of pesticides, labour conditions for farm workers, carbon taxes, buy-local campaigns, and the sustainability of production methods. These are often driven as “matters of ethics” and are in isolation from the reality of current production methods or of the opportunity to realistically meet these consumer demands.', '23838_9_.jpg', '2019-03-02 17:39:34', 'Y'),
(13, 10, 58, 'dadsadsa', 'sdasdasdad', '56670_13_.jpg', '2019-04-15 17:51:32', 'Y'),
(14, 10, 44, 'how to farm??', 'i have some queries.', '67827_14_.jpg', '2019-04-18 12:31:34', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

DROP TABLE IF EXISTS `tbl_rating`;
CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `RatingId` int(12) NOT NULL AUTO_INCREMENT,
  `ArticleId` int(12) NOT NULL,
  `FarmerId` int(12) NOT NULL,
  `Rating` text,
  `RatingDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsApprove` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`RatingId`),
  KEY `FK_RatingAnswerId` (`ArticleId`),
  KEY `FK_RatingFarmerId` (`FarmerId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`RatingId`, `ArticleId`, `FarmerId`, `Rating`, `RatingDateTime`, `IsApprove`) VALUES
(1, 6, 10, '5', '2019-03-18 08:41:18', 'Y'),
(2, 5, 10, '3', '2019-03-18 08:41:45', 'Y'),
(3, 9, 10, '4', '2019-03-18 08:42:11', 'Y'),
(4, 7, 10, '2', '2019-03-18 08:42:25', 'Y'),
(5, 10, 10, '4', '2019-03-18 08:42:39', 'Y'),
(6, 8, 10, '5', '2019-03-18 08:42:52', 'Y'),
(7, 6, 11, '4', '2019-03-18 08:43:36', 'Y'),
(8, 5, 11, '4', '2019-03-18 08:43:51', 'Y'),
(9, 6, 12, '3', '2019-03-18 10:08:32', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

DROP TABLE IF EXISTS `tbl_seller`;
CREATE TABLE IF NOT EXISTS `tbl_seller` (
  `SellerId` int(12) NOT NULL AUTO_INCREMENT,
  `AgencyId` int(12) NOT NULL,
  `BuyerId` int(12) NOT NULL,
  `ProductId` int(12) NOT NULL,
  `ProductPrice` int(12) NOT NULL,
  `AddedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductType` int(1) NOT NULL,
  `Weight` int(12) NOT NULL,
  `TotalPayment` int(12) NOT NULL,
  `Status` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`SellerId`),
  KEY `AgencyId` (`AgencyId`),
  KEY `BuyerId` (`BuyerId`),
  KEY `ProductId` (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`SellerId`, `AgencyId`, `BuyerId`, `ProductId`, `ProductPrice`, `AddedDate`, `ProductType`, `Weight`, `TotalPayment`, `Status`) VALUES
(1, 12, 8, 25, 42, '2018-05-02 11:32:02', 1, 20, 840, 'Y'),
(2, 15, 5, 25, 42, '2018-05-09 11:43:25', 1, 20, 840, 'Y'),
(3, 12, 6, 28, 32, '2019-02-13 12:29:36', 1, 10, 320, 'Y'),
(4, 14, 6, 25, 42, '2019-03-13 12:30:04', 1, 20, 840, 'Y'),
(5, 14, 7, 28, 32, '2019-03-10 20:33:28', 1, 20, 640, 'Y'),
(6, 12, 8, 29, 320, '2018-10-10 20:33:43', 1, 20, 6400, 'Y'),
(7, 15, 7, 27, 42, '2018-09-12 20:34:01', 1, 25, 1050, 'Y'),
(8, 12, 6, 33, 32, '2018-10-17 20:34:56', 1, 15, 480, 'Y'),
(9, 15, 5, 36, 42, '2018-11-14 20:35:11', 1, 25, 1050, 'Y'),
(10, 14, 8, 34, 30, '2018-12-19 20:35:25', 1, 30, 900, 'Y'),
(11, 15, 7, 30, 30, '2019-01-15 20:35:56', 1, 10, 300, 'Y'),
(12, 12, 8, 29, 320, '2019-02-13 20:33:43', 1, 20, 5000, 'Y'),
(13, 12, 5, 25, 42, '2019-04-07 20:44:55', 1, 10, 420, 'Y'),
(14, 12, 5, 29, 320, '2018-07-11 21:00:08', 1, 20, 6400, 'Y'),
(15, 15, 7, 27, 42, '2018-08-15 20:34:01', 1, 25, 1050, 'Y'),
(16, 12, 5, 29, 320, '2019-04-08 11:32:34', 1, 10, 3200, 'Y'),
(17, 15, 6, 29, 320, '2019-04-12 11:26:34', 1, 5, 1600, 'Y'),
(18, 15, 5, 29, 320, '2019-04-12 11:27:57', 1, 5, 1600, 'Y'),
(19, 12, 5, 26, 20, '2019-04-14 13:15:44', 1, 10, 200, 'Y'),
(20, 12, 5, 25, 30, '2019-04-14 13:18:19', 1, 10, 300, 'Y'),
(21, 12, 5, 25, 30, '2019-04-14 13:19:54', 1, 5, 150, 'Y'),
(27, 12, 5, 28, 32, '2019-04-15 17:29:35', 1, 10, 320, 'Y'),
(28, 12, 5, 29, 320, '2019-04-16 14:07:46', 1, 5, 1600, 'Y'),
(29, 12, 9, 25, 40, '2019-04-18 12:28:54', 1, 200, 8000, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_storage`
--

DROP TABLE IF EXISTS `tbl_storage`;
CREATE TABLE IF NOT EXISTS `tbl_storage` (
  `StorageId` int(12) NOT NULL AUTO_INCREMENT,
  `AgencyId` int(12) NOT NULL,
  `FarmerId` int(12) NOT NULL,
  `ProductId` int(12) NOT NULL,
  `ProductPrice` int(12) NOT NULL,
  `AddedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductType` int(1) NOT NULL DEFAULT '1',
  `Weight` int(12) NOT NULL,
  `TotalPayment` int(12) NOT NULL,
  `Status` varchar(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`StorageId`),
  KEY `FK_AgencyId` (`AgencyId`),
  KEY `FK_FarmertId` (`FarmerId`),
  KEY `FK_ProductId1` (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_storage`
--

INSERT INTO `tbl_storage` (`StorageId`, `AgencyId`, `FarmerId`, `ProductId`, `ProductPrice`, `AddedDate`, `ProductType`, `Weight`, `TotalPayment`, `Status`) VALUES
(33, 12, 10, 24, 30, '2018-05-02 11:09:26', 1, 50, 1500, 'Y'),
(34, 12, 10, 24, 25, '2018-05-09 11:09:38', 2, 30, 750, 'Y'),
(35, 12, 10, 24, 20, '2018-05-16 11:09:51', 3, 10, 200, 'Y'),
(36, 12, 11, 24, 30, '2018-05-19 11:10:46', 1, 70, 2100, 'Y'),
(37, 12, 11, 24, 25, '2018-05-23 11:11:01', 2, 40, 1000, 'Y'),
(38, 12, 11, 24, 20, '2018-05-30 11:11:18', 3, 20, 400, 'Y'),
(39, 14, 12, 25, 40, '2018-06-13 11:12:59', 1, 70, 2800, 'Y'),
(40, 14, 12, 25, 35, '2018-07-01 11:13:17', 2, 50, 1750, 'Y'),
(41, 14, 12, 25, 30, '2018-07-08 11:13:32', 3, 20, 600, 'Y'),
(42, 14, 13, 25, 40, '2018-07-15 11:13:54', 1, 100, 4000, 'Y'),
(43, 14, 13, 25, 35, '2018-07-22 11:14:09', 2, 50, 1750, 'Y'),
(44, 14, 13, 25, 30, '2018-07-29 11:14:22', 3, 20, 600, 'Y'),
(45, 15, 14, 28, 30, '2018-08-15 11:15:38', 1, 70, 2100, 'Y'),
(46, 15, 14, 28, 25, '2018-09-02 11:16:03', 2, 40, 1000, 'Y'),
(47, 15, 14, 28, 20, '2018-09-09 11:16:15', 3, 10, 200, 'Y'),
(48, 15, 16, 28, 30, '2018-09-16 11:16:31', 1, 80, 2400, 'Y'),
(49, 15, 16, 28, 25, '2018-09-23 11:16:54', 2, 45, 1125, 'Y'),
(50, 15, 16, 28, 20, '2018-09-30 11:17:06', 3, 30, 600, 'Y'),
(51, 15, 10, 26, 15, '2018-10-18 11:17:21', 1, 70, 1050, 'Y'),
(52, 15, 11, 27, 40, '2018-11-01 11:17:34', 1, 80, 3200, 'Y'),
(53, 15, 12, 30, 15, '2018-11-01 11:17:58', 1, 60, 900, 'Y'),
(54, 15, 13, 33, 30, '2018-11-08 11:18:16', 1, 80, 2400, 'Y'),
(55, 15, 14, 34, 15, '2018-11-15 11:18:30', 1, 60, 900, 'Y'),
(56, 15, 16, 35, 30, '2018-11-22 11:18:43', 1, 90, 2700, 'Y'),
(57, 12, 10, 28, 30, '2018-11-29 11:19:11', 1, 70, 2100, 'Y'),
(58, 12, 11, 29, 400, '2018-06-06 11:19:36', 1, 80, 32000, 'Y'),
(59, 12, 12, 31, 100, '2018-06-20 11:19:51', 1, 90, 9000, 'Y'),
(60, 12, 13, 32, 300, '2019-01-02 11:20:04', 1, 120, 36000, 'Y'),
(61, 12, 14, 36, 40, '2019-03-13 11:20:20', 1, 150, 6000, 'Y'),
(62, 12, 16, 37, 40, '2019-03-13 11:20:36', 1, 200, 8000, 'Y'),
(63, 12, 16, 38, 100, '2018-10-17 11:21:00', 1, 175, 17500, 'Y'),
(66, 12, 13, 24, 32, '2019-01-30 11:14:16', 1, 10, 320, 'Y'),
(69, 12, 10, 25, 42, '2019-02-12 11:27:25', 1, 30, 1260, 'Y'),
(70, 12, 10, 25, 42, '2019-04-07 12:02:43', 1, 10, 420, 'Y'),
(75, 12, 10, 25, 42, '2019-04-07 20:40:11', 1, 10, 420, 'Y'),
(78, 15, 10, 29, 320, '2019-04-12 11:21:03', 1, 20, 6400, 'Y'),
(79, 12, 10, 31, 220, '2019-04-14 18:49:13', 1, 20, 4400, 'Y'),
(80, 12, 10, 25, 40, '2019-04-15 17:26:36', 1, 10, 400, 'Y'),
(81, 12, 10, 25, 40, '2019-04-16 11:07:13', 1, 45, 1800, 'Y'),
(82, 12, 10, 25, 40, '2019-04-16 11:42:42', 1, 10, 400, 'Y'),
(83, 12, 10, 25, 40, '2019-04-16 13:35:22', 1, 10, 400, 'Y'),
(101, 12, 13, 24, 33, '2019-04-18 12:22:52', 1, 10, 330, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subsidy`
--

DROP TABLE IF EXISTS `tbl_subsidy`;
CREATE TABLE IF NOT EXISTS `tbl_subsidy` (
  `SubsidyId` int(12) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(12) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Image` text,
  `Address` varchar(500) NOT NULL,
  `Contact` bigint(50) NOT NULL,
  `ApplicationLink` text,
  `SubsidyDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`SubsidyId`),
  KEY `FK_SCatId` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subsidy`
--

INSERT INTO `tbl_subsidy` (`SubsidyId`, `CategoryId`, `Title`, `Description`, `Image`, `Address`, `Contact`, `ApplicationLink`, `SubsidyDateTime`) VALUES
(1, 57, 'Assumption of risk', 'The government has increased subsidy amount for LPG used for cooking gas by 60% in the last two months to keep in line with the rising international LPG prices. Under the scheme introduced by the government, 12 subsidised cylinders of 14.2 kg each is distributed to each household.', '20759_47_.jpg', ' Business Development Directorate\r\n   Dak Bhavan\r\n   Parliament Street\r\n   NEW DELHI 110001\r\n   INDIA', 7923252594, 'https://ic.gujarat.gov.in/assistance-of-capital-investment-subsidy.aspx', '2019-04-10 10:18:15'),
(5, 57, 'Tax concessions', 'A subsidy is a benefit given to an individual, business or institution, usually by the government. ... The subsidy is typically given to remove some type of burden, and it is often considered to be in the overall interest of the public, given to promote a social good or an economic policy.', '18663_30_.jpg', 'Block No. 1, 4th Floor, Udyog Bhavan, Sector 11, Gandhinagar-382 017', 7923252594, 'https://ic.gujarat.gov.in/assistance-of-capital-investment-subsidy.aspx', '2019-04-07 10:18:15'),
(9, 57, 'Emerging Challenges for', 'Based on the combined family income and activity, the family is entitled to a subsidy of 85% of the child care fee for a maximum of 36 hours per fortnight. The couple will be eligible for a subsidy of $170 a fortnight.', '24866_1_.jpg', '445 Mount Eden Road, Mount Eden, Auckland. ', 7923252594, 'https://ic.gujarat.gov.in/assistance-of-capital-investment-subsidy.aspx', '2019-04-01 10:18:15'),
(10, 57, 'Cash subsidies', 'A subsidy is an amount of money given directly to firms by the government to encourage production and consumption. A unit subsidy is a specific sum per unit produced which is given to the producer. The effect of a specific per unit subsidy is to shift the supply curve vertically downwards by the amount of the subsidy.', '49121_3_.jpg', 'Steel Authority of India Ltd.\r\n   Ispat Bhavan\r\n   Lodhi Road\r\n   NEW DELHI \r\n   110003\r\n   INDIA', 7923252594, 'https://ic.gujarat.gov.in/assistance-of-capital-investment-subsidy.aspx', '2019-04-07 10:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_withdraw_req`
--

DROP TABLE IF EXISTS `tbl_withdraw_req`;
CREATE TABLE IF NOT EXISTS `tbl_withdraw_req` (
  `RequestId` int(12) NOT NULL AUTO_INCREMENT,
  `FarmerId` int(12) NOT NULL,
  `Amount` bigint(50) NOT NULL,
  `RequestedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Remark` text NOT NULL,
  `Status` varchar(1) NOT NULL,
  PRIMARY KEY (`RequestId`),
  KEY `FK_FarmertId3` (`FarmerId`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_withdraw_req`
--

INSERT INTO `tbl_withdraw_req` (`RequestId`, `FarmerId`, `Amount`, `RequestedDateTime`, `Remark`, `Status`) VALUES
(1, 10, 500, '2019-01-10 12:22:00', 'for food', 'Y'),
(2, 12, 1000, '2019-01-17 12:22:19', 'for fun', 'Y'),
(4, 13, 5000, '2019-01-30 12:22:00', 'for emergency', 'Y'),
(5, 16, 1000, '2019-02-01 12:22:19', 'for fun', 'N'),
(6, 11, 2500, '2019-02-06 12:22:46', 'for tuition fees', 'Y'),
(8, 12, 1000, '2019-02-15 12:22:19', 'for fun', 'Y'),
(9, 10, 700, '2019-02-20 12:22:46', 'for bank FD', 'Y'),
(11, 16, 1000, '2019-03-08 12:22:19', 'for fun', 'N'),
(12, 11, 2500, '2019-03-28 12:22:46', 'for tuition fees', 'Y'),
(13, 10, 100, '2019-04-06 19:37:16', 'asdasdsadasd', ''),
(14, 10, 500, '2019-04-07 20:34:51', 'dsadsadasd', 'Y'),
(15, 10, 200, '2019-04-08 11:38:25', 'Urgent!!', 'Y'),
(18, 11, 1000, '2019-04-12 11:12:15', 'for laptop', 'Y'),
(19, 10, 2000, '2019-04-14 18:55:36', 'for game', 'Y'),
(20, 10, 500, '2019-04-15 13:45:16', 'sdasdas', 'Y'),
(21, 10, 1000, '2019-04-15 13:50:43', 'for game', 'Y'),
(22, 10, 500, '2019-04-15 17:42:51', 'Emergency', 'Y'),
(23, 10, 500, '2019-04-18 12:35:36', 'urgent', 'Y');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD CONSTRAINT `FK_AnsExpertId` FOREIGN KEY (`ExpertId`) REFERENCES `tbl_expert` (`ExpertId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Question` FOREIGN KEY (`QuestionId`) REFERENCES `tbl_question` (`QuestionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_comment_reply`
--
ALTER TABLE `tbl_comment_reply`
  ADD CONSTRAINT `FK_ArticleId` FOREIGN KEY (`ArticleId`) REFERENCES `tbl_article` (`ArticleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_FarmerId` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_expert`
--
ALTER TABLE `tbl_expert`
  ADD CONSTRAINT `FK_CategoryType` FOREIGN KEY (`CategoryId`) REFERENCES `tbl_category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD CONSTRAINT `FK_FAQcatId` FOREIGN KEY (`FAQCatId`) REFERENCES `tbl_faq_category` (`FAQCatId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_final_payment`
--
ALTER TABLE `tbl_final_payment`
  ADD CONSTRAINT `FK_RequestId` FOREIGN KEY (`RequestId`) REFERENCES `tbl_withdraw_req` (`RequestId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD CONSTRAINT `FK_AnswerId` FOREIGN KEY (`ArticleId`) REFERENCES `tbl_article` (`ArticleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LikeFarmerId` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `FK_CategoryId` FOREIGN KEY (`CategoryId`) REFERENCES `tbl_category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product_price_date`
--
ALTER TABLE `tbl_product_price_date`
  ADD CONSTRAINT `FK_ProductId` FOREIGN KEY (`ProductId`) REFERENCES `tbl_product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD CONSTRAINT `FK_QueCategoryId` FOREIGN KEY (`CategoryId`) REFERENCES `tbl_category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_QueFarmerId` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD CONSTRAINT `FK_RatingAnswerId` FOREIGN KEY (`ArticleId`) REFERENCES `tbl_article` (`ArticleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RatingFarmerId` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD CONSTRAINT `tbl_seller_ibfk_1` FOREIGN KEY (`AgencyId`) REFERENCES `tbl_agency` (`AgencyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_seller_ibfk_2` FOREIGN KEY (`BuyerId`) REFERENCES `tbl_buyer` (`BuyerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_seller_ibfk_3` FOREIGN KEY (`ProductId`) REFERENCES `tbl_product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_storage`
--
ALTER TABLE `tbl_storage`
  ADD CONSTRAINT `FK_AgencyId` FOREIGN KEY (`AgencyId`) REFERENCES `tbl_agency` (`AgencyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_FarmertId` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductId1` FOREIGN KEY (`ProductId`) REFERENCES `tbl_product` (`ProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_subsidy`
--
ALTER TABLE `tbl_subsidy`
  ADD CONSTRAINT `FK_SCatId` FOREIGN KEY (`CategoryId`) REFERENCES `tbl_category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_withdraw_req`
--
ALTER TABLE `tbl_withdraw_req`
  ADD CONSTRAINT `FK_FarmertId3` FOREIGN KEY (`FarmerId`) REFERENCES `tbl_farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
