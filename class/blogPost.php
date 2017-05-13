<?php 
include "header.php";  
include "navbar.php";
include "../error.php";
include "database.php";

class NewBlogPost
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function createNew($title,$blogpost,$userID)
  {
    if($title === "")
    {
      echo '
        <div class="col-md-8 offset-md-2"><br />
          <h2>You need to enter a title to your new blogpost</h2>
          <a href="blog.php"><button class=" btn btn-lg btn-primary">Back</button></a>
        </div>
        ';
    }
    elseif($blogpost === "")
    {
      echo '
        <div class="col-md-8 offset-md-2"><br />
          <h2>You need to write content in your new blogpost</h2>
          <a href="blog.php"><button class=" btn btn-lg btn-primary">Back</button></a>
        </div>
      ';
    }
    else
    {
    $statement = $this->pdo->prepare("
      INSERT INTO blogpost (title, post, userID)
      VALUES (:title, :blogpost, :userID)
      ");
    $statement->execute([
      ":title" => $title,
      ":blogpost" => $blogpost,
      ":userID" => $userID,
      ]);
    header("Location:/simplecms/partials/blog.php");
    }
  } 
}




