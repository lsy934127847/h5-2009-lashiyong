<?php

require('./connect.php');

//创建数据库
// 创建数据库后建议关掉数据库重新打开
$sql = "CREATE DATABASE myshop";
$result = mysqli_query($conn,$sql);
if($result){
	echo "数据库创建成功";
}else{
	echo "数据库创建失败";
}

?>