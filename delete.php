<?php
  // Include database file
  include 'database.php';
  $customersObj = new database();
  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customersObj->deleteRecord($deleteId);
  }
?>
