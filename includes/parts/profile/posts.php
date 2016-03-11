<?php 
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../../resources/scripts/script21.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile/wordListP1.json');
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
    });</script>
            <input type="text" class="form-control" id="post" placeholder="Share something...">
                <div style="display:none;margin-top:2px;" class="w3-row">
    <div class="w3-col" style="width:70%"><p><input type="text" class="form-control" id="tags" placeholder="Add tags" ></p></div>
    <div class="w3-col" style="width:30%;"><p><span><button class="btn btn-submit" style="display:non" id="postbtn">Share</button></span></p></div></div>
  <!--<div class="panel">
      <div class="panel-heading">Recent Photos</div>
      <div class="panel-body">
      <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
       <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
      </div>
    </div>-->
    <!--<div class="panel">
      <div class="panel-heading">Friends</div>
      <div class="panel-body">
                <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
          <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80">
       <img src="images/connectivity.jpg" class="img-thumbnail" alt="Cinque Terre" width="80" height="80"></div>
    </div>-->
</div>
            </div>
            <div class="col-sm-7">
            
                <hr>
    <div class="posts">
        <img src="userdata/profilepics/default-profile-pic.jpg" width="40" height="40"><span>Lorem Ispum</span>&nbsp;&nbsp;<small class="text-muted">21-12-2016</small>
        <div >
            Mauris dolor nulla, venenatis in placerat eu, congue vitae massa. Proin ultricies vulputate fringilla. Sed non velit ac nibh suscipit convallis. Aliquam erat volutpat. Vivamus tempus massa non turpis auctor, a scelerisque nunc aliquet. Morbi ultricies, erat non consequat posuere, orci mi rhoncus urna, a semper magna lorem a eros. Nulla facilisi. Mauris vehicula ex sed tortor tempor, quis blandit mauris aliquet. Aliquam quis turpis et ante aliquam ornare. Morbi eu sapien orci.
        </div>
        <div class="well well-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></div>
                </div><br><br>
                <div class="posts">
        <img src="userdata/profilepics/default-profile-pic.jpg" width="40" height="40"><span>Lorem Ispum</span>&nbsp;&nbsp;<small class="text-muted">21-12-2016</small>
        <div >
            Mauris dolor nulla, venenatis in placerat eu, congue vitae massa. Proin ultricies vulputate fringilla. Sed non velit ac nibh suscipit convallis. Aliquam erat volutpat. Vivamus tempus massa non turpis auctor, a scelerisque nunc aliquet. Morbi ultricies, erat non consequat posuere, orci mi rhoncus urna, a semper magna lorem a eros. Nulla facilisi. Mauris vehicula ex sed tortor tempor, quis blandit mauris aliquet. Aliquam quis turpis et ante aliquam ornare. Morbi eu sapien orci.
        </div>
        <div class="well well-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></div>
                </div><br><br>
                <div class="posts">
        <img src="userdata/profilepics/default-profile-pic.jpg" width="40" height="40"><span>Lorem Ispum</span>&nbsp;&nbsp;<small class="text-muted">21-12-2016</small>
        <div >
            Mauris dolor nulla, venenatis in placerat eu, congue vitae massa. Proin ultricies vulputate fringilla. Sed non velit ac nibh suscipit convallis. Aliquam erat volutpat. Vivamus tempus massa non turpis auctor, a scelerisque nunc aliquet. Morbi ultricies, erat non consequat posuere, orci mi rhoncus urna, a semper magna lorem a eros. Nulla facilisi. Mauris vehicula ex sed tortor tempor, quis blandit mauris aliquet. Aliquam quis turpis et ante aliquam ornare. Morbi eu sapien orci.
        </div>
        <div class="well well-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></div>
                </div><br><br>
                <div class="posts">
        <img src="userdata/profilepics/default-profile-pic.jpg" width="40" height="40"><span>Lorem Ispum</span>&nbsp;&nbsp;<small class="text-muted">21-12-2016</small>
        <div >
            Mauris dolor nulla, venenatis in placerat eu, congue vitae massa. Proin ultricies vulputate fringilla. Sed non velit ac nibh suscipit convallis. Aliquam erat volutpat. Vivamus tempus massa non turpis auctor, a scelerisque nunc aliquet. Morbi ultricies, erat non consequat posuere, orci mi rhoncus urna, a semper magna lorem a eros. Nulla facilisi. Mauris vehicula ex sed tortor tempor, quis blandit mauris aliquet. Aliquam quis turpis et ante aliquam ornare. Morbi eu sapien orci.
        </div>
        <div class="well well-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></div>
                </div><br><br>
            </div>
        </div>
        </div>
THIS;
?>