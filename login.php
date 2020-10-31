<?php
session_start();
include 'connection.php';
?>
<?php
 if(isset($_POST['submit'])){
	 $user = $_POST['user'];
	 $pass= $_POST['pass'];
	 $query = mysqli_query($conn,"SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
	 $result = mysqli_fetch_array($query);
	 $username = $result['username'];
	 $password = $result['password'];
	 $level = $result['level'];
	 
	 if($user == $username || $pass == $password){
		  $_SESSION['level'] = $level;
	 	header ("location: index.php");
	 }else{
		echo "<script>alert('Username/Password Salah')</script>";
	 }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Mahasiswa</title>
</head>
<body class="body-login">
<div class="login-background">
<h2>Login</h2>
<form class="login-form" method="post">
	<input type="text" name="user" placeholder="Username" required autofocus><br><br>
	<input type="password" name="pass" placeholder="Password" required><br><br>
	<button type="submit" name="submit" class="button">Login</button><br><br>
</form>
</div>
</body>
</html>