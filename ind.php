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
    <!--rgba(0,0,255,.6);-->
  }
  
  </style>
  <body>
<!--
    <?php
    $cond="Laura Catarino";
  $ceo="alexsei rebouças";
  echo "bem vindo ".$ceo."<br>".$cond;
   $x=1;$y=2;
    for($i=0;$i<9;$i++){
      echo "<br> $x+$y=";echo $x+$y;
    }
    //get url
    $a=$_GET["v"];
    echo "<br> valor é:".number_format($a*(int)12,2,",",".");
    $pre=1;
    //pre invremento
    echo "<br> re valor de ".$pre++;
    echo "<br> re valor de ".$pre;
    echo "<br> re valor de ".++$pre;
  //coimparando
    echo $pre==2?"impar":"par";
    ?>
-->
  </body>
   <img src="https://scproduction.s3.amazonaws.com/wysiwyg_uploads/cms/images/2016/07/19/11/slide52-83lookzn.png" width="1000"/>  
<div id="textobd">
  Gerenciamento condominial,gerencie o prédio de seu condomínio com ativiaddes mensais
  </div>
  <style>
    #textobd{
      font-size:20px;
      //color:red;
    //  float:right;
    }
    </style>
  
  <form id="form1" method="get" action="index.php">
    <?php
    echo "<br>";
    ?>
    login  <input type="text" name="nome" /> senha <input type="password" name="senha" />  <input type="submit" value="entrar" />
      </form>
<style>
  #form1{
    float:right;
    //position: absolute;
    //bottom:20px;
    
  }
  </style>
</html>
