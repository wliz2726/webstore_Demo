$(document).ready(function(){
	$("#fcontacto").submit(function( event ){
		event.preventDefault();
        var $form = $(this);
		$.ajax({
			type: 'POST',
			url: 'send.php',
			data: $form.serialize(),
			success: function(data){
			    $("#respuesta").slideDown(600);
				$form.slideUp(600);
                $('#validarNombre').val('');
                $('#validarEmail').val('');
                $('#validarTelefono').val('');
                $('#validationMensaje').val('');
                
                $form.removeClass('was-validated');
			},
		});

		return false;

	});

});