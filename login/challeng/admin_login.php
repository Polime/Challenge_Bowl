<!DOCTYPE HTML>
<html>
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>居家养老服务平台</title>
    <link href='../css/easyui.css' rel="stylesheet" type="text/css" />
    <link href="../css/default.css" rel="stylesheet"/>
    <link href="../css/icon.css" rel="stylesheet"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/json2.js"></script>
    <script src="../js/jquery.cookie.js"></script>
    <script src="../js/jquery.easyui.js"></script>
    <script src="../js/easyui-lang-zh_cn.js"></script>
    <script src="../js/kingonui.js"></script>
    <link href="../css/tcl-login2.css" rel="stylesheet" type="text/css" />
</head>
<body class="easyui-layout">
<div class="tcl-box">
   <div class="tcl-header" >
        <div class="tcl-center" style="padding-top:8px;padding-bottom:0;">
            <div class="tcl-logo">
               <img src="../picture/DB26B0A6B2FEE95745F4CC53744AE308.png" width="640" height="46"/>
            </div>
        </div>
    </div>
    <div class="tcl-main">

        <div class="tcl-mainbox" >
                <div class="tcl-mainbnt">
                    <div class="tcl-da_kuang">
                            <div class="tcl-kuangbox" >
								<div class="loginbox">
									<div class="title">
									  <p>社区医院系统</p>
									</div>
									<div style="margin-top:10px;overflow:hidden;posiiton:relative;">
									  <div class="login-l">
									  <P>
										提供给社区医院使用，由运营管理系统开通了专家账号的，可以通过账号密码登录此系统，为老人提供健康方面的专业服务。老人或其子女可通过用户自助中心选择一个家庭医生，医生在此系统可以查看自己的客户的健康档案，处理预约挂号，为自己的患者提供健康评估、进行健康随访记录，回复各种咨询。
									  </p>
									</div>
									<div class="login-r" style="width:290px;">
									  <div class="kuang">
										<form class="" action="../back_end/admin_login.php" method="post">
                      <div class="tcl-longin-user">
  										  用户名：
  										  <input name="userName" type="text" id="txtun_Doctor" value="" class="yanse"></div>
  										<div class="tcl-login-pass">
  										  密&nbsp;&nbsp;&nbsp;码：
  										  <input name="userPass" type="password" id="txtpw_Doctor" value="" ></div>
  										<div class="tcl-login-pass" style="margin-top: 20px;display:none;">
  										  <input  type="text" id="txtcode_Doctor" placeholder="验证码" >
  										  <img alt="" style="height: 40px; cursor: pointer;float:left; " border="0" id="SafeCode_Doctor" width="55" />
  										</div>
  										<div class="tcl-login-keep ">
  										  <span class="ck" style="vertical-align: middle;">
  											<input id="userCheckbox" type="checkbox" name="userCheckbox"></span>
  										  <span style="font-size: 12px;">记住密码</span>
  										</div>

  										<div class="tcl-login-lo" style="text-align:center;margin-bottom:15px;">
  										  <input type="submit" name="Button1" value="登    录" id="btnLogin_Doctor"></div>
										</form>
										<div class="span_message" style="padding:5px;text-align: center;position:absolute;top:0;right:10px;height:28px;line-height:28px;">
										  <span id="span_message_Doctor" style="color: Red"></span>
										  <div id="span_wait_Doctor" style="display:none;">
											<img src="../picture/wait.gif" alt="正在登录。。。"></div>
										</div>
										<div class="ewm">
										  <div class="ewm_text">
											<h4>扫描下载手机APP</h4>
											<a href="http://demo.shecuntong.cn/Content/Upload/201702/15/jtys.apk ">点击下载</a>
										  </div>
										  <div class="ewm_pic">
											<img src="../picture/jtys.png" height="120" width="120" alt="" />
										  </div>
										</div>
									  </div>
									</div>
								</div>
                            </div>
                          </div>
                            <div class="tcl-kuangbox" >
								<div class="loginbox">
									<div class="title">
									  <p>社区服务系统</p>
									</div>
									<div style="margin-top:10px;overflow:hidden;posiiton:relative;">
									  <div class="login-l">
									  <P>
										社区服务人员，以本系统为服务窗口，协同工作、统一管理。社区人员可以根据老人需求进行相应处理。可以进行养老服务基础数据的收集，实现对老人档案的电子化管理，建立老年人档案动态数据库。
									  </p>
									</div>
									<div class="login-r" style="width:290px;">
									  <div class="kuang">
                      <form class="" action="../back_end/admin_login.php" method="post">
                        <div class="tcl-longin-user">
    										  用户名：
    										  <input name="userName" type="text" id="txtun_Service" value="" class="yanse"></div>
    										<div class="tcl-login-pass">
    										  密&nbsp;&nbsp;&nbsp;码：
    										  <input name="userPass" type="password" id="txtpw_Service" value="" ></div>
    										<div class="tcl-login-pass" style="margin-top: 20px;display:none;">
    										  <input  type="text" id="txtcode_Service" placeholder="验证码" >
    										  <img alt="" style="height: 40px; cursor: pointer;float:left; " border="0" id="SafeCode_Service" width="55" />
    										</div>
    										<div class="tcl-login-keep ">
    										  <span class="ck" style="vertical-align: middle;">
    											<input id="userCheckbox" type="checkbox" name="userCheckbox"></span>
    										  <span style="font-size: 12px;">记住密码</span>
    										</div>
    										<div class="tcl-login-lo" style="text-align:center;margin-bottom:15px;">
    										  <input type="submit" name="Button2" value="登    录" id="btnLogin_Service"></div>
                      </form>
										<div class="span_message" style="padding:5px;text-align: center;position:absolute;top:0;right:10px;height:28px;line-height:28px;">
										  <span id="span_message_Service" style="color: Red"></span>
										  <div id="span_wait_Service" style="display:none;">
											<img src="../picture/wait.gif" alt="正在登录。。。"></div>
										</div>
										<div class="ewm">
										  <div class="ewm_text">
											<h4>扫描下载手机APP</h4>
											<a href="http://demo.shecuntong.cn/Content/Upload/201702/15/jjfwjg.apk ">点击下载</a>
										  </div>
										  <div class="ewm_pic">
											<img src="../picture/fws.png" height="120" width="120" alt="" />
										  </div>
										</div>
									  </div>
									</div>
								</div>
                            </div>
                          </div>
                       </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>
