<body>    
<div id="wrapper">
    <div class="header" title="SocialNetwork">
        <p class="logo">SocialNetwork</p>
    </div>
    <div class="welcome-box" title="welcome-box">
        <?php print($error); 
    ?>
    
        <h2 class="text-warning"><abbr>SocialNetwork</abbr></h2><h4>name</h4><br/>
        <h6 class="text-muted">Obviously Your social network will have a name. Default name is SocialNetwork, Please change it with name of your choice. ( for example : name of your company, organisation etc. )</h6>
        <hr/>
        <form role="form" id="select_language" action="network_setup.php" method="get">
            <div class="form-group">
    <label for="name">Name of your network*</label>
    <input type="text" class="form-control" id="name" name="network_name" value="SocialNetwork" required>
  </div>
            <p>To continue, click next</p>
            <button type="submit" name="set_network" class="btn btn-default btn-submit" value="Network_name_set">Next</button>
        </form>
    </div>
    <footer>
        The Open Source Social Network, A product of team SocialNetwork
    </footer>
    </div>
</body>
</html>