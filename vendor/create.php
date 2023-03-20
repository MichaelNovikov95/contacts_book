<?php
  require_once '../config/connect.php';

  $name = trim(htmlspecialchars($_POST['name']));
  $username = trim(htmlspecialchars($_POST['username']));
  $email = trim(htmlspecialchars($_POST['email']));
  $phone = trim(htmlspecialchars($_POST['phone']));
  $website = trim(htmlspecialchars($_POST['website']));

  $img_directory = "/Applications/MAMP/htdocs/contacts_book/img";

  if(strlen($name) == 0 && strlen($email) == 0) {
    exit('Name and email are required inputs!');
  }

  mysqli_query($connect, "INSERT INTO `contacts` (`id`, `name`, `username`, `email`, `phone`, `website`) VALUES (NULL, '$name', '$username', '$email', '$phone', '$website')");
  
  $id = mysqli_query($connect, "SELECT MAX(id) FROM `contacts`");
  $id=mysqli_fetch_all($id);
  $id = $id[0][0];

  if(isset($_FILES['picture'])){
    if(!is_dir($img_directory)){
      mkdir($img_directory);
    }
    move_uploaded_file($_FILES['picture']['tmp_name'], "$img_directory/$id.png");
  }

  header('location: ../index.php');
?>