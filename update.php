<?php
  include 'partial/header.php';
  require_once 'config/connect.php';

  $id = $_GET['id'];

  if(!isset($id)) {
    include 'partial/not_found.php';
    exit;
  }

  $contact = mysqli_query($connect, "SELECT * FROM `contacts` WHERE id='$id'");
  $contact = mysqli_fetch_assoc($contact);

  if(!$contact) {
    include 'partial/not_found.php';
    exit;
  }
?>

<?php include 'partial/_form.php' ?>

<?php
  include 'partial/footer.php';
?>