<?php
include "./php/func.php";
include "./php/morador.php";
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
  //imp();
  ///soma();
  $mm=new morador();
  echo "ur namme ".$mm->setNome("alexsy");
  print $mm->getNome();
  ?>  
</body>
</html>