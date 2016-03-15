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
            data:"u="+this_user+"&l_uname="+me_user,
            success:function(e){$("#content").html(e);}
        });
    });
//unfriend
$("#unfriendbtn").click(function(){
    
        $.ajax({
            type:"get",
            url:"./resources/scripts/script31.php",
            data:"this_user="+this_user+"&me_user="+me_user+"&this_use="+this_user,
            cache:false,
            success:function(e){if(e){alert(e)}else(alert('huiiah'))},
            error:function(e){console.log(e)}
        })
                                  })
    
});
