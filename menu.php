<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link href="Bootstrap/CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <nav>
        <nav class="navbar bg-white shadow-sm p-3">
            <div class="container-fluid">

                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">

                    <span class="navbar-toggler-icon"></span>
                </button>


                <div><a href="index.php"><img src="img/logo.png" style="width: 100px; alt="></a></div>

            </div>
        </nav>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="menuLateral" aria-labelledby="tituloMenu">

            <div class="offcanvas-header bg-success text-white">

                <h5 class="offcanvas-title" id="tituloMenu">
                    Farmácia SWAG
                </h5>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fechar">
                </button>

            </div>

            <div class="offcanvas-body p-0">

                <div class="list-group list-group-flush">

                    <a href="index.php" class="list-group-item list-group-item-action border-0 rounded mb-2">
                        Início
                    </a>

                    <a href="medicamentos.php" class="list-group-item list-group-item-action" border-0 rounded mb-2>
                        Medicamentos
                    </a>

                    <a href="fornecedores.php" class="list-group-item list-group-item-action border-0 rounded mb-2">
                        Fornecedores
                    </a>

                    <a href="compras.php" class="list-group-item list-group-item-action border-0 rounded mb-2">
                        Compras
                    </a>

                    <a href="vendas.php" class="list-group-item list-group-item-action border-0 rounded mb-2">
                        Vendas
                    </a>

                    <a href="usuarios.php" class="list-group-item list-group-item-action border-0 rounded mb-2">
                        Usuários
                    </a>

                </div>

            </div>

        </div>
    </nav>
    <script src="Bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>