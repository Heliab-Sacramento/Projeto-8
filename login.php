<?php include __DIR__ . '/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <link href="Bootstrap/CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

            <script src="Bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="card shadow p-4 card-body">
    <form class="d-flex flex-column  align-items-center" action="index.php" method="post">
        <img class="mb-4" height="57" width="72" src="img/logo.png">
        <pre>
            <label for="">E-mail</label>
            <input type="email" name="email" id="" class="form-control">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" class="form-control">

            <input type="submit" value="enviar" class="btn btn-success">    <input type="reset" value="Limpar" class="btn btn-outline-secondary">
        </pre>
    </form> 
    </div>
</body>
</html>