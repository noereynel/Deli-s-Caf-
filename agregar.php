<?php 
include"conexion.php";
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$mensaje= $_POST['mensaje'];



//INSERTAR REGISTRO

$accion = "INSERT INTO informacion (nombre,correo,mensaje)
VALUES ('$nombre','$correo','$mensaje')";

$consulta = mysqli_query($conexión, $accion);

//Ventanta Confirma si se guardo la Informacién y regresa a la pagina de formulario
if($consulta!=null){
print “"<script>alert(\"Agregado exitosamente.\");
window. location='../formulario_validacion.html';</script>";
    }

  else{

print "<script>alert(\"No se pudo agregar.\");
window. location='../formulario.validacion.html';</script>";

}

?>






