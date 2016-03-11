$(document).ready(function(){
    $(".up_nav_tab a").click(function() {
        $(".up_nav_tab li").removeClass('active');
        $(this).parent().addClass('active');
        var thisContent = $(this).html();
        /*$.ajax({
           type:"get" ,
            data:"page="+thisContent,
            url:"./includes/parts/profile_pg.php",
            success:function(i){if(i){$("#content").html(i)}else{}}
        });*/
        
    });
    
    $("#post").focusin(function(){
        $(this).css("height",150);
        $(this).next().show();
    })
    
    $("#Unfriend").click(function(){
        alert('shs');
    })
});