<?php
session_start();
header("refresh:0.1;url=../resouse/question.html");
include("sqlConnect.php");
if(!empty($_SESSION["acc"]))                       //获取用户id以便显示姓名               
    $session=$_SESSION["acc"];                      
if(!empty($_SESSION["type"]))                        //显示用户是学生还是老师，决定访问什么数据库                          
    $type=$_SESSION["type"];
if(!empty($_POST["text"])){
    $text=$_POST["text"];
}
$time= date("Y-m-d H:i:s");
$rel=mysqli_query($conn,"SELECT * from  $type where id='$session'"); 
$row=mysqli_fetch_object($rel);                                    

$result=mysqli_query($conn,"INSERT into question(user,q_text,q_time) 
                     values('$row->_name','$text','$time') ");


$result=mysqli_query($conn,"SELECT * from question");
while($rows=mysqli_fetch_object($result)){
    echo "      <li style='list-style-type: none;margin:0;padding:10px;position:relative'>
                    <div style='width:760px;margin:0;padding:0;position:relative'>
                        <div style='width:100px;height:40px;position:relative;margin:0;padding:0'>
                        $rows->user:
                          <p style='font-size:8px;margin:0;padding:0'>$rows->q_time</p>
                        </div>
                        <div style='position:relative;left:100px;top:0px;margin:0;padding:0'>
                            <div style='width:auto;height:auto;border:1px solid rgb(98, 100, 100);background-color:rgb(86, 201, 216);
                              word-wrap: break-word;word-break: break-all;margin:0;padding:0;border-radius:10px;color:white'>
                               $rows->q_text
                            </div>
                         </div>          
                    </div>
                </li>
        ";
}


mysqli_close($conn)
?>