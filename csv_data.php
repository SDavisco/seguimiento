<?php
//include database configuration file
include 'conexion.php';

//get records from database
$query = $conn->query("SELECT * FROM INCIDENCIAS ORDER BY inc_num ASC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "members_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('Numero de incidencia', 'Vendedor', 'Cliente', 'Contacto', 'E-mail', 'Tipo de Cliente','Empresa','Fecha','Proceso','Observacion Cliente','Observacion Vendedor' );
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['inc_num'],  $row['user_name'], $row['cli_nomb'], $row['cli_cont'], $row['cli_mail'], $row['cli_type'],$row['emp_nomb'],$row['inc_fecha'], $row['inc_proc'], $row['inc_obs_c'], $row['inc_obs_v']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="prueba.csv"');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>