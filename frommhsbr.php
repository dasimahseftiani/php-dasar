<?php
session_start();

if (!isset($_SESSION['login'])) {
    if ($_SESSION['login'] != true) {
        header("Location: login.php");
        exit;
    }
}

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$program_studi = $mysqli->query("SELECT * FROM study_program");

if (isset($_POST['nim']) && isset($_POST['nama'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];

    $insert = $mysqli->query("INSERT INTO students (nim, nama, study_program_id) 
                                VALUES('$nim', '$nama', $program_studi)");
    if ($insert) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data berhasil ditambahkan!';
        header("Location: mahasiswa.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Form Tambah Mahasiswa 2021</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label">Program Studi</label>
                <select name="program_studi" id="program_studi" class="form-control">
                    <?php while ($row = $program_studi->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="mahasiswa.php" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</body>
</html>