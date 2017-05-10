var data;
	
var getUser = () => {

	
$.ajax({
	method: 'GET',
	url: '/simplecms/partials/finduser.php',
	//när det funkar :
	success: (response) => {
		var onSite = $("#admin-block");
		var data = JSON.parse(response);
		console.log(data);
		console.log(data[0]);
		console.log(response);
		onSite.append(data[0].username);
	},
	//errors
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)


});
}


console.log(data);


