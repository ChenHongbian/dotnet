var orderDetail = new Vue({
	el: '#order-detail',
	data: {
		orderDetails:"",
		totalPrice:"",
	},
	methods: {
		getOrderDetail: function()
		{
			jQuery.ajax({
				url: 'http://localhost:8081/User/getAllOrders',  //向后台传输数据
			    type: 'GET',
			    contentType: 'application/json;charset=UTF-8',
			    success: function(data)
			    {
			    	orderDetail.orderDetails = data;
			      	console.log(orderDetail.orderDetails);
			    },
			    error: function(data)
			    {
			     	console.log(data);                   
			    }
			});
		}
	}
})
orderDetail.getOrderDetail();