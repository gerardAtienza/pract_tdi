<?php

function getProductes($conn){
    // Preparem la consulta.
    $sql = 'SELECT id_prod, `nom`
    FROM producte';  // Modificar perque nomes mostri els resultats que tinguin un id_categoria en concret

    //Enviem la query a la BBDD. La variable $conn
    $result = pg_query($conn, $sql);

    // Agafem els resultats de la consulta.
    $array_elements = pg_fetch_all($result);
    return $array_elements;
}