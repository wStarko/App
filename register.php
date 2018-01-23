<?php
  $title = 'Registrera';
  $bodyID = 'register';
  include 'includes/header.php';

  session_start();

  if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (usernameExists($username)) {
      echo "Användarnamnet finns redan";
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


    <form class="login" action="register.php" method="post">
      <h3>Registrera</h3>
      <input type="text" name="username" placeholder="Användarnamn">
      <input type="password" name="password" placeholder="Lösenord">
      <input type="submit" name="register" value="Registrera!">
    </form>

  </body>
</html>