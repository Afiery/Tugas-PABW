<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<h2>Tambah Data Mahasiswa</h2><br>
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                    <label for="nama_mah">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mah">
                </div>
                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah</label>
                    <input type="text" class="form-control" name="kode_mk">
                </div>
                <div class="form-group">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" name="nama_mk">
                </div>
                <input type="submit" class="btn btn-success btn-sm" value="Tambah" name="submit">
                <a href="Mahasiswa.php"><input type="button" class="btn btn-danger btn-sm" value="Back"></a>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
<?php
    require 'Lib.php';

    if(isset($_POST['submit'])){
        $nim  = $_POST['nim'];
        $nama_mah  = $_POST['nama_mah'];
        $kode_mk  = $_POST['kode_mk'];
        $nama_mk  = $_POST['nama_mk'];

        $mahasiswa = new Lib();
        $tambah = $mahasiswa->tambahDataMahasiswa($nim, $nama_mah, $kode_mk, $nama_mk);

        if($tambah = 'Berhasil'){
            header('location:Mahasiswa.php');
        }else{
            echo 'Gagal';
        }
    }
?>