<!DOCTYPE html>
    <html >
    <head>
    			    <meta charset="UTF-8">
    			    <title>Obtener hora y fecha actual PHP</title>
    </head>
    <body>
     
    <?php
    date_default_timezone_set('America/Lima');
     
    ?>
    <h1>Fecha y Hora actual</h1>
     
    <? $hoy = date('m/d/y g:ia');
    echo '$hoy' ;
    ?>
    
    </body>
    </html>