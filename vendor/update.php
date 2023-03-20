<?php
  require_once '../config/connect.php';

  $name = trim(htmlspecialchars($_POST['name']));
  $username = trim(htmlspecialchars($_POST['username']));
  $email = trim(htmlspecialchars($_POST['email']));
  $phone = trim(htmlspecialchars($_POST['phone']));
  $website = trim(htmlspecialchars($_POST['website']));
  $id=$_POST['id'];

  $img_directory = "/Applications/MAMP/htdocs/contacts_book/img";

  if(isset($_FILES['picture'])){
    if(!is_dir($img_directory)){
      mkdir($img_directory);
    }
    move_uploaded_file($_FILES['picture']['tmp_name'], "$img_directory/$id.png");
  }

  mysqli_query($connect, "UPDATE `contacts` SET `name`='$name', `username`='$username', `email`='$email', `phone`='$phone', `website`='$website' WHERE `contacts`.`id`='$id'");

  header('location: ../index.php');