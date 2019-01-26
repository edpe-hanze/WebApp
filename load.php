<?php
    //require file for connecting to the database
    require '/dbcon.php';
    //specify query
    $sql= "SELECT TOP 100 temperature, humidity, rainpercentage, timestamp, device_id FROM [table] WHERE Device_ID='[Device_ID]' ORDER BY timestamp DESC";
    //run query
    $results= sqlsrv_query($conn, $sql);
    //check for error
    if( $results === false ) {
     die( print_r( sqlsrv_errors(), true));
    } else {
    //if there is no error, make an nest array in a array. fill these nested arrays with data
         while($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
	       $data[] = array(strval(str_replace("2019-","",$row['timestamp'])),floatval($row['temperature']),floatval($row['humidity']),floatval($row['rainpercentage']*100));
         }
    }
    //append the collumn names
    $titlearr = array('Date created', 'Temperature °C', 'Humidity %', 'Rain %');
      array_unshift($data , $titlearr);
   //json encode
      echo json_encode($data);


 ?>
