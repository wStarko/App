<?php
  include "db.php";
  include "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> | App</title>
<link rel="stylesheet" href="css/app.css">
</head>
<body id="<?php if (isset($bodyID)) { echo $bodyID; }?>">