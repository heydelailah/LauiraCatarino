<?php
session_start();
if($_SESSION['email']=$_SESSION['email']){
include "conexao.php";
	//$host="localhost";
//$user="root";
//$pass="";
//$db="gdx";
//	include('conexao3.php');
//$username=$_GET["email"];

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;

/*$consulta2="select * from morador where email='$_SESSION[email]'";
$consulta3="select data from fatura where email='$_SESSION[email]' order by id desc";
$consulta4="select data from fatura where email='$_SESSION[email]'";


$con=$mysqli->query($consulta) or die($mysqli->error);
$con2=$mysqli->query($consulta2) or die($mysqli->error);
$con3=$mysqli->query($consulta3) or die($mysqli->error);
ini_set('default_charset','UTF-8');
*/





$connect = mysqli_connect("localhost", "root", "", "gdx");  
 
	
	
	function ImprimindoData($connect)  
 {  
  	  $output = '';  
      $sql = "SELECT * FROM fatura where email='$_SESSION[email]' order by id desc";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
				 $output .= '<option value="'.$row["data"].'">'.$row["data"].'</option>'; 
			}  
      return $output;  
 }  


	function Iniciando($connect){
		$output = '';  
      $sql = "SELECT * FROM fatura where email='$_SESSION[email]' order by id desc limit 1";  
      $sql2 = "SELECT * FROM morador where email='$_SESSION[email]'";  
      $result = mysqli_query($connect, $sql);  
	    $result2 = mysqli_query($connect, $sql2);  
		
	
		while($row2 = mysqli_fetch_array($result2)) {
			echo "<div id='td1' style='font-weight: bold;font-size:14px;'><p>";
        echo "Nome:".$row2["nome"]."\n";
        echo "Email:".$row2["email"]."\n";
        echo "Cargo:".$row2["cargo"]."\n";
        echo "Contrato:".$row2["contrato"]."\n";
        echo "Sexo:".$row2["sexo"]."\n";
        echo "Telefone:".$row2["telefone"];
        
        echo "</div>";  
			
		}
		 }	
	
	
	
	

	function Iniciando2($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM fatura where email='$_SESSION[email]' and data='15/10/2017'";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
   
      }  
      return $output;  
 }  
	
	
	
	
	
	

 function Imprimindo($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM fatura";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
   
      }  
      return $output;  
 }  
	
	

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
	<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.min.js"></script>
	
	<body><pre><img id="logo" src="..\img\Residencial_transp2.png">		
<div id="menu"><ul><li><a href="dados3.php">Inicial</a></li><br><li><a href="settings.php">administração</a></li><br><li><a href="../index.php">Sair</a></li></ul></div>
<?php print $_SESSION['email'];?><h4 id="emailInicial"><?php	echo "<strong>Seja Bem-vindo(a) ao seu painel Condomínial</strong>\n";?><!--<?php	echo "você está logado com:<strong>$_SESSION[email]</strong>\n";?>--></h4><!--<?php echo "\tBem vindo ao painel Residencial!\n"; ?>--><br><!--<input type=button id="exitbutton"value="exit" onclick="href=exit()">-->
<div id="galeria"></div><table>
<form action="email.php" method="post"><fieldset><legend>Sua opinião</legend>
<label for ="opiniao"></label>
O que precisamos melhorar na página?
<textarea cols=60 rows="10" name="feedback" id="feedback" maxlength="500" wrap="hard" placeholder="coragem, você consegue !">
</textarea><input id="inputfeedback" type="submit" value="enviar"></fieldset></form>
<h3>Informações do Prédio 					Gastos</h3>
<select name="datinha" id="datinha" onchange="">Data<option value="Atual">Data</option> <?php echo ImprimindoData($connect); ?> </select>
<?php Iniciando($connect);?>
                     <div class="row" id="info"><!--<?php echo  Iniciando($connect);?> --><?php echo Imprimindo($connect);?></div>  
</table><div id="footer"><footer id="footerdados">							
													Alexsander,Alexsey & Edcarlos
		<!--Alexsander,Alexsey & Edcarlos--> 												Rebouças  
												&copy; Copyright 2017 Vostrus sec & GoldxEnginharia</footer></div>
</body></pre>
</body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#datinha').change(function(){  
           var dt = $(this).val();  
           $.ajax({  
                url:"carregando.php",  
                method:"POST",                                                            //       <---------  
                data:{dt:dt},                                                             //           script ajax
                success:function(data){  
                     $('#info').html(data);  
                }  
           });  
      });  
 });  
 </script>  
<?php
	}
else {
	//header("Location:index.php");	
	echo "<script>window.open('../index.php', '_self');</script>";
}
?>