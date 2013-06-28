-- MySQL dump 10.13  Distrib 5.5.8, for Win32 (x86)
--
-- Host: localhost    Database: yii_frontaccounting
-- ------------------------------------------------------
-- Server version	5.5.8-log

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
-- Current Database: `yii_frontaccounting`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `yii_frontaccounting` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `yii_frontaccounting`;

--
-- Table structure for table `authassignment`
--

DROP TABLE IF EXISTS `authassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authassignment`
--

LOCK TABLES `authassignment` WRITE;
/*!40000 ALTER TABLE `authassignment` DISABLE KEYS */;
INSERT INTO `authassignment` VALUES ('Admin','1',NULL,'N;');
/*!40000 ALTER TABLE `authassignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitem`
--

DROP TABLE IF EXISTS `authitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitem`
--

LOCK TABLES `authitem` WRITE;
/*!40000 ALTER TABLE `authitem` DISABLE KEYS */;
INSERT INTO `authitem` VALUES ('Admin',2,NULL,NULL,'N;'),('Authenticated',2,NULL,NULL,'N;'),('Guest',2,NULL,NULL,'N;');
/*!40000 ALTER TABLE `authitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authitemchild`
--

DROP TABLE IF EXISTS `authitemchild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authitemchild`
--

LOCK TABLES `authitemchild` WRITE;
/*!40000 ALTER TABLE `authitemchild` DISABLE KEYS */;
/*!40000 ALTER TABLE `authitemchild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_area`
--

DROP TABLE IF EXISTS `fa_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COMMENT='original: areas';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_area`
--

LOCK TABLES `fa_area` WRITE;
/*!40000 ALTER TABLE `fa_area` DISABLE KEYS */;
INSERT INTO `fa_area` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Global__aaazzz_______________',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'area1 test___',0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'area2 test',1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area1',1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area2',0),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area3',0),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area4',0),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area5',0),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area6',0),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area7',0),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area8...',0),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area9',0),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area10',0),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area11',0),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area12',0),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area13',0),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area14',0),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area15',0),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area16',0),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area17',0),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area18',0),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area19',0),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area20',0),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area21',0),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area22...',0),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area23',0),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area24',0),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area25',0),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area26',0),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area27',0),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area28',0),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area29',0),(33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test area30',0),(34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'aaa',0),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'asdf',0),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'area1',1);
/*!40000 ALTER TABLE `fa_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_attachment`
--

DROP TABLE IF EXISTS `fa_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `transaction_type_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `unique_name` varchar(60) NOT NULL,
  `transaction_date` date NOT NULL,
  `file_name` varchar(60) NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_type` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_attachment_transaction_type` (`transaction_type_id`),
  CONSTRAINT `FK_attachment_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: attachments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_attachment`
--

LOCK TABLES `fa_attachment` WRITE;
/*!40000 ALTER TABLE `fa_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_audit_trail`
--

DROP TABLE IF EXISTS `fa_audit_trail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(60) DEFAULT NULL,
  `fiscal_year_id` int(11) NOT NULL,
  `general_ledger_date` date NOT NULL,
  `general_ledger_seq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Seq` (`fiscal_year_id`,`general_ledger_date`,`general_ledger_seq`),
  KEY `Type_and_Number` (`transaction_type_id`,`transaction_no`),
  KEY `FK_audit_trail_user` (`user_id`),
  CONSTRAINT `FK_audit_trail_fiscal_year` FOREIGN KEY (`fiscal_year_id`) REFERENCES `fa_fiscal_year` (`id`),
  CONSTRAINT `FK_audit_trail_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_audit_trail_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: audit_trial';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_audit_trail`
--

LOCK TABLES `fa_audit_trail` WRITE;
/*!40000 ALTER TABLE `fa_audit_trail` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_audit_trail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_bank_account`
--

DROP TABLE IF EXISTS `fa_bank_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `gl_account_id` int(11) NOT NULL,
  `bank_account_type_id` int(11) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `address` tinytext NOT NULL,
  `currency_id` int(11) NOT NULL,
  `as_default_currency_account` tinyint(1) NOT NULL,
  `last_reconciled_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ending_reconcile_balance` double NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bank_account_name` (`account_name`),
  KEY `bank_account_number` (`account_number`),
  KEY `FK_bank_account_currency` (`currency_id`),
  KEY `FK_bank_account_bank_account_type` (`bank_account_type_id`),
  KEY `FK_bank_account_general_ledger_account` (`gl_account_id`),
  CONSTRAINT `FK_bank_account_bank_account_type` FOREIGN KEY (`bank_account_type_id`) REFERENCES `fa_bank_account_type` (`id`),
  CONSTRAINT `FK_bank_account_currency` FOREIGN KEY (`currency_id`) REFERENCES `fa_currency` (`id`),
  CONSTRAINT `FK_bank_account_general_ledger_account` FOREIGN KEY (`gl_account_id`) REFERENCES `fa_gl_account` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: bank_accounts';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_bank_account`
--

LOCK TABLES `fa_bank_account` WRITE;
/*!40000 ALTER TABLE `fa_bank_account` DISABLE KEYS */;
INSERT INTO `fa_bank_account` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,'Current account','9999999999','Wachovia Bank','',5,1,'2012-12-13 02:49:28',0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,3,'Petty Cash account','N/A','N/A','',5,0,'2012-12-11 23:23:45',0,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,3,'Petty Cash account2','N/A','N/A','jl Jalan',1,0,'2012-12-11 23:23:45',0,0);
/*!40000 ALTER TABLE `fa_bank_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_bank_account_type`
--

DROP TABLE IF EXISTS `fa_bank_account_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_bank_account_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) DEFAULT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_bank_account_type`
--

LOCK TABLES `fa_bank_account_type` WRITE;
/*!40000 ALTER TABLE `fa_bank_account_type` DISABLE KEYS */;
INSERT INTO `fa_bank_account_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Savings Account','BT_TRANSFER'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Chequing Account','BT_CHEQUE'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Credit Account','BT_CREDIT'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cash Account','BT_CASH');
/*!40000 ALTER TABLE `fa_bank_account_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_bank_transaction`
--

DROP TABLE IF EXISTS `fa_bank_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_bank_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) DEFAULT NULL,
  `transaction_no` int(11) DEFAULT NULL,
  `bank_account_id` int(11) NOT NULL,
  `reference` varchar(40) DEFAULT NULL,
  `date` date NOT NULL,
  `amount` double NOT NULL,
  `dimension1_id` int(11) NOT NULL,
  `dimension2_id` int(11) NOT NULL,
  `person_type_id` int(11) NOT NULL COMMENT 'guess',
  `person_id` tinyblob,
  `reconciled_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_bank_transaction_transaction_type` (`transaction_type_id`),
  KEY `FK_bank_transaction_bank_account` (`bank_account_id`),
  KEY `FK_bank_transaction_dimensions_2` (`dimension2_id`),
  KEY `FK_bank_transaction_dimensions_1` (`dimension1_id`),
  KEY `FK_bank_transaction_payment_type` (`person_type_id`),
  CONSTRAINT `FK_bank_transaction_bank_account` FOREIGN KEY (`bank_account_id`) REFERENCES `fa_bank_account` (`id`),
  CONSTRAINT `FK_bank_transaction_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_bank_transaction_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_bank_transaction_payment_type` FOREIGN KEY (`person_type_id`) REFERENCES `fa_payment_type` (`id`),
  CONSTRAINT `FK_bank_transaction_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='original: bank_trans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_bank_transaction`
--

LOCK TABLES `fa_bank_transaction` WRITE;
/*!40000 ALTER TABLE `fa_bank_transaction` DISABLE KEYS */;
INSERT INTO `fa_bank_transaction` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,4,1,'1','2009-06-21',-3465,1,1,3,'2',NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,1,'','2009-06-21',-10,1,1,1,'1',NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,1,'','2009-06-21',-20,1,1,1,'0',NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,18,1,'1','2009-02-20',1000,1,1,0,'',NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,19,1,'2','2009-02-21',4000,1,1,0,'',NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,1,'1','2009-06-21',100,1,1,4,'3',NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,8,1,'1','2009-06-21',-50,1,1,4,'1',NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,1,'','2009-06-21',-10,1,1,1,'1',NULL),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,1,'','2009-06-21',-20,1,1,1,'0',NULL),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,1,'','2009-06-21',-10,1,1,1,'1',NULL),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,1,'','2009-06-21',-20,1,1,1,'0',NULL);
/*!40000 ALTER TABLE `fa_bank_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_bank_transfer_type`
--

DROP TABLE IF EXISTS `fa_bank_transfer_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_bank_transfer_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_bank_transfer_type`
--

LOCK TABLES `fa_bank_transfer_type` WRITE;
/*!40000 ALTER TABLE `fa_bank_transfer_type` DISABLE KEYS */;
INSERT INTO `fa_bank_transfer_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Transfer','BT_TRANSFER'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cheque','BT_CHEQUE'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Credit','BT_CREDIT'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cash','BT_CASH');
/*!40000 ALTER TABLE `fa_bank_transfer_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_bill_of_material`
--

DROP TABLE IF EXISTS `fa_bill_of_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_bill_of_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `parent` char(20) NOT NULL,
  `component_id` int(11) NOT NULL,
  `workcenter_added` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`parent`,`component_id`,`workcenter_added`,`location_id`),
  KEY `FK_bill_of_material_workcenter` (`workcenter_added`),
  KEY `FK_bill_of_material_location` (`location_id`),
  KEY `FK_bill_of_material_stock_master` (`component_id`),
  CONSTRAINT `FK_bill_of_material_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_bill_of_material_stock_master` FOREIGN KEY (`component_id`) REFERENCES `fa_stock_master` (`id`),
  CONSTRAINT `FK_bill_of_material_workcenter` FOREIGN KEY (`workcenter_added`) REFERENCES `fa_work_center` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: bom';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_bill_of_material`
--

