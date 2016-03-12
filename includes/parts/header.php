<?php
$this_page_words = file_get_contents(__DIR__.'/../../components/'.$language.'/pages/wordList01.json');
$var080 = json_decode($this_page_words,TRUE);
echo <<<THIS
<body>
<nav class="navbar" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-align-justify" style="font-size:;color:white"></span>
      </button>
      <a class="navbar-brand" href="index.php">{$this_network}</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li id="search-form">
         <input type="text" class="form-control"  placeholder="{$var080['searchSomething']}">
         <span class="glyphicon glyphicon-search form-control-feedback"></span>
</li>
        
      </ul>
THIS;
if(isset($_SESSION['id'])){
echo <<<THIS
      <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-home" ></span></a></li>
          <li><a href="{$l_uname}"><span class="glyphicon glyphicon-user" ></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-globe" ></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-refresh"></span></a></li>
          <li><a href="account_setting.php"><span class="glyphicon glyphicon-wrench" ></span></a></li>
        <li><a href="./resources/scripts/logout.php"><span class="glyphicon glyphicon-log-in" ></span></a></li>
      </ul>
    
THIS;
}
?>
</div>
  </div>
</nav>