<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="botoes.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<head>
  <title>Casa Eller</title>
  <meta charset="utf-8">
</head>

<body style="background-color:#ffffff; font:16px Bahnschrift Condensed" ;>

  <div class="w3-container" style="background-color:#ff5900; height:100px;">
  
  <div id="imgs">
  <a><img src="imagens/logov.jpg"></a>
  </div>

    <div id="menu">

      <h5>
        <ul>
          <li><a href="index.php" class="btn btn-white btn-animation-1">Sobre</a></li>
        </ul>
        <ul>
          <li><a href="equipe.html" class="btn btn-white btn-animation-1">Equipe</a></li>
        </ul>
        <ul>
          <li><a href="imoveis.html" class="btn btn-white btn-animation-1">Imoveis</a></li>
        </ul>
        <ul>
          <li>
            <a href="#" class="btn btn-white btn-animation-1">Serviços</a>
            <ul>
              <li><a href="registros.html">Registros</a></li>
              <li><a href="segutos.html">Seguros</a></li>
            </ul>
          </li>
        </ul>
      </h5>
    </div>
    <div id="submenu">
      <h5>
        <ul>
          <li><a href="contato.html" class="btn btn-white btn-animation-1">Contato</a></li>
        </ul>
      </h5>
    </div>
  </div>

  <div id="imag" class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <a href="http://casa1.html"><img src="imagens/casa1.jpg" alt="Brasil" style="width:100%;height:400px" ;></a>
        </div>

        <div class="item">
          <a href="http://casa2.html"><img src="imagens/casa2.jpg" alt="Brasil" style="width:100%;height:400px" ;></a>
        </div>

        <div class="item">
          <a href="http://casa3.html"><img src="imagens/casa3.jpg" alt="Brasil" style="width:100%;height:400px" ;></a>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div id="pesquisa">

    <div id="subpesquisa">

      <form action="/action_page.php">
        
      <h4>  
        <label>Pesquisar imóvel:</label>
        
      </h4>
        
      <div>

          <label for="fname">Tipo</label>
          <input type="text" id="fname" name="fname"><br><br>
          <input type="submit" value="Submit">
      
        </form>

    </div>

  </div>

  </div>

  <div id="recente">

  </div>
</body>

</html>