# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: bluenoodle
# Generation Time: 2015-04-02 12:09:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`)
VALUES
	(1,'ann','6b2fdfabac7269839052d2437b1116e21391b6f526b13be9dcb0ae1a7eec6921','66cd71191b1336f2','ann@live.com'),
	(2,'marco','2e084037455308fc7110915050754d507d1ccde0dabf5a5f942a67c623a6b8b5','43a1191e3d67f514','marco@live.com'),
	(3,'Carlos','bd53dfa467da1c464817816f64919867a2c7847697102066bd173fca85d5e4ff','513020b83017dc','parent@hotmail.com'),
	(4,'Jane','928fadcb7e585786bec1e853eae937a1ebdb1ba24c1681db00625a44252f22b4','2cd5310b401212de','Jane@live.com'),
	(5,'cat','eb6dffde7c8af5709bead84447a8641fed6a440113b285e2e7ff21d4d33091de','4c7577842548c436','cat@live.com'),
	(6,'dog','244df36ce400e2ea267ec573c129709752275fd36a249604d8fea7ca473ae740','4b14b1381fa1d3e5','dog@email.com'),
	(7,'Charlie','08372726f640ba804b2d15dd77e206a8e1f3ef4381717b76fa2bbaa54859e756','68f804803177d2aa','charlie@live.com'),
	(8,'jim','263ac4e89608df4c6959efca44572611e8312ed6cf9458fa353b6d0850a8a242','62d0882553c1eea3','jim@live.com'),
	(9,'rat','2ba43f7dc5a287ad36df48b75aab2dce1718bda947eae6ced84ec698249be321','5e80e6c0ed60230','rat@live.com'),
	(10,'Monster','791d7c8a5461684b576f0dbfafca1c0e3860c155f2bedc8f839ab22561f44c99','33a5b3ec6f426efc','annM@live.com'),
	(11,'eggs','4167ebc8cc14d889b625bf915b31f3d2ac7de6574de75188160c0a61765edada','1472dfa452fc5a53','egg@live.com'),
	(12,'jack','a93fbdc0e9a7b5ca515d3a12ad270042949795661d516f6d6f43d813f17aa4cd','3e7ba7301dfe010e','ja@live.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
