<?php
include "../class/EditBlogPost.php";
$thePostId=$_GET['postId'];

//Function that gets the current post to edit
$currentPost = new EditBlogPost($pdo);
$thePost = $currentPost->getPost($thePostId);

//Loops through the data and shows it in a form that redirects to postToEdit.php when submitted
foreach ($thePost as $row)
{ ?>

<div class="container">
  <div class="row row-centered">
  
 <form action="/simplecms/partials/postToEdit.php" method="POST">
    <label>Title</label><br />
      <input type="text" name="editTitle" value="<?php echo $row['title'] ?>"><br />
      <label>Blogpost</label><br />
      <textarea name="editPost" rows="10" cols="30" value="newPost"><?php echo $row['post'] ?></textarea> <br />
      <input type="hidden" name="editPostId" value="<?php echo $row['id'] ?>">
      <input class="btn btn-lg btn-primary" type="submit" name="sumbit" value="Edit"></button><br />
  </form><br /><br />

 </div>
</div>

<?php }