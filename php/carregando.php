<?php  
 //load_data.php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "gdx");  
function inviisble(){
		echo "<script>document.getElementById('td1').style.display = 'none';</script>";
		
	}
 if(isset($_POST["dt"]))  
 {  
 
	 if($_POST["dt"] != '')  
      {  
           $sql = "SELECT * FROM fatura WHERE data = '".$_POST["dt"]."' and email='$_SESSION[email]'";  
           $sql2 = "SELECT * FROM morador WHERE email='$_SESSION[email]'";  
      
      }  
	 
	 
	 
      else  
      {  
           $sql = "SELECT * FROM fatura WHERE data = '".$_POST["dt"]." and email='$_SESSION[email]'";  
          $sql2 = "SELECT * FROM morador WHERE email='$_SESSION[email]'";
      }  
      $result = mysqli_query($connect, $sql);  
      $result2 = mysqli_query($connect, $sql2);  
      while($row = mysqli_fetch_array($result))  
      {  
      while($row2 = mysqli_fetch_array($result2))  
      {  
      //     $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["gasto"].'</div></div>';  
          /* $output .= 'Nome:'.$row["nome"].'<br>';  
           $output .= 'Email:'.$row["email"].'<br>';  
           $output .= 'Água:'.$row["agua"].'<br>';  
           $output .= 'Luz:'.$row["luz"].'<br>';  
           $output .= 'Gás:'.$row["gas"].'<br>';  
           $output .= 'Condomínio:'.$row["cond"].'<br>';  
           $output .= 'Extra'.$row["extra"].'<br>';  
           $output .= 'Total'.$row["gasto"].'<br>';  
   */
        echo inviisble();
				echo "<div style='font-weight: bold;font-size:14px;'><p>";
        echo "Nome:".$row2["nome"];echo "\t\t\t\t\t\tÁgua:\t".$row["agua"]."<br>";
        echo "Email:".$row2["email"];echo "\t\t\t\tlmpza:\t".$row["luz"]."<br>";
        echo "Cargo:".$row2["cargo"];echo "\t\t\t\t\t\t\tgás:\t".$row["gas"]."<br>";
        echo "Contrato:".$row2["contrato"];echo "\t\t\t\t\t\t\tCond:\t".$row["cond"]."<br>";
        echo "Sexo:".$row2["sexo"];echo "\t\t\t\t\t\t\tExtra:\t".$row["extra"]."<br>";
        echo "Telefone:".$row2["telefone"];echo "\t\t\t\t\t\tTotal:\t".$row["gasto"]."<br>";
        echo "Status:".$row["status"]."<br>";
   echo "</div>";
        
      
      
      
      }  
 }  
      }
 ?>  