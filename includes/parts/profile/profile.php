<?php
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../../resources/scripts/script11.php';
require_once __DIR__.'/../../../resources/scripts/script30.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile.json');
$var076 = json_decode($this_page_words,TRUE);
if( $addfr_btn == 1){
    //exit();
$addOrRemove  = $var076['addAsFriend'];
$addorremove_btn = $var076['addfrbtn'];    
}
elseif($this_uname == $l_uname){
    $addOrRemove  = '<style>#addfrbtn,#unfriendbtn,#sendmsgbtn,#pokebtn{display:none}</style>';
    $addorremove_btn = 'addfrbtn';
}
elseif($addfr_btn == 0){
 
    $addOrRemove  = $var076['unriend'];
    $addorremove_btn = $var076['unfriendbtn'];
}
else{//do nothing
}
echo <<<THIS
<div class="container" id="content">
<div class="row profCover">
  <div class="col-sm-8">
    <div class="w3-container profCoverStati">
        
        <div class="w3-container">
        <div class="w3-half"><button type="button" class="btn btn-profCover" id="{$addorremove_btn}">{$addOrRemove}</button><br><br>
        <button type="button" class="btn btn-profCover" id="sendmsgbtn">{$var076['sendMessage']}</button><br><br>
            <button type="button" class="btn btn-profCover" id="pokebtn">{$var076['poke']}</button></div>
            <div class="w3-half">
        <h2>145 {$var076['followers']} </h2>
        <br>
        <h2>329 {$var076['following']}</h2>
            </div>
            </div>
        <hr>
        <h5 id="about">{$this_about}</h5>
      </div>
    </div>
    <div class="col-sm-4 profPic">
    <img class="img-responsive img-circle" src="./userdata/profilepics/{$this_profilepic}" alt="Chania" style="margin-top:15px;">
        <h2>$this_fname $this_lname</h2>
        <h5>Position, Company</h5>
        <hr/>
        {$var076['username']} : {$this_uname}
    </div>
        </div>
    
        
        <br>
    </div>
     
THIS;
?>    
