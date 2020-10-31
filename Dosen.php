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
    <title>Dosen</title>
</head>
<body>
    <a href="Mahasiswa.php">Data Mahasiswa</a>
    <a href="Matkul.php">Data Mata Kuliah</a>
    <a href="Pembayaran.php">Pembayaran</a>
    <h2>Data Dosen</h2>
    <a href="Dosen_Input.php">Tambah Data</a>
<table class="tabel_style" border="1">
    <tr>
        <td>NIP</td>
        <td>Nama_Dosen</td>
        <td>Kode_MK</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $select = mysqli_query($mysqli, "SELECT * FROM Dosen");
    if(mysqli_num_rows($select) > 0) {
    while($result = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td><?php echo $result['NIP']?></td>
        <td><?php echo $result['Nama_Dosen']?></td>
        <td><?php echo $result['Kode_MK']?></td>
        <td><a href="Dosen_Edit.php?nip=<?php echo $result['NIP']; ?>">Edit</td>
        <td><a href="Dosen_Delete.php?nip=<?php echo $result['NIP']; ?>"
        onclick="return confirm('Apakah anda ingin menghapus data ini ?'); ">Delete</td>
    </tr>  
    <?php } }else { ?>
        <td colspan="4" align="center">Data Kosong</td>
    <?php } ?>
</table>
</body>
</html>