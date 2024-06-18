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

    if($_POST){
        if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email']) && isset($_POST['username'])){
            
            $user = new User(0,$_POST['nome'], $_POST['username'], $_POST['email'], md5($_POST['senha']));

            $userDAO = new UserDAO();
            
            $insert = $userDAO->insert_user($user);

            if($insert){
                header('Location: users.php');
                exit;
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
    <style>
        h1 {
            margin: 0;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section {
            background: linear-gradient(to bottom, white,blue);
            color: white; /* Definindo a cor do texto como branco para contrastar */
            padding: 18px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input{
            width: 100%;
            padding: 5px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        button {
            width: calc(50% - 5px);
            padding: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    </style>

</head>
<body>
    <div class="icone-voltar" onclick="window.location.href='index.html'">
        <img class="logotipo" src="imagens/logo.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
    </div>
    <header>
        <h1>Cadastro</h1>
        <?php require_once 'nav.php';?>
    </header>
    <main>
        <section>
            <h3  class="tauri-regular">Cadastro</h3>
            <form action="cadastro_user.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <br>
                <div class="buttons-container">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Resetar">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Site Academia</p>
    </footer>
</body>
</html>
