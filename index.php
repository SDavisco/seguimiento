<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
?>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<title>Perfil</title>
		<style>
			*{
				margin:0px;	
			}
			#nav{
				width:100%;
				height:70px;
				background-color:red;
				margin:0px;
			}
			
			.item{
				color:white;
				font-size: 16px;
				font-weight: bold;
				font-family: segoe ui;
				padding:24px;
			}

			.item:hover{
				background-color:darkblue;
				cursor:pointer;
			}

			a{
				text-decoration: none;
				color:white;
			}
		</style>
	</head>
	<body>
		<?php include 'include/layout/header.php';?>
	</body>
</html>