LOCK TABLES `fa_bill_of_material` WRITE;
/*!40000 ALTER TABLE `fa_bill_of_material` DISABLE KEYS */;
INSERT INTO `fa_bill_of_material` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3400',1,1,1,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3400',2,1,1,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3400',3,1,1,1);
/*!40000 ALTER TABLE `fa_bill_of_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_budget_transaction`
--

DROP TABLE IF EXISTS `fa_budget_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_budget_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL COMMENT 'guess',
  `transaction_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `general_ledger_account_id` int(11) NOT NULL,
  `memo` tinytext NOT NULL,
  `amount` double NOT NULL,
  `dimension1_id` int(11) DEFAULT NULL,
  `dimension2_id` int(11) DEFAULT NULL,
  `person_type_id` int(11) DEFAULT NULL COMMENT 'guess',
  `person_id` tinyblob COMMENT 'why tinyblob',
  PRIMARY KEY (`id`),
  KEY `FK_budget_transaction_dimensions_2` (`dimension2_id`),
  KEY `FK_budget_transaction_dimensions_1` (`dimension1_id`),
  KEY `FK_budget_transaction_general_ledger_account` (`general_ledger_account_id`),
  KEY `FK_budget_transaction_transaction_type` (`transaction_type_id`),
  KEY `FK_budget_transaction_payment_type` (`person_type_id`),
  CONSTRAINT `FK_budget_transaction_general_ledger_account` FOREIGN KEY (`general_ledger_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_budget_transaction_payment_type` FOREIGN KEY (`person_type_id`) REFERENCES `fa_payment_type` (`id`),
  CONSTRAINT `FK_budget_transaction_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_budget_trans_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_budget_trans_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: budget_trans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_budget_transaction`
--

LOCK TABLES `fa_budget_transaction` WRITE;
/*!40000 ALTER TABLE `fa_budget_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_budget_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_comment`
--

DROP TABLE IF EXISTS `fa_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `memo` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: comments';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_comment`
--

LOCK TABLES `fa_comment` WRITE;
/*!40000 ALTER TABLE `fa_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_contact_association`
--

DROP TABLE IF EXISTS `fa_contact_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_contact_association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `contact_person_id` int(11) NOT NULL,
  `contact_category_id` int(11) NOT NULL,
  `entity_id` int(11) DEFAULT NULL COMMENT 'entity id in related class table',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`contact_person_id`,`contact_category_id`),
  KEY `FK_contact_association_contact_category` (`contact_category_id`),
  KEY `FK_contact_association_contact_person` (`contact_person_id`),
  CONSTRAINT `FK_contact_association_contact_category` FOREIGN KEY (`contact_category_id`) REFERENCES `fa_contact_category` (`id`),
  CONSTRAINT `FK_contact_association_contact_person` FOREIGN KEY (`contact_person_id`) REFERENCES `fa_contact_person` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COMMENT='original: crm_contacts';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_contact_association`
--

LOCK TABLES `fa_contact_association` WRITE;
/*!40000 ALTER TABLE `fa_contact_association` DISABLE KEYS */;
INSERT INTO `fa_contact_association` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,5,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,2),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,5,3),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,2),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,1,3),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,9,1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,9,3),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,11,2),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,12,2),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8,9,2),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,9,3),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,5,4),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,5,4),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14,5,4),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15,5,4),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,5,4),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17,5,4),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,18,5,4),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,19,5,4),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,5,4),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,21,5,4),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,5,4);
/*!40000 ALTER TABLE `fa_contact_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_contact_category`
--

DROP TABLE IF EXISTS `fa_contact_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_contact_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `contact_entity_id` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  `as_system` tinyint(1) NOT NULL COMMENT 'nonzero for core system usage',
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`contact_entity_id`,`name`),
  CONSTRAINT `FK_contact_category_contact_entity` FOREIGN KEY (`contact_entity_id`) REFERENCES `fa_contact_entity` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='original: crm_categories';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_contact_category`
--

LOCK TABLES `fa_contact_category` WRITE;
/*!40000 ALTER TABLE `fa_contact_category` DISABLE KEYS */;
INSERT INTO `fa_contact_category` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'General',2,'General contact data for customer branch (overrides company setting)',1,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Invoice',2,'Invoice posting (overrides company setting)',1,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Order',2,'Order confirmation (overrides company setting)',1,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Delivery',2,'Delivery coordination (overrides company setting)',1,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'General',1,'General contact data for customer',1,1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Order',1,'Order confirmation',1,1),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Delivery',1,'Delivery coordination',1,1),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Invoice',1,'Invoice posting',1,1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'General',3,'General contact data for supplier',1,1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Order',3,'Order confirmation',1,1),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Delivery',3,'Delivery coordination',1,1),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Invoice',3,'Invoice posting',1,1);
/*!40000 ALTER TABLE `fa_contact_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_contact_entity`
--

DROP TABLE IF EXISTS `fa_contact_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_contact_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_contact_entity`
--

LOCK TABLES `fa_contact_entity` WRITE;
/*!40000 ALTER TABLE `fa_contact_entity` DISABLE KEYS */;
INSERT INTO `fa_contact_entity` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Customer','customer'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Customer Branch','cust_branch'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier','supplier'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Shipper','shipper'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Company internal','company');
/*!40000 ALTER TABLE `fa_contact_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_contact_person`
--

DROP TABLE IF EXISTS `fa_contact_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_contact_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `name2` varchar(60) DEFAULT NULL,
  `reference` varchar(30) NOT NULL,
  `address` tinytext,
  `address2` tinytext,
  `phone` varchar(30) NOT NULL,
  `phone2` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `note` tinytext,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_contact_person_language` (`language_id`),
  KEY `reference` (`reference`),
  CONSTRAINT `FK_contact_person_language` FOREIGN KEY (`language_id`) REFERENCES `fa_language` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COMMENT='original: crm_persons';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_contact_person`
--

LOCK TABLES `fa_contact_person` WRITE;
/*!40000 ALTER TABLE `fa_contact_person` DISABLE KEYS */;
INSERT INTO `fa_contact_person` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','Beefeater','',NULL,'',NULL,NULL,'',NULL,NULL,'',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','Ghostbusters','',NULL,'',NULL,NULL,'',NULL,NULL,'',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','Brezan','',NULL,'',NULL,NULL,'',NULL,NULL,'',1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Main Branch','','Beefeater','',NULL,'','','','',NULL,NULL,'',1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Main Branch','','Ghostbusters','Address 1\nAddress 2\nAddress 3',NULL,'','','','',NULL,NULL,'',1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Main Branch','','Brezan','Address 1\nAddress 2\nAddress 3',NULL,'','','','',NULL,NULL,'',1),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Contact','','Junk Beer','Address 1\nAddress 2\nAddress 3',NULL,'+45 55667788','','','',NULL,NULL,'',1),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Luke','','Lucky Luke ref','Address 1\nAddress 2\nAddress 3',NULL,'(111) 222.333.444','','','',NULL,NULL,'',1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Makers','','Money Makers','Address 1\nAddress 2\nAddress 3',NULL,'+44 444 555 666','','','',NULL,NULL,'',1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'supplier person1','supplier person1','ref1','',NULL,'123-123','4546-456','','asdf@qwer.com',NULL,NULL,'',1),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'fn1','ln1','supplier person2 (tbl crm)','',NULL,'','','','',NULL,NULL,'',1),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'aaa','aaa','aaa','aaa',NULL,'aaa','aaa','aaa','aaa',NULL,NULL,'aaa',1),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','bbb','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','ccc','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','ddd','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','eee','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','fff','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','ggg','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','hhh','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','iii','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','jjj','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','kkk','',NULL,'',NULL,NULL,NULL,NULL,NULL,'',0);
/*!40000 ALTER TABLE `fa_contact_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_credit_status`
--

DROP TABLE IF EXISTS `fa_credit_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_credit_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` char(100) NOT NULL,
  `is_dissallow_invoice` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: credit_status';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_credit_status`
--

LOCK TABLES `fa_credit_status` WRITE;
/*!40000 ALTER TABLE `fa_credit_status` DISABLE KEYS */;
INSERT INTO `fa_credit_status` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Good History',0,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No more work until payment received',1,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'In liquidation',1,1);
/*!40000 ALTER TABLE `fa_credit_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_currency`
--

DROP TABLE IF EXISTS `fa_currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` char(3) NOT NULL,
  `name` varchar(60) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `hundreds_name` varchar(15) NOT NULL,
  `is_auto_update` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`code`),
  UNIQUE KEY `unique2` (`name`),
  UNIQUE KEY `unique3` (`country`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: currencies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_currency`
--

LOCK TABLES `fa_currency` WRITE;
/*!40000 ALTER TABLE `fa_currency` DISABLE KEYS */;
INSERT INTO `fa_currency` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'CAD','CA Dollars','$','Canada','Cents',1,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'DKK','DK Kroner','?','Denmark','Ore',1,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'EUR','Euro','?','Europe','Cents',1,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'GBP','Pounds','?','England','Pence',1,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'USD','US Dollars','$','United States','Cents',1,1);
/*!40000 ALTER TABLE `fa_currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_customer_allocation`
--

DROP TABLE IF EXISTS `fa_customer_allocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_customer_allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date NOT NULL,
  `from_transaction_type_id` int(11) DEFAULT NULL,
  `from_transaction_no` int(11) DEFAULT NULL,
  `to_transaction_type_id` int(11) DEFAULT NULL,
  `to_transaction_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `From` (`from_transaction_type_id`,`from_transaction_no`),
  KEY `To` (`to_transaction_type_id`,`to_transaction_no`),
  CONSTRAINT `FK_customer_allocation_transaction_type` FOREIGN KEY (`from_transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_customer_allocation_transaction_type_2` FOREIGN KEY (`to_transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: cust_allocations';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_customer_allocation`
--

LOCK TABLES `fa_customer_allocation` WRITE;
/*!40000 ALTER TABLE `fa_customer_allocation` DISABLE KEYS */;
INSERT INTO `fa_customer_allocation` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37.68,'2009-04-21',11,3,10,18);
/*!40000 ALTER TABLE `fa_customer_allocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_customer_branch`
--

DROP TABLE IF EXISTS `fa_customer_branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_customer_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `customer_head_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `physical_address` tinytext NOT NULL,
  `mailing_address` tinytext NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `sales_person_id` int(11) NOT NULL,
  `contact_name` varchar(60) NOT NULL,
  `default_location_id` int(11) NOT NULL,
  `tax_group_id` int(11) DEFAULT NULL,
  `sales_account_id` int(11) DEFAULT NULL,
  `sales_discount_account_id` int(11) DEFAULT NULL,
  `receivable_account_id` int(11) DEFAULT NULL,
  `payment_discount_account_id` int(11) DEFAULT NULL,
  `default_shipping_company_id` int(11) NOT NULL,
  `disable_transaction` tinyint(4) NOT NULL,
  `sales_size_id` int(11) DEFAULT NULL,
  `note` tinytext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`customer_head_id`,`name`),
  KEY `FK_customer_branch_area` (`area_id`),
  KEY `FK_customer_branch_tax_groups` (`tax_group_id`),
  KEY `FK_customer_branch_sales_person` (`sales_person_id`),
  KEY `FK_customer_branch_customer_head` (`customer_head_id`),
  KEY `FK_customer_branch_location` (`default_location_id`),
  KEY `FK_customer_branch_general_ledger_account_2` (`sales_discount_account_id`),
  KEY `FK_customer_branch_general_ledger_account_1` (`sales_account_id`),
  KEY `FK_customer_branch_general_ledger_account_3` (`receivable_account_id`),
  KEY `FK_customer_branch_general_ledger_account_4` (`payment_discount_account_id`),
  KEY `FK_customer_branch_shipping_company` (`default_shipping_company_id`),
  KEY `FK_customer_branch_sales_size` (`sales_size_id`),
  CONSTRAINT `FK_customer_branch_area` FOREIGN KEY (`area_id`) REFERENCES `fa_area` (`id`),
  CONSTRAINT `FK_customer_branch_customer_head` FOREIGN KEY (`customer_head_id`) REFERENCES `fa_customer_head` (`id`),
  CONSTRAINT `FK_customer_branch_general_ledger_account_1` FOREIGN KEY (`sales_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_customer_branch_general_ledger_account_2` FOREIGN KEY (`sales_discount_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_customer_branch_general_ledger_account_3` FOREIGN KEY (`receivable_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_customer_branch_general_ledger_account_4` FOREIGN KEY (`payment_discount_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_customer_branch_location` FOREIGN KEY (`default_location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_customer_branch_sales_person` FOREIGN KEY (`sales_person_id`) REFERENCES `fa_sales_person` (`id`),
  CONSTRAINT `FK_customer_branch_sales_size` FOREIGN KEY (`sales_size_id`) REFERENCES `fa_sales_size` (`id`),
  CONSTRAINT `FK_customer_branch_shipping_company` FOREIGN KEY (`default_shipping_company_id`) REFERENCES `fa_shipping_company` (`id`),
  CONSTRAINT `FK_customer_branch_tax_groups` FOREIGN KEY (`tax_group_id`) REFERENCES `fa_tax_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: cust_branch';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_customer_branch`
--

LOCK TABLES `fa_customer_branch` WRITE;
/*!40000 ALTER TABLE `fa_customer_branch` DISABLE KEYS */;
INSERT INTO `fa_customer_branch` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'Beefeater Ltd.','Beefeater','','Address 1\nAddress 2\nAddress 3',1,1,'Main Branch',1,2,NULL,42,3,41,1,0,1,'',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Ghostbusters Corp.','Ghostbusters','Address 1\nAddress 2\nAddress 3','Address 1\nAddress 2\nAddress 3',1,1,'Main Branch',1,1,57,42,3,41,1,0,1,'',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'Brezan','Brezan','Address 1\nAddress 2\nAddress 3','Address 1\nAddress 2\nAddress 3',1,1,'Main Branch',1,1,NULL,42,3,41,1,0,2,'',1);
/*!40000 ALTER TABLE `fa_customer_branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_customer_head`
--

DROP TABLE IF EXISTS `fa_customer_head`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_customer_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `physical_address` tinytext,
  `mailing_address` tinytext,
  `goods_and_services_tax_no` varchar(55) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `sales_type_id` int(11) NOT NULL,
  `dimension1_id` int(11) NOT NULL,
  `dimension2_id` int(11) NOT NULL,
  `credit_status_id` int(11) NOT NULL,
  `payment_term_id` int(11) DEFAULT NULL,
  `discount` double NOT NULL,
  `payment_discount` double NOT NULL,
  `credit_limit` float NOT NULL,
  `note` tinytext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`),
  KEY `FK_customer_master_currencies` (`currency_id`),
  KEY `FK_customer_master_dimensions_1` (`dimension1_id`),
  KEY `FK_customer_master_dimensions_2` (`dimension2_id`),
  KEY `FK_customer_master_credit_status` (`credit_status_id`),
  KEY `FK_customer_master_payment_term` (`payment_term_id`),
  KEY `FK_customer_master_sales_type` (`sales_type_id`),
  CONSTRAINT `FK_customer_head_currency` FOREIGN KEY (`currency_id`) REFERENCES `fa_currency` (`id`),
  CONSTRAINT `FK_customer_master_credit_status` FOREIGN KEY (`credit_status_id`) REFERENCES `fa_credit_status` (`id`),
  CONSTRAINT `FK_customer_master_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_customer_master_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_customer_master_payment_term` FOREIGN KEY (`payment_term_id`) REFERENCES `fa_payment_term` (`id`),
  CONSTRAINT `FK_customer_master_sales_type` FOREIGN KEY (`sales_type_id`) REFERENCES `fa_sales_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: debtors_master';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_customer_head`
--

LOCK TABLES `fa_customer_head` WRITE;
/*!40000 ALTER TABLE `fa_customer_head` DISABLE KEYS */;
INSERT INTO `fa_customer_head` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Beefeater Ltd.','Beefeater','Addr 1\nAddr 2\nAddr 3',NULL,'345678',4,2,1,1,1,3,0,0,1000,'',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ghostbusters Corp.','Ghostbusters','Address 1\nAddress 2\nAddress 3',NULL,'2222222',5,1,1,1,1,4,0,0,1000,'',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Brezan','Brezan','Address 1\nAddress 2\nAddress 3',NULL,'7777777',3,2,1,1,1,3,0,0,1000,'',1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'new customer1','customer1 short','',NULL,'',5,1,1,1,1,4,0,0,1000,'',1);
/*!40000 ALTER TABLE `fa_customer_head` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_customer_transaction`
--

DROP TABLE IF EXISTS `fa_customer_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_customer_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `as_version` tinyint(1) NOT NULL,
  `customer_head_id` int(11) NOT NULL,
  `customer_branch_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `reference` varchar(60) NOT NULL,
  `sales_type_id` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `overdue_amount` double NOT NULL,
  `overdue_goods_and_services_tax` double NOT NULL,
  `overdue_freight` double NOT NULL,
  `overdue_freight_tax` double NOT NULL,
  `overdue_discount` double NOT NULL,
  `allocation` double NOT NULL,
  `rate` double NOT NULL,
  `shipping_company_id` int(11) DEFAULT NULL,
  `dimension1_id` int(11) DEFAULT NULL,
  `dimension2_id` int(11) DEFAULT NULL,
  `payment_term_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_customer_transaction_dimensions_1` (`dimension1_id`),
  KEY `FK_customer_transaction_dimensions_2` (`dimension2_id`),
  KEY `FK_customer_transaction_transaction_type` (`transaction_type_id`),
  KEY `FK_customer_transaction_customer_branch` (`customer_branch_id`),
  KEY `FK_customer_transaction_shipping_company` (`shipping_company_id`),
  KEY `FK_customer_transaction_payment_term` (`payment_term_id`),
  KEY `debtor_no` (`customer_head_id`),
  KEY `FK_customer_transaction_sales_type` (`sales_type_id`),
  KEY `FK_customer_transaction_sales_order` (`sales_order_id`),
  CONSTRAINT `FK_customer_transaction_customer_branch` FOREIGN KEY (`customer_branch_id`) REFERENCES `fa_customer_branch` (`id`),
  CONSTRAINT `FK_customer_transaction_customer_head` FOREIGN KEY (`customer_head_id`) REFERENCES `fa_customer_head` (`id`),
  CONSTRAINT `FK_customer_transaction_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_customer_transaction_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_customer_transaction_payment_term` FOREIGN KEY (`payment_term_id`) REFERENCES `fa_payment_term` (`id`),
  CONSTRAINT `FK_customer_transaction_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `fa_sales_order` (`id`),
  CONSTRAINT `FK_customer_transaction_sales_type` FOREIGN KEY (`sales_type_id`) REFERENCES `fa_sales_type` (`id`),
  CONSTRAINT `FK_customer_transaction_shipping_company` FOREIGN KEY (`shipping_company_id`) REFERENCES `fa_shipping_company` (`id`),
  CONSTRAINT `FK_customer_transaction_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='original: debtor_trans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_customer_transaction`
--

LOCK TABLES `fa_customer_transaction` WRITE;
/*!40000 ALTER TABLE `fa_customer_transaction` DISABLE KEYS */;
INSERT INTO `fa_customer_transaction` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,17,0,2,2,'2009-06-21','2009-06-22','1',1,2,50,2.5,0,0,0,0,1,1,1,1,4),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,18,1,3,3,'2009-06-21','2009-07-01','2',2,3,35.89,1.79,0,0,0,37.68,1.3932,1,2,1,3),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,0,2,2,'2009-06-21','2009-06-22','3',1,5,50,0,5,0,0,0,1,1,1,1,4),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,0,3,3,'2009-06-21','0000-00-00','1',2,3,35.89,1.79,0,0,0,37.68,1.3932,1,2,1,3),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,2,0,1,1,'2009-06-21','2009-06-22','1',2,1,60.8,0,10,0,0,0,1.6445729799917,1,1,1,3),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,3,1,2,2,'2009-06-21','2009-06-22','auto',1,2,50,2.5,0,0,0,0,1,1,1,1,4),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,4,1,3,3,'2009-06-21','2009-07-01','auto',2,3,35.89,1.79,0,0,0,0,1.3932,1,2,1,3),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,5,1,2,2,'2009-06-21','2009-06-22','auto',1,5,50,0,5,0,0,0,1,1,1,1,4);
/*!40000 ALTER TABLE `fa_customer_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_customer_transaction_item`
--

DROP TABLE IF EXISTS `fa_customer_transaction_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_customer_transaction_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `customer_transaction_id` int(11) DEFAULT NULL,
  `stock_master_id` int(11) DEFAULT NULL,
  `description` tinytext,
  `price_per_unit` double NOT NULL,
  `tax_per_unit` double NOT NULL,
  `quantity` double NOT NULL,
  `discount_percent` double NOT NULL,
  `standard_cost` double NOT NULL,
  `quantity_done` double NOT NULL,
  `src_id` int(11) NOT NULL COMMENT 'not clear',
  PRIMARY KEY (`id`),
  KEY `FK_customer_transaction_detail_customer_transaction` (`customer_transaction_id`),
  KEY `FK_customer_transaction_item_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_customer_transaction_detail_customer_transaction` FOREIGN KEY (`customer_transaction_id`) REFERENCES `fa_customer_transaction` (`id`),
  CONSTRAINT `FK_customer_transaction_item_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='original: debtor_trans_details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_customer_transaction_item`
--

LOCK TABLES `fa_customer_transaction_item` WRITE;
/*!40000 ALTER TABLE `fa_customer_transaction_item` DISABLE KEYS */;
INSERT INTO `fa_customer_transaction_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,'17inch VGA Monitor',30.4,0,2,0,10,0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,1,'17inch VGA Monitor',50,2.5,1,0,10,1,2),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'17inch VGA Monitor',50,2.5,1,0,10,2,2),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,1,'17inch VGA Monitor',35.89,1.79,1,0,10,1,3),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,'17inch VGA Monitor',35.89,1.79,1,0,10,1,4),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8,1,'17inch VGA Monitor',50,2.38,1,0,10,1,5),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,'17inch VGA Monitor',50,2.38,1,0,10,0,6),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,'17inch VGA Monitor',35.89,1.79,1,0,10,0,5);
/*!40000 ALTER TABLE `fa_customer_transaction_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_dimension`
--

DROP TABLE IF EXISTS `fa_dimension`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_dimension` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `reference` varchar(60) NOT NULL COMMENT 'not clear',
  `name` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT 'not clear',
  `is_closed` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reference` (`reference`),
  KEY `date_` (`date`),
  KEY `due_date` (`due_date`),
  KEY `type_` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: dimensions';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_dimension`
