<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="gdx";
$_SESSION['dt']="04/10/2017";
//$username=$_GET["email"];

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;

//$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$_SESSION[email]' order by id desc limit 1";
$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$_SESSION[email]' and data='$_SESSION[dt]'";

//$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$username' order by id desc limit 1";
$consulta2="select * from morador where email='$_SESSION[email]'";
$consulta3="select data from fatura where email='$_SESSION[email]' order by id desc";
$consulta4="select data from fatura where email='$_SESSION[email]'";


$con=$mysqli->query($consulta) or die($mysqli->error);
$con2=$mysqli->query($consulta2) or die($mysqli->error);
$con3=$mysqli->query($consulta3) or die($mysqli->error);
//$con4=$mysqli->query($consulta4) or die($mysqli->error);




?>