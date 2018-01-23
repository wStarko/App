<?php
  function usernameExists($username) {
    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username' ";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  function addTask() {
    global $connection;

    if (isset($_POST['taskName'])) {
      $title = $_POST['taskName'];
      $userID = $_SESSION['id'];

      $query = "INSERT INTO tasks(title, user_id)";
      $query .= "VALUES('$title', '$userID')";

      $addTaskQuery = mysqli_query($connection, $query);
    }
    else {
      echo "wtf?";
    }
  }
?>