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
    <title>Mahasiswa</title>
</head>
<body>
    <a href="Dosen.php">Data Dosen</a>
    <a href="Matkul.php">Data Mata Kuliah</a>
    <a href="Pembayaran.php">Pembayaran</a>
    <h2>Data Mahasiswa</h2>
    <a href="Mahasiswa_Input.php">Tambah Data</a>
<table class="tabel_style" border="1">
    <tr>
        <td>NIM</td>
        <td>Nama_Mahasiswa</td>
        <td>Kode_MK</td>
        <td>Nama_MK</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $select = mysqli_query($mysqli, "SELECT * FROM Mahasiswa");
    if(mysqli_num_rows($select) > 0) {
    while($result = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td><?php echo $result['NIM']?></td>
        <td><?php echo $result['Nama_Mahasiswa']?></td>
        <td><?php echo $result['Kode_MK']?></td>
        <td><?php echo $result['Nama_MK']?></td>
        <td><a href="Mahasiswa_Edit.php?nim=<?php echo $result['NIM']; ?>">Edit</td>
        <td><a href="Mahasiswa_Delete.php?nim=<?php echo $result['NIM']; ?>"
        onclick="return confirm('Apakah anda ingin menghapus data ini ?'); ">Delete</td>
    </tr>  
    <?php } }else { ?>
        <td colspan="5" align="center">Data Kosong</td>
    <?php } ?>
</table>
</body>
</html>