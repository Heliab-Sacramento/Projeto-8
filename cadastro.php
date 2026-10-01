<?php include __DIR__ . '/header.php'; ?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <form class="d-flex flex-column  align-items-center" action="index.php" method="post">
        <img class="mb-4" height="57" width="72" src="img/logo.png">
        <pre>
            <label for="">Nome</label>
            <input type="name" name="nome" id="" class="form-control">
            <label for="">Data de nascimento</label>
            <input type="date" name="data de nascimento" id="" class="form-control">
            <label for="">E-mail</label>
            <input type="email" name="email" id="" class="form-control">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" class="form-control">

            <input type="submit" value="Cadastrar-se" class="btn btn-success">    <input type="reset" value="Limpar" class="btn btn-outline-secondary">
        </pre>


    </form>
</body>
</html>