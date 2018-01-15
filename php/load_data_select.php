<?php   
$host="localhost";
$user="root";
$pass="";
$db="gdx";
$dt="04/10/2017";
//$username=$_GET["email"];

$mysqli = new mysqli($host,$user,$pass,$db);
if($mysqli->connect_errno)
echo "falha ".$mysqli->connect_erno;

//$consulta="select status,data,agua,luz,gas,cond,extra,gas,gasto from fatura where email='$_SESSION[email]' order by id desc limit 1";




 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "gdx");  
 function fill_brand($connect)  
 {  
   $user="alexseyreboucas@icloud.com";
      $output = '';  
      $sql = "SELECT * FROM fatura where email='$user' order by id desc";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["data"].'">'.$row["data"]."|".$row["email"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM fatura";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
   
      }  
      return $output;  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multiple Image Upload</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="brand" id="brand">  
                          <option value="">Show All Product</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_product">  
                          <?php echo fill_product($connect);?>  
                     </div>  
                </h3>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  