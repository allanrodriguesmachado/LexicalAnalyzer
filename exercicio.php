<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_.css">
    <link rel="shortcut icon" href="assets/img/artificial-intelligence.png">
    <title>PHP</title>
</head>
<body class="exercicio">
<header class="cabecalho">
    <h1>Exercicios</h1>
    <h2>Visualização do exercício</h2>
</header>

<nav class="navegacao">
    <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem Formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>

<main class="principal">
    <div class="conteudo">
        <?php include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); ?>
    </div>
</main>

<footer class="rodape">
    Allan Rodrigues © <?php echo date("Y") ?>
</footer>
</body>
</html>