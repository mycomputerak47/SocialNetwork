<body>

<nav class="navbar" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-align-justify" style="font-size:;color:white"></span>
      </button>
      <a class="navbar-brand" href="#"><?php print($this_network);?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li id="search-form">
         <input type="text" class="form-control"  placeholder="Search Something...">
         <span class="glyphicon glyphicon-search form-control-feedback"></span>
</li>
        
      </ul>
        <?php if(isset($_SESSION['id'])){ ?>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-home" ></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user" ></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-globe" ></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-refresh"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-wrench" ></span></a></li>
        <li><a href="./resources/scripts/logout.php"><span class="glyphicon glyphicon-log-in" ></span></a></li>
      </ul><?php }?>
    </div>
  </div>
</nav>