--

LOCK TABLES `fa_dimension` WRITE;
/*!40000 ALTER TABLE `fa_dimension` DISABLE KEYS */;
INSERT INTO `fa_dimension` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','Support',1,0,'2009-06-21','2015-07-11'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','Development',1,0,'2009-06-21','2015-07-11'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','test Dimension Entry1',1,1,'2012-11-30','2011-12-01'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4','test Dimension Entry2',1,0,'2012-11-30','2012-12-20');
/*!40000 ALTER TABLE `fa_dimension` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_dimension_tag_association`
--

DROP TABLE IF EXISTS `fa_dimension_tag_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_dimension_tag_association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `dimension_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dimension_id_tag_id` (`dimension_id`,`tag_id`),
  KEY `FK_dimension_tag_association_tag` (`tag_id`),
  KEY `FK_dimension_tag_association_dimension` (`dimension_id`),
  CONSTRAINT `FK_dimension_tag_association_dimension` FOREIGN KEY (`dimension_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_dimension_tag_association_tag` FOREIGN KEY (`tag_id`) REFERENCES `fa_tag` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: tag_associations';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_dimension_tag_association`
--

LOCK TABLES `fa_dimension_tag_association` WRITE;
/*!40000 ALTER TABLE `fa_dimension_tag_association` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_dimension_tag_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_exchange_rate`
--

DROP TABLE IF EXISTS `fa_exchange_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_exchange_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `currency_id` int(11) NOT NULL,
  `rate_buy` double NOT NULL,
  `rate_sell` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `curr_code` (`currency_id`,`date`),
  CONSTRAINT `FK_exchange_rate_currency` FOREIGN KEY (`currency_id`) REFERENCES `fa_currency` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: exchange_rates';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_exchange_rate`
--

LOCK TABLES `fa_exchange_rate` WRITE;
/*!40000 ALTER TABLE `fa_exchange_rate` DISABLE KEYS */;
INSERT INTO `fa_exchange_rate` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0.18717252868313,0.18717252868313,'2009-06-21'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1.6445729799917,1.6445729799917,'2009-06-21'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1.3932,1.3932,'2009-06-21'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0.1982,0.1982,'2012-12-05');
/*!40000 ALTER TABLE `fa_exchange_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_fiscal_year`
--

DROP TABLE IF EXISTS `fa_fiscal_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_fiscal_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `is_closed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`begin`),
  UNIQUE KEY `unique2` (`end`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: fiscal_year';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_fiscal_year`
--

LOCK TABLES `fa_fiscal_year` WRITE;
/*!40000 ALTER TABLE `fa_fiscal_year` DISABLE KEYS */;
INSERT INTO `fa_fiscal_year` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2008-01-01','2008-12-31',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2009-01-01','2009-12-31',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2010-01-01','2010-12-31',0),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2011-01-01','2011-12-31',0);
/*!40000 ALTER TABLE `fa_fiscal_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_gl_account`
--

DROP TABLE IF EXISTS `fa_gl_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_gl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` varchar(15) NOT NULL,
  `code2` varchar(15) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `gl_account_type_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account_name` (`name`),
  KEY `accounts_by_type` (`gl_account_type_id`),
  CONSTRAINT `FK_general_ledger_account_general_ledger_account_type` FOREIGN KEY (`gl_account_type_id`) REFERENCES `fa_gl_account_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1 COMMENT='original: chart_master';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_gl_account`
--

LOCK TABLES `fa_gl_account` WRITE;
/*!40000 ALTER TABLE `fa_gl_account` DISABLE KEYS */;
INSERT INTO `fa_gl_account` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1060','','Checking Account',1,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1065','','Petty Cash',1,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1200','','Accounts Receivables',1,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1205','','Allowance for doubtful accounts',1,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1510','','Inventory',2,1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1520','','Stocks of Raw Materials',2,1),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1530','','Stocks of Work In Progress',2,1),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1540','','Stocks of Finsihed Goods',2,1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1550','','Goods Received Clearing account',2,1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1820','','Office Furniture &amp; Equipment',3,1),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1825','','Accum. Amort. -Furn. &amp; Equip.',3,1),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1840','','Vehicle',3,1),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1845','','Accum. Amort. -Vehicle',3,1),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2100','','Accounts Payable',4,1),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2110','','Accrued Income Tax - Federal',4,1),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2120','','Accrued Income Tax - State',4,1),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2130','','Accrued Franchise Tax',4,1),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2140','','Accrued Real &amp; Personal Prop Tax',4,1),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2150','','Sales Tax',4,1),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2160','','Accrued Use Tax Payable',4,1),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2210','','Accrued Wages',4,1),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2220','','Accrued Comp Time',4,1),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2230','','Accrued Holiday Pay',4,1),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2240','','Accrued Vacation Pay',4,1),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2310','','Accr. Benefits - 401K',4,1),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2320','','Accr. Benefits - Stock Purchase',4,1),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2330','','Accr. Benefits - Med, Den',4,1),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2340','','Accr. Benefits - Payroll Taxes',4,1),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2350','','Accr. Benefits - Credit Union',4,1),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2360','','Accr. Benefits - Savings Bond',4,1),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2370','','Accr. Benefits - Garnish',4,1),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2380','','Accr. Benefits - Charity Cont.',4,1),(33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2620','','Bank Loans',5,1),(34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2680','','Loans from Shareholders',5,1),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3350','','Common Shares',6,1),(36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3590','','Retained Earnings - prior years',7,1),(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4010','','Sales',8,1),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4430','','Shipping &amp; Handling',9,1),(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4440','','Interest',9,1),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4450','','Foreign Exchange Gain',9,1),(41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4500','','Prompt Payment Discounts',9,1),(42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4510','','Discounts Given',9,1),(43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5010','','Cost of Goods Sold - Retail',10,1),(44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5020','','Material Usage Varaiance',10,1),(45,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5030','','Consumable Materials',10,1),(46,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5040','','Purchase price Variance',10,1),(47,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5050','','Purchases of materials',10,1),(48,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5060','','Discounts Received',10,1),(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5100','','Freight',10,1),(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5410','','Wages &amp; Salaries',11,1),(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5420','','Wages - Overtime',11,1),(52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5430','','Benefits - Comp Time',11,1),(53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5440','','Benefits - Payroll Taxes',11,1),(54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5450','','Benefits - Workers Comp',11,1),(55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5460','','Benefits - Pension',11,1),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5470','','Benefits - General Benefits',11,1),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5510','','Inc Tax Exp - Federal',11,1),(58,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5520','','Inc Tax Exp - State',11,1),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5530','','Taxes - Real Estate',11,1),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5540','','Taxes - Personal Property',11,1),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5550','','Taxes - Franchise',11,1),(62,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5560','','Taxes - Foreign Withholding',11,1),(63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5610','','Accounting &amp; Legal',12,1),(64,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5615','','Advertising &amp; Promotions',12,1),(65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5620','','Bad Debts',12,1),(66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5660','','Amortization Expense',12,1),(67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5685','','Insurance',12,1),(68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5690','','Interest &amp; Bank Charges',12,1),(69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5700','','Office Supplies',12,1),(70,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5760','','Rent',12,1),(71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5765','','Repair &amp; Maintenance',12,1),(72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5780','','Telephone',12,1),(73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5785','','Travel &amp; Entertainment',12,1),(74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5790','','Utilities',12,1),(75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5795','','Registrations',12,1),(76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5800','','Licenses',12,1),(77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5810','','Foreign Exchange Loss',12,1),(78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9990','','Year Profit/Loss',12,1);
/*!40000 ALTER TABLE `fa_gl_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_gl_account_class`
--

DROP TABLE IF EXISTS `fa_gl_account_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_gl_account_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `old_id` tinyint(1) NOT NULL COMMENT 'to be deleted',
  `old_ctype_status` tinyint(1) NOT NULL COMMENT 'to be deleted',
  `old_abbreviation` varchar(50) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='original: chart_class. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_gl_account_class`
--

LOCK TABLES `fa_gl_account_class` WRITE;
/*!40000 ALTER TABLE `fa_gl_account_class` DISABLE KEYS */;
INSERT INTO `fa_gl_account_class` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'none',0,0,0,'CL_NONE'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Assets',1,1,1,'CL_ASSETS'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Liabilities',1,2,2,'CL_LIABILITIES'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Equity',1,5,3,'CL_EQUITY'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Income',1,3,4,'CL_INCOME'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cost of Goods Sold',1,6,5,'CL_COGS'),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Expense',1,4,6,'CL_EXPENSE');
/*!40000 ALTER TABLE `fa_gl_account_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_gl_account_type`
--

DROP TABLE IF EXISTS `fa_gl_account_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_gl_account_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `gl_account_class_id` int(11) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`),
  KEY `class_id` (`gl_account_class_id`),
  CONSTRAINT `FK_general_ledger_account_type_general_ledger_account_class` FOREIGN KEY (`gl_account_class_id`) REFERENCES `fa_gl_account_class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='original: chart_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_gl_account_type`
--

LOCK TABLES `fa_gl_account_type` WRITE;
/*!40000 ALTER TABLE `fa_gl_account_type` DISABLE KEYS */;
INSERT INTO `fa_gl_account_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Current Assets',1,'',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Inventory Assets',1,'',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Capital Assets',1,'',1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Current Liabilities',2,'',1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Long Term Liabilities',2,'',1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Share Capital',2,'',1),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retained Earnings',2,'',1),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sales Revenue',4,'',1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Other Revenue',4,'',1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cost of Goods Sold',6,'',1),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Payroll Expenses',6,'',1),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'General and Administrative Expenses',6,'',1);
/*!40000 ALTER TABLE `fa_gl_account_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_gl_transaction`
--

DROP TABLE IF EXISTS `fa_gl_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_gl_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL COMMENT 'guess',
  `transaction_no` int(11) NOT NULL COMMENT 'guess',
  `transaction_date` date NOT NULL,
  `gl_account_id` int(11) NOT NULL,
  `memo` tinytext NOT NULL,
  `amount` double NOT NULL,
  `dimension1_id` int(11) NOT NULL,
  `dimension2_id` int(11) NOT NULL,
  `person_type_id` int(11) DEFAULT NULL COMMENT 'guess',
  `person_id` tinyblob,
  PRIMARY KEY (`id`),
  KEY `Type_and_Number` (`transaction_type_id`,`transaction_no`),
  KEY `dimension_id` (`dimension1_id`),
  KEY `dimension2_id` (`dimension2_id`),
  KEY `tran_date` (`transaction_date`),
  KEY `FK_general_ledger_transaction_payment_type` (`person_type_id`),
  KEY `FK_general_ledger_transaction_general_ledger_account_2` (`gl_account_id`),
  CONSTRAINT `FK_general_ledger_transaction_general_ledger_account_2` FOREIGN KEY (`gl_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_general_ledger_transaction_payment_type` FOREIGN KEY (`person_type_id`) REFERENCES `fa_payment_type` (`id`),
  CONSTRAINT `FK_general_ledger_transaction_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_gl_trans_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_gl_trans_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1 COMMENT='original: gl_trans';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_gl_transaction`
--

LOCK TABLES `fa_gl_transaction` WRITE;
/*!40000 ALTER TABLE `fa_gl_transaction` DISABLE KEYS */;
INSERT INTO `fa_gl_transaction` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',14,'',-3465,1,1,3,'2'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',5,'',1000,1,1,3,'2'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',5,'',1100,1,1,3,'2'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',5,'',1200,1,1,3,'2'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',19,'',165,1,1,3,'2'),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,4,'2009-06-21',14,'',3465,1,1,3,'2'),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,4,'2009-06-21',1,'',-3465,1,1,3,'2'),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',5,'',-100,1,1,NULL,''),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',5,'',-110,1,1,NULL,''),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',5,'',-120,1,1,NULL,''),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',1,'Overhead Cost',-10,1,1,1,'1'),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',7,'Overhead Cost',10,1,1,1,'1'),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',1,'Labour Cost',-20,1,1,1,'0'),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',7,'Labour Cost',20,1,1,1,'0'),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,1,'2009-06-21',5,'',330,1,1,NULL,''),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,2,'2009-06-21',43,'',20,1,1,2,'1'),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,2,'2009-06-21',5,'',-20,1,1,2,'1'),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,3,'2009-06-21',43,'',10,1,1,2,'2'),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,3,'2009-06-21',5,'',-10,1,1,2,'2'),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,17,'2009-06-21',37,'',-50,1,1,2,'2'),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,17,'2009-06-21',3,'',52.5,1,1,2,'2'),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,17,'2009-06-21',19,'',-2.5,1,1,2,'2'),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,4,'2009-06-21',43,'',10,2,1,2,'3'),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,4,'2009-06-21',5,'',-10,1,1,2,'3'),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,18,'2009-06-21',37,'',-50,2,1,2,'3'),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,18,'2009-06-21',3,'',52.5,1,1,2,'3'),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,18,'2009-06-21',19,'',-2.5,1,1,2,'3'),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,18,'2009-02-20',1,'',1000,1,1,NULL,''),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,18,'2009-02-20',35,'',-1000,1,1,NULL,''),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,19,'2009-02-21',1,'',4000,1,1,NULL,''),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,19,'2009-02-21',35,'',-4000,1,1,NULL,''),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,3,'2009-06-21',5,'',-20,1,1,NULL,''),(33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,3,'2009-06-21',5,'',-22,1,1,NULL,''),(34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,3,'2009-06-21',5,'',-24,1,1,NULL,''),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,3,'2009-06-21',8,'',66,1,1,NULL,''),(36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,'2009-06-21',19,'Cash Sales',-4.76,1,1,4,'3'),(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,'2009-06-21',37,'Cash Sales',-95.24,1,1,4,'3'),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,'2009-06-21',1,'',100,1,1,4,'3'),(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,8,'2009-06-21',19,'Maintenance',2.38,1,1,4,'1'),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,8,'2009-06-21',71,'Maintenance',47.62,1,1,4,'1'),(41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,8,'2009-06-21',1,'',-50,1,1,4,'1'),(42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,8,'2009-06-21',14,'',-20,1,1,3,'2'),(43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,8,'2009-06-21',19,'',0.95,1,1,3,'2'),(44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,8,'2009-06-21',72,'',19.05,1,1,3,'2'),(45,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,4,'2009-06-21',5,'',-40,1,1,NULL,''),(46,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,4,'2009-06-21',5,'',-44,1,1,NULL,''),(47,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,4,'2009-06-21',5,'',-48,1,1,NULL,''),(48,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,4,'2009-06-21',8,'',132,1,1,NULL,''),(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,2,'2009-06-21',5,'',-20,1,1,NULL,''),(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,2,'2009-06-21',5,'',-22,1,1,NULL,''),(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,2,'2009-06-21',5,'',-24,1,1,NULL,''),(52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,2,'2009-06-21',8,'',66,1,1,NULL,''),(53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',5,'',-50,1,1,NULL,''),(54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',5,'',-55,1,1,NULL,''),(55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',5,'',-60,1,1,NULL,''),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',1,'Overhead Cost',-10,1,1,1,'1'),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',7,'Overhead Cost',10,1,1,1,'1'),(58,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',1,'Labour Cost',-20,1,1,1,'0'),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',7,'Labour Cost',20,1,1,1,'0'),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,5,'2009-06-21',8,'',165,1,1,NULL,''),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,6,'2009-06-21',5,'',50,1,1,NULL,''),(62,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,6,'2009-06-21',5,'',55,1,1,NULL,''),(63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,6,'2009-06-21',5,'',60,1,1,NULL,''),(64,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,6,'2009-06-21',8,'',-165,1,1,NULL,''),(65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',5,'',20,1,1,NULL,''),(66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',5,'',22,1,1,NULL,''),(67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',5,'',24,1,1,NULL,''),(68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',1,'Overhead Cost',-10,1,1,1,'1'),(69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',7,'Overhead Cost',10,1,1,1,'1'),(70,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',1,'Labour Cost',-20,1,1,1,'0'),(71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',7,'Labour Cost',20,1,1,1,'0'),(72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,7,'2009-06-21',8,'',-66,1,1,NULL,''),(73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,5,'2009-06-21',43,'',10,1,1,2,'2'),(74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,5,'2009-06-21',5,'',-10,1,1,2,'2'),(75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,'2009-06-21',37,'',-47.62,1,1,2,'2'),(76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,'2009-06-21',3,'',55,1,1,2,'2'),(77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,'2009-06-21',38,'',-5,1,1,2,'2'),(78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,'2009-06-21',19,'',-2.38,1,1,2,'2'),(79,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',43,'',-10,2,1,2,'3'),(80,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',5,'',10,1,1,2,'3'),(81,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',37,'',50,2,1,2,'3'),(82,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',3,'',-52.5,1,1,2,'3'),(83,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',19,'',2.5,1,1,2,'3'),(84,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,20,'2009-12-31',36,'Closing Year',-91.19,1,1,NULL,NULL),(85,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,20,'2009-12-31',78,'Closing Year',91.19,1,1,NULL,NULL);
/*!40000 ALTER TABLE `fa_gl_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_grn_batch`
--

DROP TABLE IF EXISTS `fa_grn_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_grn_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_order_id` int(11) NOT NULL,
  `reference` varchar(60) NOT NULL COMMENT 'not clear',
  `delivery_date` date NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_date` (`delivery_date`),
  KEY `purch_order_no` (`purchase_order_id`),
  KEY `FK_grn_batch_locations` (`location_id`),
  KEY `FK_grn_batch_supplier` (`supplier_id`),
  CONSTRAINT `FK_grn_batch_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_grn_batch_purchase_order` FOREIGN KEY (`purchase_order_id`) REFERENCES `fa_purchase_order` (`id`),
  CONSTRAINT `FK_grn_batch_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `fa_supplier` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: grn_batch. grn is good received note.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_grn_batch`
--

LOCK TABLES `fa_grn_batch` WRITE;
/*!40000 ALTER TABLE `fa_grn_batch` DISABLE KEYS */;
INSERT INTO `fa_grn_batch` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,'1','2009-06-21',1);
/*!40000 ALTER TABLE `fa_grn_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_grn_batch_item`
--

DROP TABLE IF EXISTS `fa_grn_batch_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_grn_batch_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `grn_batch_id` int(11) NOT NULL,
  `purchase_order_item_id` int(11) NOT NULL,
  `stock_item_id` int(11) NOT NULL COMMENT 'guess',
  `description` tinytext,
  `quantity_record` double NOT NULL,
  `quantity_inv` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grn_batch_item_purchase_order_item` (`purchase_order_item_id`),
  KEY `FK_grn_batch_item_grn_batch` (`grn_batch_id`),
  KEY `FK_grn_batch_item_stock_item` (`stock_item_id`),
  CONSTRAINT `FK_goods_received_note_batch_item_goods_received_note_batch` FOREIGN KEY (`grn_batch_id`) REFERENCES `fa_grn_batch` (`id`),
  CONSTRAINT `FK_grn_batch_item_purchase_order_item` FOREIGN KEY (`purchase_order_item_id`) REFERENCES `fa_purchase_order_item` (`id`),
  CONSTRAINT `FK_grn_batch_item_stock_item` FOREIGN KEY (`stock_item_id`) REFERENCES `fa_stock_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: grn_items. grn is good received note.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_grn_batch_item`
--

LOCK TABLES `fa_grn_batch_item` WRITE;
/*!40000 ALTER TABLE `fa_grn_batch_item` DISABLE KEYS */;
INSERT INTO `fa_grn_batch_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,'17inch VGA Monitor',100,100),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,2,'32MB VGA Card',100,100),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,3,'52x CD Drive',100,100);
/*!40000 ALTER TABLE `fa_grn_batch_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_language`
--

DROP TABLE IF EXISTS `fa_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`),
  UNIQUE KEY `unique2` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: none';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_language`
