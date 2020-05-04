<?php
/*
$servername = "localhost";                                                               //创建数据库
$username = "root";
$password = "19970715";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
// 创建数据库
$sql = "CREATE DATABASE education";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
 
mysqli_close($conn);

include("sqlConnect.php");                                                           //创建学生信息表
$sql="CREATE table student(
    id varchar(12) primary key,
    s_name varchar(30) not null,
    age int(6),
    gread varchar(30),
    pw varchar(30),
    sex varchar(10)
)";
if(mysqli_query($conn,$sql)){
    echo "数据表student创建成功";
}else{
    echo "创建数据表错误:".mysqli_error($conn);
}
mysqli_close($conn);

include("sqlConnect.php");                                                           //创建教师信息表
$sql="CREATE table teacher(
    id varchar(12) primary key,
    t_name varchar(30) not null,
    age int(6),
    coloege varchar(10),
    subjects varchar(30),
    pw varchar(30),
    sex varchar(10)

)";
if(mysqli_query($conn,$sql)){
    echo "数据表teacher创建成功";
}else{
    echo "创建数据表错误:".mysqli_error($conn);
}
mysqli_close($conn);

include("sqlConnect.php");                                                           //创建学习视频信息表
$sql="CREATE table video(
    id smallint(6) primary key,
    title varchar(30) not null,
    gread smallint(6),
    subjects varchar(10),
    source varchar(30),
    unit smallint(6),
    t_id varchar(30),
    describe varchar(255)
)";
if(mysqli_query($conn,$sql)){
    echo "数据表video创建成功";
}else{
    echo "创建数据表错误:".mysqli_error($conn);
}
mysqli_close($conn);
*/

include("sqlConnect.php");                                                           //创建聊天信息表
$sql="CREATE table question(
    id smallint(6) primary key,
    user varchar(30) not null,
    q_text text,
    q_time datetime
)";
if(mysqli_query($conn,$sql)){
    echo "数据表question创建成功";
}else{
    echo "创建数据表错误:".mysqli_error($conn);
}
mysqli_close($conn);
?>