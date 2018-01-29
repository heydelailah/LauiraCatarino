<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="gdx";

//$username=$_GET["email"];

$data="24/09/2017";

try{
$conexao_banco=new PDO("mysql:host=localhost;dbname=gdx","root","");
}
catch(PDOException $e){
	echo $e->getMessage();
}


?>