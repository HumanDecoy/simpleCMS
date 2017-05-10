var data;
	
let getUser = () => {

	
$.ajax({
	method: 'GET',
	url: '/simplecms/partials/finduser.php',
	//när det funkar :
	success: (response) => {console.log(data = response);
	},
	//errors
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)


});
}


console.log(data);