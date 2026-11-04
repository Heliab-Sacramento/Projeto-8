<?php
require_once 'conexao.php';

$sql = "SELECT * FROM fornecedor";
$resultado = $pdo->query($sql);
$fornecedor = $resultado->fetchAll(PDO::FETCH_ASSOC);
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

        <h2 class="text-center mb-4">Lista de Fornecedores</h2>

        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-success">
                <tr>
                    <th>Código</th>
                    <th>Fornecedor</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($fornecedor as $fornecedor) { ?>

                    <tr>
                        <td>
                            <?php echo $fornecedor['id_fornecedor']; ?>
                        </td>

                        <td>
                            <?php echo $fornecedor['nome']; ?>
                        </td>

                        <td>
                            <?php echo $fornecedor['cnpj']; ?>
                        </td>
                        <td>
                            <?php echo $fornecedor['telefone']; ?>
                        </td>
                        <td>
                            <?php echo $fornecedor['email']; ?>
                        </td>
                        <td>
                            <?php echo $fornecedor['endereco']; ?>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>