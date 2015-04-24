# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: bluenoodle
# Generation Time: 2015-04-15 21:56:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`id`, `user`, `pass`, `lvl`)
VALUES
	(1,'admin','admin',NULL);

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `ordering` int(11) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `name`, `description`, `ordering`, `visible`)
VALUES
	(1,'Membership Plans',NULL,1,1),
	(2,'Learning Materials',NULL,2,1),
	(3,'Our Charities',NULL,3,1);

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table coupons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `text_promotion` varchar(255) DEFAULT NULL,
  `discount` decimal(11,2) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;

INSERT INTO `coupons` (`id`, `code`, `text_promotion`, `discount`, `visible`)
VALUES
	(1,'Promo10','New promotion demo for you',10.00,1);

/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datelastorder` datetime DEFAULT NULL,
  `dateregister` datetime DEFAULT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_country` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_country_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_zip` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_state` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_city` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address_street` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `datelastorder`, `dateregister`, `payer_email`, `first_name`, `last_name`, `address_name`, `address_country`, `address_country_code`, `address_zip`, `address_state`, `address_city`, `address_street`)
VALUES
	(17,'2013-09-15 23:05:05','2013-01-15 23:00:59','buyer@demomail.com','John','It is only a demonstration of a customer comment','John Snow','United States','US','12354','Any, its a demo','Any, its a demo','Any, its a demo'),
	(31,'2013-09-29 19:45:40','2013-09-29 19:19:57','info@beaenea.com','john','Frank','john Frank','USA','US','8500','NY','New York','2345 North Main Street');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order_detail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_detail`;

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateorder` timestamp NULL DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `item_price` decimal(9,2) DEFAULT NULL,
  `mc_gross` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `payment_currency` varchar(255) DEFAULT NULL,
  `payer_email` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `custom` varchar(255) DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address_name` varchar(255) DEFAULT NULL,
  `address_country` varchar(255) DEFAULT NULL,
  `address_country_code` varchar(255) DEFAULT NULL,
  `address_zip` varchar(255) DEFAULT NULL,
  `address_state` varchar(255) DEFAULT NULL,
  `address_city` varchar(255) DEFAULT NULL,
  `address_street` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;

INSERT INTO `order_detail` (`id`, `dateorder`, `item_name`, `item_number`, `quantity`, `item_price`, `mc_gross`, `payment_status`, `payment_amount`, `payment_currency`, `payer_email`, `payment_type`, `custom`, `invoice`, `first_name`, `last_name`, `address_name`, `address_country`, `address_country_code`, `address_zip`, `address_state`, `address_city`, `address_street`)
VALUES
	(1,'2012-12-17 00:00:00','product 1','102',1,NULL,'234.00','Completed','234','USD','','instant','','20130916002341',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order_header
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_header`;

CREATE TABLE `order_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateorder` timestamp NULL DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `payment_currency` varchar(255) DEFAULT NULL,
  `payer_email` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `custom` varchar(255) DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address_name` varchar(255) DEFAULT NULL,
  `address_country` varchar(255) DEFAULT NULL,
  `address_country_code` varchar(255) DEFAULT NULL,
  `address_zip` varchar(255) DEFAULT NULL,
  `address_state` varchar(255) DEFAULT NULL,
  `address_city` varchar(255) DEFAULT NULL,
  `address_street` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `order_header` WRITE;
/*!40000 ALTER TABLE `order_header` DISABLE KEYS */;

INSERT INTO `order_header` (`id`, `dateorder`, `payment_status`, `payment_amount`, `payment_currency`, `payer_email`, `payment_type`, `custom`, `invoice`, `first_name`, `last_name`, `address_name`, `address_country`, `address_country_code`, `address_zip`, `address_state`, `address_city`, `address_street`)
VALUES
	(1,'2014-11-12 00:24:33','Completed','183.50','USD','buyer@demomail.com','instant','It is only a demonstration of a customer comment','20130916002341','Jeremy','Frank','Jeremy Frank','UK','UK','12354','Any, its a demo','Any, its a demo','123, any street');

/*!40000 ALTER TABLE `order_header` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `idCategory` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `idCategory`)
VALUES
	(1,'PD1001','Plan 1 Yearly','Yearly Fee','yearly.jpg',69.95,1),
	(2,'PD1002','Plan 2 Monthly','Monthly Fee','monthly.jpg',6.95,1),
	(3,'PD1004','Plan 3 School','Free','school.jpg',10.00,1);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`)
VALUES
	(1,'ann','6b2fdfabac7269839052d2437b1116e21391b6f526b13be9dcb0ae1a7eec6921','66cd71191b1336f2','ann@live.com'),
	(18,'Cat','88037c3ef9e99936adcf2591e08c50c79ced7b47f29e0498a56e432d65898ae8','2382c1c83be40845','parent02@live.com'),
	(19,'Charlie','9589ea896a26a00197aceb509f741bfce03053ca6cdc0f10822e9ce2a912ec4e','4d0be049224f861e','c@live.com'),
	(20,'Jane','dd8861150e522630c6028092a258f3668ca0cee0d605ab3622e3608d3082e7b6','484b4e266f2a8920','Jane@live.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
