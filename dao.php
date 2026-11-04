class Dao{
private $pdo;
public function_construct(){
try{
$dsn = "mysql:host=192.168.8.7;dbname=projeto2b8";
$username = "projeto2b8";
$password = "projeto2b8";
$this -> pdo =new PDO($dsn,$username,$password);
}
catch(PDO)
}
}