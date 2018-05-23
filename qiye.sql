-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: qiye
-- ------------------------------------------------------
-- Server version	5.5.53

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `file` varchar(1000) NOT NULL COMMENT 'banner文件的地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES ('/admin/images/banner1.jpg,/admin/images/banner2.jpg,/admin/images/banner3.jpg');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `home_img` varchar(1000) NOT NULL COMMENT '首页图片',
  `content` varchar(10000) DEFAULT NULL COMMENT '详情内容',
  `sum` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES ('/admin/images/home_img.jpg','<p><img src=\"http://localqiye.com/images/company_bg.png\"/></p><h3 style=\"padding: 0px; margin: 0px; font-family: 微软雅黑; text-align: center; font-size: 14px; font-weight: normal; color: rgb(102, 102, 102); line-height: 80px; white-space: normal;\">公司介绍</h3><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉国际酒店用品有限公司是一家集生产、加工、销售酒店布草、布艺窗帘、宴会布草为一体的现代化企业，本着顾客至上、质量第一的服务宗旨，以优质、快捷、务实的品牌特	点赢得了广大客户及消费者的认可与信赖，经过多年的努力，具有产销结合专业配套的优势，可承担新开业大型宾馆酒店客房用品配套服务，专业为星级酒店、宾馆、会所、别墅等场 所设计加工制做床上用品、窗帘、宴会布草。本公司拥有全套纺织品生产设备 ，制作工艺成熟，完善的配套，良好的服务，赢得了广大客户和消费者的青睐。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉始终本着“客户是天、质量是地、人和为本”的企业理念，热情欢迎新老客户惠顾我公司，参观指导，洽谈业务，使我们同各位客户携手并进，共同发展。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉国际酒店用品有限公司是一家集生产、加工、销售酒店布草、布艺窗帘、宴会布草为一体的现代化企业，本着顾客至上、质量第一的服务宗旨，以优质、快捷、务实的品牌特 点赢得了广大客户及消费者的认可与信赖，经过多年的努力，具有产销结合专业配套的优势，可承担新开业大型宾馆酒店客房用品配套服务，专业为星级酒店、宾馆、会所、别墅等场 所设计加工制做床上用品、窗帘、宴会布草。本公司拥有全套纺织品生产设备 ，制作工艺成熟，完善的配套，良好的服务，赢得了广大客户和消费者的青睐。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉始终本着“客户是天、质量是地、人和为本”的企业理念，热情欢迎新老客户惠顾我公司，参观指导，洽谈业务，使我们同各位客户携手并进，共同发展。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉国际酒店用品有限公司是一家集生产、加工、销售酒店布草、布艺窗帘、宴会布草为一体的现代化企业，本着顾客至上、质量第一的服务宗旨，以优质、快捷、务实的品牌特 点赢得了广大客户及消费者的认可与信赖，经过多年的努力，具有产销结合专业配套的优势，可承担新开业大型宾馆酒店客房用品配套服务，专业为星级酒店、宾馆、会所、别墅等场 所设计加工制做床上用品、窗帘、宴会布草。本公司拥有全套纺织品生产设备 ，制作工艺成熟，完善的配套，良好的服务，赢得了广大客户和消费者的青睐。</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 30px; margin-left: 40px; font-family: 微软雅黑; color: rgb(153, 153, 153); line-height: 24px; text-indent: 2em; font-size: 14px; white-space: normal;\">正信永辉始终本着“客户是天、质量是地、人和为本”的企业理念，热情欢迎新老客户惠顾我公司，参观指导，洽谈业务，使我们同各位客户携手并进，共同发展。</p><p><br/></p>','质量第一的服务宗旨，以优质、快捷、务实的品牌特	点赢得了广大客户及消费者的认可与信赖，经过多年的努力，具有产销结合专业配套的优势，可承担新开业大型宾馆酒店客房用品配套服务，专业为星级酒店、宾馆、会所、别墅等场 所设计加工制做床上用品、窗帘、宴会布草。本公司拥有全套纺织品生产设备 ，制作工艺成熟，完善的配套，良好的服务，赢得了广大客户和消费者的青睐。');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logo`
--

DROP TABLE IF EXISTS `logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logo` (
  `file` varchar(1000) NOT NULL COMMENT 'logo文件的地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo`
--

LOCK TABLES `logo` WRITE;
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
INSERT INTO `logo` VALUES ('/admin/images/logo.png');
/*!40000 ALTER TABLE `logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '新闻的标题',
  `content` varchar(10000) DEFAULT NULL COMMENT '新闻的内容',
  `uid` int(10) DEFAULT NULL COMMENT '发布者id',
  `publish_time` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (5,'qqqqqqqqqqq','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq',1,'2018-05-18 16:00:44'),(6,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',1,'2018-05-18 16:01:13'),(3,'新闻11','xxxxxxxxxxxxxxxxxxxxxxxxx',1,'2018-05-18 11:08:07'),(7,'qqqqqqq','qqqqqqq',1,'2018-05-18 16:01:20'),(8,'aaa','aaaaaaaaa',1,'2018-05-18 16:01:25'),(9,'xxxxx','aaaaaaaaaaaaaa',1,'2018-05-18 16:01:30'),(10,'axaxax','aaaaaaaaxax',1,'2018-05-18 16:01:36'),(11,'qqqqqqqqq','qqqqqqqqqqqqqqqqqqqqqq',1,'2018-05-18 16:01:49'),(12,'qqqqqqqqqq','qqqqqqqqqqqqqqq',1,'2018-05-18 16:01:53'),(13,'qqqqqqqqqqqqqq','qqqqqqqqqqqqqqqqqqq',1,'2018-05-18 16:01:57'),(14,'qqqqqqq','qqqqqqqqqqqqqqqqq',1,'2018-05-18 16:02:02'),(15,'qqqqqqqqqqqqqqq','qqqqqqqqqqqqqqqqqqqqqqq',1,'2018-05-18 16:02:07'),(16,'qqqqqqqqqqqqq','qqqqqqqqqsssa',1,'2018-05-18 16:02:20'),(17,'aaaaaaaa','aaaaaaaaaaaaaaaaaaaaaaaaa',1,'2018-05-18 16:02:26'),(22,'xxxxxx','<p><img src=\"/ueditor/php/upload/image/20180522/1526954959380462.jpg\" title=\"1526954959380462.jpg\" alt=\"banner3.jpg\"/>xxxxxxxxxxxxxxxx</p>',1,'2018-05-22 09:41:45'),(23,'aaaaaaaaaaaaa','<p><img src=\"/ueditor/php/upload/image/20180522/1526954987811918.png\" title=\"1526954987811918.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180522/1526954987145759.jpg\" title=\"1526954987145759.jpg\"/></p><p><br/></p>',1,'2018-05-22 09:42:58');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_logo`
--

DROP TABLE IF EXISTS `news_logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_logo` (
  `file` varchar(1000) NOT NULL COMMENT 'news_logo文件的地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_logo`
--

LOCK TABLES `news_logo` WRITE;
/*!40000 ALTER TABLE `news_logo` DISABLE KEYS */;
INSERT INTO `news_logo` VALUES ('/admin/images/news.jpg');
/*!40000 ALTER TABLE `news_logo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-23  9:16:38
