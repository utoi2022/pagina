<?php
function conectar(){
    $host="127.0.0.1";
    $user="u872899779_utoi";
    $pass="pelapapa1A";

    $bd="u872899779_alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>