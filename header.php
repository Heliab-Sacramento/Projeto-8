<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Swag</title>
    <!-- CSS do Bootstrap -->
    <script src="Bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <nav class="p-3 bg-light shadow-sm">
        <div class="logoNav">
            <A HREF="index.php">
            <img src="img/logo.png" alt="logofarmacia" style="width: 100px; height: auto;">
             </A>
        </div>
        
        <h1 style="text-align: center;">Farmácia Swag</h1>
          
        <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
        
            <a href="login.php" class="text-decoration-none me-1">
                <button class="nav-link text-white bg-success" id="nav-home-tab" type="button">
                    Login
                </button>
            </a>
        
            <a href="cadastro.php" class="text-decoration-none me-1">
                <button class="nav-link text-white bg-success" id="nav-profile-tab" type="button">
                    Cadastro
                </button>
            </a>
        
            <button class="nav-link active bg-success text-white me-1" id="nav-contact-tab" type="button">
                Área comercial
            </button>
        
            <a href="sobre.php" class="text-decoration-none">
                <button class="nav-link text-white bg-success" id="nav-sobre-tab" type="button">
                    Sobre
                </button>
            </a>
        </div>

               <form class="d-flex" role="search">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Menu
                </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>

            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        </div>
        
    </nav>
</header>
