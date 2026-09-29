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
    <form action="index.php" method="post">
        <pre>
            <label for="">Nome</label>
            <input type="name" name="nome" id="">
            <label for="">Data de nascimento</label>
            <input type="date" name="data de nascimento" id="">
            <label for="">E-mail</label>
            <input type="email" name="email" id="">
            <label for="">Senha</label>
            <input type="password" name="senha" id="">

            <input type="submit" value="Cadastrar-se">    <input type="reset" value="limpar">
        </pre>


    </form>
</body>
</html>