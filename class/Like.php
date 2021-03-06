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
    return $statement->fetch(PDO::FETCH_ASSOC) ;

  }

  public function createNew($user,$postId)
  {

    $statement = $this->pdo->prepare("
      INSERT INTO likes (postId, userId)
      VALUES (:postId, :userId)
      ");
    $statement->execute([
      ":userId" => $user,
      ":postId" => $postId,
      ]);
    
  } 

    public function deleteLike($user,$postId)
  {

    $statement = $this->pdo->prepare("
      DELETE FROM likes
      WHERE userId = '$user'
      AND  postId = '$postId'
      ");
    $statement->execute();
    
  } 

}