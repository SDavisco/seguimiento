<?php
require_once('conexion.php');
    $cli_ruc   = $_POST['cli_ruc'];
    $cli_nomb  = $_POST['cli_type'];
    $cli_cont  = $_POST['cli_cont']; 
    $cli_phone = $_POST['cli_mail'];
    $cli_type  = $_POST['cli_type'];
    $cli_mail  = $_POST['cli_mail'];
    $cli_type  = $_POST['proceso'];

$sql = "INSERT INTO CLIENTES(cli_ruc, cli_nomb, cli_nomb, cli_cont, cli_phone, cli_mail, cli_type) VALUES ('$cli_ruc','$cli_nomb','$cli_cont', '$cli_phone', '$cli_mail', '$cli_type')";

    if (mysqli_query($conn, $sql))
    {
        echo "Exito";
    }
    else{
        echo "error". $sql."<br>".mysqli_error($conn);
     }
?>