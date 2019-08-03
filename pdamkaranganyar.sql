# Host: localhost  (Version 5.6.21)
# Date: 2019-07-07 17:03:22
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "tb_chat"
#

CREATE TABLE `tb_chat` (
  `id_chat` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) DEFAULT NULL,
  `pesan` text,
  `id_target` varchar(50) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tb_chat"
#


#
# Structure for table "tb_login"
#

CREATE TABLE `tb_login` (
  `no_kontrol` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(3) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no_kontrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_login"
#

REPLACE INTO `tb_login` VALUES ('admin','e10adc3949ba59abbe56e057f20f883e',1,'2019-07-03','yes'),('B 080 0068 00001','e10adc3949ba59abbe56e057f20f883e',2,'2019-07-07','no'),('B 080 0068 00008','e10adc3949ba59abbe56e057f20f883e',2,NULL,'yes'),('B 080 0068 00009','e10adc3949ba59abbe56e057f20f883e',2,'2019-07-03','yes'),('B 080 0068 00010','e10adc3949ba59abbe56e057f20f883e',2,'2019-07-03','yes'),('B 080 0068 00011','e10adc3949ba59abbe56e057f20f883e',2,'2019-07-03','yes');

#
# Structure for table "tb_keluhan"
#

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_permohon` varchar(50) DEFAULT NULL,
  `alamat_permohon` varchar(200) DEFAULT NULL,
  `tanggal_permohon` date DEFAULT NULL,
  `no_agenda` varchar(50) DEFAULT NULL,
  `ukuran_meter` varchar(20) DEFAULT NULL,
  `merek_meter` varchar(50) DEFAULT NULL,
  `seri_meter` varchar(50) DEFAULT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `tgl_pk` date DEFAULT NULL,
  `tgl_meter` date DEFAULT NULL,
  `tgl_pasang` date DEFAULT NULL,
  `jenis_keluhan` varchar(50) DEFAULT NULL,
  `catatan` text,
  `no_kontrol` varchar(50) DEFAULT NULL,
  `reply_keluhan` text,
  PRIMARY KEY (`id_keluhan`),
  KEY `no_kontrol` (`no_kontrol`),
  CONSTRAINT `tb_keluhan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "tb_keluhan"
#

REPLACE INTO `tb_keluhan` VALUES (1,'Jemz','saptamarga','2019-07-03','123','23','23','23','2333-12-23','3122-02-02','0000-00-00','2121-02-23','rekening_kemahalan','12312','B 080 0068 00010','sku'),(2,'Jemz','saptamarga','2019-07-03','12','12','23','23','0001-02-01','0122-02-02','0002-02-02','0002-02-02','air_tidak_keluar','23123','B 080 0068 00010','yayaya');

#
# Structure for table "tb_pelanggan"
#

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(4) NOT NULL AUTO_INCREMENT,
  `no_kontrol` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `no_rek` varchar(70) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `pbb` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`),
  KEY `no_kontrol` (`no_kontrol`),
  CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tb_pelanggan"
#

REPLACE INTO `tb_pelanggan` VALUES (1,'B 080 0068 00008','theo','123123','d','asdasd','asdas','palembang','081231231'),(3,'B 080 0068 00009','qwe','qweq','58cc519618ceb7f62117817537e9d0fb.png','9adc0ba430e8b6d970d29f38377e7ffe.png','381b21416c256d113d86456adbe0d5da.jpg','wasdasw','12312'),(4,'B 080 0068 00010','Jemz','1234','a158c4af0de990b0b0cba0c352cfdfb5.jpg','388fcff6a97b5d804f2a5eaee1d2ee51.png','90bd83271ce379c88eaa8721b9b75cb1.jpg','saptamarga','08123123123'),(5,'admin','admin','2123','waeq','qweqw','qwe','pdam','71112'),(6,'B 080 0068 00011','theo','7812812','2110e7a1bdc7242ae9d6687850ba7cfa.jpg','1de594080514292701a95848966bf04a.jpg','d0177cf46db84d815a812d46613319e3.jpg','bukit kecil','08123812181'),(8,'B 080 0068 00001','Jemz','1231','419fec77929f99bec23b17a978956d44.jpeg','8241e2ac4536ec78dfadc0b6d2f842f1.jpeg','130afb73752d4cd7c93d96157ca8c1e6.jpeg','saptmarga','08123131231');

#
# Structure for table "tb_pengumuman"
#

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `wilayah` varchar(50) DEFAULT NULL,
  `isi_pengumuman` text,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "tb_pengumuman"
#

REPLACE INTO `tb_pengumuman` VALUES (1,'EVENT','2019-05-23','19:00:00','Palembang','Diharapkan kehadiran semua peserta didik','2019-07-03 23:34:45'),(2,'Pengembangan IT','2019-05-12','06:21:00','Kenten','tidak ada baik saja kok','2019-07-03 23:36:12'),(3,'RAMAIKAN MOTO GP','2312-12-02','14:31:00','PALEMBANG','ACARA MENONTON MOTO GP BERSAMA','2019-07-04 02:16:03'),(4,'bebas','2019-07-06','14:22:00','palembang','perhatian perhatin','2019-07-06 09:51:51');
