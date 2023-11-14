
<?php

function registrarUsuari($nom, $email, $adreca, $codi_postal, $poblacio, $password, $conn) {

    $query = "INSERT INTO usuarios (nom, email, adreca, codi_postal, poblacio, password) 
                  VALUES ('$nom', '$email', '$adreca', '$codi_postal', '$poblacio', '$password')";

    $exitos = $conn->query($query);
    return $exitos;
    
}