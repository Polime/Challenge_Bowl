<?php
	require 'conn.php';
	$phone = $_POST['h_UserTelno'];
	$verify = $_POST['h_SmsCode'];
	$password = $_POST['h_LoginPass'];
	$passagin = $_POST['h_LoginPass2'];
	$name = $_POST['h_UserName'];
	$cardid = $_POST['h_Cardid'];
	$sex = $_POST['inlineRadioOptions'];
	$code = $_POST['a_SmsCode'];
	$address = $_POST['h_Address'];
	// var_dump($phone);
	// var_dump($verify);
	// var_dump($password);
	// var_dump($passagin);
	// var_dump($name);
	// var_dump(strlen($cardid));
	// var_dump($sex);
	// var_dump($code);
	if($sex == 1){
		$sex = '男';
	}else if($sex == 2){
		$sex = '女';
	}
	if($verify == $code){
		if($password == $passagin){
			if(strlen($cardid) == 23){
				$sql = "insert into old_info(id,name,sex,password,phone,comm) value('$cardid','$name','$sex','$password','$phone','$address')";
				$insert = $pdo->exec($sql);
				if($insert){
					echo "<script>alert('注册成功');location='../challeng/login.php';</script>";
				}else{
					echo "<script>alert('注册失败');location='../challeng/registeruser.php';</script>";
				}
			}else{
				echo "<script>alert('身份证号码错误')</script>";
			}
		}else{
			echo "<script>alert('密码不一致')</script>";
		}
	}else{
		echo "<script>alert('验证码错误')</script>";
	}

?>