<?php
session_start();
include 'connection.php';
?>
<?php
if(isset($_GET['nip'])){
    $hapus = mysqli_query($mysqli, "DELETE FROM Dosen WHERE NIP = '".$_GET['nip']."'");
    header('location:Dosen.php');
}
?>