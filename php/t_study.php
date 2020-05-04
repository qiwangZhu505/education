<?php                                                  //教师端存储视频到数据库
session_start();
$session=$_SESSION["acc"];
header("refresh:0.1;url=../resouse/t_study.html");
include("sqlConnect.php");
$conn->query("set names'utf8'");
$conn->set_charset('utf8_general_ci');

$describe=isset($_POST["_describe"])? htmlspecialchars($_POST['_describe']) :'';

$img_location="../upload/".$_FILES["img_file"]["name"];
move_uploaded_file($_FILES["img_file"]["tmp_name"],$img_location);

$video_location="../upload/".$_FILES["v_file"]["name"];
move_uploaded_file($_FILES["v_file"]["tmp_name"],$video_location);

$gread = isset($_POST["gread"])? htmlspecialchars($_POST['gread']) :'';
$subjects = isset($_POST["subjects"])? htmlspecialchars($_POST['subjects']) :'';
$week = isset($_POST["week"])? htmlspecialchars($_POST['week']) :'';

$sql="INSERT into video(title,gread,subjects,week,v_source,img_source,t_id,_describe)
       values('$_POST[title]','$gread','$subjects','$week','$video_location','$img_location','$session','$describe')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('视频发布成功')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>