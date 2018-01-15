<?php
define('SERVER', 'localhost');
define('BANCO','gdx'); 
define('SENHA','');
define('USER','root');
try{
$con = new PDO('mysql:host='.SERVER.';dbname='.BANCO,USER,SENHA);
}
catch(PDOexception $e1){
  
  echo "erro de conexão".$e1->getMessage();
}

//$query1 = "insert into morador(nome)values('lulu')";
//$query2 = "select * from morador";
//$stmt=$con->prepare($query1);
//  $stmt->execute();
$consulta="select * from morador";
$conn=$mysqli->query($consulta) or die($mysqli->error);


?>

