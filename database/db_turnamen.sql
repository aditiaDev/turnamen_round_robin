-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 09.10
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('EV2022010001', 'Ngabuburit Kaum Gamers Mobile Legend', '<p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><img src=\"https://eventsemarang.id/wp-content/uploads/2019/05/AP-NGABUBURIT-KAUM-GAMERS-MOBILE-LEGENDS-SMRG-Copy.jpg\" style=\"width: 758.463px;\"><strong style=\"font-weight: bold; outline: 0px !important;\"><br></strong></p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ngabuburit Kaum Gamers Mobile Legend</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong><strong style=\"font-weight: bold; outline: 0px !important;\">Tanggal :&nbsp;</strong>01 – 02 Februari 2022<br style=\"outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Tempat :</strong>&nbsp;Ferris Club Citragrand Semarang</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Deskripsi Event :</strong><strong style=\"font-weight: bold; outline: 0px !important;\"><br style=\"outline: 0px !important;\"></strong>Kriiik krik krik …!<br style=\"outline: 0px !important;\">Bingung ngabuburit cuma dirumah ajaa? atau galau main game MOBILE LEGENDS lawannya ituuuu ituu ajaa!</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kalau kamu ngerasa “Jago” ngegame n punya tim yang solid buat tanding di tournament Mobile Legends.</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\">Kami tunggu kamu di Ferris Club CitraGrand Semarang, dimana ngabuburit kamu akan ngasah skill ngegames kamu. “Berani itu bukan jago kandang, Berani itu loe berani datang”</p><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Ketentuan :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Draft Pick Mode</li><li style=\"outline: 0px !important;\">Double Slot Allowed</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Pendaftaran :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Tanggal :Pendaftaran : 01 – 02 Februari 2022</li><li style=\"outline: 0px !important;\">Biaya Pendaftaran : Rp 100.000 / Team</li><li style=\"outline: 0px !important;\">Fasilitas : Free Takjil</li><li style=\"outline: 0px !important;\">Kuota : 64 Slot Team</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">Hadiah :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Juara 1 : Rp 2.000.000</li><li style=\"outline: 0px !important;\">Juara 2 : Rp 1.500.000</li><li style=\"outline: 0px !important;\">Juara 3 : Rp 1.000.000</li></ul><p style=\"margin: 15px 0px 0px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><strong style=\"font-weight: bold; outline: 0px !important;\">More Information :</strong></p><ul style=\"margin-bottom: 10px; padding-left: 15px; margin-left: 10px; color: rgb(51, 51, 51); font-family: arial; text-align: justify; outline: 0px !important;\"><li style=\"outline: 0px !important;\">Halilintar : 0857 4006 6660</li><li style=\"outline: 0px !important;\">Herry : 0856 4186 0228</li></ul>', '2022-02-01', '2022-01-10 00:00:00', '2022-01-16 23:59:00', 'BUKA', 100000);

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
  `bukti_bayar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `id_team`, `id_event`, `status_pendaftaran`, `bukti_bayar`) VALUES
('DF2022010001', '2022-01-05', 'TM2022010001', 'EV2022010001', 'AKTIF', NULL),
('DF2022010002', '2022-01-06', 'TM2022010002', 'EV2022010001', 'AKTIF', NULL),
('DF2022010003', '2022-01-07', 'TM2022010003', 'EV2022010001', 'AKTIF', NULL),
('DF2022010004', '2022-01-08', 'TM2022010004', 'EV2022010001', 'AKTIF', NULL),
('DF2022010005', '2022-01-09', 'TM2022010005', 'EV2022010001', 'AKTIF', NULL),
('DF2022010006', '2022-01-10', 'TM2022010006', 'EV2022010001', 'AKTIF', NULL),
('DF2022010007', '2022-01-11', 'TM2022010007', 'EV2022010001', 'AKTIF', NULL),
('DF2022010008', '2022-01-12', 'TM2022010008', 'EV2022010001', 'AKTIF', NULL),
('DF2022010009', '2022-01-13', 'TM2022010009', 'EV2022010001', 'AKTIF', NULL),
('DF2022010010', '2022-01-14', 'TM2022010010', 'EV2022010001', 'AKTIF', NULL),
('DF2022010011', '2022-01-15', 'TM2022010011', 'EV2022010001', 'AKTIF', NULL),
('DF2022010012', '2022-01-16', 'TM2022010012', 'EV2022010001', 'AKTIF', NULL),
('DF2022010013', '2022-01-17', 'TM2022010013', 'EV2022010001', 'AKTIF', NULL),
('DF2022010014', '2022-01-18', 'TM2022010014', 'EV2022010001', 'AKTIF', NULL),
('DF2022010015', '2022-01-19', 'TM2022010015', 'EV2022010001', 'AKTIF', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertandingan`
--

CREATE TABLE `tb_pertandingan` (
  `id_pertandingan` varchar(25) NOT NULL,
  `tgl_pertandingan` datetime DEFAULT NULL,
  `id_grup` int(11) DEFAULT NULL,
  `id_event` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `logo` text NOT NULL,
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
('TM2022010012', 'Natus Vincere/Na\'vi', 'Pati', '', 'US2022010013'),
('TM2022010013', 'Bedel', 'Jepara', '', 'US2022010014'),
('TM2022010014', 'Malvinas Gaming', 'Kudus', '', 'US2022010015'),
('TM2022010015', 'BloodThirstyKings', 'Kudus', '', 'US2022010016'),
('TM2022010016', 'sdfdsfd', 'sdfsdf', '1641452503864.png', 'US2022010017');

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
('US2022010017', 'sdfsdf', 'sdfsf', 'sdfsf', 'PESERTA', 'AKTIF');

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
-- AUTO_INCREMENT untuk tabel `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
