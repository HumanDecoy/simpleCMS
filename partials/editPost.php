<?php
  
  include "../class/EditBlogPost.php";
  $currentId = $_SESSION['id'];
  $thePostId=$_GET['postId'];

  $currentPost = new EditBlogPost($pdo);
  
  $thePost = $currentPost->getPost($thePostId);


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