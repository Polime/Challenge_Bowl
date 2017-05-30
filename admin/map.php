<?php
	require "back_end/conn.php";
	$name = $_SESSION['name'];
	$sql = "select location_long,location_lat from old_info where name='$name'";
	$res = $pdo->query($sql);
	while($row = $res->fetch()){
		$long = $row[0];
		$lat = $row[1];
	}
	// var_dump($long);
	// var_dump($lat);
?>
<html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{height:500px;width:100%;}
		#r-result{width:100%; font-size:14px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UjvvmwT3r5Q00ZvQ2RkkEc5udlOmsaxC"></script>
	<title>老人位置</title>
</head>
<body onload="theLocation()">
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var longitude = <?php echo $lat ?>;
	var latitude = <?php echo $long ?>;
	var map = new BMap.Map("allmap");
	map.centerAndZoom(new BMap.Point(longitude,latitude),11);
	map.enableScrollWheelZoom(true);

	// 用经纬度设置地图中心点
	function theLocation(){
		if(longitude != "" && latitude != ""){
			map.clearOverlays();
			var new_point = new BMap.Point(longitude,latitude);
			var marker = new BMap.Marker(new_point);  // 创建标注
			map.addOverlay(marker);              // 将标注添加到地图中
			map.panTo(new_point);
		}
	}
</script>
