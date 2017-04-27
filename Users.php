<?php

class Users
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getAllFrom($sort)
  {

    $statement = $this->pdo->prepare("
      SELECT * FROM $sort");
    $statement->execute();
    return $statement->fetchAll();
  } 
}