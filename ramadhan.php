<?php
$link = mysqli_connect("localhost", "root", "", "ramadhan");

$result = mysqli_query($link, "SELECT * FROM menu_berbuka");
//var_dump($result);

//while( $iftar = mysqli_fetch_assoc ($result) ) { 
//var_dump($iftar);
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ramadhan</title>
</head>
<body>
    <h1>Jadwal Sholat</h1>

    <table cellpadding="10" cellspacing="0" border="1">

<tr>
    <th>Tanggal</th>
    <th>Imsyak</th>
    <th>Subuh</th>
    <th>Dzuhur</th>
    <th>Ashar</th>
    <th>Maghrib</th>
    <th>Isya</th>
</tr>

<tr>
    <td>2022-04-03</td>
    <td>04:06</td>
    <td>04:16</td>
    <td>11:35</td>
    <td>14:51</td>
    <td>17:35</td>
    <td>18:45</td>
</tr>

    </table>

    <h1>Menu Berbuka</h1>

    <table cellpadding="10" cellspacing="0" border="1">
    <?php while($row = mysqli_fetch_assoc($result)) :  ?>    
        <tr>
            <th>Tanggal</th>
            <th>Menu Takjil</th>
            <th>Menu Berbuka</th>
            <th>Tempat</th>
        </tr>

        <tr>
            <td><?= $row["tanggal"]; ?></td>
            <td><?= $row["menu_takjil"]; ?></td>
            <td><?= $row["menu_berbuka"]; ?></td>
            <td><?= $row["tempat"]; ?></td>
        </tr>
    <?php endwhile; ?>

    </table>
    
</body>
</html>