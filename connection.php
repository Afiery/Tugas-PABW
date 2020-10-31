<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tugas1ppo';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if($mysqli->connect_errno){
        echo 'Gagal Terkoneksi dengan database' . $mysqli->connect_error;
    }
?>