-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.6.16 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table rokatenda_db.client
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `title` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nama_keluarga` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `kabkota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `identitas` enum('KTP','KITAS','PASPOR') COLLATE utf8_unicode_ci NOT NULL,
  `identitas_no` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `profile_picture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `company_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `entrepeneur` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sector` text COLLATE utf8_unicode_ci NOT NULL,
  `industry` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type_industry` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `industry_address` text COLLATE utf8_unicode_ci NOT NULL,
  `industry_kecamatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `industry_kabkota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `industry_propinsi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `industry_kode_pos` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `industry_telp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `industry_fax` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surveyor_id` int(11) DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_client_user` (`user_id`),
  KEY `fk_client_surveyor` (`surveyor_id`),
  CONSTRAINT `fk_client_surveyor` FOREIGN KEY (`surveyor_id`) REFERENCES `surveyor` (`id`),
  CONSTRAINT `fk_client_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.client: ~0 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.client_gallery
CREATE TABLE IF NOT EXISTS `client_gallery` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gallery_client` (`client_id`),
  CONSTRAINT `fk_gallery_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.client_gallery: ~0 rows (approximately)
/*!40000 ALTER TABLE `client_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_gallery` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.client_survey
CREATE TABLE IF NOT EXISTS `client_survey` (
  `client_id` int(11) NOT NULL,
  `qa_trans_kwalitas_jalan` bit(1) DEFAULT NULL,
  `qa_energy_listrik` bit(1) DEFAULT NULL,
  `qa_water_mng` bit(1) DEFAULT NULL,
  `qa_equity_to_asset_ratio` bit(1) DEFAULT NULL,
  `qa_fixed_asset_to_total_equity_ratio` bit(1) DEFAULT NULL,
  `qn_debt_to_equity_ratio` bit(1) DEFAULT NULL,
  `qn_long_term_liabilities` bit(1) DEFAULT NULL,
  `ps_extraversi_sikap_sosial` bit(1) DEFAULT NULL,
  `ps_agreebleness` bit(1) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  CONSTRAINT `fk_survey_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.client_survey: ~0 rows (approximately)
/*!40000 ALTER TABLE `client_survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_survey` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.migration: ~9 rows (approximately)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1446448619),
	('m140209_132017_init', 1446448631),
	('m140403_174025_create_account_table', 1446448633),
	('m140504_113157_update_tables', 1446448650),
	('m140504_130429_create_token_table', 1446448656),
	('m140830_171933_fix_ip_field', 1446448660),
	('m140830_172703_change_account_table_name', 1446448660),
	('m141222_110026_update_ip_field', 1446448665),
	('m141222_135246_alter_username_length', 1446448668),
	('m150614_103145_update_social_account_table', 1446448683),
	('m150623_212711_fix_username_notnull', 1446448687);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.social_account
CREATE TABLE IF NOT EXISTS `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`),
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.social_account: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_account` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.surveyor
CREATE TABLE IF NOT EXISTS `surveyor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `surveyor_no` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `identitas` enum('KTP','PASPOR','KITAS') COLLATE utf8_unicode_ci NOT NULL,
  `identitas_no` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_surveyor_user` (`user_id`),
  CONSTRAINT `fk_surveyor_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.surveyor: ~0 rows (approximately)
/*!40000 ALTER TABLE `surveyor` DISABLE KEYS */;
/*!40000 ALTER TABLE `surveyor` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.token
CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`),
  CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.token: ~0 rows (approximately)
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
/*!40000 ALTER TABLE `token` ENABLE KEYS */;


-- Dumping structure for table rokatenda_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_email` (`email`),
  UNIQUE KEY `user_unique_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table rokatenda_db.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`) VALUES
	(1, 'admin', 'admin@mail.com', '$2y$12$vtz7CPt4iqjH6y7XKiOVCeAYAZ/cObV297ynUrgafD0lJRXBNcJ2.', 'ujmNSN3rOw8LKa1Y3KHhZSHiIKWSpTmO', 1438334066, NULL, NULL, '127.0.0.1', 1438334066, 1438334066, 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