--

LOCK TABLES `fa_language` WRITE;
/*!40000 ALTER TABLE `fa_language` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_location`
--

DROP TABLE IF EXISTS `fa_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` varchar(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `delivery_address` tinytext,
  `phone1` varchar(30) DEFAULT NULL,
  `phone2` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: locations';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_location`
--

LOCK TABLES `fa_location` WRITE;
/*!40000 ALTER TABLE `fa_location` DISABLE KEYS */;
INSERT INTO `fa_location` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'DEF','Default','Delivery 1\nDelivery 2\nDelivery 3','','','','','',1);
/*!40000 ALTER TABLE `fa_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_lookup`
--

DROP TABLE IF EXISTS `fa_lookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_lookup`
--

LOCK TABLES `fa_lookup` WRITE;
/*!40000 ALTER TABLE `fa_lookup` DISABLE KEYS */;
INSERT INTO `fa_lookup` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Draft',1,'PostStatus',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Published',2,'PostStatus',2),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Archived',3,'PostStatus',3),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Pending Approval',1,'CommentStatus',1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Approved',2,'CommentStatus',2);
/*!40000 ALTER TABLE `fa_lookup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_measure_unit`
--

DROP TABLE IF EXISTS `fa_measure_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_measure_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `decimals` tinyint(2) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: item_units';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_measure_unit`
--

LOCK TABLES `fa_measure_unit` WRITE;
/*!40000 ALTER TABLE `fa_measure_unit` DISABLE KEYS */;
INSERT INTO `fa_measure_unit` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ea.','Each',0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'hrs','Hours',1,1);
/*!40000 ALTER TABLE `fa_measure_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_movement_type`
--

DROP TABLE IF EXISTS `fa_movement_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_movement_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: movement_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_movement_type`
--

LOCK TABLES `fa_movement_type` WRITE;
/*!40000 ALTER TABLE `fa_movement_type` DISABLE KEYS */;
INSERT INTO `fa_movement_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Adjustment',1);
/*!40000 ALTER TABLE `fa_movement_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_payment_term`
--

DROP TABLE IF EXISTS `fa_payment_term`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_payment_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` char(80) NOT NULL,
  `payment_term_type_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `terms` (`name`),
  KEY `FK_payment_term_payment_term_type` (`payment_term_type_id`),
  CONSTRAINT `FK_payment_term_payment_term_type` FOREIGN KEY (`payment_term_type_id`) REFERENCES `fa_payment_term_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: payment_terms';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_payment_term`
--

LOCK TABLES `fa_payment_term` WRITE;
/*!40000 ALTER TABLE `fa_payment_term` DISABLE KEYS */;
INSERT INTO `fa_payment_term` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Due 15th Of the Following Month',4,17,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Due By End Of The Following Month',4,30,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Payment due within 10 days',3,10,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cash Only',2,0,1);
/*!40000 ALTER TABLE `fa_payment_term` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_payment_term_type`
--

DROP TABLE IF EXISTS `fa_payment_term_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_payment_term_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) DEFAULT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_payment_term_type`
--

LOCK TABLES `fa_payment_term_type` WRITE;
/*!40000 ALTER TABLE `fa_payment_term_type` DISABLE KEYS */;
INSERT INTO `fa_payment_term_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Prepayment','PTT_PRE'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cash','PTT_CASH'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'After no. of Days','PTT_DAYS'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Day in Following Month','PTT_FOLLOWING');
/*!40000 ALTER TABLE `fa_payment_term_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_payment_type`
--

DROP TABLE IF EXISTS `fa_payment_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_payment_type`
--

LOCK TABLES `fa_payment_type` WRITE;
/*!40000 ALTER TABLE `fa_payment_type` DISABLE KEYS */;
INSERT INTO `fa_payment_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Miscellaneous','PT_MISC'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Work Order','PT_WORKORDER'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Customer','PT_CUSTOMER'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier','PT_SUPPLIER'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Quick Entry','PT_QUICKENTRY'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Dimension','PT_DIMESION');
/*!40000 ALTER TABLE `fa_payment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_print_profile`
--

DROP TABLE IF EXISTS `fa_print_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_print_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `printer_id` int(11) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `report` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile` (`profile`,`report`),
  KEY `FK_print_profile_printer` (`printer_id`),
  CONSTRAINT `FK_print_profile_printer` FOREIGN KEY (`printer_id`) REFERENCES `fa_printer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='original: print_profiles';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_print_profile`
--

LOCK TABLES `fa_print_profile` WRITE;
/*!40000 ALTER TABLE `fa_print_profile` DISABLE KEYS */;
INSERT INTO `fa_print_profile` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'Out of office',''),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'Sales Department',''),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Central',''),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','104'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','105'),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','107'),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','109'),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','110'),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Sales Department','201');
/*!40000 ALTER TABLE `fa_print_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_printer`
--

DROP TABLE IF EXISTS `fa_printer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_printer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(60) NOT NULL,
  `queue` varchar(20) NOT NULL,
  `host` varchar(40) NOT NULL,
  `port` smallint(11) NOT NULL,
  `timeout` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: printers';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_printer`
--

LOCK TABLES `fa_printer` WRITE;
/*!40000 ALTER TABLE `fa_printer` DISABLE KEYS */;
INSERT INTO `fa_printer` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'QL500','Label printer','QL500','server',127,20),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Samsung','Main network printer','scx4521F','server',515,5),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Local','Local print server at user IP','lp','',515,10);
/*!40000 ALTER TABLE `fa_printer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_purchase_order`
--

DROP TABLE IF EXISTS `fa_purchase_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_purchase_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `comment` tinytext,
  `date` date NOT NULL,
  `reference` tinytext NOT NULL COMMENT 'not clear',
  `requisition_no` tinytext,
  `into_stock_location_id` int(11) NOT NULL,
  `delivery_address` tinytext NOT NULL,
  `total` double NOT NULL,
  `is_tax_included` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ord_date` (`date`),
  KEY `FK_purch_orders_locations` (`into_stock_location_id`),
  KEY `FK_purchase_order_supplier` (`supplier_id`),
  CONSTRAINT `FK_purchase_order_location` FOREIGN KEY (`into_stock_location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_purchase_order_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `fa_supplier` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: purch_orders';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_purchase_order`
--

LOCK TABLES `fa_purchase_order` WRITE;
/*!40000 ALTER TABLE `fa_purchase_order` DISABLE KEYS */;
INSERT INTO `fa_purchase_order` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'','2009-06-01','1','',1,'Delivery 1\nDelivery 2\nDelivery 3',0,0),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'','2009-06-21','2','',1,'Delivery 1\nDelivery 2\nDelivery 3',0,0);
/*!40000 ALTER TABLE `fa_purchase_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_purchase_order_item`
--

DROP TABLE IF EXISTS `fa_purchase_order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_purchase_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `purchase_order_id` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `description` tinytext,
  `delivery_date` date NOT NULL,
  `quantity_invoiced` double NOT NULL,
  `price_per_unit` double NOT NULL,
  `actual_price_per_unit` double NOT NULL COMMENT 'guess',
  `standard_cost_unit` double NOT NULL,
  `quantity_ordered` double NOT NULL,
  `quantity_received` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`purchase_order_id`),
  KEY `FK_purchase_order_item_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_purchase_order_item_purchase_order` FOREIGN KEY (`purchase_order_id`) REFERENCES `fa_purchase_order` (`id`),
  CONSTRAINT `FK_purchase_order_item_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: purch_order_details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_purchase_order_item`
--

LOCK TABLES `fa_purchase_order_item` WRITE;
/*!40000 ALTER TABLE `fa_purchase_order_item` DISABLE KEYS */;
INSERT INTO `fa_purchase_order_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'17inch VGA Monitor','2009-07-01',100,10,10,10,100,100),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,'32MB VGA Card','2009-07-01',100,11,11,11,100,100),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,'52x CD Drive','2009-07-01',100,12,12,12,100,100),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,'17inch VGA Monitor','2009-07-01',0,5,0,0,1,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,2,'32MB VGA Card','2009-07-01',0,5,0,0,1,0);
/*!40000 ALTER TABLE `fa_purchase_order_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_purchase_price`
--

DROP TABLE IF EXISTS `fa_purchase_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_purchase_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `supplier_measure_unit_id` int(11) NOT NULL,
  `conversion_factor` double NOT NULL,
  `supplier_description` char(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Index 2` (`supplier_id`),
  KEY `FK_purchase_price_stock_master` (`stock_master_id`),
  KEY `FK_purchase_price_measure_unit` (`supplier_measure_unit_id`),
  CONSTRAINT `FK_purchase_price_measure_unit` FOREIGN KEY (`supplier_measure_unit_id`) REFERENCES `fa_measure_unit` (`id`),
  CONSTRAINT `FK_purchase_price_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`),
  CONSTRAINT `FK_purchase_price_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `fa_supplier` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: purch_data';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_purchase_price`
--

LOCK TABLES `fa_purchase_price` WRITE;
/*!40000 ALTER TABLE `fa_purchase_price` DISABLE KEYS */;
INSERT INTO `fa_purchase_price` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,10,1,1,'17inch VGA Monitor'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,2,11,2,1,'32MB VGA Card'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,3,12,1,1,'52x CD Drive');
/*!40000 ALTER TABLE `fa_purchase_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_quick_entry`
--

DROP TABLE IF EXISTS `fa_quick_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_quick_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `quick_entry_type_id` int(11) NOT NULL,
  `description` varchar(60) NOT NULL,
  `base_amount` double NOT NULL,
  `base_description` varchar(60) DEFAULT NULL,
  `as_bal_type` tinyint(1) NOT NULL COMMENT 'not clear',
  PRIMARY KEY (`id`),
  KEY `description` (`description`),
  KEY `FK_quick_entry_quick_entry_type` (`quick_entry_type_id`),
  CONSTRAINT `FK_quick_entry_quick_entry_type` FOREIGN KEY (`quick_entry_type_id`) REFERENCES `fa_quick_entry_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: quick_entries';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_quick_entry`
--

LOCK TABLES `fa_quick_entry` WRITE;
/*!40000 ALTER TABLE `fa_quick_entry` DISABLE KEYS */;
INSERT INTO `fa_quick_entry` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'Maintenance',0,'Amount',0),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'Phone',0,'Amount',0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Cash Sales',0,'Amount',0);
/*!40000 ALTER TABLE `fa_quick_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_quick_entry_action`
--

DROP TABLE IF EXISTS `fa_quick_entry_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_quick_entry_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_code` char(2) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='original: none.  source: /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_quick_entry_action`
--

LOCK TABLES `fa_quick_entry_action` WRITE;
/*!40000 ALTER TABLE `fa_quick_entry_action` DISABLE KEYS */;
INSERT INTO `fa_quick_entry_action` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Remainder','='),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Amount','a'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Amount, increase base','a+'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Amount, reduce base','a-'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'% amount of base','%'),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'% amount of base, increase base','%+'),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'% amount of base, reduce base','%-'),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes added','T'),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes added, increase base','T+'),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes added, reduce base','T-'),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes included','t'),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes included, increase base','t+'),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taxes included, reduce base','t-');
/*!40000 ALTER TABLE `fa_quick_entry_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_quick_entry_line`
--

DROP TABLE IF EXISTS `fa_quick_entry_line`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_quick_entry_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `quick_entry_id` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `quick_entry_action_id` int(11) NOT NULL,
  `destination_id` varchar(15) NOT NULL,
  `dimension1_id` int(11) DEFAULT NULL,
  `dimension2_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qid` (`quick_entry_id`),
  KEY `FK_quick_entry_lines_dimensions_1` (`dimension1_id`),
  KEY `FK_quick_entry_lines_dimensions_2` (`dimension2_id`),
  KEY `FK_quick_entry_line_quick_entry_action` (`quick_entry_action_id`),
  CONSTRAINT `FK_quick_entry_lines_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_quick_entry_lines_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_quick_entry_line_quick_entry` FOREIGN KEY (`quick_entry_id`) REFERENCES `fa_quick_entry` (`id`),
  CONSTRAINT `FK_quick_entry_line_quick_entry_action` FOREIGN KEY (`quick_entry_action_id`) REFERENCES `fa_quick_entry_action` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='original: quick_entry_lines';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_quick_entry_line`
--

LOCK TABLES `fa_quick_entry_line` WRITE;
/*!40000 ALTER TABLE `fa_quick_entry_line` DISABLE KEYS */;
INSERT INTO `fa_quick_entry_line` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,13,'1',NULL,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0,13,'1',NULL,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,0,13,'1',NULL,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,0,1,'4010',NULL,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,0,1,'5765',NULL,1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0,1,'5780',NULL,1);
/*!40000 ALTER TABLE `fa_quick_entry_line` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_quick_entry_type`
--

DROP TABLE IF EXISTS `fa_quick_entry_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_quick_entry_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) DEFAULT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: none source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_quick_entry_type`
--

LOCK TABLES `fa_quick_entry_type` WRITE;
/*!40000 ALTER TABLE `fa_quick_entry_type` DISABLE KEYS */;
INSERT INTO `fa_quick_entry_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bank Payment','QE_PAYMENT'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bank Deposit','QE_DEPOSIT'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Journal Entry','QE_JOURNAL'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier Invoice/Credit','QE_SUPPINV');
/*!40000 ALTER TABLE `fa_quick_entry_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_recurrent_invoice`
--

DROP TABLE IF EXISTS `fa_recurrent_invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_recurrent_invoice` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `description` varchar(60) NOT NULL,
  `sales_order_id` int(11) NOT NULL COMMENT 'guess',
  `customer_head_id` int(11) DEFAULT NULL,
  `group_no` smallint(6) DEFAULT NULL COMMENT 'not clear',
  `days` int(11) NOT NULL,
  `monthly` int(11) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `last_sent` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `description` (`description`),
  KEY `FK_recurrent_invoice_customer_head` (`customer_head_id`),
  KEY `FK_recurrent_invoice_sales_order` (`sales_order_id`),
  CONSTRAINT `FK_recurrent_invoice_customer_head` FOREIGN KEY (`customer_head_id`) REFERENCES `fa_customer_head` (`id`),
  CONSTRAINT `FK_recurrent_invoice_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `fa_sales_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: recurrent_invoices';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_recurrent_invoice`
