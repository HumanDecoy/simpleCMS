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
}