<?php
  session_start();
  if (isset($_SESSION['name']) == 0) {
    echo "<script>alert('请登录!');location='../login/challeng/login.php';</script>";
  }
 ?>
