session_start();
function exit(){
  var inicial="../index.php";
 inicial.trim();
 window.location.href = inicial;
  //window.open(inicial,'_blank');
}


function agrupar(){
  alert(document.getElementById("agrupamento").value);
  document.getElementById("agrupamento").value="";
  
  }


 function reset(){
  document.getElementById("agrupamento").reset();

             }


   function changeFunc($email) {
   // alert(document.getElementById("datinha").value);
    //  alert(document.getElementById("emailInicial").value);
      alert("SELECT * FROM fatura WHERE email=\""+$email+"\" and data=\""+document.getElementById('datinha').value+"\"");
   }
function myFunction() {
alert(document.getElementById('datinha').value=='Atual'?'a':'b');
  //alert(document.getElementById('datinha').value);
}
function wind(){
  window.open('../php/dados3.php', '_self');
}


$(document).ready(function() {
  $('#datinha').change(function() {
var selected=$(this).val();
  $.get("query.php?selected="+selected, function(data){
      $('.result').html(data);

    });
    });
});
