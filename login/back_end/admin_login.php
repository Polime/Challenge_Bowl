<?php
  require "conn.php";
  $user = $_POST['userName'];
  $res = $pdo -> query("select * from admin_login where user = '$user'");
  $row = $res -> fetch();
  $psd = $_POST['userPass'];
  if (isset($_POST['Button1'])) {
    if ($user == "") {
      echo "<script>alert('用户名不能为空!');location='../challeng/admin_login.php';</script>";
    }elseif ($psd == "") {
      echo "<script>alert('密码不能为空!');location='../challeng/admin_login.php';</script>";
    }else{
      if ($row == "") {
        echo "<script>alert('账户不存在!');location='../challeng/admin_login.php';</script>";
      }else{
        if ($psd == $row['password']) {
          $_SESSION['name'] = $row['name'];
          $_SESSION['user'] = $row['user'];
          if (substr_count($row['user'],"doc_")) {
            echo "<script>alert('登录成功!');location='../../admin/hos_home.php';</script>";
          }elseif (substr_count($row['user'],"man_")) {
            echo "<script>alert('身份验证错误!');location='../challeng/admin_login.php';</script>";
          }
        }else{
          echo "<script>alert('密码错误!');location='../challeng/admin_login.php';</script>";
        }
      }
    }
  }elseif (isset($_POST['Button2'])) {
    if ($user == "") {
      echo "<script>alert('用户名不能为空!');location='../challeng/admin_login.php';</script>";
    }elseif ($psd == "") {
      echo "<script>alert('密码不能为空!');location='../challeng/admin_login.php';</script>";
    }else{
      if ($row == "") {
        echo "<script>alert('账户不存在!');location='../challeng/admin_login.php';</script>";
      }else{
        if ($psd == $row['password']) {
          $_SESSION['name'] = $row['name'];
          $_SESSION['user'] = $row['user'];
          if (substr_count($row['user'],"doc_")) {
            echo "<script>alert('身份验证错误!');location='../challeng/admin_login.php';</script>";
          }elseif (substr_count($row['user'],"man_")) {
            echo "<script>alert('登录成功!');location='../../admin/man_home.php';</script>";
          }
        }else{
          echo "<script>alert('密码错误!');location='../challeng/admin_login.php';</script>";
        }
      }
    }
  }
 ?>
