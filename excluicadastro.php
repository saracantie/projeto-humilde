<?php
    include "includes/conecta.php";
    session_start();

unset($_SESSION['id']);
unset($_SESSION['nome']);
    $id = $_GET['id'];
    
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    
    
    header("Location: paginicial.php?tchau");

?>