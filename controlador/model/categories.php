<?php

function getCategories($conn){
    // Pas 1: preparem la consulta.
    $sql = 'SELECT id_categoria, `nom`
    FROM categoria';

    // Pas 2: Enviem la query a la BBDD. La variable $conn
    // és la definida al pas anterior.
    $result = pg_query($conn, $sql);

    // Pas 3: agafem els resultats de la consulta.
    $array_elements = pg_fetch_all($result);
    return $array_elements;
}