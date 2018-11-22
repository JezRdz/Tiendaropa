function readURL(input, elemento) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$(elemento).attr('src', e.target.result);

		}
		reader.readAsDataURL(input.files[0]);
	}
}

function cambio_imagen(input_number) {
	readURL(document.getElementById("Imagen" + input_number), '#img-' + input_number);
	$('#img-' + input_number).addClass('foto-cambiada')
}

$('.input-imagen').on('change', function () {
	var numero = $(this).attr('numero');
	cambio_imagen(numero);
});