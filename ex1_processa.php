<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .resultado-card {
      width: 400px;
      min-height: 200px;
      max-height: 400px;
      overflow-y: auto;
    }
  </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="home.html" style="margin-left: 20px;">Home</a>
        </nav>
  <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card resultado-card text-white bg-dark">
      <div class="card-header">Resultado</div>
      <div class="card-body">
        <?php
        $nome = $_POST['nomeAluno'] ?? null;
        $nota1 = $_POST['nota1'] ?? null;
        $nota2 = $_POST['nota2'] ?? null;
        $nota3 = $_POST['nota3'] ?? null;

        function validarNotas($n1, $n2, $n3) {
            return is_numeric($n1) && is_numeric($n2) && is_numeric($n3);
        }

        if (!validarNotas($nota1, $nota2, $nota3)) {
            echo '<div class="alert alert-danger">Por favor, insira apenas números válidos para as três notas.</div>';
        } else {
            $media = ($nota1 + $nota2 + $nota3) / 3;
            if ($media >= 7 && $media <= 10) {
                echo '<div class="alert alert-success">Aluno ' . $nome . ' aprovado com média ' . number_format($media, 2, ',', '.') . '</div>';
            } elseif ($media < 7 && $media >=0) {
              echo '<div class="alert alert-success">Aluno ' . $nome . ' reprovado com média ' . number_format($media, 2, ',', '.') . '</div>';
            } else{
              echo '<div class="alert alert-success">Algum valor foi inválido. Por favor, tente novamente</div>';
            }

        }
        ?>
        <a href="ex1_form.html"><button type="button" class="btn btn-light">Voltar</button></a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
