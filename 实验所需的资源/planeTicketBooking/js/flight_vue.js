/* 设置页数全局变量 */
var page_number = 0;
var page_lenght = 3;

var page = new Vue({
	el: '#page-control',
	data: 
		{
			pagemessage: "",
			currentpage: 1,
			totalpage: ""
		},
	methods: 
		{
			/* 向后翻页 */
			pageTurn: function() 
			{
				/* 用于获取航班信息 */
				if(page.currentpage < page.totalpage)
				{
					page_number = page_number + 1;
					page.currentpage = page.currentpage+1;
				    var setout = jQuery.url.param("setout");
				    var destination = jQuery.url.param("destination");
				    var setout_date = jQuery.url.param("setout_date");
				    var return_date = jQuery.url.param("return_date");
				    var type = jQuery.url.param("type");
				    if(type == "single")
				    {
			    		var jsondata = {
			              page: page_number,
			              size: page_lenght,
			              setOutCityName: setout,
			              arriveCityName: destination,
			              departureDate: setout_date
			            };
			            console.log(jsondata);
			            jQuery.ajax({
				            url: 'http://localhost:8081/Flight/getAllByCondition',  //向后台传输数据
				            type: 'get',
				            contentType: 'application/json;charset=UTF-8',
				            data: jsondata,
				            dataType:"json",
				            success: function(data)
				            {
				                console.log(data);
				                page.pagemessage = data.content;
				                console.log();
				                flightshow.$data.flightlist = page.pagemessage;
				            	var i, j;
				            	for(i=0; i<page.pagemessage.length; i++)
				            	{
				            		for(j=0; j<1; j++)
				            		{
				            			flightshow.flightlist[i][j].arriveTime = flightshow.flightlist[i][j].arriveTime.substring(11, 16);
				            			flightshow.flightlist[i][j].departureTime = flightshow.flightlist[i][j].departureTime.substring(11, 16);
				            			console.log(flightshow.flightlist[i][j].arriveTime);
				            		}
				            	}
				            },
				            error: function(data)
				            {
				                console.log(data.responseJSON.message);
				                                       
				            }
			            });
				    }
				    else
				    {

				    }
				}
				else
				{
					alert("已经是最后一页了！");
				}
			},
			/* 向前翻页 */
			pageReturn: function() 
			{
				if(page.currentpage != 1)
				{
					/* 用于获取航班信息 */
					page_number = page_number - 1;
					page.currentpage = page.currentpage-1;
				    var setout = jQuery.url.param("setout");
				    var destination = jQuery.url.param("destination");
				    var setout_date = jQuery.url.param("setout_date");
				    var return_date = jQuery.url.param("return_date");
				    var type = jQuery.url.param("type");
				    if(type == "single")
				    {
			    		var jsondata = {
			              page: page_number,
			              size: page_lenght,
			              setOutCityName: setout,
			              arriveCityName: destination,
			              departureDate: setout_date
			            };
			            console.log(jsondata);
			            jQuery.ajax({
				            url: 'http://localhost:8081/Flight/getAllByCondition',  //向后台传输数据
				            type: 'get',
				            contentType: 'application/json;charset=UTF-8',
				            data: jsondata,
				            dataType:"json",
				            success: function(data)
				            {
				                console.log(data);
				                page.pagemessage = data.content;
				                flightshow.$data.flightlist = page.pagemessage;
				            	var i, j;
				            	for(i=0; i<page.pagemessage.length; i++)
				            	{
				            		for(j=0; j<1; j++)
				            		{
				            			flightshow.flightlist[i][j].arriveTime = flightshow.flightlist[i][j].arriveTime.substring(11, 16);
				            			flightshow.flightlist[i][j].departureTime = flightshow.flightlist[i][j].departureTime.substring(11, 16);
				            			console.log(flightshow.flightlist[i][j].arriveTime);
				            		}
				            	}
				            },
				            error: function(data)
				            {
				                console.log(data.responseJSON.message);
				                                       
				            }
			            });
				    }
				    else
				    {

				    }
				}
				else
				{
					alert("您已经处于首页了！");
				}
			}
		}
})

