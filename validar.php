<?php
	require_once('conexion.php');
    $cli_nomb=$_POST['cliente'];
    $cli_cont = $_POST['cli_cont']; 
    $cli_mail=$_POST['cliente_mail'];
    $cli_type=$_POST['cli_type'];
    $inc_fecha=$_POST['inc_fecha'];
    $inc_proc=$_POST['proceso'];
    $inc_obs_c=$_POST['cliente_obs'];
    $inc_obs_v=$_POST['vendedor_obs'];
    $emp_nomb= "DAVISCO S.A";
	$sql="INSERT INTO INCIDENCIAS (user_name, cli_nomb, cli_cont, cli_mail, cli_type, emp_nomb,  inc_fecha, inc_proc, inc_obs_c, inc_obs_v) VALUES ('$user_name', '$cli_nomb', '$cli_cont', '$cli_mail','$cli_type', '$emp_nomb','$inc_fecha','$inc_proc', '$inc_obs_c', '$inc_obs_v')"; 
if (mysqli_query($conn, $sql))
{
    echo "Exito";
}
else{
    echo "error". $sql."<br>".mysqli_error($conn);
}
?>