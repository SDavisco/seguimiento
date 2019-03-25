<?php
//include database configuration file
include 'conexion.php';

//get records from database
$reporte = $conn->query("SELECT * FROM INCIDENCIAS ORDER BY inc_num ASC");

if($reporte->num_rows > 0){
    $delimiter = ",";
    $filename = "members_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('Numero de incidencia', 'Vendedor', 'Cliente', 'Contacto', 'E-mail', 'Tipo de Cliente','Empresa','Fecha de Correo', 'Fecha inicidencia', 'Canal de seguimiento','Proceso','Observacion General' );
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $reporte->fetch_assoc()){
        $lineData = array($row['inc_num'], $row['vendedor'], $row['cli_nomb'], $row['cli_cont'], $row['cli_mail'], $row['cli_type'],$row['emp_nomb'],$row['correo_fecha'], $row['incidencia_fecha'], $row['canal_seguimiento'], $row['inc_proc'], $row['obs_general']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="reporte.csv"');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>