--

LOCK TABLES `fa_recurrent_invoice` WRITE;
/*!40000 ALTER TABLE `fa_recurrent_invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_recurrent_invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_reference`
--

DROP TABLE IF EXISTS `fa_reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_reference` (
  `id` int(11) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: references. purpose: unknown. not optimal: primary key';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_reference`
--

LOCK TABLES `fa_reference` WRITE;
/*!40000 ALTER TABLE `fa_reference` DISABLE KEYS */;
INSERT INTO `fa_reference` VALUES (18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'1'),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2');
/*!40000 ALTER TABLE `fa_reference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_order`
--

DROP TABLE IF EXISTS `fa_sales_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `version` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT 'not clear',
  `customer_head_id` int(11) NOT NULL,
  `customer_branch_id` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `customer_reference` tinytext NOT NULL,
  `comment` tinytext,
  `date` date NOT NULL,
  `sales_type_id` int(11) NOT NULL,
  `shipping_company_id` int(11) NOT NULL,
  `delivery_address` tinytext NOT NULL,
  `contact_phone` varchar(30) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `deliver_to` tinytext NOT NULL,
  `freight_cost` double NOT NULL,
  `from_stock_location_id` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `payment_term_id` int(11) NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 3` (`transaction_no`,`transaction_type_id`),
  KEY `FK_sales_order_transaction_type` (`transaction_type_id`),
  KEY `FK_sales_order_customer_master` (`customer_head_id`),
  KEY `FK_sales_order_location` (`from_stock_location_id`),
  KEY `FK_sales_order_customer_branch` (`customer_branch_id`),
  KEY `FK_sales_order_payment_term` (`payment_term_id`),
  KEY `FK_sales_order_shipping_company` (`shipping_company_id`),
  KEY `FK_sales_order_sales_type` (`sales_type_id`),
  CONSTRAINT `FK_sales_order_customer_branch` FOREIGN KEY (`customer_branch_id`) REFERENCES `fa_customer_branch` (`id`),
  CONSTRAINT `FK_sales_order_customer_master` FOREIGN KEY (`customer_head_id`) REFERENCES `fa_customer_head` (`id`),
  CONSTRAINT `FK_sales_order_location` FOREIGN KEY (`from_stock_location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_sales_order_payment_term` FOREIGN KEY (`payment_term_id`) REFERENCES `fa_payment_term` (`id`),
  CONSTRAINT `FK_sales_order_sales_type` FOREIGN KEY (`sales_type_id`) REFERENCES `fa_sales_type` (`id`),
  CONSTRAINT `FK_sales_order_shipping_company` FOREIGN KEY (`shipping_company_id`) REFERENCES `fa_shipping_company` (`id`),
  CONSTRAINT `FK_sales_order_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: sales_orders';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_order`
--

LOCK TABLES `fa_sales_order` WRITE;
/*!40000 ALTER TABLE `fa_sales_order` DISABLE KEYS */;
INSERT INTO `fa_sales_order` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,1,1,0,1,1,'1','','','2009-06-21',2,1,'Address 1\nAddress 2\nAddress 3','','','Beefeater Ltd.',10,1,'2009-06-22',3,0),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,2,1,0,2,2,'2','','','2009-06-21',1,1,'Address 1\nAddress 2\nAddress 3','','','Ghostbusters Corp.',0,1,'2009-06-22',4,0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,3,1,0,3,3,'3','','','2009-06-21',2,1,'Address 1\nAddress 2\nAddress 3','','','Brezan',0,1,'2009-07-01',3,0),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,4,0,0,1,1,'4','','','2009-06-21',2,1,'Address 1\nAddress 2\nAddress 3','','','Beefeater Ltd.',0,1,'2009-06-22',3,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,5,1,0,2,2,'5','','','2009-06-21',1,1,'Address 1\nAddress 2\nAddress 3','','','Ghostbusters Corp.',5,1,'2009-06-22',4,0);
/*!40000 ALTER TABLE `fa_sales_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_order_detail`
--

DROP TABLE IF EXISTS `fa_sales_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `sales_order_id` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `description` tinytext,
  `quantity_sent` double NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` double NOT NULL,
  `discount_percent` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sales_order_detail_sales_order` (`sales_order_id`),
  KEY `FK_sales_order_detail_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_sales_order_detail_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `fa_sales_order` (`id`),
  CONSTRAINT `FK_sales_order_detail_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: sales_order_details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_order_detail`
--

LOCK TABLES `fa_sales_order_detail` WRITE;
/*!40000 ALTER TABLE `fa_sales_order_detail` DISABLE KEYS */;
INSERT INTO `fa_sales_order_detail` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'17inch VGA Monitor',2,30.4,2,0),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,'17inch VGA Monitor',1,50,1,0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,'17inch VGA Monitor',1,35.89,1,0),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,'17inch VGA Monitor',0,21.28,2,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,'17inch VGA Monitor',1,50,1,0);
/*!40000 ALTER TABLE `fa_sales_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_person`
--

DROP TABLE IF EXISTS `fa_sales_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` char(60) NOT NULL,
  `phone` char(30) NOT NULL,
  `fax` char(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `provision` double NOT NULL,
  `provision2` double NOT NULL,
  `break_point` double NOT NULL COMMENT 'guess',
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `salesman_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: salesman';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_person`
--

LOCK TABLES `fa_sales_person` WRITE;
/*!40000 ALTER TABLE `fa_sales_person` DISABLE KEYS */;
INSERT INTO `fa_sales_person` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sales Person','','','',5,4,1000,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sales1 test','','','',7,6,2000,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sales2 test','','','',9,8,3000,1);
/*!40000 ALTER TABLE `fa_sales_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_pos`
--

DROP TABLE IF EXISTS `fa_sales_pos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_pos` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `pos_name` varchar(30) NOT NULL,
  `is_cash_sale` tinyint(1) NOT NULL,
  `is_credit_sale` tinyint(1) NOT NULL,
  `pos_location_id` int(11) NOT NULL,
  `pos_account` smallint(6) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pos_name` (`pos_name`),
  KEY `FK_sales_pos_locations` (`pos_location_id`),
  CONSTRAINT `FK_sales_pos_location` FOREIGN KEY (`pos_location_id`) REFERENCES `fa_location` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: sales_pos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_pos`
--

LOCK TABLES `fa_sales_pos` WRITE;
/*!40000 ALTER TABLE `fa_sales_pos` DISABLE KEYS */;
INSERT INTO `fa_sales_pos` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Default',1,1,1,2,1);
/*!40000 ALTER TABLE `fa_sales_pos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_price`
--

DROP TABLE IF EXISTS `fa_sales_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `stock_master_id` int(11) NOT NULL,
  `sales_type_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sales_price_sales_type` (`sales_type_id`),
  KEY `FK_sales_price_currency` (`currency_id`),
  KEY `FK_sales_price_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_sales_price_currency` FOREIGN KEY (`currency_id`) REFERENCES `fa_currency` (`id`),
  CONSTRAINT `FK_sales_price_sales_type` FOREIGN KEY (`sales_type_id`) REFERENCES `fa_sales_type` (`id`),
  CONSTRAINT `FK_sales_price_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: prices';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_price`
--

LOCK TABLES `fa_sales_price` WRITE;
/*!40000 ALTER TABLE `fa_sales_price` DISABLE KEYS */;
INSERT INTO `fa_sales_price` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,5,100),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,5,50),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,5,55),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,5,60);
/*!40000 ALTER TABLE `fa_sales_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_size`
--

DROP TABLE IF EXISTS `fa_sales_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: groups';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_size`
--

LOCK TABLES `fa_sales_size` WRITE;
/*!40000 ALTER TABLE `fa_sales_size` DISABLE KEYS */;
INSERT INTO `fa_sales_size` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Small',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Medium',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Large',1);
/*!40000 ALTER TABLE `fa_sales_size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_sales_type`
--

DROP TABLE IF EXISTS `fa_sales_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_sales_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` char(50) NOT NULL,
  `is_tax_included` tinyint(1) NOT NULL,
  `factor` double NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sales_type` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: sales_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_sales_type`
--

LOCK TABLES `fa_sales_type` WRITE;
/*!40000 ALTER TABLE `fa_sales_type` DISABLE KEYS */;
INSERT INTO `fa_sales_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',1,1,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Wholesale',0,0.7,1);
/*!40000 ALTER TABLE `fa_sales_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_shipping_company`
--

DROP TABLE IF EXISTS `fa_shipping_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_shipping_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `phone1` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL,
  `contact` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: shippers';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_shipping_company`
--

LOCK TABLES `fa_shipping_company` WRITE;
/*!40000 ALTER TABLE `fa_shipping_company` DISABLE KEYS */;
INSERT INTO `fa_shipping_company` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Default','','','','',1);
/*!40000 ALTER TABLE `fa_shipping_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_category`
--

DROP TABLE IF EXISTS `fa_stock_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `default_tax_type` int(11) NOT NULL,
  `default_measure_unit_id` int(11) NOT NULL,
  `default_mb` tinyint(1) NOT NULL,
  `default_sales_account_id` int(11) NOT NULL,
  `default_cogs_account_id` int(11) NOT NULL,
  `default_inventory_account_id` int(11) NOT NULL,
  `default_adjustment_account_id` int(11) NOT NULL,
  `default_assembly_account_id` int(11) NOT NULL,
  `default_dimension1` int(11) DEFAULT NULL,
  `default_dimension2` int(11) DEFAULT NULL,
  `is_default_no_sale` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `description` (`name`),
  KEY `FK_stock_category_tax_type_item` (`default_tax_type`),
  KEY `FK_stock_category_dimension` (`default_dimension1`),
  KEY `FK_stock_category_stock_type` (`default_mb`),
  KEY `FK_stock_category_general_ledger_account` (`default_sales_account_id`),
  KEY `FK_stock_category_general_ledger_account_2` (`default_cogs_account_id`),
  KEY `FK_stock_category_general_ledger_account_3` (`default_inventory_account_id`),
  KEY `FK_stock_category_general_ledger_account_4` (`default_adjustment_account_id`),
  KEY `FK_stock_category_general_ledger_account_5` (`default_assembly_account_id`),
  KEY `FK_stock_category_measure_unit` (`default_measure_unit_id`),
  CONSTRAINT `FK_stock_category_dimension` FOREIGN KEY (`default_dimension1`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_stock_category_general_ledger_account` FOREIGN KEY (`default_sales_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_category_general_ledger_account_2` FOREIGN KEY (`default_cogs_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_category_general_ledger_account_3` FOREIGN KEY (`default_inventory_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_category_general_ledger_account_4` FOREIGN KEY (`default_adjustment_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_category_general_ledger_account_5` FOREIGN KEY (`default_assembly_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_category_measure_unit` FOREIGN KEY (`default_measure_unit_id`) REFERENCES `fa_measure_unit` (`id`),
  CONSTRAINT `FK_stock_category_stock_type` FOREIGN KEY (`default_mb`) REFERENCES `fa_stock_type` (`id`),
  CONSTRAINT `FK_stock_category_tax_type_item` FOREIGN KEY (`default_tax_type`) REFERENCES `fa_tax_type_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: stock_category';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_category`
--

LOCK TABLES `fa_stock_category` WRITE;
/*!40000 ALTER TABLE `fa_stock_category` DISABLE KEYS */;
INSERT INTO `fa_stock_category` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Components',1,1,2,37,43,5,46,7,1,0,0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Charges',1,1,3,37,43,5,46,7,1,0,0,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Systems',1,1,1,37,43,5,46,7,1,0,0,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Services',1,2,3,37,43,5,46,7,1,0,0,1);
/*!40000 ALTER TABLE `fa_stock_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_item`
--

DROP TABLE IF EXISTS `fa_stock_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `stock_category_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `as_foreign` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_stock_item_stock_category` (`stock_category_id`),
  KEY `FK_stock_item_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_stock_item_stock_category` FOREIGN KEY (`stock_category_id`) REFERENCES `fa_stock_category` (`id`),
  CONSTRAINT `FK_stock_item_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: item_codes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_item`
--

LOCK TABLES `fa_stock_item` WRITE;
/*!40000 ALTER TABLE `fa_stock_item` DISABLE KEYS */;
INSERT INTO `fa_stock_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'102',1,'17inch VGA Monitor',1,1,0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'103',2,'32MB VGA Card',1,1,0,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'104',3,'52x CD Drive',1,1,0,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3400',5,'P4 Business System',3,1,0,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'201',4,'Assembly Labour',4,1,0,1);
/*!40000 ALTER TABLE `fa_stock_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_location`
--

DROP TABLE IF EXISTS `fa_stock_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `reorder_level` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`location_id`,`stock_master_id`),
  KEY `Index 2` (`location_id`),
  KEY `FK_stock_location_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_stock_location_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_stock_location_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: loc_stock';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_location`
--

