
<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$nim = $_GET['nim'];
$mahasiswa = $mysqli->query("SELECT * FROM students WHERE nim='$nim'");
$data = $mahasiswa->fetch_assoc();

$program_studi = $mysqli->query("SELECT * FROM study_program");

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];

    $update = $mysqli->query("UPDATE students SET nama='$nama', study_program_id=$program_studi WHERE nim='$nim'");

    if ($update) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data berhasil diupdate!';
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
    <title>Edit Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Form Edit Mahasiswa 2021</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label">Program Studi</label>
                <select name="program_studi" id="program_studi" class="form-control">
                    <?php while ($row = $program_studi->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>" <?= $row['id'] == $data['study_program_id'] ? 'selected' : '' ?>><?= $row['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="mahasiswa.php" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</body>
</html>
