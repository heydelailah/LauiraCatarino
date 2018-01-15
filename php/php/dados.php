<?php
include("conexao.php");
function faturando($user){
$cons2="select * from fatura where email='$user'";
	echo $cons2;
}
ini_set('default_charset','UTF-8');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
<!--<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GoldxResidencial</title>
</head>
<style>@import url('../css/dados.css')</style>
<script src="../js/dados.js"></script>
<script src="../js/index.js"></script>
	<body><pre><img id="logo" src="..\img\Residencial_transp2.png">		
<div id="menu"><ul><li><a href="dados.php">Inicial</a></li><br><li><a href="settings.php">Configuração</a></li><br><li><a href="../index.php">Sair</a></li></ul></div>
<?php print $_SESSION['email'];?><h4 id="emailInicial"><?php	echo "<strong>Seja Bem-vindo(a) ao seu recibo digital</strong>\n";?><!--<?php	echo "você está logado com:<strong>$_SESSION[email]</strong>\n";?>--></h4><!--<?php echo "\tBem vindo ao painel Residencial!\n"; ?>--><br><!--<input type=button id="exitbutton"value="exit" onclick="href=exit()">-->
<div id="galeria"></div><table>
<form action="email.php" method="post"><fieldset><legend>Sua opinião</legend>
<label for ="opiniao"></label>
O que precisamos melhorar na página?
<textarea cols=60 rows="10" name="feedback" id="feedback" maxlength="500" wrap="hard" placeholder="coragem, você consegue !">
</textarea><input id="inputfeedback" type="submit" value="enviar"></fieldset></form>
<h3>Informações Pessoais 					Gastos</h3>	

<?php while($y=$con2->fetch_array()){ ?>
<td style="font-weight:900;">data:<select name="datinha" id="datinha" onchange="wind()"><?php while($z=$con3->fetch_array()){ ?><option id='escolha' name='escolha'><?php echo "	".$z["data"]?></option><?php } ?></select><br>
nome:<?php echo "		".$y["nome"]?><br>email:<?php echo "		".$y["email"]?><br>cargo:<?php echo "		".$y["cargo"]?><br>sexo:<?php echo "		".$y["sexo"]?><br>contrato:<?php echo "	".$y["contrato"]?><br>bloco/ap:<?php echo "	".$y["bloco"]."/".$y["ap"]?><br>telefone:<?php echo "	".$y["telefone"]?></td>
<?php } ?><?php while($x=$con->fetch_array()){ ?>
<td id="<?php e?>">
<td style="font-weight:900;"><br>			água:<?php echo "		".number_format($x["agua"], 2, ',', '.')?><br>			luz:<?php echo "		".number_format($x["luz"], 2, ',', '.')?><br>			gás:<?php echo "		".number_format($x["gas"], 2, ',', '.')?><br>			cond:<?php echo "		".number_format($x["cond"], 2, ',', '.')?><br>			TaxaExtra:<?php echo "	".number_format($x["extra"], 2, ',', '.')?><br>			Total:<?php echo "		".number_format($x["gasto"], 2, ',', '.')?><br>			status:<?php echo "		".$x["status"]?></td>
<?php }?>
</td>
</tr></table><div id="footer"><footer id="footerdados">							
													Alexsander,Alexsey & Edcarlos
		<!--Alexsander,Alexsey & Edcarlos--> 												Rebouças  
												&copy; Copyright 2017 Vostrus sec & GoldxEnginharia</footer></div>
</body></pre>
</html>
