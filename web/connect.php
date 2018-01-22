
<?php
    /*$serverName = "antisql02.cegedim.clt\dwhval";
    $connectionOptions = array(
        "Database" => "ws_pharma_dev",
        "Uid" => "TPignon",
        "PWD" => ""
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn) {
        echo "Connected!";
    } else {
        die( FormatErrors( sqlsrv_errors()));
    }*/


    $db_host = 'antisql02.cegedim.clt\dwhval';
    $database = 'ws_pharma_dev';
    $table = 'l_config_geo_sales_rep';
    $dsn = 'ws_pharma_dev';

    $connectionInfo = array("Database"=>$database);
    $conn = sqlsrv_connect($db_host, $connectionInfo);

    if($conn) {
        echo "Connected !";
    } else {
         echo "Connection could not be established.\n";
         die( print_r( sqlsrv_errors(), true));
    }
?>
