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
    SELECT * FROM blogpost
    WHERE userID = '$id'
      ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }


}