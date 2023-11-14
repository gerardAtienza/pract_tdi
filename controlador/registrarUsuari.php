<?php
// Incluye el modelo
require_once __DIR__.'model/conectaBD.php';
require_once __DIR__.'model/registre.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obte les dades del formulari
    $nombre = $_POST['nom'];
    $email = $_POST['email'];
    $direccion = $_POST['adreca'];
    $codigo_postal = $_POST['codi_postal'];
    $poblacion = $_POST['poblacio'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash de la contrasenya

    // funcio de registre d usuari
    $exitos = registrarUsuari($nom, $email, $adreca, $codi_postal, $poblacio, $password, $conn);
    if ($exitos) {
        require_once __DIR__.'vista/registreExitos.php';
    }
    else {
        require_once __DIR__.'vista/registreNoExitos.php';
    }
}
?>