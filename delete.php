<?php
  include '/includes/header.php';

  if (!empty($_GET['taskID'])) {
    $taskID = $_REQUEST['taskID'];     
  }

  if (!empty($_POST)) {
    $taskID = $_GET['delete'];
    $query = "DELETE FROM task WHERE id = $taskID";
    $deleteTaskQuery = mysqli_query($connection, $query);
    header("Location: index.php");
  }
?>

  <form action="index.html" method="post">
    <input type="hidden" name="taskID">
    <h2>Är du säker på att du vill radera detta inlägg?</h2>
    <input type="submit" name="deleteTask" value="Ja">
    <a href="index.php">Nej</a>
  </form>

</body>
</html>