
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" >

    <form class="form-signin" method="post">

      <img class="mb-4" src="../img/login.png" alt="" width="150" height="150">

      <h1 class="h3 mb-3 font-weight-normal">POR FAVOR, ACCEDE</h1>

      <label for="inputEmail" class="sr-only">Email</label>

      <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Contraseña</label>

      <input type="password" name="password" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">

        <label>

          <input type="checkbox" value="remember-me"> Recordarme

        </label>

      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Accede</button>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

    </form>

    <?php
    session_start();
    include('config.php');
    //print_r ($_POST);
    //print_r ($_SESSION);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query =  mysqli_query($mysqli,"SELECT email, password FROM usuario WHERE (email='$email') AND (password='$password')");
    $count = mysqli_num_rows($query);
    if ($count >= 1){
      $_SESSION['canAccess'] = true;
      header('Location: dashboard.php');
    }else{
    $_SESSION['canAccess'] = false;
    }
    //mysqli_close($mysqli);
?>


  </body>
</html>