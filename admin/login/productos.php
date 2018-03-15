<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PAGINA DE ADMINISTRACION</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>

  
<aside>
  <header>
    <div><img class="profile-picture" src="https://avatars0.githubusercontent.com/u/35528201?s=400&u=a69129152387cdd76a39044bf402ec80616dadb8&v=4"/>
      <p>Adrian Lopez</p>
    </div>
  </header>
  <nav class="side-navigation">
    <ul>
      <li><a href="dashboard.php" data-title="Cuenta Verificada"><i class="fa fa-dashboard"></i>Inicio</a></li>
      <li class="active"><a href="#"><i class="fa fa-ship"></i>Productos</a></li>
    </ul>
  </nav>
</aside>
<main>
  <header class="main-head">
    <div class="logo"><i class="fa fa-dashboard"></i></div>
    <div class="search">
      <input type="text" name="search" placeholder="Buscar..." autocomplete="off"/><i class="fa fa-search"></i>
    </div>
  </header>




  <?php

include ('config.php');

//Realizamos la consulta

$resultado = mysqli_query($mysqli,"SELECT * from producto");

?>

  <div class="wrapper">
    <ul class="category-navigation">
      <li class="active"><a href="#">PRODUCTOS</a></li>     
    </ul>
    <div class="container">
      <div class="card orange">
        <div class="content visible" data-content="1">
          <ul>

            <?php

              while ($res = mysqli_fetch_array($resultado)) {

                echo "<li>".$res['nombre']."</li>";
                
              }

              mysqli_close($mysqli);

            ?>


          </ul>
        </div>
      </div>

      <?php

        include ('config.php');

        //Realizamos la consulta

        $resultado = mysqli_query($mysqli,"SELECT * from producto");

      ?>

      <div class="card purple">
        <ul class="tabs">
        </ul>
        <div class="content visible" data-content="3">
          <ul class="has-icon">
          <?php

              while ($res = mysqli_fetch_array($resultado)) {

                echo "<li>".$res['descripcion']."</li>";
               // print_r ($res['precio']);
                
              }

              mysqli_close($mysqli);

            ?>
            </ul>
        </div>
       </div>
      </div>
      </div>
    </div>
  </div>

   


       
    
  
  

</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script  src="../js/index.js"></script>


</body>





</html>

