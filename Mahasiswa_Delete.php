<?php
session_start();
include 'connection.php';
?>
<?php
if(isset($_GET['nim'])){
    $hapus = mysqli_query($mysqli, "DELETE FROM Mahasiswa WHERE nim = '".$_GET['nim']."'");
    header('location:Mahasiswa.php');
}
?>