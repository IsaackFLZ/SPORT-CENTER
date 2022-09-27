<?php
session_destroy();
$correo = $_POST['correo'];
$pass = md5($_POST['password']);

if(empty($correo) || empty($pass)){
	header("Location: index.html");
	exit();
}
$server = "localhost";
    $user = "isaack";
    $passw = "12345";
    $bd = "usuarios";

$conexion = mysqli_connect($server, $user, $passw,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    

$sql="select * from usuarios where contraseña='$pass'";
$result =mysqli_query($conexion,$sql);

if($row = mysqli_fetch_array($result)){
	if($row['contraseña'] ==  $pass and $row['correo'] == $correo){
		session_start();
		$_SESSION['correo'] = $correo;
		header("Location: contenido.php");
	}else{
		header("Location: index.html");
		exit();
	}
}else{
	header("Location: index.html");
	exit();
}


?>