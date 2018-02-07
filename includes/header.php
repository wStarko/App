<?php
  include "db.php";
  include "functions.php";
    fixUsernameInTitle();
 ?>
 <!doctype html>
 <html lang=sv>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/app.css">
     <title><?php echo $title . "&raquo; " . $appname?></title>
   </head>
   <?php if (isset($bodyClass)) : ?>
   <body class="<?php echo $bodyClass;?>">
   <?php else: ?>
   <body>
   <?php endif; ?>