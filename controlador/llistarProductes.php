<?php

    require_once __DIR__.'model/conectaBD.php';
    require_once __DIR__.'model/productes.php';

    $productes = getProductes(); // Aquesta crida és al model

    include __DIR__.'vista/llistarProductes.php';
?>