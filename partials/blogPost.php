<?php 
include "header.php";  
include "navbar.php";
include "error.php";
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

    $statement = $this->pdo->prepare("
      INSERT INTO blogpost (title, post, userID)
      VALUES (:title, :blogpost, :userID)
      ");
    $statement->execute([
      ":title" => $title,
      ":blogpost" => $blogpost,
      ":userID" => $userID,
      ]);
    
  } 
}




