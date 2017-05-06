<?php
  require "conn.php";
  $id = $_GET['id'];
  $res = $pdo -> exec("delete from doc_advice where id = $id");
  if ($res) {
    echo "<script>alert('删除成功!');location='../doc_advice.php'</script>";
  }
 ?>
