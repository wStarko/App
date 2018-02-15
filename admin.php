<?php
  session_start();
  include "includes/header.php";
  fixUsernameInTitle();

  if (isset($_POST['addTask'])) {
    addTask();
  }
 ?>
<?php if (isset($_SESSION ['username'])) : ?>


  <?php include "includes/navigation.php"; ?>

  <div class="container-fluid">
    <div class="row">
        <?php include "includes/profile.php" ?>
        <?php //include "includes/tasks.php"; ?>
    </div>
  </div>

<?php else : ?>
  <div class"alert alert-danger">Du har inte tillgång till den här sidan!</div>
<?php endif; ?>


<?php include "includes/footer.php"; ?>
