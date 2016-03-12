$(".nav-pills a").click(function() {
        $(".nav-pills li").removeClass("active");
        $(this).parent().addClass("active");
        var thisContent = $(this).html();
    });
$("#chngName").click(function(){
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    $.ajax({
        type:"get",
        url:"./resources/scripts/script24.php",
        data:"fname="+fname+"&lname="+lname+"&user="+user,
        success:function(e){if(e){$("#result").html(e)}else{$("#result").html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+alert+'!</strong>'+alertmsg+'</div>')}},
        error:function(e){console.log(e)}
    })
})    