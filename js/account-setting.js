$(".nav-pills a").click(function() {
        $(".nav-pills li").removeClass("active");
        $(this).parent().addClass("active");
        var thisContent = $(this).html();
    });
//loads this page
$(".nav-pills a").click(function(){
        var whichPAGE = $(this).attr('title');
        //alert(whichPAGE);
        $.ajax({
            type:"get",
            url:"./includes/parts/account-setting/"+whichPAGE+".php",
            data:"u="+user,
            success:function(e){$("#content").html(e);}
        });
    });
$("#chngName").click(function(){
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    $.ajax({
        type:"GET",
        url:"./resources/scripts/script24.php",
        data:"fname="+fname+"&lname="+lname+"&user="+user,
        success:function(e){if(e){$("#result").html(e)}else{$("#result").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+alert+'!</strong>'+alertmsg+'</div>')}},
        error:function(e){console.log(e)}
    });
});
    
$("#chngabout").click(function(){
    var about = $("textarea#statusBox").val();
    $.ajax({
        type:"GET",
        url:"./resources/scripts/script25.php",
        data:"about="+about+"&user="+user,
        success:function(e){if(e){$("#result").html(e)}else{$("#result").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+alert+'!</strong>'+alertmsg+'</div>')}},
        error:function(e){console.log(e)}
    });  
});

$("#chngpro").click(function(){
    alert('hurrah')
});

//change gender
$("#chngGender").click(function(){
    var gender = $("#gender").val();
    
    $.ajax({
        type:"GET",
        url:"./resources/scripts/script27.php",
        data:"gender="+gender+"&user="+user,
        success:function(e){if(e){$("#result").html(e)}else{$("#result").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+alert+'!</strong>'+alertmsg+'</div>')}},
        error:function(e){console.log(e)}
    });  
});
