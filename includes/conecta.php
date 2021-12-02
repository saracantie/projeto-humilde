<?php
$con = mysqli_connect("localhost", "root", "", "atp");

if ($con == false) {
    die("ERRO: Não foi possível conectar ao MySQL. " . mysqli_connect_error());
}

?>