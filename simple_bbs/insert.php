<?php
  require_once('config.php');
  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  $sql = "INSERT INTO bbs (username,usermsg) VALUES('$username','$usermsg')";

  mysqli_query($mysqli, $sql);
  
?>