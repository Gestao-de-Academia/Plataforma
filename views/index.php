<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header('Location: login.php');
    exit;
  }

  require_once '../models/connection.php';
  require_once '../models/pessoa_class.php';
  require_once '../models/admin_class.php';
  require_once '../models/adminDAO.php';

  $userDAO = new UserDAO();

  $users = $userDAO->getAllUsers();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Academia</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
</head>
<body>
    </div>
    <div class="icone-voltar">
        <img class="logotipo" src="imagens/logo.png" alt="Voltar para o Início" width="80px">
    </div>
    <header>
        <h1>Academia</h1>
        <?php require_once 'nav.php';?>
    </header>
   
    <footer>
      <p>&copy; 2024 Site Academia</p>
  </footer>
    <script src="script.js"></script>
</body>
</html>