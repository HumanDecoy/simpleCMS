<?php
session_start();
include "../error.php";
include "database.php";
include "class/Users.php";
include "class/Like.php";
$likes = new Like($pdo);
$postLikes = $likes->getAllFrom();

$st = $pdo->prepare("SELECT blogpost.id, blogpost.title, blogpost.post, blogpost.userID, blogpost.createdAt, user.username FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  

$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
foreach (array_reverse($data) as $row)
{ ?>
	<div> 
	<?php 
	$count = 0;
	foreach($postLikes as $likes){
		if($likes['postId'] === $row['id'] ){
			$count++;
		}
	}
	echo '
	<br /><br />
	<h1>'.$row['title'].'</h1>
	<h3>By: '.$row["username"].' Created at: '.$row['createdAt'].'</h3>
	<p>'.$row['post'].'</p>';
	if($_SESSION["admin"]===true  || $_SESSION['loggedIn'] === true)
	{ 
		echo '
		<a href="partials/newLike.php?postId='. $row['id'] .'">
		<div class="row">
		<a><button class="btn btn-lg btn-primary" type="submit" id="likeThis" onclick="newLike('. $row['id'].');">Like ['. $count  . ']</button></a> 
		';
	}
	else
	{ 
		echo '
			<img src="pictures/thumb-up.png" class="img-fluid" alt="Responsive image">'.$count.'
		';
	} 
	if($_SESSION["admin"]===true)
	{
		echo'
				<!-- Button trigger modal -->
			<a><button type="button"  class="btn-lg btn btn-primary" data-toggle="modal" data-target="#'. $row['id'] .'">Delete
			</button></a>

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
							<a href="partials/deletePost.php?postId='. $row['id'] .'"><button type="button" class="btn btn-primary">Delete</button> 
							</a>
						</div>
					</div>
				</div>
			</div>
		';
	} ?>
		
	</div>
	
<?php 
} 

	

