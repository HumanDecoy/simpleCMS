<?php 
session_start();

include "header.php";  
include "navbar.php";
include "error.php";
include "database.php";

 $thePostId=$_GET['postId'];

class EditBlogPost
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
 
  public function getAllFrom()
  {

    $statement = $this->pdo->prepare("
      SELECT * FROM blogpost");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  } 


  public function getPost($thePostId)
  {
    $statement = $this->pdo->prepare("
   SELECT id, title, post FROM blogpost 
   WHERE id = $thePostId
      ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

  }

}


