$(document).ready(function()
{
    /* 用于实现城市的日期选择 */
    var cityPicker = new HzwCityPicker({
        data: data,
        target: 'setout',
        valType: 'k-v',
        hideCityInput: {
            name: 'city',
            id: 'city'
        },
        hideProvinceInput: {
            name: 'province',
            id: 'province'
        },
        callback: function(){
                
        }
    });
    cityPicker.init();

    var cityPicker1 = new HzwCityPicker({
        data: data,
        target: 'destination',
        valType: 'k-v',
        hideCityInput: {
            name: 'city',
            id: 'city'
        },
        hideProvinceInput: {
            name: 'province',
            id: 'province'
        },
        callback: function(){
                
        }
    });
    cityPicker1.init();

    $.scrollUp({
        scrollName: 'scrollUp',      // Element ID
        scrollDistance: 300,         // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',           // 'top' or 'bottom'
        scrollSpeed: 300,            // Speed back to top (ms)
        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
        animation: 'fade',           // Fade, slide, none
        animationSpeed: 200,         // Animation speed (ms)
        scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
        scrollText: 'Scroll to top', // Text for element, can contain HTML
        scrollTitle: false,          // Set a custom <a> title if required.
        scrollImg: true,             // Set true to use image
        activeOverlay: true,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        zIndex: 2147483647           // Z-Index for the overlay
    });

    /* 用于控制单程从双程的返回日期控件是否可以点击 */
    $("#round, #single").click(function()
    {
        console.log("In radio");
        if($('#round').is(':checked'))
        {
            $("#clender").attr("disabled", false);
        }
        else
        {
            $("#clender").attr("disabled", true);
            $("#clender").val("");
        }
    });

    /* 用于实现航班查询 */
    $("#serch-flight").click(function()
    {
        // alert();
        var single_ok = $('#single').is(':checked');
        var round_ok = $('#round').is(':checked');
        var setout = $('#setout').val();
        var destination = $("#destination").val();
        var setout_date = $("#datepicker").val();
        var return_date = $("#clender").val();
        /* test */
        console.log(single_ok);
        console.log(round_ok);
        console.log(setout);
        console.log(destination);
        console.log(setout_date);
        console.log(return_date);
        if(setout && destination && setout_date)
        {
            if(single_ok)
            {
                window.location.href="./flight.php?"+"setout="+setout+"&destination="
                                            +destination+"&setout_date="+setout_date
                                            +"&type="+"single";
            }
            else if(round_ok)
            {
                window.location.href="./flight.php?"+"setout="+setout+"&destination="
                                            +destination+"&setout_date="+setout_date
                                            +"&return_date="+return_date+"&type="+"round";
            }
            else
            {
                alert("请输入完整的信息");
            }
        }
        else
        {
            alert("请输入完整的信息");
        }
    });
});