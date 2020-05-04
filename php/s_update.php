<?php
session_start();
header("refresh:0.1;url=index.php");
$session=$_SESSION["acc"];
include("sqlConnect.php");
if(isset($_POST["s_name"])){
    $name=$_POST["s_name"];
    $result=mysqli_query($conn,"UPDATE student set _name='$name' where id=$session");
    echo "姓名修改成功<br>";
}  
if(isset($_POST["s_age"])){
    $age=$_POST["s_age"];
    $result=mysqli_query($conn,"UPDATE student set age=$age where id=$session");
    echo "年龄修改成功<br>";
} 
if(isset($_POST["s_gread"])){
    $gread=$_POST["s_gread"];
    $result=mysqli_query($conn,"UPDATE student set gread=$gread where id=$session");
    echo "年级修改成功<br>";
} 
if(isset($_POST["s_pw"])){
    $pw=$_POST["s_pw"];
    $result=mysqli_query($conn,"UPDATE student set pw=$pw where id=$session");
    echo "密码修改成功<br>";
} 
if(isset($_POST["s_sex"])){
    $sex=$_POST["s_sex"];
    $result=mysqli_query($conn,"UPDATE student set sex='$sex' where id=$session");
    echo "性别修改成功<br>";
}  
unset($_SESSION["acc"]);
unset($_SESSION["type"]);
mysqli_close($conn);
?>