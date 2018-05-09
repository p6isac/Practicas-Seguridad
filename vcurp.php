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
    $nombre="/^[A-Z]{1}[a-z]{1,}$/";
    $apellidoP="/^[A-Z]{1}[a-z]{1,}$/";
    $apellidoM="/^[A-Z]{1}[a-z]{1,}$/";
    $no_cuenta="/^[1-9]{1}[0-9]{8}$/";
  	$correo="/(@gmail.com)|(@comunidad.unam.mx)$/";
  	$telefono="/[0-9]{10}/";
  	//Contraseña (mínimo 9 caracteres, con mayúsculas y minúsculas, digitos y  carácter especial)
  	$contrasenia="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*[0-9]){1}(?=.*[#?!@$%^&*-]){1}.{9,}$/";
  	//REgeX CURP

  	$cuurp="/^[A-Z]{1}(A|E|I|O|U){1}[A-Z]{2}[0-9]{6}(M|H){1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|TC|TS|TL|VZ|YN|ZS){1}(B|C|D|F|G|H|J|K|L|M|N|Ñ|P|Q|R|S|T|V|W|X|Y|Z){3}[A-Z0-9]{1}[0-9]{1}$/";
  	

    //Validaciones con coincidencias
  	$valnom=preg_match($nombre,$nom);
  	$valapp=preg_match($apellidoP,$app);
  	$valapm=preg_match($apellidoM,$apm);
  	$valcorre=preg_match($correo,$email);
  	$valcontra=preg_match($contrasenia,$contra);
  	$valcuenta=preg_match($no_cuenta,$cuenta);
  	$valtel=preg_match($telefono,$tel);
  	$valcurp=preg_match($cuurp,$curp);

  	if($valcurp==1){

  		echo "La CURP  es correcta<br/>";

  	}else{

  		echo "La CURP es incorrecta<br/>";
  	}

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

  	 	echo "Teléfono incorrecto<br/>";
  	 }

}else{

	echo "Completa todos los campos<br/>";

}

	echo'<button><a href="pract6.html">REGRESAR</a></button>';

?>