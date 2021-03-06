<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
    <style>
      body{
        background: url('front/fundo.png');
      }
      .formulario{
        border-radius: 5px;;
        margin-top:22%;
        padding:1em;
        background-color: white;
        color:black;
      }
      select{
        margin-top:0.53em;
      }
      h4{
        text-align: center;
      }
      .elemento{
        margin-top:1em;
      }
      
      
    </style>
  </head>
  <body>
    <div class="container" >
      <div class="row justify-content-center ">
        <div class=" col-sm-6 col-12 fundo">
        <form action="gerapdf.php" class="formulario shadow" method="GET">
          <h4>comanda - online</h4>
          <div class="row justify-content-center">
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
          <select name="quantidade_pizza"class="custom-select" >
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
         <div class="row">
           <div class="col">
            <input type="text" name="sabor" class="form-control elemento" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sabores">
           </div>
         </div>
         
          <div class="row justify-content-center">
            <div class="col-4">
              <select class="custom-select" name="marca">
                <option value="Coca cola">Coca cola</option>
                <option value="Guarana">Guarana</option>
                <option value="Fanta">Fanta</option>
                <option value="Sprite">Sprite</option>
                <option value="Cajuina">Cajuina</option>         
              </select>
            </div>
            <div class="col-4">
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
            <div class="col-4">
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

          <div class="row"> 
          <div class="col ">
            <select name="mesa"class="custom-select" >
              <option value="">mesa</option>
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
          <input type="submit" class="btn btn-dark btn-block elemento"  value="enviar">
          
        </form>
      </div>
      </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>