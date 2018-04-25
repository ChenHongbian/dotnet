<?php
session_start();
/* 连接SQLServer数据库 */
require("./sqlconnect.php");
/* 通过POST接收来自JS的数据 */
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$username = $data["username"];
$password = $data["password"];
$result = 0;

$sql2 = "SELECT * from  userlogin where username = '$username' ";  //查找是否已有该用户名
$info2 = sqlsrv_query($conn, $sql2);
if($row = sqlsrv_fetch_array($info2))
{
    $result=0;  //如果用户名已经存在
}
else  //如果用户名不存在，则返回
{
  $sql = "INSERT into userlogin(username,password)values('$username','$password')";
  $info = sqlsrv_query($conn,$sql);
  if($info)
  {
    $result=1;
  }
}

/* 返回给JS数据 */
echo json_encode($result);
?>