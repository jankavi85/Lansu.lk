-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 08:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `district` varchar(30) NOT NULL,
  `popular_area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`district`, `popular_area`) VALUES
('Anuradhapura', 'Anuradhapura'),
('Anuradhapura', 'Eppawala'),
('Anuradhapura', 'Galenbindunuwewa'),
('Anuradhapura', 'Galnewa'),
('Anuradhapura', 'Habarana'),
('Anuradhapura', 'Kekirawa'),
('Anuradhapura', 'Medawachchiya'),
('Anuradhapura', 'Mihintale'),
('Anuradhapura', 'Nochchiyagama'),
('Anuradhapura', 'Tambuttegama'),
('Anuradhapura', 'Talawa'),
('Badulla', 'Badulla'),
('Badulla', 'Bandarawela'),
('Badulla', 'Ella'),
('Badulla', 'Hali Ela'),
('Badulla', 'Haputale'),
('Badulla', 'Mahiyanganaya'),
('Badulla', 'Passara'),
('Badulla', 'Welimada'),
('Batticaloa', 'Batticaloa'),
('Colombo', 'Angoda'),
('Colombo', 'Athurugiriya'),
('Colombo', 'Avissawella'),
('Colombo', 'Battaramulla'),
('Colombo', 'Boralesgamuwa'),
('Colombo', 'Colombo 1'),
('Colombo', 'Colombo 2'),
('Colombo', 'Colombo 3'),
('Colombo', 'Colombo 4'),
('Colombo', 'Colombo 5'),
('Colombo', 'Colombo 6'),
('Colombo', 'Colombo 7'),
('Colombo', 'Colombo 8'),
('Colombo', 'Colombo 9'),
('Colombo', 'Colombo 10'),
('Colombo', 'Colombo 11'),
('Colombo', 'Colombo 12'),
('Colombo', 'Colombo 13'),
('Colombo', 'Colombo 14'),
('Colombo', 'Colombo 15'),
('Colombo', 'Dehiwala'),
('Colombo', 'Hanwella'),
('Colombo', 'Homagama'),
('Colombo', 'Kaduwela'),
('Colombo', 'Kesbewa'),
('Colombo', 'Kohuwala'),
('Colombo', 'Kolonnawa'),
('Colombo', 'Kottawa'),
('Colombo', 'Kotte'),
('Colombo', 'Malabe'),
('Colombo', 'Maharagama'),
('Colombo', 'Moratuwa'),
('Colombo', 'Mount Lavinia'),
('Colombo', 'Nawala'),
('Colombo', 'Nugegoda'),
('Colombo', 'Padukka'),
('Colombo', 'Pannipitiya'),
('Colombo', 'Piliyandala'),
('Colombo', 'Rajagiriya'),
('Colombo', 'Ratmalana'),
('Colombo', 'Talawatugoda'),
('Colombo', 'Wellampitiya'),
('Galle', 'Galle'),
('Galle', 'Ahangama'),
('Galle', 'Ambalangoda'),
('Galle', 'Baddegama'),
('Galle', 'Batapola'),
('Galle', 'Bentota'),
('Galle', 'Elpitiya'),
('Galle', 'Hikkaduwa'),
('Galle', 'Karapitiya'),
('Gampaha', 'Gampaha'),
('Gampaha', 'Delgoda'),
('Gampaha', 'Divulapitiya'),
('Gampaha', 'Ganemulla'),
('Gampaha', 'Ganemulla'),
('Gampaha', 'Ja-Ela'),
('Gampaha', 'Kadawatha'),
('Gampaha', 'Kandana'),
('Gampaha', 'Katunayake'),
('Gampaha', 'Kelaniya'),
('Gampaha', 'Kiribathgoda'),
('Gampaha', 'Minuwangoda'),
('Gampaha', 'Mirigama'),
('Gampaha', 'Negombo'),
('Gampaha', 'Nittambuwa'),
('Gampaha', 'Ragama'),
('Gampaha', 'Veyangoda'),
('Gampaha', 'Wattala'),
('Hambantota', 'Tangalla'),
('Hambantota', 'Ambalantota'),
('Hambantota', 'Beliatta'),
('Hambantota', 'Hambantota'),
('Hambantota', 'Tissamaharama'),
('Jaffna', 'Jaffna'),
('Jaffna', 'Chavakachcheri'),
('Jaffna', 'Nallur'),
('Kalutara', 'Kalutara'),
('Kalutara', 'Alutgama'),
('Kalutara', 'Bandaragama'),
('Kalutara', 'Beruwala'),
('Kalutara', 'Horana'),
('Kalutara', 'Ingiriya'),
('Kalutara', 'Matugama'),
('Kalutara', 'Panadura'),
('Kalutara', 'Wadduwa'),
('Kandy', 'Kandy'),
('Kandy', 'Akurana'),
('Kandy', 'Ampitiya'),
('Kandy', 'Digana'),
('Kandy', 'Galagedara'),
('Kandy', 'Gampola'),
('Kandy', 'Gelioya'),
('Kandy', 'Kadugannawa'),
('Kandy', 'Katugastota'),
('Kandy', 'Kundasale'),
('Kandy', 'Madawala Bazaar'),
('Kandy', 'Nawalapitiya'),
('Kandy', 'Peradeniya'),
('Kandy', 'Pilimatalawa'),
('Kandy', 'Wattegama'),
('Kegalle', 'Kegalle'),
('Kegalle', 'Dehiowita'),
('Kegalle', 'Deraniyagala'),
('Kegalle', 'Galigamuwa'),
('Kegalle', 'Kitulgala'),
('Kegalle', 'Mawanella'),
('Kegalle', 'Rambukkana'),
('Kegalle', 'Ruwanwella'),
('Kegalle', 'Warakapola'),
('Kegalle', 'Yatiyantota'),
('Kilinochchi', 'Kilinochchi'),
('Kurunegala', 'Kurunegala'),
('Kurunegala', 'Alawwa'),
('Kurunegala', 'Bingiriya'),
('Kurunegala', 'Galgamuwa'),
('Kurunegala', 'Giriulla'),
('Kurunegala', 'Hettipola'),
('Kurunegala', 'Ibbagamuwa'),
('Kurunegala', 'Kuliyapitiya'),
('Kurunegala', 'Mawathagama'),
('Kurunegala', 'Narammala'),
('Kurunegala', 'Nikaweratiya'),
('Kurunegala', 'Pannala'),
('Kurunegala', 'Polgahawela'),
('Kurunegala', 'Wariyapola'),
('Mannar', 'Mannar'),
('Matale', 'Matale'),
('Matale', 'Dambulla'),
('Matale', 'Galewela'),
('Matale', 'Palapathwela'),
('Matale', 'Rattota'),
('Matale', 'Sigiriya'),
('Matale', 'Ukuwela'),
('Matale', 'Yatawatta'),
('Matara', 'Matara'),
('Matara', 'Akuressa'),
('Matara', 'Dikwella'),
('Matara', 'Deniyaya'),
('Matara', 'Hakmana'),
('Matara', 'Kamburugamuwa'),
('Matara', 'Kamburupitiya'),
('Matara', 'Kekanadurra'),
('Moneragala', 'Moneragala'),
('Moneragala', 'Buttala'),
('Moneragala', 'Bibile'),
('Moneragala', 'Kataragama'),
('Moneragala', 'Wellawaya'),
('Mullativu', 'Mullativu'),
('Nuwara Eliya', 'Nuwara Eliya'),
('Nuwara Eliya', 'Ginigathena'),
('Nuwara Eliya', 'Hatton'),
('Nuwara Eliya', 'Madulla'),
('Polonnaruwa', 'Polonnaruwa'),
('Polonnaruwa', 'Hingurakgoda'),
('Polonnaruwa', 'Kaduruwela'),
('Polonnaruwa', 'Medirigiriya'),
('Puttalama', 'Chilaw'),
('Puttalama', 'Wennappuwa'),
('Puttalama', 'Puttalama'),
('Puttalama', 'Marawila'),
('Puttalama', 'Dankotuwa'),
('Puttalama', 'Nattandiya'),
('Ratnapura', 'Ratnapura'),
('Ratnapura', 'Balangoda'),
('Ratnapura', 'Eheliyagoda'),
('Ratnapura', 'Embilipitiya'),
('Ratnapura', 'Kuruwita'),
('Ratnapura', 'Pelmadulla'),
('Trincomalee', 'Trincomalee'),
('Trincomalee', 'Kinniya'),
('Vavuniya', 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `biditem`
--

CREATE TABLE IF NOT EXISTS `biditem` (
  `biditem_id` int(64) NOT NULL AUTO_INCREMENT,
  `user_id` int(64) NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `district` varchar(25) NOT NULL,
  `district_area` varchar(25) NOT NULL,
  `conditionOn` varchar(10) NOT NULL,
  `item_avatar` varchar(200) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(15) NOT NULL,
  `delivery_option` varchar(15) NOT NULL,
  `closingtime` varchar(30) NOT NULL,
  `addingtime` varchar(18) NOT NULL,
  `item_accept` varchar(5) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`biditem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `biditem`
