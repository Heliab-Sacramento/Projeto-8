<?php require_once 'Dao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];
$dao = new Dao();
$dao->cadastrarUsuario($nome, $data_nascimento, $email, $senha);
