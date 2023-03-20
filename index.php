<?php
  include 'partial/header.php';
  require_once 'config/connect.php';

  $contacts = mysqli_query($connect,"SELECT * FROM `contacts`");
  $contacts = mysqli_fetch_all($contacts);
?>

  <div class="container">
    <a href="create.php">
      <button class='btn btn-primary'>Create new contact</button>
    </a>
    <div class="card">
      <table class='table'>
        <thead>
          <tr>
            <th>Avatar</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contacts as $contact): ?> 
            <tr>
              <td>
                <img style="width:60px" src="<?= "img/${contact['0']}.png" ?>" alt="">
              </td>
              <td><?= $contact[1]?></td>
              <td><?= $contact[2]?></td>
              <td><?= $contact[3]?></td>
              <td><?= $contact[4]?></td>
              <td>
                <a target='_blank' href="http://<?= $contact[5]?>"><?= $contact[5]?></a>
              </td>
              <td>
                <a href="contact_details.php?id=<?= $contact[0]?>" class='btn btn-sm btn-outline-info'>View</a>
                <a href="update.php?id=<?= $contact[0]?>" class='btn btn-sm btn-outline-secondary'>Update</a>
                <a href="vendor/delete.php?id=<?= $contact[0]?>" class='btn btn-sm btn-outline-danger'>Delete</a>
              </td>
            </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
    </div>
  </div>

<?php
  include 'partial/footer.php';
?>