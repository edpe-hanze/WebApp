<?php
    //connect to the database
    $serverName = "[server name]"; //example: sqlserver-groep1.database.windows.net
    $connectionOptions = array(
        "Database" => "[database]", //specify your database
        "Uid" => "[Username]", //Username
        "PWD" => "[Password]" //Password
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
