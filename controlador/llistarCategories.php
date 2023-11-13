<?php

    require_once __DIR__.'model/conectaBD.php';
    require_once __DIR__.'model/categories.php';

    $categories = getCategories($conn); // Aquesta crida és al model

    include __DIR__.'vista/llistarCategories.php';
?>