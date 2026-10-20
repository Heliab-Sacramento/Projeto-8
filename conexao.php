<?php
$dsn = "mysql:host=localhost;dbname=Farmacia";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM medicamento");
while ($medicamento = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $medicamento['nome']. "<br>";
}
?>