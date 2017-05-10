<?php

class Users
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getAllFrom()
  {

    $statement = $this->pdo->prepare("
      SELECT * FROM user");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  } 

  public function getUser($user)
  {
    $statement = $this->pdo->prepare("
   SELECT username, id, password, isAdmin FROM user 
   WHERE username = '$user'
      ");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);

  }

  public function getAllPosts($id)
  {
    $statement = $this->pdo->prepare("
    SELECT blogpost.id, blogpost.title, blogpost.post, blogpost.userID, blogpost.createdAt, user.username FROM blogpost INNER JOIN user ON blogpost.userID = user.id
      ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }


}