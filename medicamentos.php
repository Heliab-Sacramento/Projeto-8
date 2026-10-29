<?php
require_once 'conexao.php';

$sql = "SELECT * FROM medicamento";
$resultado = $pdo->query($sql);
$medicamentos = $resultado->fetchAll(PDO::FETCH_ASSOC);
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

        <h2 class="text-center mb-4">Lista de Medicamentos</h2>

        <table class="table table-striped table-hover table-bordered align-middle">

            <thead class="table-success">
                <tr>
                    <th>Código</th>
                    <th>Medicamentos</th>
                    <th>Princípio Ativo</th>
                    <th>Dosagem</th>
                    <th>Tipo</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($medicamentos as $medicamento) { ?>

                    <tr>
                        <td>
                            <?php echo $medicamento['id_medicamento']; ?>
                        </td>

                        <td>
                            <?php echo $medicamento['nome']; ?>
                        </td>

                        <td>
                            <?php echo $medicamento['principio_ativo']; ?>
                        </td>
                        <td>
                            <?php echo $medicamento['dosagem']; ?>
                        </td>
                        <td>
                            <?php echo $medicamento['tipo']; ?>
                        </td>
                        <td>
                            <?php echo $medicamento['preco_venda']; ?>
                        </td>
                        <td>
                            <?php echo $medicamento['quantidade']; ?>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>