<?php
@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
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
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <button><a href="csv_data.php"></a>Reportes</button>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Numero de incidencia</th>
                    <th>Vendedor</th>
                    <th>Cliente</th>
                    <th>Contacto</th>
                    <th>E-mail</th>
                    <th>Tipo de Cliente</th>
                    <th>Empresa</th>
                    <th>Fecha de Correo</th>
                    <th>Fecha incidencia</th>
                    <th>Canal de seguimiento</th>
                    <th>Proceso</th>
                    <th>Observacion General</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //include database configuration file
                    include ('conexion.php');
                    
                    //get records from database
                    $query = "SELECT * FROM INCIDENCIAS ORDER BY inc_num ASC";
                    $reporte = $conn->query($query);
                    WHILE ($row =  $reporte ->fetch_array(MYSQLI_BOTH)) { ?>
                    <tr>
                        <td><?php echo $row['inc_num']; ?></td>
                        <td><?php echo $row['vendedor']; ?></td>
                        <td><?php echo $row['cli_nomb']; ?></td>
                        <td><?php echo $row['cli_cont']; ?></td>
                        <td><?php echo $row['cli_mail']; ?></td>
                        <td><?php echo $row['cli_type']; ?></td>
                        <td><?php echo $row['emp_nomb']; ?></td>
                        <td><?php echo $row['correo_fecha']; ?></td>
                        <td><?php echo $row['incidencia_fecha']; ?></td>
                        <td><?php echo $row['canal_seguimiento']; ?></td>
                        <td><?php echo $row['inc_proc']; ?></td>
                        <td><?php echo $row['obs_general']; ?></td>                                                             
                    </tr>
                        <?php }?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>