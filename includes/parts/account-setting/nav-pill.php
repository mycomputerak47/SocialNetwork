<?php
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/account_setting.json');
$var091 = json_decode($this_page_words,TRUE);
echo <<<THIS
<div class='container'>
<div class="row">
  <div class="col-sm-4">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#" title="account-setting">{$var091['general']}</a></li>
    <li><a href="#" title="about">{$var091['about']}</a></li>
    <li><a href="#" class="label label-danger" title="dangerZone">{$var091['dangerZone']}</a></li>
    
  </ul>
  </div>
  <script>var user = '{$l_uname}'</script>
  <div class="col-sm-8" id="content">
THIS;
?>