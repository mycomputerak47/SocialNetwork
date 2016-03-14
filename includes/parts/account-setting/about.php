<?php 
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../imp/checkLoggedIn.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/account_setting.json');
$var092 = json_decode($this_page_words,TRUE);


echo <<<THIS
  
  <div id="result"></div>
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var092['gender']}:</label>
  <select class="form-control" id="gender">
    <option value="{$var092['male']}">{$var092['male']}</option>
    <option value="{$var092['female']}">{$var092['female']}</option>
    <option value="{$var092['other']}">{$var092['other']}</option>
  </select>
</div>
<div class="form-group">
    <label for="pwd">{$var092['lname']}:</label>
    <input type="text" class="form-control" id="lname"  value="{$l_lname}">
  </div>
      <button type="submit" class="btn btn-default btn-submit" id="chngName">{$var092['update']}</button>
  </div>
<hr/ >
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var092['status']}:</label>
   <textarea class="form-control" rows="4" cols="39" id="statusBox">{$l_about}</textarea>
</div>
      <button type="submit" class="btn btn-default btn-submit" id="chngabout">{$var092['update']}</button>
  </div>
<hr/>
<div class="form-inline">  
  <div class="form-group">
  <label for="usr">{$var092['profilePic']}:</label>
  <form enctype="multupart/form-data">
  <input type="file" accept="image/*" name=""></form>
</div>
      <button type="submit" class="btn btn-default btn-submit" id="chngpro">{$var092['update']}</button>
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