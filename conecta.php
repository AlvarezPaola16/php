<?php

$servidor = "localhost";
$user = "root";
$password = "";
$bd = "Ejemplo";
$conecta = mysqli_connect($servidor,$user,$password,$bd);
if($conecta ->connect_errno){
    die "Errror al conectar la base de datos".$conecta ->connect_errno ;
}
?>