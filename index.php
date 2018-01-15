<?php
include "./php/func.php";
include "./php/conexao.php";

$email=$_GET["nome"];
$pw=$_GET["senha"];
//$q1="select * from morador where nome='$email' and pass='$pw'";
//$q2=$msqli->query($q1) or die($mysqli->error);
$slct=$msqli->query("select * from morador where nome='$email' and pass='$pw'");


//$ro=mysql_num_rows($slct);
while($dado=$slct->fetch_array()){
if($dado["nome"]==$email && $dado["pass"]){
  echo "igual";
  //echo $dado["nome"];
  //echo $dado["pass"];
    }
  
  else{
    echo "<script>location.href='ind.php';</script>"; 
  }
}
//}dd
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
  
<body>
  <?php
echo date("H/m/Y");  
echo "<h1 align='center'>Painel adinistrativo de condôminos </h1>";
$nm=$_GET["nome"];
?>
  </body>
</html>