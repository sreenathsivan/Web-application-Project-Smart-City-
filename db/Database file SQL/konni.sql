-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2019 at 12:39 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `konni`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE IF NOT EXISTS `atm` (
  `atm_id` int(10) NOT NULL AUTO_INCREMENT,
  `place` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  PRIMARY KEY (`atm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`atm_id`, `place`, `landmark`) VALUES
(2, 'Konni', 'Near Bustatnd'),
(3, 'near Elephant cage', 'near Elephant cage'),
(4, 'Konni', 'near Bustand');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `fromplace` varchar(30) NOT NULL,
  `toplace` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`b_id`, `name`, `time`, `fromplace`, `toplace`) VALUES
(16, 'Venad', '06:30', 'Pathanamthitta', 'Punalur'),
(17, 'Venad', '06:00', 'Pathanamthitta', 'Punalur'),
(18, 'Blue Hill', '08:00', 'Pathanamthitta', 'Advi Eco Touris'),
(19, 'Blue Hill', '09:00', 'Pathanamthitta ', 'Thekkuthodu'),
(20, 'Blue Hill', '08:00', 'Thekkuthodu', 'Pathanamthitta'),
(21, 'Murahara', '08:00', 'Pathanamthitta', 'Konni'),
(22, 'Azmin', '08:00', 'Pathanamthitta ', 'Konni'),
(23, 'KSRTC', '15:00', 'Pathanamthitta ', 'Konni'),
(24, 'KSRTC', '17:07', 'Pathanamthitta ', 'Konni');

-- --------------------------------------------------------

--
-- Table structure for table `carbook`
--

CREATE TABLE IF NOT EXISTS `carbook` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `car_id` int(10) NOT NULL,
  `dr_id` int(10) NOT NULL,
  `frm` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `endtime` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `pass` int(5) NOT NULL,
  `trip` varchar(30) NOT NULL,
  `wt` int(5) NOT NULL,
  `amt` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `carbook`
--

INSERT INTO `carbook` (`book_id`, `uid`, `car_id`, `dr_id`, `frm`, `des`, `date`, `time`, `endtime`, `phno`, `pass`, `trip`, `wt`, `amt`, `status`) VALUES
(51, 42, 32, 12, 'Konni', 'Achankovil', '2019-12-21', '07:00', '11:00', '8137009438', 4, 'twoway', 4, '6000', 'pending'),
(52, 26, 29, 10, 'Konni', 'Advi Eco Tourism', '2019-12-21', '01:00', '05:00', '094461 13564', 4, 'oneway', 4, '1800', 'available'),
(53, 26, 33, 12, 'Konni', 'Manneera Waterfalls', '2019-12-21', '05:00', '09:00', '09446113564', 4, 'oneway', 4, '2500', 'paid'),
(54, 43, 31, 11, 'Konni', 'pathanamthitta', '2019-12-21', '05:00', '10:00', '9856674856', 4, 'twoway', 5, '560', 'paid'),
(55, 42, 29, 10, 'Konni', 'Kumbhavuruthy', '2019-12-21', '10:00', '15:00', '8137009438', 4, 'oneway', 5, '4500', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `name` varchar(15) NOT NULL,
  `img` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `max_pass` int(5) NOT NULL,
  `min` int(5) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `uid`, `cno`, `name`, `img`, `type`, `phno`, `max_pass`, `min`) VALUES
(29, 10, 'KL-03-AF 2255', 'driver', 'c_h_1.jpg', 'Toyato Prado', '9876787654', 5, 100),
(31, 11, 'KL-07-5634', 'Amal', 'Best-budget-cars-for-Indian-families.jpg', 'Alto', '9876787654', 4, 70),
(32, 12, 'KL-03-AC 2255', 'KA', 'toyota-land-cruiser.jpg', 'Land Cruizer', '9856674856', 5, 120),
(33, 12, 'KL-03-AD 2255', 'KA', 'toyota-fortuner.jpg', 'Toyato Fortuner', '9856674856', 5, 100),
(34, 11, 'KL-04-AA 1554 ', 'Amal', 'kmwmTCefjibsi.jpg', 'Scorpio', '094461 13564', 5, 80),
(35, 11, 'KL-07-5684', 'Amal', 'download (2).jpg', 'Alto', '9856674856', 4, 70);

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE IF NOT EXISTS `distance` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `frm` varchar(10) NOT NULL,
  `des` varchar(30) NOT NULL,
  `km` int(10) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`d_id`, `frm`, `des`, `km`) VALUES
(3, 'konni', 'stand', 1),
(4, 'konni', 'Elephant Cage', 3),
(5, 'konni', 'Manneera Waterfalls', 25),
(6, 'konni', 'Advi Eco Tourism', 18),
(7, 'konni', 'pathanamthitta', 8),
(8, 'konni', 'punalur', 25),
(9, 'konni', 'adoor', 30),
(10, 'konni', 'Achankovil', 50),
(11, 'konni', 'Sabarimala', 72),
(12, 'konni', 'pandalam', 32),
(14, 'konni', 'kattathipara', 20),
(15, 'konni', 'Kumbhavuruthy', 45),
(16, 'konni', 'Achankovil', 54);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `dvid` int(10) NOT NULL AUTO_INCREMENT,
  `dname` varchar(30) NOT NULL,
  `place` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` bigint(12) NOT NULL,
  `licno` varchar(10) NOT NULL,
  `oname` varchar(30) NOT NULL,
  PRIMARY KEY (`dvid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dvid`, `dname`, `place`, `email`, `phno`, `licno`, `oname`) VALUES
(10, 'Driver', 'Konni', 'driver@gmail.com', 9876787654, 'KLteK00032', 'Driver'),
(11, 'Amal', 'Konni', 'amal@gmail.com', 9856674856, 'KLteK00032', 'Amal'),
(12, 'KA', 'Konni', 'email@gmail.com', 9876787654, 'KL-5ttyetw', 'KA');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `edu_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `website` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`edu_id`, `type`, `name`, `address`, `email`, `phno`, `website`, `img`) VALUES
(4, 'school', 'G H S S Konni', 'G H S S Konni,Pathanmathitta', 'ghsskonni@gmail', '046824351787', 'www.ghsskonni.com', 'download.jpg'),
(7, 'college', 'SAS SNDP Yogam College Konni', 'Sahodragiri, Cherimukku, Konni Post, Pathanamthitta', 'sassndpyogamcol', '0468224490', 'sascollegekonni.in', '5e275de2019cb9f4ce9bed5bbe99a330.jpg'),
(9, 'tution', 'Viswabharathy Arts College', 'Mangaram,Pathanamthitta Dist, Konni, Kerala', 'viswabharathy@gmail.com', '09446113564', 'www.viswabarathy.in', '3.jpg'),
(10, 'college', 'Mannam Memorial N SS College', 'Pathanamthitta, Moovattupuzha State Highway, Konni', 'mmnsscollege@gmail.com', '0468224007', 'https://mmnsscollehe.in', '1487327563mflksdm.cx.jpg'),
(11, 'school', 'Republican Vocational Higher Secondary School', 'SH 8,PATHANAMTHITTA Dist,, Konni,', 'republican@gmail.com', '0468224210', 'www.republican.in', 'hqdefault.jpg'),
(12, 'school', 'PSVPM Higher Secondary School', 'Ayravon, Kerala 689691', 'psvpmhss123@gmaail.com', '0468224245', 'www.psvpmhss.in', 'download.jpg'),
(13, 'school', 'SN Public Public School', 'Sree Narayana Public school and junior college .Vellappara, Chandanappalli - Konni Rd, near Elephant Training Center, Konni, Kerala 689691', 'snpublicschoolkonni@gmail.com', '0468234296', 'www.snpsjckonni.com', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `e_id` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `aadar` int(12) NOT NULL,
  `event_from` date NOT NULL,
  `event_to` int(11) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `amt` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `vid`, `name`, `email`, `phno`, `aadar`, `event_from`, `event_to`, `subject`, `img`, `video`, `type`, `amt`, `status`) VALUES
(44, 26, 'Konni Fest', 'email@gmail.com', '9876787654', 2147483647, '2019-11-27', 5, 'Konni Fest\r\nDec 1 -Dec 5', 'Participation-in-Konni-Fest.jpg', '', 'imagetext', '10000', 'paid'),
(45, 26, 'Konni Fest', 'email@gmail.com', '9876787654', 2147483647, '2019-11-27', 5, '', '845aee1fb46d21458b3e98d7fe538379-rimg-w720-h576-gm', '', 'image', '7500', 'paid'),
(46, 26, 'DJ Night', 'email@gmail.com', '9876787654', 2147483647, '2019-11-27', 5, 'Dj Night \r\n@Nov 30\r\n8:00 pm\r\n', 'dj.jpg', '', 'imagetext', '10000', 'paid'),
(47, 26, 'SIM Music Festival', 'email@gmail.com', '9876787654', 2147483647, '2019-11-27', 5, '', '', 'Dj remix 30 sec whatsapp status.mp4', 'video', '12500', 'pending'),
(48, 26, 'name', 'anuj.lpu1@gmail', '9876787654', 2147483647, '2019-11-28', 5, '', '', 'dj 1.mp4', 'video', '12500', 'pending'),
(49, 26, 'DJ', 'anuj.lpu1@gmail', '9876787654', 2147483647, '2019-11-27', 5, '', '', 'sim_music_festival_advertisement_Y6YyBV-10Gk_360p.mp4', 'video', '12500', 'pending'),
(50, 26, 'SIM Music Festival', 'email@gmail.com', '9876787654', 2147483647, '2019-11-27', 5, '', '', 'videoplayback (1).mp4', 'video', '12500', 'paid'),
(51, 26, 'DJ', 'email@gmail.com', '9876787654', 2147483647, '2019-11-26', 5, 'uytfgvhjkmn ', '', '', 'text', '6000', 'paid'),
(52, 26, 'Music Fest ', 'email@gmail.com', '9876787654', 2147483647, '2019-12-21', 5, '', '', 'videoplaybackmmmm.mp4', 'video', '12500', 'paid'),
(55, 40, 'DJ', 'sreenathsivan444@gmail.com', '8137009438', 2147483647, '2019-12-21', 5, '', 'djsree.jpg', '', 'image', '7500', 'paid'),
(56, 42, 'SIM Music Festival', 'sreenathsivan444@gmail.com', '8137009438', 2147483647, '2019-12-23', 5, 'X-Mas Celebration,', 'christmas-celebration-Thumb.jpg', '', 'imagetext', '10000', 'approved'),
(57, 43, 'FEST', 'email@gmail.com', '9856674856', 2147483647, '2019-12-20', 5, '', '2be15ddc793a0d624e4fb4dc51d69682.jpg', '', 'image', '7500', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `e_id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`e_id`, `category`, `amount`) VALUES
(4, 'Image', 1500),
(5, 'text', 1200),
(6, 'imagetext', 2000),
(7, 'video', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `website` varchar(40) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `name`, `address`, `email`, `phno`, `website`, `img`) VALUES
(6, 'Govt Hospital Konni', 'Govt Hospital,Konni. Konni, Kerala 689691', 'govthospitalkonni@gmail.com', '04682243469', 'www.gvnthospitalkonni.in', 'image.jpg'),
(7, 'Belivers Church Hospital', 'Konni, Pathanamthitta - 689691', 'email@gmail.com', '9876787654', 'http://www.believerschurch.com/hospitals', 'hospital.jpg'),
(8, 'Tvm Hospital Chinamukh', 'Tvm Hospital Chinamukh ,Konni', 'tvmhospitalkonni@gmail.com', '09446113564', 'www.tvmhospitalkonni.com', 'governmenthospital-L.jpg'),
(9, 'Pankajakasthuri Ayurveda Hospi', 'Pankajakasthuri Ayurveda Hospital Panchakarma Center,Konni', 'pankajakasthurihskonni@gmail.c', '9856674856', 'www.pankajakasthurihskonni.in', 'download (1).jpg'),
(10, 'Government Medical College Kon', 'Pathanamthitta, Kerala 689691', 'konnimedicalcollege@gmail.com', '9856674856', 'www.konnimedicalcollege.in', '48659437911_dc16cefd86_b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `hotel_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `website` varchar(40) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `name`, `address`, `email`, `phno`, `website`, `descr`, `img`) VALUES
(6, 'Greenland', 'Green land,k', 'gld@gmail.com', '66863596676', 'www.gld.com', 'very good', 'h1.jpg'),
(7, 'Zimla', 'Zimla Konni', 'qwertyuio@gmail.com', '9876543142', 'www.hzimla.com', 'Good', 'HOTEL-ROYAL-MADELEINE-Restaurant-Royal-1.jpg'),
(10, 'KUTTIES RESIDENCY', 'Market Junction, Konni, Kerala 689691', 'kutties@gamil.com', '09446113564', 'www.kuttieskonni.in', 'Choose the Best Rooms & Make Reservation. Kutties Residency provides you the best in class rooms. Ex', 'kutties-residency.jpg'),
(12, 'Hotel Wyte Portico', 'Hotel Wyte Portico', 'wyteportico@gmail.com', '9876787654', 'wyteportico@gmail.com', 'Hotel Wyte Portico', '184305239.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(10) NOT NULL,
  `cpass` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `utype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `upass`, `cpass`, `email`, `utype`) VALUES
(0, 'admin', 'admin', 'admin', '', 'admin'),
(24, 'name', 'name', 'name', 'name@gmail.com', 'user'),
(26, 'abc', 'abc', 'abc', 'abc@gmail.com', 'user'),
(42, 'sree', 'sree', 'sree', 'sreenathsivan444@gmail.com', 'user'),
(10, 'driver', 'driver', 'driver', 'driver@gmail.com', 'driver'),
(11, 'amal', 'amal', 'amal', 'amal@gmail.com', 'driver'),
(43, 'user', 'user', 'user', 'email@gmail.com', 'user'),
(12, 'drr', 'drr', 'drr', 'email@gmail.com', 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `n_id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(500) NOT NULL,
  `place` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(15) NOT NULL,
  `news` varchar(1000) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `head`, `place`, `date`, `time`, `news`, `img`) VALUES
(1, 'Heading', 'Konni', '2019-11-27', '01:00', 'Conference', 'Conference.jpg'),
(2, 'Konni medical college will be ready by 2021', 'Konni', '2019-12-21', '09:00', 'Health minister K K Shailaja has informed the assembly that the work for the first phase of Konni Medical College Hospital is nearing completion and the government is aiming to begin MBBS course by 2021', '48659437911_dc16cefd86_b.jpg'),
(4, 'à´ªà´¤àµà´¤à´¨à´‚à´¤à´¿à´Ÿàµà´Ÿà´¯à´¿àµ½ KUWJ à´¯àµà´Ÿàµ† à´¨àµ‡à´¤àµƒà´¤àµà´µà´¤àµà´¤à´¿àµ½ à´®à´¾à´§àµà´¯à´® à´ªàµà´°à´µàµ¼à´¤àµà´¤à´•àµ¼ à´ªàµà´°à´•à´Ÿà´¨à´‚ à´¨à´Ÿà´¤àµà´¤à´¿', 'Pathanamthitta', '2019-12-21', '10:00', 'à´•àµ¼à´£à´¾à´Ÿà´•à´¯à´¿àµ½ à´®à´¾à´§àµà´¯à´® à´ªàµà´°à´µàµ¼à´¤àµà´¤à´•à´°àµ† à´•à´¸àµà´±àµà´±à´¡à´¿à´¯à´¿à´²àµ†à´Ÿàµà´¤àµà´¤à´¤à´¿àµ½ à´ªàµà´°à´¤à´¿à´·àµ‡à´§à´¿à´šàµà´šàµ à´ªà´¤àµà´¤à´¨à´‚à´¤à´¿à´Ÿàµà´Ÿà´¯à´¿àµ½ KUWJ à´¯àµà´Ÿàµ† à´¨àµ‡à´¤àµƒà´¤àµà´µà´¤àµà´¤à´¿àµ½ à´®à´¾à´§àµà´¯à´® à´ªàµà´°à´µàµ¼à´¤àµà´¤à´•àµ¼ à´ªàµà´°à´•à´Ÿà´¨à´‚ à´¨à´Ÿà´¤àµà´¤à´¿ !!!', 'Capture.JPG'),
(5, 'à´¸à´¨àµà´¨à´¿à´§à´¾à´¨à´¤àµà´¤à´¿à´¨àµà´±àµ† à´¸àµà´°à´•àµà´·à´¯àµà´•àµà´•àµ à´…à´¤àµà´¯à´¨àµà´¤à´¾à´§àµà´¨à´¿à´• à´¸à´‚à´µà´¿à´§à´¾à´¨à´™àµà´™à´³àµ', 'Sabarimala', '2019-12-21', '10:00', 'à´¸à´¨àµà´¨à´¿à´§à´¾à´¨à´¤àµà´¤à´¿à´¨àµà´±àµ† à´¸àµà´°à´•àµà´·à´¯àµà´•àµà´•àµ à´…à´¤àµà´¯à´¨àµà´¤à´¾à´§àµà´¨à´¿à´• à´¸à´‚à´µà´¿à´§à´¾à´¨à´™àµà´™à´³àµ', 'sa.JPG'),
(6, 'à´¨à´¾à´²à´¾à´®à´¤àµ à´•àµ‹à´¨àµà´¨à´¿ à´«àµ†à´¸àµà´±àµà´±à´¿àµ½ à´¸àµà´•àµ‚àµ¾ à´•àµ‹à´³àµ‡à´œàµ à´µà´¿à´¦àµà´¯à´¾àµ¼à´¤àµà´¥à´¿à´•àµ¾à´•àµà´•à´¾à´¯à´¿ à´µà´¿à´µà´¿à´§ à´®à´¤àµà´¸à´°à´™àµà´™àµ¾ à´¸à´‚à´˜à´Ÿà´¿à´ªàµà´ªà´¿à´•àµà´•àµà´¨àµà´¨àµ', 'Konni', '2019-12-21', '10:00', 'à´¨à´¾à´²à´¾à´®à´¤àµ à´•àµ‹à´¨àµà´¨à´¿ à´«àµ†à´¸àµà´±àµà´±à´¿àµ½ à´¸àµà´•àµ‚àµ¾ à´•àµ‹à´³àµ‡à´œàµ à´µà´¿à´¦àµà´¯à´¾àµ¼à´¤àµà´¥à´¿à´•àµ¾à´•àµà´•à´¾à´¯à´¿ à´µà´¿à´µà´¿à´§ à´®à´¤àµà´¸à´°à´™àµà´™àµ¾ à´¸à´‚à´˜à´Ÿà´¿à´ªàµà´ªà´¿à´•àµà´•àµà´¨àµà´¨àµ', 'kf.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `date` date NOT NULL,
  `cnum` bigint(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `ctype` varchar(15) NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `vid`, `eid`, `date`, `cnum`, `cvv`, `ctype`, `edate`) VALUES
(20, 26, 11, '2019-11-15', 78234897824, 345, 'Visa', '2019-11-15'),
(21, 26, 12, '2019-11-15', 78234897824, 98765, 'Visa', '2019-11-16'),
(22, 26, 14, '2019-11-15', 98765, 787394, 'Visa', '2019-11-16'),
(23, 26, 40, '2019-11-15', 78234897824, 878, 'Visa', '2019-11-15'),
(24, 26, 35, '2019-11-15', 78234897824, 789, 'Visa', '2019-11-22'),
(25, 26, 33, '2019-11-15', 78234897824, 787394, 'Visa', '2019-11-21'),
(38, 42, 56, '2019-12-20', 3456789045678, 675, 'Visa', '2019-12-21'),
(39, 26, 53, '2019-12-21', 98765, 87, 'Visa', '2019-12-25'),
(40, 43, 54, '2019-12-21', 987656789, 876, 'Visa', '2019-12-27'),
(41, 42, 55, '2019-12-21', 98765, 7557, 'Visa', '2019-12-27'),
(42, 43, 57, '2019-12-21', 876548765987, 879, 'Visa', '2019-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `place` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(12) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `name`, `place`, `email`, `phno`) VALUES
(24, 'name', 'sd', 'email@gmail.com', '88888'),
(25, 'name', 'sd', 'email@gmail.com', '88888'),
(26, 'abc', 'abc', 'abc@gmail.com', '888885555555'),
(42, 'Sreenath Sivan', 'Vettoor', 'sreenathsivan444@gmail.com', '8137009438'),
(43, 'user', 'konni', 'email@gmail.com', '8967567856');

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE IF NOT EXISTS `tourism` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(15) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `img` varchar(50) NOT NULL,
  `dist` int(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`t_id`, `name`, `location`, `descr`, `img`, `dist`) VALUES
(9, 'Elephant Cage', 'Konni', 'Konni is among the most prominent elephant training centres in Kerala. Located in Pathanamthitta district, it attracts visitors in large numbers throughout the year. One of the major attractions here are the giant wooden cages used to house the elephants. Locally known as Aanakoodu, they can house up to 3 to 4 elephants at a time.', 'b7.jpg', 1),
(10, 'Advi Eco Tourism', 'Konni', 'Its an amazing place which shows the beauty of the wild. Amazing kotta vanchi savari through the thick wild forest.  Kutta vanchi savari available here is of two types. During summer season when the water is low, it will be a half an hour program where they will move the kotta vanchi through the small stream of water in between the thick woods.  Second one is during the rainy season and its a one hour program where the savari will be done through a stream moving down side and it will be little bit like rafting to some extent.  In my opinion Its a best place to enjoy a cool morning or a chilly evening.  The rate for the savari is from 500 to 1000 depends up on the 1st type or second type of safari. The rate is for one boat itself which means for 4 people or for less than that we have.', 'b2.jpg', 18),
(13, 'Manneera Waterfalls', 'Thekkuthodu', 'There is a small waterfalls about 2km from Advi Narrow approach road and not so smooth road. Mannira waterfalls is snugly hidden in forest and beautiful too.', 'CkVaKNKYYsfqf2HcYjU3.jpg', 25),
(16, 'kattathipara', 'Kokkathodu', 'Kattathipara in Kokkathodu is a nearby tourist destination located a few kilometres away from Konni. Kattathipara is particularly attractive with its gigantic rocks and the triple-echo phenomenon.', 'gaur-barnawapara-wild-life-4.jpg', 20),
(17, 'Kumbhavuruthy', 'Kumbhavuruthy', 'Kumbhavuruthy is a waterfall amidst thick forest', 'kumbhavurutty-waterfalls.jpg', 45),
(18, 'Achankovil', 'Achankovil', 'Achankovil - ManalarKumbhavurutty. Evergreen forests and Temple of Lord Ayyappa. 104 Km from Thiruvananthapuram 30 Km from Schenkotta', 'maxresdefault (1).jpg', 54);
