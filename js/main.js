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
};


let setUsers = (data) => {
	let output = document.getElementById("admin-block");
	output.innerHTML = " ";
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
};

let setPost = (data) => {
	let output = document.getElementById("admin-block");
	data.reverse();
	output.innerHTML = " ";
	output.innerHTML= `<h1 class="zero">User:${data[0].username}  </h1>`;
	for (var i = 0; i < data.length; i++) {
		adminText=

		`
		<div class="postMedia media col-lg-11">
		<div class="media-body" style="color:black;">
		<h3 class="mt-0"> ${data[i].title}</h3>
		<h5 class="mt-0">Created at : ${data[i].createdAt}</h5>
		<p>${data[i].post}</p>

	<a><button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#${data[i].id}">Delete
</button></a>

<!-- Modal -->

<div class="modal" id="${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black" id="exampleModalLabel">Deleting Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
    <p style="color:black">  Are you sure you want to delete this post?</p>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  <a href="deletePost.php?postId=${data[i].id}">     <button type="button" class="btn btn-primary">Delete</button> </a>
      </div>
    </div>
  </div>
</div>

		</div>
		</div>


		`;
		output.innerHTML+= adminText;
	}

};


let deleteUser = (id) =>{

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
};

let allPost = (id) =>{
	$.ajax({
		method: 'GET',
		url: '/simplecms/partials/getuserId.php?thisUser='+id,
	//när det funkar :
	success: (response) => {

		var data = JSON.parse(response);
		console.log(data);
		setPost(data);

	},
	//errors
	error: (error) => {console.log(error)}, //alt .fail((error)=> error)


});

};



// <img class="card-img-top" src="..." alt="Card image cap">