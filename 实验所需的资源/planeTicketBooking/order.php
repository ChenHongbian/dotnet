<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>我的订单</title>
  <!-- 李世杰于2017.06.10编写订单填写页面 -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet"> 
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

  </head>
  <body class="tm-gray-bg" style="background-color:rgb(255,255,255);">
	<!-- Header -->
	<nav class="navbar navbar-default" style="height: 70px;background:rgb(255,255,255);border-bottom:1.6px solid rgb(41, 150, 189);">
		<div class="container-fluid">
		<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1">
			<div class="navbar-header col-lg-2">
				<a href="index.php"><img src="images/logo3.png" alt="Logo"></a>
			</div>
			<div class="collapse navbar-collapse col-lg-8" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="line-height:80px;">
					<li class="active"><a href="#">全部订单</a></li>
					<li><a href="#">未出行</a></li>
					<li><a href="#">未支付</a></li>
					<li><a href="#">已出行</a></li>
				</ul>
			</div>
		</div>
		</div>
		</div>
	</nav>
	<!-- gray bg -->	
	<section id="order-detail" class="container tm-home-section-1" id="more" style="min-height: 550px;">
		<!-- 我的订单信息展示页面 -->
		<div class="section-margin-top"></div>
		<div class="container">
			<div class="row" style="margin-top:20px;" v-for="item in orderDetails.content">
				<div class="col-lg-12" style="background:rgb(247, 249, 250);border:0.8px solid rgb(231, 236, 239);padding:0px;">
					<div class="col-lg-1"><h4>机票</h4></div>
					<div class="col-lg-6"><h5 style="color:rgb(153, 153, 153);">tjf171225170029820&nbsp|&nbsp{{item.stringOrderDate}}</h5></div>
				</div>
				<table class="table table-bordered col-lg-12" style="font-family:'Hiragino Sans GB';margin-bottom:0px;color:rgb(102, 102, 102);">
					<tbody>
						<tr>
							<th colspan="3">
								<span>天津</span>
								<i>——</i>
								<span>昆明</span>
							</th>
							<th rowspan="5">￥{{item.totalPrice}}</th>
							<th rowspan="5">待付款</th>
							<th rowspan="5"><a href="#">查看详情</a></th>
						</tr>
						<tr>
							<th rowspan="4">
								<img src="./img/company/chinaCompany.gif">天津航空
							</th>
							<th>起&nbsp{{item.flight.setOutAirport}}</th>
							<td rowspan="4">{{item.flight.flightNum}}</td>
						</tr>
						<tr>
							<td>{{item.flight.departureTime}}</td>
						</tr>
						<tr>
							<th>终&nbsp{{item.flight.arriveAirport}}</th>
						</tr>
						<tr>
							<td>{{item.flight.arriveTime}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>	
	<!-- footer -->
	<footer style="height: 87.8px;border-top: 0.8px solid rgb(153, 153, 153);text-align:center;">
		<p style="margin-top:20px;color:rgb(153, 153, 153);">N-Travel网服务保障&nbsp版权所有©2018 京ICP备05021087号</p>
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>	
	<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>			
	<!-- bootstrap js -->
    <script src="js/jQuery.URL.Parse.js"></script>
    <!-- 用于地址解析 -->
   	<script type="text/javascript" src="js/Vue.js"></script>
	<script type="text/javascript" src="js/Vue.min.js"></script>
	<script type="text/javascript" src="js/order.js"></script>
	<!-- Vue.js -->
  	<script type="text/javascript" src="js/moment.js"></script>					
  	<!-- moment.js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>
 </body>
 </html>
