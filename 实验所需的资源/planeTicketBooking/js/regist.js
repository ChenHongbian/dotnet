/*
 * 李世杰编写于2017年12月15日
 * 用于实现注册页面的相关功能
 */
$(document).ready(function()
{
	var tips1_mutex = 1;						 //提示框互斥信号量
	var tips2_mutex = 1;
	var tips3_mutex = 1;
	var tips4_mutex = 1;
	var tips5_mutex = 1;

	var username;
	var password;
	var password_again;
	var posPattern = /^\d*\.?\d+$/; 	          //正整数正则
	var username_test = /^[a-zA-Z0-9_-]{4,20}$/;  //用户名检测正则表达式
	var pPattern = /^.*(?=.{6,})(?=.*\d)(?=.*[a-z]).*$/;
											      //密码强度检测
	var phonetest = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|17[0135678]|(18[0,2,5-9]))\d{8}$/;
												  //手机号正则
	var username_ok = 0;						  //用于指示相应的输入框是否符合标准
	var phone_ok = 0;
	var password_ok = 0;
	var password_again_ok = 0;
	var code_ok = 0;
	var check_ok = 1;
	var verifyCode = new GVerify("r_code");	//验证码

	/* 用户名输入框功能 */
	var username_input = function()
	{
		/* 显示用户名输入框的提示信息 */
		$("#r_user").focus(function() 
		{
			$("#r_alert").slideUp("slow");
			if(tips1_mutex)
			{
				$("#tips1-waring").css("display","block");
			}
		});

		/* 当焦点离开输入框的时候，进行相应的格式检测 */
		$("#r_user").blur(function() 
		{
			$("#tips1-waring").css("display","none");
			$("#tips1-success").css("display","none");
			username = $("#r_user").val();
			console.log(posPattern.test(username));
			if(username == "")  //对用户名是否为空的检测
			{	
				tips1_mutex = 0;
				username_ok = 0;
				$("#r_user").parent().addClass("has-error");
				$("#tips1-error").css("display","block");
				$("#tips1-error").text("用户名不能为空");
			}
			else if(username.length < 4)  //对用户名长度的检测
			{
				tips1_mutex = 0;
				username_ok = 0;
				$("#r_user").parent().addClass("has-error");
				$("#tips1-error").css("display","block");
				$("#tips1-error").text("长度只能在4-20个字符之间");
			}
			else if(posPattern.test(username))  //对纯数字的检测
			{
				tips1_mutex = 0;
				username_ok = 0;
				$("#r_user").parent().addClass("has-error");
				$("#tips1-error").css("display","block");
				$("#tips1-error").text("用户名不能是纯数字，请重新输入！");
			}
			else if(!username_test.test(username))  //对用户名格式的检测
			{	
				tips1_mutex = 0;
				username_ok = 0;
				$("#r_user").parent().addClass("has-error");
				$("#tips1-error").css("display","block");
				$("#tips1-error").text("格式错误，仅支持字母、数字、\"-\"、\"_\"、的组合");
			}
			else  //修改用户名输入框的样式
			{	
				tips1_mutex = 0;
				username_ok = 1;
				$("#r_user").parent().removeClass("has-error");
				$("#r_user").parent().addClass("has-success");
				$("#tips1-error").css("display","none");
				$("#tips1-error").text("");
				$("#tips1-success").css("display","block");
				$("#tips1-success").text("用户名格式正确");
			}
		});
	}
	username_input();

	/* 手机号码输入框 */
	var phone_input = function()
	{
		/* 显示用户名输入框的提示信息 */
		$("#r_phone").focus(function() 
		{
			$("#r_alert").slideUp("slow");
			if(tips5_mutex)
			{
				$("#tips6-waring").css("display","block");
			}
		});

		/* 当焦点离开输入框的时候，进行相应的格式检测 */
		$("#r_phone").blur(function() 
		{
			$("#tips6-waring").css("display","none");
			$("#tips6-success").css("display","none");
			phone = $("#r_phone").val();
			console.log(phonetest.test(phone));
			if(phone == "")  //对用户名是否为空的检测
			{	
				tips5_mutex = 0;
				phone_ok = 0;
				$("#r_phone").parent().addClass("has-error");
				$("#tips6-error").css("display","block");
				$("#tips6-error").text("手机号不能为空");
			}
			else if(!phonetest.test(phone))  //对用户名格式的检测
			{	
				tips5_mutex = 0;
				phone_ok = 0;
				$("#r_phone").parent().addClass("has-error");
				$("#tips6-error").css("display","block");
				$("#tips6-error").text("手机号号码格式错误");
			}
			else  //修改用户名输入框的样式
			{	
				tips5_mutex = 0;
				phone_ok = 1;
				$("#r_phone").parent().removeClass("has-error");
				$("#r_phone").parent().addClass("has-success");
				$("#tips6-error").css("display","none");
				$("#tips6-error").text("");
				$("#tips6-success").css("display","block");
				$("#tips6-success").text("手机号号码格式正确");
			}
		});
	}
	phone_input();

	/* 设置密码输入框 */
	var password_input = function()
	{
		/* 显示密码输入框的提示信息 */
		$("#r_password").focus(function() 
		{
			$("#r_alert").slideUp("slow");
			if(tips2_mutex)
			{
				$("#tips2-waring").css("display","block"); 
			}	
		});

		/* 当焦点离开输入框的时候，进行相应的格式检测 */
		$("#r_password").blur(function() 
		{
			$("#tips2-waring").css("display","none"); 
			$("#tips2-success").css("display","none");
			password = $("#r_password").val();
			console.log(pPattern.test(password));
			if(password == "")
			{
				tips2_mutex = 0;
				password_ok = 0;
				$("#r_password").parent().addClass("has-error");
				$("#tips2-error").css("display","block");
				$("#tips2-error").text("密码不能为空");
			}
			else if(password.length < 6)
			{
				tips2_mutex = 0;
				password_ok = 0;
				$("#r_password").parent().addClass("has-error");
				$("#tips2-error").css("display","block");
				$("#tips2-error").text("长度只能在6-20个字符之间");
			}
			else if(!pPattern.test(password))
			{
				tips2_mutex = 0;
				password_ok = 1;
				$("#r_password").parent().addClass("has-error");
				$("#tips2-error").css("display","block");
				$("#tips2-error").text("有被盗风险,建议使用字母、数字和符号两种及以上组合");
			}
			else
			{
				tips2_mutex = 0;
				password_ok = 1;
				$("#r_password").parent().removeClass("has-error");
				$("#r_password").parent().addClass("has-success");
				$("#tips2-error").css("display","none");
				$("#tips2-error").text("");
				$("#tips2-success").css("display","block");
				$("#tips2-success").text("密码强度很高");
			}
		});
	}
	password_input();

	/* 设置确认密码输入框 */
	var password_again_input = function()
	{
		/* 显示确认密码输入框的提示信息 */
		$("#r_password_again").focus(function() 
		{
			$("#r_alert").slideUp("slow");
			if(tips3_mutex)
			{
				$("#tips3-waring").css("display","block");
			}
		});

		/* 当焦点离开输入框的时候，进行相应的格式检测 */
		$("#r_password_again").blur(function() 
		{
			$("#tips3-waring").css("display","none");
			$("#tips3-success").css("display","none");
			password = $("#r_password").val();
			password_again = $("#r_password_again").val();
			console.log(password + ", " + password_again)
			if(password_again == "")
			{
				tips3_mutex = 0;
				password_again_ok = 0;
				$("#r_password_again").parent().addClass("has-error");
				$("#tips3-error").css("display","block");
				$("#tips3-error").text("密码不能为空");
			}
			else if(password_again != password)
			{
				tips3_mutex = 0;
				password_again_ok = 0;
				$("#r_password_again").parent().addClass("has-error");
				$("#tips3-error").css("display","block");
				$("#tips3-error").text("两次密码输入不一致");
			}
			else if(password_again == password)
			{
				tips3_mutex = 0;
				password_again_ok = 1;
				$("#r_password_again").parent().removeClass("has-error");
				$("#r_password_again").parent().addClass("has-success");
				$("#tips3-error").css("display","none");
				$("#tips3-error").text("");
				$("#tips3-success").css("display","block");
				$("#tips3-success").text("正确");
			}
		});
	}
	password_again_input();

	/* 设置验证码输入框 */
	var code_input = function()
	{
		/* 显示验证码输入框的提示信息 */
		$("#r_verify").focus(function() 
		{
			$("#r_alert").slideUp("slow");
			if(tips4_mutex)
			{
				$("#tips4-waring").css("display","block"); 
			}
		});

		/* 当焦点离开输入框的时候，进行相应的格式检测 */
		$("#r_verify").blur(function() 
		{
			$("#tips4-waring").css("display","none");
			$("#tips4-success").css("display","none");
			var code = verifyCode.validate($("#r_verify").val());
			if(code)
			{
				tips4_mutex = 0;
				code_ok = 1;
				$("#r_verify").parent().removeClass("has-error");
				$("#r_verify").parent().addClass("has-success");
				$("#tips4-error").css("display","none");
				$("#tips4-error").text("");
				$("#tips4-success").css("display","block");
				$("#tips4-success").text("验证码正确");
			}
			else
			{
				tips4_mutex = 0;
				code_ok = 0;
				$("#r_verify").parent().addClass("has-error");
				$("#tips4-error").css("display","block");
				$("#tips4-error").text("验证码输入有误");
			}
		});
	}
	code_input();

	/* checkbox样式控制 */
	$("#r_check").click(function()
	{
		if($('#r_check').is(':checked'))
		{
			check_ok = 1;
			$("#tips5-error").css("display","none");
			$("#b_regist").removeClass("disabled");
			$("#b_regist").attr("disabled", false);
		}
		else
		{
			check_ok = 0;
			$("#tips5-error").css("display","block");
			$("#b_regist").addClass("disabled");
			$("#b_regist").attr("disabled", true);
		}
	});

	/* 实现注册按钮的功能 */
	$("#b_regist").click(function()
	{
		/* 首先对注册页面的每一个输入框进行检测 */
		if(!(username_ok && password_ok && password_again_ok && code_ok && check_ok && phone_ok))
		{
			//$("#r_alert").css("display", "block");
			$("#r_alert div").removeClass("alert-success");
			$("#r_alert div").addClass("alert-danger");
			$("#r_alert div").text("您的注册信息不符合要求，请修改您的注册信息。");
			$("#r_alert").slideDown("slow");
		}
		else
		{
			username = $("#r_user").val();
			password = $("#r_password").val();
			phone = $("#r_phone").val();
	        var jsondata = JSON.stringify({
	          username: username,
	          password: password,
	          phoneNum: phone
	        });
	        console.log(jsondata);
	        $.ajax({
	        url: 'http://localhost:8081/User',  //向后台传输数据
	        type: 'post',
	        contentType: 'application/json;charset=UTF-8',
	        data: jsondata,
	        dataType:"json",
	            success: function(data)
	            { 
	            	console.log(data);
	            	var response_regist = data;
	            	if(response_regist.message == "注册成功")
	            	{
	            		$("#r_alert div").removeClass("alert-danger");
						$("#r_alert div").addClass("alert-success");
						$("#r_alert div").text("注册成功");
						$("#r_alert").slideDown("slow");
						$("#r_user").addClass("disabled");
						$("#r_password").addClass("disabled");
						$("#r_password_again").addClass("disabled");
						$("#r_code").addClass("disabled");
						$("#r_check").addClass("disabled");
						$("#b_regist").addClass("disabled");
							setTimeout(function(){
							window.location.href="./loginAndRegist.php";}, 2000);
	            	}
	            },
	            error: function(data)
	            {
	            	console.log(data);
	            	var response_regist = data;
	            	if(response_regist.responseJSON.message == "用户名重复")
	            	{
	            		$("#r_alert div").removeClass("alert-success");
						$("#r_alert div").addClass("alert-danger");
						$("#r_alert div").text("该用户名已被注册，请更换用户名");
						$("#r_alert").slideDown("slow");
	            	}
	            	else
	            	{
	            		$("#r_alert div").removeClass("alert-success");
						$("#r_alert div").addClass("alert-danger");
						$("#r_alert div").text("注册失败");
						$("#r_alert").slideDown("slow");
	            }
	            	}
	              	
	        });
		}
	});
});