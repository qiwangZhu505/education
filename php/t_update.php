<?php
session_start();
header("refresh:0.1;url=index.php");
$session=$_SESSION["acc"];
include("sqlConnect.php");
if(isset($_POST["t_name"])){
    $name=$_POST["t_name"];
    $result=mysqli_query($conn,"UPDATE teacher set _name='$name' where id=$session");
    echo "姓名修改成功<br>";
}  
if(isset($_POST["t_age"])){
    $age=$_POST["t_age"];
    $result=mysqli_query($conn,"UPDATE teacher set age=$age where id=$session");
    echo "年龄修改成功<br>";
} 
if(isset($_POST["t_coloege"])){
    $coloege=$_POST["t_coloege"];
    $result=mysqli_query($conn,"UPDATE teacher set coloege='$coloege' where id=$session");
    echo "学校修改成功<br>";
} 
if(isset($_POST["t_subject"])){
    $subjects=$_POST["t_subject"];
    $result=mysqli_query($conn,"UPDATE teacher set subjects='$subjects' where id=$session");
    echo "学科修改成功<br>";
}
if(isset($_POST["t_pw"])){
    $pw=$_POST["t_pw"];
    $result=mysqli_query($conn,"UPDATE teacher set pw=$pw where id=$session");
    echo "密码修改成功<br>";
} 
if(isset($_POST["s_sex"])){
    $sex=$_POST["s_sex"];
    $result=mysqli_query($conn,"UPDATE teacher set sex='$sex' where id=$session");
    echo "性别修改成功<br>";
} 
unset($_SESSION["acc"]);
unset($_SESSION["type"]); 
mysqli_close($conn);
?>