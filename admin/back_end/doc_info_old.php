<?php 
	require "conn.php";
	$sql = "select * from old_info order by time";
	$res = $pdo->query($sql);
?>
	<table border="0" width="1000">
	<tr>
		<td>姓名</td>
		<td>性别</td>
		<td>年龄</td>
		<td>电话</td>
		<td>社区</td>
		<td>身份证</td>
		<td>注册时间</td>
		<td>密码</td>
	</tr>
<?php
	foreach($res as $row){
?>
	
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['sex'] ?></td>
			<td><?php $old = substr($row['id'],6,4); $age=2017-$old; echo $age; ?></td>
			<td><?php echo $row['phone'] ?></td>
			<td><?php echo $row['comm'] ?></td>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['time'] ?></td>
			<td><?php echo $row['password'] ?></td>
		</tr>
	
<?php
	}
 ?>
</table>