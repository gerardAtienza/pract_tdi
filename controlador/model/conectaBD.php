<?php
    $databaseName = 'tdiw-l6';
    $databaseUser = 'tdiw-l6';
    $databasePassword = 'CLVcSyGg';
    $databaseHost = '127.0.0.1';
    $port = '22';

    $conn = pg_connect("dbname=$databaseName user=$databaseUser password=$databasePassword host=$databaseHost port=$port");
    if (!$conn) {
        echo "Failed to connect to the database";
    }
    else{
        echo "estas conectat correctament";
    }
?>
