/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.16-MariaDB : Database - medilearn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`medilearn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `medilearn`;

/*Table structure for table `chatbox` */

DROP TABLE IF EXISTS `chatbox`;

CREATE TABLE `chatbox` (
  `id_chatbox` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) DEFAULT NULL,
  `chat` text,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`id_chatbox`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `chatbox` */

insert  into `chatbox`(`id_chatbox`,`userid`,`chat`,`waktu`) values (1,'5130411107','Hello World!','2018-04-15 22:46:45'),(2,'14421028','Hi','2018-04-15 23:16:41'),(3,'3390','Nice to meet you','2018-04-16 13:35:38'),(4,'14421028','Time','2018-04-16 14:23:11'),(5,'3390','What time, dhea sensei?','2018-04-17 13:55:10'),(6,'14421028','because','2018-04-17 21:27:08'),(7,'67811','Hi','2018-04-18 01:04:53'),(8,'14421026','No','2018-04-18 19:58:05'),(9,'3390','Anyone here?','2018-04-18 21:52:28');

/*Table structure for table `jawaban` */

DROP TABLE IF EXISTS `jawaban`;

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) DEFAULT NULL,
  `tema` varchar(20) DEFAULT NULL,
  `file_jawaban` varchar(255) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `jawaban` */

insert  into `jawaban`(`id_jawaban`,`id_materi`,`tema`,`file_jawaban`,`userid`) values (1,3,'Fisika',NULL,'97808'),(2,3,'Fisika','5948-atransaction_receipt.pdf','3390'),(3,12,'Fisika','28028-atransaction_receipt.pdf','3390');

/*Table structure for table `media` */

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `tema` varchar(10) DEFAULT NULL,
  `nama_materi` varchar(100) DEFAULT NULL,
  `materi` text,
  `file_materi` varchar(255) DEFAULT NULL,
  `file_tugas` varchar(255) DEFAULT NULL,
  `file_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `media` */

insert  into `media`(`id_materi`,`userid`,`tema`,`nama_materi`,`materi`,`file_materi`,`file_tugas`,`file_video`) values (4,'714069','Fisika','Zat Cair','<p>Air asw</p>','40161-text.pdf','22037-dok.docx','62053-1.mp4'),(10,'14421028','Fisika','Zat','<p>Kimia Adalah<strong> ZAT&nbsp;</strong></p>','28161-tester.docx','56685-tester.docx','8577-tester.mp4'),(11,'14421026','Fisika','Nightcore','<p>Materisdasd</p>','10054-tester.docx','64646-tester.docx','54932-ryuukoi-overlord-special---07.mp4'),(12,'14421026','Literasi','Abtract','<p><em>Air adalah bagian penting dari kehidupan mahkluk hidup yang tidak tergantikan. Terutama manusia sangat membutuhkan air dalam kehidupan sehari-hari untuk bertahan hidup, dan air berguna dalam bidang pertanian untuk membantu proses irigasi. Kualitas air dan tanah sangat diperhitungkan dalam proses kesesuaian irigasi dibidang pertanian. Untuk memperhitungkan kualitas tersebut digunakan standar kualitas air yaitu Sodium Absorbtion Ratio (SAR). SAR adalah sebuah ketentuan standar dalam mengukur kesesuaian kualitas air dalam hal irigasi pertanian. SAR adalah kemampuan air dalam mengabsorbsi sodium dengan menggunakan kadar nilai Sodium (Na), Kalsium (Ca), dan Magnesium (Mg) dari air.</em></p>','3003-tester.docx','60180-tester.docx','97236-tester.mp4'),(13,'14421028','Fisika','Pendahuluan','<p>Kualitas air tanah sangat diperhitungkan di dalam proses kesesuaian irigasi dibidang pertanian. Untuk memperhitungkan kualitas tersebut digunakan standar kualitas air yaitu Sodium Absorbtion Ratio (SAR). SAR adalah salah satu faktor yang digunakan sebagai penentu kualitas air untuk kesesuaian irigasi pertanian dari beberapa faktor penentu lainya, tapi SAR sangat berperan penting dalam proses tersebut, namun di Indonesia SAR tidak terlalu diperhatikan bahkan tidak dicantumkan di dalam undang-undang dan peraturan pemerintah sebagai parameter penentu kualitas air untuk kesesuaian irigasi pertanian. SAR digunakan untuk mengukur kualitas air dalam irigasi pertanian yang mengacu pada kemampuan air dalam mengarbsorbsi sodium, semakin kecil nilai terhadap</p>','89489-tester.docx','79063-','36237-'),(14,'14421022','Fisika','Mr Bean','<p>Bean</p>','98185-tester.docx','15175-tester.docx','18006-(11)-the-return-of-mr.-bean---episode-2---mr.-bean-official---youtube.mp4');

