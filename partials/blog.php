<?php
session_start();

include "header.php";  
include "navbar.php";
include "../error.php";
include "database.php";
include "newBlog.php"; //includes the form for a new blogpost
include "../class/Users.php";
include "../class/Like.php";

$likes = new Like($pdo);
$postLikes = $likes->getAllFrom();//Gets the likes on posts

$username = $_SESSION['username'];

$currentUser = new Users($pdo);
$userData = $currentUser->getAllPosts($_SESSION['id']);//Calls a function that gets all the posts
?>
<div class="container">
	<div class='col-md-8 offset-md-2'> <br/ >
		<h1 align='center'>Your posts</h1><br /><br /> 
	</div>

<?php

foreach (array_reverse($userData) as $row)
	{ //Loops through the posts and show the data as HTML
	$count = 0;
	foreach($postLikes as $likes){
		if($likes['postId'] === $row['id'] ){
			$count++;
		}
	}
	echo  '
	<div class="col-md-8 offset-md-2">
		<h1>'.$row['title'].'</h1>
		<p>By: '.$row['username'].' Created at: '.$row['createdAt'].'</p>
		<p>'.$row['post'].'</p>
		<div class="row">
			<a><div id="likeDiv'.$row['id'].'"><button class="btn btn-lg btn-primary" type="submit" id="likeThis'.$row['id'].'" onclick="newLike('.$row['userID'].', '. $row['id'].', '.$count.'); ">Like ['. $count  . ']</button></div>
			</a> 
			<a href="editPost.php?postId='. $row['id'] .'">
				<button class=" btn btn-lg btn-primary" type="submit" id="editThis">Edit</button>
			</a>
			<br />

		<!-- Button trigger modal -->
			<a>
			<button type="button"  class="btn-lg btn btn-primary" data-toggle="modal" data-target="#'. $row['id'] .'">Delete</button>
			</a>

		<!-- Modal -->

		<div class="modal" id="'. $row['id'] .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
	  			<a href="deletePost.php?postId='. $row['id'] .'">     
	  			<button type="button" class="btn btn-primary">Delete</button> 
	  			</a>
	     	  </div>
	   	    </div>
	      </div>
	   </div>
	</div><br /><br /><br />
			
	';
	?> 
</div>
<?php 
} 
include "footer.php"; 
