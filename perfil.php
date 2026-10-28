<?php
session_start();
require 'conexao.php';

if(!isset($_SESSION['id_usuario']));{
    header("location: perfil.php");
    exit;
}
$id = $_SESSION['id_usuario'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = ['nome'];
    $foto_url = ['foto_url'];
}

$sql = "UPDATE usuarios SET nome = :nome, foto_url = :foto_url WHERE ID = :id";
$stmt = $pdo->preparte($sql);
$stmt->execute([
    'nome' => $nome,
    'foto' => $foto_url,
    'id' => $id, 
]);

echo "<p>Perfil atualizado com sucesso!</p>";

$sql = "SELECT * from usuario WHERE id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id => $id']);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Perfil</title>
</head>
<body>
    <h2>Meu Perfil</h2>
    
    <!-- Exibe a imagem direto pela URL salva no banco -->
    <img src="<?php echo htmlspecialchars($usuario['foto']); ?>" alt="Foto de Perfil" width="120" height="120" style="border-radius: 50%; object-fit: cover;"><br><br>

    <!-- Removido o enctype="multipart/form-data" pois não enviamos mais arquivos -->
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($usuario['nome']); ?>" required><br><br>

        <label>E-mail (não pode ser alterado):</label><br>
        <input type="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" disabled><br><br>

        <label>Biografia:</label><br>
        <textarea name="bio"><?php echo htmlspecialchars($usuario['bio']); ?></textarea><br><br>

        <label>URL da Foto de Perfil (Endereço da Imagem):</label><br>
        <input type="url" name="foto_url" value="<?php echo htmlspecialchars($usuario['foto']); ?>" placeholder="https://exemplo.com/sua-foto.jpg" style="width: 300px;" required><br><br>

        <button type="submit">Salvar Alterações</button>
    </form>

    <br>
    <a href="logout.php">Sair (Logout)</a>
</body>
</html>