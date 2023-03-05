<?php
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$Usuario;

$conexion=mysqli_connect("127.0.0.1", "u872899779_utoi", "pelapapa1A", "u872899779_alumno");

$consulta="SELECT * FROM alumno where Usuario='$Usuario' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
        header("location:https://www.utoifuerzasespeciales.com/Inicio.html");
        
} else {
    ?>
    <?php
    include("index.html"); 
    ?>
        <div class="clearfix"></div>
        <h5 class="ERROR" style="color: white;">
             <center>!!! USUARIO Y/O CONTRASEÑA INCORRECTA¡¡¡ VUELVA A INTENTARLO</center>
        </h5>
   
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);