<!-- 李世杰于2017.06.10编写登录、注册页面 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>登录</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        *
        {
            margin: 0px;
            padding: 0px;
        }
        body
        {
            background:url(img/flight2.jpg) no-repeat 80% 20% #000;
            margin: 0px;
            padding: 0px;
        }
    </style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- 登录部分模态框 -->
    <?php require_once("./pagemodule/login_view.php"); ?>
    
    <!-- 注册部分模态框 -->
    <?php require_once("./pagemodule/regist_view.php"); ?>

    <!-- 巨幕 -->
    <div class="container" style="margin: 0px auto;padding:20px 0 0 125px;">
    	<div class="jumbotron" style="background-color: rgba(255,255,255,0.0);">
    		<h1>机票预订系统</h1>
    		<p>完美旅程即将开启！</p>
    		<p>
    			<button class="btn btn-success btn-lg" role="button" data-toggle="modal" data-target="#login">登录</button>
    			<button class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#regist">马上注册</button>
    		</p>
    	</div>	
    </div>
    
</head>
<body>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>				
    <!-- bootstrap js -->
    <script type="text/javascript" src="js/code.js"></script>
    <!-- 用于生成验证码 -->
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/regist.js"></script>
</body>
</html>