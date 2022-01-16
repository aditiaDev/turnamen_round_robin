-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2022 pada 00.15
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_turnamen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dtl_pertandingan`
--

CREATE TABLE `tb_dtl_pertandingan` (
  `id_dtl_pertandingan` int(11) NOT NULL,
  `id_team` varchar(25) DEFAULT NULL,
  `hasil` enum('MENANG','KALAH','SERI') DEFAULT NULL,
  `skor` int(11) DEFAULT NULL,
  `id_pertandingan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dtl_pertandingan`
--

INSERT INTO `tb_dtl_pertandingan` (`id_dtl_pertandingan`, `id_team`, `hasil`, `skor`, `id_pertandingan`) VALUES
(841, 'TM2022010006', 'MENANG', 3, 'VS20220100001'),
(842, 'TM2022010007', 'KALAH', 0, 'VS20220100001'),
(843, 'TM2022010006', 'SERI', 1, 'VS20220100002'),
(844, 'TM2022010012', 'SERI', 1, 'VS20220100002'),
(845, 'TM2022010006', 'KALAH', 0, 'VS20220100003'),
(846, 'TM2022010016', 'MENANG', 3, 'VS20220100003'),
(847, 'TM2022010006', 'MENANG', 3, 'VS20220100004'),
(848, 'TM2022010020', 'KALAH', 0, 'VS20220100004'),
(849, 'TM2022010007', 'KALAH', 0, 'VS20220100005'),
(850, 'TM2022010006', 'MENANG', 3, 'VS20220100005'),
(851, 'TM2022010007', 'MENANG', 3, 'VS20220100006'),
(852, 'TM2022010012', 'KALAH', 0, 'VS20220100006'),
(853, 'TM2022010007', 'KALAH', 0, 'VS20220100007'),
(854, 'TM2022010016', 'MENANG', 3, 'VS20220100007'),
(855, 'TM2022010007', 'KALAH', 0, 'VS20220100008'),
(856, 'TM2022010020', 'MENANG', 3, 'VS20220100008'),
(857, 'TM2022010012', 'MENANG', 3, 'VS20220100009'),
(858, 'TM2022010006', 'KALAH', 0, 'VS20220100009'),
(859, 'TM2022010012', 'KALAH', 0, 'VS20220100010'),
(860, 'TM2022010007', 'MENANG', 3, 'VS20220100010'),
(861, 'TM2022010012', 'MENANG', 3, 'VS20220100011'),
(862, 'TM2022010016', 'KALAH', 0, 'VS20220100011'),
(863, 'TM2022010012', 'MENANG', 3, 'VS20220100012'),
(864, 'TM2022010020', 'KALAH', 0, 'VS20220100012'),
(865, 'TM2022010016', 'MENANG', 3, 'VS20220100013'),
(866, 'TM2022010006', 'KALAH', 0, 'VS20220100013'),
(867, 'TM2022010016', 'MENANG', 3, 'VS20220100014'),
(868, 'TM2022010007', 'KALAH', 0, 'VS20220100014'),
(869, 'TM2022010016', 'MENANG', 3, 'VS20220100015'),
(870, 'TM2022010012', 'KALAH', 0, 'VS20220100015'),
(871, 'TM2022010016', 'MENANG', 3, 'VS20220100016'),
(872, 'TM2022010020', 'KALAH', 0, 'VS20220100016'),
(873, 'TM2022010020', 'MENANG', 3, 'VS20220100017'),
(874, 'TM2022010006', 'KALAH', 0, 'VS20220100017'),
(875, 'TM2022010020', 'MENANG', 3, 'VS20220100018'),
(876, 'TM2022010007', 'KALAH', 0, 'VS20220100018'),
(877, 'TM2022010020', 'MENANG', 3, 'VS20220100019'),
(878, 'TM2022010012', 'KALAH', 0, 'VS20220100019'),
(879, 'TM2022010020', 'MENANG', 3, 'VS20220100020'),
(880, 'TM2022010016', 'KALAH', 0, 'VS20220100020'),
(881, 'TM2022010003', 'MENANG', 3, 'VS20220100021'),
(882, 'TM2022010008', 'KALAH', 0, 'VS20220100021'),
(883, 'TM2022010003', 'MENANG', 3, 'VS20220100022'),
(884, 'TM2022010009', 'KALAH', 0, 'VS20220100022'),
(885, 'TM2022010003', 'MENANG', 3, 'VS20220100023'),
(886, 'TM2022010017', 'KALAH', 0, 'VS20220100023'),
(887, 'TM2022010003', 'MENANG', 3, 'VS20220100024'),
(888, 'TM2022010018', 'KALAH', 0, 'VS20220100024'),
(889, 'TM2022010008', 'MENANG', 3, 'VS20220100025'),
(890, 'TM2022010003', 'KALAH', 0, 'VS20220100025'),
(891, 'TM2022010008', 'MENANG', 3, 'VS20220100026'),
(892, 'TM2022010009', 'KALAH', 0, 'VS20220100026'),
(893, 'TM2022010008', 'MENANG', 3, 'VS20220100027'),
(894, 'TM2022010017', 'KALAH', 0, 'VS20220100027'),
(895, 'TM2022010008', 'MENANG', 3, 'VS20220100028'),
(896, 'TM2022010018', 'KALAH', 0, 'VS20220100028'),
(897, 'TM2022010009', 'MENANG', 3, 'VS20220100029'),
(898, 'TM2022010003', 'KALAH', 0, 'VS20220100029'),
(899, 'TM2022010009', 'MENANG', 3, 'VS20220100030'),
(900, 'TM2022010008', 'KALAH', 0, 'VS20220100030'),
(901, 'TM2022010009', 'MENANG', 3, 'VS20220100031'),
(902, 'TM2022010017', 'KALAH', 0, 'VS20220100031'),
(903, 'TM2022010009', 'MENANG', 3, 'VS20220100032'),
(904, 'TM2022010018', 'KALAH', 0, 'VS20220100032'),
(905, 'TM2022010017', 'MENANG', 3, 'VS20220100033'),
(906, 'TM2022010003', 'KALAH', 0, 'VS20220100033'),
(907, 'TM2022010017', 'MENANG', 3, 'VS20220100034'),
(908, 'TM2022010008', 'KALAH', 0, 'VS20220100034'),
(909, 'TM2022010017', 'MENANG', 3, 'VS20220100035'),
(910, 'TM2022010009', 'KALAH', 0, 'VS20220100035'),
(911, 'TM2022010017', 'MENANG', 3, 'VS20220100036'),
(912, 'TM2022010018', 'KALAH', 0, 'VS20220100036'),
(913, 'TM2022010018', 'MENANG', 3, 'VS20220100037'),
(914, 'TM2022010003', 'KALAH', 0, 'VS20220100037'),
(915, 'TM2022010018', 'MENANG', 3, 'VS20220100038'),
(916, 'TM2022010008', 'KALAH', 0, 'VS20220100038'),
(917, 'TM2022010018', 'MENANG', 3, 'VS20220100039'),
(918, 'TM2022010009', 'KALAH', 0, 'VS20220100039'),
(919, 'TM2022010018', 'MENANG', 3, 'VS20220100040'),
(920, 'TM2022010017', 'KALAH', 0, 'VS20220100040'),
(921, 'TM2022010001', 'MENANG', 3, 'VS20220100041'),
(922, 'TM2022010002', 'KALAH', 0, 'VS20220100041'),
(923, 'TM2022010001', 'MENANG', 3, 'VS20220100042'),
(924, 'TM2022010004', 'KALAH', 0, 'VS20220100042'),
(925, 'TM2022010001', 'MENANG', 3, 'VS20220100043'),
(926, 'TM2022010005', 'KALAH', 0, 'VS20220100043'),
(927, 'TM2022010001', 'MENANG', 3, 'VS20220100044'),
(928, 'TM2022010014', 'KALAH', 0, 'VS20220100044'),
(929, 'TM2022010002', 'MENANG', 3, 'VS20220100045'),
(930, 'TM2022010001', 'KALAH', 0, 'VS20220100045'),
(931, 'TM2022010002', 'MENANG', 3, 'VS20220100046'),
(932, 'TM2022010004', 'KALAH', 0, 'VS20220100046'),
(933, 'TM2022010002', 'MENANG', 3, 'VS20220100047'),
(934, 'TM2022010005', 'KALAH', 0, 'VS20220100047'),
(935, 'TM2022010002', 'MENANG', 3, 'VS20220100048'),
(936, 'TM2022010014', 'KALAH', 0, 'VS20220100048'),
(937, 'TM2022010004', 'MENANG', 3, 'VS20220100049'),
(938, 'TM2022010001', 'KALAH', 0, 'VS20220100049'),
(939, 'TM2022010004', 'KALAH', 0, 'VS20220100050'),
(940, 'TM2022010002', 'MENANG', 3, 'VS20220100050'),
(941, 'TM2022010004', 'MENANG', 3, 'VS20220100051'),
(942, 'TM2022010005', 'KALAH', 0, 'VS20220100051'),
(943, 'TM2022010004', 'MENANG', 3, 'VS20220100052'),
(944, 'TM2022010014', 'KALAH', 0, 'VS20220100052'),
(945, 'TM2022010005', 'MENANG', 3, 'VS20220100053'),
(946, 'TM2022010001', 'KALAH', 0, 'VS20220100053'),
(947, 'TM2022010005', 'MENANG', 3, 'VS20220100054'),
(948, 'TM2022010002', 'KALAH', 0, 'VS20220100054'),
(949, 'TM2022010005', 'MENANG', 3, 'VS20220100055'),
(950, 'TM2022010004', 'KALAH', 0, 'VS20220100055'),
(951, 'TM2022010005', 'MENANG', 3, 'VS20220100056'),
(952, 'TM2022010014', 'KALAH', 0, 'VS20220100056'),
(953, 'TM2022010014', 'KALAH', 0, 'VS20220100057'),
(954, 'TM2022010001', 'MENANG', 3, 'VS20220100057'),
(955, 'TM2022010014', 'MENANG', 3, 'VS20220100058'),
(956, 'TM2022010002', 'KALAH', 0, 'VS20220100058'),
(957, 'TM2022010014', 'MENANG', 3, 'VS20220100059'),
(958, 'TM2022010004', 'KALAH', 0, 'VS20220100059'),
(959, 'TM2022010014', 'MENANG', 3, 'VS20220100060'),
(960, 'TM2022010005', 'KALAH', 0, 'VS20220100060'),
(961, 'TM2022010010', 'MENANG', 3, 'VS20220100061'),
(962, 'TM2022010011', 'KALAH', 0, 'VS20220100061'),
(963, 'TM2022010010', 'MENANG', 3, 'VS20220100062'),
(964, 'TM2022010013', 'KALAH', 0, 'VS20220100062'),
(965, 'TM2022010010', 'MENANG', 3, 'VS20220100063'),
(966, 'TM2022010015', 'KALAH', 0, 'VS20220100063'),
(967, 'TM2022010010', 'MENANG', 3, 'VS20220100064'),
(968, 'TM2022010019', 'KALAH', 0, 'VS20220100064'),
(969, 'TM2022010011', 'SERI', 1, 'VS20220100065'),
(970, 'TM2022010010', 'SERI', 1, 'VS20220100065'),
(971, 'TM2022010011', 'MENANG', 3, 'VS20220100066'),
(972, 'TM2022010013', 'KALAH', 0, 'VS20220100066'),
(973, 'TM2022010011', 'KALAH', 0, 'VS20220100067'),
(974, 'TM2022010015', 'MENANG', 3, 'VS20220100067'),
(975, 'TM2022010011', 'MENANG', 3, 'VS20220100068'),
(976, 'TM2022010019', 'KALAH', 0, 'VS20220100068'),
(977, 'TM2022010013', 'MENANG', 3, 'VS20220100069'),
(978, 'TM2022010010', 'KALAH', 0, 'VS20220100069'),
(979, 'TM2022010013', 'MENANG', 3, 'VS20220100070'),
(980, 'TM2022010011', 'KALAH', 0, 'VS20220100070'),
(981, 'TM2022010013', 'MENANG', 3, 'VS20220100071'),
(982, 'TM2022010015', 'KALAH', 0, 'VS20220100071'),
(983, 'TM2022010013', 'MENANG', 3, 'VS20220100072'),
(984, 'TM2022010019', 'KALAH', 0, 'VS20220100072'),
(985, 'TM2022010015', 'SERI', 1, 'VS20220100073'),
(986, 'TM2022010010', 'SERI', 1, 'VS20220100073'),
(987, 'TM2022010015', 'MENANG', 3, 'VS20220100074'),
(988, 'TM2022010011', 'KALAH', 0, 'VS20220100074'),
(989, 'TM2022010015', 'MENANG', 3, 'VS20220100075'),
(990, 'TM2022010013', 'KALAH', 0, 'VS20220100075'),
(991, 'TM2022010015', 'KALAH', 0, 'VS20220100076'),
(992, 'TM2022010019', 'MENANG', 3, 'VS20220100076'),
(993, 'TM2022010019', 'MENANG', 3, 'VS20220100077'),
(994, 'TM2022010010', 'KALAH', 0, 'VS20220100077'),
(995, 'TM2022010019', 'MENANG', 3, 'VS20220100078'),
(996, 'TM2022010011', 'KALAH', 0, 'VS20220100078'),
(997, 'TM2022010019', 'KALAH', 0, 'VS20220100079'),
(998, 'TM2022010013', 'MENANG', 3, 'VS20220100079'),
(999, 'TM2022010019', 'MENANG', 3, 'VS20220100080'),
(1000, 'TM2022010015', 'KALAH', 0, 'VS20220100080'),
(1017, 'TM2022010017', 'MENANG', 3, 'VS20220100081'),
(1018, 'TM2022010001', 'KALAH', 0, 'VS20220100081'),
(1019, 'TM2022010002', 'KALAH', 0, 'VS20220100082'),
(1020, 'TM2022010003', 'MENANG', 3, 'VS20220100082'),
(1021, 'TM2022010013', 'MENANG', 3, 'VS20220100083'),
(1022, 'TM2022010020', 'KALAH', 0, 'VS20220100083'),
(1023, 'TM2022010016', 'MENANG', 3, 'VS20220100084'),
(1024, 'TM2022010010', 'KALAH', 0, 'VS20220100084');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` varchar(25) NOT NULL,
  `nm_event` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl_event` date DEFAULT NULL,
  `tgl_start_pendaftaran` datetime DEFAULT NULL,
  `tgl_selesai_pendaftaran` datetime DEFAULT NULL,
  `status` enum('BUKA','TUTUP') DEFAULT NULL,
  `biaya_pendaftaran` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `nm_event`, `deskripsi`, `tgl_event`, `tgl_start_pendaftaran`, `tgl_selesai_pendaftaran`, `status`, `biaya_pendaftaran`) VALUES
('EV2022010001', 'Ngabuburit Kaum Gamers Mobile Legend', '<p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><img src=\"https://eventsemarang.id/wp-content/uploads/2019/05/AP-NGABUBURIT-KAUM-GAMERS-MOBILE-LEGENDS-SMRG-Copy.jpg\" style=\"width: 758.463px;\"><strong style=\"font-weight: bold; outline: 0px !important;\"><br></strong></p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ngabuburit Kaum Gamers Mobile Legend</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong><strong style=\"font-weight: bold; outline: 0px !important;\">Tanggal :&nbsp;</strong>01 – 02 Februari 2022<br style=\"outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Tempat :</strong>&nbsp;Ferris Club Citragrand Semarang</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Deskripsi Event :</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong>Kriiik krik krik …!<br style=\"outline: 0px !important;\">Bingung ngabuburit cuma dirumah ajaa? atau galau main game MOBILE LEGENDS lawannya ituuuu ituu ajaa!</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kalau kamu ngerasa “Jago” ngegame n punya tim yang solid buat tanding di tournament Mobile Legends.</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kami tunggu kamu di Ferris Club CitraGrand Semarang, dimana ngabuburit kamu akan ngasah skill ngegames kamu. “Berani itu bukan jago kandang, Berani itu loe berani datang”</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ketentuan :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Draft Pick Mode</li><li style=\"outline: 0px !important;\">Double Slot Allowed</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Pendaftaran :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Tanggal :Pendaftaran : 01 – 02 Februari 2022</li><li style=\"outline: 0px !important;\">Biaya Pendaftaran : Rp 100.000 / Team</li><li style=\"outline: 0px !important;\">Fasilitas : Free Takjil</li><li style=\"outline: 0px !important;\">Kuota : 64 Slot Team</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Hadiah :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Juara 1 : Rp 2.000.000</li><li style=\"outline: 0px !important;\">Juara 2 : Rp 1.500.000</li><li style=\"outline: 0px !important;\">Juara 3 : Rp 1.000.000</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">More Information :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Halilintar : 0857 4006 6660</li><li style=\"outline: 0px !important;\">Herry : 0856 4186 0228</li></ul>', '2022-02-01', '2022-01-10 00:00:00', '2022-01-16 23:59:00', 'BUKA', 100000),
('EV2022010002', 'Mobile Legend Top Game', '<p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><img src=\"https://eventsemarang.id/wp-content/uploads/2019/05/AP-NGABUBURIT-KAUM-GAMERS-MOBILE-LEGENDS-SMRG-Copy.jpg\" style=\"width: 758.463px;\"><strong style=\"font-weight: bold; outline: 0px !important;\"><br></strong></p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ngabuburit Kaum Gamers Mobile Legend</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong><strong style=\"font-weight: bold; outline: 0px !important;\">Tanggal :&nbsp;</strong>01 – 02 Februari 2022<br style=\"outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Tempat :</strong>&nbsp;Ferris Club Citragrand Semarang</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Deskripsi Event :</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong>Kriiik krik krik …!<br style=\"outline: 0px !important;\">Bingung ngabuburit cuma dirumah ajaa? atau galau main game MOBILE LEGENDS lawannya ituuuu ituu ajaa!</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kalau kamu ngerasa “Jago” ngegame n punya tim yang solid buat tanding di tournament Mobile Legends.</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kami tunggu kamu di Ferris Club CitraGrand Semarang, dimana ngabuburit kamu akan ngasah skill ngegames kamu. “Berani itu bukan jago kandang, Berani itu loe berani datang”</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ketentuan :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Draft Pick Mode</li><li style=\"outline: 0px !important;\">Double Slot Allowed</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Pendaftaran :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Tanggal :Pendaftaran : 01 – 02 Februari 2022</li><li style=\"outline: 0px !important;\">Biaya Pendaftaran : Rp 100.000 / Team</li><li style=\"outline: 0px !important;\">Fasilitas : Free Takjil</li><li style=\"outline: 0px !important;\">Kuota : 64 Slot Team</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Hadiah :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Juara 1 : Rp 2.000.000</li><li style=\"outline: 0px !important;\">Juara 2 : Rp 1.500.000</li><li style=\"outline: 0px !important;\">Juara 3 : Rp 1.000.000</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">More Information :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Halilintar : 0857 4006 6660</li><li style=\"outline: 0px !important;\">Herry : 0856 4186 0228</li></ul>', '2022-02-19', '2022-01-10 00:00:00', '2022-01-16 23:59:00', 'BUKA', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grup`
--

