<?php
  require "conn.php";
  $user = $_POST['userName'];
  $res = $pdo -> query("select * from old_info where id = '$user'");
  $row = $res -> fetch();
  $psd = $_POST['userPass'];
  if (isset($_POST['Button1'])) {
    if ($user == "") {
      echo "<script>alert('用户名不能为空!');location='../../login/login.php';</script>";
    }elseif ($psd == "") {
      echo "<script>alert('密码不能为空!');location='../../login/login.php';</script>";
    }else{
      if ($row == "") {
        echo "<script>alert('账户不存在!');location='../../login/login.php';</script>";
      }else{
        if ($psd == $row['password']) {
          $_SESSION['user'] = $user;
          echo "<script>alert('登录成功!');location='../../index/home.php';</script>";
        }else{
          echo "<script>alert('密码错误!');location='../../login/login.php';</script>";
        }
      }
    }
  }
 ?>
