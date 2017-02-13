<?php

$db_username = "root";

try {
  $db = new PDO("mysql:host=localhost; dbname=app", $db_username);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  throw $e;
}

 ?>
