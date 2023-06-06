<?php
  if(isset($_POST['btn'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
  }
?>
<h2>User Name: <?php if(isset($username)){
    echo $username;
  } ?> </h2>
  <h2>Email:
    <?php if(isset($email)){
      echo $email;
    } ?>
  </h2>
  <h2>Password:
  <?php if(isset($pass)){
      echo $pass;
    } ?>
  </h2>