$(document).ready(function(){
    $(".user_name").mouseenter(function(){
        $("#per_info").css("display","block")
    })
    $(".user_name").mouseleave(function(){
        $("#per_info").css("display","none")
    })
})