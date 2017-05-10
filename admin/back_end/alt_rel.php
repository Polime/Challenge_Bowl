<?php
	require "conn.php";
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$old = $_POST['old'];
	// var_dump($name);
	// var_dump($age);
	// var_dump($sex);
	// var_dump($phone);
	// var_dump($old);
	$sql = "update realtive_case_old set rel_name='$name',sex='$sex',age=$age,phone=$phone where old_name='$old'";
	$res = $pdo->exec($sql);
	// var_dump($res);
	if($res){
		echo"<script>alert('修改成功');location='../man_old_info.php'</script>";
	}else{
		echo"<script>alert('修改失败');location='../man_old_info.php'</script>";
	}

 ?>