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
var getSearch = (user) => {

	
	$.ajax({
		method: 'GET',
		url: '/simplecms/partials/getuserSearch.php?thisUser='+user,
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
	let output = document.getElementById("admin-block");
	output.innerHTML = " "
	for (var i = 0; i < data.length; i++) {
		adminText=
		`
		<div class="adminCard card col-lg-3 col-sm-6 col-xs-12" style="width: 20rem; color:black">
		<div class="card-block">
		<h4 class="card-title">User:${data[i].username}  </h4>
		<p class="card-text">Admin = ${data[i].isAdmin} </p>
		<p class="card-text">user ID = ${data[i].id} </p>
		<p class="card-text">Created = ${data[i].createdAt} </p>
		<button onclick="allPost(${data[i].id})" class="btn btn-primary btn-block">Show Posts</button>
		<button onclick="deleteUser(${data[i].id})" class="btn btn-danger btn-block">Delete User</button>
		
		</div>
		</div>
		`;
		output.innerHTML+= adminText;
	}
}


function deleteUser(id){
		
		$.ajax({
		method: 'POST',
		data:{userId:id},
		url: '/simplecms/partials/deleteUser.php',
	//när det funkar :
	success: (response) => {

		console.log("user deleted");
		getUser();

	},
	//errors
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)


});
}



// <img class="card-img-top" src="..." alt="Card image cap">