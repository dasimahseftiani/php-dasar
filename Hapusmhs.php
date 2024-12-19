<?php

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$nim = $GET['nim'];
$delete = $mysqli->query("SELECT * FROM students WHERE nim='$nim'");

if ($delete) {
    header("location: mahasiswa.php");
    exit();
}