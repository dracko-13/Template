$(function() {

	findUserName();

});

var findUserName = () => {
	$('#username').on('keyup', function() {
		$.post('https://192.168.0.250/findUserName', {'username': $(this).val().toLowerCase()}, function(response) {
			console.log(response);
			// if(response == '1')
			// 	$('.text-muted').text('').text('Apodo disponible!');
			// else
			// 	$('.text-muted').text('').text('Apodo ya ocupado!');
		});
	});
}
