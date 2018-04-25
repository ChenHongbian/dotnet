<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>订单填写</title>
  <!-- 李世杰于2017.06.10编写订单填写页面 -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet"> 
  <link href="css/templatemo-style.css" rel="stylesheet">
  <style type="text/css">
  	.btn-circle 
  	{  
	  width: 15px;  
	  height: 15px;  
	  text-align: center;  
	  padding: 6px 0;  
	  font-size: 12px;  
	  line-height: 1px;  
	  border-radius: 10px;  
	}  
  </style>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

  </head>
  <body class="tm-gray-bg" style="background-color:#f6f6f6;">
	<!-- Header -->

	<!-- gray bg -->	
	<section id="passager-detail" class="container tm-home-section-1" id="more">
		<!-- 订单填写页面 -->
		<!-- 提交订单模态框 -->
		<div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="submitLabel">
			<div class="modal-dialog" role="document" style="width: 400px;">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="submitLabel">提交订单</h4>
					</div>	
					<div class="modal-body">
						确认提交订单？
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
						<button id="p_submit" type="button" class="btn btn-primary" @click="submitOrder">确认提交
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">订单填写</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
				<div class="row">
					<!-- 订单填写 -->
					<div class="col-lg-8 col-md-7 col-sm-12" style="background-color: #ffffff;">
						<div style="width: 80%;margin: 0px auto;padding-top: 50px;">
							<h3>乘机人</h3>
							<ul class="list-group" style="list-style-type: none;margin:15px 0 0 0;">
								<li style="display:inline;">
									<a class="btn btn-primary" v-for="item in passagerMessages" style="margin-left:7px;margin-top:3px;" @click="fullPassagerMessage(item)">
									{{item.name}}
									</a>
									<!-- <a class="btn btn-primary">段博瑞</a>
									<a class="btn btn-primary">段博瑞</a> -->
								</li>
							</ul>
							<!-- passager order full start -->
							<div v-for="full in messageFull" v-show="full.show">
							<form class="form-inline row" style="padding-top: 20px;">
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<label>{{full.id}}</label>
								</div>
								<div class="form-group col-lg-1 col-md-1 col-sm-1 col-sm-offset-4 col-md-offset-4 col-lg-offset-4" style="padding-left: 30px;">
									<button type="button" class="btn btn-xs btn-danger btn-circle" @click="deleteOrder(full)">
									X</button>
								</div>
								<div class="form-group col-lg-8 col-md-8 col-sm-8">
									<input type="text" class="form-control" id="o_name" placeholder="姓名，与登机所持证件中的姓名一致" style="width: 100%;" v-model="full.name">
								</div>
								<div class="form-group col-lg-4 col-md-4 col-sm-4">
									<select id="passagerType" class="form-control" @click="getType(full)">
										<option>成人</option>
										<option>儿童(2-12岁)</option>
										<option>婴儿(14天-2岁)</option>
									</select>
								</div>
							</form>
							<form class="form-inline row" style="padding-top: 10px;">
								<div class="form-group col-lg-3 col-md-3 col-sm-3">
									<select class="form-control" style="width: 100%;">
										<option>身份证</option>
										<option>护照</option>
										<option>其他</option>
									</select>
								</div>
								<div class="form-group col-lg-8 col-md-8 col-sm-8" style="padding: 0 5px 0 5px;">
									<input type="text" class="form-control" id="o_card" placeholder="请填写户口本上的身份证号" style="width: 100%;" v-model="full.idCard">
								</div>
							</form>
							<form class="form-inline row" style="padding-top: 10px;">
								<div class="form-group col-lg-3 col-md-3 col-sm-3">
									<select class="form-control" style="width: 100%;">
										<option>+86</option>
										<!-- <option>+1</option>
										<option>+44</option> -->
									</select>
								</div>
								<div class="form-group col-lg-8 col-md-8 col-sm-8" style="padding: 0 5px 0 5px;">
									<input type="text" class="form-control" id="o_phone" placeholder="用于接收航变通知" style="width: 100%;" v-model="full.phoneNum">
								</div>
							</form>
							</div>
						    <!-- passager full end -->
						</div>
						<div style="width: 80%;margin: 0px auto;padding-top: 20px;">
							<button class="btn btn-primary" @click="addOrder">
								添加乘机人
							</button>
						</div>
						<div style="width: 80%;margin: 0px auto;padding-top: 50px;">
							<h3>联系人</h3>
							<form class="form-inline row">
								<div class="form-group col-lg-11 col-md-11 col-sm-11" style="padding: 20px 5px 0 15px;">
									<input type="text" class="form-control" id="name" placeholder="姓名" style="width: 100%;" :value="passagerMessages[0].user.username">
								</div>
							</form>
							<form class="form-inline row" style="padding-top: 10px;">
								<div class="form-group col-lg-3 col-md-3 col-sm-3">
									<select class="form-control" style="width: 100%;">
										<option>+86</option>
										<!-- <option>+1</option>
										<option>+44</option> -->
									</select>
								</div>
								<div class="form-group col-lg-8 col-md-8 col-sm-8" style="padding: 0 5px 0 5px;">
									<input type="text" class="form-control" id="o_tell" placeholder="手机号码，接收航班信息" style="width: 100%;" :value="passagerMessages[0].user.phoneNum">
								</div>
							</form>
						</div>
						<div style="width: 80%;margin: 0px auto;padding-top: 80px;">
							<form class="form-inline">
								<div class="checkbox">
									<label>
										<input type="checkbox"> 我已阅读并接受免责条款、费用扣除、退保等在内的重要事项，其中包括<span style="color: #FCDD44;">《网络电子客票协议》
