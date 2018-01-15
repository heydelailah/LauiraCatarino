<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "testing");
 //$output = '';
 if($_POST["action"] == "country")
 {
  $query = "SELECT state FROM country_state_city WHERE country = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
 
   
   while($row = mysqli_fetch_array($result))
  { 
   //  $output .= document.getElementById("alx").innerHTML = $row;
 document.getElementById('alx').innerHTML = $row;
    //   $output .= '<option value="'.$row["state"].'">'.$row["state"].'</option>';
   }
   
 /*  
 }
 if($_POST["action"] == "state")
 {
  $query = "SELECT city FROM country_state_city WHERE state = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
 // $output .= '<option value="">Select City</option>';
 
   
   
   while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["city"].'">'.$row["city"].'</option>';
  }
 }
  
 echo $output;
}
*/
?>
