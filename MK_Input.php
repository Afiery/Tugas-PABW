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
    <title>Input Data Mata Kuliah</title>
</head>

<body>
    <a href="Matkul.php">Data Mata Kuliah</a>
    <h1>Input Data Mata Kuliah</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_mk"  placeholder="Kode Mata Kuliah" required></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_mk" placeholder="Nama Mata Kuliah" required></td>
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
    $insert = mysqli_query($mysqli,"INSERT INTO Mata_Kuliah VALUES 
        ('".$_POST['kode_mk']."',
        '".$_POST['nama_mk']."')");

        if($insert){
            echo 'Data Berhasil Tersimpan';
        }else {
            echo 'Data Gagal Tersimpan';
        }
    }
    ?>
</body>
</html>