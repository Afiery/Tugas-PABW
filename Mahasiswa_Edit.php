<?php
session_start();
include 'connection.php';
$edit = mysqli_query($mysqli,"SELECT * FROM Mahasiswa WHERE nim = '".$_GET['nim']."'");
$result =  mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <a href="Mahasiswa.php">Data Mahasiswa</a>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"  value="<?php echo $result['NIM']?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"  value="<?php echo $result['Nama_Mahasiswa']?>"></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_mk"  value="<?php echo $result['Kode_MK']?>"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_mk"  value="<?php echo $result['Nama_MK']?>"></td>
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
        $edit = mysqli_query($mysqli,"UPDATE Mahasiswa SET Nama_Mahasiswa = '".$_POST['nama']."', Kode_MK = '".$_POST['kode_mk']."',
        Nama_MK = '".$_POST['nama_mk']."' WHERE nim = '".$_GET['nim']."'");

        if($edit){
            echo 'Data Berhasil Diubah';
        }else {
            echo 'Data Gagal Diubah';
        }
    }
    ?>
</body>
</html>