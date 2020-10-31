<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Mata Kuliah</title>
</head>
<body>
    <a href="Mahasiswa.php">Data Mahasiswa</a>
    <a href="Dosen.php">Data Dosen</a>
    <a href="Pembayaran.php">Pembayaran</a>
    <h2>Data Mata Kuliah</h2>
    <a href="MK_Input.php">Tambah Data</a>
<table class="tabel_style" border="1">
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td colspan="3">Action</td>
    </tr>
    <?php
    $select = mysqli_query($mysqli, "SELECT * FROM Mata_Kuliah");
    while($result = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td><?php echo $result['Kode_MK']?></td>
        <td><?php echo $result['Nama_MK']?></td>
        <td><a href="MK_Edit.php?kode_mk=<?php echo $result['Kode_MK']; ?>">Edit</td>
        <td><a href="MK_Delete.php?kode_mk=<?php echo $result['Kode_MK']; ?>"
        onclick="return confirm('Apakah anda ingin menghapus data ini ?'); ">Delete</td>
    </tr>  
    <?php } ?>
</table>
</body>
</html>