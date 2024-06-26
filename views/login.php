<?php
    session_start();
    require_once '../models/connection.php';
    require_once '../models/pessoa_class.php';
    require_once '../models/admin_class.php';
    require_once '../models/adminDAO.php';

    if($_POST){
        $erro=false;
        if(empty($_POST['username']) || empty($_POST['senha'])){
            $erro=true;
        }

        if($erro === false){
            $user = new User(id_user:0,nome:'',username: $_POST['username'], email:'', senha: md5($_POST['senha']));

            $userDAO = new UserDAO();

            $login = $userDAO->verify_user($user);

            if(count($login) == 1){
                $_SESSION['id_user'] = $login[0]->id_usuario;
                $_SESSION['nome'] = $login[0]->nome;
                $_SESSION['username'] = $login[0]->username;

                header('Location: index.php');
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
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
    <link rel="stylesheet" href="styles.css">
    <style>
       
        h1 {
            margin: 0;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 150px); /* Ajuste conforme necessário para não sobrepor o footer */
        }
        section {
    background: linear-gradient(to bottom, white,blue);
    color: white; /* Definindo a cor do texto como branco para contrastar */
    padding: 18px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

        input[type="text"],
        input[type="password"] {
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
        a,button {
            width: calc(50% - 5px);
            padding: 10px;
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
        <h1>Login</h1>
    </header>
    <main>
        <section>
            <h3  class="tauri-regular">Login</h3>
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required> 
                <br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required> 
                <br><br>
                <div class="button-container">
                    <input type="submit" value="Entrar">
                    <!-- <button type="button">Criar conta</button> -->
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Site Academia</p>
    </footer>
</body>
</html>
