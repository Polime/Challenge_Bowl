<?php
	require "conn.php";
	$sql = "select * from old_info where safe = 1";
	$res = $pdo->query($sql);
	foreach ($res as $row) {
		$name = $row['name'];
?>
	<tr style="background-color: #FFF;border: 1px solid #DDD;">
    <td><span style="color: red;">危险</span></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php $old = substr($row['id'], 6,4);$age = 2017-$old;echo $age;?></td>
    <td><?php echo $row['sex'] ?></td>
    <td><?php echo $row['cases'] ?></td>
    <td>
    <form method="post" action="./map.php">
    	<input type="hidden" name="old_name" value="<?php echo $name?>">
    	<input type="submit" name="" value="查看位置" style="background-color: red;border: none;color: #FFF;border-radius: 3px;font-size: 20px;" />
    </form>
    </td>
  </tr>
<?php
	}
?>
