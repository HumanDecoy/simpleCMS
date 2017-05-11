var data;
	
var getUser = () => {

	
$.ajax({
	method: 'GET',
	url: '/simplecms/partials/finduser.php',
	//när det funkar :
	success: (response) => {
		
		var data = JSON.parse(response);
		setUsers(data);

	},
	//errors
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)


});
}

let setUsers = (data) => {
let onSite = $("#admin-block");
onSite.append(
`
<div class="adminCard card col-md-3 " style="width: 20rem; color:black">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Username= </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
`

	);
console.log(data);

}
