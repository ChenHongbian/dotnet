$(document).ready(function()
{
	/* 订单成交数统计 */
	var orderDeal = echarts.init(document.getElementById('orderDeal'));
	option = {
		title: {
			text: "订单成交数统计"
		},	
		toolbox: {
	        feature: {
	            saveAsImage: {}
	        }
    	},
    	dataZoom: [
        {
            show: true,
            realtime: true,
            start: 0,
            end: 100
        },
        {
            type: 'inside',
            realtime: true,
            start: 0,
            end: 100
        }],
	    xAxis: {
	        type: 'category',
	        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
	    },
	    yAxis: {
	        type: 'value'
	    },
	    series: [{
	    	itemStyle: {
	    		normal: {
	    			color: "#00BCD4",
	    			lineStyle: {
	    				color: "#00BCD4"
	    			}
	    		}
	    	},
	    	areaStyle: {
	    		normal: {
	    			color: "#00BCD4"
	    		}
	    	},
	        data: [820, 932, 901, 934, 1290, 1330, 1320],
	        type: 'line'
	    }]
	};
	orderDeal.setOption(option);

	/* 月平均销售额统计 */
	var salesVolume = echarts.init(document.getElementById('salesVolume'));
	option = {
		title: {
			text: "月平均销售额统计"
		},	
		toolbox: {
	        feature: {
	            saveAsImage: {}
	        }
    	},
	    xAxis: {
	        type: 'category',
	        data: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月']
	    },
	    yAxis: {
	        type: 'value'
	    },
	    series: [{
	    	itemStyle: {
	    		normal: {
	    			color: "#8BC34A",
	    			lineStyle: {
	    				color: "#8BC34A"
	    			}
	    		}
	    	},
	    	areaStyle: {
	    		normal: {
	    			color: "#8BC34A"
	    		}
	    	},
	        data: [820, 932, 901, 934, 1290, 1330, 1320, 1542, 1452, 1234, 589, 1879],
	        type: 'bar'
	    }]
	};
	salesVolume.setOption(option);

	/* 热门城市统计 */
	var hotCity = echarts.init(document.getElementById('hotCity'));
	var app = {};
	var cellSize = [80, 80];
	var pieRadius = 30;

	function getVirtulData() {
	    var date = +echarts.number.parseDate('2018-03-01');
	    var end = +echarts.number.parseDate('2018-04-01');
	    var dayTime = 3600 * 24 * 1000;
	    var data = [];
	    for (var time = date; time < end; time += dayTime) {
	        data.push([
	            echarts.format.formatTime('yyyy-MM-dd', time),
	            Math.floor(Math.random() * 10000)
	        ]);
	    }
	    return data;
	}

	function getPieSeries(scatterData, chart) {
	    return echarts.util.map(scatterData, function (item, index) {
	        var center = chart.convertToPixel('calendar', item);
	        return {
	            id: index + 'pie',
	            type: 'pie',
	            center: center,
	            label: {
	                normal: {
	                    formatter: '{c}',
	                    position: 'inside'
	                }
	            },
	            radius: pieRadius,
	            data: [
	                {name: '北京', value: Math.round(Math.random() * 24)},
	                {name: '昆明', value: Math.round(Math.random() * 24)},
	                {name: '上海', value: Math.round(Math.random() * 24)}
	            ]
	        };
	    });
	}

	function getPieSeriesUpdate(scatterData, chart) {
	    return echarts.util.map(scatterData, function (item, index) {
	        var center = chart.convertToPixel('calendar', item);
	        return {
	            id: index + 'pie',
	            center: center
	        };
	    });
	}

	var scatterData = getVirtulData();

	option = {
	    title: {
			text: "热门城市统计"
		},	
		toolbox: {
	        feature: {
	            saveAsImage: {}
	        }
    	},
	    legend: {
	        data: ['北京', '昆明', '上海'],
	        bottom: 20
	    },
	    calendar: {
	        top: 'middle',
	        left: 'center',
	        orient: 'vertical',
	        cellSize: cellSize,
	        yearLabel: {
	            show: false,
	            textStyle: {
	                fontSize: 30
	            }
	        },
	        dayLabel: {
	            margin: 20,
	            firstDay: 1,
	            nameMap: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六']
	        },
	        monthLabel: {
	            show: false
	        },
	        range: ['2018-03']
	    },
	    series: [{
	        id: 'label',
	        type: 'scatter',
	        coordinateSystem: 'calendar',
	        symbolSize: 1,
	        label: {
	            normal: {
	                show: true,
	                formatter: function (params) {
	                    return echarts.format.formatTime('dd', params.value[0]);
	                },
	                offset: [-cellSize[0] / 2 + 10, -cellSize[1] / 2 + 10],
	                textStyle: {
	                    color: '#000',
	                    fontSize: 14
	                }
	            }
	        },
	        data: scatterData
	    }]
	};
	hotCity.setOption(option);

	if (!app.inNode) {
	    var pieInitialized;
	    setTimeout(function () {
	        pieInitialized = true;
	        hotCity.setOption({
	            series: getPieSeries(scatterData, hotCity)
	        });
	    }, 10);

	    app.onresize = function () {
	        if (pieInitialized) {
	            hotCity.setOption({
	                series: getPieSeriesUpdate(scatterData, hotCity)
	            });
	        }
	    };
	}

	/* 热门航线统计 */
	var data = genData(50);

	var hotAirline = echarts.init(document.getElementById('hotAirline'));
	option = {
	    title : {
	        text: '热门航线统计',
	        subtext: '每周'
	    },
	    toolbox: {
	        feature: {
	            saveAsImage: {}
	        }
    	},
	    tooltip : {
	        trigger: 'item',
	        formatter: "{a} <br/>{b} : {c} ({d}%)"
	    },
	    legend: {
	        type: 'scroll',
	        orient: 'vertical',
	        right: 10,
	        top: 20,
	        bottom: 20,
	        data: data.legendData,

	        selected: data.selected
	    },
	    series : [
	        {
	            name: '姓名',
	            type: 'pie',
	            radius : '55%',
	            center: ['40%', '50%'],
	            data: data.seriesData,
	            itemStyle: {
	                emphasis: {
	                    shadowBlur: 10,
	                    shadowOffsetX: 0,
	                    shadowColor: 'rgba(0, 0, 0, 0.5)'
	                }
	            }
	        }
	    ]
	};
	hotAirline.setOption(option);

	function genData(count) {
	    var nameList = [
	        '赵', '钱', '孙', '李', '周', '吴', '郑', '王', '冯', '陈', '褚', '卫', '蒋', '沈', '韩', '杨', '朱', '秦', '尤', '许', '何', '吕', '施', '张', '孔', '曹', '严', '华', '金', '魏', '陶', '姜', '戚', '谢', '邹', '喻', '柏', '水', '窦', '章', '云', '苏', '潘', '葛', '奚', '范', '彭', '郎', '鲁', '韦', '昌', '马', '苗', '凤', '花', '方', '俞', '任', '袁', '柳', '酆', '鲍', '史', '唐', '费', '廉', '岑', '薛', '雷', '贺', '倪', '汤', '滕', '殷', '罗', '毕', '郝', '邬', '安', '常', '乐', '于', '时', '傅', '皮', '卞', '齐', '康', '伍', '余', '元', '卜', '顾', '孟', '平', '黄', '和', '穆', '萧', '尹', '姚', '邵', '湛', '汪', '祁', '毛', '禹', '狄', '米', '贝', '明', '臧', '计', '伏', '成', '戴', '谈', '宋', '茅', '庞', '熊', '纪', '舒', '屈', '项', '祝', '董', '梁', '杜', '阮', '蓝', '闵', '席', '季', '麻', '强', '贾', '路', '娄', '危'
	    ];
	    var legendData = [];
	    var seriesData = [];
	    var selected = {};
	    for (var i = 0; i < 50; i++) {
	        name = Math.random() > 0.65
	            ? makeWord(4, 1) + '·' + makeWord(3, 0)
	            : makeWord(2, 1);
	        legendData.push(name);
	        seriesData.push({
	            name: name,
	            value: Math.round(Math.random() * 100000)
	        });
	        selected[name] = i < 6;
	    }

	    return {
	        legendData: legendData,
	        seriesData: seriesData,
	        selected: selected
	    };

	    function makeWord(max, min) {
	        var nameLen = Math.ceil(Math.random() * max + min);
	        var name = [];
	        for (var i = 0; i < nameLen; i++) {
	            name.push(nameList[Math.round(Math.random() * nameList.length - 1)]);
	        }
	        return name.join('');
	    }
	}
});