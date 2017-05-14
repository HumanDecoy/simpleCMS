<?php 
session_start();

include "header.php";  
include "navbar.php";
include "../error.php";
include "database.php";

 

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
      SELECT * FROM blogpost
    ");
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

  public function editThePost($editTitle, $editPost, $thePostId)
  {
  	$statement = $this->pdo->prepare("
	   UPDATE blogpost SET `title`=:editTitle, `post`=:editPost
	   WHERE id = $thePostId
  	");
  	$statement->execute([
  		"editTitle" => $editTitle,
  		"editPost" => $editPost,
  	]);
  }

  public function deletePost($thePostId)
  {
    $statement = $this->pdo->prepare("
      DELETE FROM blogpost
      WHERE id = $thePostId
    ");
    $statement->execute();
    $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
    header("Location:".$_SESSION['url']);
  }

}




