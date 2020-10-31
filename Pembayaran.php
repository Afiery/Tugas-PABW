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
    <title>Pembayaran</title>
</head>
<body>
    <a href="Mahasiswa.php">Data Mahasiswa</a>
    <a href="Dosen.php">Data Dosen</a>
    <a href="Matkul.php">Data Mata Kuliah</a>
    <h2>Data Pembayaran</h2>
    <a href="Pembayaran_Input.php">Tambah Data Pembayaran</a>
<table class="tabel_style" border="1">
    <tr>
        <td style="display:none;">ID Pembayaran</td>
        <td>NIM</td>
        <td>Nama_Mahasiswa</td>
        <td>Jumlah Pembayaran</td>
        <td>Action</td>
    </tr>
    <?php
    $select = mysqli_query($mysqli, "SELECT * FROM Pembayaran");
    if(mysqli_num_rows($select) > 0) {
    while($result = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td style="display:none;"><?php echo $result['id_bayar']?></td>
        <td><?php echo $result['NIM']?></td>
        <td><?php echo $result['Nama']?></td>
        <td><?php echo "Rp. ".$result['Jumlah Bayar']?></td>
        <td><a href="Pembayaran_Delete.php?id_bayar=<?php echo $result['id_bayar']; ?>"
        onclick="return confirm('Apakah anda ingin menghapus data ini ?'); ">Delete</td>
    </tr>  
    <?php } }else { ?>
        <td colspan="5" align="center">Data Kosong</td>
    <?php } ?>
</table>
</body>
</html>