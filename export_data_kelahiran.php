<?php
header("Content-Type: appliaction/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Data Kelahiran.xls");

include('db_connect.php');
?>

<table border = 1>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tempat Lahir</td>
        <td>Jenis Lahir</td>
        <td>Penolong Kelahiran</td>
        <td>Tanggal Lahir</td>
        <td>RT</td>
        <td>Dusun</td>
        <td>Nama Ayah</td>
        <td>NIK Ayah</td>
        <td>Nama Ibu</td>
        <td>NIK Ibu</td>
        <td>Pengisi Data</td>
        <td>Jabatan</td>
        <td>Dusun Pengisi</td>
        <td>Create At</td>
    </tr>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM lahir");
    foreach ($rows as $row ):
    ?>

    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $row["nama"]?></td>
        <td><?php echo $row["jenis_kelamin"]?></td>
        <td><?php echo $row["tempat_lahir"]?></td>
        <td><?php echo $row["jenis_lahir"]?></td>
        <td><?php echo $row["penolong_kelahiran"]?></td>
        <td><?php echo $row["tanggal_lahir"]?></td>
        <td><?php echo '="' . $row["rt"] . '"' ?></td>
        <td><?php echo $row["dusun"]?></td>
        <td><?php echo $row["nama_ayah"]?></td>
        <td><?php echo '="' . $row["nik_ayah"] . '"' ?></td>
        <td><?php echo $row["nama_ibu"]?></td>
        <td><?php echo '="' . $row["nik_ibu"] . '"' ?></td>
        <td><?php echo $row["pengisi_data"]?></td>
        <td><?php echo $row["jabatan"]?></td>
        <td><?php echo $row["dusun_pengisi"]?></td>
        <td><?php echo $row["created_at"]?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>