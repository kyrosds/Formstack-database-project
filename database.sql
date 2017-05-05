/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
--Table structure for new users
--
CREATE TABLE IF NOT EXISTS 'users' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'firstName' varchar(50) NOT NULL,
  'lastName' varchar(75) NOT NULL,
  'email' varchar(100) NOT NULL,
  'password' varchar(50) NOT NULL,
  PRIMARY KEY ('id')
); ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES 'users' WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;

INSERT INTO 'users' ('id', 'first_name', 'last_name', 'email', 'password') VALUES
(1, 'Bob', 'Tahoe', 'bobtahoe@gmail.com', 'XXXXXXXX'),
(2, 'Fred', 'Melvin', 'fredmelvin@yahoo.com', 'XXXXXXXX'),
(3, 'Sally', 'Winthrop', 'sallywinthrop@gmail.com', 'XXXXXXXX');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;