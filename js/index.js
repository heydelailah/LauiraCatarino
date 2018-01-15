/*var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: ""
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM morador", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});

*/



function desc(){
//describin the company
  alert("GOLDXRESIDENCIAL");
getElementById("formulario").value="";
        
  //document.write("Hello, world!<br />wel")
}

//limpar campo
 function res(){
   //resetin form 
  document.getElementById("dados").reset();
//document.getElementById or by class 
   
             }





//validar campo
		function validar() {
  if(document.form1.nm.value === "" || document.form1.pass.value === ""){
    alert("nome ou senha incorretos");
		document.form1.nm.focus();
    return false;
 }
}
