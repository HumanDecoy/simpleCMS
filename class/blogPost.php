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
        <h3>You must enter a title</h3>
        <a href="blog.php">Back</a>
        ';
    }
    elseif($blogpost === "")
    {
      echo '
        <h3>You must write some content in your new blogpost</h3>
        <a href="blog.php">Back</a>
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




