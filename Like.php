<?php

class Like
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getAllFrom()
  {

    $statement = $this->pdo->prepare("
      SELECT * FROM likes");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  } 

  public function getLike($user, $postId)
  {
    $statement = $this->pdo->prepare("
   SELECT * FROM likes 
   WHERE userId = '$user'
   AND  postId = '$postId'
      ");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);

  }


}