--

INSERT INTO `biditem` (`biditem_id`, `user_id`, `category`, `sub_category`, `district`, `district_area`, `conditionOn`, `item_avatar`, `title`, `description`, `price`, `delivery_option`, `closingtime`, `addingtime`, `item_accept`) VALUES
(1, 2, 'Electronics', 'Computer Accessories', 'Matale', 'Sigiriya', 'New', 'images/additem/bid/2/en.PNG', 'g', 'hhh', 700, 'meeting', '17 September 2016 - 03:50 pm', '2016-06-02 04:42:3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `sub_category`) VALUES
('HomeGarden', 'Furniture'),
('HomeGarden', 'Home Appliances'),
('HomeGarden', 'Electricity,AC,Bathroom & Gard'),
('HomeGarden', 'Other Home Items'),
('Electronics', 'Mobile Phones'),
('Electronics', 'Mobile Phone Accessories'),
('Electronics', 'Computers & Tablets'),
('Electronics', 'Computer Accessories'),
('Electronics', 'TVs'),
('Electronics', 'TV & Video Accessories'),
('Electronics', 'Cameras & Camcorders'),
('Electronics', 'Audio & MP3'),
('Electronics', 'Other Electronics'),
('CarsVehicles', 'Cars'),
('CarsVehicles', 'Motorbikes & Scooters'),
('CarsVehicles', 'Three Wheelers'),
('CarsVehicles', 'Push Cycles'),
('CarsVehicles', 'Vans & Buses'),
('CarsVehicles', 'Heavy-Duty Vehicles'),
('CarsVehicles', 'Auto Part & Accessories'),
('CarsVehicles', 'Boats & Water Transport'),
('FashionHealthBeauty', 'Clothing'),
('FashionHealthBeauty', 'Shoes & Footwear'),
('FashionHealthBeauty', 'Jewellery'),
('FashionHealthBeauty', 'Sunglasses'),
('FashionHealthBeauty', 'Watches'),
('FashionHealthBeauty', 'Other Fashion Accessories'),
('FashionHealthBeauty', 'Health & Beauty Products'),
('FashionHealthBeauty', 'Other Personal Items'),
('HobbySportKids', 'Musical Instruments'),
('HobbySportKids', 'Sports Equipment'),
('HobbySportKids', 'Travel, Events & Tickets'),
('HobbySportKids', 'Art & Collectibles'),
('HobbySportKids', 'Music, Books & Movies'),
('HobbySportKids', 'Video Games & Consoles'),
('HobbySportKids', 'Children''s Items'),
('HobbySportKids', 'Other Hobby,Sport & Kids Items'),
('BusinessServicesIndustry', 'Services'),
('BusinessServicesIndustry', 'Office Supplies & Stationary'),
('BusinessServicesIndustry', 'Industry Tools & Machinery'),
('BusinessServicesIndustry', 'Raw Materials & Building Suppl'),
('BusinessServicesIndustry', 'Licences & Titles'),
('BusinessServicesIndustry', 'Medical Equipment & Supplies'),
('Education', 'Textbooks'),
('Education', 'Other Eduction'),
('Animals', 'Pets'),
('Animals', 'Farm Animals'),
('Animals', 'Animal Accessories'),
('Animals', 'Other Animals'),
('FoodAgriculture', 'Food'),
('FoodAgriculture', 'Crops,Seeds & Plants'),
('FoodAgriculture', 'Farming Tools & Machinery'),
('FoodAgriculture', 'Other Food & Agriculture'),
('Property', 'Land'),
('Property', 'Houses'),
('Property', 'Apartments'),
('Property', 'Commercial Property');

-- --------------------------------------------------------

--
-- Table structure for table `directitem`
--

CREATE TABLE IF NOT EXISTS `directitem` (
  `directitem_id` int(64) NOT NULL AUTO_INCREMENT,
  `user_id` int(64) NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `district` varchar(25) NOT NULL,
  `district_area` varchar(25) NOT NULL,
  `conditionOn` varchar(10) NOT NULL,
  `item_avatar` varchar(200) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(15) NOT NULL,
  `delivery_option` varchar(15) NOT NULL,
  `addingtime` varchar(18) NOT NULL,
  `item_accept` varchar(5) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`directitem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `placebid`
--

CREATE TABLE IF NOT EXISTS `placebid` (
  `bid_id` int(64) NOT NULL AUTO_INCREMENT,
  `additem_id` int(64) NOT NULL,
  `user_id` int(64) NOT NULL,
  `bid_price` int(15) NOT NULL,
  `highestbid` int(20) NOT NULL,
  PRIMARY KEY (`bid_id`),
  KEY `additem_id` (`additem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_password_hash` varchar(40) NOT NULL,
  `login_type` varchar(10) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_activation` int(5) NOT NULL,
  `user_type` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password_hash`, `login_type`, `phone_number`, `address`, `user_activation`, `user_type`) VALUES
(2, 'janith', 'kavinda@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'none', 0, '', 1, NULL),
(3, 'kemal', 'kemal@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'none', 0, '', 1, NULL),
(7, 'lansu', 'lansu@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '', 0, '', 1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
