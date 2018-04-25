<!-- Slider -->
<div class="flexslider slider_two">

	<ul class="slides">
		<li>
			<img src="./Images/USA_Street_Chicago.png" alt="city1">
			<div class="detail-one">
				<h3>USA</h3>
				<h2>Chicago Night street</h2>
				<span>From $ 2.400</span>
			</div>
		</li>
		<li>
			<img src="./Images/Brazil-citybeach.png" alt="Slider Image">
			<div class="detail-one">
				<h3>Brazil</h3>
				<h2>Brazil Night City Beach</h2>
				<span>From $ 1.400</span>
			</div>
		</li>
		<li>
			<img src="./Images/crosal-img7.png" alt="Slider Image">
			<div class="detail-one">
				<h3>Lsj</h3>
				<h2>Brazil Night City Beach</h2>
				<span>From $ 1.400</span>
			</div>
		</li>
	</ul>
	<!-- Reservation box -->
	<div id="slider_tabs" style="width: 650px;">
		<ul class="clearfix">
			<li><a href="#tabs-1" class="one">机票预订</a></li>
		</ul>
		<div id="tabs-1" class="tab clearfix">
			<div class="detail">
				<form action="#" method="post">
					<div class="trip">
						<input id="single" type="radio" name="trip" value="Round-trip" checked>
						<span>单程</span>
						<input id="round" type="radio" name="trip" value="onw-way">
						<span>往返</span>
					</div>

					<div class="location clearfix">
						<div class="pull-left">
							<label>出发地</label>
							<input id="setout" type="text" name="Location" placeholder="输入城市">
						</div>
						<div class="pull-right">
							<div class="Depart-Date">
								<label>出发日期</label>
								<input type="text" name="Location" placeholder="出发日期" id="datepicker">
							</div>
						</div>
					</div>

					<div class="location clearfix">

						<div class="pull-left">
							<label class="dst" for="clender">目的地</label>
							<input id="destination" type="text" name="Destination" placeholder="输入城市">
						</div>
						<div class="pull-right">
							<div class="date clearfix">
								<label>返回日期</label>
								<input type="text" name="Location" placeholder="返回日期（仅往返）" id="clender" disabled="true">
							</div>
						</div>
					</div>

					<div class="search">
						<input id="serch-flight" type="button" name="search" value="搜索">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Reservation box -->
</div>
<!-- Slider -->