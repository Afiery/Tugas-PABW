<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="MataKuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Pembayaran.php">Pembayaran</a>
        </li>
      </ul>

   </div>

</nav>
<body>
    <h2>Mata Kuliah</h2><br>
    <div class="container">
<table class="table table-bordered table-hover text-center">
<a href="addMatkul.php" class='btn btn-info btn-sm'>Tambah Data</a>
    <thead>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th colspan ="2">Action</th>
    </thead>
    <?php
        require 'Lib.php';

        $matkul = new Lib();
        $tampil = $matkul->tampilDataMK();
        while($data = $tampil->fetch(PDO::FETCH_OBJ)){
            echo "
                <tr>
                    <td>$data->Kode_MK</td>
                    <td>$data->Nama_MK</td>
                    <td><a href='updateMatkul.php?kode_mk=$data->Kode_MK' class='btn btn-info btn-sm '>Edit</a></td>
                    <td><a href='MataKuliah.php?delete=$data->Kode_MK' class='btn btn-danger btn-sm' >Delete</a></td>
                </tr>
            ";
         }
    ?>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
<?php
    if(isset($_GET['delete'])){
        $kode_mk = $_GET['delete'];
        $matkul->hapusDataMK($kode_mk);
        
        header('location:MataKuliah.php');
    }
?>