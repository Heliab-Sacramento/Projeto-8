<?php
require"conexao.php";

$nomeusuario = $_POST['Nome do Usuário'];
$emailusuario = $_POST['email do usuario'];
$senhausuario = $_POST['senha do usuario'];
$tipodeusuario = $_POST['tipo de usuario'];

$sql= "INSERT INTO usuario (nome, email, senha, tipo_usuario) values ('$nomeusuario', '$emailusuario', '$senhausuario', '$tipodeusuario'";

$conexao ->query($sql);