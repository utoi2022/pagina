<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Legajo=$_POST['Legajo'];
$Mail=$_POST['Mail'];

$sql= "INSERT INTO alumno VALUES ('$id','$Usuario','$Contraseña','$Nombre','$Apellido','$Legajo','$Mail')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.html");
    
}else {
}
?>