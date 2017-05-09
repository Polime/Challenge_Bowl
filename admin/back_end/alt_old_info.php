<style type="text/css">
	table tr td input{
		width: 110px;
	}
	table tr td #sub{
		width: 70px;
	}
</style>
<?php 
	$old_id = $_POST['id'];
	require "conn.php";
	$sql = "select * from old_info where id = $old_id";
	$res = $pdo->query($sql);
?>
	<table border="0" width="200">
	<tr>
		<td>姓名</td>
		<td>性别</td>
		<td>年龄</td>
		<td>电话</td>
		<td>社区</td>
		<td>身份证</td>
		<td>注册时间</td>
		<td>密码</td>
		<td>操作</td>
	</tr>
<?php
	foreach($res as $row){
		$id = $row['id'];
?>
		<tr>
			<form method="post" action="back_end/alt_old.php">
				<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
				<td><input type="text" name="sex" value="<?php echo $row['sex'];?>"></td>
				<td><input type="text" name="age" value="<?php $old = substr($row['id'],6,4); $age=2017-$old; echo $age; ?>"></td>
				<td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td>
				<td><input type="text" name="comm" value="<?php echo $row['comm'];?>"></td>
				<td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
				<td><input type="text" name="time" value="<?php echo $row['time'];?>"></td>
				<td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
				<td><input type="submit" name="sub" id="sub" value="确认修改"></td>
			</form>
		</tr>
	
<?php
	}
 ?>
</table>