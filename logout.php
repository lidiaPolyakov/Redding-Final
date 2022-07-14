<?php
  include 'db.php';
  include 'config.php';
  session_start();
  session_destroy();
  header('Location: ' . URL . 'index.php');

  mysqli_close($connection);