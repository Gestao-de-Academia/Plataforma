<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header('Location: login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Academia</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
    <style>
        * {box-sizing:border-box}

  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
  width: 100%;
  height: 100%;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 40px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black; /* Mudando a cor do texto para branco para garantir visibilidade */
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family: 'Times New Roman', Times, serif;
  background-image: linear-gradient(to bottom, blue,blue);
  border: 2px solid blue; 
}



/* Number text (1/3 etc) */
.numbertext {
 
  font-size: 16px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
</head>
<body>
    </div>
    <div class="icone-voltar" onclick="window.location.href='index.html'">
        <img class="logotipo" src="imagens/logo.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
    </div>
    <header>
        <h1>Academia</h1>
        <nav>
          <ul>
            <li><a href="cadastro.html">cadastro</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <a href="academia.html"><img src="imagens/academia1.png" style="width:1000px" height="700px"></a>
      <div class="text">Treino</div>
    </div>
  
   
  
      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <a href="musculacao.html"><img src="imagens/academia2.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Musculação</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <a href="academia.html"><img src="imagens/academia3.avif" style="width:1000px" height="700px"></a>
        <div class="text">Academia</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <a href="login.html"><img src="imagens/login.jpg" style="width:1000px" height="700px"></a>
        <div class="text">Login</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <a href="cadastro.html"><img src="imagens/cadastro.webp" style="width:1000px" height="700px"></a>
        <div class="text">Cadastro</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      
      
  </div>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
  <br>
    
  </div>
  <br>
    </main>
    <footer>
      <p>&copy; 2024 Site Academia</p>
  </footer>
    <script src="script.js"></script>
</body>
</html>