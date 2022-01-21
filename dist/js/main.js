$(function() {
	show_tables();
});

function show_tables() {
	$.get('http://localhost:8080/app/controllers/controller.php?choice=show_tables', function(response) {
		console.table(response);
	}, 'json')
}
