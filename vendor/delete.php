<?php
  require_once '../config/connect.php';

  $id = $_GET['id'];

  mysqli_query($connect, "DELETE FROM `contacts` WHERE `contacts`.`id` = '$id'");

  header('location: ../index.php');
?>