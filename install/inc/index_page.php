<body>    
<div id="wrapper">
    <div class="header" title="SocialNetwork">
        <p class="logo">SocialNetwork</p>
    </div>
    <div class="welcome-box" title="welcome-box">
        <?php print($error); 
    ?>
    
        <h2 class="text-warning"><abbr>Welcome</abbr></h2><h4>to SocialNetwork</h4><br/>
        <h4 class="text-muted">An open Source Social Network for you<br/>
            This wizard will guide you to install and configure SocialNetwork for you.</h4>
        <hr/>
        <form role="form" id="select_language" action="index.php" method="get">
            <input type="hidden" name="installed" value="yes"/>
            <input type="hidden" name="date" value="<?php print(date('d-m-Y')); ?>">
            <input type="hidden" name="php_version" value="<?php print(phpversion());?>">
            <input type="hidden" name="IP_add" value="<?php print($_SERVER['REMOTE_ADDR']);?>">
            <div class="form-group">
  <label for="sel1">Select language preference:</label>
  <select class="form-control" id="sel1" name="language">
      <option selected disabled>Choose language</option>
      <?php 
      $language = "";$language_code="";
      
      $language_supported = file_get_contents(dirname(__FILE__).'/../../protected/files/languages_support.json');
      $get_supported_language = json_decode($language_supported,TRUE);
      
      foreach($get_supported_language['language_supported'] as $language_List){
          print("<option value='".$language_List['code']."'>".$language_List['language']);
      }
      ?>
  </select>
</div>
            <p>To continue, click next</p>
            <button type="submit" name="set_language" class="btn btn-default btn-submit">Next&nbsp;&nbsp;<span style="font-size:17px;">&#8594;</span></button>
        </form>
    </div>

<script>
    $(document).ready(function(){
        $("#select_language").submit(function(){
            //return false;
        });
        //alert('jhsd')
    });
    </script>
    <footer>
        The Open Source Social Network, A product of team SocialNetwork
    </footer>
    </div>
</body>
</html>