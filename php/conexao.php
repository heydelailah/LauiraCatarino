<?php

$user = "root";
$password = "alxsy514";
$database = "gdx";
$hostname = "localhost"; 

$msqli=new mysqli($hostname,$user,$password,$database);
if($msqli->connect_ernno)
  echo "falha de conexao";
?>