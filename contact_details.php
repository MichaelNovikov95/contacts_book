<?php
  include 'partial/header.php';
  require 'config/connect.php';

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

<div class="container">
    <a href="index.php" class='home_link'>
      <button class='btn btn-primary'>Back to main</button>
    </a>

    <div class="card">
      <div class="card-header">
        <h3>
          View User: <b><?= $contact['name']?></b>
        </h3>
      </div>
      <table class="table">
        <tbody>
          <tr>
            <th>Name: </th>
            <td><?= $contact['name']?></td>
          </tr>
          <tr>
            <th>Username: </th>
            <td><?= $contact['username']?></td>
          </tr>
          <tr>
            <th>Email: </th>
            <td><?= $contact['email']?></td>
          </tr>
          <tr>
            <th>Phone: </th>
            <td><?= $contact['phone']?></td>
          </tr>
          <tr>
            <th>Website: </th>
            <td>
              <a target='_blank' href="http://<?= $contact['website']?>"><?= $contact['website']?></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

