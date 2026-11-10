<?php
class Dao{
private $pdo;
public function _construct(){
try{
$dsn = "mysql:host=192.168.8.7;dbname=projeto2b8";
$username = "projeto2b8";
$password = "projeto2b8";
$this->pdo=new PDO($dsn,$username,$password);
}
catch(PDOException $erro){
}
catch(Exception $erro){
    echo $erro->get_message();
    echo"<br>erro ao acessar <br> entre em contato com o administarador<br>";
    exit;
}
}
public function autenticar($nome, $data_nascimento, $email, $senha){
    $sql="select * from usuario where nome ='".$nome." and data_nascimento=".$data_nascimento." and email=".$email." and senha=".$senha."'";
    $stmt = $this -> pdo -> query($sql);
    $linha = $stmt->fetch();
    return $linha;
}
public function listarUsuarios(){
    $stmt = $this -> pdo -> prepare("select * from login");
    $stmt->execute();
    $usuario=$stmt->fetchAll();
    return $usuario;
}
PUBLIC FUNCTION removerUsuario ($id){
    $stmt = $this->pdo->prepare ("delete from login where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
public function cadastrarUsuario ($nome, $data_nascimento, $email, $senha){
try{
$stmt = $this->pdo->prepare("insert into usuario (nome, data_nascimento, email, senha) values(':nome', ':data_nascimento', ':email' , ':senha')");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':data_nascimento', $data_nascimento);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();
}catch(PDOException $e){
    echo ''. $e->getMessage();  
}

}
}