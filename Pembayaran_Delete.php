<?php
session_start();
include 'connection.php';
?>
<?php
if(isset($_GET['id_bayar'])){
    $hapus = mysqli_query($mysqli, "DELETE FROM Pembayaran WHERE id_bayar = '".$_GET['id_bayar']."'");
    header('location:Pembayaran.php');
}
?>