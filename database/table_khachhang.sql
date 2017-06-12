# Host: localhost  (Version 5.5.5-10.1.13-MariaDB)
# Date: 2016-11-23 15:58:01
# Generator: MySQL-Front 5.4  (Build 3.44)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "table_khachhang"
#

DROP TABLE IF EXISTS `table_khachhang`;
CREATE TABLE `table_khachhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phai` tinyint(1) NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Xacnhanmatkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinh_tp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "table_khachhang"
#

/*!40000 ALTER TABLE `table_khachhang` DISABLE KEYS */;
INSERT INTO `table_khachhang` VALUES (105,'Huỳnh Quang Trường',0,'tPhcm','0905707302','xaydungbv','1234567','quangtruong@kaizen.vn','','',''),(106,'ffff',0,'vtc.vn','666','xaydungbv2','123456','quangtruong@kaizen.vnn','','','');
/*!40000 ALTER TABLE `table_khachhang` ENABLE KEYS */;
