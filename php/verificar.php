<?php
include("conexao.php");

$host="localhost";
$user="root";
$pass="";
$db="gdx";
$username=$_GET["email"];
$password=$_GET["pass"];


$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;
$username=$_GET["email"];


$consulta="select * from morador where email='$username'";
$con=$mysqli->query($consulta) or die($mysqli->error);
while($x=$con->fetch_array()){
if($username==$x["email"] && $password==$x["pass"]){
  include("dados.php");
}
else{
echo"<script>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
}
}
?>