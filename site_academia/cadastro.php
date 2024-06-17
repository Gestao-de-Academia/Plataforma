<?php
    require_once '../models/aluno_class.php';
    require_once '../models/alunoDAO.php';
    if($_POST){
        if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['numero']) && isset($_POST['email'])){
            $aluno = new Aluno(nome:$_POST['nome'],email:$_POST['email'],cpf:$_POST['cpf']);

            $alunoDAO = new AlunoDAO();
            
            $alunoDAO->insert_aluno($aluno);
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
        <nav>
            <ul>
                <li><a href="treino.html">Treino</a></li>
                <li><a href="academia.html">Academia</a></li>
                <li><a href="musculacao.html">Musculação</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cadastro.html">cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h3  class="tauri-regular">Cadastro</h3>
            <form action="cadastro.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="cpf">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
                <br><br>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                <br><br>

                <label for="numero">Telefone:</label>
                <input type="text" id="numero" name="numero" required>
                <br><br>
                <div class="buttons-container">
                    <button type="submit">Criar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Site Academia</p>
    </footer>
</body>
</html>
