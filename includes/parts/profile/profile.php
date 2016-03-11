<?php
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../../resources/scripts/script21.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile/wordListP1.json');
echo <<<THIS
<div class="container" id="content">
<div class="row profCover">
  <div class="col-sm-8">
    <div class="w3-container profCoverStati">
        <div class="w3-half"><h2>145 Followers</h2></div>
        <div class="w3-half"><h2>329 Following</h2></div>
        <div class="w3-container"><button type="button" class="btn btn-profCover">Add as friend</button><br><br>
        <button type="button" class="btn btn-profCover">Send Message</button><br><br>
            <button type="button" class="btn btn-profCover">Poke</button></div>
        <hr>
        <h5 id="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam imperdiet nibh sed ex auctor porta. Praesent luctus consequat tortor nec malesuada.</h5>
      </div>
    </div>
    <div class="col-sm-4 profPic">
    <img class="img-responsive img-circle" src="./userdata/profilepics/default-profile-pic.jpg" alt="Chania" style="margin-top:15px;">
        <h2>$this_fname $this_lname</h2>
        <h5>Position, Company</h5>
        <hr/>
    </div>
        </div>
    
        
        <br>
    </div>
     <script>
         $(document).ready(function(){
    $(".nav-tabs a").click(function() {
        $(".nav-tabs li").removeClass("active");
        $(this).parent().addClass("active");
        var thisContent = $(this).html();
    });
             $("#post").focusin(function(){
        $(this).css("height",150);
        $(this).next().show();
    })
             $(function() { 
 $("html, body").animate({
    scrollTop: $(".profCover").offset().top}, 1000);
});      
         });
    </script>
THIS;
?>    
