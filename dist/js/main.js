$(function() {
	test_connection_db();
});

var test_connection_db = () => {
	$.get('http://template.local/application/controllers/controller.php?choice=test_connection_db', function(response) {
		console.table(response);
	}, 'json');
}
