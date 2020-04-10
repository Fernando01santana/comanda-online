<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   <style>
          body{
       background-color:#DCDCDC;
     }
    form{
        padding:1em;
        margin-top:20%;
        background-color:white;
    }
    .bebidas{
        margin-top:1em;
    }

   </style>

  </head>
  <body>
      
<div class="container">
    <form action="gerapdf.php" method="POST">
    <div class="row">
      <div class="col-6">
        <select name="pizza" class="custom-select">
          <option value="----">Pizza</option>
          <option value="calabresa-P">calabresa-P</option>
          <option value="calabresa-M">calabresa-M</option>
          <option value="calabresa-G">calabresa-G</option>
          <option value="mussarela-P">mussarela-P</option>
          <option value="mussarela-M">mussarela-M</option>
          <option value="mussarela-G">mussarela-G</option>
          <option value="catupiri-P">catupiri-P</option>
          <option value="catupiri-M">catupiri-M</option>
          <option value="catupiri-G">catupiri-G</option>
         
        </select>
      </div>
      <div class="col-6">
        <select name="quantidade"class="custom-select" >
          <option value="">quantidade</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="8">9</option>
          <option value="10">10</option>
        </select>
    </div>
    </div>

    <div class="row bebidas">
      <div class="col-6">
        <select class="custom-select" name="marca">
          <option value="Coca cola">Coca cola</option>
          <option value="Guarana">Guarana</option>
          <option value="Fanta">Fanta</option>
          <option value="Sprite">Sprite</option>
          <option value="Cajuina">Cajuina</option>         
        </select>
      </div>

      <div class="col-6">
        <select class="custom-select" name="tamanho">
          <option value="">tamanho</option>
          <option value="1L">1L</option>
          <option value="2L">2L</option>
          <option value="900ML">900ML</option>
          <option value="600ML">600ML</option>
          <option value="500ML">500ML</option>
          <option value="300ML">300ML</option>
          <option value="250ML">250ML</option>
          <option value="150ML">150ML</option>
        </select>
    </div>
    </div>
    <div class="row bebidas">
        <div class="col-12">
        <input type="submit" class="btn btn-dark  btn-block"value="enviar">
        </div>
    </div>
    </form>
</div>
   
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>