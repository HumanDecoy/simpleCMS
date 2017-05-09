<?php

class Newuser
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function createNew($name,$pass)
  {

    $statement = $this->pdo->prepare("
      INSERT INTO user (username, password)
      VALUES (:name, :pass)
      ");
    $statement->execute([
      ":name" => $name,
      ":pass" => $pass,
      ]);
    
  } 
}