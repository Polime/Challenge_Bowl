<!DOCTYPE>
<html>
<head>
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
</head>
<body class="easyui-layout">
  <link href="../css/tcl-login01.css" rel="stylesheet" type="text/css" />
  <script src="../js/jquery.min.js"></script>
  <img src="../picture/tcl-main-bg04.png" width="1920" height="1080" style=" position: fixed;bottom: 0;right: 0;">
  <div class="tcl-box">
     <div class="tcl-header" style="background-color: #fff;">
          <div class="tcl-center">
              <div class="tcl-logo" style="padding-top:8px;">
                 <img src="../picture/DB26B0A6B2FEE95745F4CC53744AE308.png" width="640" height="46" />

              </div>
          </div>
      </div>
      <div class="tcl-main">
        <div class="tcl-main-icon">
         <img src="../picture/tcl-gl.png" width="551" height="463" />
        </div>
         <div class="tcl-login" style="background-image: url(../images/login_bg04.png);" >
            <div class="main">
                <div class="kuang">
                    <form class="" action="../back_end/login.php" method="post">
                      <div class="tcl-longin-user">
                          <input name="userName" type="text" id="txtun" placeholder="账户名" class="yanse">
    									</div>
                      <div class="tcl-login-pass">
                          <input name="userPass" type="password" id="txtpw" placeholder="密码" >
                      </div>
                      <div class="tcl-login-pass" style="margin-top: 20px;display:none;">
                          <input  type="text" id="txtcode" placeholder="验证码" >
                         <img alt="" style="height: 40px; cursor: pointer;float:left; " border="0" id="SafeCode" width="55" />
                      </div>
                      <div class="tcl-login-keep ">
                          <span class="ck" style="vertical-align: middle;"><input id="userCheckbox" type="checkbox" name="userCheckbox"></span>
                          <span style="font-size: 14px;">记住密码</span>
                          <a href="#" class="tcl-login-forget">忘记密码？</a>
                          <a href="admin_login.php" style="color: red;">医生及社区人员登录</a>
                      </div>
                       <div class="tcl-login-lo">
                          <input type="submit" name="Button1" value="登    录" id="btnLogin">
                      </div>
                    </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
