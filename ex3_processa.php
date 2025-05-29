<?php
$peso = $_POST['peso'] ?? null;
$altura = $_POST['altura'] ?? null;

if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
    $imc = $peso / ($altura * $altura);
    if($imc < 0)
    {
      $imc = null;
    }
} else {
    $imc = null;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="home.html" style="margin-left: 20px;">Home</a>
        </nav>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card resultado-card text-white bg-dark">
      <div class="card-header">Resultado: <?php 
      echo number_format($imc, 2);
      ?> </div>
      <div class="card-body">
        <?php

        if($imc < 0)
        {
          '<div class="alert alert-danger"><strong>Dados Inválidos. insira-os novamente</strong></div>';
        }

        elseif ($imc < 10)
        {
          echo '<div class="alert alert-danger">Você está <strong>Classe Seu Madruga</strong></div>';
        }
        elseif ($imc >= 10 && $imc < 18.5)
        {
          echo '<div class="alert alert-danger">Você está <strong>Abaixo do Peso</strong></div>';
        }

        elseif($imc >= 18.5 && $imc <= 24.9)
        {
          echo '<div class="alert alert-success">Você está com peso <strong>Normal</strong></div>';
        }

        elseif($imc > 24.9 && $imc <= 29.9)
        {
          echo '<div class="alert alert-danger">Você está com   <strong>Excesso de Peso</strong></div>';
        }

        elseif($imc > 29.9 && $imc <= 34.9)
        {
          echo '<div class="alert alert-danger">Você está com <strong>Obesidade Classe I</strong></div>';
        }
        elseif($imc > 34.9 && $imc <= 39.9)
        {
          echo '<div class="alert alert-danger">Você está com <strong>Obesidade Classe II</strong></div>';
        }
        elseif($imc > 39.9 && $imc <= 49.9)
        {
          echo '<div class="alert alert-danger">Você está com <strong>Obesidade Classe III</strong></div>';
        }
        elseif($imc > 49.9)
        {
          echo '<div class="alert alert-danger">Você está <strong>Classe Planeta</strong></div>';
        }
        else
        {
          '<div class="alert alert-danger"><strong>Dados Inválidos. insira-os novamente</strong></div>';
        }
        ?>
      <a href="ex3_form.html"><button type="button" class="btn btn-light">Voltar</button></a>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>