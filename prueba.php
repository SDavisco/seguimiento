<?php  
try {
	require_once('conexion.php');
	$sql = "INSERT INTO INCIDENCIAS(cli_nomb,cli_mail,inc_proc,) VALUES ('prueba','prueb1','prub2')";
	$resultado = $conn->query($sql);
} catch (Exception $e) {
	echo $e->getMessage();
}
?>
