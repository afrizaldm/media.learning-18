-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table medilearn.chatbox
DROP TABLE IF EXISTS `chatbox`;
CREATE TABLE IF NOT EXISTS `chatbox` (
  `id_chatbox` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) DEFAULT NULL,
  `chat` text,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id_chatbox`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.chatbox: ~12 rows (approximately)
DELETE FROM `chatbox`;
/*!40000 ALTER TABLE `chatbox` DISABLE KEYS */;
INSERT INTO `chatbox` (`id_chatbox`, `userid`, `chat`, `waktu`) VALUES
	(1, '5130411107', 'Hello World!', '2018-04-15 22:46:45'),
	(2, '14421028', 'Hi', '2018-04-15 23:16:41'),
	(3, '3390', 'Nice to meet you', '2018-04-16 13:35:38'),
	(4, '14421028', 'Time', '2018-04-16 14:23:11'),
	(5, '3390', 'What time, dhea sensei?', '2018-04-17 13:55:10'),
	(6, '14421028', 'because', '2018-04-17 21:27:08'),
	(7, '67811', 'Hi', '2018-04-18 01:04:53'),
	(8, '14421026', 'No', '2018-04-18 19:58:05'),
	(9, '3390', 'Anyone here?', '2018-04-18 21:52:28'),
	(10, '123456', 'hallo bu guru', '2018-07-30 12:24:35'),
	(11, '123456', 'hari ini apakah ada hal yang perlu untuk di tanyakan', '2018-07-30 12:24:58'),
	(12, '123456', 'hari ini saya akan melakukan sebuah cara bagaiman untuk mendapatkan sebuah', '2018-07-30 12:25:22'),
	(13, '123456789', 'hallo adm', '2018-07-30 12:27:33'),
	(14, '123456789', 'FDFJKD', '2018-07-30 15:22:27');
/*!40000 ALTER TABLE `chatbox` ENABLE KEYS */;

-- Dumping structure for table medilearn.jawaban
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `tema` varchar(20) DEFAULT NULL,
  `file_jawaban` varchar(255) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.jawaban: ~3 rows (approximately)
DELETE FROM `jawaban`;
/*!40000 ALTER TABLE `jawaban` DISABLE KEYS */;
/*!40000 ALTER TABLE `jawaban` ENABLE KEYS */;

-- Dumping structure for table medilearn.media
DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `tema` varchar(10) DEFAULT NULL,
  `nama_materi` varchar(100) DEFAULT NULL,
  `materi` text,
  `file_materi` varchar(255) DEFAULT NULL,
  `file_tugas` varchar(255) DEFAULT NULL,
  `file_video` varchar(255) DEFAULT NULL,
  `status` enum('ACTIVE','NOT ACTIVE') DEFAULT 'NOT ACTIVE',
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.media: ~1 rows (approximately)
DELETE FROM `media`;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Dumping structure for table medilearn.respon
DROP TABLE IF EXISTS `respon`;
CREATE TABLE IF NOT EXISTS `respon` (
  `id_respon` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `id_media` varchar(10) NOT NULL,
  `file_respon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_respon`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.respon: ~3 rows (approximately)
DELETE FROM `respon`;
/*!40000 ALTER TABLE `respon` DISABLE KEYS */;
/*!40000 ALTER TABLE `respon` ENABLE KEYS */;

-- Dumping structure for table medilearn.tugas
DROP TABLE IF EXISTS `tugas`;
CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tugas` varchar(100) DEFAULT NULL,
  `tema` varchar(30) DEFAULT NULL,
  `file_tugas` varchar(255) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `status` enum('ACTIVE','NOT ACTIVE') DEFAULT 'NOT ACTIVE',
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.tugas: ~1 rows (approximately)
DELETE FROM `tugas`;
/*!40000 ALTER TABLE `tugas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tugas` ENABLE KEYS */;

