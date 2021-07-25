# MySQL database backup
#
# Generated: Sunday 25. July 2021 21:58 CEST
# Hostname: localhost
# Database: `demo`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `categories`
# --------------------------------------------------------


#
# Delete any existing table `categories`
#

DROP TABLE IF EXISTS `categories`;


#
# Table structure of table `categories`
#

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ;

#
# Data contents of table categories (5 records)
#
 
INSERT INTO `categories` VALUES ('1', 'Beverages') ; 
INSERT INTO `categories` VALUES ('2', 'Condiments') ; 
INSERT INTO `categories` VALUES ('3', 'Confections') ; 
INSERT INTO `categories` VALUES ('4', 'Dairy Products') ; 
INSERT INTO `categories` VALUES ('5', 'Grains/Cereals') ;
#
# End of data contents of table categories
# --------------------------------------------------------

# MySQL database backup
#
# Generated: Sunday 25. July 2021 21:58 CEST
# Hostname: localhost
# Database: `demo`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `categories`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `customer`
# --------------------------------------------------------


#
# Delete any existing table `customer`
#

DROP TABLE IF EXISTS `customer`;


#
# Table structure of table `customer`
#

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

#
# Data contents of table customer (5 records)
#
 
INSERT INTO `customer` VALUES ('1', 'Alfreds Futterkiste', 'Obere Str. 57', 'Germany\r\n') ; 
INSERT INTO `customer` VALUES ('2', 'Ana Trujillo Emparedados y helados', 'Avda. de la Constitución 2222', 'Mexico') ; 
INSERT INTO `customer` VALUES ('3', 'Antonio Moreno Taquería', 'Mataderos 2312', 'Mexico') ; 
INSERT INTO `customer` VALUES ('4', 'Around the Horn', '120 Hanover Sq.', 'UK') ; 
INSERT INTO `customer` VALUES ('5', 'Berglunds snabbköp', 'Berguvsvägen 8', 'Sweden') ;
#
# End of data contents of table customer
# --------------------------------------------------------

# MySQL database backup
#
# Generated: Sunday 25. July 2021 21:58 CEST
# Hostname: localhost
# Database: `demo`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `categories`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `customer`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `orders`
# --------------------------------------------------------


#
# Delete any existing table `orders`
#

DROP TABLE IF EXISTS `orders`;


#
# Table structure of table `orders`
#

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `productID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

#
# Data contents of table orders (5 records)
#
 
INSERT INTO `orders` VALUES ('1', '1', '2021-07-13', '2') ; 
INSERT INTO `orders` VALUES ('2', '2', '2021-07-15', '3') ; 
INSERT INTO `orders` VALUES ('3', '3', '2021-07-04', '5') ; 
INSERT INTO `orders` VALUES ('4', '4', '2021-07-01', '4') ; 
INSERT INTO `orders` VALUES ('5', '5', '2021-07-10', '1') ;
#
# End of data contents of table orders
# --------------------------------------------------------

# MySQL database backup
#
# Generated: Sunday 25. July 2021 21:58 CEST
# Hostname: localhost
# Database: `demo`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `categories`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `customer`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `orders`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `products`
# --------------------------------------------------------


#
# Delete any existing table `products`
#

DROP TABLE IF EXISTS `products`;


#
# Table structure of table `products`
#

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

#
# Data contents of table products (5 records)
#
 
INSERT INTO `products` VALUES ('1', 'Chais', '1', '18.00') ; 
INSERT INTO `products` VALUES ('2', 'Chang', '5', '20.00') ; 
INSERT INTO `products` VALUES ('3', 'Aniseed Syrup', '2', '30.00') ; 
INSERT INTO `products` VALUES ('4', 'Chef Anton\'s Cajun Seasoning', '4', '25.00') ; 
INSERT INTO `products` VALUES ('5', 'Chef Anton\'s Gumbo Mix', '3', '20.00') ;
#
# End of data contents of table products
# --------------------------------------------------------

