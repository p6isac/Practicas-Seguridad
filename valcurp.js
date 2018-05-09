$("#boton").on("click",function(){
event.preventDefault();
    //Valor de los dos inputs
    var nom=$("#Nombre").val();
    var apP=$("#apP").val();
    var apM=$("#apM").val();
    var cuenta=$("#cuen").val();
    var cont=$("#con").val();
    var correo=$("#correo").val();
    var telefono=$("#tel").val();
    var curp=$("#cur").val();
    //Expresiones Regulares
    var valnom= new RegExp("^[A-Z]{1}[a-z]{1,}$");
    var valapP= new RegExp("^[A-Z]{1}[a-z]{1,}$");
    var valapM= new RegExp("^[A-Z]{1}[a-z]{1,}$");
    var valcuenta= new RegExp("^[1-9]{1}[0-9]{8}$");
    var valcontra= new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*[0-9]){1}(?=.*[#?!@$%^&*-]){1}.{9,}$");
    var valcorreo=new RegExp("(@gmail.com)|(@comunidad.unam.mx)$");
    var valtele=new RegExp("[0-9]{10}");
    var valcurp=new RegExp("^[A-Z]{1}(A|E|I|O|U){1}[A-Z]{2}[0-9]{6}(M|H){1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|TC|TS|TL|VZ|YN|ZS){1}(B|C|D|F|G|H|J|K|L|M|N|Ñ|P|Q|R|S|T|V|W|X|Y|Z){3}[A-Z0-9]{1}[0-9]{1}$");
    //Validación nombre
    if(!valnom.test(nom))
		{
			$("#Nombre").css("background","red");
				
    }
    else {
      $("#Nombre").css("background","green");
    }
    //Validación Apellido Paterno
    if(!valapP.test(apP))
		{
			$("#apP").css("background","red");
    }else {
      $("#apP").css("background","green");
    }
    //Validación Apellido Materno
    if(!valapM.test(apM))
		{
			$("#apM").css("background","red");
    }
    else {
      $("#apM").css("background","green");
    }
    //Validación de cuenta
    if(!valcuenta.test(cuenta))
		{
			$("#cuen").css("background","red");
    }
    else {
      $("#cuen").css("background","green");
    }
    //Validación contraseña
    if(!valcontra.test(cont))
    {
      $("#con").css("background","red");
    }
    else {
      $("#con").css("background","green");
    }
    //Validación correo
    if(!valcorreo.test(correo)){

        $("#correo").css("background","red");

    }else{
        $("#correo").css("background","green");
    }
    //Validación teléfono
    if(!valtele.test(telefono)){

        $("#tel").css("background","red");

    }else{

        $("#tel").css("background","green");
    }
    //Validación CURP
    if(!valcurp.test(curp)){

        $("#cur").css("background","red");

    }else{

        $("#cur").css("background","green");
    }


     if(valnom.test(nom) && valapP.test(apP) && valapM.test(apM) && valcontra.test(cont) && valcuenta.test(cuenta) && valcurp.test(curp) && valtele.test(telefono) && valcorreo.test(correo))
    {

        alert("Datos validos");

       

       }else{


        alert("Datos no validos");
       } 

       return;

     }); 