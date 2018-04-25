<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>机场名称设置</title>
    <!-- Favicon-->
    <link rel="icon" href="../../images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<!-- 新增按钮 模态框 started -->
<div class="modal fade" id="newAirport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="newAirport">新增机场信息</h4>
      </div>
      <div class="modal-body">
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="机场名称" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="password" class="form-control" placeholder="所属城市" />
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>
<!-- #end# 新增按钮 模态框 -->

<body class="theme-indigo">
    <?php
        require_once("../topbar.html");
    ?>
    <section>
        <?php
            require_once("../leftbar.html");
        ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    机场名称设置
                </h2>
            </div>
            <!-- 机场信息展示 表格 start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header" style="padding-bottom: 40px;">
                            <div class="col-md-6">
                                <h2>
                                    机场信息展示
                                </h2> 
                            </div>
                            <div class="col-md-1 col-md-offset-5">
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#newAirport">
                                    添加
                                </button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>城市编号</th>
                                            <th>城市名称</th>
                                            <th>机场名称</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>城市编号</th>
                                            <th>城市名称</th>
                                            <th>机场名称</th>
                                            <th>操作</th>     
                                        </tr>
                                    </tfoot>
                                    <tbody id="airport_message">
                                        <!-- <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>
                                                <div class="col-md-6" style="margin-bottom: 0px;">
                                                    Edinburgh
                                                </div>
                                                <div class="col-md-6"  style="margin:-4px 0px 0px 0px;">
                                                    <button type="button" class="btn bg-green waves-effect">
                                                    修改
                                                    </button>
                                                    <button type="button" class="btn bg-red waves-effect">
                                                        删除
                                                    </button>
                                                </div>
                                                
                                            </td>
                                        </tr> -->
                                        <tr v-for="item in message">
                                            <td>{{item.id}}</td>
                                            <td>{{item.cityName}}</td>
                                            <td>{{item.airportName}}</td>
                                            <td style="text-align:center;">
                                                <div class="col-md-6"  style="margin:-4px 0px 0px 0px;">
                                                    <button type="button" class="btn bg-green waves-effect">
                                                    修改
                                                    </button>
                                                    <button type="button" class="btn bg-red waves-effect">
                                                        删除
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# 机场信息展示 表格 -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/Vue.js"></script>
    <script type="text/javascript" src="../../js/Vue.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
    <script type="text/javascript">
        var airportManage = new Vue({
            el:"#airport_message",
            data:
            {
                message:""
            },
            methods:
            {
                getCityMessage:function()
                {
                    jQuery.ajax({
                        url: 'http://localhost:8081/City/getAll',  //向后台传输数据
                        type: 'GET',
                        contentType: 'application/json;charset=UTF-8',
                        success: function(data)
                        {
                            airportManage.message = data;
                            console.log(city.message);
                        },
                        error: function(data)
                        {
                            console.log(data);                   
                        }
                    });
                }
            }
        })
        airportManage.getCityMessage();
    </script>
</body>

</html>