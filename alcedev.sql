-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: Alce
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

--
-- Table structure for table `message_type`
--

DROP TABLE IF EXISTS `message_type`;

CREATE TABLE `message_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typename` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_type`
--

INSERT INTO `message_type` VALUES (1,'Deportes','2016-04-26 00:01:33','2016-04-25 19:31:33'),(2,'Social','2016-04-26 01:33:10','2016-04-28 20:37:26'),(3,'Internacional','2016-04-26 01:33:27','2016-04-28 20:37:31'),(4,'Sucesos','2016-04-29 00:26:03','2016-04-28 19:56:03'),(13,'politica','2016-04-29 01:02:39','2016-04-28 20:32:39');


--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_users` int(10) DEFAULT NULL,
  `id_tipo` int(10) DEFAULT NULL,
  `id_visibility` int(10) DEFAULT NULL,
  `id_rol` int(10) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_messages_users_idx` (`id_users`),
  KEY `fk_messages_tipo_idx` (`id_tipo`),
  KEY `fk_messages_visi_idx` (`id_visibility`),
  KEY `fk_messages_rol_idx` (`id_rol`),
  CONSTRAINT `fk_messages_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `message_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_visi` FOREIGN KEY (`id_visibility`) REFERENCES `visibility` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `messages`
--



INSERT INTO `messages` VALUES (17,1,2,3,3,'<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>','2016-04-28 00:25:54','2016-04-28 00:25:54'),(26,1,2,1,NULL,'<p>el mensaje es publico</p>','2016-04-28 21:44:06','2016-04-28 21:44:06'),(27,1,3,2,NULL,'<p>el mensaje es privado</p>','2016-04-28 21:44:23','2016-04-28 21:44:23'),(34,1,1,1,NULL,'mensaje publico','2016-04-29 01:12:48','2016-04-29 01:12:48'),(35,1,1,2,NULL,'<p>mensaje privado</p>','2016-04-29 01:13:01','2016-04-29 01:13:01'),(37,1,1,3,1,'<p>mensaje group</p>','2016-04-29 01:15:33','2016-04-29 01:15:33'),(38,2,3,1,NULL,'mensaje publico','2016-04-29 02:15:28','2016-04-29 02:15:28'),(39,2,1,2,NULL,'<p>mensaje privado</p>','2016-04-29 02:15:45','2016-04-29 02:15:45'),(40,2,1,1,NULL,'<p>otro mensaje publico</p>','2016-04-29 02:15:56','2016-04-29 02:15:56'),(41,2,1,3,3,'<p>mensaje en friend</p>','2016-04-29 02:16:13','2016-04-29 02:16:13'),(42,1,2,2,NULL,'<p><span style=\"background-color: rgb(74, 123, 140);\">asdasdasdasdasdasd</span></p>','2016-04-29 02:49:23','2016-04-29 02:49:23'),(45,1,1,1,NULL,'<ol><li><u>asd<b>asdasdasdasdasdasdasdasdasd<span style=\"background-color: rgb(74, 123, 140);\">sdfsdfsdfsdfsdf</span></b></u></li></ol><h3><ol><li><u><b><span style=\"background-color: rgb(74, 123, 140);\">sdfsdfsdfsdfssdfsdfsdf</span></b></u></li></ol></h3','2016-04-29 04:50:39','2016-04-29 04:50:39'),(46,1,3,1,NULL,'<span style=\"background-color: rgb(247, 198, 206);\">este e un mensaje de ysrael publico</span>','2016-04-29 18:34:39','2016-04-29 18:34:39');



--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `migrations`
--



INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_04_25_134314_create_users__rols_table',2);



--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `password_resets`
--



--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rolname` varchar(45) DEFAULT NULL,
  `id_visibility` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;

INSERT INTO `rol` VALUES (1,'Administrator',3,'2016-04-26 02:57:27','2016-04-26 02:57:27'),(2,'Family',3,'2016-04-26 02:59:02','2016-04-26 02:59:02'),(3,'Friends',3,'2016-04-26 02:59:28','2016-04-26 02:59:28');


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES (1,'Ysrael','ymendez@cuncode.com','$2y$10$qTF7AubwpH5B/CDc87qlSulQUUvf9FkaHCjYjN0K5oNAaIst.P9ta','UsdfI3r1seCq4Dwv1bnYbzaGIUkG7iWVMX25wGk8VtdMEpF3QxE7yYIts0od','2016-04-23 23:43:05','2016-04-29 19:23:57'),(2,'keiber','keiber@correo.com','$2y$10$qTF7AubwpH5B/CDc87qlSulQUUvf9FkaHCjYjN0K5oNAaIst.P9ta','Ed5cDXoU7ESkyOOsYVdlHIdIaW7b6akPd4xPkkeIPa5vxRyLpG1Lcf7IJ4VP','2016-04-24 03:09:01','2016-04-29 02:16:22'),(3,'ysrael','speiden@hotmail.com','$2y$10$6DKr3b3ztCoUiudfZnxn2uqkqP.MROro5oV802YR2ySqIL0tKepv6','r2UPcDGSykkBWXTwb2IzHse8JywEdVqIHVAiSHlkBPlczps9I2Vbtoqg0MVn','2016-04-25 19:01:00','2016-04-27 23:31:21'),(4,'celix','celix@correo.com','$2y$10$chm4dlmTCg/Swh2ad/4ay.sic7vE8uCA851WwjcQOmg7mw2OfgrJ6','6Hm0zSiIyk4gZmdA7Gh95lkNNuDQVWPFFEk4yJDsH8aOs1it4ovGrKpxYA0w','2016-04-27 18:32:48','2016-04-27 18:34:15');

UNLOCK TABLES;

--
-- Table structure for table `users_rol`
--

DROP TABLE IF EXISTS `users_rol`;

CREATE TABLE `users_rol` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_users` int(10) NOT NULL,
  `id_rol` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `users_rol`
--

INSERT INTO `users_rol` VALUES (35,1,1,'2016-04-29 01:20:19','2016-04-29 01:20:19'),(36,1,2,'2016-04-29 01:20:27','2016-04-29 01:20:27'),(37,2,3,'2016-04-29 01:21:20','2016-04-29 01:21:20');


--
-- Table structure for table `visibility`
--

DROP TABLE IF EXISTS `visibility`;

CREATE TABLE `visibility` (
  `id` int(11) NOT NULL,
  `visibilityname` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `visibility`
--



INSERT INTO `visibility` VALUES (1,'Publica',NULL,NULL),(2,'Privada',NULL,NULL),(3,'Group',NULL,NULL);

-- Dump completed on 2016-04-29 10:27:14
