<?php
     header("refresh:0.1;url=../resouse/zhuce.html");
     $t_num = $t_name = $t_age = $t_coloege = $t_pw = $t_sex=$t_subject = "";
     $t_coloege=$_POST["t_coloege"];
     $t_subject=$_POST["t_subject"];
     $t_age=$_POST["t_age"];
     $t_sex=$_POST["t_sex"];
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
         if (empty($_POST["t_num"]))
         {
             echo "<script>alert('号码不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $t_num=$_POST["t_num"];
         }
         
         if (empty($_POST["t_name"]))
         {
            echo "<script>alert('姓名不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $t_name=$_POST["t_name"];
         }
         
         if (empty($_POST["t_pw"]))
         {
            echo "<script>alert('密码不能为空！');location.href='../resouse/zhuce.html'</script>";
         }
         else
         {
             $t_pw=$_POST["t_pw"];
         }
     }
     include("sqlconnect.php");
     $sql="INSERT into teacher(id,_name,age,coloege,subjects,pw,sex)
           values('$t_num','$t_name','$t_age','$t_coloege','$t_subject','$t_pw','$t_sex')";
     $result=mysqli_query($conn,$sql);
     if ($result) {
        echo "<script>alert('注册成功')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>