<?php include __DIR__ . '/header.php';
session_start();
require_once __DIR__ . '/conexao.php';

$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {

        if ($usuario['status'] == 1) {

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];

            header('Location: menu.php');
            exit;

        } else {
            $erro = "Usuário inativo!";
        }

    } else {
        $erro = "E-mail ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="Bootstrap/CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="Bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="card-body p-4">
                    <div class="card shadow rounded-3 border-0 w-100">

                        <div class="card shadow p-4 card-body">
                            <form class="d-flex flex-column  align-items-center" action="login.php" method="post">
                                <?php
                                if ($erro != "") {
                                    echo "<div class='alert alert-danger text-center'>";
                                    echo $erro;
                                    echo "</div>";
                                }
                                ?>
                                <img class="mb-4" height="57" width="72" src="img/logo.png">
                                <pre>
            <label for="">E-mail</label>
            <input type="email" name="email" id="" class="form-control">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" class="form-control">

            <input type="submit" value="Enviar" class="btn btn-success">    <input type="reset" value="Limpar" class="btn btn-outline-secondary">
        </pre>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>