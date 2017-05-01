$(document).ready(function () { 

    try {
        var vcodeUrl = '/Home/CheckCodeJson?';
        //if (VCodeFlag == '2') 
		vcodeUrl = '/Home/CheckNumberCodeJson?';
        $("#SafeCode").attr('src', vcodeUrl + Math.random());
        $("#span_message").html("");
        $("#btnLogin").click(function () {
            FormSubmit()
        });
        $("#btnReset").click(function () {
            $("#txtun").val('');
            $("#txtpw").val('');
            $("#txtcode").val('')
        });
        $("#SafeCode").click(function () {
            var url = vcodeUrl + Math.random();
            $(this).attr('src', url)
        });
        $('input:text:first').focus();
        var $inp = $('html');
        $inp.bind('keydown', function (e) {
            if (e.which == 13) {
                e.preventDefault();
                FormSubmit()
            }
        });
        $('#bt_wjmm').click(function () {
            try {
                if ($('#txtun').val() == "") {
                    $('#span_message').html("请输入用户名称!");
                    $('#txtun').focus().select();
                    return false
                }
                var m_CommInfo = new KingonUI.CommInfo();
                var m_LoginName = new KingonUI.CommItemInfo();
                m_LoginName.dbName = 'LoginName';
                m_LoginName.strValue = $("#txtun").val();
                m_CommInfo.addCommItem(m_LoginName);
                var Postdata = m_CommInfo.getJson();
                $.ajax({
                    type: "POST",
                    url: "/Home/GetUserTelno",
                    dataType: "html",
                    data: {
                        commInfo: Postdata
                    },
                    cache: false,
                    beforeSend: function () {
                        $("#span_wait").show()
                    },
                    success: function (msg) {
                        $("#span_wait").hide();
                        var CommonPageReturnJSon = JSON.parse(msg);
                        if (CommonPageReturnJSon.Type != 'ok') {
                            $("#span_message").html(CommonPageReturnJSon.ModelJSON)
                        } else {
                            $("#h_name").textbox('setValue', $("#txtun").val());
                            $("#h_UserTelno").textbox('setValue', CommonPageReturnJSon.ModelJSON);
                            $('#forget').dialog('open')
                        }
                    }
                })
            } catch (d) { }
        });
        $('#btnSend').click(function () {
            try {
                var m_CommInfo = new KingonUI.CommInfo();
                var m_LoginName = new KingonUI.CommItemInfo();
                m_LoginName.dbName = 'LoginName';
                m_LoginName.strValue = $("#txtun").val();
                m_CommInfo.addCommItem(m_LoginName);
                var Postdata = m_CommInfo.getJson();
                $.ajax({
                    type: "POST",
                    url: "/Home/SendSmsPass",
                    dataType: "html",
                    data: {
                        commInfo: Postdata
                    },
                    cache: false,
                    success: function (msg) {
                        var CommonPageReturnJSon = JSON.parse(msg);
                        if (CommonPageReturnJSon.Type != 'ok') {
                            alert("短信发送失败，请检查！！！")
                        } else {
                            alert("短信验证码已经发送到您的手机，录入你的验证码进行密码修改！！！")
                        }
                    }
                })
            } catch (d) { }
        });
        $('#bntResetPass').click(function () {
            try {
                var loginName = $("#h_name").textbox('getValue');
                var passwd1 = $("#h_passwd1").textbox('getValue');
                var passwd2 = $("#h_passwd2").textbox('getValue');
                var IdentifyCode = $("#h_IdentifyCode").textbox('getValue');
                if (IdentifyCode == "") {
                    alert("请录入短信验证码!!!");
                    return
                }
                if (passwd1 == "") {
                    alert("请录入密码!!!");
                    return
                }
                if (passwd1 != passwd2) {
                    alert("录入密码不正确!!!");
                    return
                }
                var m_CommInfo = new KingonUI.CommInfo();
                m_CommInfo.dataSource = "";
                m_CommInfo.tableName = "";
                m_CommInfo.guid = "";
                var m_LoginName = new KingonUI.CommItemInfo();
                m_LoginName.dbName = 'LoginName';
                m_LoginName.strValue = loginName;
                m_CommInfo.addCommItem(m_LoginName);
                var m_LoginPass = new KingonUI.CommItemInfo();
                m_LoginPass.dbName = 'LoginPass';
                m_LoginPass.strValue = passwd1;
                m_CommInfo.addCommItem(m_LoginPass);
                var m_VCode = new KingonUI.CommItemInfo();
                m_VCode.dbName = 'VCode';
                m_VCode.strValue = IdentifyCode;
                m_CommInfo.addCommItem(m_VCode);
                var Postdata = m_CommInfo.getJson();
                $.ajax({
                    type: "POST",
                    url: "/Home/UpdatePassSms",
                    dataType: "html",
                    data: {
                        commInfo: Postdata
                    },
                    cache: false,
                    success: function (msg) {
                        try {
                            var CommonPageReturnJSon = JSON.parse(msg);
                            if (CommonPageReturnJSon.Type == "ok") {
                                $.messager.alert('消息提示', '密码修改成功', '', function (r) {
                                    top.window.location.href = "/Home/Index"
                                })
                            } else {
                                alert(CommonPageReturnJSon.ModelJSON)
                            }
                        } catch (dd) {
                            alert(dd)
                        }
                    }
                })
            } catch (d) { }
        });

        function flashChecker() {
            var hasFlash = 0;
            var flashVersion = 0;
            if (document.all) {
                var swf = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
                if (swf) {
                    hasFlash = 1;
                    VSwf = swf.GetVariable("$version");
                    flashVersion = parseInt(VSwf.split(" ")[1].split(",")[0])
                }
            } else {
                if (navigator.plugins && navigator.plugins.length > 0) {
                    var swf = navigator.plugins["Shockwave Flash"];
                    if (swf) {
                        hasFlash = 1;
                        var words = swf.description.split(" ");
                        for (var i = 0; i < words.length; ++i) {
                            if (isNaN(parseInt(words[i]))) continue;
                            flashVersion = parseInt(words[i])
                        }
                    }
                }
            }
            return {
                f: hasFlash,
                v: flashVersion
            }
        }

        function ShowflashChecker() {
            try {
                var fls = flashChecker();
                var s = "";
                if (fls.f) {
                    $.messager.show({
                        width: 300,
                        title: '系统提示',
                        msg: '<table><tr><td></td><td>您的浏览器内核版本为：' + KingonUI.Core.getNavigator() + '<br>安装了flash,当前flash版本为:' + fls.v + '.x</td><td></tr></table>',
                        timeout: 9000,
                        showType: 'slide'
                    })
                } else {
                    $.messager.show({
                        title: '系统提示',
                        msg: '<table><tr><td></td><td>您的浏览器没有安装flash，为了能正确使用系统，请安装Flash</td><td></tr></table>',
                        timeout: 9000,
                        showType: 'slide'
                    })
                }
            } catch (d) { }
        }
        ShowflashChecker();
        getCookie();

        function getCookie() {
            try {
                var txtun2 = KingonUI.Core.GetCookie("txtun");
                var txtpw2 = KingonUI.Core.GetCookie("txtpw");
                if (txtun2 && txtpw2) {
                    $("#txtun").val(txtun2);
                    $("#txtpw").val(txtpw2);
                    $("[name='checkbox']").attr("checked", "true")
                }
            } catch (d) { }
        }

        function setCookie() {
            try {
                var txtun1 = $("#txtun").val();
                var txtpw1 = $("#txtpw").val();
                var checked = $("[name='checkbox']:checked");
                if (checked && checked.length > 0) {
                    KingonUI.Core.SaveCookie("txtun", txtun1);
                    KingonUI.Core.SaveCookie("txtpw", txtpw1)
                } else {
                    KingonUI.Core.SaveCookie("txtun", '');
                    KingonUI.Core.SaveCookie("txtpw", '')
                }
            } catch (d) { }
        }

        function PostData(Postdata) {
            $.ajax({
                type: "POST",
                url: "/Home/LoginJson",
                dataType: "html",
                data: {
                    commInfo: Postdata
                },
                cache: false,
                beforeSend: function () {
                    $("#btnLogin").attr("disabled", "disabled").hide();
                    $("#span_wait").show()
                },
                success: function (msg) {
                    try {
                        var LoginResultJson = JSON.parse(msg);
                        if (LoginResultJson.Result == "ok") {
                            var m_CThemeCode = '';
							//alert(m_CThemeCode);
                            try {
                                m_CThemeCode = CThemeCode || '';
                                if (m_CThemeCode.length > 0) {
                                    m_CThemeCode = m_CThemeCode + "/";
                                }
                                else
                                {
                                    m_CThemeCode = LoginResultJson.SoftCode;
                                }
                            }
                            catch (d) {
                                try{
                                    if (LoginResultJson.SoftCode.length > 0)
                                        m_CThemeCode = LoginResultJson.SoftCode + "/";
                                }
                                catch(dd)
                                {
                                        m_CThemeCode = '';
                                }
                            }
                            top.window.location.href = "/Authed/" + m_CThemeCode + "Index"
                        } else if (LoginResultJson.Result == "SysActive") {
                            top.window.location.href = "/Home/SysActive"
                        } else if (LoginResultJson.Result == "changepass") {
                            $.messager.alert('消息提示', '请及时修改密码', '', function (r) {
                                top.window.location.href = "/Home/ChangePass?LoginName=" + $('#txtun').val()
                            })
                        } else {
                            $("#SafeCode").click();
                            if (LoginResultJson.Result == '请录入正确的用户名和密码') $("#span_message").html('用户名或密码错误!!!');
                            else if (LoginResultJson.Result == '用户名或密码错误!') $("#span_message").html('用户名或密码错误!!!');
                            else $("#span_message").html(LoginResultJson.Result);
                            $("#span_wait").hide();
                            $("#btnLogin").removeAttr("disabled").show()
                        }
                    } catch (dd) {
                        alert(dd)
                    }
                }
            })
        }

        function FormSubmit() {
            setCookie();
            if ($('#txtun').val() == "") {
                $('#span_message').html("请输入用户名称!");
                $('#txtun').focus().select();
                return false
            }
            if ($('#txtpw').val() == "") {
                $('#span_message').html("请输入密码!");
                $('#txtpw').focus().select();
                return false
            }
            if (VCodeFlag == '0') {
                $('#txtcode').val('')
            } else {
                if ($('#txtcode').val() == "") {
                    $('#span_message').html("请输入验证码!");
                    $('#txtcode').focus().select();
                    return false
                }
            }
            var m_CommInfo = new KingonUI.CommInfo();
            m_CommInfo.dataSource = "";
            m_CommInfo.tableName = "";
            m_CommInfo.guid = "";
            var m_LoginName = new KingonUI.CommItemInfo();
            m_LoginName.dbName = 'LoginName';
            m_LoginName.strValue = $("#txtun").val();
            m_CommInfo.addCommItem(m_LoginName);
            var m_LoginPass = new KingonUI.CommItemInfo();
            m_LoginPass.dbName = 'LoginPass';
            m_LoginPass.strValue = $("#txtpw").val();
            m_CommInfo.addCommItem(m_LoginPass);
            var m_VCode = new KingonUI.CommItemInfo();
            m_VCode.dbName = 'VCode';
            m_VCode.strValue = $("#txtcode").val();
            m_CommInfo.addCommItem(m_VCode);

            var m_UserSoftList = "";
            try {
                m_UserSoftList = UserSoftList || '';
                if (!(m_UserSoftList.length > 0)) {
                    m_UserSoftList = '';
                }
            }
            catch (dd) {
                m_UserSoftList = "";
            }
			//alert(m_UserSoftList);
			
			
            if (m_UserSoftList != '') {
                var m_UserSoftListP = new KingonUI.CommItemInfo();
                m_UserSoftListP.dbName = 'UserSoftList';
                m_UserSoftListP.strValue = m_UserSoftList;
                m_CommInfo.addCommItem(m_UserSoftListP);
            }

            var Postdata = m_CommInfo.getJson();
            try {
                var fls = flashChecker();
                var s = "";
                if (fls.f) {
                    PostData(Postdata)
                } else {
                    $.messager.confirm('系统提示', '<table><tr><td></td><td>您的浏览器没有安装flash，登录将不能使用附件上传，在线拍照等使用Flash的功能,确认吗？</td><td></tr></table>', function (r) {
                        if (r) {
                            PostData(Postdata)
                        }
                    })
                }
            } catch (d) {
                PostData(Postdata)
            }
        }
		
		//所有登录页
		$("#btnLogin_Old").click(function () {
            FormSubmitAll('Old');
        });
		$("#btnLogin_Doctor").click(function () {
            FormSubmitAll('Doctor');
        });
		$("#btnLogin_Service").click(function () {
            FormSubmitAll('Service');
        });
		$("#btnLogin_Corp").click(function () {
            FormSubmitAll('Corp');
        });
		$("#btnLogin_CallCenter").click(function () {
            FormSubmitAll('CallCenter');
        });
		$("#btnLogin_OldCorp").click(function () {
            FormSubmitAll('OldCorp');
        });
		$("#btnLogin_Zhengfu").click(function () {
            FormSubmitAll('Zhengfu');
        });
        function FormSubmitAll(value) { 
            //setCookie();
			var loginname=$('#txtun_'+value).val();
			var loginpass=$('#txtpw_'+value).val();
			var txtcode=$('#txtcode_'+value).val('');
            if (loginname == "") {
                $('#span_message_'+value).html("请输入用户名称!");
                $('#txtun_'+value).focus().select();
                return false
            }
            if (loginpass == "") {
                $('#span_message_'+value).html("请输入密码!");
                $('#txtpw_'+value).focus().select();
                return false
            }
            if (VCodeFlag == '0') {
                txtcode="";
            } else {
                if (txtcode == "") {
                    $('#span_message_'+value).html("请输入验证码!");
                    $('#txtcode_'+value).focus().select();
                    return false
                }
            }
            var m_CommInfo = new KingonUI.CommInfo();
            m_CommInfo.dataSource = "";
            m_CommInfo.tableName = "";
            m_CommInfo.guid = "";
            var m_LoginName = new KingonUI.CommItemInfo();
            m_LoginName.dbName = 'LoginName';
            m_LoginName.strValue = loginname;
            m_CommInfo.addCommItem(m_LoginName);
            var m_LoginPass = new KingonUI.CommItemInfo();
            m_LoginPass.dbName = 'LoginPass';
            m_LoginPass.strValue = loginpass;
            m_CommInfo.addCommItem(m_LoginPass);
            var m_VCode = new KingonUI.CommItemInfo();
            m_VCode.dbName = 'VCode';
            m_VCode.strValue = txtcode;
            m_CommInfo.addCommItem(m_VCode);

            var m_UserSoftList = "";
            try {
                m_UserSoftList = UserSoftList || '';
                if (!(m_UserSoftList.length > 0)) {
                    m_UserSoftList = '';
                }
            }
            catch (dd) {
                m_UserSoftList = "";
            }
			//alert(m_UserSoftList);
			
			
            if (m_UserSoftList != '') {
                var m_UserSoftListP = new KingonUI.CommItemInfo();
                m_UserSoftListP.dbName = 'UserSoftList';
                m_UserSoftListP.strValue = m_UserSoftList;
                m_CommInfo.addCommItem(m_UserSoftListP);
            }

            var Postdata = m_CommInfo.getJson(); 
            try {
                var fls = flashChecker(); 
                var s = "";
                if (fls.f) {
                    PostDataAll(Postdata,value)
                } else {
                    $.messager.confirm('系统提示', '<table><tr><td></td><td>您的浏览器没有安装flash，登录将不能使用附件上传，在线拍照等使用Flash的功能,确认吗？</td><td></tr></table>', function (r) {
                        if (r) {
                            PostDataAll(Postdata,value)
                        }
                    })
                }
            } catch (d) {
                PostDataAll(Postdata,value)
            }
        }

    
		 function PostDataAll(Postdata,value) {
            $.ajax({
                type: "POST",
                url: "/Home/LoginJson",
                dataType: "html",
                data: {
                    commInfo: Postdata
                },
                cache: false,
                beforeSend: function () {
                   // $("#btnLogin_"+value).attr("disabled", "disabled").hide();
                   // $("#span_wait_"+value).show()
                },
                success: function (msg) {
                    try {
                        var LoginResultJson = JSON.parse(msg);
                        if (LoginResultJson.Result == "ok") {
                            var m_CThemeCode = '';
							//alert(m_CThemeCode);
                            try {
                                m_CThemeCode = CThemeCode || '';
                                if (m_CThemeCode.length > 0) {
                                    m_CThemeCode = m_CThemeCode + "/";
                                }
                                else
                                {
                                    m_CThemeCode = LoginResultJson.SoftCode;
                                }
                            }
                            catch (d) {
                                try{
                                    if (LoginResultJson.SoftCode.length > 0)
                                        m_CThemeCode = LoginResultJson.SoftCode + "/";
                                }
                                catch(dd)
                                {
                                        m_CThemeCode = '';
                                }
                            }
							
							//window.open( "/Authed/" + m_CThemeCode + "Index");
							//top.OpenUrl(KingonUI.Core.getIframeID(), "", "/Authed/" + m_CThemeCode + "Index", "", 5, 707, 495);
                             top.window.location.href = "/Authed/" + m_CThemeCode + "Index"
                        } else if (LoginResultJson.Result == "SysActive") {
                            top.window.location.href = "/Home/SysActive"
                        } else if (LoginResultJson.Result == "changepass") {
                            $.messager.alert('消息提示', '请及时修改密码', '', function (r) {
                                top.window.location.href = "/Home/ChangePass?LoginName=" + $('#txtun').val()
                            })
                        } else {
                            $("#SafeCode_"+value).click();
                            if (LoginResultJson.Result == '请录入正确的用户名和密码') $("#span_message_"+value).html('用户名或密码错误!!!');
                            else if (LoginResultJson.Result == '用户名或密码错误!') $("#span_message_"+value).html('用户名或密码错误!!!');
                            else $("#span_message_"+value).html(LoginResultJson.Result);
                            $("#span_wait_"+value).hide();
                            $("#btnLogin_"+value).removeAttr("disabled").show()
                        }
                    } catch (dd) {
                        alert(dd)
                    }
                }
            })
        }
		
		
    } catch (ddd) {
        alert(ddd)
    }
});

