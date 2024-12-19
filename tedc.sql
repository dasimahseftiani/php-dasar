-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2024 pada 11.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: tedc
--

-- --------------------------------------------------------

--
-- Struktur dari tabel students
--

CREATE TABLE students (
  nim varchar(10) NOT NULL,
  nama varchar(50) DEFAULT NULL,
  study_program_id int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel students
--

INSERT INTO students (nim, nama, study_program_id) VALUES
('D212111001', 'Aliftia Radianti Taniasari', 11),
('D212111002', 'Cahya Julianti', 11),
('D212111003', 'Dasimah Seftiani', 11),
('D212111004', 'Desi Syifa Fitria', 11),
('D212111005', 'Dewi Yulianti', 11),
('D212111006', 'Gita Septiani', 11),
('D212111007', 'Ikhlas Wandana', 11),
('D212111008', 'Intan Khoirunnisa', 11),
('D212111009', 'Islah Nurhasanah', 11),
('D212111010', 'Kenia Nurazizah', 11),
('D212111011', 'M Rivaldi Hafizd Fathurohman', 11),
('D212111012', 'Puspa Dewi Kusumawati', 11),
('D212111013', 'Renaldi Irawan', 11),
('D212111014', 'Rizaldy Muhamad Sopyan', 11),
('D212111015', 'Rudi Loilatu', 11),
('D212111016', 'Seli Pebriani', 11),
('D212111017', 'Sephia Sumi Jaya Tiningrum', 11),
('D212111018', 'Siti Aminah', 11),
('D212111019', 'Siti Rismawati', 11),
('D212111020', 'Sophia Nurhafshoh Koenady', 11),
('D212111021', 'Triana Siti Aryani', 11),
('D212111022', 'Yunita Riani', 11),
('D212111023', 'Ajeng Aprilyani', 11),
('D212111025', 'Aspiya Huwaida', 11),
('D212111026', 'Aura Maliya', 11),
('D212111028', 'Fanisa Tri Agna Fata', 11),
('D212111029', 'Ineu Rahmawati', 11),
('D212111030', 'Muhammad Reza Andriansyah', 11),
('D212111031', 'Siti Nur Rohimah', 11),
('D212111032', 'Wawan Jefriansyah', 11),
('D212111033', 'Novita Qadariah', 11),
('D212111034', 'Rahmatia', 11),
('D212111035', 'Zaltin', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel study_program
--

CREATE TABLE study_program (
  id int(11) NOT NULL,
  name varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel study_program
--

INSERT INTO study_program (id, name) VALUES
(1, 'Kontruksi Bangunan'),
(2, 'Rekam Medik dan Informasi Kesehatan'),
(3, 'Teknik Komputer'),
(4, 'Teknik Informatika'),
(5, 'Mesin Otomotif'),
(6, 'Mekanik Industri Dan Desain'),
(7, 'Akuntansi'),
(8, 'Teknik Mesin'),
(9, 'Teknik Elektronika'),
(10, 'Teknik Kimia'),
(11, 'Komputerisasi Akuntansi'),
(12, 'Teknik Otomasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel students
--
ALTER TABLE students
  ADD PRIMARY KEY (nim);

--
-- Indeks untuk tabel study_program
--
ALTER TABLE study_program
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel study_program
--
ALTER TABLE study_program
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;