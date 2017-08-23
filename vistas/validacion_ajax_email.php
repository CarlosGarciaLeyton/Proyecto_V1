

<?php 
include '../config/conexion.php';//Incluir la conexion a la BD


//real_escape_string ayuda a evitar SQL injection
$email = $con ->real_escape_string($_POST['email']);

$sel = $con->query("SELECT correo FROM usuario WHERE correo = '$email'");

//Determina el numero de filas del resultado
$row = mysqli_num_rows($sel);
if($row != 0){
	echo "<label style='color:red'>El Correo ya existe... </label>";
}else{
	echo "<label style='color:green'>OK, Tu correo no esta en nuestra bD  </label>";
}

//Cerrar la conexion
$con->close();

 ?>
