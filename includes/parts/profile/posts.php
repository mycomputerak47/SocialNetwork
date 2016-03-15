<?php 
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../imp/checkLoggedIn.php';
require_once __DIR__.'/../../../resources/scripts/script11.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile.json');
$var077 = json_decode($this_page_words,TRUE);

echo <<<THIS
<div class="w3-container">
        <div class="row">
            <div class="col-sm-5">
            <div class="panel-group">
            <br/><script>
                  $("#post").focusin(function(){
        $(this).css("height",150);
        $(this).next().show();
    });
    </script>
    <script>
    $("#postbtn").click(function(){
    var postBody = $("#post").val();
    var postBy = "{$l_uname}";
    var postTo = "{$this_uname}";
        $.ajax({
        type:"get",
        url:"./resources/scripts/script23.php",
        data:"postBody="+postBody+"&postBy="+postBy+"&postTo="+postTo,
        success:function(e){if(e)$("#postResult").html(e)},
        error: function(e) {
       console.log(e.message);
    }
        });
    });
    </script>
            <input type="text" class="form-control" id="post" placeholder="{$var077['shareSomething']}">
                <div style="display:none;margin-top:2px;" class="w3-row">
    <div class="w3-col" style="width:70%"><p><input type="text" class="form-control" id="tags" placeholder="{$var077['addTags']}" ></p></div>
    <div class="w3-col" style="width:30%;"><p><span><button class="btn btn-submit" style="display:non" id="postbtn">{$var077['share']}</button></span></p><p id="postResult"></p></div></div>
</div>
            </div>
            <div class="col-sm-7">
            
                <hr>
    
                
                
THIS;
require_once __DIR__.'  /../../../resources/scripts/script22.php';
?>            </div>
        </div>
        </div>

