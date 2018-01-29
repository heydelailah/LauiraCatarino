<?php
include "ceo.php";
require_once "cond.php";
session_start();
if($_SESSION['email']=$_SESSION['email']){
$c1 = new cond();

	//session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>GoldxResidencial</title>
</head>
<style>@import url('../css/dados.css')</style>

	<link rel="stylesheet" type="text/css" href=".\css\index.css">
	<body><pre><img id="logo" src="..\img\Residencial_transp2.png">		
<div id="menu"><ul><li><a href="dados3.php">Inicial</a></li><br>
<li><a href="settings.php">administração</a></li><br>
<li><a href="../index.php">Sair</a></li>
</ul>
</div>
<!--<?php print $_SESSION['email'];?>--><h3 id="emailInicial"><?php	echo "\t\t\t<strong>CONDOMÍNIO ".$c1->getNome()." - ".$c1->getBairro().",CEP ".$c1->getCep()."</strong>\n";?><!--<?php	echo "você está logado com:<strong>$_SESSION[email]</strong>\n";?>--></h4><!--<?php echo "\tBem vindo ao painel Residencial!\n"; ?>--><br><!--<input type=button id="exitbutton"value="exit" onclick="href=exit()">-->
<div id="footer"><footer id="footerdados">
        	<div id="conf">
<form id="conf">
<script>
function nm(){
	var nome=document.getElementById("stb").placeholder;
alert(nome);
	}
</script>
<label>nome</label>
<input type="text"  style="background-color:transparent;" onmouseout="nm();"></input>
<label>email</label>
<input type="email" id="stb" placeholder="<?php echo $_SESSION['email']?>" style="background-color:transparent;"></input>
<label>senha</label>
<input type="password" style="background-color:transparent;"></input>
<label>telefone</label>
<input type="phone" style="background-color:transparent;"></input>
          </form>
  </div>
													<?php echo "$ceo_gdx, $ceo_vst";?> & Edcarlos
		<!--Alexsander,Alexsey & Edcarlos--> 												Rebouças  
												&copy; Copyright 2017 Vostrus sec & GoldxEnginharia</footer></div>
</body></pre>
</html>
<?php
}	
	else {
	//header("Location:index.php");	
	echo "<script>window.open('../index.php', '_self');</script>";
}
?>