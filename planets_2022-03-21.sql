# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: planets
# Generation Time: 2022-03-21 14:17:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table planets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `planets`;

CREATE TABLE `planets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(280) DEFAULT NULL,
  `image_src` varchar(500) DEFAULT NULL,
  `sun` varchar(280) DEFAULT NULL,
  `type` varchar(280) DEFAULT NULL,
  `length_of_day` float DEFAULT NULL,
  `length_of_year` float DEFAULT NULL,
  `mean_radius_km` float DEFAULT NULL,
  `mass_earths` float DEFAULT NULL,
  `mean_distance_from_sun_au` float DEFAULT NULL,
  `number_of_moons` int(11) DEFAULT NULL,
  `mean_surface_temperature_c` varchar(100) DEFAULT NULL,
  `full_name` varchar(280) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `planets` WRITE;
/*!40000 ALTER TABLE `planets` DISABLE KEYS */;

INSERT INTO `planets` (`id`, `name`, `image_src`, `sun`, `type`, `length_of_day`, `length_of_year`, `mean_radius_km`, `mass_earths`, `mean_distance_from_sun_au`, `number_of_moons`, `mean_surface_temperature_c`, `full_name`, `description`)
VALUES
	(1,'Earth',NULL,'Sun','Rocky',1,1,6378,1,1,1,'-89 to 58','','Earth is the third planet from the Sun in the Solar System and the only known astronomical object in the Universe that has life. It is thought that the reason the Earth can sustain life is the large amount of liquid surface water. Earth is the largest and most massive rocky planet and the densest planet in the Solar System. It is also the only rocky planet to have a considerably strong magnetic field. Earth\'s satellite, the Moon, is the largest natural satellite relative to the size of its major planet, and is tidally locked with the Earth, meaning that it rotates around the Earth with the same side facing the Earth permanently.'),
	(2,'Mercury',NULL,'Sun','Rocky',58.6,0.24,2439,0.055,0.387098,0,'-180 to 430',NULL,'Mercury is the closest planet to the Sun in the Solar System and the smallest planet, being almost as small as the Earth\'s Moon. It is tidally locked with the Sun, similar to how the Moon is tidally locked with the Earth, meaning that the same side of Mercury faces the Sun throughout its orbit.'),
	(3,'Venus',NULL,'Sun','Rocky',243,0.62,6052,0.815,0.72,0,'465',NULL,'Venus is the second largest rocky planet in the Solar System, and the second planet from the Sun. It is very close in size and mass to the Earth, but it has an extremely hot surface temperature, a dense atmosphere composed of 96% carbon dioxide and 92 times the atmospheric pressure of Earth\'s atmosphere, making is a highly unlikely host for life.'),
	(4,'Mars',NULL,'Sun','Rocky',1.03,1.88,3394,0.107,1.52,2,'-82 to 0',NULL,'Mars is the second smallest planet in the Solar System (after Mercury) and the fourth one from the Sun. It is red due to the iron oxide on its surface and is home to the largest volcano and the highest known mountain in the Solar System - Olympus Mons. Mars has been visited by unmanned operations multiple times and some theorise that microscopic life could have begun on Mars before ending up on Earth.'),
	(5,'Jupiter',NULL,'Sun','Gas giant',0.4,1.82,71400,318,5.2,80,'-150',NULL,'Jupiter is the largest planet in the Solar System and the fifth one from the Sun. Its mass is more than two and a half times that of all the other planets in the Solar System combined. Jupiter is so massive that the center of gravity between it and the Sun lies outside of the Sun\'s atmosphere, meaning that the Sun, in a sense, revolves around Jupiter.'),
	(6,'Saturn',NULL,'Sun','Gas giant',0.4,29.46,60000,95,9.54,83,'-170',NULL,'Saturn is the second largest planet in the Solar System and the fifth from the Sun. Saturn is known for its prominent ring system and its 83 known moons - more than any other planet in the Solar System. Saturn\'s largest moon Titan is larger than Mercury and has rivers of liquid methane, and is the only moon to have a substantial atmosphere.'),
	(7,'Uranus',NULL,'Sun','Ice giant',0.7,84.01,25559,15,19.18,27,'-200',NULL,'Uranus is the seventh planet from the Sun and one of the two ice giants, alongside Neptune. Its axis of rotation is tilted sideways, meaning that its poles are on the sides rather than the \"top\" and \"bottom\", relative to its orbit. Uranus has the coldest atmosphere of all the planets at 49K minimum and its surface appears almost completely featureless and smooth.  '),
	(8,'Neptune',NULL,'Sun','Ice giant',0.7,164.8,24764,17,30.06,14,'-210',NULL,'Neptune is the farthest known planet in the Solar System and the more massive out of the two ice giants (the other being Uranus). Unlike all the other planets, Neptune was discovered not by observation, but rather by mathematical prediction, due to its effects on the orbit of Uranus. Neptune is 30 times further from the Sun than the Earth and it completes one orbit around the Sun every 164.8 Earth years.'),
	(9,'Ceres',NULL,'Sun','Dwarf',0.4,4.599,487,0.00016,2.76596,0,'-106','1 Ceres','Ceres is a dwarf planet whose orbit is positioned in the asteroid belt between the orbits of Jupiter and Mars. It was also the first ever discovered asteroid, observed on 1 January 1801. It is the only dwarf planet inside Neptune\'s Orbit.'),
	(10,'Pluto',NULL,'Sun','Dwarf',6.4,247.7,1150,0.002,39.44,5,'-220','134340 Pluto','Pluto is a dwarf planet which orbits the Sun beyond Neptune and is known for being formerly considered as the ninth planet in the Solar System. As of 2006 Pluto is excluded from the list of planets and is instead a dwarf planet.'),
	(11,'Haumea',NULL,'Sun','Dwarf',0.2,285.4,746,0.0007,43.335,2,'-223','136108 Haumea','Haumea is a dwarf planet orbiting beyond Neptune. It is rounded and has hydrostatic equilibrium, meaning that it can be a dwarf planet rather than a regular asteroid, but it spins so quickly that it has become highly elongated in one dimension and slightly flattened in another, in a shape known as a Jacobi ellipsoid'),
	(12,'Makemake',NULL,'Sun','Dwarf',1,309.88,800,0.00067,45.791,0,'-240','136472 Makemake','Makemake is a dwarf planet located in the Kuiper belt, an asteroid belt beyond the orbit of Neptune. It is approximately two thirds the size of Pluto and has one satellite called S/2015 (136472) 1. Its surface is so cold that it is thought to be covered in methane, ethane and possibly nitrogen ice.'),
	(13,'Eris',NULL,'Sun','Dwarf',14.6,557,1350,0.0028,67.6681,1,'-230','136199 Eris','Eris is a dwarf planet with a highly eccentric orbit which lives in the scattered disk beyond Neptune. It is the second largest and the most massive dwarf planet, more massive than its slightly larger brother Pluto. Eris has a large moon called Dysnomia. For some time Eris was known as Xena, after character from Xena: Warrior Princess, which was the nickname given by the discovery team.'),
	(14,'Orcus',NULL,'Sun','Dwarf',NULL,247.49,458.5,0.0001,39.17,1,'-231','90482 Orcus','Orcus is a dwarf planet which has a large moon called Vanth. It is categorised as a plutino - one of multiple trans-Neptunian objects that are locked in a 2:3 orbital resonance with Neptune (they complete two orbits for every three completed orbits by Neptune). The biggest plutino is Pluto, hence the name of this category.'),
	(15,'Quaoar',NULL,'Sun','Dwarf',0.4,287.97,560.5,0.0003,43.694,1,'-232','50000 Quaoar','Quaoar is a dwarf planet located in the Kuiper belt, which is an asteroid belt beyond Neptune\'s orbit. Quaoar has a moon called Weywot and both objects are named after mythological figures from the Native American Tongva people - Quaoar is the creator deity and Weywot is his son.'),
	(16,'Gonggong',NULL,'Sun','Dwarf',0.9,552.52,615,0.0003,67.4855,1,'-243','225088 Gonggong','Gonggong is a red dwarf planet in the scattered disc beyond Neptune, whose orbit is highly eccentric (eliptical) and inclined. It has a 3:10 orbital resonance with Neptune, which means it is gravitationally dependent such that Gonggong completes three orbits for every ten orbits completed by Neptune. '),
	(17,'Sedna',NULL,'Sun','Dwarf',0.4,12059,497.5,NULL,506.595,0,'-261','90377 Sedna','Sedna is a dwarf planet in the outer reaches of the Solar System. It has a highly elongated orbit, with the long diameter being more than 10 times longer than the shorter one. It is currently in the innermost part of its orbit, which is still almost three times further from the Sun than Neptune.');

/*!40000 ALTER TABLE `planets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
