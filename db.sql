/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.1.9-MariaDB : Database - aness2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aness2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `aness2`;

/*Table structure for table `about_us` */

DROP TABLE IF EXISTS `about_us`;

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(20) DEFAULT NULL,
  `company_details` text,
  PRIMARY KEY (`about_us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `about_us` */

insert  into `about_us`(`about_us_id`,`company_name`,`company_details`) values (2,'Dummy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus');

/*Table structure for table `portfolio` */

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(20) DEFAULT NULL,
  `portfolio_name` varchar(20) DEFAULT NULL,
  `portfolio_img` varchar(60) DEFAULT NULL,
  `portfolio_details` longtext,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `portfolio` */

insert  into `portfolio`(`portfolio_id`,`cat_id`,`portfolio_name`,`portfolio_img`,`portfolio_details`) values (39,3,'OBH Design','images/recent_work/as.jpeg','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(44,4,'Web','images/recent_work/1.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(45,1,'web delevloper','images/recent_work/2.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(46,1,'web delevloper','images/recent_work/3.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(47,1,'web delevloper','images/recent_work/4.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(48,1,'web delevloper','images/recent_work/5.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(49,2,'web delevloper','images/recent_work/6.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(50,2,'web delevloper','images/recent_work/7.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus'),(51,2,'web delevloper','images/recent_work/8.png','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus');

/*Table structure for table `portfolio_category` */

DROP TABLE IF EXISTS `portfolio_category`;

CREATE TABLE `portfolio_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `portfolio_category` */

insert  into `portfolio_category`(`cat_id`,`category`) values (1,'FASHION'),(2,'DESIGN'),(3,'EDUCATION'),(4,'DUMMY');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `services` varchar(50) DEFAULT NULL,
  `services_details` longtext,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`services_id`,`services`,`services_details`) values (1,'Web Development','aaaaaaaaaaaaaaaaClass aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(2,'Web Design','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(3,'Networks','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(4,'Hardware','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(5,'CCTV','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(6,'Graphic Design','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(7,'Printing','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.'),(8,'Web Hosting','Class aptent taciti sociosqu litora torquent conubia nos per inceptos himenaeos.');

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`slider_id`,`slider_img`) values (2,'images/2.jpg'),(9,'images/1.jpg'),(10,'images/3.jpg');

/*Table structure for table `social_links` */

DROP TABLE IF EXISTS `social_links`;

CREATE TABLE `social_links` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(20) DEFAULT NULL,
  `twiter_link` varchar(20) DEFAULT '#',
  `fb` varchar(20) DEFAULT '#',
  `gplus` varchar(20) DEFAULT '#',
  `linkedin` varchar(20) DEFAULT '#',
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `social_links` */

insert  into `social_links`(`link_id`,`member_id`,`twiter_link`,`fb`,`gplus`,`linkedin`) values (1,1,'#','#','#','#'),(2,2,'#','#','#','#'),(3,3,'#','#','#','#'),(4,4,'#','#','#','#'),(5,5,'#','#','#','#'),(6,6,'#','#','#','#'),(7,7,'#','#','#','#'),(8,8,'#','#','#','#'),(9,9,'#','#','#','#'),(10,10,'#','#','#','#'),(11,11,'#','#','#','#'),(12,12,'#','#','#','#'),(13,14,'#','#','#','#'),(14,15,'','','',''),(15,16,'#','#','#','#'),(16,17,'#','#','#','#'),(17,13,'#','#','#','#');

/*Table structure for table `team` */

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(20) DEFAULT NULL,
  `member_pic` varchar(50) DEFAULT NULL,
  `member_designation` varchar(20) DEFAULT NULL,
  `member_details` longtext,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `team` */

insert  into `team`(`member_id`,`member_name`,`member_pic`,`member_designation`,`member_details`) values (1,'DUMMY NAME','images/anees.jpg','dummmy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies '),(3,'DUMMY NAME','images/jhon.jpg','dummmy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies '),(4,'DUMMY NAME','images/jhon2.jpg','dummmy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies '),(5,'DUMMY NAME','images/jhon3.jpg','dummmy','											Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies \r\n										'),(11,'DUMMY NAME','images/jhon4.jpg','dummmy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies '),(12,'DUMMY NAME','images/jhon5.jpg','dummmy','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies '),(13,'aaaaaaaaaaaaa','images/jhon6.jpg','Developer','aaaaaaaaaaaaaaaaaaa');

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `testimonials_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonials_details` longtext,
  `testimonials_name` varchar(20) DEFAULT NULL,
  `testimonials_pic` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`testimonials_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `testimonials` */

insert  into `testimonials`(`testimonials_id`,`testimonials_details`,`testimonials_name`,`testimonials_pic`) values (10,'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus','Anees ur rashid','images/bb.jpg'),(11,'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus','Osama','images/jj.jpg');

/*Table structure for table `usr_user` */

DROP TABLE IF EXISTS `usr_user`;

CREATE TABLE `usr_user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(100) NOT NULL,
  `U_PASSWORD` varchar(500) NOT NULL,
  `EMP_NO` varchar(20) DEFAULT NULL,
  `IS_ACTIVE` varchar(1) NOT NULL,
  `GROUP_ID` int(11) NOT NULL,
  `E_USER_ID` int(11) DEFAULT NULL,
  `EUSERLOG_ID` int(11) DEFAULT NULL,
  `E_DATE_TIME` datetime DEFAULT NULL,
  `U_USER_ID` int(11) DEFAULT NULL,
  `UUSERLOG_ID` int(11) DEFAULT NULL,
  `U_DATE_TIME` datetime DEFAULT NULL,
  `FLAG` varchar(100) DEFAULT NULL,
  `SUP_ADMIN` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `UK_USER_NAME` (`USER_NAME`) USING BTREE,
  KEY `FK_usr_user_hrm_employees_emp_no` (`EMP_NO`) USING BTREE,
  KEY `FK_usr_user_usr_group_group_id` (`GROUP_ID`) USING BTREE,
  KEY `fk_usr_user_e_user_id_userlog_id` (`EUSERLOG_ID`,`E_USER_ID`) USING BTREE,
  KEY `fk_usr_user_u_user_id_userlog_id` (`UUSERLOG_ID`,`U_USER_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usr_user` */

insert  into `usr_user`(`USER_ID`,`USER_NAME`,`U_PASSWORD`,`EMP_NO`,`IS_ACTIVE`,`GROUP_ID`,`E_USER_ID`,`EUSERLOG_ID`,`E_DATE_TIME`,`U_USER_ID`,`UUSERLOG_ID`,`U_DATE_TIME`,`FLAG`,`SUP_ADMIN`) values (1,'superadmin','17c4520f6cfd1ab53d8745e84681eb49','0','1',0,0,NULL,'2014-03-24 23:40:55',1,2646,'2016-01-18 14:54:03',NULL,'Y');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
