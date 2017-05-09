<?php 
	require "conn.php";
	$case = $_POST['case'];
	$name = $_POST['name'];
	var_dump($case);
	var_dump($name);
	$sql = "update old_info set case='$case' where name='$name'";
	$res = $pdo->exec($sql);
	var_dump($res);
	// if($res){
	// 	echo"<script>alert('修改成功');location='../man_old_info.php'</script>";
	// }else{
	// 	echo"<script>alert('修改失败');location='../man_old_info.php'</script>";
	// }
 ?>