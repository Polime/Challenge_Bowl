<?php 
	require "conn.php";
	$sql = "select * from old_info order by time";
	$res = $pdo->query($sql);
?>
	<table border="0" width="900">
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
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['sex'] ?></td>
			<td><?php $old = substr($row['id'],6,4); $age=2017-$old; echo $age; ?></td>
			<td><?php echo $row['phone'] ?></td>
			<td><?php echo $row['comm'] ?></td>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['time'] ?></td>
			<td><?php echo $row['password'] ?></td>
			<td>
				<form method="post" action="alt_old_info.php">
					<input type="hidden" name="id" value="<?php echo $id?>">
					<input type="submit" name="" value="修改">
				</form>
				<form method="post">
					<input type="hidden" name="id" value="<?php echo $id?>">
					<input type="submit" name="del" value="删除">
				</form>
			</td>
		</tr>
	
<?php
	}
 ?>
</table>
<?php 
	$old_id = @$_POST['id'];
	if(isset($_POST['del'])){
		$del = "delete from old_info where id = $old_id";
		$del_r = "delete from relative where id = $old_id";
		$en = $pdo->exec($del);
		$en_r = $pdo->exec($del_r);
		if($en && $en_r){
			echo "<script>alert('删除成功');location='man_old_info.php';</script>";
		}else{
			echo "<script>alert('删除失败');location='man_old_info.php';</script>";

		}
	}
 ?>