<!doctype html>
<!--[if IE 7]>    <html class="ie7" > <![endif]-->
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 9]>    <html class="ie10" > <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!--> 
<html lang="en-US"> <!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- Title -->
    <title>航班展示</title>
    <!-- Style Sheet-->
<!--     <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="css/image.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
    <body>

    <?php
    require_once("./pagemodule/header.php");
    ?>
               <!-- Grid page -->
               <div class="content">
                <div class="container">
                    <div class="row">
                        <!-- slider -->
                        <div class="span3" id="sidebar">
                            <div id="widget_accordion" style="font-family: '微软雅黑';">
                                <h3> 全程预约保障 去哪儿都放心 <a href="#"></a></h3>
                                <div class="widget">
                                    <div class="scrollbar1">
                                        <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                                        <div class="viewport">
                                            <div class="overview">
                                                <ul>
                                                    <li><a href="#">Camera</a> <span>(9)</span></li>
                                                    <li><a href="#">Notebook </a> <span>(16)</span></li>
                                                    <li><a href="#">Tablet </a> </li>
                                                    <li><a href="#">Television </a> </li>
                                                    <li><a href="#">Smart Phone </a> </li>
                                                    <li><a href="#">Projection </a> </li>
                                                    <li><a href="#">Tablet </a> </li>
                                                    <li><a href="#">Television </a> </li>
                                                    <li><a href="#">Smart Phone </a> </li>
                                                    <li><a href="#">Projection </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3> 低价航线推荐 <a href="#"></a></h3>
                                <div class="widget">
                                    <form>
                                        <select>
                                            <option>$100 - $ 500</option>
                                            <option>$500 - $ 1000</option>
                                        </select>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- slider end -->
                        <div class="span9 right_content">
                            <!-- fliter -->
                            <div class="row">
                                <div class="portfolio-nav span9 clearfix">
                                    <strong>筛选:</strong>
                                    <ul class="option-set clearfix form-inline" data-option-key="filter">
                                        <li>
                                            <a href="#filter" data-option-value="*"  class="selected">起飞时间</a>
                                        </li>
                                        <li>
                                            <a href="#filter" data-option-value=".branding" >航空公司 </a>
                                        </li>
                                        <li>
                                            <a href="#filter" data-option-value=".price" >舱位</a>
                                        </li>
                                        <li>
                                            <a href="#filter" data-option-value=".star" >机型</a>
                                        </li>
                                        <!--  
                                        <li><a href="#filter" data-option-value=".rate" >直飞</a></li>
                                        -->
                                        <li>
                                            <label>
                                            <input type="checkbox" name="forward">
                                            直飞
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <span class="border"></span>
                                </div>
                            </div>
                            <!-- slider end -->

                            <div id="project-container" class="row travel_lest">
                                <?php
                                require_once("./pagemodule/flight_template.php");
                                ?>
                            </div>
                            
                            <span class="border"></span>
                            
                            <div id="page-control" class="pagination clearfix">
                                <p>页面<a href="#"> {{currentpage}} </a>总页数   <a href="#">{{totalpage}}</a></p>
                                <div class="errows">
                                    <a id="prev-page" class="left_errow" @click="pageReturn()"></a>
                                    <a id="next-page" class="right_errow" @click="pageTurn()"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End by sort -->
                    </div>
                </div>
             </div>
            <!-- Grid page -->

    <?php
    require_once("./pagemodule/footer.php");
    ?>

    <?php
    require_once("./pagemodule/scrollup.php");
    ?>

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
        <script src="js/flight.js"></script>  
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.elastislide.js"></script>
    <script src="js/jcarousellite_1.0.1.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.tinyscrollbar.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- 用于置顶的插件 -->
    <script src="js/custom.js"></script>	
    <!-- 用于地址解析 -->
    <script src="js/jQuery.URL.Parse.js"></script>
    <script src="js/Vue.js"></script>
    <script src="js/Vue.min.js"></script>
    <script src="js/flight_vue.js"></script>
</body>
</html>