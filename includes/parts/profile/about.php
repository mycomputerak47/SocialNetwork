<?php
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../imp/checkLoggedIn.php';
require_once __DIR__.'/../../../resources/scripts/script11.php';
require_once __DIR__.'/../../../resources/scripts/script13.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile.json');
$var077 = json_decode($this_page_words,TRUE);


echo <<<THIS
<div class="container" id="content">
<div class="row ">
  <div class="col-sm-8">

<div class="well well-lg">
    <p class="text-info">{$var077['basicInfo']} </p>
<div class="row">
  <div class="col-sm-6">
    {$var077['fname']} : {$this_fname}<br>
    {$var077['lname']} : {$this_lname}
    </div>
  <div class="col-sm-6">
    {$var077['uname']} : {$this_uname}<br>
      {$var077['DOB']} : Facility to be developed yet
    </div>
</div>
</div>

<div class="well well-lg">
    <p class="text-info"> {$var077['contactDetails']}</p>
<div class="row">
  <div class="col-sm-6">
    {$this_street}, {$this_city},<br/> {$this_state}, {$this_country}<br/>{$this_zip}
    </div>
  <div class="col-sm-6">
    
    </div>
</div>
</div>
<!----->
</div></div></div>
THIS;
?>