<?php
    $databaseName = 'tdiw';
    $databaseUser = 'user';
    $databasePassword = 'password';
    $databaseHost = '127.0.0.1';

    $conn = pg_connect("dbname=$databaseName user=$databaseUser password=$databasePassword host=$databaseHost");
    if (!$conn) {
        echo "Failed to connect to the database";
    }
?>
