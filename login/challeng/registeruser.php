<!DOCTYPE html>
<html>
<head id="Head1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>社区智能养老综合服务系统</title>
  <link href='../css/easyui.css' rel="stylesheet" type="text/css" />
  <link href="../css/default.css" rel="stylesheet"/>
  <link href="../css/icon.css" rel="stylesheet"/>
  <link href="../css/uploadify.css" rel="stylesheet"/>
  <link href="../css/wdatepicker.css" rel="stylesheet"/>
  <link href="../css/ztreestyle.css" rel="stylesheet"/>
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.easyui.js"></script>
  <script src="../js/easyui-lang-zh_cn.js"></script>
  <script src="../js/json2.js"></script>
  <script src="../js/jquery.cookie.js"></script>
  <script src="../js/jquery.ztree.all.js"></script>
  <script src="../js/jquery.uploadify.js"></script>
  <script src="../js/plupload.js"></script>
  <script src="../js/ueditor.config.js"></script>
  <script src="../js/ueditor.all.js"></script>
  <script src="../js/zh-cn.js"></script>
  <script src="../js/raphael.js"></script>
  <script src="../js/kingonui.js"></script>
  <script src="../js/wdatepicker.js"></script>
    <meta charset="UTF-8">
    <title>用户注册</title>
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/welcome.css">
</head>
  <body class="easyui-layout" >
  <body style="overflow:auto;">
    <div class="header header_index">
        <div class="wid1000">
            <div class="logo fl">
                <a href="javascript:">
                  <img src="../picture/DB26B0A6B2FEE95745F4CC53744AE308.png"  height="46" width="640" ></a>
            </div>
            <div class="hotline"> <i></i>
                服务电话
            </div>
        </div>
    </div>
    <div class="klh_0112_warpper" style="height:700px;" id="main_panel">
        <h2>欢迎注册社区智能养老综合服务平台</h2>
        <div class="validate_msg_a" style="text-align:center;" id="show_panel"> <strong></strong>
        </div>
        <form action="../back_end/register.php" method="post" id="">
            <input type="hidden" id="" name="" value="">
            <table border="0" cellspacing="0" cellpadding="0" class="klh_0112reg_taba">
                <tbody>
                    <tr>
                        <td width="30%" align="right">手机号码：</td>
                        <td width="39%">
                            <input name="h_UserTelno" id="h_UserTelno" type="text" class="gminp_a1 mobile" placeholder="可用于登录和找回密码" value=""></td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                        <td width="31%">
                            <span class="sk_error_prompt1" style="display: inline;">请输入中国大陆手机号码</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">短信验证码：</td>
                        <td>
                            <script src="jquery-3.2.1.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                  $("input#btnSendCode").click(function(){
                                    var num,code,i,n;
                                    code = '';
                                    num = $("input#h_UserTelno").val();
                                    var verify = {};
                                    verify[0] = "0";
                                    verify[1] = "1";
                                    verify[2] = "2";
                                    verify[3] = "3";
                                    verify[4] = "4";
                                    verify[5] = "5";
                                    verify[6] = "6";
                                    verify[7] = "7";
                                    verify[9] = "9";
                                    verify[8] = "8";
                                    for(i=0;i<4;i++){
                                        n = Math.floor(Math.random()*10);
                                        code += verify[n];
                                    }
                                    // alert(code);
                                    $("input#a_SmsCode").val(code);
                                    $.ajax({
                                    type:'get',
                                    url:'../back_end/SendSms.php?phone='+num+'&code='+code,
                                    async:true,
                                        });
                                    });
                                });
                            </script>
                            <input type="button" id="btnSendCode" class="yzm_a1" value="获取短信验证码" />
                            <input name="h_SmsCode" id="h_SmsCode" type="text" class="gminp_a1 yzm" style="width:210px;" placeholder="请输入短信验证码" value="">
                            <input name="a_SmsCode" id="a_SmsCode" type="hidden" value="">
                            </td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            密码：
                            <input name="password" id="password" type="hidden" value=""></td>
                        <td>
                            <input name="h_LoginPass" id="h_LoginPass" type="password" class="gminp_a1 psd" placeholder="6-12位数字或字母" value=""></td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">确认密码：</td>
                        <td>
                            <input name="h_LoginPass2" id="h_LoginPass2" type="password" class="gminp_a1 psd" placeholder="和密码保持一致" value=""></td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">姓名：</td>
                        <td>
                            <input name="h_UserName" id="h_UserName" type="text" class="gminp_a1 subname" placeholder="真实姓名" value=""></td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
					<tr>
                        <td align="right">身份证：</td>
                        <td>
                            <input name="h_Cardid" id="" type="text" class="gminp_a1 imgYzm" placeholder="请输入身份证" value="">
                        </td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">地址：</td>
                        <td>
                            <input name="h_Address" id="" type="text" class="gminp_a1 imgYzm" placeholder="请输入具体社区" value="">
                        </td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                            <span></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">性别：</td>
                        <td>
                            <label class="radio-inline" style="width:100px;display:inline-block;">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">女
                            </label>
                        </td>
                        <td>
                            <label style="color:red;margin-right:5px;">*</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="" id=""></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                           <input id="btnSave" type="submit" class="gmbtn_a" value="立即注册"/>
                        </td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="healthy_gm_footer m_t30px" style="clear:both">
        <div class="healthy_footer_bottom">
            <p></p>
            <p></p>
        </div>
        <div class="Floatfixed">
            <ul>
                <li class="zx">
                    <a href="#"></a>
                </li>
                <li class="ks" style="display: none;">
                    <a href=""></a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
<script src="../js/tablejs.js" type="text/javascript"></script>
