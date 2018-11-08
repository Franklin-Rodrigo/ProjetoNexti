<?php

$login = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['password']);
$connect = mysqli_connect('localhost', 'root', 'root');
$db = mysqli_query('loggin');
if(isset($entrar)){
	$verify = mysqli_query("SELECT * FROM usuarios WHERE login = '$loggin' AND senha = '$password'") or die("Erro ao selecionar");
	if(mysql_num_rows($verify) <= 0){
		echo "<script language='javascript' type='text/javascript>' alert('loin e/ou senha incorreta'); window.location.href='index.html'; </script>";die();
	}else{
		setcookie('login', $login);
		header("location.index.php");
	}
}

?>