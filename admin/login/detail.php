<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Card Product JS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  
      <link rel="stylesheet" href="css/detail.css">

  
</head>

<body>

  <div class="card-product">    
    <div class="share">
        <h3><span class="fa fa-twitter"></span></h3>
        <h3><span class="fa fa-facebook"></span></h3>
        <h3><span class="fa fa-google-plus"></span></h3>
        <h3><span class="fa fa-send"></span></h3>
    </div> 

    <?php

    include ('detail2.php');

    echo "<div class=\"img-product\">" ;          
    echo    "<div class=\"slideshow-container\">" ;
    echo        "<div class=\"slides fade\">";
    echo            "<img src=\".$photo.\" style=\"width:100%\"/>";
    echo        "</div>";                          
    echo        "</div>"; 
    echo    "<br/>";
        

        

       
    echo        "</div>";  


    ?>
    
    <?php

    include ('detail2.php');
    echo "<div class=\"container-dots\">";
    echo    "<span class=\"dot\" onclick=\"".$photo."\"></span>";
    echo "</div>";

    echo "<div class=\"data-product\">";
    echo   "<h2>".$nom."</h2>";
    echo    "<h3>".$price."</h3>";
    echo    "<div class=\"tab\">";
    echo        "<button class=\"tablinks\" onclick=\"openData(event, 'description')\" id=\"defaultOpen\">".$desc."</button></div>";
    echo    "<div id=\"description\" class=\"tabcontent\">";
            
    echo    "</div>";

        ?>
        <br />
        <div class="cart">
            <button class="btn-add-cart"><span class="fa fa-shopping-cart"></span>&nbsp; Comprar </button>
        </div>
    </div>  
</div>
  
  

    <script  src="../js/index.js"></script>




</body>

</html>
