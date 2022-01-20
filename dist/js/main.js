$(function() {
	connection_db();
});

function connection() {
	return new Promise((resolve, reject) => {
		setTimeout(()=> {
			resolve(
				$.get('http://localhost:8080/app/controllers/controller.php?choice=show_tables', function(response) {
					return response;
				}, 'json')
			);
		}, 1000);
	});
}

async function connection_db() {
	let show_tables = await connection();
	console.table(show_tables);
}
