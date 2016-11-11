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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_conditions` */

insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (1,'Good','Well maintained',2);
insert  into `asset_conditions`(`id`,`name`,`description`,`site_id`) values (2,'Fair','So so..',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_details` */

insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (1,1,'TEST','TEST','TEST',1,8,'2016-10-20',NULL,'TEST','TEST',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (2,2,'TEST','TEST','TEST',1,8,'2016-10-13',NULL,'TEST','TEST',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (3,3,'Civil spec','Encona','Civil function',1,8,NULL,'2016-11-11','test','test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (10,12,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,'TEST','TEST','2016-11-01','TEST','12','23',45,34,56);
insert  into `asset_details`(`id`,`asset_id`,`specification`,`serial_number`,`function`,`asset_condition_id`,`asset_performance_id`,`install_date`,`construction_date`,`condition_detail`,`performance_detail`,`reservoir_capacity`,`contractor`,`contract`,`operational_date`,`description`,`pipe_diameter`,`network_diameter`,`length`,`number_of_valve`,`number_of_pipe_bridge`) values (11,16,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,'ENCONA','NETWORK 04','2016-11-03','Description','44','44',44,44,44);

/*Table structure for table `asset_images` */

CREATE TABLE `asset_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asset_performances` */

insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (6,'Fair','Working well',1);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (7,'Bad','',1);
insert  into `asset_performances`(`id`,`name`,`description`,`site_id`) values (8,'Fair','',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `assets` */

insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (1,'TEST001','TEST-001','1','2016-10-26 05:07:00','2016-10-26 05:07:00',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (2,'TEST002','TEST-002','1','2016-10-26 08:25:24','2016-10-26 08:25:24',2,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (3,'CIV001','Test Civil','1','2016-11-01 07:33:07','2016-11-01 07:33:07',4,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (12,'NET002','Network Pipe','1','2016-11-02 06:58:40','2016-11-02 06:58:40',6,1);
insert  into `assets`(`id`,`code`,`name`,`location_id`,`created_at`,`updated_at`,`asset_type_id`,`site_id`) values (16,'NET004','NETWORK02','1','2016-11-02 07:10:46','2016-11-02 07:10:46',6,1);

/*Table structure for table `locations` */

CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `site_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `locations` */

insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (1,'Distribution','AAT ',NULL,0,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (2,'Intake','Intake on Distribution',NULL,1,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (3,'Production','WTP Sepatan',NULL,0,1);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (4,'Water Pump','Water pump on WTP',NULL,3,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (5,'Test Bawah Intake',NULL,NULL,2,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (6,'Test AAT','Location at AAT',NULL,0,2);
insert  into `locations`(`id`,`name`,`description`,`image_path`,`parent_id`,`site_id`) values (7,'Bawah bawahnya intek','',NULL,5,2);

/*Table structure for table `maintenance_images` */

CREATE TABLE `maintenance_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maintenance_id` int(10) unsigned NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `maintenance_images_maintenance_id_foreign` (`maintenance_id`),
  CONSTRAINT `maintenance_images_maintenance_id_foreign` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenances` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenance_images` */

insert  into `maintenance_images`(`id`,`maintenance_id`,`file_name`,`description`) values (3,2,'head-sample-03.jpg','rqwerqwerqwer');
insert  into `maintenance_images`(`id`,`maintenance_id`,`file_name`,`description`) values (5,2,'head-sample-01.jpg','');
insert  into `maintenance_images`(`id`,`maintenance_id`,`file_name`,`description`) values (6,1,'img-sample-01.jpg','');
insert  into `maintenance_images`(`id`,`maintenance_id`,`file_name`,`description`) values (8,7,'bg-section-sight.png','');

/*Table structure for table `maintenance_types` */

CREATE TABLE `maintenance_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenance_types` */

insert  into `maintenance_types`(`id`,`title`,`description`) values (1,'Annual Maintenance',NULL);
insert  into `maintenance_types`(`id`,`title`,`description`) values (2,'General Checkup',NULL);
insert  into `maintenance_types`(`id`,`title`,`description`) values (3,'Broken Fix',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maintenances` */

insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (1,2,1,'Penggantian spare part','Setelah diganti sih jadi ok','2016-10-12','2016-10-31 09:16:40','2016-11-01 04:10:19');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (2,2,2,'Check the oil tanksss','Good','2018-08-07','2016-10-31 09:27:56','2016-11-01 04:09:14');
insert  into `maintenances`(`id`,`asset_id`,`maintenance_type_id`,`description`,`performance`,`maintenance_date`,`created_at`,`updated_at`) values (7,3,1,'test','test','2016-01-11','2016-11-01 08:38:48','2016-11-01 08:38:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (1,'asset-management','Assets','',0,'dashboard','fa fa-building',NULL,NULL,'2016-09-20 03:41:23',200);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (2,'setting','Settings','setting',0,'add.menu','fa fa-wrench',NULL,NULL,'2016-09-20 03:41:33',900);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (4,'menu-management','Menu Management','menu',2,'add.menu',NULL,NULL,NULL,NULL,30);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (5,'user-management','User Management','user',2,'add.user',NULL,NULL,NULL,NULL,10);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (7,'site-management','Site Management','site',2,'add.user',NULL,NULL,NULL,NULL,20);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (8,'dashboard','Dashboard','dashboard',0,'dashboard','icon-home',NULL,NULL,NULL,100);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (12,'asset.menu','Asset Management','asset',1,'dashboard','',NULL,'2016-09-20 03:42:11','2016-09-20 03:42:11',100);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (13,'asset.condition','Condition','asset-condition',1,'setting','',NULL,'2016-09-20 04:07:20','2016-09-20 04:07:20',500);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (14,'asset.performance','Performance','asset-performance',1,'setting','',NULL,'2016-09-20 04:07:46','2016-09-20 04:07:46',600);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (15,'asset-type','Asset Type','asset-type',1,'setting','',NULL,'2016-09-20 08:13:35','2016-09-20 08:13:35',700);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (16,'asset.location','Location','asset-location',1,'setting','',NULL,'2016-09-21 06:14:44','2016-09-21 06:15:13',800);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (17,'asset.add','Add Asset','asset/add',12,'asset.add','',NULL,'2016-09-22 07:00:43','2016-10-31 06:27:28',200);
insert  into `menus`(`id`,`name`,`display`,`link`,`parent_id`,`permission`,`icon_class`,`description`,`created_at`,`updated_at`,`order`) values (18,'asset.list','Asset List','asset',12,'asset.add','',NULL,'2016-09-28 07:20:37','2016-10-31 06:27:24',100);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('1TsqRhUNK8qqFN3dxDGiHYMx03cwQ7f2YvdUNn7d',NULL,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVowV29kYW14c3l1emdOMkQ2RmJoSHhONVZRMkRzbWVMYVB2OWtjTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly90d2IubG9jYWwvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQ3ODY2NzgzMztzOjE6ImMiO2k6MTQ3ODY2NzgzMTtzOjE6ImwiO3M6MToiMCI7fX0=',1478667833);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('1z1tovpKT4V4EqQoGtwFvdWA4UZEJ0A35NiGjlYT',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2Y4U2o3VmlOWWljRG95bFZQTldZZjh6Z3IzZzBsYW5PN29vMzZlUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9hc3NldC5sb2NhbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc4NzQ3MTEzO3M6MToiYyI7aToxNDc4NzQ3MTEzO3M6MToibCI7czoxOiIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1478747113);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('mIkl6hLzWzZAGplOmBQXOJVLcSaxZTyzNyrUevck',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRjNJTTFsV052NTZLWDNXVXlHcUhSdERMZTJFUkZGTVhIT1RZOWNmUiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI0OiJodHRwOi8vYXNzZXQubG9jYWwvYXNzZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiZ1NpdGUiO2k6MjtzOjk6ImdTaXRlTmFtZSI7czozOiJBQVQiO3M6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc4MDcyMjMwO3M6MToiYyI7aToxNDc4MDY0NDIxO3M6MToibCI7czoxOiIwIjt9fQ==',1478072230);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('pStDK2CwUiiuZtkhIm6STBnAMmehyeUU1TEjTJYn',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVXpuNWxIdkNnUHdTQldWU0N4SHl0UWhRYklONzNCMDhTaVJTUk1OZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9hc3NldC5sb2NhbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc4NzQ3MTEzO3M6MToiYyI7aToxNDc4NzQ3MTEzO3M6MToibCI7czoxOiIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1478747113);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('ROzahccNrdBooey75TBSTNyhPovjOITY51injt9E',NULL,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoicjZ3ejRnUkliMGY2d3NTaU5HUzZxNko4bzZBRWhXeUxKZTJFeUs0YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9hc3NldC5sb2NhbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDc4MDg4MjU5O3M6MToiYyI7aToxNDc4MDg4MjU5O3M6MToibCI7czoxOiIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1478088259);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('xK43ysMJtfeDYiZUurFvO5EyFGyAWGWBYJU4P8vt',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZlh4UXhLOWREM0RCV1hxWm9vckt4emxCTGRoS1FsbHRRaTJHQUZacCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9hc3NldC5sb2NhbC9hc3NldCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NzgwODgyODY7czoxOiJjIjtpOjE0NzgwODgyNTk7czoxOiJsIjtzOjE6IjAiO319',1478088286);
insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('ypwKrK8iltcE9dIpPv7W27smbXFBF6lQaGK9f0iI',1,'192.168.10.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiODJaOXpvcndJZ2JydVVnYnZLMnpZemJOZ0o2QWtvM2R2U0dJS3dDMiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNDoiaHR0cDovL2Fzc2V0LmxvY2FsL2Fzc2V0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0Nzg3NDcyMTk7czoxOiJjIjtpOjE0Nzg3NDcxMTM7czoxOiJsIjtzOjE6IjAiO319',1478747219);

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

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Pasha Mahardika','me@pashamahardika.com','$2y$10$jHaudbpE7P4OryKpRHEDheyTO62AziKX17urZtNI2ZqrS9zeuvoQe','HaL349z4FYgwU03gmvtHrfZuS9Y9jvSKbXleFqn0hqGSyJMPNylwxAULNqcs','2016-09-13 02:17:16','2016-11-01 08:51:53');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (3,'Addie Priwibowo','addie.priwibowo@acuatico.co.id','$2y$10$HpKkHa9TdxbG6P2jp12AZu5AoUMl6sUXhA.rFWdHWMhHZYOcrlUU.',NULL,'2016-09-19 06:05:25','2016-09-19 06:05:25');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (4,'Erikasandi','erik@erik.com','$2y$10$w2m6FgGWCdTgTVIj3OuOQ.3Xf9bdKtWgHYYdU5fyHTdJD7oivsvkS','w3gmwZAbvY4Nn3Xu1aJbDNfl4HkpmojBwis98Ovw93XORdyz1udfYDGLojqx','2016-09-27 02:23:39','2016-09-27 02:24:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
