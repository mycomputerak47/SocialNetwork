$(document).ready(function(){
    $(".up_nav_tab a").click(function() {
        $(".up_nav_tab li").removeClass('active');
        $(this).parent().addClass('active');
        var thisContent = $(this).html();
    });
    
    $("#post").focusin(function(){
        $(this).css("height",150);
        $(this).next().show();
    })
    
    $("#Unfriend").click(function(){
        alert('shs');
    })
    
    //selection of page from nav tabs
    $(".nav-tabs a").click(function(){
        var whichPAGE = $(this).html();
        //alert(whichPAGE);
        $.ajax({
            type:"get",
            url:"./includes/parts/profile/"+whichPAGE+".php",
            data:"i=1",
            success:function(e){$("#content").html(e);}
        })
    })
});