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
    <title>Input Data Pembayaran</title>
</head>

<body>
    <a href="Pembayaran.php">Data Pembayaran</a>
    <h1>Input Data Pembayaran</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="hidden" name="id_bayar"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"  placeholder="Nama" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_mahasiswa" placeholder="NIM" required></td>
            </tr>
            <tr>
                <td>Jumlah Bayar</td>
                <td>:</td>
                <td><input type="text" name="jumlah_bayar" placeholder="Rp." required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['save'])){
    $insert = mysqli_query($mysqli,"INSERT INTO Pembayaran VALUES 
        ('".$_POST['id_bayar']."',
        '".$_POST['nim']."',
        '".$_POST['nama_mahasiswa']."',
        '".$_POST['jumlah_bayar']."')");

        if($insert){
            echo 'Data Berhasil Tersimpan';
        }else {
            echo 'Data Gagal Tersimpan';
        }
    }
    ?>
</body>
</html>