$(".login-form").submit(function(){
    var u = $("#uname").val();
    var p = $("#password").val();
$.ajax({
   type:'post',
    url:"./../resources/scripts/login.php",
    data:"user="+u+"&pass="+p,
    beforeSend:function(){$("#login_btn").val("executing");},
    success:function(e){if(e){$("#alert").html(e)}else{$("#alert").html("error")}}
});
    return false;
})