LOCK TABLES `fa_stock_location` WRITE;
/*!40000 ALTER TABLE `fa_stock_location` DISABLE KEYS */;
INSERT INTO `fa_stock_location` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,0),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,0),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,4,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,5,0);
/*!40000 ALTER TABLE `fa_stock_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_master`
--

DROP TABLE IF EXISTS `fa_stock_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `stock_category_id` int(11) NOT NULL,
  `tax_type_item_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `long_description` tinytext NOT NULL,
  `measure_unit_id` int(11) NOT NULL,
  `stock_type_id` tinyint(1) NOT NULL,
  `sales_account_id` int(11) NOT NULL,
  `cogs_account_id` int(11) NOT NULL,
  `inventory_account_id` int(11) NOT NULL,
  `adjustment_account_id` int(11) NOT NULL,
  `assembly_account_id` int(11) NOT NULL,
  `dimension1_id` int(11) DEFAULT NULL,
  `dimension2_id` int(11) DEFAULT NULL,
  `actual_cost` double NOT NULL,
  `last_cost` double NOT NULL,
  `material_cost` double NOT NULL,
  `labour_cost` double NOT NULL,
  `overhead_cost` double NOT NULL,
  `is_no_sale` tinyint(1) NOT NULL,
  `is_editable` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_stock_master_dimensions_1` (`dimension1_id`),
  KEY `FK_stock_master_dimensions_2` (`dimension2_id`),
  KEY `FK_stock_master_tax_type_item` (`tax_type_item_id`),
  KEY `FK_stock_master_stock_category` (`stock_category_id`),
  KEY `FK_stock_master_stock_type` (`stock_type_id`),
  KEY `FK_stock_master_general_ledger_account` (`sales_account_id`),
  KEY `FK_stock_master_general_ledger_account_2` (`cogs_account_id`),
  KEY `FK_stock_master_general_ledger_account_3` (`inventory_account_id`),
  KEY `FK_stock_master_general_ledger_account_4` (`adjustment_account_id`),
  KEY `FK_stock_master_general_ledger_account_5` (`assembly_account_id`),
  KEY `FK_stock_master_measure_unit` (`measure_unit_id`),
  CONSTRAINT `FK_stock_master_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_stock_master_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_stock_master_general_ledger_account` FOREIGN KEY (`sales_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_master_general_ledger_account_2` FOREIGN KEY (`cogs_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_master_general_ledger_account_3` FOREIGN KEY (`inventory_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_master_general_ledger_account_4` FOREIGN KEY (`adjustment_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_master_general_ledger_account_5` FOREIGN KEY (`assembly_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_stock_master_measure_unit` FOREIGN KEY (`measure_unit_id`) REFERENCES `fa_measure_unit` (`id`),
  CONSTRAINT `FK_stock_master_stock_category` FOREIGN KEY (`stock_category_id`) REFERENCES `fa_stock_category` (`id`),
  CONSTRAINT `FK_stock_master_stock_type` FOREIGN KEY (`stock_type_id`) REFERENCES `fa_stock_type` (`id`),
  CONSTRAINT `FK_stock_master_tax_type_item` FOREIGN KEY (`tax_type_item_id`) REFERENCES `fa_tax_type_item` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: stock_master';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_master`
--

LOCK TABLES `fa_stock_master` WRITE;
/*!40000 ALTER TABLE `fa_stock_master` DISABLE KEYS */;
INSERT INTO `fa_stock_master` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'102',1,1,'17inch VGA Monitor','',1,2,37,43,5,46,7,1,1,0,0,10,0,0,0,0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'103',1,1,'32MB VGA Card','',1,2,37,43,5,46,7,1,1,0,0,11,0,0,0,0,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'104',1,1,'52x CD Drive','',1,2,37,43,5,46,7,1,1,0,0,12,0,0,0,0,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'201',4,1,'Assembly Labour','',2,3,37,43,43,46,7,1,1,0,0,0,0,0,0,0,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3400',3,1,'P4 Business System','',1,1,37,43,8,46,7,1,1,0,0,33,3.9999999999999,2,0,0,1);
/*!40000 ALTER TABLE `fa_stock_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_move`
--

DROP TABLE IF EXISTS `fa_stock_move`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_move` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_no` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL COMMENT 'not clear',
  `location_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `person_id` int(11) DEFAULT NULL COMMENT 'not clear',
  `price` double NOT NULL,
  `reference` char(40) NOT NULL,
  `quantity` double NOT NULL,
  `discount_percent` double NOT NULL,
  `standard_cost` double NOT NULL,
  `is_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`,`transaction_no`),
  KEY `Move` (`location_id`,`transaction_date`),
  KEY `FK_stock_move_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_stock_move_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_stock_move_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COMMENT='original: stock_moves';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_move`
--

LOCK TABLES `fa_stock_move` WRITE;
/*!40000 ALTER TABLE `fa_stock_move` DISABLE KEYS */;
INSERT INTO `fa_stock_move` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,25,1,'2009-06-21',2,10,'',100,0,10,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,25,1,'2009-06-21',2,11,'',100,0,11,1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,25,1,'2009-06-21',2,12,'',100,0,12,1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,26,1,'2009-06-21',0,0,'1',-10,0,0,1),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,26,1,'2009-06-21',0,0,'1',-10,0,0,1),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,26,1,'2009-06-21',0,0,'1',-10,0,0,1),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,5,26,1,'2009-06-21',0,0,'1',10,0,0,1),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,13,1,'2009-06-21',0,30.4,'1',-2,0,10,1),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,13,1,'2009-06-21',0,50,'auto',-1,0,10,1),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,13,1,'2009-06-21',0,35.89,'auto',-1,0,10,1),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,26,1,'2009-06-21',0,0,'3',-2,0,0,1),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2,26,1,'2009-06-21',0,0,'3',-2,0,0,1),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,3,26,1,'2009-06-21',0,0,'3',-2,0,0,1),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,5,26,1,'2009-06-21',0,0,'3',2,0,0,1),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,26,1,'2009-06-21',0,0,'4',-4,0,0,1),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,2,26,1,'2009-06-21',0,0,'4',-4,0,0,1),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,3,26,1,'2009-06-21',0,0,'4',-4,0,0,1),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,5,26,1,'2009-06-21',0,0,'4',4,0,0,1),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,26,1,'2009-06-21',0,0,'',-2,0,0,1),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,2,26,1,'2009-06-21',0,0,'',-2,0,0,1),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,3,26,1,'2009-06-21',0,0,'',-2,0,0,1),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,5,29,1,'2009-06-21',0,0,'',2,0,0,1),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,26,1,'2009-06-21',0,0,'5',-5,0,0,1),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,2,26,1,'2009-06-21',0,0,'5',-5,0,0,1),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,3,26,1,'2009-06-21',0,0,'5',-5,0,0,1),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,5,26,1,'2009-06-21',0,0,'5',5,0,0,1),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,1,26,1,'2009-06-21',0,0,'6',5,0,0,1),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,26,1,'2009-06-21',0,0,'6',5,0,0,1),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,3,26,1,'2009-06-21',0,0,'6',5,0,0,1),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,5,26,1,'2009-06-21',0,0,'6',-5,0,0,1),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,1,26,1,'2009-06-21',0,0,'7',2,0,0,1),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,2,26,1,'2009-06-21',0,0,'7',2,0,0,1),(33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,3,26,1,'2009-06-21',0,0,'7',2,0,0,1),(34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,5,26,1,'2009-06-21',0,0,'7',-2,0,0,1),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,13,1,'2009-06-21',0,50,'auto',-1,0,10,1),(36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,11,1,'2009-06-21',0,37.68,'Return Ex Inv: 18',1,0,10,0);
/*!40000 ALTER TABLE `fa_stock_move` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_stock_type`
--

DROP TABLE IF EXISTS `fa_stock_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_stock_type` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_code` char(1) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_stock_type`
--

LOCK TABLES `fa_stock_type` WRITE;
/*!40000 ALTER TABLE `fa_stock_type` DISABLE KEYS */;
INSERT INTO `fa_stock_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Manufactured','M'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Purchased','B'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Service','D');
/*!40000 ALTER TABLE `fa_stock_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_supplier`
--

DROP TABLE IF EXISTS `fa_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `mailing_address` tinytext NOT NULL,
  `physical_address` tinytext NOT NULL,
  `goods_and_service_tax_no` varchar(25) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `account_no` varchar(40) NOT NULL,
  `website` varchar(100) NOT NULL,
  `bank_account` varchar(60) NOT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `payment_term_id` int(11) DEFAULT NULL,
  `is_tax_included` tinyint(1) NOT NULL,
  `dimension1_id` int(11) DEFAULT NULL,
  `dimension2_id` int(11) DEFAULT NULL,
  `tax_group_id` int(11) DEFAULT NULL,
  `credit_limit` double NOT NULL,
  `purchase_account_id` int(1) NOT NULL,
  `payable_account_id` int(11) DEFAULT NULL,
  `payment_discount_account_id` int(11) DEFAULT NULL,
  `note` tinytext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `supp_ref` (`reference`),
  KEY `FK_suppliers_currencies` (`currency_id`),
  KEY `FK_suppliers_dimensions_1` (`dimension1_id`),
  KEY `FK_suppliers_dimensions_2` (`dimension2_id`),
  KEY `FK_supplier_tax_group` (`tax_group_id`),
  KEY `FK_supplier_payment_term` (`payment_term_id`),
  KEY `FK_supplier_general_ledger_account` (`purchase_account_id`),
  KEY `FK_supplier_general_ledger_account_2` (`payable_account_id`),
  KEY `FK_supplier_general_ledger_account_3` (`payment_discount_account_id`),
  CONSTRAINT `FK_suppliers_dimensions_1` FOREIGN KEY (`dimension1_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_suppliers_dimensions_2` FOREIGN KEY (`dimension2_id`) REFERENCES `fa_dimension` (`id`),
  CONSTRAINT `FK_supplier_currency` FOREIGN KEY (`currency_id`) REFERENCES `fa_currency` (`id`),
  CONSTRAINT `FK_supplier_general_ledger_account` FOREIGN KEY (`purchase_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_supplier_general_ledger_account_2` FOREIGN KEY (`payable_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_supplier_general_ledger_account_3` FOREIGN KEY (`payment_discount_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_supplier_payment_term` FOREIGN KEY (`payment_term_id`) REFERENCES `fa_payment_term` (`id`),
  CONSTRAINT `FK_supplier_tax_group` FOREIGN KEY (`tax_group_id`) REFERENCES `fa_tax_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='original: suppliers';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_supplier`
--

LOCK TABLES `fa_supplier` WRITE;
/*!40000 ALTER TABLE `fa_supplier` DISABLE KEYS */;
INSERT INTO `fa_supplier` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Junk Beer ApS','Junk Beer','Mailing 1\nMailing 2\nMailing 3','Address 1\nAddress 2\nAddress 3','123456','Contact','111','','',2,3,0,1,1,2,1000,1,14,48,'A supplier with junk beers.',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Lucky Luke Inc.','Lucky Luke','Mailing 1\nMailing 2\nMailing 3','Address 1\nAddress 2\nAddress 3','654321','Luke','333','','',5,3,0,1,1,1,500,1,14,48,'',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Money Makers Ltd.','Money Makers','Mailing 1\nMailing 2\nMailing 3','Address 1\nAddress 2\nAddress 3','987654','Makers','222','','',4,3,0,1,1,2,300,1,14,48,'',1);
/*!40000 ALTER TABLE `fa_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_supplier_allocation`
--

DROP TABLE IF EXISTS `fa_supplier_allocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_supplier_allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date NOT NULL,
  `from_transaction_type_id` int(11) DEFAULT NULL,
  `from_transaction_no` int(11) DEFAULT NULL,
  `to_transaction_type_id` int(11) DEFAULT NULL,
  `to_transaction_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `From` (`from_transaction_no`),
  KEY `To` (`to_transaction_no`),
  KEY `FK_supplier_allocation_transaction_type` (`from_transaction_type_id`),
  KEY `FK_supplier_allocation_transaction_type_2` (`to_transaction_type_id`),
  CONSTRAINT `FK_supplier_allocation_transaction_type` FOREIGN KEY (`from_transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_supplier_allocation_transaction_type_2` FOREIGN KEY (`to_transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: supp_allocations';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_supplier_allocation`
--

LOCK TABLES `fa_supplier_allocation` WRITE;
/*!40000 ALTER TABLE `fa_supplier_allocation` DISABLE KEYS */;
INSERT INTO `fa_supplier_allocation` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3465,'2009-06-21',22,4,20,7);
/*!40000 ALTER TABLE `fa_supplier_allocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_supplier_invoice_item`
--

DROP TABLE IF EXISTS `fa_supplier_invoice_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_supplier_invoice_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `supplier_transaction_id` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) DEFAULT NULL COMMENT 'guess',
  `general_ledger_account_id` int(11) DEFAULT NULL,
  `goods_received_note_batch_item_id` int(11) DEFAULT NULL COMMENT 'guess',
  `purchase_order_item_id` int(11) DEFAULT NULL COMMENT 'guess',
  `stock_master_id` int(11) DEFAULT NULL,
  `description` tinytext,
  `quantity` double NOT NULL,
  `price_per_unit` double NOT NULL,
  `tax_per_unit` double NOT NULL,
  `memo` tinytext,
  PRIMARY KEY (`id`),
  KEY `FK_supplier_invoice_item_stock_master` (`stock_master_id`),
  KEY `FK_supplier_invoice_item_general_ledger_account` (`general_ledger_account_id`),
  KEY `FK_supplier_invoice_item_purchase_order_item` (`purchase_order_item_id`),
  KEY `FK_supplier_invoice_item_goods_received_note_batch_item` (`goods_received_note_batch_item_id`),
  KEY `FK_supplier_invoice_item_supplier_transaction` (`supplier_transaction_id`),
  KEY `FK_supplier_invoice_item_transaction_type` (`transaction_type_id`),
  CONSTRAINT `FK_supplier_invoice_item_general_ledger_account` FOREIGN KEY (`general_ledger_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_supplier_invoice_item_goods_received_note_batch_item` FOREIGN KEY (`goods_received_note_batch_item_id`) REFERENCES `fa_grn_batch_item` (`id`),
  CONSTRAINT `FK_supplier_invoice_item_purchase_order_item` FOREIGN KEY (`purchase_order_item_id`) REFERENCES `fa_purchase_order_item` (`id`),
  CONSTRAINT `FK_supplier_invoice_item_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`),
  CONSTRAINT `FK_supplier_invoice_item_supplier_transaction` FOREIGN KEY (`supplier_transaction_id`) REFERENCES `fa_supplier_transaction` (`id`),
  CONSTRAINT `FK_supplier_invoice_item_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='original: supp_invoice_items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_supplier_invoice_item`
--

LOCK TABLES `fa_supplier_invoice_item` WRITE;
/*!40000 ALTER TABLE `fa_supplier_invoice_item` DISABLE KEYS */;
INSERT INTO `fa_supplier_invoice_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,20,NULL,1,1,1,'17inch VGA Monitor',100,10,0.5,''),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,20,NULL,2,2,2,'32MB VGA Card',100,11,0.55,''),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,20,NULL,3,3,3,'52x CD Drive',100,12,0.6,''),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8,20,19,NULL,NULL,NULL,'',0,0.95,0,'Phone'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8,20,72,NULL,NULL,NULL,'',0,19.05,0,'Phone');
/*!40000 ALTER TABLE `fa_supplier_invoice_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_supplier_transaction`
--

DROP TABLE IF EXISTS `fa_supplier_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_supplier_transaction` (
  `id` int(11) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL COMMENT 'guess',
  `supplier_id` int(11) DEFAULT NULL,
  `reference` tinytext NOT NULL,
  `supplier_reference` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `overdue_date` date NOT NULL,
  `overdue_amount` double NOT NULL,
  `overdue_discount` double NOT NULL,
  `overdue_goods_and_service_tax` double NOT NULL,
  `rate` double NOT NULL,
  `allocation` double NOT NULL,
  `is_tax_included` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `type` (`transaction_type_id`),
  KEY `tran_date` (`date`),
  CONSTRAINT `FK_supplier_transaction_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_supp_trans_suppliers` FOREIGN KEY (`supplier_id`) REFERENCES `fa_supplier` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: supp_trans. not optimal: primary key';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_supplier_transaction`
--

LOCK TABLES `fa_supplier_transaction` WRITE;
/*!40000 ALTER TABLE `fa_supplier_transaction` DISABLE KEYS */;
INSERT INTO `fa_supplier_transaction` VALUES (4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,2,'1','','2009-06-21','2009-06-21',-3465,0,0,1,3465,0),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,2,'1','5t','2009-06-21','2009-07-01',3300,0,165,1,3465,0),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,2,'2','cc','2009-06-21','2009-07-01',20,0,0,1,0,0);
/*!40000 ALTER TABLE `fa_supplier_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_system_preference`
--

DROP TABLE IF EXISTS `fa_system_preference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_system_preference` (
  `name` varchar(35) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `length` smallint(6) DEFAULT NULL,
  `value` tinytext,
  PRIMARY KEY (`name`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: sys_prefs';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_system_preference`
--

LOCK TABLES `fa_system_preference` WRITE;
/*!40000 ALTER TABLE `fa_system_preference` DISABLE KEYS */;
INSERT INTO `fa_system_preference` VALUES ('accumulate_shipping','glsetup.customer','tinyint',1,'0'),('add_pct','setup.company','int',5,'-1'),('allow_negative_stock','glsetup.inventory','tinyint',1,'0'),('auto_curr_reval','setup.company','smallint',6,'1'),('bank_charge_act','glsetup.general','varchar',15,'5690'),('base_sales','setup.company','int',11,'1'),('coy_logo','setup.company','varchar',100,'logo_frontaccounting.jpg'),('coy_name','setup.company','varchar',60,'my company'),('coy_no','setup.company','varchar',25,'123456789'),('creditors_act','glsetup.purchase','varchar',15,'2100'),('curr_default','setup.company','char',3,'USD'),('debtors_act','glsetup.sales','varchar',15,'1200'),('default_adj_act','glsetup.items','varchar',15,'5040'),('default_assembly_act','glsetup.items','varchar',15,'1530'),('default_cogs_act','glsetup.items','varchar',15,'5010'),('default_credit_limit','glsetup.customer','int',11,'1000'),('default_delivery_required','glsetup.sales','smallint',6,'1'),('default_dim_required','glsetup.dims','int',11,'20'),('default_inventory_act','glsetup.items','varchar',15,'1510'),('default_inv_sales_act','glsetup.items','varchar',15,'4010'),('default_prompt_payment_act','glsetup.sales','varchar',15,'4500'),('default_sales_act','glsetup.sales','varchar',15,'4010'),('default_sales_discount_act','glsetup.sales','varchar',15,'4510'),('default_workorder_required','glsetup.manuf','int',11,'20'),('domicile','setup.company','varchar',55,''),('email','setup.company','varchar',100,'delta@delta.com'),('exchange_diff_act','glsetup.general','varchar',15,'4450'),('fax','setup.company','varchar',30,''),('freight_act','glsetup.customer','varchar',15,'4430'),('f_year','setup.company','int',11,'4'),('grn_clearing_act','glsetup.purchase','varchar',15,'1550'),('gst_no','setup.company','varchar',25,'9876543'),('legal_text','glsetup.customer','tinytext',0,''),('login_tout','setup.company','smallint',6,'600'),('no_customer_list','setup.company','tinyint',1,'0'),('no_item_list','setup.company','tinyint',1,'0'),('no_supplier_list','setup.company','tinyint',1,'0'),('past_due_days','glsetup.general','int',11,'30'),('phone','setup.company','varchar',30,'(222) 111.222.333'),('postal_address','setup.company','tinytext',0,'Address 1\nAddress 2\nAddress 3'),('po_over_charge','glsetup.purchase','int',11,'10'),('po_over_receive','glsetup.purchase','int',11,'10'),('profit_loss_year_act','glsetup.general','varchar',15,'9990'),('pyt_discount_act','glsetup.purchase','varchar',15,'5060'),('retained_earnings_act','glsetup.general','varchar',15,'3590'),('round_to','setup.company','int',5,'1'),('tax_last','setup.company','int',11,'1'),('tax_prd','setup.company','int',11,'1'),('time_zone','setup.company','tinyint',1,'0'),('use_dimension','setup.company','tinyint',1,'1'),('version_id','system','varchar',11,'2.3rc');
/*!40000 ALTER TABLE `fa_system_preference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tag`
--

DROP TABLE IF EXISTS `fa_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL COMMENT 'not clear',
  `name` varchar(30) NOT NULL,
  `description` varchar(60) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='original: tags';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tag`
--

LOCK TABLES `fa_tag` WRITE;
/*!40000 ALTER TABLE `fa_tag` DISABLE KEYS */;
INSERT INTO `fa_tag` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'test tag name1','test tag desc1',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'test tag name2','test tag desc2',1),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'tag name1 test','tag desc1 test',1),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'tag name2 test','tag desc2 test',1);
/*!40000 ALTER TABLE `fa_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tag_type`
--

DROP TABLE IF EXISTS `fa_tag_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tag_type` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tag_type`
--

LOCK TABLES `fa_tag_type` WRITE;
/*!40000 ALTER TABLE `fa_tag_type` DISABLE KEYS */;
INSERT INTO `fa_tag_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Account','TAG_ACCOUNT'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Dimension','TAG_DIMENSION');
/*!40000 ALTER TABLE `fa_tag_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_group`
--

DROP TABLE IF EXISTS `fa_tax_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `as_tax_shipping` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: tax_groups';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_group`
--

