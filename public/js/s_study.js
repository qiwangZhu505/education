$(document).ready(function(){                            //响应html，从php取值返回到html页面
    var gread="";
    var subjects="";
    var week="";
    $("#gread").change(function(){
         gread=$("#gread").val();
         $.post("../php/s_study.php",{g:gread,s:subjects,w:week},function(information){
            $(".video").html(information);
        })
        return false;
    })

    $("#subjects").change(function(){
        subjects=$("#subjects").val();
        $.post("../php/s_study.php",{g:gread,s:subjects,w:week},function(information){
           $(".video").html(information);
       })
       return false;
   })

   $("#week").change(function(){
    week=$("#week").val();
    $.post("../php/s_study.php",{g:gread,s:subjects,w:week},function(information){
       $(".video").html(information);
   })
   return false;
})

    $.post("../php/s_study.php",{g:gread,s:subjects,w:week},function(information){
        $(".video").html(information);
    })
    return false;
    //$(".video").load("../php/s_study.php")


})