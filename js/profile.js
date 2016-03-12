$(document).ready(function(){
    $(".nav-tabs a").click(function() {
        $(".nav-tabs li").removeClass("active");
        $(this).parent().addClass("active");
        var thisContent = $(this).html();
    });
    
             $(function() { 
 $("html, body").animate({
    scrollTop: $(".profCover").offset().top}, 1000);
}); 
    
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
            data:"u="+this_user,
            success:function(e){$("#content").html(e);}
        })
    })
    
    
});
