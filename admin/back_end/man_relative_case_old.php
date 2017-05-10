<?php 
	require "conn.php";
	$old_name = @$_POST['old_name'];
	$old_id = @$_POST['old_id'];
	// var_dump($old_name);
	// var_dump($old_id);
	if($old_id == "" && $old_name != ""){
		$sql = "select * from realtive_case_old where old_name = '$old_name'";
	}else if($old_name == "" && $old_id != ""){
		$sql = "select * from realtive_case_old where old_id = $old_id";
	}else if($old_name != "" && $old_id != ""){
		$sql = "select * from realtive_case_old where old_id=$old_id and old_name ='$old_name'";
	}else{
		echo "<script>alert('请选择老人');location='man_old_info.php';</script>";
	}
	$res = $pdo->query($sql);
	$re = $pdo->query($sql);
?>
	<h4>家属信息</h4>
	<table width="500" border="0" >
		
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>电话</td>
			<td>操作</td>
		</tr>
<?php
	foreach($res as $row){
		$number = $row['id'];
?>		
		<tr>
			<td><?php echo $row['rel_name']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['sex']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td>
				<form method="post" action="./alt_relative.php">
					<input type="hidden" name="rel_id" value="<?php echo $number;?>">
					<input type="submit" name="" value="修改">
				</form>
			</td>
		</tr>

<?php
	}
 ?>