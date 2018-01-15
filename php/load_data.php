<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "gdx");  
 $output = '';  
$user="alexseyreboucas@icloud.com";
 if(isset($_POST["brand_id"]))  
 {  
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT * FROM fatura WHERE data = '".$_POST["brand_id"]."' and email='$user'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM fatura WHERE data = '".$_POST["brand_id"]." and email='$user'";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
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
        echo "Nome:".$row["nome"]."<br>";
        echo "Email:".$row["email"]."<br>";
        echo "Água:".$row["agua"]."<br>";
        echo "Luz:".$row["luz"]."<br>";
        echo "Gás:".$row["gas"]."<br>";
        echo "Cond:".$row["cond"]."<br>";
        echo "Extra:".$row["extra"]."<br>";
        echo "Total:".$row["gasto"]."<br>";
   
      
      
      
      }  
      echo $output;  
 }  
 ?>  