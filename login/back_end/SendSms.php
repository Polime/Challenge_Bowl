
<?php


require 'Util.php';
//发送验证码短信接口
// $phone = "18758681219";
// $code = "1111";
$phone = $_GET['phone'];
$code = $_GET['code'];
$url = 'http://sms.jiangukj.com/SendSms.aspx?';
$data = array('action' => 'code',
    'username' => 'polime',
    'userpass' => 'cch87219266',
    'mobiles' => $phone,
    'content' => $code,
    'codeid' => '3396',);
var_dump($data);
$result = Util::request($url, 'Get',$data);
echo $result;
echo "<script>alert($result);</script>";
?>