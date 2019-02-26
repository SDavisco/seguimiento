<?php
@session_start(); 
	require ('conexion.php');
	//llamar para lista de clientes
	$query = "SELECT * FROM CLIENTES ORDER BY cli_id ASC";
	$resultado = $conn->query($query);

?>
<!DOCTYPE html><!-- HTML5 -->
<html>
	<head>
		<title>SEGUIMIENTO  - Davisco Seguimiento </title>
		<meta charset="utf-8"/>
		<script language="javascript" src="js/jquery-3.3.1.min.js"></script>
		<script language="javascript" src="js/includes.js"></script>
		
	</head>
	<body>
	<form class="" action="validar.php" method="POST">
		<div class="campo">
			<label>
				Empresa-Cliente
			</label>
			<select name="cliente" id="cliente" onchange="funcion()">
				<option value="0">seleccionar cliente</option>
				<?php WHILE($row=$resultado->fetch_assoc()){?>
				<option value="<?php echo $row['cli_nomb'];?>"><?php echo $row['cli_nomb'];?>
				</option>
            				<?php }?>
			</select>
	    <div class="campo">
	        <label>
	            Usuario
	        </label>
	        <input type="text" name="user" id ="user" value="<?php echo $_SESSION["user_name"];?>">
	    </div>
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
	
		</div>
        
		<div class="campo">
			<label>
				Fecha
			</label>
			<input type="date" name="inc_fecha" id="date">
		</div>
		<select name="type_sg" id="type_sg">
				<option value="0">seleccionar seguimiento</option>
		<div class="campo">
			<label>
			Proceso Realizado
			</label>
		<textarea name="proceso" id="proceso" cols="25" rows="10" class="caja-2" placeholder="Deja tu mensaje">				
		</textarea>
		</div>			
		<div class="campo">
				<label>
					Observacion Cliente
				</label>
				<input type="text" name="cliente_obs" id="cliente_obs">
		</div>
		<div class="campo">
				<label>
					Observacion Vendedor
				</label>
				<input type="text" name="vendedor_obs" id="vendedor_obs">
		</div>
		<input type="submit" name="submit" value="aceptar">
	</form>
	</body>
</html>
