/* 用于控制显示订单的长度 */
var orderNum = 1;
var date = jQuery.url.param("date");
var setout = jQuery.url.param("setout");
var destination = jQuery.url.param("destination");
var type = jQuery.url.param("type");
var setoutTime = jQuery.url.param("setout_time");
var arriveTime= jQuery.url.param("arrive_time");
var flightTime= jQuery.url.param("flight_time");
var setoutAirport= jQuery.url.param("setout_airport");
var arriveAirport= jQuery.url.param("arrive_airport");
var company= jQuery.url.param("company");
var price= jQuery.url.param("price");
var orderfullshow = new Vue({
  el: '#orderdetail',
  data: {
      /* 计算机票价格 */  
    priceCalculate:{
      totalPrice: parseInt(price)+parseInt(50),
      adultPrice: parseInt(price), adultCount: 1,
      childPrice: parseInt(price*0.7), childCount: 0,
      babyPrice: parseInt(price*0.5), babyCount: 0,
      buildPrice: 50
    }
    },
    methods:{
      showData:function () 
      {
        // jQuery.ajax({
        //   url: 'http://202.113.125.101:8080/Ticket/getTicketsByCondition/天津/四川/2017-06-23/2017-06-23',
        //   type: 'get',
        //   contentType: 'application/json;charset=UTF-8',
        //   success: function(data){ 
        //     orderfullshow.datas = data;
        //     console.log(orderfullshow.datas);
        //   },
        //   error: function(data){
        //     alert("error");
        //   }
        // });
      },
      totalPriceCalculate: function()
      {
        var totalPrice = orderfullshow.priceCalculate.adultPrice*orderfullshow.priceCalculate.adultCount 
        + orderfullshow.priceCalculate.childPrice*orderfullshow.priceCalculate.childPrice
        + orderfullshow.priceCalculate.babyPrice*orderfullshow.priceCalculate.childCount
        + orderfullshow.priceCalculate.buildPrice*orderfullshow.priceCalculate.adultCount;
        // this.$delete(orderfullshow.priceCalculate, 'totalPrice');
        // this.$set(orderfullshow.priceCalculate.totalPrice, , 123);
        // this.$nextTick(function(){});
        orderfullshow.priceCalculate.totalPrice = 123;
        console.log(orderfullshow.priceCalculate);
      }
    }
  })
orderfullshow.showData();
orderfullshow.totalPriceCalculate();

var nameList = new Vue(
{
  el: '#passager-detail',
  data: {
    /* 获取历史乘客信息 */
    // passagerMessages:[
    // { name:"段北山", id:530111199604232013, phoneNum:13132002278 },
    // { name:"李世杰", id:362229199707300057, phoneNum:17612289657 }
    // ],
    passagerMessages:"",
    /* 设置乘客信息输入数组，数组长度为定长9 */
    messageFull:[
    {
      id:1, iden:"",
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:true 
    },
    {
      id:2, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:3, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:4, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:5, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:6, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:7, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:8, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    },
    { 
      id:9, iden:"", 
      name:"", passagerType:"成人", 
      idCard:"", phoneNum:"", 
      price:"", show:false 
    }
    ]
  },
    methods:
    {
      getHistoryPassager:function()
      {
        jQuery.ajax({
          url: 'http://localhost:8081/User/getAllPassengers',  //向后台传输数据
          type: 'get',
          contentType: 'application/json;charset=UTF-8',
          success: function(data)
          {
            console.log(data);
            nameList.passagerMessages = data;
          },
          error: function(data)
          {
            console.log(data);                   
          }
        });
      },
      fullPassagerMessage: function(item)
      {
        for(var i=0; i<9; i++)
        {
          if(nameList.messageFull[i].name == "" && nameList.messageFull[i].show == true)
          {
             nameList.messageFull[i].name = item.name;
             nameList.messageFull[i].idCard = item.identity;
             nameList.messageFull[i].phoneNum = item.phoneNum;
             nameList.messageFull[i].iden = item.id;
             break;
          }
        }
      },
      addOrder: function()
      {
        if(orderNum < 9)
        {
          nameList.messageFull[orderNum++].show = true;
        }
        else
          alert("一个订单最多添加九个乘客！");
      },
      deleteOrder: function(item)
      {
        if(item.id != 1)
        {
          for(var i=0; i<8; i++)
          {
            if(nameList.messageFull[i].show == true && nameList.messageFull[i+1].show == false)  
            {
              nameList.messageFull[i].show = false;
              nameList.messageFull[i].name = "";
              nameList.messageFull[i].idCard = "";
              nameList.messageFull[i].phoneNum = "";
              orderNum--;
              break;
            }  
          }
          if(item.id == 9)
          {
            nameList.messageFull[i].show = false;
            nameList.messageFull[i].name = "";
            nameList.messageFull[i].idCard = "";
            nameList.messageFull[i].phoneNum = "";
            orderNum--;
          }
        }
        else
        {
          nameList.messageFull[0].name = "";
          nameList.messageFull[0].idCard = "";
          nameList.messageFull[0].phoneNum = "";
        }
      },
      getType: function(item)
      {
        console.log(jQuery("#passagerType").val());  
        item.passagerType = jQuery("#passagerType").val();
        if(item.id == 1)
        {
          if(item.passagerType == "儿童(2-12岁)")
          {
            orderfullshow.$data.adultCount--;
            orderfullshow.$data.childCount++;
            orderfullshow.totalPriceCalculate();
          }
        }
      },
      submitOrder: function()
      {
        /* 定义用户订单传输格式 */
        var orderData =
        {
          totalPrice: 0,
          lineitems: 
          [
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            },
            {
              passenger: 
              { 
                id: null, identity: '', name: '', phoneNum: '', type: '' 
              },
              ticket:
              {
                id: 0
              },
              ticketPrice: 0
            }
          ]
        };
        /* end orderdata */
        /* 给用户订单数组赋值 */
        orderData.totalPrice = 10000;
        for(var i=0; i<9; i++)
        {
          orderData.lineitems[i].passenger.id = nameList.messageFull[i].iden;
          orderData.lineitems[i].passenger.identity = nameList.messageFull[i].idCard;
          orderData.lineitems[i].passenger.name = nameList.messageFull[i].name;
          orderData.lineitems[i].passenger.phoneNum = nameList.messageFull[i].phoneNum;
          orderData.lineitems[i].passenger.type = nameList.messageFull[i].passagerType;
          orderData.lineitems[i].ticket.id = jQuery.url.param("id");
          orderData.lineitems[i].ticketPrice = nameList.messageFull[i].price;
        }
        console.log(orderData);
        jQuery.ajax({
          // url: 'http://localhost:8081/Orders',  //向后台传输数据
          url: 'http://localhost:8081/Orders',  //向后台传输数据
          type: 'post',
          contentType: 'application/json;charset=UTF-8',
          data: JSON.stringify(orderData),
          success: function(data)
          {
            console.log(data);
            window.location.href = "./order.php";
          },
          error: function(data)
          {
            console.log(data);                   
          }
        });
      }
    }
})
nameList.getHistoryPassager();