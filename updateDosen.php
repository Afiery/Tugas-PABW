<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require 'Lib.php';
    if(isset($_GET['nip'])){

        $dosen = new Lib();
        $dosenn = $dosen->editDataDosen($_GET['nip']);
        $edit = $dosenn->fetch(PDO::FETCH_OBJ);
    }
?>
<div class="container">
<h2>Edit Data Dosen</h2><br>
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" name="nip" value="<?php echo $edit->NIP;?>">
                </div>
                <div class="form-group">
                    <label for="nama_dos">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama_dos" value="<?php echo $edit->Nama_Dosen;?>">
                </div>
                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah</label>
                    <input type="text" class="form-control" name="kode_mk" value="<?php echo $edit->Kode_MK;?>">
                </div>
                <input type="submit" class="btn btn-success btn-sm" value="Edit" name="submit">
                <a href="Dosen.php"><input type="button" class="btn btn-danger btn-sm" value="Back"></a>
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
    if(isset($_POST['submit'])){
        $nip = $_GET['nip'];
        $nama_dos = $_POST['nama_dos'];
        $kode_mk = $_POST['kode_mk'];

        $edit = $dosen->updateDataDosen($nip, $nama_dos, $kode_mk);
        if($edit == 'Berhasil'){
            header('location:Dosen.php');
        }else{
            echo 'Gagal';
        }

    }
?>