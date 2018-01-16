<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Välkommen | App</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <h1>Välkommen <?php echo $_SESSION['username']; ?></h1>
  </body>
</html>