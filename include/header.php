<?php session_start();
require('functions.php');?>
<!DOCTYPE html>
<head>
  <!-- title variable kommer från varje "file.php"   -->
  <title>XPERT</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="include/styles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="include/javascript.js"></script>
</head>
<body>
  <ul class="nav">
  <div class="logo">XPERT</div>
  <?php if($_SESSION):
    # visas bara för loggde användare
    ?>
     <ul class="nav-links">
      <li>Welcome <?=$_SESSION['username'];?></li>
      </ul>
  <?php else: ?>
    <ul class="nav-links">
      <li><a href="login.php">Login</a></li>
    </ul>
  </ul>
    <div class="Not-logged-in-header">
    <h1>Welcome to XPERT</h1>
    <h1> log in to mange your Workouts</h1>
  <?php endif;?>
  <div class="container">
    </div>
