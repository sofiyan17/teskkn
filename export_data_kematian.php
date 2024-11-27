<?php
header("Content-Type: appliaction/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Data Kematian.xls");

include('db_connect.php');
?>

<table border = 1>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>Alamat</td>
        <td>No KK</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Status Hubungan</td>
        <td>Pendidikan</td>
        <td>Pekerjaan</td>
        <td>Nama Orang Tua</td>
        <td>Tanggal Meniggal</td>
        <td>File KK</td>
        <td>Pengisi Data</td>
        <td>Jabatan</td>
        <td>Create At</td>
    </tr>
    <?php
    $i = 1;
    $rows = mysqli_query($conn, "SELECT * FROM kematian");
    foreach ($rows as $row ):
    ?>

    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $row["nama"]?></td>
        <td><?php echo '="' . $row["nik"] . '"' ?></td>
        <td><?php echo $row["alamat"]?></td>
        <td><?php echo '="' . $row["no_kk"] . '"' ?></td>
        <td><?php echo $row["tempat_lahir"]?></td>
        <td><?php echo $row["tanggal_lahir"]?></td>
        <td><?php echo $row["jenis_kelamin"]?></td>
        <td><?php echo $row["status_hubungan"]?></td>
        <td><?php echo $row["pendidikan"]?></td>
        <td><?php echo $row["pekerjaan"]?></td>
        <td><?php echo $row["nama_orang_tua"]?></td>
        <td><?php echo $row["tanggal_meninggal"]?></td>
        <td><?php echo $row["file_kk"]?></td>
        <td><?php echo $row["pengisi_data"]?></td>
        <td><?php echo $row["jabatan"]?></td>
        <td><?php echo $row["created_at"]?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>