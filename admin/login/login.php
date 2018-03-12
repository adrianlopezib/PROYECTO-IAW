
<?php

session_start();
include('config.php');

$email = $POST['email'];
$passswd = $POST['password']
//$email = "usuario@usuario.es";
//$passsword = "md5("usuario")"

$query = "SELECT * FROM usuario WHERE email='$email' AND password='$passsword'";
$result = mysqli_query($mysqli, $query);
$count = mysqli_num_rows($result);

if ($count >= 1){

  $_SESSION['canAccess'] = true;
  header('Location: dashboard.php');

}else{

  $_SESSION['canAccess'] = false;
  echo "Error";

}

mysqli_close($mysqli);



?>
