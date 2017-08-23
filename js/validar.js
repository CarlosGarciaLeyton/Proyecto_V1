//validacion de usuario en la BD
$('#nick').change(function(){
       $.post('ajax_validacion_nick.php',{
       	nick: $('#nick').val(),
       	beforeSend :function(){
       		$('.validacion').html("Espere un momento...");
       	}
       }, function (respuesta){
       	$('.validacion').html(respuesta);
       });	
	});





//Validación de email en BD

$('#email').change(function(){
	$.post ('validacion_ajax_email.php',{
		email:$('#email').val(),
		beforeSend: function(){
			$('.validaemail').html("Espere un momento, estamos validando");
			
		}
	}, function(respuesta){
		$('.validacionemail').html(respuesta);
	   
	});
});
	
 //Revisar si contraseñas son iguales

	$('#pass2').change(function(event){
       if($('#pass1').val() === $('#pass2').val()){
       	swal('Bien socio...','Las contraseñas coinciden','success');
       	$('#btn-ingresar').show();
       }else{
       	swal('Upsss...','Las contraseñas NO coinciden','error');
       	 $('#btn-ingresar').hide();
       }
		});

//Desabilitar boton enter

	$('.form').keypress(function(e){
		if(e.which == 13){
			return false;
		}
	});

//deja en mayusculas los campos que se indiquen

function mayus(obj, id ){
	obj = obj.toUpperCase();
	document.getElementById(id).value = obj;
}

