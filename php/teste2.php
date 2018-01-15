<?php
if(isset($_POST['get_option']))
{
 $host="localhost";
$user="root";
$pass="";
$db="gdx";
 mysql_connect($host, $user, $pass);
 mysql_select_db($db);

 $email = $_POST['get_option'];
echo $email;
  /* $find=mysql_query("select gasto from fatura where email='$email'");
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['gasto']."</option>";
 }
 exit;
*/
}
?>