CREATE TABLE `tb_grup` (
  `id_grup` int(11) NOT NULL,
  `nm_grup` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_grup`
--

INSERT INTO `tb_grup` (`id_grup`, `nm_grup`) VALUES
(1, 'Grup A'),
(2, 'Grup B'),
(3, 'Grup C'),
(4, 'Grup D'),
(5, 'Grup E'),
(6, 'Grup F'),
(7, 'Grup G'),
(8, 'Grup H'),
(9, 'Grup I'),
(10, 'Grup J'),
(11, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_grup`
--

CREATE TABLE `tb_jadwal_grup` (
  `id_jadwal` int(11) NOT NULL,
  `id_team` varchar(25) DEFAULT NULL,
  `id_event` varchar(25) DEFAULT NULL,
  `id_grup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal_grup`
--

INSERT INTO `tb_jadwal_grup` (`id_jadwal`, `id_team`, `id_event`, `id_grup`) VALUES
(77, 'TM2022010007', 'EV2022010001', 1),
(78, 'TM2022010016', 'EV2022010001', 1),
(79, 'TM2022010020', 'EV2022010001', 1),
(80, 'TM2022010012', 'EV2022010001', 1),
(81, 'TM2022010006', 'EV2022010001', 1),
(82, 'TM2022010009', 'EV2022010001', 2),
(83, 'TM2022010003', 'EV2022010001', 2),
(84, 'TM2022010018', 'EV2022010001', 2),
(85, 'TM2022010008', 'EV2022010001', 2),
(86, 'TM2022010017', 'EV2022010001', 2),
(87, 'TM2022010014', 'EV2022010001', 3),
(88, 'TM2022010004', 'EV2022010001', 3),
(89, 'TM2022010001', 'EV2022010001', 3),
(90, 'TM2022010005', 'EV2022010001', 3),
(91, 'TM2022010002', 'EV2022010001', 3),
(92, 'TM2022010010', 'EV2022010001', 4),
(93, 'TM2022010011', 'EV2022010001', 4),
(94, 'TM2022010013', 'EV2022010001', 4),
(95, 'TM2022010015', 'EV2022010001', 4),
(96, 'TM2022010019', 'EV2022010001', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_juara`
--

CREATE TABLE `tb_juara` (
  `id_juara` int(11) NOT NULL,
  `id_event` varchar(25) DEFAULT NULL,
  `juara` enum('JUARA 1','JUARA 2','JUARA 3') DEFAULT NULL,
  `id_team` varchar(25) DEFAULT NULL,
  `total_skor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(25) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `id_team` varchar(25) DEFAULT NULL,
  `id_event` varchar(25) DEFAULT NULL,
  `status_pendaftaran` enum('AKTIF','BELUM AKTIF') DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `id_pesanan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `id_team`, `id_event`, `status_pendaftaran`, `bukti_bayar`, `id_pesanan`) VALUES
('DF2022010001', '2022-01-05', 'TM2022010001', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010002', '2022-01-06', 'TM2022010002', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010003', '2022-01-07', 'TM2022010003', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010004', '2022-01-08', 'TM2022010004', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010005', '2022-01-09', 'TM2022010005', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010006', '2022-01-10', 'TM2022010006', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010007', '2022-01-11', 'TM2022010007', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010008', '2022-01-12', 'TM2022010008', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010009', '2022-01-13', 'TM2022010009', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010010', '2022-01-14', 'TM2022010010', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010011', '2022-01-15', 'TM2022010011', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010012', '2022-01-16', 'TM2022010012', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010013', '2022-01-17', 'TM2022010013', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010014', '2022-01-18', 'TM2022010014', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010015', '2022-01-19', 'TM2022010015', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010016', '2022-01-16', 'TM2022010016', 'EV2022010001', 'AKTIF', NULL, '1561580157'),
('DF2022010017', '2022-01-05', 'TM2022010017', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010018', '2022-01-06', 'TM2022010018', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010019', '2022-01-07', 'TM2022010019', 'EV2022010001', 'AKTIF', NULL, NULL),
('DF2022010020', '2022-01-08', 'TM2022010020', 'EV2022010001', 'AKTIF', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertandingan`
--

CREATE TABLE `tb_pertandingan` (
  `id_pertandingan` varchar(25) NOT NULL,
  `tgl_pertandingan` datetime DEFAULT NULL,
  `id_grup` int(11) DEFAULT NULL,
  `id_event` varchar(25) DEFAULT NULL,
  `jenis_pertandingan` enum('GRUP','PLAYOFF','FINAL') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertandingan`
--

INSERT INTO `tb_pertandingan` (`id_pertandingan`, `tgl_pertandingan`, `id_grup`, `id_event`, `jenis_pertandingan`) VALUES
('VS20220100001', '2022-01-26 20:00:00', 1, 'EV2022010001', 'GRUP'),
('VS20220100002', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100003', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100004', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100005', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100006', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100007', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100008', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100009', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100010', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100011', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100012', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100013', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100014', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100015', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100016', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100017', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100018', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100019', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100020', '2022-01-16 17:01:35', 1, 'EV2022010001', 'GRUP'),
('VS20220100021', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100022', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100023', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100024', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100025', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100026', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100027', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100028', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100029', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100030', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100031', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100032', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100033', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100034', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100035', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100036', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100037', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100038', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100039', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100040', '2022-01-16 17:01:35', 2, 'EV2022010001', 'GRUP'),
('VS20220100041', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100042', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100043', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100044', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100045', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100046', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100047', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100048', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100049', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100050', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100051', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100052', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100053', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100054', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100055', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100056', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100057', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100058', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100059', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100060', '2022-01-16 17:01:35', 3, 'EV2022010001', 'GRUP'),
('VS20220100061', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100062', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100063', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100064', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100065', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100066', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100067', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100068', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100069', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100070', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100071', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100072', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100073', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100074', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100075', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100076', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100077', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100078', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100079', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100080', '2022-01-16 17:01:35', 4, 'EV2022010001', 'GRUP'),
('VS20220100081', '2022-01-29 16:45:00', NULL, 'EV2022010001', 'PLAYOFF'),
('VS20220100082', '2022-01-30 21:13:00', NULL, 'EV2022010001', 'PLAYOFF'),
('VS20220100083', '2022-01-30 18:00:00', NULL, 'EV2022010001', 'PLAYOFF'),
('VS20220100084', '2022-01-31 18:00:00', NULL, 'EV2022010001', 'PLAYOFF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nm_peserta` varchar(30) DEFAULT NULL,
  `id_team` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` varchar(25) NOT NULL,
  `nm_team` varchar(50) DEFAULT NULL,
  `alamat_team` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `id_user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `nm_team`, `alamat_team`, `logo`, `id_user`) VALUES
('TM2022010001', 'EVOS Esports', 'Jakarta', '', 'US2022010002'),
('TM2022010002', 'Blacklist International', 'Semarang', '', 'US2022010003'),
('TM2022010003', 'ONIC PH', 'Kudus', '', 'US2022010004'),
('TM2022010004', 'Onic Esports', 'Pati', '', 'US2022010005'),
('TM2022010005', 'RRQ Hoshi', 'Demak', '', 'US2022010006'),
('TM2022010006', 'Team SMG', 'Pati', '', 'US2022010007'),
('TM2022010007', 'Todak', 'Kudus', '', 'US2022010008'),
('TM2022010008', 'RSG SG', 'Jepara', '', 'US2022010009'),
('TM2022010009', 'RED Canids', 'Kendal', '', 'US2022010010'),
('TM2022010010', 'Keyd Stars', 'Purwodadi', '', 'US2022010011'),
('TM2022010011', 'See You Soon', 'Semarang', '', 'US2022010012'),
('TM2022010012', 'Natus Vincere/Navi', 'Pati', '', 'US2022010013'),
('TM2022010013', 'Bedel', 'Jepara', '', 'US2022010014'),
('TM2022010014', 'Malvinas Gaming', 'Kudus', '', 'US2022010015'),
('TM2022010015', 'BloodThirstyKings', 'Kudus', '', 'US2022010016'),
('TM2022010016', 'PAW Team', 'Kudus', '1642325743823.png', 'US2022010017'),
('TM2022010017', 'Moba Forever', 'Kudus', '', 'US2022010018'),
('TM2022010018', 'Squad Player', 'Kudus', '', 'US2022010019'),
('TM2022010019', 'Calpid', 'Kudus', '', 'US2022010020'),
('TM2022010020', 'One Piece', 'Kudus', '', 'US2022010021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(25) NOT NULL,
  `nm_user` varchar(30) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `hak_akses` enum('ADMIN','PESERTA') DEFAULT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nm_user`, `username`, `password`, `hak_akses`, `status`) VALUES
('US2022010001', 'admin', 'admin', 'admin', 'ADMIN', 'AKTIF'),
('US2022010002', 'EVOS Esports', 'team1', 'team1', 'PESERTA', 'AKTIF'),
('US2022010003', 'Blacklist International', 'team2', 'team2', 'PESERTA', 'AKTIF'),
('US2022010004', 'ONIC PH', 'team3', 'team3', 'PESERTA', 'AKTIF'),
('US2022010005', 'Onic Esports', 'team4', 'team4', 'PESERTA', 'AKTIF'),
('US2022010006', 'RRQ Hoshi', 'team5', 'team5', 'PESERTA', 'AKTIF'),
('US2022010007', 'Team SMG', 'team6', 'team6', 'PESERTA', 'AKTIF'),
('US2022010008', 'Todak', 'team7', 'team7', 'PESERTA', 'AKTIF'),
('US2022010009', 'RSG SG', 'team8', 'team8', 'PESERTA', 'AKTIF'),
('US2022010010', 'RED Canids', 'team9', 'team9', 'PESERTA', 'AKTIF'),
('US2022010011', 'Keyd Stars', 'team10', 'team10', 'PESERTA', 'AKTIF'),
('US2022010012', 'See You Soon', 'team11', 'team11', 'PESERTA', 'AKTIF'),
('US2022010013', 'Natus Vincere/Na\'vi', 'team12', 'team12', 'PESERTA', 'AKTIF'),
('US2022010014', 'Bedel', 'team13', 'team13', 'PESERTA', 'AKTIF'),
('US2022010015', 'Malvinas Gaming', 'team14', 'team14', 'PESERTA', 'AKTIF'),
('US2022010016', 'BloodThirstyKings', 'team15', 'team15', 'PESERTA', 'AKTIF'),
('US2022010017', 'PAW', 'team16', 'team16', 'PESERTA', 'AKTIF'),
('US2022010018', 'Moba Forever', 'team17', 'team17', 'PESERTA', 'AKTIF'),
('US2022010019', 'Squad Player', 'team18', 'team18', 'PESERTA', 'AKTIF'),
('US2022010020', 'Calpid', 'team19', 'team19', 'PESERTA', 'AKTIF'),
('US2022010021', 'One Piece', 'team20', 'team20', 'PESERTA', 'AKTIF');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dtl_pertandingan`
--
ALTER TABLE `tb_dtl_pertandingan`
  ADD PRIMARY KEY (`id_dtl_pertandingan`),
  ADD KEY `FR_DTL_PERTANDINGAN_1` (`id_team`),
  ADD KEY `FR_DTL_PERTANDINGAN_2` (`id_pertandingan`);

--
-- Indeks untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `tb_jadwal_grup`
--
ALTER TABLE `tb_jadwal_grup`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_juara`
--
ALTER TABLE `tb_juara`
  ADD PRIMARY KEY (`id_juara`),
  ADD KEY `FR_JUARA_1` (`id_event`),
  ADD KEY `FR_JUARA_2` (`id_team`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `FR_PENDAFTARAN_1` (`id_team`),
  ADD KEY `FR_PENDAFTARAN_2` (`id_event`);

--
-- Indeks untuk tabel `tb_pertandingan`
--
ALTER TABLE `tb_pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`),
  ADD KEY `FR_PERTANDINGAN_1` (`id_grup`),
  ADD KEY `FR_PERTANDINGAN_2` (`id_event`);

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `FR_PESERTA_1` (`id_team`);

--
-- Indeks untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`),
  ADD KEY `FK_TEAM_1` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dtl_pertandingan`
--
ALTER TABLE `tb_dtl_pertandingan`
  MODIFY `id_dtl_pertandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- AUTO_INCREMENT untuk tabel `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_grup`
--
ALTER TABLE `tb_jadwal_grup`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tb_juara`
--
ALTER TABLE `tb_juara`
  MODIFY `id_juara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dtl_pertandingan`
--
ALTER TABLE `tb_dtl_pertandingan`
  ADD CONSTRAINT `FR_DTL_PERTANDINGAN_1` FOREIGN KEY (`id_team`) REFERENCES `tb_team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FR_DTL_PERTANDINGAN_2` FOREIGN KEY (`id_pertandingan`) REFERENCES `tb_pertandingan` (`id_pertandingan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_juara`
--
ALTER TABLE `tb_juara`
  ADD CONSTRAINT `FR_JUARA_1` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FR_JUARA_2` FOREIGN KEY (`id_team`) REFERENCES `tb_team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `FR_PENDAFTARAN_1` FOREIGN KEY (`id_team`) REFERENCES `tb_team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FR_PENDAFTARAN_2` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pertandingan`
--
ALTER TABLE `tb_pertandingan`
  ADD CONSTRAINT `FR_PERTANDINGAN_1` FOREIGN KEY (`id_grup`) REFERENCES `tb_grup` (`id_grup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FR_PERTANDINGAN_2` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD CONSTRAINT `FR_PESERTA_1` FOREIGN KEY (`id_team`) REFERENCES `tb_team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  ADD CONSTRAINT `FK_TEAM_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
