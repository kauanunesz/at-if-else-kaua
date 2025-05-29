<?php
$temp = $_POST['temperatura'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="home.html" style="margin-left: 20px;">Home</a>
        </nav>
        <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card resultado-card text-white bg-dark">
      <div class="card-header">Resultado</div>
      <div class="card-body">
        <?php
        echo "Temperatura: ". $temp;

        if ($temp < 0){
          echo '<div class="alert alert-danger">A temperatura está <strong>Congelante<strong></div>';
        }
        elseif ($temp >= 0 && $temp < 15)
        {
          echo '<div class="alert alert-success">Está <strong>Muito Frio<strong></div>';
        }
        elseif($temp >= 15 && $temp < 25)
        {
          echo '<div class="alert alert-success">A temperatura está <strong>Razoável<strong></div>';
        }
        elseif ($temp >= 25 && $temp < 40)
        {
          echo '<div class="alert alert-success">Está <strong>Calor<strong></div>';
        }
        elseif($temp >= 40)
        {
          echo '<div class="alert alert-danger">Você <strong>Morreu<strong></div>';
        }
        else{
          echo '<div class="alert alert-danger">Temperatura inválida. Tente novamente</div>';
        }


        ?>
        <a href="ex2_form.html"><button type="button" class="btn btn-light">Voltar</button></a>
      </div>
    </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>