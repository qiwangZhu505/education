<?php
session_start();
header("refresh:1;url=index.php");
include("sqlConnect.php");
$num=$_POST["num"];
$password=$_POST["password"];
$user=@$_POST["user_"];
if(empty($user)){
    echo "<script>alert('请选择用户类别')</script>";
}
if($user=="student"){
    $sql="SELECT * from $user where id=$num";
    $res=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($res);
     if ($result) {
        if($result["pw"]==$password){
            echo "<script>alert('登录成功')</script>";
            $_SESSION['acc']=$result["id"];
            $_SESSION['type']="student";
        }else{
            echo "<script>alert('密码错误')</script>";
        }
    } else {
        echo "<script>alert('用户不存在')</script>";
    }
};
if($user=="teacher"){
    $sql="SELECT * from $user where id=$num";
    $res=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($res);
     if ($result) {
        if($result["pw"]==$password){
            echo "<script>alert('登录成功')</script>";
            $_SESSION['acc']=$result["id"];
            $_SESSION['type']="teacher";
        }else{
            echo "<script>alert('密码错误')</script>";
        }
    } else {
        echo "<script>alert('用户不存在')</script>";
    }
};
mysqli_close($conn);

?>