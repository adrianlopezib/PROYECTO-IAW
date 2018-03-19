<?php

include ('config.php');

$codigo = $_GET['codigo'];

$consul = mysqli_query($mysqli, "SELECT * FROM producto where codigo=$codigo");

while ($res = mysqli_fetch_array($consul)){

    $cod = $res['codigo'];
    $nom = $res['nombre'];
    $desc = $res['descripcion'];
    $photo = "<img src='../../".$res['imagen']."' alt=\"\">";
    $price = $res['precio'];

}

?>