<?php
  include 'includes/db.php';
  session_start();

  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $username = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      die('Query failed') . mysqli_error($connection);
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
      $db_id = $row['id'];
      $db_username = $row['username'];
      $db_password = $row['password'];
    }

    if ($username === $db_username && $password === $db_password) {
      $_SESSION['username'] = $db_username;
      header("location: index.php");
    }
    else {
      header("location: login.php");
    }
  }
  $title = 'Logga in!';
  include "includes/header.php";
?>


    <form class="login" action="login.php" method="post">
      <h3>Logga in</h3>
      <input type="text" name="username" placeholder="Användarnamn">
      <input type="password" name="password" placeholder="Lösenord">
      <input type="submit" name="login" value="Logga in">
    </form>

  </body>
</html>