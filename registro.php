<?php
session_destroy();
$name = $_POST['user_name'];
$lname = $_POST['user_lastname'];
$email = $_POST['correo'];
$pass = md5($_POST['contraseña']);
$birth = $_POST['nacimiento'];
$dir = $_POST['direccion'];
$tel = $_POST['tel_user'];

$server = "localhost";
    $user = "isaack";
    $passw = "12345";
    $bd = "usuarios";

$conexion = mysqli_connect($server, $user, $passw,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    

$sql="SELECT IF( EXISTS(
	SELECT nombre
	FROM usuarios
	WHERE correo = '$email'),1,null)";
$result =mysqli_query($conexion,$sql);

if($row = mysqli_fetch_array($result)){
	if($row[0] == null){
		$sql1="INSERT INTO usuarios (nombre, apellido, correo, contraseña, nacimiento, direccion, telefono) values ('$name','$lname','$email','$pass','$birth','$dir','$tel')";
		$result1 =mysqli_query($conexion,$sql1);
		$alert = "<script>alert('Usuario registrado con exito');</script>";
		echo $alert;
		header("Location: login.html");
		exit();
	}else{
		$alert = "<script>alert('El correo ya esta en uso');</script>";
		echo $alert;
		}
	}
else{
	header("Location: registro.html");
	exit();
}
?>