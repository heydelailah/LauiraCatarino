<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/teste1.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'teste2.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<h1 id="alx">
	hello
	</h1>
	<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>email</option>
  <?php
  $host="localhost";
$user="root";
$pass="";
$db="gdx";
  mysql_connect($host, $user, $pass);
  mysql_select_db($db);

  $select=mysql_query("select distinct(email) from fatura order by email");
   $select2=mysql_query("select gasto from fatura where email='alexseyreboucas@icloud.com'");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['email']."</option>";
  }
 ?>
 </select>

 <select id="new_select">
 </select>
<?php	
	//$ome=document.getElementById("alx").value;
	$mo="alan";
	//echo "<script>alert($ome)</script>"; 
	echo $mo;
	?>
</div>     
</center>
</body>
</html>