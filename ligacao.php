<?php

$hostname = "localhost";
$bancodedados = "dbfeira";/*nome do banco*/
$usuario = "root";
$senha = "123"; /*senha do banco ou ip*/

$bd_feira = new mysqli($hostname, $usuario,  $bancodedados);
if ($bd_feira->connect_errno) {
    echo "Falha ao conectar: (" . $bd_feira->connect_errno . ")" . $bd_feira->connect_error;
}
?>