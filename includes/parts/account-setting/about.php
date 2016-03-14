<?php 
require_once __DIR__.'/../../imp/get_connection_details.php';
require_once __DIR__.'/../../imp/checkLoggedIn.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/account_setting.json');
$var092 = json_decode($this_page_words,TRUE);
require_once __DIR__.'/../../../resources/scripts/script12.php';

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
      <button type="submit" class="btn btn-default btn-submit" id="chngGender">{$var092['update']}</button>
  </div>
<hr/ >
<label for="none">{$var092['uraddress']}:</label><br>
<form class="form-inline" role="form">
  <div class="form-group">
    <label for="street">{$var092['street']}:</label>
    <input type="text" class="form-control" id="street" value="{$l_street}">
  </div>
  <div class="form-group">
    <label for="zip">{$var092['zip']}:</label>
    <input type="text" class="form-control" id="zip" value="{$l_zip}">
  </div>
  
  </div><br><br>
  <form class="form-inline" role="form">
  <div class="form-group">
    <label for="city">{$var092['city']}:</label>
    <input type="text" class="form-control" id="city" value="{$l_city}">
  </div>
  <div class="form-group">
    <label for="state">{$var092['state']}:</label>
    <input type="text" class="form-control" id="state" value="{$l_state}">
  </div>
  </div>
  <br><br>
  <form class="form-inline" role="form">
  <div class="form-group">
    <label for="country">{$var092['country']}:</label>
    <input type="text" class="form-control" id="country" value="{$l_country}">
  </div>
  <button type="submit" class="btn btn-default btn-submit">{$var092['update']}</button>
  </div>
</form>
<hr/>

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
<script src="js/account-setting.js"></script>
THIS;
?>