《航意险说明》 《延误险说明》 《保险经纪委托协议》 《内容声明》 《关于民航旅客行李中携带锂电池规定的公告》 《预订须知》 《四川航空运输总条件》</span>  。 
									</label>
								</div>
							</form>
						</div>
						<div style="width: 80%;margin: 0px auto;padding:80px 0 20px 0;">
							<input id="o_submit" class="btn btn-primary btn-lg" type="button" name="submit" value="提交订单" style="margin: 0 40% 0 40%;" data-toggle="modal" data-target="#submit">
						</div>
					</div>
					<!-- 订单信息展示 -->
					<div id="orderdetail" class="col-lg-4 col-md-5 col-sm-12 container" style="width:400px;background-color:rgb(237, 237, 237);">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
									<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0px;">
										<h4 style="color:rgb(51, 51, 51);">{{date}}&nbsp&nbsp&nbsp{{setout}}-{{destination}}</h4>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3" style="padding: 0px;">
										<h5 style="text-align:right;color:rgb(102, 102, 102);line-height:20px;">{{type}}</h5>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:  0px;margin-top:10px;">
									<div class="col-lg-3 col-md-3 col-sm-3" style="padding:  0px;font-family: Hiragino Sans GB;text-align:;left;">
										<h3 style="font-family:Tahoma;">{{setoutTime}}</h3>
										<h6 style="margin:0px;">{{setoutAirport}}</h6>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: center;color:rgb(153, 153, 153);">
										<span class="col-lg-12" style="font-family: Tahoma;">3h5m</span>
										<img style="margin-top:-20px;" src="./img/line.png">
										<h6 style="font-family:微软雅黑;margin:0px;margin-top:-15px;">{{company}}</h6>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3" style="padding: 0px;font-family: Hiragino Sans GB;text-align:right;">
										<h3 style="font-family:Tahoma;">{{arriveTime}}</h3>
										<h6 style="margin:0px;">{{arriveAirport}}</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;margin-top:50px;">
									<table class="table table-bordered" style="font-family:'Hiragino Sans GB';margin-bottom:0px;color:rgb(102, 102, 102);">
										<h6 style="color:rgb(51, 51, 51);font-family:'Hiragino Sans GB';color:#2996bd;">退改签及特殊票务说明</h6>
										  <thead>
										    <tr>
										      <th>成人票</th>
										      <th>退票扣费</th>
										      <th>同舱改期费</th>
										      <th>签转</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<tr>
										  		<td>规则</td>
										  		<td>只退机建和燃油</td>
										  		<td>不可改期</td>
										  		<td>不可签转</td>
										  	</tr>
										  </tbody>
										  <thead>
										    <tr>
										      <th>儿童票</th>
										      <th>退票扣费</th>
										      <th>同舱改期费</th>
										      <th>签转</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<tr>
										  		<td>规则</td>
										  		<td>¥398/人</td>
										  		<td>¥239/人</td>
										  		<td>可以签转</td>
										  	</tr>
										  	<tr>
										  		<td colspan=4>婴儿票：退改签规则以航空公司最新规定为准，可咨询客服电话（95117）</td>
										  	</tr>
										  </tbody>
									</table>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;text-align:left;margin-top:5px;">
									<h6 style="color:rgb(51, 51, 51);font-family:'Hiragino Sans GB'">*以上均为乘客自愿退改签规则，非自愿退改签规则以可适用法律及航空公司规定为准。航空公司规定以各航空公司官方网站的公示为准。</h6>
									<h6 style="color:rgb(51, 51, 51);font-family:'Hiragino Sans GB'">*申请改签，同舱位变更时，如变更前后的票面价之间存在差价，则补足差价；如同时存在改期手续费和升舱费，则需同时收取改期手续费和舱位差额。</h6>
									<h6>特殊票务说明：</h6>
									<h6>您可免费携带10公斤且体积不超过20×30×40CM的非托运行李，无免费托运行李额。</h6>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12" style="border-bottom:0.8px solid rgb(232, 232, 232);border-top:0.8px solid rgb(249, 249, 249);margin-top:20px;font-family:Hiragino Sans;">
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;margin-top:10px;">
									<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px;">
										<h4>订单总额</h4>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1" style="text-align:left;">
										<h2 style="font-family:Tahoma;font-weight:bold;color:rgb(255, 102, 2);">￥{{priceCalculate.totalPrice}}</h2>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
									<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px;">
										<h6>成人票</h6>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-2" style="padding:0px;">
										<p>¥{{priceCalculate.adultPrice}}/人</p>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1" style="padding:0px;font-family:Tahoma;">
										X{{priceCalculate.adultCount}}
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
									<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px;">
										<h6>儿童票</h6>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-2" style="padding:0px;">
										<p>¥{{priceCalculate.childPrice}}/人</p>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1" style="padding:0px;font-family:Tahoma;">
										X{{priceCalculate.childCount}}
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
									<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px;">
										<h6>婴儿票</h6>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-2" style="padding:0px;">
										<p>¥{{priceCalculate.babyPrice}}/人</p>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1" style="padding:0px;font-family:Tahoma;">
										X{{priceCalculate.babyCount}}
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
									<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px;">
										<h6>机建费</h6>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-2" style="padding:0px;">
										<p>¥{{priceCalculate.buildPrice}}/成人</p>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1" style="padding:0px;font-family:Tahoma;">
										X{{priceCalculate.adultCount}}
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 订单信息展示结束 -->
				</div>
			</div>	
		</div>
	</section>	
	<!-- footer -->
	<footer style="height: 87.8px;border-top: 0.8px solid rgb(153, 153, 153);text-align:center;">
		<p style="margin-top:20px;color:rgb(153, 153, 153);">N-Travel网服务保障&nbsp版权所有©2018 京ICP备05021087号</p>
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>	
	<!-- jQuery -->
    <script src="js/jQuery.URL.Parse.js"></script>
    <!-- 用于地址解析 -->
   	<script type="text/javascript" src="js/Vue.js"></script>
	<script type="text/javascript" src="js/Vue.min.js"></script>
	<script type="text/javascript" src="js/orderfull.js"></script>
	<!-- Vue.js -->
  	<script type="text/javascript" src="js/moment.js"></script>					<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>			<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>
 </body>
 </html>
