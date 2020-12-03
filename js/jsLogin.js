var attempt = 3; 

function valida_usuario(){
var usuario = document.getElementById("user").value;
var contraseña = document.getElementById("pswrd").value;

if ( usuario == "admin" && contraseña == "abcd"){
alert ("Ingreso correcto");
window.location ="../views/admin.php"; // Redirige a otra pagina
return false;

}
else{
attempt --;
alert("Usuario y contraseña incorrectos Te quedan "+attempt+" intentos");

if( attempt == 0){
document.getElementById("usuario").disabled = true;
document.getElementById("contraseña").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
