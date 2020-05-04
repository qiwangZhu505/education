<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>周老板课堂</title>
    <link rel="icon" type="image/x-icon" href="../public/img/favicon.ico">
    <link type="text/css" rel="stylesheet" href="../public/css/mainpage.css">
    <link type="text/css" rel="stylesheet" href="../public/css/lunbo.css">
    <script type="text/javascript" src="../public/js/jquery.js"></script>
    <script type="text/javascript" src="../public/js/login.js"></script>
    <script type="text/javascript" src="../public/js/lunbo.js"></script>
    <script type="text/javascript" src="../public/js/btn_info.js"></script>
</head>
<body>
    <?php
    session_start();
    if(!empty($_SESSION["acc"]))                             
    $session=$_SESSION["acc"];                                   //传递登录信息  $session为用户名          
    if(!empty($_SESSION["type"]))                             
    $session_type=$_SESSION["type"];   
    if(isset($_GET["link"]))
    {
    unset($_SESSION["acc"]);
    unset($_SESSION["type"]);
    $url = 'index.php';
    header("Location:$url");
}
    ?>
<div>
    <div class="top_login_main">                                 <!--弹出登录框-->   
        <div class="top_login_div"></div>     <!--半透明背景-->    
        <div id="login_id">                   <!--登录框-->
            <a href="#"><img id="login_close" src="../public/img/close.png"></a>
            <form action="userlogin.php" method="POST" id="user_login">
                <input type="text" class="userlogin" id="num" name="num" placeholder="请输入账号（手机号码）">
                <input type="text" class="userlogin" id="password" name="password" placeholder="请输入密码">
                <div class="user_type">
                    <input type="radio" class="" id="user_type" name="user_" value="student">学生
                    <input type="radio" class="" id="user_type" name="user_" value="teacher">老师
                </div>             
                <input type="submit" class="userloginbtn" id="user_login_btn" value="登录">
            </form>
        </div>
    </div>
    <div class="top">                                             <!--头部登录注册-->
        <div class="top_center">
            <a href="#"><img src="../public/img/education.png"></a>
            <div class="dc">
                <?php
                include("sqlConnect.php");
                 if(!empty($_SESSION["acc"]))
                 {
                     $accsql=mysqli_query($conn,"select _name from $session_type where id=$session;");
                     $accrow=mysqli_fetch_object($accsql);
                  echo " <a href='#'><div class='user_name' id='btn_info'>$accrow->_name</div></a>
                       ";
                 }else{
                ?>
                <a href="#"><div class="dc_div" id="denglu">登录</div></a>
                <a href="../resouse/zhuce.html" target="_block"><div class="dc_div" id="zhuce">注册</div></a>
                <?php
                } 
                ?>
            </div>
            <div class="user_name" id="per_info">                                        <!--弹出用户信息管理-->
                 <div class="user_name" id="jiantou"></div>                             <!--弹出框的尖头-->
                 <?php 
                  if($session_type=="student"){
                    $result=mysqli_query($conn,"select * from $session_type where id=$session");
                    $row=mysqli_fetch_object($result);
                    if($row->sex=="male"){
                        $sex="男";
                    }else{
                        $sex="女";
                    }
                    echo "账号：$row->id<br>
                          姓名：$row->_name<br>
                          年龄：$row->age<br>
                          性别：$sex<br>
                          年级：$row->gread<br>
                          <a href='index.php?link=logoff' style='border:1px solid gray;border-radius:5px'>退出登录</a>&nbsp;&nbsp;
                          <a href='../resouse/s_update.html' target='_blank' style='border:1px solid gray;border-radius:5px'>修改信息</a>
                          <br><br>
                         ";
                  }else if($session_type=="teacher"){
                    $result=mysqli_query($conn,"select * from $session_type where id=$session");
                    $row=mysqli_fetch_object($result);
                    if($row->sex=="male"){
                        $sex="男";
                    }else{
                        $sex="女";
                    }
                    echo "账号：$row->id<br>
                          姓名：$row->_name<br>
                          年龄：$row->age<br>
                          性别：$sex<br>
                          大学：$row->coloege<br>
                          科目：$row->subjects<br>
                          <a href='index.php?link=logoff' style='border:1px solid gray;border-radius:5px'>退出登录</a>&nbsp;&nbsp;
                          <a href='../resouse/t_update.html' target='_blank' style='border:1px solid gray;border-radius:5px'>修改信息</a>
                          <br><br>
                         ";
                    }                                
                 ?>
            </div>                                       
        </div> 
    </div> 
    <div class="main">
        <div id="slide">                                               <!--背景轮播-->
            <ul class="pic-list">
                <li><img src="../public/img/1561701869914.jpg"></li>
                <li><img src="../public/img/1562921969578.jpg"></li>
                <li><img src="../public/img/156292200647.jpg"></li>
                <li><img src="../public/img/1561701869914.jpg"></li>
            </ul>
            <div class="btn next">&gt;</div>
            <div class="btn prev">&lt;</div>
            <ul class="icon-list">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="three_box "></div>
        <div class="box_center">
            <?php
            $source_1="worning.php";
            $source_2="worning.php";
            if(!empty($_SESSION["type"])){
                $session_type=$_SESSION["type"];
                if($session_type=="student"){
                    $source_1="../resouse/s_study.html";
                    $source_2="../resouse/question.html";
                }else if($session_type=="teacher"){
                    $source_1="../resouse/t_study.html";
                    $source_2="../resouse/question.html";
                }  
            }
            echo "<a href=$source_1 target='_blank'><div>学习模块</div></a>
                  <a href=$source_2 target='_blank'><div>解疑答惑</div></a>";
            ?>
        </div>
    </div>
</div>
</body>
</html>