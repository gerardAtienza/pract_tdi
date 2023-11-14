<?php

function getCategories($conn){
    // Preparem la consulta.
    $sql = 'SELECT id_categoria, `nom`
    FROM categoria';

    // Enviem la query a la BBDD. La variable $conn
    $result = pg_query($conn, $sql);

    // Agafem els resultats de la consulta.
    $array_elements = pg_fetch_all($result);
    return $array_elements;
}