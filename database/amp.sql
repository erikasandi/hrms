/*
SQLyog Community
MySQL - 5.7.12-0ubuntu1.1 : Database - asset
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `asset_conditions` */

CREATE TABLE `asset_conditions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `site_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_conditions` */

insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (1,'New','',2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (2,'Perfect','',2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (3,'Minor Defect',NULL,2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (4,'Backlog Maintenance',NULL,2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (5,'Requires Major Renewal',NULL,2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (6,'Almost Unserviceable',NULL,2);

/*Table structure for table `asset_details` */

CREATE TABLE `asset_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) NOT NULL,
  `specification` text COLLATE utf8_unicode_ci,
  `serial_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `function` text COLLATE utf8_unicode_ci,
  `asset_condition_id` int(11) NOT NULL DEFAULT '0',
  `asset_performance_id` int(11) NOT NULL DEFAULT '0',
  `install_date` date DEFAULT NULL,
  `construction_date` date DEFAULT NULL,
  `condition_detail` text COLLATE utf8_unicode_ci,
  `performance_detail` text COLLATE utf8_unicode_ci,
  `reservoir_capacity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operational_date` date DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `pipe_diameter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `network_diameter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` double NOT NULL DEFAULT '0',
  `number_of_valve` double NOT NULL DEFAULT '0',
  `number_of_pipe_bridge` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_details` */

insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (12,17,'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe','S2.100.300.1750.4.72M.S.441.GND','Pompa Untuk Mentransfer Air Baku dari Intake ke WTP',2,8,'2011-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (13,18,'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe','S2.100.300.1750.4.72M.S.441.GND','Pompa Untuk Mentransfer Air Baku dari Intake ke WTP',2,8,'2011-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (14,19,'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe','S2.100.300.1750.4.72M.S.441.GND','Pompa Untuk Mentransfer Air Baku dari Intake ke WTP',2,8,'2012-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (15,20,'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe','S2.100.300.1750.4.72M.S.441.GND','Pompa Untuk Mentransfer Air Baku dari Intake ke WTP',2,8,'2012-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian. Sedang menunggu jadwal ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (16,21,'Generator Set. 1000kVA, 400/230V, 1500 rpm','FGWPST01CP0A02269','Pembangkit listrik untuk backup power pada saat PLN mati',1,9,'2011-01-01',NULL,'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman','Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (17,22,'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 1000 kVA, Cooling type ONAN (mineral Oil)','','Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV',1,9,'2011-01-01',NULL,'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual','Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (18,23,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-489','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2011-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (19,24,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-490','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2011-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (20,25,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-491','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2011-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (21,26,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-492','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2012-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (22,27,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-493','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2012-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (23,28,'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m','Grundfos HS 300-200-494','Pompa Untuk Distribusi air terolah ke Pelanggan',2,8,'2012-01-01',NULL,'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.','Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (24,29,'Generator Set. 2000kVA, 400/230V, 1500 rpm','FGWPST03PROA01087','Pembangkit listrik untuk backup power pada saat PLN mati',1,9,'2011-01-01',NULL,'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman','Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis berkala sesuai rekomendasi manufaktur',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (25,30,'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 2000 kVA, Cooling type ONAN (mineral Oil)','','Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV',1,9,'2011-01-01',NULL,'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual','Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (26,31,'TEST CIVIL',NULL,'test',1,8,NULL,'2016-11-22','test','test',NULL,'PT xxx',NULL,NULL,NULL,NULL,NULL,0,0,0);

/*Table structure for table `asset_images` */

CREATE TABLE `asset_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_images` */

insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (5,1,'under the sea.jpg','under the sea.jpg');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (7,2,'about-header.jpg','about-header.jpg');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (9,2,'bg-section-sight.png','bg-section-sight.png');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (10,2,'head-sample-03.jpg','head-sample-03.jpg');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (11,3,'head-sample-01.jpg','head-sample-01.jpg');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (12,3,'head-sample-02.jpg','head-sample-02.jpg');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (20,12,'banner-ticket.png','banner-ticket.png');
insert  into `asset_images`(`id`,`asset_id`,`title`,`path`) values (21,16,'banner-ticket.png','banner-ticket.png');

/*Table structure for table `asset_performances` */

CREATE TABLE `asset_performances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `site_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_performances` */

insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (6,'Fair','Working well',1);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (7,'Bad','',1);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (8,'Perfect','',2);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (9,'Good','',2);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (10,'Average','',2);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (11,'Bad','',2);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (12,'Poor',NULL,2);

/*Table structure for table `asset_types` */

CREATE TABLE `asset_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `class_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_types` */

insert  into `asset_types`(`id`,`name`,`description`,`class_name`,`site_id`) values (2,'M/E','Mechanical Engineering','MechanicalAsset',2);
insert  into `asset_types`(`id`,`name`,`description`,`class_name`,`site_id`) values (3,'Electrical','Electrical','ElectricalAsset',2);
insert  into `asset_types`(`id`,`name`,`description`,`class_name`,`site_id`) values (4,'Civil','','CivilAsset',2);
insert  into `asset_types`(`id`,`name`,`description`,`class_name`,`site_id`) values (6,'Network Pipe','','NetworkPipeAsset',2);

/*Table structure for table `assets` */

CREATE TABLE `assets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '---',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `assets` */

insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (17,'ITK-001','INTAKE PUMP 1','9','2016-11-11 07:16:54','2016-11-16 07:50:44',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (18,'ITK-002','INTAKE PUMP 2','9','2016-11-11 07:39:25','2016-11-11 07:39:25',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (19,'ITK-003','INTAKE PUMP 3','9','2016-11-11 07:41:35','2016-11-11 07:41:35',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (20,'ITK-004','INTAKE PUMP 4','9','2016-11-11 07:44:22','2016-11-11 07:44:22',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (21,'ITK-005','Genset Intake','9','2016-11-11 07:45:48','2016-11-11 07:45:48',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (22,'ITK-006','TRANSFOMATOR','9','2016-11-11 07:47:15','2016-11-11 07:47:15',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (23,'WTP-001','TWPS A','10','2016-11-11 08:40:43','2016-11-11 08:40:43',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (24,'WTP-002','TWPS B','10','2016-11-11 08:42:33','2016-11-11 08:42:33',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (25,'WTP-003','TWPS C','10','2016-11-11 08:44:41','2016-11-11 08:44:41',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (26,'WTP-004','TWPS D','10','2016-11-11 08:46:37','2016-11-11 08:46:37',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (27,'WTP-005','TWPS E','10','2016-11-11 08:48:08','2016-11-11 08:48:08',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (28,'WTP-006','TWPS F','10','2016-11-11 08:49:55','2016-11-11 08:49:55',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (29,'WTP-007','Genset WTP','10','2016-11-11 08:51:19','2016-11-11 08:51:19',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (30,'WTP-008','TRANSFOMATOR','10','2016-11-11 08:53:18','2016-11-11 08:53:18',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (31,'TEST00004','TEST ITEM','9','2016-11-15 02:53:24','2016-11-15 02:53:24',4,1);

/*Table structure for table `locations` */

CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `site_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `locations` */

insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (8,'Production','',NULL,0,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (9,'Intake','',NULL,8,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (10,'WTP','',NULL,8,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (11,'Distribution',NULL,NULL,0,2);

/*Table structure for table `maintenance_images` */

CREATE TABLE `maintenance_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maintenance_id` int(10) unsigned NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `maintenance_images_maintenance_id_foreign` (`maintenance_id`),
  CONSTRAINT `maintenance_images_maintenance_id_foreign` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenances` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenance_images` */

insert  into `maintenance_images`(`id`,`maintenance_id`,`file_name`,`description`) values (9,8,'blank.png','');

/*Table structure for table `maintenance_types` */

CREATE TABLE `maintenance_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenance_types` */

insert  into `maintenance_types`(`id`,`title`,`description`) values (1,'Preventive',NULL);
insert  into `maintenance_types`(`id`,`title`,`description`) values (2,'Predictive',NULL);
insert  into `maintenance_types`(`id`,`title`,`description`) values (3,'Corrective',NULL);
insert  into `maintenance_types`(`id`,`title`,`description`) values (4,'Breakdown',NULL);

/*Table structure for table `maintenances` */

CREATE TABLE `maintenances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL,
  `maintenance_type_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `performance` text COLLATE utf8_unicode_ci,
  `maintenance_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `maintenances_asset_id_foreign` (`asset_id`),
  CONSTRAINT `maintenances_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenances` */

insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (8,17,1,'Penggantian Bellmut dan Mechanical seal garansi grundfos akibat pompa terjatuh saat Pengecekan. ','','2013-12-01','2016-11-11 07:17:31','2016-11-11 07:51:51');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (11,18,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2014-01-11','2016-11-11 07:39:56','2016-11-11 07:39:56');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (12,19,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2015-11-01','2016-11-11 07:43:13','2016-11-11 08:33:36');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (13,21,1,'Perbaikan kebocoran cover silinder head oleh vendor. ','','2014-06-01','2016-11-11 07:46:09','2016-11-11 08:34:18');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (14,22,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.','','2014-04-01','2016-11-11 07:48:04','2016-11-11 07:50:27');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (15,22,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.','','2015-04-01','2016-11-11 07:48:25','2016-11-11 07:50:39');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (16,17,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2014-12-01','2016-11-11 07:51:21','2016-11-11 07:51:21');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (17,21,1,'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, air filter, fuel filter dll.','','2015-05-01','2016-11-11 08:34:31','2016-11-11 08:34:31');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (18,21,1,'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, fuel filter dll.','','2016-10-01','2016-11-11 08:35:17','2016-11-11 08:35:17');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (19,22,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.','','2016-10-01','2016-11-11 08:36:38','2016-11-11 08:36:38');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (20,23,1,'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal, kopling kit dan juga perbaikan impeler yang sudah korosi.','','2014-05-01','2016-11-11 08:41:16','2016-11-11 08:41:16');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (21,23,1,'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal,  dan juga Penggantian Impeller karena impeler yang lama sudah mengalami kerusakan cukup berat','','2016-07-01','2016-11-11 08:41:33','2016-11-11 08:41:33');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (22,24,1,'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal, kopling kit, dll. Jul-16 Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime sepe','','2014-09-01','2016-11-11 08:43:04','2016-11-11 08:43:04');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (23,25,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2015-11-01','2016-11-11 08:45:03','2016-11-11 08:45:03');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (24,26,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2015-06-01','2016-11-11 08:47:02','2016-11-11 08:47:02');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (25,27,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2015-04-01','2016-11-11 08:48:42','2016-11-11 08:48:42');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (26,28,1,'Service Overhoul dan pengantian part 2 tahunan By Vendor','','2015-09-01','2016-11-11 08:50:22','2016-11-11 08:50:22');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (27,29,1,'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, air filter, fuel filter dll','','2015-06-01','2016-11-11 08:51:49','2016-11-11 08:51:49');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (28,29,1,'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, fuel filter dll.','','2016-10-01','2016-11-11 08:52:02','2016-11-11 08:52:02');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (29,30,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor. ','','2014-04-01','2016-11-11 08:53:46','2016-11-11 08:54:25');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (30,30,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.','','2015-04-01','2016-11-11 08:54:11','2016-11-11 08:54:11');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (31,30,1,'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.','','2016-10-01','2016-11-11 08:54:40','2016-11-11 08:54:40');

/*Table structure for table `menus` */

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (1,'asset-management','Assets','',0,'dashboard','fa fa-building',NULL,NULL,'2016-09-20 03:41:23',200);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (2,'setting','Settings','setting',0,'add.menu','fa fa-wrench',NULL,NULL,'2016-09-20 03:41:33',900);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (4,'menu-management','Menu Management','menu',2,'add.menu',NULL,NULL,NULL,NULL,30);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (5,'user-management','User Management','user',2,'add.user',NULL,NULL,NULL,NULL,10);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (7,'site-management','Site Management','site',2,'add.user',NULL,NULL,NULL,NULL,20);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (8,'dashboard','Dashboard','dashboard',0,'dashboard','icon-home',NULL,NULL,NULL,100);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (13,'asset.condition','Condition','asset-condition',19,'setting','',NULL,'2016-09-20 04:07:20','2016-11-14 04:31:22',500);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (14,'asset.performance','Performance','asset-performance',19,'setting','',NULL,'2016-09-20 04:07:46','2016-11-14 04:31:17',600);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (15,'asset-type','Asset Type','asset-type',19,'setting','',NULL,'2016-09-20 08:13:35','2016-11-14 04:31:15',700);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (16,'asset.location','Location','asset-location',19,'setting','',NULL,'2016-09-21 06:14:44','2016-11-14 04:31:13',800);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (17,'asset.add','Add Asset','asset/add',1,'asset.all.add','',NULL,'2016-09-22 07:00:43','2016-11-14 04:29:49',150);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (18,'asset.list','Asset List','asset',1,'asset.all','',NULL,'2016-09-28 07:20:37','2016-11-14 04:29:45',100);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (19,'asset.setting','Asset Settings','javascript:;',2,'setting','',NULL,'2016-11-14 04:30:39','2016-11-14 04:30:39',50);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (20,'asset.distribution.list','Distribution','asset-by-group/distribution',1,'asset.distribution',NULL,NULL,NULL,NULL,100);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (21,'asset.production.list','Production','asset-by-group/production',1,'asset.production',NULL,NULL,NULL,NULL,200);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (22,'asset.commercial.list','Commercial','asset-by-group/commercial',1,'asset.commercial',NULL,NULL,NULL,NULL,300);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (23,'asset.ict.list','ICT','asset-by-group/ict',1,'asset.ict',NULL,NULL,NULL,NULL,400);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (24,'asset.ga.list','GA','asset-by-group/ga',1,'asset.ga',NULL,NULL,NULL,NULL,500);

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_100000_create_password_resets_table',1);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_05_050820_create_sessions_table',1);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_05_082643_create_permission_tables',2);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_06_035234_create_menus_table',3);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_13_031658_create_sites_table',4);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_13_031624_create_user_sites_table',5);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_13_031240_create_assets_table',6);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_15_114940_add_order_on_menus',7);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_16_033136_create_user_has_sites_table',8);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_20_034715_create_asset_conditions_table',9);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_20_034732_create_asset_performances_table',9);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_20_071129_create_asset_types_table',10);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_21_044018_create_locations_table',11);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_21_074414_add_type_on_assets',12);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_22_040427_create_asset_details_table',13);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_24_060757_add_class_name_on_asset_types',14);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_26_074218_add_performance_and_condition_details_on_asset_details',15);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_27_004528_add_site_on_locations',16);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_27_004655_add_site_on_asset_types',17);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_27_010639_add_site_on_assets',18);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_27_035830_add_site_on_asset_performances',19);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_27_040320_add_site_on_asset_conditions',20);
insert  into `migrations`(`migration`,`batch`) values ('2016_09_29_041121_create_user_details_table',21);
insert  into `migrations`(`migration`,`batch`) values ('2016_10_19_050313_create_asset_images_table',22);
insert  into `migrations`(`migration`,`batch`) values ('2016_10_31_043410_create_maintenance_types_table',23);
insert  into `migrations`(`migration`,`batch`) values ('2016_10_31_060957_create_maintenances_table',24);
insert  into `migrations`(`migration`,`batch`) values ('2016_11_02_032116_add_network_fields_on_asset_details',25);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (1,'setting','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (2,'add.menu','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (3,'edit.menu','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (4,'delete.menu','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (5,'add.permission','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (6,'edit.permission','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (7,'delete.permission','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (8,'add.user',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (9,'dashboard',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (10,'asset.add',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (11,'asset.edit',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (12,'asset.delete',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (13,'maintenance',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (14,'asset.distribution',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (15,'asset.distribution.add',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (16,'asset.distribution.edit',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (17,'asset.distribution.delete',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (18,'asset.production',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (19,'asset.production.add',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (20,'asset.production.edit',NULL,NULL);
insert  into `permissions`(`id`,`name`,`created_at`,`updated_at`) values (21,'asset.production.delete',NULL,NULL);

/*Table structure for table `role_has_permissions` */

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (1,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (2,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (3,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (4,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (5,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (6,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (7,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (8,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (9,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (10,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (11,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (12,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (13,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (14,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (15,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (16,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (17,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (18,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (19,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (20,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (21,4);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (1,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (2,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (3,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (4,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (5,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (6,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (7,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (8,5);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (9,5);

/*Table structure for table `roles` */

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`) values (4,'Administrator','2016-09-13 02:17:16','2016-09-13 02:17:16');
insert  into `roles`(`id`,`name`,`created_at`,`updated_at`) values (5,'Tester',NULL,NULL);

/*Table structure for table `sessions` */

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('468xHWa5IfwSkhsUdxhVmgNumxacTYteEtbwsmpC',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidTZIWXExU3BHMWZaQUg4dW1LTVJQUk45N0ZBVjBDMzEzZ0JhNEZyMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9hc3NldC5sb2NhbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc5MzUyMTc5O3M6MToiYyI7aToxNDc5MzUyMTc5O3M6MToibCI7czoxOiIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1479352179);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('4TKgV9cIiwdaqDQqGjYagZOtUWadZ7PSTxoIqnJn',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSDVRR0xVaVFSak51OEJBcGRnYWkwOVplem9JcGtMV3gxcXFxUFI4SCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NToiaHR0cDovL2Fzc2V0LmxvY2FsL2Fzc2V0LWJ5LWdyb3VwL2Zhdmljb24uaWNvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NzkzNTIyMDA7czoxOiJjIjtpOjE0NzkzNTIxODA7czoxOiJsIjtzOjE6IjAiO319',1479352200);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('NaOpzyKR0WyiOrc2lnvz5uwReXCOS6LQI681huoj',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3dsckRXSTdWdEJtaGF3ZFFTUkhLRWJHME1WSVAzb0o0THBxb3lOZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9hc3NldC5sb2NhbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc5MzUyMTc5O3M6MToiYyI7aToxNDc5MzUyMTc5O3M6MToibCI7czoxOiIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1479352179);

/*Table structure for table `sites` */

CREATE TABLE `sites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sites` */

insert  into `sites`(`id`,`name`,`description`) values (1,'AAI','Acuatico Air Indonesia');
insert  into `sites`(`id`,`name`,`description`) values (2,'AAT','Aetra Air Tangerang');

/*Table structure for table `user_details` */

CREATE TABLE `user_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_details` */

insert  into `user_details`(`id`,`user_id`,`avatar`,`avatar_thumbnail`,`mobile_phone`) values (1,1,'avatar-1.jpeg',NULL,'081808325756');

/*Table structure for table `user_has_permissions` */

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `user_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_has_permissions` */

/*Table structure for table `user_has_roles` */

CREATE TABLE `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `user_has_roles_user_id_foreign` (`user_id`),
  CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_has_roles` */

insert  into `user_has_roles`(`role_id`,`user_id`) values (4,1);
insert  into `user_has_roles`(`role_id`,`user_id`) values (5,1);
insert  into `user_has_roles`(`role_id`,`user_id`) values (4,3);
insert  into `user_has_roles`(`role_id`,`user_id`) values (5,3);
insert  into `user_has_roles`(`role_id`,`user_id`) values (4,4);
insert  into `user_has_roles`(`role_id`,`user_id`) values (5,4);

/*Table structure for table `user_has_sites` */

CREATE TABLE `user_has_sites` (
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_has_sites` */

insert  into `user_has_sites`(`user_id`,`site_id`) values (1,1);
insert  into `user_has_sites`(`user_id`,`site_id`) values (1,2);
insert  into `user_has_sites`(`user_id`,`site_id`) values (3,1);
insert  into `user_has_sites`(`user_id`,`site_id`) values (3,2);
insert  into `user_has_sites`(`user_id`,`site_id`) values (4,2);

/*Table structure for table `user_sites` */

CREATE TABLE `user_sites` (
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_sites` */

insert  into `user_sites`(`user_id`,`site_id`) values (1,4);
insert  into `user_sites`(`user_id`,`site_id`) values (12,4);
insert  into `user_sites`(`user_id`,`site_id`) values (13,4);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Pasha Mahardika','me@pashamahardika.com','$2y$10$jHaudbpE7P4OryKpRHEDheyTO62AziKX17urZtNI2ZqrS9zeuvoQe','aeTIeE2Ap4B8BfiuI1s0LXSkQi62yz785gEdFOJBxQV8alZBjfUouEJytada','2016-09-13 02:17:16','2016-11-15 02:47:06');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (3,'Addie Priwibowo','addie.priwibowo@acuatico.co.id','$2y$10$HpKkHa9TdxbG6P2jp12AZu5AoUMl6sUXhA.rFWdHWMhHZYOcrlUU.',NULL,'2016-09-19 06:05:25','2016-09-19 06:05:25');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (4,'Erikasandi','erik@erik.com','$2y$10$w2m6FgGWCdTgTVIj3OuOQ.3Xf9bdKtWgHYYdU5fyHTdJD7oivsvkS','w3gmwZAbvY4Nn3Xu1aJbDNfl4HkpmojBwis98Ovw93XORdyz1udfYDGLojqx','2016-09-27 02:23:39','2016-09-27 02:24:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
