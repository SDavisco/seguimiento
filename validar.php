<?php
	require_once('conexion.php');
    date_default_timezone_set('America/Lima');
    $user_name = $_POST['vendedor'];
    $cli_nomb=$_POST['cliente'];
    $cli_cont = $_POST['cli_cont']; 
    $cli_mail=$_POST['cliente_mail'];
    $cli_type=$_POST['cli_type'];
    $emp_nomb= "DAVISCO S.A";
    $fecha = $_POST['inc_fecha'];
    $type_sg = $_POST['type_sg'];
    $fechaBD = date("d-m-Y", strtotime($fecha));
    $inc_fecha= date('d/m/y g:ia');
    $inc_proc=$_POST['proceso'];
    $inc_obs=$_POST['obs'];
	$sql="INSERT INTO INCIDENCIAS (vendedor, cli_nomb, cli_cont, cli_mail, cli_type, emp_nomb, correo_fecha, incidencia_fecha, canal_seguimiento, inc_proc, obs_general ) VALUES ('$user_name', '$cli_nomb', '$cli_cont', '$cli_mail','$cli_type', '$emp_nomb', '$inc_fecha', '$fechaBD', '$type_sg', '$inc_proc', '$inc_obs')"; 
if (mysqli_query($conn, $sql))
{
    echo "Exito";
}
else{
    echo "error". $sql."<br>".mysqli_error($conn);
}
?> 