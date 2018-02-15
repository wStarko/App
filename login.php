<?php
  $title = 'Logga in!';
  $bodyID = 'login';
  session_start();
  include "includes/header.php";


  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      die('Query failed') . mysqli_error($connection);
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
      $db_id = $row['id'];
      $db_username = $row['username'];
      $db_password = $row['password'];
      $db_profilepic = $row['profilepic'];
    }

    $password = crypt($password, $db_password);

    if ($username === $db_username && $password === $db_password) {
      $_SESSION['id'] = $db_id;
      $_SESSION['username'] = $db_username;
      $_SESSION['profilepic'] = $db_profilepic;
      header("Location: admin.php");
    }
    else {
      $errorMessage = "Fel användarnamn eller lösenord";
    }
  }
?>
  <form class="col-12 col-sm-8 col-lg-4 login" action="login.php" method="post">
    <img src="img/todo.svg" class="img-fluid img" alt="ToDo">
    <h3 class="formHeading">Logga in</h3>
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Användarnamn" required autofocus>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Lösenord" required>
    </div>
    <button type="submit" name="login" class="col-12 btn2 btn-outline-light">Logga in</button>
    <a href="register.php" class="form-text text-muted text-center">Ny användare? Registrera dig här</a>
  </form>


    <?php if(isset($errorMessage)) : ?>
      <div class="alert"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

  </body>
</html>