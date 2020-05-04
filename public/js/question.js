$(document).ready(function(){
    $(".d_main").load("../php/dialog.php") 
    $(".d_main").scrollTop($(".d_main")[0].scrollHeight);                           
    $("#button").click(function(){
        var write=$("#write").val();
        $("#write").val("");                                             //清空输入框
        $.post("../php/question.php",{text:write},function(information){
            $(".d_main").html(information)
            $(".d_main").scrollTop($(".d_main")[0].scrollHeight);                            //使滚轮焦点保持在底部
        });      
        return false;
    })    
})