<?php
	
	require ('conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];
		$rs = mysqli_query($conn, "SELECT * FROM USUARIOS WHERE user_name = '$usuario' AND user_pass = '$contra'");

		if($rs->num_rows>0){
			while($row = mysqli_fetch_array($rs)){
				//echo "Bienvenido ".$row['user_name'];
				@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				$_SESSION["user_cod"]=$row["user_cod"];
				header("Location: perfil.php");
			}

		}else{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formulario";
	}
?>