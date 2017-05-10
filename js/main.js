let getUser = () => {
$.ajax({
	method: 'GET',
	url: '/simplecms/partials/finduser.php',
	//när det funkar :
	success: (response) => {console.log(response);},// alt .done((response) => response)
	//alternativt lägga till error :
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)

});
};