<?php
@session_start();
if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('conexion.php');
    $query = "SELECT type_nombre FROM TIPO_CLIENTE";
    $cli_type = $conn->query($query);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <form>
    </form action="vcliente" method="POST" id="formulario">
    <div class="campo">
        <label>RUC</label>
        <input type="number" name="ruc">
    </div>
    <div class="campo">
        <label>Nombre</label>
        <input type="text" name="cli_nomb">
    </div>
    <div class="campo">
        <label>Contacto</label>
        <input type="text" name="cli_cont">
    </div>
    <div class="campo">
        <label>Telefono</label>
        <input type="number" name="cli_phone">
    </div>
    <div class="campo">
        <label>Correo Electronico</label>
        <input type="email" name="cli_mail">
    </div>
    <div class="campo">
        <label>Tipo de Cliente</label>
        <?php WHILE($row = $cli_type->fetch_assoc()){?>
		<option value="<?php echo $row['type_nombre'];?>"><?php echo $row['type_nombre'];?>
</head>
<body>
    
</body>
</html>