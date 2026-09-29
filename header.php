<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Swag</title>
    <!-- CSS do Bootstrap -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body>

<header>
    <nav class="p-3 bg-light shadow-sm">
        <div class="logoNav">
            <img src="logo.png" alt="logofarmacia" style="width: 100px; height: auto;">
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
    </nav>
</header>
