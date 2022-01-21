$(function() {
	show_tables();
});

function show_tables() {
	$.get('https://localhost/app/controllers/controller.php?choice=show_tables', function(response) {
		console.table(response);
	}, 'json')
}
