<?php 
	require "conn.php";
	$date = date("Y-m-d H:m:s");
	$mood = $_POST['mood'];
	$name = $_SESSION['name'];
	var_dump($date);
	var_dump($mood);
	var_dump($name);

	$sql = "insert into old_mood(name,mood,time) values('$name','$mood','$date')";
	$res = $pdo->exec($sql);
	if($res){
		echo "<script>alert('留言成功');location='../relax.php'</script>";
	}else{
		echo "<script>alert('留言失败');location='../relax.php'</script>";
	}
 ?>