/*Table structure for table `respon` */

DROP TABLE IF EXISTS `respon`;

CREATE TABLE `respon` (
  `id_respon` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL,
  `id_media` varchar(10) NOT NULL,
  `file_respon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_respon`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `respon` */

insert  into `respon`(`id_respon`,`userid`,`id_media`,`file_respon`) values (1,'std00001','medi00001',NULL),(2,'std00002','medi00001',NULL),(3,'std00001','medi00001',NULL);

/*Table structure for table `tugas` */

DROP TABLE IF EXISTS `tugas`;

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tugas` varchar(100) DEFAULT NULL,
  `tema` varchar(30) DEFAULT NULL,
  `file_tugas` varchar(255) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tugas` */

insert  into `tugas`(`id_tugas`,`nama_tugas`,`tema`,`file_tugas`,`userid`) values (1,'Fisika','Fisika','4867-dok.docx','14421028'),(2,'Tes','Fisika','60286-text.pdf','14421028');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`userid`,`first_name`,`last_name`,`alamat`,`email`,`username`,`password`,`level`) values (2,'5130411097','Zed','Far','Jogja','zed@gmail.com','zed','89e3eb66497b398d7d2250f0093903c6','teacher3'),(3,'97808','Siswa','Satu','JJ UH 4 no.396','siswa@gmail.com','siswa','bcd724d15cde8c47650fda962968f102','student'),(4,'14421028','Dhea','Lintang Suswandana','-','guru1@gmail.com','dhea','d585b80abca3e02bae79fef9a17fe5c3','teacher'),(5,'14421022','Tutut','S','Jogja','guru2@gmail.com','tutut','a2ca486858249bc7460fba78018f74a8','teacher'),(9,'5130411107','Silver','Poop','Motenia, 4th Atlantis St.','silver.poop@gmail.com','silver','0421008445828ceb46f496700a5fa65e','teacher'),(10,'14421026','Tetra','R','jogja','guru3@gmail.com','tetra','f0e4bf5607813e80a625bdd7b37141cf','teacher3'),(11,'3390','Mitsuhide','Samanosuke Akechi','Onimusha, 3rd St.','mitsuhide.akechi@yahoo.com','akechi','7a070ef98d075edd467494d1f63c0599','student'),(13,'97800','Sweaper','Night','Moon','x@gmail.com','sweaper','e813bb1141c609dee2cb6c2dda910e97','student'),(14,'714069','Ken','Ogawa','Distrik 7 blok 4, no.69','ken.ogawa@yahoo.jp','kenshin','891aa0940a8c24a51e7fc9ce416edbdd','teacher3'),(15,'67811','Zaq','Zaq','-','zaq@gmail.com','qwerty','d8578edf8458ce06fbc5bb76a58c5ca4','student');

/*Table structure for table `v_belajar` */

DROP TABLE IF EXISTS `v_belajar`;

/*!50001 DROP VIEW IF EXISTS `v_belajar` */;
/*!50001 DROP TABLE IF EXISTS `v_belajar` */;

/*!50001 CREATE TABLE  `v_belajar`(
 `id_materi` int(11) ,
 `first_name` varchar(50) ,
 `tema` varchar(10) ,
 `nama_materi` varchar(100) ,
 `materi` text ,
 `file_materi` varchar(255) ,
 `file_tugas` varchar(255) ,
 `file_video` varchar(255) 
)*/;

/*Table structure for table `v_chat` */

DROP TABLE IF EXISTS `v_chat`;

/*!50001 DROP VIEW IF EXISTS `v_chat` */;
/*!50001 DROP TABLE IF EXISTS `v_chat` */;

/*!50001 CREATE TABLE  `v_chat`(
 `first_name` varchar(50) ,
 `chat` text ,
 `waktu` datetime ,
 `level` enum('student','teacher','teacher3') 
)*/;

/*Table structure for table `v_jawab` */

