# Host: localhost  (Version 5.5.5-10.1.13-MariaDB)
# Date: 2016-11-23 15:57:51
# Generator: MySQL-Front 5.4  (Build 3.44)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "table_donhang"
#

DROP TABLE IF EXISTS `table_donhang`;
CREATE TABLE `table_donhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tennguoidat` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `tenmathang` varchar(255) NOT NULL,
  `tonggia` int(255) NOT NULL,
  `giamathang` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `ngaydathang` varchar(200) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `size` varchar(20) NOT NULL,
  `mau` varchar(20) NOT NULL,
  `tinh_tp` varchar(50) NOT NULL,
  `ngaytim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;

#
# Data for table "table_donhang"
#

/*!40000 ALTER TABLE `table_donhang` DISABLE KEYS */;
INSERT INTO `table_donhang` VALUES (259,'Huỳnh Quang Trường','0905707302','tPhcm','ggggg','iPhone 7 32GB',18790000,18790000,1,'Thứ tư, 23/11/2016 15:02:33','747819739529_180x180.jpg',0,'quangtruong@kaizen.vn','iphone-7-32gb','xaydungbv','','','','','2016-11-23');
/*!40000 ALTER TABLE `table_donhang` ENABLE KEYS */;
