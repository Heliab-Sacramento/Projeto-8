<?php
require_once 'conexao.php';

$sql = "SELECT * FROM usuario";
$resultado = $pdo->query($sql);
$usuario = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Bootstrap/CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="container mt-5">

        <h2 class="text-center mb-4">Lista de Usuários</h2>

        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-success">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Tipo de usuário</th>
                    <th>Data de nascimento</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($usuario as $usuario) { ?>

                    <tr>
                        <td>
                            <?php echo $usuario['id_usuario']; ?>
                        </td>

                        <td>
                            <?php echo $usuario['nome']; ?>
                        </td>

                        <td>
                            <?php echo $usuario['email']; ?>
                        </td>
                        <td>
                            <?php echo $usuario['status']; ?>
                        </td>
                        <td>
                            <?php echo $usuario['tipo_usuario']; ?>
                        </td>
                        <td>
                            <?php echo $usuario['data_nascimento']; ?>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>