<?php
session_start();
include 'connection.php';
$edit = mysqli_query($mysqli,"SELECT * FROM Mata_Kuliah WHERE Kode_MK = '".$_GET['kode_mk']."'");
$result =  mysqli_fetch_array($edit);
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
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['edit'])){
        $edit = mysqli_query($mysqli,"UPDATE Mata_Kuliah SET Nama_MK = '".$_POST['nama_mk']."'
        WHERE Kode_MK = '".$_GET['kode_mk']."'");

        if($edit){
            echo 'Data Berhasil Diubah';
        }else {
            echo 'Data Gagal Diubah';
        }
    }
    ?>
</body>
</html>