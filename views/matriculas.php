<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header('Location: login.php');
    exit;
  }

  require_once '../models/connection.php';
  require_once '../models/matricula_class.php';
  require_once '../models/matriculaDAO.php';

  $matDAO = new MatriculaDAO();

  $matriculas = $matDAO->getAllMat();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
</head>
<body>
    </div>
    <div class="icone-voltar" onclick="window.location.href='index.html'">
        <img class="logotipo" src="imagens/logo.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
    </div>
    <header>
        <h1>Academia</h1>
        <?php require_once 'nav.php';?>
    </header>
    <main>
    <section class="table_sql" id="usuarios">
        <h2>Matrículas</h2>
        <a href="#" class="new">Novo</a>
        <br><br>
        <div class="table_container">
            <table>
                <thead>
                    <tr>
                        <th>ID Matricula</th>
                        <th>Data de Inicio</th>
                        <th>Data Final</th>
                        <th>Aluno</th>
                        <th>Plano</th>
                        <th>Periodo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($matriculas as $mat): ?>
                        <tr>
                            <td><?= $mat->id_matricula ?></td>
                            <td><?= $mat->data_inicio ?></td>
                            <td><?= $mat->data_final ?></td>
                            <td><?= $mat->nome ?></td>
                            <td><?= $mat->descricao ?></td>
                            <td><?= $mat->periodicidade ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    </main>
</body>
</html>