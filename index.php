

<?php

session_start();
session_destroy();
//include("php/conexao.php");
$host="localhost";
$user="root";
$pass="alxsy514";
$db="gdx";
$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;
$nome;
function opt($t){
$nome=$t;
	echo $nome;

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="UTF-8">
	<title>GoldxResidencial</title>
</head>
<link rel="stylesheet" type="text/css" href=".\css\index.css">
<script src="js/index.js"></script>


<body onload="res();">
	<!--
<?php
$ceo="<strong>Alexsander rebouças";
$partiner=" Alexsey rebouças";
echo "$ceo <br &emsp; &emsp;  &emsp; &emsp;<br>$partiner\n";
?>
-->
<img id="logo" src="https://scproduction.s3.amazonaws.com/wysiwyg_uploads/cms/images/2016/07/19/11/slide52-83lookzn.png"><div id="text"><strong>Gerenciamento Condominial,a forma inteligente de prover confortoe segurança!

gerenciando o prédio de seu condomínio com atividades mensais.</div>
<?php echo "<br>"; ?>
	

<form name="form1" id="dados" method="get" action="./php/login.php" target="_self">
							Login <input type="text" name="email" id="email" style="background-color:transparent;" value=""  </inpu> Senha <input type="password" name="pass" id="pass" style="background-color:transparent; "> <input type=submit class="rst" name="rst" value="acessar" style="color:black">
	</form>
<pre>
<div id="foot">
<footer id="footer" style="font-size:11px;font-weight: bold;">
 Alexsander,Alexsei & Edcarlos 
     Rebouças  
&copy; Copyright 2017 Vostrus sec & GoldxEnginharia</footer></div>
</body></pre>
</html>