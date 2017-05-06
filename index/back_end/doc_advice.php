<?php
  require "conn.php";
  $old_id = $_SESSION['id'];
  $res = $pdo -> query("select * from doc_advice where old_id = '$old_id'");
  foreach ($res as $key => $row) {
    echo "<li class=\"list-group-item\"> <a href=\"#\" class=\"thumb-xs pull-left m-r-sm\"> <img src=\"images/avatar_default.jpg\" class=\"img-circle\"> </a> <a  href=\"doc_advice_all.php?id=".$row['id']."&doc=".$row['doc']."&time=".$row['time']."&advice=".$row['advice']."\" class=\"clear\"> <small class=\"pull-right text-muted\">".$row['time']."</small> <strong>".$row['doc']."</strong> <span class=\"label label-sm bg-success text-uc\">".$row['class']."</span> <span>".$row['headline']."</span> </a> </li>";
  }
 ?>