var flightshow = new Vue({
	el: '#project-container',
	data: 
		{
			flightlist: "",
			totalpage: "",
		},
		methods: {
			showData: function() 
			{
				/* 用于获取航班信息 */
			    var setout = jQuery.url.param("setout");
			    var destination = jQuery.url.param("destination");
			    var setout_date = jQuery.url.param("setout_date");
			    var return_date = jQuery.url.param("return_date");
			    var type = jQuery.url.param("type");
			    if(type == "single")
			    {
		    		var jsondata = {
		              page: page_number,
		              size: page_lenght,
		              setOutCityName: setout,
		              arriveCityName: destination,
		              departureDate: setout_date
		            };
		            console.log(jsondata);
		            jQuery.ajax({
			            // url: 'http://10.200.9.7:8081/Flight/getAllByCondition',
			            url: 'http://localhost:8081/Flight/getAllByCondition',  //向后台传输数据
			            type: 'get',
			            contentType: 'application/json;charset=UTF-8',
			            data: jsondata,
			            dataType:"json",
			            success: function(data)
			            {
			                console.log(data);
			                flightshow.flightlist = data.content;
			                flightshow.totalpage = data.totalPages;
			                page.$data.totalpage = flightshow.totalpage;
			                console.log(flightshow.flightlist);
			            	// console.log(flightshow.flightlist[0][0].arriveTime);
			            	// console.log(flightshow.flightlist[0][0].arriveTime.substring(11, 16));
			            	var i, j;
			            	for(i=0; i<flightshow.flightlist.length; i++)
			            	{
			            		for(j=0; j<1; j++)
			            		{
			            			flightshow.flightlist[i][j].arriveTime = flightshow.flightlist[i][j].arriveTime.substring(11, 16);
			            			flightshow.flightlist[i][j].departureTime = flightshow.flightlist[i][j].departureTime.substring(11, 16);
			            			console.log(flightshow.flightlist[i][j].arriveTime);
			            		}
			            	}
			            },
			            error: function(data)
			            {
			                console.log(data.responseJSON.message);
			                                       
			            }
		            });
			    }
			    else
			    {

			    }
			},
			/* 用于控制价格是否显示 */
			shownOrNot: function(todo)
			{
				if(jQuery("#"+todo[0].id).css("display") == "none")
				{
					jQuery("#"+todo[0].id).slideDown("slow");
					jQuery("#"+todo[0].id).prev().css("background", "rgb(255,255,255)");
				}
				else
				{
					jQuery("#"+todo[0].id).slideUp("slow");
					jQuery("#"+todo[0].id).prev().css("background", "rgb(1, 126, 186)");
				}
			},
			/* 用于进入订单填写页面 */
			jumpToOrderfull1: function(todo)
			{
				// alert("123");
				var date = jQuery.url.param("setout_date");
				date = date.replace(/\//g,  "-");
				date = date.substring(0, 5);
				console.log(date);
				var setout = jQuery.url.param("setout");
			    var destination = jQuery.url.param("destination");
			    var type = "特价经济舱";
			    var setout_time = todo[0].departureTime;
			    var arrive_time = todo[0].arriveTime;
			    var flight_time = todo[0].flightTime;
			    var setout_airport = todo[0].setOutAirport;
			    var arrive_airport = todo[0].arriveAirport;
			    var company = todo[0].plane.company.companyName;
			    var id = todo[0].sparpreisTicket.id;
			    var price = todo[0].sparpreisTicket.ticketPrice;
			    this.target = "_blank";
			    var url_date = "?date="+date+"&setout="+setout+"&destination="+destination
			    +"&type="+type+"&setout_time="+setout_time+"&arrive_time="+arrive_time
			    +"&flight_time="+flight_time+"&setout_airport="+setout_airport+
			    "&arrive_airport="+arrive_airport+"&company="+company+"&id="+id+"&price="+price;
			    // window.location.href="./orderfull.php"+url_date;
			    window.open("./orderfull.php"+url_date, "_blank");
			}
		}
	})
flightshow.showData();