<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="gdx";

//$username=$_GET["email"];

$data="24/09/2017";

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;
/*
$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$_SESSION[email]' order by id desc limit 1";
$consulta2="select * from morador where email='$_SESSION[email]'";
$consulta3="select data from fatura where email='$_SESSION[email]' order by id desc";
$consulta4="select data from fatura where email='$_SESSION[email]'";


$con=$mysqli->query($consulta) or die($mysqli->error);
$con2=$mysqli->query($consulta2) or die($mysqli->error);
$con3=$mysqli->query($consulta3) or die($mysqli->error);
*/


//$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$_SESSION[email]' and data='04/10/2017'";

//$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$username' order by id desc limit 1";
//$con4=$mysqli->query($consulta4) or die($mysqli->error);




?>