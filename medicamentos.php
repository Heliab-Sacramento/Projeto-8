<?php
require_once 'conexao.php';
 
$sql = "SELECT * FROM medicamentos";
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
    <div class="container">
        <thead class="table-dark">
            <tr>
            <th>Medicamentos</th>
            </tr>



        </thead>
    </div>
    
</body>
</html>