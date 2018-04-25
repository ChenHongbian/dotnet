<!-- HEADER -->
<div id="top"></div>
<div class="header-wrapper header_two">
	<div class="container">
		<div class="row">

			<!-- Logo -->
			<div class="span2">
				<div class="logo">
					<a href="index.php"><img src="images/logo2.png" alt="Logo"></a>
				</div>
			</div>
			<!-- Logo -->

			<!--top Menu -->
			<div class="span7" style="margin-top: 45px;">
			</div>
			<!--top Menu -->

			<div class="span3 login_btn">
				<div class="lan" style="font-family:'Microsoft YaHei'">
				<div id="user-message" style="display:none;">
					<p>
					<a id="username" href="#" style="color:rgb(255,255,255);"></a>
					<a href="#">欢迎使用</a>
					</p>
				</div>
				</div>
				<div id="tourist-mode" class="btns" style="display: block;">
					<a href="./loginAndRegist.php" id="login-link">登录</a>
					<a href="./loginAndRegist.php">或注册</a>
				</div>
				<div id="username-mode" class="btns" style="display: none;">
					<a id="lookOrder" href="./order.php">查看订单</a>
					<a id="logout" href="./index.php">退出</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- HEADER end -->
<!-- Scripts -->
<script src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
            $.ajax({
            url: 'http://localhost:8081/User/getCurrentUser',  //向后台传输数据
            type: 'get',
            contentType: 'application/json;charset=UTF-8',
            dataType:"json",
                success: function(data)
                {
                    console.log(data);
                    var usermessage = data
                    if(usermessage.username == null)
                    {
                    	$("#user-message, #username-mode").css("display", "none");
	                    $("#tourist-mode").css("display", "block");
                    }
                    else
                   	{
                   		$("#user-message, #username-mode").css("display", "block");
	                    $("#tourist-mode").css("display", "none");
	                    $("#username").text(usermessage.username);
                   	}
                },
                error: function(data)
                {
                    console.log(data.responseJSON.message);
                    var usermessage = data.responseJSON;
                }
            });
    $("#logout").click(function()
    {
    		$.ajax({
            url: 'http://localhost:8081/User/logout',  //向后台传输数据
            type: 'get',
                success: function(data)
                {
                	if(data.message == "登出成功")
                	{
                		window.location.href="./index.php";
                	}
                },
                error: function(data)
                {
                }
            });
    });
    $("#lookOrder").click(function()
    {
        this.target = "_blank";
        window.open("./orderfull.php"+url_date, "_blank");
    });
</script>