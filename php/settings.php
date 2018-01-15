<?php
session_start();
if($_SESSION['email']=$_SESSION['email']){

echo "<strong>$_SESSION[email]</strong>\n";
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
<div id="menu"><ul><li><a href="dados3.php">Inicial</a></li><li><a href="settings.php">Configurações</a></li><li><a href="../index.php">Sair</a></li></ul></div>

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
													Alexsander,Alexsey & Edcarlos
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