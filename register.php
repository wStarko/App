<?php
  $title = 'Registrera';
  $bodyID = 'register';
  include 'includes/header.php';

  session_start();

  if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (usernameExists($username)) {
      $errorMessage = "Användarnamnet finns redan";
    }
    else {
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);

      // Krypterar $password

      $hashFormat = "$2y$10$";
      $salt = "W3HSfK4YS6DpGq5TxKDx4b";
      $hash_and_salt = $hashFormat . $salt;
      $password = crypt($password, $hash_and_salt);


      $query = "INSERT INTO users(username, password) ";
      $query .= "VALUES ('$username', '$password')";

      $result = mysqli_query($connection, $query);
      if (!$result) {
        die("Query failed") . mysqli_error($connection);
      }

      header("Location: login.php");
    }



  }
?>


<form class="col-12 col-sm-8 col-lg-4 login" action="register.php" method="post">
  <img src="img/todo.svg" class="img-fluid img" alt="ToDo">
  <h3 class="formHeading">Registrera dig!</h3>
  <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Användarnamn" required autofocus>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Lösenord" required>
  </div>
  <button type="submit" name="register" class="col-12 btn2 btn-outline-light">Registrera</button>

  </body>
</html>