-- Dumping structure for table medilearn.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `alamat` text,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('student','teacher','teacher3') DEFAULT 'student',
  PRIMARY KEY (`id_user`,`userid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table medilearn.users: ~12 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `userid`, `first_name`, `last_name`, `alamat`, `email`, `username`, `password`, `level`) VALUES
	(2, '5130411097', 'Zed', 'Far', 'Jogja', 'zed@gmail.com', 'zed', '89e3eb66497b398d7d2250f0093903c6', 'teacher3'),
	(3, '97808', 'Siswa', 'Satu', 'JJ UH 4 no.396', 'siswa@gmail.com', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'student'),
	(4, '14421028', 'Dhea', 'Lintang Suswandana', '-', 'guru1@gmail.com', 'dhea', '202cb962ac59075b964b07152d234b70', 'teacher'),
	(5, '14421022', 'Tutut', 'S', 'Jogja', 'guru2@gmail.com', 'tutut', 'a2ca486858249bc7460fba78018f74a8', 'teacher'),
	(9, '5130411107', 'Silver', 'Poop', 'Motenia, 4th Atlantis St.', 'silver.poop@gmail.com', 'silver', '0421008445828ceb46f496700a5fa65e', 'teacher'),
	(10, '14421026', 'Tetra', 'R', 'jogja', 'guru3@gmail.com', 'tetra', 'f0e4bf5607813e80a625bdd7b37141cf', 'teacher3'),
	(11, '3390', 'Mitsuhide', 'Samanosuke Akechi', 'Onimusha, 3rd St.', 'mitsuhide.akechi@yahoo.com', 'akechi', '7a070ef98d075edd467494d1f63c0599', 'student'),
	(13, '97800', 'Sweaper', 'Night', 'Moon', 'x@gmail.com', 'sweaper', 'e813bb1141c609dee2cb6c2dda910e97', 'student'),
	(14, '714069', 'Ken', 'Ogawa', 'Distrik 7 blok 4, no.69', 'ken.ogawa@yahoo.jp', 'kenshin', '891aa0940a8c24a51e7fc9ce416edbdd', 'teacher3'),
	(15, '67811', 'Zaq', 'Zaq', '-', 'zaq@gmail.com', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'student'),
	(16, '123456', 'Dhea', 'adm', 'sugihan', 'adm@gmail.com', 'afrizaldm', '202cb962ac59075b964b07152d234b70', 'teacher3'),
	(17, '123456789', 'afrizal', 'dm', 'sugihan', 'afrizal@gmail.com', 'afrizal', '202cb962ac59075b964b07152d234b70', 'student');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for view medilearn.v_belajar
DROP VIEW IF EXISTS `v_belajar`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_belajar` (
	`id_materi` INT(11) NOT NULL,
	`first_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`tema` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`nama_materi` VARCHAR(100) NULL COLLATE 'latin1_swedish_ci',
	`materi` TEXT NULL COLLATE 'latin1_swedish_ci',
	`file_materi` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`file_tugas` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`file_video` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`status` ENUM('ACTIVE','NOT ACTIVE') NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view medilearn.v_chat
DROP VIEW IF EXISTS `v_chat`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_chat` (
	`first_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`chat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`waktu` DATETIME NULL,
	`level` ENUM('student','teacher','teacher3') NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view medilearn.v_jawab
DROP VIEW IF EXISTS `v_jawab`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_jawab` (
	`userid` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`first_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`last_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_materi` INT(11) NULL,
	`file_jawaban` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view medilearn.v_kotakmasuk
DROP VIEW IF EXISTS `v_kotakmasuk`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_kotakmasuk` (
	`userid` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`first_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`last_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`tema` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`nama_materi` VARCHAR(100) NULL COLLATE 'latin1_swedish_ci',
	`guru` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`file_jawaban` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view medilearn.v_tugas
DROP VIEW IF EXISTS `v_tugas`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_tugas` (
	`id_tugas` INT(11) NOT NULL,
	`first_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`nama_tugas` VARCHAR(100) NULL COLLATE 'latin1_swedish_ci',
	`file_tugas` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci',
	`tema` VARCHAR(30) NULL COLLATE 'latin1_swedish_ci',
	`status` ENUM('ACTIVE','NOT ACTIVE') NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view medilearn.v_belajar
DROP VIEW IF EXISTS `v_belajar`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_belajar`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_belajar` AS select `media`.`id_materi` AS `id_materi`,`users`.`first_name` AS `first_name`,`media`.`tema` AS `tema`,`media`.`nama_materi` AS `nama_materi`,`media`.`materi` AS `materi`,`media`.`file_materi` AS `file_materi`,`media`.`file_tugas` AS `file_tugas`,`media`.`file_video` AS `file_video`, media.`status` AS status from (`media` join `users`) where (`media`.`userid` = `users`.`userid`) ;

-- Dumping structure for view medilearn.v_chat
DROP VIEW IF EXISTS `v_chat`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_chat`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_chat` AS select `users`.`first_name` AS `first_name`,`chatbox`.`chat` AS `chat`,`chatbox`.`waktu` AS `waktu`,`users`.`level` AS `level` from (`chatbox` join `users`) where (`users`.`userid` = `chatbox`.`userid`) ;

-- Dumping structure for view medilearn.v_jawab
DROP VIEW IF EXISTS `v_jawab`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_jawab`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jawab` AS select `jawaban`.`userid` AS `userid`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`jawaban`.`id_materi` AS `id_materi`,`jawaban`.`file_jawaban` AS `file_jawaban` from (`jawaban` join `users`) where (`users`.`userid` = `jawaban`.`userid`) ;

-- Dumping structure for view medilearn.v_kotakmasuk
DROP VIEW IF EXISTS `v_kotakmasuk`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_kotakmasuk`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kotakmasuk` AS select `v_jawab`.`userid` AS `userid`,`v_jawab`.`first_name` AS `first_name`,`v_jawab`.`last_name` AS `last_name`,`v_belajar`.`tema` AS `tema`,`v_belajar`.`nama_materi` AS `nama_materi`,`v_belajar`.`first_name` AS `guru`,`v_jawab`.`file_jawaban` AS `file_jawaban` from (`v_jawab` join `v_belajar`) where (`v_belajar`.`id_materi` = `v_jawab`.`id_materi`) ;

-- Dumping structure for view medilearn.v_tugas
DROP VIEW IF EXISTS `v_tugas`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_tugas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tugas` AS select tugas.id_tugas AS id_tugas , `users`.`first_name` AS `first_name`,`tugas`.`nama_tugas` AS `nama_tugas`,`tugas`.`file_tugas` AS `file_tugas`, tugas.tema AS tema, tugas.`status` from (`tugas` join `users`) where (`users`.`userid` = `tugas`.`userid`) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
