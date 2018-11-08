<?php
$login = $_POST['email'];
$senha = md5($_POST['password']);
$connect = mysqli_connect('localhost', 'root', '', 'Login')or die("Erro na conexão do banco de dados");

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select, $connect);
$array = mysql_fetch_array($select);
$lparry = $array['login'];
if (lparry == $login) {
	echo "<script language='javascript' type='text/javascript'> alert('Esse loin ja existe');
	window.location.href='register.html';</script>";
	die();
}else{
	$query = "INSERT INTO usuarios(login, senha) VALUES ('$login','$senha')";
	$insert = mysqli_query($query, $connect);
	if($insert){
		echo "<script language='javascript' type='text/javascript'> alert('Usuario cadastrado com sucesso'); window.location.href='index.html';</script>";
	}else{
		echo "<script language='javascript' type='text/javascript'> alert('Não foi possivel cadastrar esse usuario');window.location.href='register.html';</script>";
	}
}

?>