LOCK TABLES `fa_tax_group` WRITE;
/*!40000 ALTER TABLE `fa_tax_group` DISABLE KEYS */;
INSERT INTO `fa_tax_group` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Tax',0,1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Tax Exemption',0,1);
/*!40000 ALTER TABLE `fa_tax_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_group_item`
--

DROP TABLE IF EXISTS `fa_tax_group_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_group_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `tax_group_id` int(11) NOT NULL,
  `tax_type_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tax_group_id_tax_type_id` (`tax_group_id`,`tax_type_id`),
  KEY `FK_tax_group_items_tax_group` (`tax_group_id`),
  KEY `FK_tax_group_items_tax_type` (`tax_type_id`),
  CONSTRAINT `FK_tax_group_items_tax_groups` FOREIGN KEY (`tax_group_id`) REFERENCES `fa_tax_group` (`id`),
  CONSTRAINT `FK_tax_group_items_tax_types` FOREIGN KEY (`tax_type_id`) REFERENCES `fa_tax_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: tax_group_items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_group_item`
--

LOCK TABLES `fa_tax_group_item` WRITE;
/*!40000 ALTER TABLE `fa_tax_group_item` DISABLE KEYS */;
INSERT INTO `fa_tax_group_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,5);
/*!40000 ALTER TABLE `fa_tax_group_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_transaction_item`
--

DROP TABLE IF EXISTS `fa_tax_transaction_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_transaction_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) DEFAULT NULL COMMENT 'guess',
  `transaction_no` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `tax_type_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `exchange_rate` double NOT NULL COMMENT 'guess',
  `is_included_in_price` tinyint(1) NOT NULL,
  `net_amount` double NOT NULL,
  `amount` double NOT NULL,
  `memo` tinytext,
  PRIMARY KEY (`id`),
  KEY `Type_and_Number` (`transaction_type_id`,`transaction_no`),
  KEY `tran_date` (`date`),
  KEY `FK_trans_tax_details_tax_types` (`tax_type_id`),
  CONSTRAINT `FK_tax_transaction_item_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `fa_transaction_type` (`id`),
  CONSTRAINT `FK_trans_tax_details_tax_types` FOREIGN KEY (`tax_type_id`) REFERENCES `fa_tax_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='original: trans_tax_details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_transaction_item`
--

LOCK TABLES `fa_tax_transaction_item` WRITE;
/*!40000 ALTER TABLE `fa_tax_transaction_item` DISABLE KEYS */;
INSERT INTO `fa_tax_transaction_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,7,'2009-06-21',1,5,1,0,3300,165,'5t'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,3,'2009-06-21',1,5,1,0,50,2.5,'auto'),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,17,'2009-06-21',1,5,1,0,50,2.5,'1'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,4,'2009-06-21',1,5,1.3932,0,35.89,1.7945,'auto'),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,18,'2009-06-21',1,5,1.3932,0,35.89,1.7945,'2'),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,5,'2009-06-21',1,5,1,0,95.2,4.76,''),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,8,'2009-06-21',1,5,1,0,-47.6,-2.38,''),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,8,'2009-06-21',1,5,1,0,-19,-0.95,'cc'),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,5,'2009-06-21',1,5,1,1,47.619047619048,2.3809523809524,'auto'),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,19,'2009-06-21',1,5,1,1,47.619047619048,2.3809523809524,'3'),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,3,'2009-06-21',1,5,1.3932,0,35.89,1.7945,'1');
/*!40000 ALTER TABLE `fa_tax_transaction_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_type`
--

DROP TABLE IF EXISTS `fa_tax_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `rate` double NOT NULL,
  `sales_account_id` int(11) NOT NULL,
  `purchasing_account_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tax_type_general_ledger_account` (`sales_account_id`),
  KEY `FK_tax_type_general_ledger_account_2` (`purchasing_account_id`),
  CONSTRAINT `FK_tax_type_general_ledger_account` FOREIGN KEY (`sales_account_id`) REFERENCES `fa_gl_account` (`id`),
  CONSTRAINT `FK_tax_type_general_ledger_account_2` FOREIGN KEY (`purchasing_account_id`) REFERENCES `fa_gl_account` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: tax_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_type`
--

LOCK TABLES `fa_tax_type` WRITE;
/*!40000 ALTER TABLE `fa_tax_type` DISABLE KEYS */;
INSERT INTO `fa_tax_type` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Tax',5,19,19,1);
/*!40000 ALTER TABLE `fa_tax_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_type_exemption_item`
--

DROP TABLE IF EXISTS `fa_tax_type_exemption_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_type_exemption_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `tax_type_item_id` int(11) NOT NULL,
  `tax_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tax_type_item_id_tax_type_id` (`tax_type_item_id`,`tax_type_id`),
  KEY `FK_item_tax_type_exemptions_tax_type_item` (`tax_type_item_id`),
  KEY `FK_item_tax_type_exemptions_tax_type` (`tax_type_id`),
  CONSTRAINT `FK_item_tax_type_exemptions_tax_types` FOREIGN KEY (`tax_type_id`) REFERENCES `fa_tax_type` (`id`),
  CONSTRAINT `FK_tax_type_exemption_item_tax_type_item` FOREIGN KEY (`tax_type_item_id`) REFERENCES `fa_tax_type_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: item_tax_type_exemptions';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_type_exemption_item`
--

LOCK TABLES `fa_tax_type_exemption_item` WRITE;
/*!40000 ALTER TABLE `fa_tax_type_exemption_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_tax_type_exemption_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_tax_type_item`
--

DROP TABLE IF EXISTS `fa_tax_type_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_tax_type_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `as_exemption` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: item_tax_types';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_tax_type_item`
--

LOCK TABLES `fa_tax_type_item` WRITE;
/*!40000 ALTER TABLE `fa_tax_type_item` DISABLE KEYS */;
INSERT INTO `fa_tax_type_item` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Regular',0,1);
/*!40000 ALTER TABLE `fa_tax_type_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_transaction_type`
--

DROP TABLE IF EXISTS `fa_transaction_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_transaction_type` (
  `id` int(11) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `type_no` int(11) NOT NULL COMMENT 'not clear',
  `next_reference` varchar(100) NOT NULL,
  `old_abbreviation` varchar(100) NOT NULL COMMENT 'to be deleted',
  `old_code` varchar(3) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: sys_types. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_transaction_type`
--

LOCK TABLES `fa_transaction_type` WRITE;
/*!40000 ALTER TABLE `fa_transaction_type` DISABLE KEYS */;
INSERT INTO `fa_transaction_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Journal Entry',19,'3','ST_JOURNAL','GJ'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bank Payment',8,'2','ST_BANKPAYMENT','BP'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bank Deposit',5,'2','ST_BANKDEPOSIT','BD'),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Funds Transfer',3,'1','ST_BANKTRANSFER','BT'),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sales Invoice',19,'4','ST_SALESINVOICE','SI'),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Customer Credit Note',3,'2','ST_CUSTCREDIT','CN'),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Customer Payment',6,'1','ST_CUSTPAYMENT','CP'),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Delivery Note',5,'2','ST_CUSTDELIVERY','DN'),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Location Transfer',2,'1','ST_LOCTRANSFER','IT'),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Inventory Adjustment',2,'1','ST_INVADJUST','IA'),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Purchase Order',1,'3','ST_PURCHORDER','PO'),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier Invoice',8,'3','ST_SUPPINVOICE','PI'),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier Credit Note',1,'1','ST_SUPPCREDIT','PC'),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Supplier Payment',4,'2','ST_SUPPAYMENT','SP'),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Purchase Order Delivery',1,'2','ST_SUPPRECEIVE','GRN'),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Work Order',1,'8','ST_WORKORDER','WO'),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Work Order Issue',1,'1','ST_MANUISSUE','WI'),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Work Order Production',1,'2','ST_MANURECEIVE','WP'),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sales Order',5,'6','ST_SALESORDER','SO'),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sales Quotation',0,'1','ST_SALESQUOTE','SQ'),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Cost Update',1,'1','ST_COSTUPDATE','CU'),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Dimension',1,'3','ST_DIMENSION','Dim');
/*!40000 ALTER TABLE `fa_transaction_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_void`
--

DROP TABLE IF EXISTS `fa_void`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_void` (
  `id` int(11) NOT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT 'not clear',
  `date` date NOT NULL,
  `memo` tinytext NOT NULL,
  UNIQUE KEY `id` (`type`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: voided';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_void`
--

LOCK TABLES `fa_void` WRITE;
/*!40000 ALTER TABLE `fa_void` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_void` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_center`
--

DROP TABLE IF EXISTS `fa_work_center`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` char(40) NOT NULL,
  `description` char(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: workcentres';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_center`
--

LOCK TABLES `fa_work_center` WRITE;
/*!40000 ALTER TABLE `fa_work_center` DISABLE KEYS */;
INSERT INTO `fa_work_center` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Workshop1','Workshop in Alabama',1),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Workshop2','Workshop in New York',1);
/*!40000 ALTER TABLE `fa_work_center` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order`
--

DROP TABLE IF EXISTS `fa_work_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `reference` varchar(60) NOT NULL,
  `location_id` int(11) NOT NULL,
  `requested_unit` double NOT NULL COMMENT 'guess',
  `stock_master_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT 'not clear',
  `required_by` date NOT NULL,
  `released_date` date NOT NULL,
  `units_issued` double NOT NULL,
  `is_closed` tinyint(1) NOT NULL,
  `is_released` tinyint(1) NOT NULL,
  `additional_cost` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wo_ref` (`reference`),
  KEY `FK_workorders_locations` (`location_id`),
  KEY `FK_workorder_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_workorder_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_workorder_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='original: workorders';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order`
--

LOCK TABLES `fa_work_order` WRITE;
/*!40000 ALTER TABLE `fa_work_order` DISABLE KEYS */;
INSERT INTO `fa_work_order` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',1,10,5,'2009-06-21',0,'2009-06-21','2009-06-21',10,1,1,10),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2',1,3,5,'2009-06-21',2,'2009-07-11','2009-06-21',2,0,1,0),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3',1,2,5,'2009-06-21',0,'2009-06-21','2009-06-21',2,1,1,0),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4',1,4,5,'2009-06-21',0,'2009-06-21','2009-06-21',4,1,1,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5',1,5,5,'2009-06-21',0,'2009-06-21','2009-06-21',5,1,1,10),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6',1,-5,5,'2009-06-21',1,'2009-06-21','2009-06-21',-5,1,1,0),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7',1,-2,5,'2009-06-21',1,'2009-06-21','2009-06-21',-2,1,1,10);
/*!40000 ALTER TABLE `fa_work_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_cost_type`
--

DROP TABLE IF EXISTS `fa_work_order_cost_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_cost_type` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) DEFAULT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_cost_type`
--

LOCK TABLES `fa_work_order_cost_type` WRITE;
/*!40000 ALTER TABLE `fa_work_order_cost_type` DISABLE KEYS */;
INSERT INTO `fa_work_order_cost_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Labour Cost','WO_LABOUR'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Overhead Cost','WO_OVERHEAD');
/*!40000 ALTER TABLE `fa_work_order_cost_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_issue`
--

DROP TABLE IF EXISTS `fa_work_order_issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `work_order_id` int(11) NOT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `work_center_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `workorder_id` (`work_order_id`),
  KEY `FK_wo_issues_locations` (`location_id`),
  KEY `FK_workorder_issue_workcenter` (`work_center_id`),
  CONSTRAINT `FK_workorder_issue_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_workorder_issue_workcenter` FOREIGN KEY (`work_center_id`) REFERENCES `fa_work_center` (`id`),
  CONSTRAINT `FK_wo_issues_workorders` FOREIGN KEY (`work_order_id`) REFERENCES `fa_work_order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: wo_issues';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_issue`