DROP TABLE IF EXISTS `v_jawab`;

/*!50001 DROP VIEW IF EXISTS `v_jawab` */;
/*!50001 DROP TABLE IF EXISTS `v_jawab` */;

/*!50001 CREATE TABLE  `v_jawab`(
 `userid` varchar(20) ,
 `first_name` varchar(50) ,
 `last_name` varchar(50) ,
 `id_materi` int(11) ,
 `file_jawaban` varchar(255) 
)*/;

/*Table structure for table `v_kotakmasuk` */

DROP TABLE IF EXISTS `v_kotakmasuk`;

/*!50001 DROP VIEW IF EXISTS `v_kotakmasuk` */;
/*!50001 DROP TABLE IF EXISTS `v_kotakmasuk` */;

/*!50001 CREATE TABLE  `v_kotakmasuk`(
 `userid` varchar(20) ,
 `first_name` varchar(50) ,
 `last_name` varchar(50) ,
 `tema` varchar(10) ,
 `nama_materi` varchar(100) ,
 `guru` varchar(50) ,
 `file_jawaban` varchar(255) 
)*/;

/*Table structure for table `v_tugas` */

DROP TABLE IF EXISTS `v_tugas`;

/*!50001 DROP VIEW IF EXISTS `v_tugas` */;
/*!50001 DROP TABLE IF EXISTS `v_tugas` */;

/*!50001 CREATE TABLE  `v_tugas`(
 `first_name` varchar(50) ,
 `nama_tugas` varchar(100) ,
 `file_tugas` varchar(255) 
)*/;

/*View structure for view v_belajar */

/*!50001 DROP TABLE IF EXISTS `v_belajar` */;
/*!50001 DROP VIEW IF EXISTS `v_belajar` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_belajar` AS select `media`.`id_materi` AS `id_materi`,`users`.`first_name` AS `first_name`,`media`.`tema` AS `tema`,`media`.`nama_materi` AS `nama_materi`,`media`.`materi` AS `materi`,`media`.`file_materi` AS `file_materi`,`media`.`file_tugas` AS `file_tugas`,`media`.`file_video` AS `file_video` from (`media` join `users`) where (`media`.`userid` = `users`.`userid`) */;

/*View structure for view v_chat */

/*!50001 DROP TABLE IF EXISTS `v_chat` */;
/*!50001 DROP VIEW IF EXISTS `v_chat` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_chat` AS select `users`.`first_name` AS `first_name`,`chatbox`.`chat` AS `chat`,`chatbox`.`waktu` AS `waktu`,`users`.`level` AS `level` from (`chatbox` join `users`) where (`users`.`userid` = `chatbox`.`userid`) */;

/*View structure for view v_jawab */

/*!50001 DROP TABLE IF EXISTS `v_jawab` */;
/*!50001 DROP VIEW IF EXISTS `v_jawab` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jawab` AS select `jawaban`.`userid` AS `userid`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`jawaban`.`id_materi` AS `id_materi`,`jawaban`.`file_jawaban` AS `file_jawaban` from (`jawaban` join `users`) where (`users`.`userid` = `jawaban`.`userid`) */;

/*View structure for view v_kotakmasuk */

/*!50001 DROP TABLE IF EXISTS `v_kotakmasuk` */;
/*!50001 DROP VIEW IF EXISTS `v_kotakmasuk` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kotakmasuk` AS select `v_jawab`.`userid` AS `userid`,`v_jawab`.`first_name` AS `first_name`,`v_jawab`.`last_name` AS `last_name`,`v_belajar`.`tema` AS `tema`,`v_belajar`.`nama_materi` AS `nama_materi`,`v_belajar`.`first_name` AS `guru`,`v_jawab`.`file_jawaban` AS `file_jawaban` from (`v_jawab` join `v_belajar`) where (`v_belajar`.`id_materi` = `v_jawab`.`id_materi`) */;

/*View structure for view v_tugas */

/*!50001 DROP TABLE IF EXISTS `v_tugas` */;
/*!50001 DROP VIEW IF EXISTS `v_tugas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tugas` AS select `users`.`first_name` AS `first_name`,`tugas`.`nama_tugas` AS `nama_tugas`,`tugas`.`file_tugas` AS `file_tugas` from (`tugas` join `users`) where (`users`.`userid` = `tugas`.`userid`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
