<?php
$user = "root";
$password = "alxsy514";
$database = "gdx";
$hostname = "localhost"; 
# Conecta com o servidor de banco de dados
#mysql_connect($hostname,$user,$password ) or die( ' Erro na conexão ' );

# Seleciona o banco de dados 
#mysql_select_db( $database ) or die( 'Erro na seleção do banco' );

# Seleciona o banco de dados 
#mysql_select_db( $database ) or die( 'Erro na seleção do banco' );

# Executa a query desejada 
#$query = "SELECT nome,pass FROM morador"; 
#$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );



function imp(){
  
  echo "Laura Catarino";
  $a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i";
}
	$x = 4;
$y = &$x;
$z = ++ $y;
echo "X=$x Y=$y Z=$z";
}


?>
