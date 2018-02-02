<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
  include 'includes/header.php';
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  $num_users = mysqli_num_rows($result);
  ?>
    <!-- Background video -->
    <video loop muted autoplay>
      <source src="vid/street.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    <!-- Background video END -->
    <!-- Main Content -->
    <main class="animated pulse infinite">
      <img src="img/todo.svg" class="img-fluid" alt="ToDo">
      <p>Med <?php echo $num_users ?> använare idag! :)</p>
      <button type="button" class="btn btn-primary"><a href="login.php"> Logga in!</a></button>
      <button type="button" class="btn btn-primary"><a href="register.php"> Registrera</a></button>
    </main>
<?php   include 'includes/footer.php'; ?>

