/*!40101 SET
@OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET
@OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET
@OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS,
UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS,
FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE,
SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `annonce`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `annonce` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image_link` varchar(250) DEFAULT NULL,
 `content` text NOT NULL,
 `title` varchar(250) NOT NULL,
 `name_surname_user` varchar(250) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `annonce_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `login` varchar(250) NOT NULL,
 `name` varchar(250) NOT NULL,
 `surname` varchar(250) NOT NULL,
 `password` varchar(250) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `user_id_uindex` (`id`),
 UNIQUE KEY `user_login_uindex` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;