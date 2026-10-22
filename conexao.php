<?php
$dsn = "mysql:host=192.168.8.7;dbname=projeto2b8";
$username = "projeto2b8";
$password = "projeto2b8";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM usuario");
while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $usuario['tipo_usuario'] . "<br>";
}
?>