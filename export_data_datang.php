<?php
header("Content-Type: appliaction/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Data Datang.xls");

include('db_connect.php');
?>

<table border = 1>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>Jenis Kelamin</td>
        <td>Dusun</td>
        <td>Desa</td>
        <td>Kecamatan</td>
        <td>Kabupaten</td>
        <td>RT Tujuan</td>
        <td>Dusun Tujuan</td>
        <td>Pengisi Data</td>
        <td>Jabatan</td>
        <td>Create At</td>
    </tr>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM pendatang");
    foreach ($rows as $row ):
    ?>

    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $row["nama"]?></td>
        <td><?php echo '="' . $row["nik"] . '"' ?></td>
        <td><?php echo $row["jenis_kelamin"]?></td>
        <td><?php echo $row["dusun"]?></td>
        <td><?php echo $row["desa"]?></td>
        <td><?php echo $row["kecamatan"]?></td>
        <td><?php echo $row["kabupaten"]?></td>
        <td><?php echo '="' . $row["rt_tujuan"] . '"' ?></td>
        <td><?php echo $row["dusun_tujuan"]?></td>
        <td><?php echo $row["pengisi_data"]?></td>
        <td><?php echo $row["jabatan"]?></td>
        <td><?php echo $row["created_at"]?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>