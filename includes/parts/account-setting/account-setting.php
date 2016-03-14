<?php
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../imp/checkLoggedIn.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/account_setting.json');
$var091 = json_decode($this_page_words,TRUE);
if($l_about == ''){
    $l_about = $var091['statusBox'];
}
echo <<<THIS
  
  <div id="result"></div>
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var091['fname']}:</label>
  <input type="text" class="form-control" id="fname" value="{$l_fname}">
</div>
<div class="form-group">
    <label for="pwd">{$var091['lname']}:</label>
    <input type="text" class="form-control" id="lname"  value="{$l_lname}">
  </div>
      <button type="submit" class="btn btn-default btn-submit" id="chngName">{$var091['update']}</button>
  </div>
<hr/ >
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var091['status']}:</label>
   <textarea class="form-control" rows="4" cols="39" id="statusBox">{$l_about}</textarea>
</div>
      <button type="submit" class="btn btn-default btn-submit" id="chngabout">{$var091['update']}</button>
  </div>
<hr/>
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var091['profilePic']}:</label>
  <form enctype="multupart/form-data">
  <input type="file" accept="image/*" name=""></form>
</div>
      <button type="submit" class="btn btn-default btn-submit" id="chngpro">{$var091['update']}</button>
  </div>
<br/>
  </div>
</div>
</div>
<style>
.btn-submit{min-width: 100px;}
            .btn-submit:focus{outline: 0;}
            .btn-submit:hover{
                background-color: #FA8B60;
                color: aliceblue;
                
            }
            </style>
<script>var user = '{$l_uname}';</script>            

THIS;
?>