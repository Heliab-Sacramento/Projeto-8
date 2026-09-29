<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<Header></Header>

<nav>
    <div class="logoNav">
        <img src="logo.png" alt="logofarmacia" style="width: 100px; height: auto;">
    </div>
    
    <h1 style="text-align: center;">Farmácia Swag</h1>
      
    <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
    
        <a href="login.php" class="nav nav-tabs justify-content-end">
            <button class="nav-link bg-success" id="nav-home-tab" type="button">
                Login
            </button>
        </a>
    
        <a href="cadastro.php" class="nav nav-tabs justify-content-end">
            <button class="nav-link bg-success" id="nav-profile-tab" type="button">
                Cadastro
            </button>
        </a>
    
        <button class="nav-link active bg-success" id="nav-contact-tab" type="button">
            Área comercial
        </button>
    
        <a href="sobre.php" class="nav nav-tabs justify-content-end">
            <button class="nav-link bg-success" id="nav-sobre-tab" type="button">
                Sobre
            </button>
        </a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"></div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel"></div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel"></div>
    <div class="tab-pane fade" id="nav-disabled" role="tabpanel"></div>
</div>

<body>

<div class="p-1 bg-success-subtle text-success-emphasis">
    <h1>Sistema de Farmácia</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <section>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Adicionar</button>
        </form>

        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                <!-- Losartana -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Losartana Potássica
                            </h2>

                            <img src="Losartana.jpg" class="img-fluid rounded Losartana.jpg" alt="Caixa do medicamento Losartana Potássica">

                            <a href="detalhes.php?id=1" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dipirona -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Dipirona Sódica
                            </h2>

                            <img src="dipirona.jpg" class="img-fluid rounded Dipirona" alt="Caixa do medicamento Dipirona Sódica">

                            <a href="detalhes.php?id=2" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ibuprofeno -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Ibuprofeno
                            </h2>

                            <img src="Ibuprofeno.jpg" class="img-fluid rounded Ibuprofeno" alt="Caixa do medicamento Ibuprofeno">

                            <a href="detalhes.php?id=3" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sinvastatina -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Sinvastatina
                            </h2>

                            <img src="sinvastatina.jpg" class="img-fluid rounded sinvastatina" alt="Caixa do medicamento Sinvastatina">

                            <a href="detalhes.php?id=4" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Omeprazol -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Omeprazol
                            </h2>

                            <img src="omeprazol.jpg" class="img-fluid rounded omeprazol" alt="Caixa do medicamento Omeprazol">

                            <a href="detalhes.php?id=5" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Amoxicilina -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Amoxicilina
                            </h2>

                            <img src="amoxicilina.jpg" class="img-fluid rounded amoxicilina" alt="Caixa do medicamento Amoxicilina">

                            <a href="detalhes.php?id=6" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Paracetamol -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Paracetamol
                            </h2>

                            <img src="paracetamol.jpg" class="img-fluid rounded paracetamol" alt="Caixa do medicamento Paracetamol">

                            <a href="detalhes.php?id=7" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Azitromicina -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Azitromicina
                            </h2>

                            <img src="azitromicina.jpg" class="img-fluid rounded azitromicina" alt="Caixa do medicamento Azitromicina">

                            <a href="detalhes.php?id=8" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tadalafila -->
                <div class="col">
                    <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
                        <div class="card-body">
                            <h2 class="card-title h5 text-primary mb-3">
                                Tadalafila
                            </h2>

                            <img src="tadalafila.jpg" class="img-fluid rounded tadalafila" alt="Caixa do medicamento Tadalafila">

                            <a href="detalhes.php?id=9" class="btn btn-success mt-3">
                                Mais detalhes
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

</div>

</body>
</html>
