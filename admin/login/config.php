<?php

    #Vinculamos con BBDD

    define('DB_HOST','localhost');
    define('DB_NAME','tienda');
    define('DB_USER','tienda_user');
    define('DB_PASSWORD','tienda_password');

    // EL ORDEN DE LOS PARAMETROS AFECTA

    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    

?>