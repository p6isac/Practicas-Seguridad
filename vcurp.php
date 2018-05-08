<?php

$nom=$_POST['nombre'];
$app=$_POST['appt'];
$apm=$_POST['apmt'];
$contra=$_POST['contra'];
$email=$_POST['email'];
$tel=$_POST['cel'];
$curp=$_POST['curp'];
$cuenta=$_POST['cuenta'];

if((!empty($nom))&&(!empty($app))&&(!empty($apm))&&(!empty($contra))&&(!empty($email))&&(!empty($tel))&&(!empty($curp))){


echo "Validando...<br/>";

	 //Expresiones Regulares
    $nombre="/^[A-Z]{1}[a-z]{1,15}$/";
    $apellidoP="/^[A-Z]{1}[a-z]{1,14}$/";
    $apellidoM="/^[A-Z]{1}[a-z]{1,14}$/";
    $no_cuenta="/^[1-9]{1}[0-9]{8}$/";
  	$correo="/(@gmail.com)|(@comunidad.unam.mx)$/";
  	$telefono="/[0-9]{10}/";
  	//Contraseña (mínimo 9 caracteres, con mayúsculas y minúsculas, un número y un carácter especial)
  	$contrasenia="/(?=^.{9,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
  	

    //Validaciones con coincidencias
  	$valnom=preg_match($nombre,$nom);
  	$valapp=preg_match($apellidoP,$app);
  	$valapm=preg_match($apellidoM,$apm);
  	$valcorre=preg_match($correo,$email);
  	$valcontra=preg_match($contrasenia,$contra);
  	$valcuenta=preg_match($no_cuenta,$cuenta);
  	$valtel=preg_match($telefono,$tel);

  	 if($valnom==1){


  	 	echo "Nombre correcto<br/>";

  	 }else{


  	 	echo "Nombre incorrecto<br/>";
  	 }

  	 if($valapp==1){


  	 	echo "Apellido Materno correcto<br/>";



  	 }else{


  	 	echo "Apellido Materno incorrecto<br/>";
  	 }

  	 if($valapm==1){


  	 	echo "Apellido Paterno correcto<br/>";



  	 }else{


  	 	echo "Apellido Paterno incorrecto<br/>";
  	 }

  	 if($valcorre==1){


  	 	echo "Correo correcto<br/>";



  	 }else{


  	 	echo "Correo incorrecto<br/>";
  	 }

  	 if($valcuenta==1){


  	 	echo "Cuenta correcta<br/>";



  	 }else{


  	 	echo "Cuenta incorrecta<br/>";
  	 }

  	 if($valcontra==1){


  	 	echo "Contraseña correcta<br/>";



  	 }else{


  	 	echo "Contraseña incorrecta<br/>";
  	 }

  	 if($valtel==1){


  	 	echo "Teléfono correcto<br/>";



  	 }else{


  	 	echo "Teléfono incorrecto<br>/";
  	 }






}else{

	echo "Completa todos los campos<br/>";





}

	echo'<button><a href="pract6.html">REGRESAR</a></button>';


?>