/*
$(document).ready(function(){
    $("#button").click(function(){
        var zwy=$('#text').val();
       $.post("zhuce.php",{name:zwy},function(information){
            
           $(".main").html(information);
            console.log("显示");
        });
        return false;

        
    })
})
*/
$(document).ready(function(){
    $("#student").click(function(){
        $("#zhuce_student").css("display","block");
        $("#student").css("background-color","rgb(58, 197, 221)");
        $("#zhuce_teacher").css("display","none");
        $("#teacher").css("background-color","rgb(148, 222, 228)");
    });
    $("#teacher").click(function(){
        $("#zhuce_teacher").css("display","block");
        $("#teacher").css("background-color","rgb(58, 197, 221)");
        $("#zhuce_student").css("display","none");
        $("#student").css("background-color","rgb(148, 222, 228)");
    })
})