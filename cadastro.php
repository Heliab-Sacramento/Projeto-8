<?php include 'header.php';
require_once 'Dao.php';

session_start();


$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nasimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$stmt = $pdo->prepare("INSERT INTO usuario (nome, data_nasc, email, senha) VALUES (:nome, :data_nascimento, :email, :senha)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':data_nascimento', $data_nascimento);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

echo "usuario cadastrado com sucesso:".$nome;


if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: index.php');
    exit;
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
                            <form class="d-flex flex-column  align-items-center" action="cadastro.php" method="post">
                                <img class="mb-4" height="57" width="72" src="img/logo.png">
                                <pre>
            <label for="">Nome</label>
            <input type="name" name="nome" id="name" class="form-control">
            <label for="">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
            <label for="">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
            
            <input type="submit" value="Cadastrar-se" class="btn btn-success">    <input type="reset" value="Limpar" class="btn btn-outline-secondary">
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