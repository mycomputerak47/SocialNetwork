<?php
require_once(__DIR__.'/includes/imp/get_connection_details.php');
require_once(__DIR__.'/includes/imp/checkLoggedIn.php');
$title='Account Settings';
include_once __DIR__.'/includes/parts/head.php';
include_once __DIR__.'/includes/parts/header.php';
$this_page_words = file_get_contents(__DIR__.'/components/'.$language.'/pages/account_setting.json');
$var091 = json_decode($this_page_words,TRUE);

echo <<<THIS

<div class='container'>
<div class="row">
  <div class="col-sm-4">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">{$var091['general']}</a></li>
    <li><a href="#">{$var091['about']}</a></li>
    <li><a href="#" class="label label-danger">{$var091['dangerZone']}</a></li>
    
  </ul>
  </div>
  <div class="col-sm-8">
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
<script>var user = '{$l_uname}';var success = '{$var091['success']}';var successmsg = '{$var091['actionSuccess']}';var alert = '{$var091['alert']}';var alertmsg = '{$var091['alertmsg']}';</script>            
<script src="js/account-setting.js"></script>
THIS;
?>