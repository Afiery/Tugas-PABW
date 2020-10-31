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
    <title>Input Data Dosen</title>
</head>

<body>
    <a href="Dosen.php">Data Dosen</a>
    <h1>Input Data Dosen</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip"  placeholder="NIM" required></td>
            </tr>
            <tr>
                <td>Nama_Dosen</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama" required></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_mk" placeholder="Kode_MK" required></td>
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
    $insert = mysqli_query($mysqli,"INSERT INTO Dosen VALUES 
        ('".$_POST['nip']."',
        '".$_POST['nama']."',
        '".$_POST['kode_mk']."')");

        if($insert){
            echo 'Data Berhasil Tersimpan';
        }else {
            echo 'Data Gagal Tersimpan';
        }
    }
    ?>
</body>
</html>