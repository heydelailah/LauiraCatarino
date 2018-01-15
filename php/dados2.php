<?php
include("conexao.php");
//include("verificar.php");
if(isset($_POST['submit'])){
    $to = "konklaink@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>GoldxResidencial</title>
</head>
<style>@import url('../css/dados.css')</style>
<script src="../js/dados.js"></script>
<script src="../js/index.js"></script>
	<body><pre><img id="logo" src="..\img\Residencial_transp2.png"><?php		
echo "<strong>".$username."</strong>\n";
		echo "Bem vindo ao painel Residencial!\n";
		echo date('d/m/Y');?><br><input type=button id="exitbutton"value="exit" onclick="href=exit()">
<div id="galeria"></div><table>
<form action="email.php" method="post">
<fieldset><legend>Sua opinião</legend>
<label for ="opiniao"></label>
O que precisamos melhorar na página?
<textarea cols=60 id="opiniao" rows="10" name="feedback" id="feedback" maxlength="500" wrap="hard" placeholder="coragem, você consegue !">
</textarea><input id="inputfeedback" type="submit" value="enviar"></fieldset></form>
<h3>Informações Pessoais 					Gastos</h3>	
<tr>
<?php while($x=$con->fetch_array()){ ?>
<?php while($y=$con2->fetch_array()){ ?>
<td style="font-weight:900;">data:<select name="data" ><option value="data" onclick=""><?php echo "	".$x["data"]?></option></select><br><br>nome:<?php echo "		".$y["nome"]?><br>email:<?php echo "		".$y["email"]?><br>cargo:<?php echo "		".$y["cargo"]?><br>sexo:<?php echo "		".$y["sexo"]?><br>contrato:<?php echo "	".$y["contrato"]?><br>bloco/ap:<?php echo "	".$y["bloco"]."/".$y["ap"]?><br>telefone:<?php echo "	".$y["telefone"]?></td>
<td style="font-weight:900;">			água:<?php echo "		".$x["agua"]?><br>			luz:<?php echo "		".$x["luz"]?><br>			gás:<?php echo "		".$x["gas"]?><br>			cond:<?php echo "		".$x["cond"]?><br>			TaxaExtra<?php echo "	".$x["extra"]?><br>			Total:<?php echo "		".$x["gasto"]?><br></td>
<?php } ?>
<?php } ?>
</tr></tr></table><div id="footer"><footer id="footerdados">							
													Alexsander,Alexsey & Edcarlos
		<!--Alexsander,Alexsey & Edcarlos--> 												Rebouças  
												&copy; Copyright 2017 Vostrus sec & GoldxEnginharia</footer></div>
</body></pre>
</html>
