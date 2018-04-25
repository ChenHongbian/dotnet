<!-- 航班展示模块 -->
<div id="flightDetail" v-for="todo in flightlist" @click="shownOrNot(todo)">
<div class="flight-child">
    <div class="span9 offer element branding" id="flight-detail">
        <figure style="background: white;">
            <div style="width: 261px;height: 162px;">
                <div style="padding: 50px 0 0 50px">
                    <!-- <img :src="todo.img" style="width:30px;height:30px;"> -->
                    <img src="./img/company/chinaCompany.gif" style="width:30px;height:30px;">
                    <span style="font-family: 'Microsoft YaHei';color:rgb(51, 51, 51);font-size:20px;padding-left:10px;">{{todo[0].plane.company.companyName}}
                    </span>
                </div>
                <div style="color:rgb(136, 136, 136);font-family: 'Microsoft YaHei';font-size:14px;">
                    <span style="padding-left: 95px;">{{todo[0].flightNum}}</span>
                    <span>{{todo[0].plane.planeType}}</span>
                </div>
            </div>
        </figure>
        <article style="font-family: 'Microsoft YaHei';margin:0px;">
            <div style="width:100%;height: 152px;">
                <div style="width:35%;float:left;text-align:right;margin-top:35px;">
                    <h2 style="color:rgb(51, 51, 51);">{{todo[0].departureTime}}</h2>
                    <p>{{todo[0].setOutAirport}}</p>
                </div>
                <div style="width:30%;float:left;">
                    <p style="text-align:center;margin:0px;padding-top:30px;">{{todo[0].flightTime}}</p>
                    <img src="./img/line.png">
                </div>
                <div style="width:35%;float:left;margin-top:35px;">
                    <h2 style="color:rgb(51, 51, 51);">{{todo[0].arriveTime}}</h2>
                    <p>{{todo[0].arriveAirport}}</p>
                </div>
            </div>                                        
        </article>
        <div :id="todo[0].sparpreisTicket.ticketPrice+todo[0].id" class="price">
            <h3 style="line-height: 151px;">￥{{todo[0].sparpreisTicket.ticketPrice}}</h3>
        </div>
        <div :id="todo[0].id" class="panel panel-default container" style="border:none;font-family: 'Microsoft YaHei';display:none;">
            <div class="panel-body row" style="padding:0px;text-align:center;">
                <div class="col-md-3" style="padding: 10px 15px 10px 15px;border-right: 1px solid #ebebeb;">
                    <div class="col-md-12">
                        <h4>特价票</h4>
                        <span style="font-family:'Microsoft YaHei';font-size:20px;color:#0088cc">￥{{todo[0].sparpreisTicket.ticketPrice}}</span>
                    </div>
                    <div class="col-md-12"> 
                        <button :id="todo[0].sparpreisTicket.ticketPrice+todo[0].id+1" type="button" class="btn btn-warning" @click.capture="jumpToOrderfull1(todo)">
                            预订
                        </button>
                    </div>    
                </div>
                <div class="col-md-2" style="padding: 10px 15px 10px 15px;border-right: 1px solid #ebebeb;">
                    <div class="col-md-12">
                        <h4>经济舱</h4>
                        <span style="font-family:'Microsoft YaHei';font-size:20px;color:#0088cc">￥{{todo[0].touristClassTicket.ticketPrice}}</span>
                    </div>
                    <div class="col-md-12"> 
                        <button :id="todo[0].touristClassTicket.ticketPrice+todo[0].id+2" type="button" class="btn btn-warning"@click="jumpToOrderfull2(todo)">
                            预订
                        </button>
                    </div>    
                </div>
                <div class="col-md-3" style="padding: 10px 15px 10px 15px;">
                    <div class="col-md-12">
                        <h4>头等舱</h4>
                        <span style="font-family:'Microsoft YaHei';font-size:20px;color:#0088cc">￥{{todo[0].firstClassCabinTicket.ticketPrice}}</span>
                    </div>
                    <div class="col-md-12"> 
                        <button :id="todo[0].firstClassCabinTicket.ticketPrice+todo[0].id+3" type="button" class="btn btn-warning"@click="jumpToOrderfull3(todo)">
                            预订
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- 航班展示模块结束 -->
</div>