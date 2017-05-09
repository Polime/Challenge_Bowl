<?php 
	require "conn.php";
	$old_id = $_POST['id'];
	$old_sex = $_POST['sex'];
	$old_name = $_POST['name'];
	$old_phone = $_POST['phone'];
	$old_comm = $_POST['comm'];
	$old_time = $_POST['time'];
	$old_password = $_POST['password'];
	// var_dump($old_sex);
	// var_dump($old_name);
	// var_dump($old_id);
	// var_dump($old_phone);
	// var_dump($old_comm);
	// var_dump($old_time);
	// var_dump($old_password);
	$sql = "update old_info set id='$old_id',name='$old_name',sex='$old_sex',phone='$old_phone',comm='$old_comm',time='$old_time',password='$old_password'";
	$res = $pdo->exec($sql);
	// var_dump($res);
	if($res){
		echo"<script>alert('修改成功');location='../man_old_info.php'</script>";
	}else{
		echo"<script>alert('修改失败');location='../man_old_info.php'</script>";
	}
	
 ?>