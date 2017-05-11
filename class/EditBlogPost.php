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
    if($_SESSION["admin"]===true || $_SESSION["loggedIn"]===true && stripos($_SERVER['REQUEST_URI'], 'simplecms/index.php'))
    {
      header("Location:/simplecms/index.php");
    }
    else
    {
      header("Location:/simplecms/partials/blog.php");
    }
  }

}




