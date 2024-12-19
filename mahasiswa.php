<?php
$mysqli = new mysqli('localhost', 'root', '', 'tedc');




if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT students.nim, students.nama, study_program.name 
                          FROM students 
                          INNER JOIN study_program ON students.study_program_id = study_program.id 
                          WHERE study_program.id = 11;");

$mahasiswa = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHASISWA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 align="center"> Data Mahasiswa KA 2021 </h1>
    <div class="container"> </div>

    <table class="table table-bordered table-hover">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
        <?php foreach ($mahasiswa as $row) { ?>
            <tr>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['name']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>