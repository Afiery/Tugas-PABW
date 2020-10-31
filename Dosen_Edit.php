<?php
session_start();
include 'connection.php';
$edit = mysqli_query($mysqli,"SELECT * FROM Dosen WHERE NIP = '".$_GET['nip']."'");
$result =  mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Dosen</title>
</head>

<body>
    <a href="Dosen.php">Data Dosen</a>
    <h1>Edit Data Dosen</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" value="<?php echo $result['NIP']?>"></td>
            </tr>
            <tr>
                <td>Nama_Dosen</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $result['Nama_Dosen']?>"></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_mk" value="<?php echo $result['Kode_MK']?>"></td>
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
        $edit = mysqli_query($mysqli,"UPDATE Dosen SET Nama_Dosen = '".$_POST['nama']."', Kode_MK = '".$_POST['kode_mk']."'
        WHERE NIP = '".$_GET['nip']."'");

        if($edit){
            echo 'Data Berhasil Diubah';
        }else {
            echo 'Data Gagal Diubah';
        }
    }
    ?>
</body>
</html>