--

LOCK TABLES `fa_work_order_issue` WRITE;
/*!40000 ALTER TABLE `fa_work_order_issue` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_work_order_issue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_issue_item`
--

DROP TABLE IF EXISTS `fa_work_order_issue_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_issue_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `stock_master_id` int(11) NOT NULL,
  `work_order_issue_id` int(11) DEFAULT NULL,
  `quantity_issued` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_workorder_issue_item_workorder_issue` (`work_order_issue_id`),
  KEY `FK_workorder_issue_item_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_workorder_issue_item_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`),
  CONSTRAINT `FK_workorder_issue_item_workorder_issue` FOREIGN KEY (`work_order_issue_id`) REFERENCES `fa_work_order_issue` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: wo_issue_items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_issue_item`
--

LOCK TABLES `fa_work_order_issue_item` WRITE;
/*!40000 ALTER TABLE `fa_work_order_issue_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `fa_work_order_issue_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_manufacture`
--

DROP TABLE IF EXISTS `fa_work_order_manufacture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_manufacture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `work_order_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `workorder_id` (`work_order_id`),
  CONSTRAINT `FK_wo_manufacture_workorders` FOREIGN KEY (`work_order_id`) REFERENCES `fa_work_order` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='original: wo_manufacture';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_manufacture`
--

LOCK TABLES `fa_work_order_manufacture` WRITE;
/*!40000 ALTER TABLE `fa_work_order_manufacture` DISABLE KEYS */;
INSERT INTO `fa_work_order_manufacture` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',2,2,'2009-06-21');
/*!40000 ALTER TABLE `fa_work_order_manufacture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_requirement`
--

DROP TABLE IF EXISTS `fa_work_order_requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_requirement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `work_order_id` int(11) NOT NULL,
  `stock_master_id` int(11) NOT NULL,
  `work_center_id` int(11) NOT NULL,
  `requested_unit` double NOT NULL COMMENT 'guess',
  `standard_cost` double NOT NULL,
  `location_id` int(11) NOT NULL,
  `unit_issued` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `workorder_id` (`work_order_id`),
  KEY `FK_wo_requirements_locations` (`location_id`),
  KEY `FK_workorder_requirement_workcenter` (`work_center_id`),
  KEY `FK_workorder_requirement_stock_master` (`stock_master_id`),
  CONSTRAINT `FK_workorder_requirement_location` FOREIGN KEY (`location_id`) REFERENCES `fa_location` (`id`),
  CONSTRAINT `FK_workorder_requirement_stock_master` FOREIGN KEY (`stock_master_id`) REFERENCES `fa_stock_master` (`id`),
  CONSTRAINT `FK_workorder_requirement_workcenter` FOREIGN KEY (`work_center_id`) REFERENCES `fa_work_center` (`id`),
  CONSTRAINT `FK_wo_requirements_workorders` FOREIGN KEY (`work_order_id`) REFERENCES `fa_work_order` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='original: wo_requirements';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_requirement`
--

LOCK TABLES `fa_work_order_requirement` WRITE;
/*!40000 ALTER TABLE `fa_work_order_requirement` DISABLE KEYS */;
INSERT INTO `fa_work_order_requirement` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1,0,1,10),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,1,1,0,1,10),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3,1,1,0,1,10),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,1,1,1,0,1,0),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,2,1,1,0,1,0),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,3,1,1,0,1,0),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,1,1,1,0,1,2),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,2,1,1,0,1,2),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,3,1,1,0,1,2),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,1,1,1,0,1,4),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,2,1,1,0,1,4),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,3,1,1,0,1,4),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,1,1,1,0,1,5),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,2,1,1,0,1,5),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,3,1,1,0,1,5),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,1,1,1,0,1,-5),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,2,1,1,0,1,-5),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,3,1,1,0,1,-5),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,1,1,1,0,1,-2),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,2,1,1,0,1,-2),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,1,1,1,0,1,-2);
/*!40000 ALTER TABLE `fa_work_order_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fa_work_order_type`
--

DROP TABLE IF EXISTS `fa_work_order_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_work_order_type` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `created_time` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `old_abbreviation` varchar(50) NOT NULL COMMENT 'to be deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: none. source: /includes/types.inc, /includes/sysnames.inc';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fa_work_order_type`
--

LOCK TABLES `fa_work_order_type` WRITE;
/*!40000 ALTER TABLE `fa_work_order_type` DISABLE KEYS */;
INSERT INTO `fa_work_order_type` VALUES (0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Assemble','WO_ASSEMBLY'),(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Unassemble','WO_UNASSEMBLY'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Advanced Manufacture','WO_ADVANCED');
/*!40000 ALTER TABLE `fa_work_order_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(256) NOT NULL DEFAULT '',
  `body` text,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `deleted_by` enum('sender','receiver') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sender` (`sender_id`),
  KEY `reciever` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `old_security_role`
--

DROP TABLE IF EXISTS `old_security_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `old_security_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(30) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `sections` text,
  `area` text,
  `active_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='original: security_roles';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `old_security_role`
--

LOCK TABLES `old_security_role` WRITE;
/*!40000 ALTER TABLE `old_security_role` DISABLE KEYS */;
INSERT INTO `old_security_role` VALUES (1,'Inquiries','Inquiries','768;2816;3072;3328;5632;5888;8192;8448;10752;11008;13312;15872;16128','257;258;259;260;513;514;515;516;517;518;519;520;521;522;523;524;525;773;774;2822;3073;3075;3076;3077;3329;3330;3331;3332;3333;3334;3335;5377;5633;5640;5889;5890;5891;7937;7938;7939;7940;8193;8194;8450;8451;10497;10753;11009;11010;11012;13313;13315;15617;15618;15619;15620;15621;15622;15623;15624;15625;15626;15873;15882;16129;16130;16131;16132',1),(2,'System Administrator','System Administrator','256;512;768;2816;3072;3328;5376;5632;5888;7936;8192;8448;10496;10752;11008;13056;13312;15616;15872;16128','257;258;259;260;513;514;515;516;517;518;519;520;521;522;523;524;525;526;769;770;771;772;773;774;2817;2818;2819;2820;2821;2822;2823;3073;3074;3082;3075;3076;3077;3078;3079;3080;3081;3329;3330;3331;3332;3333;3334;3335;5377;5633;5634;5635;5636;5637;5641;5638;5639;5640;5889;5890;5891;7937;7938;7939;7940;8193;8194;8195;8196;8197;8449;8450;8451;10497;10753;10754;10755;10756;10757;11009;11010;11011;11012;13057;13313;13314;13315;15617;15618;15619;15620;15621;15622;15623;15624;15628;15625;15626;15627;15873;15874;15875;15876;15877;15878;15879;15880;15883;15881;15882;16129;16130;16131;16132',1),(3,'Salesman','Salesman','768;3072;5632;8192;15872','773;774;3073;3075;3081;5633;8194;15873',1),(4,'Stock Manager','Stock Manager','2816;3072;3328;5632;5888;8192;8448;10752;11008;13312;15872;16128','2818;2822;3073;3076;3077;3329;3330;3330;3330;3331;3331;3332;3333;3334;3335;5633;5640;5889;5890;5891;8193;8194;8450;8451;10753;11009;11010;11012;13313;13315;15882;16129;16130;16131;16132',1),(5,'Production Manager','Production Manager','512;2816;3072;3328;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','521;523;524;2818;2819;2820;2821;2822;2823;3073;3074;3076;3077;3078;3079;3080;3081;3329;3330;3330;3330;3331;3331;3332;3333;3334;3335;5633;5640;5640;5889;5890;5891;8193;8194;8196;8197;8450;8451;10753;10755;11009;11010;11012;13313;13315;15617;15619;15620;15621;15624;15624;15876;15877;15880;15882;16129;16130;16131;16132',1),(6,'Purchase Officer','Purchase Officer','512;2816;3072;3328;5376;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','521;523;524;2818;2819;2820;2821;2822;2823;3073;3074;3076;3077;3078;3079;3080;3081;3329;3330;3330;3330;3331;3331;3332;3333;3334;3335;5377;5633;5635;5640;5640;5889;5890;5891;8193;8194;8196;8197;8449;8450;8451;10753;10755;11009;11010;11012;13313;13315;15617;15619;15620;15621;15624;15624;15876;15877;15880;15882;16129;16130;16131;16132',1),(7,'AR Officer','AR Officer','512;768;2816;3072;3328;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','521;523;524;771;773;774;2818;2819;2820;2821;2822;2823;3073;3073;3074;3075;3076;3077;3078;3079;3080;3081;3081;3329;3330;3330;3330;3331;3331;3332;3333;3334;3335;5633;5633;5634;5637;5638;5639;5640;5640;5889;5890;5891;8193;8194;8194;8196;8197;8450;8451;10753;10755;11009;11010;11012;13313;13315;15617;15619;15620;15621;15624;15624;15873;15876;15877;15878;15880;15882;16129;16130;16131;16132',1),(8,'AP Officer','AP Officer','512;2816;3072;3328;5376;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','257;258;259;260;521;523;524;769;770;771;772;773;774;2818;2819;2820;2821;2822;2823;3073;3074;3082;3076;3077;3078;3079;3080;3081;3329;3330;3331;3332;3333;3334;3335;5377;5633;5635;5640;5889;5890;5891;7937;7938;7939;7940;8193;8194;8196;8197;8449;8450;8451;10497;10753;10755;11009;11010;11012;13057;13313;13315;15617;15619;15620;15621;15624;15876;15877;15880;15882;16129;16130;16131;16132',1),(9,'Accountant','New Accountant','512;768;2816;3072;3328;5376;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','257;258;259;260;521;523;524;771;772;773;774;2818;2819;2820;2821;2822;2823;3073;3074;3075;3076;3077;3078;3079;3080;3081;3329;3330;3331;3332;3333;3334;3335;5377;5633;5634;5635;5637;5638;5639;5640;5889;5890;5891;7937;7938;7939;7940;8193;8194;8196;8197;8449;8450;8451;10497;10753;10755;11009;11010;11012;13313;13315;15617;15618;15619;15620;15621;15624;15873;15876;15877;15878;15880;15882;16129;16130;16131;16132',1),(10,'Sub Admin','Sub Admin','512;768;2816;3072;3328;5376;5632;5888;8192;8448;10752;11008;13312;15616;15872;16128','257;258;259;260;521;523;524;771;772;773;774;2818;2819;2820;2821;2822;2823;3073;3074;3082;3075;3076;3077;3078;3079;3080;3081;3329;3330;3331;3332;3333;3334;3335;5377;5633;5634;5635;5637;5638;5639;5640;5889;5890;5891;7937;7938;7939;7940;8193;8194;8196;8197;8449;8450;8451;10497;10753;10755;11009;11010;11012;13057;13313;13315;15617;15619;15620;15621;15624;15873;15874;15876;15877;15878;15879;15880;15882;16129;16130;16131;16132',1);
/*!40000 ALTER TABLE `old_security_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `old_sql_trail`
--

DROP TABLE IF EXISTS `old_sql_trail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `old_sql_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sql` text NOT NULL,
  `result_status` tinyint(1) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: sql_trail';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `old_sql_trail`
--

LOCK TABLES `old_sql_trail` WRITE;
/*!40000 ALTER TABLE `old_sql_trail` DISABLE KEYS */;
/*!40000 ALTER TABLE `old_sql_trail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `old_user_online`
--

DROP TABLE IF EXISTS `old_user_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `old_user_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` int(15) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timestamp` (`timestamp`),
  KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='original: useronline';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `old_user_online`
--

LOCK TABLES `old_user_online` WRITE;
/*!40000 ALTER TABLE `old_user_online` DISABLE KEYS */;
/*!40000 ALTER TABLE `old_user_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `display_date_format` varchar(6) NOT NULL DEFAULT '',
  `display_thousand_separator` varchar(1) NOT NULL DEFAULT '',
  `application_theme` varchar(50) NOT NULL DEFAULT '',
  `print_page_size` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Admin','Administrator','0000-00-00','','','',''),(2,'Demo','Demo','0000-00-00','','','','');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles_fields`
--

DROP TABLE IF EXISTS `profiles_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles_fields`
--

LOCK TABLES `profiles_fields` WRITE;
/*!40000 ALTER TABLE `profiles_fields` DISABLE KEYS */;
INSERT INTO `profiles_fields` VALUES (1,'lastname','Last Name','VARCHAR',50,3,1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3),(2,'firstname','First Name','VARCHAR',50,3,1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3),(3,'display_date_format','Display Date Format','VARCHAR',6,6,3,'/^[MDY]{6}$/','','','','','','',2,3),(4,'display_thousand_separator','Display Thousand Separator','VARCHAR',1,1,3,'/[.,]/','','','','','','',3,3),(5,'application_theme','Application Theme','VARCHAR',50,0,3,'','','','','','','',4,3),(6,'print_page_size','Print Page Size','VARCHAR',50,0,0,'','','','','','','',5,3);
/*!40000 ALTER TABLE `profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rights`
--

LOCK TABLES `rights` WRITE;
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','9a24eff8c15a6a141ece27eb6947da0f',1261146094,1369138588,1,1),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','099f825543f7850cc038b90aaff39fac',1261146096,0,0,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userx`
--

DROP TABLE IF EXISTS `userx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `price_decimal` smallint(6) NOT NULL,
  `quantity_decimal` smallint(6) NOT NULL,
  `rate_decimal` smallint(6) NOT NULL,
  `percent_decimal` smallint(6) NOT NULL,
  `show_general_ledger_status` tinyint(1) NOT NULL,
  `show_code_status` tinyint(1) NOT NULL,
  `show_hints_status` tinyint(1) NOT NULL,
  `last_visit_date` datetime DEFAULT NULL,
  `query_size` tinyint(1) DEFAULT NULL,
  `pos` smallint(6) DEFAULT NULL,
  `print_profile_id` int(11) NOT NULL,
  `show_graphic_link_status` tinyint(1) NOT NULL,
  `popup_report_window_status` tinyint(1) NOT NULL,
  `remember_document_date_status` tinyint(1) NOT NULL,
  `display_startup_tab_id` tinyint(1) NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_display_startup_tab` (`display_startup_tab_id`),
  KEY `FK_user_user_role` (`user_role_id`),
  KEY `FK_user_print_profile` (`print_profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='original: users. to be deleted.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userx`
--

LOCK TABLES `userx` WRITE;
/*!40000 ALTER TABLE `userx` DISABLE KEYS */;
INSERT INTO `userx` VALUES (1,'','adm@adm.com','',2,2,2,4,1,1,0,0,'2010-05-11 23:27:46',10,1,1,1,1,0,1,0),(2,'999-999-999','demo@demo.nu','en_US',9,2,2,3,1,1,0,0,'2008-02-06 19:02:35',10,1,1,1,1,0,1,0);
/*!40000 ALTER TABLE `userx` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-06-24  5:50:27
