<?php
include "php/func.php";
include "./php/morador.php";
include "./conexao.php";

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;
$connect = mysqli_connect("localhost", "root", "", "gdx");  




function ImprimindoData($connect)  
 {  
  	  $output = '';  
      $sql = "SELECT * FROM condominio";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
				 $output .= '<option value="'.$row["nome"].'">'.$row["nome"].'</option>'; 
			}  
      return $output;  
 }  
function ImprimindoD($connect)  
 {  
  	  $output = '';  
      $sql = "SELECT * FROM conta";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
				 $output .= '<option value="'.$row["data"].'">'.$row["data"].'</option>'; 
			}  
      return $output;  
 }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
  <style>
  body{
    color:white;
     background:rgba(31,27,27,.9);
  <!--background:rgba(0,0,255,.6);-->
  }
  
  </style>
  <script src="../js/dados.js"></script>
<script src="../js/index.js"></script>
	<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.min.js"></script>
	
<body>
  <di

 <ul>
   <li><select name="datinha" id="datinha" onchange="">Data<option value="Atual">Edfício</option> <?php echo ImprimindoData($connect); ?> </select><select name="datinha" id="datinha" onchange="">Data<option value="Atual">Data</option> <?php echo ImprimindoD($connect); ?> </select>
</li>
   <li>Condominio:<?php echo calcular(1,1,1,2);?>  </li>
   <li>Coelba:<?php echo calcular(1,1,1,2);?>  </li>
   <li>Embasa:<?php echo calcular(1,1,1,2);?>  </li>
   <li>Limpeza:<?php echo calcular(1,1,1,2);?>  </li>
  <li>Total:<?php echo calcular(1,1,1,2);?>  </li>
 </ul>
</body>
</html>