<?php
session_start();
include 'connection.php';
?>
<?php
if(isset($_GET['kode_mk'])){
    $hapus = mysqli_query($mysqli, "DELETE FROM Mata_Kuliah WHERE kode_mk = '".$_GET['kode_mk']."'");
    header('location:Matkul.php');
}
?>