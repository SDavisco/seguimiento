<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
<body>
<div id="nav">
			<span style="float:right" class="item" id="nombre_usuario"><a href="logout.php">Cerrar sesion</a></span>
			<span class="item" style="float:right"><?php echo $_SESSION["user_name"]; ?></span>
			<ul>
                <li><a href="seguimiento.php">seguimiento</a></li>
                <li><a href="mantenimiento.php">mantenimiento</a></li>
                <li><a href="getdatos.php">reporte</a></li>
			</ul>
</div>
</body>
</html>
