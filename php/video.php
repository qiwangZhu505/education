<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/img/favicon.ico">
    <title>视频单页</title>
    <link rel="stylesheet" type="text/css" href="../public/css/video1.css">
</head>
<body>
<?php
include("sqlConnect.php");
if(!empty($_GET["video_id"])){
    $video_id=$_GET["video_id"];
    $result=mysqli_query($conn,"SELECT * from video where id='$video_id'");
    $row=mysqli_fetch_object($result);
    $title=$row->title;
    $v_src=$row->v_source;
    $describe=$row->_describe;

    $rel=mysqli_query($conn,"SELECT * from teacher where id='$row->t_id'");             //查找视频上传者的信息
        $rows=mysqli_fetch_object($rel);
    $coloege=$rows->coloege;
    $name=$rows->_name;
}
?>
<div class="head">
        <img src="../public/img/timg.jpg">
</div>
<div class="body">
    <div class="video"> 
        <h3>标题：<?php echo "$title" ?></h3>    
        <video width="900" height="450" controls>
            <source src="<?php echo $v_src ?>" type="video/mp4">
            <source src="<?php echo $v_src ?>" type="video/ogg">
              您的浏览器不支持Video标签。
        </video><br>
        <span>作者：<?php echo $name ?></span>&nbsp;&nbsp;&nbsp;
        <span>学校：<?php echo $coloege?></span>
        <P>简介：<?php echo $describe ?></P>
    </div>
</div>

</body>
</html>