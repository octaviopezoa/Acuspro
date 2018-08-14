(function(){
	$(".boton_envio").click(function() {

        $('.ajaxgif').removeClass('hide');
        var datos = 'nombre='+ nombre + '&email=' + email + '&telefono=' + telefono + '&direccion=' + direccion + '&mensaje=' + mensaje;
        $.ajax({
            type: "POST",
            url: "contacto.php",
            data: datos,
            success: function() {
                $('.ajaxgif').hide();
                  $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);	
            },
            error: function() {
                $('.ajaxgif').hide();
                  $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);					
            }
           });
         return false;

	});
});