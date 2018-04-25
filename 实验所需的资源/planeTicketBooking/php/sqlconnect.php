<?php  
	$serverName = "localhost"; //数据库服务器地址
	$username = "lee";     //数据库用户名
	$password = "123456"; //数据库密码
	$connectionInfo = array("UID"=>$username, "PWD"=>$password, "Database"=>"TICKET");
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn == false)
	{
	    //echo "连接失败！";
	    var_dump(sqlsrv_errors());
	    exit;
	}
	else{
	    //echo "链接成功";
	}
?>