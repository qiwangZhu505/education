<?php
     header("refresh:0.1;url=../resouse/zhuce.html");
     $s_num = $s_name = $s_age = $s_gread = $s_pw = $s_sex = "";
     $s_gread=$_POST["s_gread"];
     $s_age=$_POST["s_age"];
     $s_sex=$_POST["s_sex"];
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
         if (empty($_POST["s_num"]))
         {
             echo "<script>alert('号码不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $s_num=$_POST["s_num"];
         }
         
         if (empty($_POST["s_name"]))
         {
            echo "<script>alert('姓名不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $s_name=$_POST["s_name"];
         }
         
         if (empty($_POST["s_pw"]))
         {
            echo "<script>alert('密码不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $s_pw=$_POST["s_pw"];
         }
     }
     include("sqlconnect.php");
     $sql="INSERT into student(id,_name,age,gread,pw,sex)
           values('$s_num','$s_name','$s_age','$s_gread','$s_pw','$s_sex')";
     $result=mysqli_query($conn,$sql);
     if ($result) {
        echo "<script>alert('注册成功')</script>";
        return false;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }
    
    mysqli_close($conn);

?>