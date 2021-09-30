<?php

class Mahasiswa_model
{
  // property
  private $dbh; // database handler
  private $stmt;

  // constructor
  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040052';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  // getter
  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
