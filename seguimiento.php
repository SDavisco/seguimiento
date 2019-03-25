<?php
@session_start();
if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('conexion.php');
	//llamar para lista de clientes
	$query      = "SELECT * FROM CLIENTES ORDER BY cli_id ASC";
	$query1     = "SELECT canal_seguimiento FROM CANAL_SEGUIMIENTO";
	$query2     = "SELECT proceso FROM PROCESO_SEGUIMIENTO";
	$resultado  = $conn->query($query);
	$resultado1 = $conn->query($query1);
	$resultado2 = $conn->query($query2);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>SEGUIMIENTO  - Davisco Seguimiento </title>
		<meta charset="utf-8"/>
		<script language="javascript" src="js/jquery-3.3.1.min.js"></script>
		<script language="javascript" src="js/includes.js"></script>
		<script language="javascript" src="js/CleanForm.js"></script>
		<link rel="stylesheet" href="css/main.css"  type="text/css">
		
	</head>
	<body>
	<?php
    include 'include/layout/header.php';
?>
	<form name="form" action="validar.php" method="POST" id="formulario">
		<div class="campo">
			<label>
				Empresa-Cliente
			</label>
			<select name="cliente" id="cliente" onchange="funcion()">
				<option value="0">seleccionar cliente</option>
				<?php WHILE($row = $resultado->fetch_assoc()){?>
				<option value="<?php echo $row['cli_nomb'];?>"><?php echo $row['cli_nomb'];?>
				</option>
            	<?php }?>
			</select>
		</div>
        <div id="GetDatosCliente">
            <div class="campo">
    			<label>
    				Cliente-Contacto
    			</label>
    			<input name="cli_cont" id="cli_cont">
    		</div>
    		<div class="campo">
    			<label>
    				Correo de Cliente
    			</label>
    			<input type="email" name="cliente_mail" id="cliente_email">
    		</div>
    		<div class="campo">
    		   <label>
    			   Tipo de Cliente 
    		   </label>
    		   <input type="text" name="cli_type" id="cli_type">
    		</div>  
		</div>       
		<div class="campo">
			<label>
				Fecha de Correo
			</label>
			<input type="date" name="inc_fecha" id="date">
		</div>
		<div class="campo">
			<label>
				Canal de Seguimiento
			</label>
			<select name="type_sg" id="type_sg">
				<option value="0">seleccionar seguimiento</option>
					<?php WHILE($row1 = $resultado1->fetch_assoc()){?>
				<option value="<?php echo $row1['canal_seguimiento'];?>"><?php echo $row1['canal_seguimiento'];?>
				</option>
            	<?php }?>
			</select>
		</div>
					<div class="campo">
	        <label>
	            Usuario
	        </label>
	        <input type="text" name="vendedor" id ="user" value="<?php echo $_SESSION["user_name"];?>" readonly="readonly">
	    </div>
		<div class="campo">
			<label>
			Proceso Realizado
			</label>
			<select name="proceso" id="proceso" id="proceso">
				<option value="0">seleccionar proceso</option>
					<?php WHILE($row2 = $resultado2->fetch_assoc()){?>
				<option value="<?php echo $row2['proceso'];?>">	<?php echo $row2['proceso'];?>	
				</option>
				<?php }?>
			</select>		
		</div>			
		<div class="campo">
				<label>
					Observacion General
				</label>
				<input type="text" name="obs" id="obs">
		</div>
		<input type="submit" name="submit" value="aceptar" id="reset">
	</form>
	</body>
</html>
