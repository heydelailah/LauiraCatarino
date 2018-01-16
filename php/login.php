<?php
//session_start();
	//$_SESSION['email']=$_GET['email'];
	//$_SESSION['pass']=$_GET['pass'];
//setcookie("",);
include("conexao.php");

$login = $_GET['email'];
$senha = $_GET['pass'];
$entrar = $_GET['rst'];
$connect = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);



if (isset($entrar)) {
   
	     $verifica = mysql_query("SELECT email,pass FROM morador WHERE email= '$login' AND pass = '$senha'") or die("erro ao selecionar");
      //$verifica2 = mysql_query("SELECT nome FROM fatura WHERE nome= '$login'") or die("erro ao selecionar");
 
  if (mysql_num_rows($verifica)<=0){
         echo"<script>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
}

	else{
		session_start();
		$_SESSION['email']=$_GET['email'];
		//include("dados.php");
	header("Location:dados3.php");	
		}
}
?>
