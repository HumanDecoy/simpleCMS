<?php
  
  include "EditBlogPost.php";
  $currentId = $_SESSION['id'];
  $thePostId=$_GET['postId'];

  $currentPost = new EditBlogPost($pdo);
  
  $thePost = $currentPost->getPost($thePostId);
  
  var_dump($thePost);


foreach ($thePost as $row)
{ ?>

<div class="container">
  <div class="row row-centered">
  
  <form action="postToEdit.php" method="POST">
    <label>Title</label><br />
      <input type="text" name="newTitle" value="<?php echo $row['title'] ?>"><br />
      <label>Blogpost</label><br />
      <textarea name="newPost" rows="10" cols="30" value="newPost"><?php echo $row['post'] ?></textarea> <br />
      <input class="btn btn-lg btn-primary" type="submit" name="sumbit" value="Edit"></button><br />
  </form><br /><br />

  </div>
</div>
  

<?php } 