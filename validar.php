<?php
try {
	require_once('conexion.php');
    $inv_vend=$_POST['inc_vend'];
    $cli_nomb=$_POST['cli_id'];
    $cli_type=$_POST['cliente_type'];
    $cli_mail=$_POST['cliente_mail'];
    $inc_fecha=date('Y-m-d H:i:s');
    $inc_proc=$_POST['proceso'];
    $inc_obs_c=$_POST['cliente_obs'];
    $inc_obs_v=$_POST['vendedor_obs'];
    
    var_dump($_POST);
	$sql="INSERT INTO INCIDENCIAS(user_cod,cli_nomb,cli_mail,inc_proc,inc_obs_c,inc_obs_v) VALUES ('prueba','prueb1','prub2','prueb3','prub4')"; 
    $resultado = $conn->query($sql);
} catch (Exception $e) {
	echo $e->getMessage();
}
?>