<?php 
session_start();
require("sqlconnect.php");

$user=$_GET['username'];
$phone=$_GET['phone'];
$password=$_GET['password'];
$option=$_GET['option'];
$result=0;

$sql2 = "SELECT * from  login where username='$user' ";//查找是否已有该用户名
$info2 = sqlsrv_query($conn,$sql2);
if($row=sqlsrv_fetch_array($info2)){
    $result=2;//用户名已经存在
}else{//不存在
if($option=="check"){
    $result=1;
}
else{
    $sql = "INSERT into login(username,password,phone)values('$user','$password','$phone')";
    $info = sqlsrv_query($conn,$sql);
  if($info){
    $result=1;
  }
 }
}

echo json_encode($result);
?>