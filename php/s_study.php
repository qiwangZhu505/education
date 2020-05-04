<?php                                              //在学习页面显示视频缩略图
include("sqlConnect.php");

$g=$_POST["g"];
$s=$_POST["s"];
$w=$_POST["w"];

if($g==""&&$s==""&&$w==""){                                                      //判断查找视频的条件
    $sql="SELECT * from video";
}else if($g!=""&&$s==""&&$w==""){
    $sql="SELECT * from video where gread=$g";
}else if($g==""&&$s!=""&&$w==""){
    $sql="SELECT * from video where subjects='$s'";
}else if($g==""&&$s==""&&$w!=""){
    $sql="SELECT * from video where week='$w'";
}else if($g!=""&&$s!=""&&$w==""){
    $sql="SELECT * from video where gread=$g and subjects='$s'";
}else if($g!=""&&$s==""&&$w!=""){
    $sql="SELECT * from video where gread=$g and week='$w'";
}else if($g==""&&$s!=""&&$w!=""){
    $sql="SELECT * from video where subjects='$s' and week='$w'";
}else if($g!=""&&$s!=""&&$w!=""){
    $sql="SELECT * from video where gread=$g and subjects='$s' and week='$w'";
}

   $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_object($result)){
        $rel=mysqli_query($conn,"SELECT * from teacher where id='$row->t_id'");                       //查找上传该视频的教师的姓名以及毕业院校，在视频下方显示
        $rows=mysqli_fetch_object($rel);
      echo "<li style='position:relative;width:260px;height:210px;margin:5px 7px 15px;float:left'>      
                <div style='width:260px;height:150px;position:relative'>
                    <a href='../php/video.php?video_id=$row->id' target='_blank'>
                       <img style='width:260px;height:150px;border-radius:8px' src='$row->img_source'>
                    </a>                            
                </div>
                    <p style='margin:0;padding:0'>$row->title</p>
                    <p style='color:gray'>$rows->coloege&nbsp;|&nbsp;$rows->_name</p>
           </li>";
    } 
 
?>