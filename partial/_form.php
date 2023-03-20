<div class="container">
  <a href="index.php" class='home_link'>
    <button class='btn btn-primary'>Back to main</button>
  </a>

  <div class="card">
    <div class="card-header">
      <h3>
        <?php if ($contact['id']) :?>
          Update user: <?= $contact['name']?>
        <?php else:?>
          Create new user
        <?php endif?>
      </h3>
    </div>
    <div class="card-body">
      <div class="container">
        <form 
        action="<?php if ($contact['id']) :?>
          vendor/update.php
          <?php else: ?>
            vendor/create.php
          <?php endif ?>
          " method='POST' enctype='multipart/form-data'>
          <div class="form-group mb-3">
            <input type="hidden" name='id' value="<?= $id ?>" >
            <label for='name'>Name</label>
              <input name='name' value="<?= $contact['name']?>" class='form-control' required>
          </div>
          <div class="form-group mb-3">
            <label for='username'>Username</label>
              <input name='username' value="<?= $contact['username']?>" class='form-control'>
          </div>
          <div class="form-group mb-3">
            <label for='email'>Email</label>
              <input name='email' value="<?= $contact['email']?>" class='form-control' required>
          </div>
          <div class="form-group mb-3">
            <label for='phone'>Phone</label>
              <input name='phone' value="<?= $contact['phone']?>" class='form-control'>
          </div>
          <div class="form-group mb-3">
            <label for='website'>Website</label>
              <input name='website' value="<?= $contact['website']?>" class='form-control'>
          </div>
          <div class="form-group mb-3">
            <label for='picture'>Image</label>
              <input name='picture' type='file' value="<?= $contact['website']?>" class='form-control'>
          </div>
          <button type='submit' class='btn btn-lg btn-success'>
            <?php if ($contact['id']) :?>
              Update
            <?php else: ?>
              Create
            <?php endif ?>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>