<?php 
session_start();

include "header.php";  
include "navbar.php";
include "../error.php";
include "database.php";

//Class with a private pdo and function
class EditBlogPost
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
 
  //Function that gets all the data in blogpost table in the database 
  public function getAllFrom()
  {

    $statement = $this->pdo->prepare("
      SELECT * FROM blogpost
    ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  } 

  //Gets a specific post. Used in editPost.php
  public function getPost($thePostId)
  {
    $statement = $this->pdo->prepare("
      SELECT id, title, post FROM blogpost 
      WHERE id = $thePostId
    ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

  }

  //Updates a specific column in blogpost table. Gets the arguments from postToEdit.php
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

  //Deletes a post from blogpost table. UGets the arguments from deletePost.php
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




