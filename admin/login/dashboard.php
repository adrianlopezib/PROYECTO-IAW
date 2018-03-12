<?php

    session_start();

    if($_SESSION['canAccess'] = false){

        header('Location; index.php')

        exit;

    }

    echo "WELCOME TO ADMINISTRATION PAGE"

?>