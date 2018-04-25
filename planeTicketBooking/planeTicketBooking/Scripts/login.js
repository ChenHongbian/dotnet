/*
 * 李世杰编写于2017年12月15日
 * 用于实现登录页面的相关功能
 */
$(document).ready(function()
{
    var username;
    var password;
    $("#l_login").click(function()
    {
        username = $("#l_user").val();
        password = $("#l_password").val();
        $("#l_user").focus(function()
        {
            $("#l_alert").slideUp("slow");
            $("#l_user").parent().removeClass("has-error");
            $("#l_user").parent().removeClass("has-success");
        });
        $("#l_password").focus(function()
        {
            $("#l_alert").slideUp("slow");
            $("#l_password").parent().removeClass("has-error");
            $("#l_password").parent().removeClass("has-success");
        });
        if(username == "" || password == "")
        {
            $("#l_alert div").removeClass("alert-success");
            $("#l_alert div").addClass("alert-danger");
            $("#l_alert div").text("用户名或密码不能为空！");
            $("#l_alert").slideDown("slow");
            if(username == "")
                $("#l_user").parent().addClass("has-error");
            if(password == "")
                $("#l_password").parent().addClass("has-error");
        }
        else
        {
            var jsondata = JSON.stringify({
              username: username,
              password: password
            });
            console.log(jsondata);
            $.ajax({
            url: 'http://localhost:8081/User/login',  //向后台传输数据
            type: 'post',
            contentType: 'application/json;charset=UTF-8',
            data: jsondata,
            dataType:"json",
                success: function(data)
                {
                    console.log(data);
                    var response_login = data;
                    if(response_login.username == username && response_login.password == password)
                    {
                        $("#l_user").parent().removeClass("has-error");
                        $("#l_user").parent().addClass("has-success");
                        $("#l_password").parent().removeClass("has-error");
                        $("#l_password").parent().addClass("has-success");
                        $("#l_alert div").removeClass("alert-danger");
                        $("#l_alert div").addClass("alert-success");
                        $("#l_alert div").text("登陆成功");
                        $("#l_alert").slideDown("slow");
                        $("#l_login").addClass("disabled");
                        $("#l_login").attr("disabled", true);
                        if(username == "admin")
                        {
                            window.location.href="./admin/index.php";
                        }
                        else
                        {
                            window.location.href="./index.php";
                        }
                        
                    }
                },
                error: function(data)
                {
                    console.log(data.responseJSON.message);
                    var response_login = data.responseJSON;
                    if(response_login.message == "用户名和密码错误")
                    {
                        $("#l_user").parent().removeClass("has-success");
                        $("#l_user").parent().addClass("has-error");
                        $("#l_password").parent().removeClass("has-success");
                        $("#l_password").parent().addClass("has-error");
                        $("#l_alert div").removeClass("alert-success");
                        $("#l_alert div").addClass("alert-danger");
                        $("#l_alert div").text("用户名或密码错误");
                        $("#l_alert").slideDown("slow");
                    }
                    else
                    {
                        $("#l_alert div").removeClass("alert-success");
                        $("#l_alert div").addClass("alert-danger");
                        $("#l_alert div").text("登陆失败");
                        $("#l_alert").slideDown("slow");
                    }
                   
                }
            });

        }
    });
});