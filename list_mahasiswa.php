<?php
$multidimensi = [
    [
        "no" => 1,
        "nim" => "D212111003",
        "nama" => "Dasimah Seftiani",
    ],
    [
        "no" => 2,
        "nim" => "D212111001",
        "nama" => "Alifia Radianti",
    ],
    [
        "no" => 3,
        "nim" => "D212111002",
        "nama" => "cahya julianti",
    ],
    [
        "no" => 4,
        "nim" => "D212111003",
        "nama" => "Desi Syifa Fitria",
    ],
    [
        "no" => 5,
        "nim" => "D212111005",
        "nama" => "Dewi Yulianti",
    ],
    [
        "no" => 6,
        "nim" => "D212111006",
        "nama" => "Gita Septiani",
    ],
    [
        "no" => 7,
        "nim" => "D212111007",
        "nama" => "Ikhlas Wandana",
    ],
    [
        "no" => 8,
        "nim" => "D212111008",
        "nama" => "Intan Khoirunnisa",
    ],
    [
        "no" => 9,
        "nim" => "D212111009",
        "nama" => "Islah Nurhasanah",
    ],
    [
        "no" => 10,
        "nim" => "D212111010",
        "nama" => "Kenia Nurazizah",
    ],
];

echo "<table border='1' cellspacing= '0'>";
echo "<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
      </tr>";

foreach ($multidimensi as $value) {
    echo "<tr>
            <td>{$value['no']}</td>
            <td>{$value['nim']}</td>
            <td>{$value['nama']}</td>
          </tr>";
}
echo "</table>";
?> 