<body>
    <div>
        <div class="header" title="SocialNetwork">
        <p class="logo">SocialNetwork</p>
    </div>
    <div class="welcome-box" title="welcome-box">
        <?php print($error); 
    ?>
    
        <h2 class="text-warning"><abbr>Database Configuration</abbr></h2><br/>
        <h6 class="text-muted">On this page you have to enter your database connection details.<br/>
            If you are not sure about this, please contact your system administrator.</h6>
        <hr/>
        <form role="form" id="database_setup" action="MySql_setup.php" method="post">
  <div class="form-group">
    <label for="host">Hostname*</label>
    <input type="text" class="form-control" id="host" placeholder="Hostname" autofocus name="host" required value="">
      <small class=" bg-info">Hostname of your MySQL Database Server (e.g. localhost if MySQL is running on the same machine)</small>
  </div>
            <div class="form-group">
    <label for="username">Username*</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required value="">
      <small class=" bg-info">Hostname of your MySQL Database Server (e.g. localhost if MySQL is running on the same machine)</small>
  </div>
            <div class="form-group">
    <label for="password">Password*</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <small class="bg-info">Hostname of your MySQL Database Server (e.g. localhost if MySQL is running on the same machine)</small>
  </div>
            <div class="form-group">
    <label for="database">Name of Database*</label>
    <input type="text" class="form-control" id="database" placeholder="Name of Database" name="database" required value="">
      <small class="bg-info">Hostname of your MySQL Database Server (e.g. localhost if MySQL is running on the same machine)</small>
  </div>
            
            <button type="submit" name="setup_database" class="btn btn-default btn-submit" value="database-setup">Next</button>
        </form>
    </div>

    <footer>
        The Open Source Social Network, A product of team SocialNetwork
    </footer>
        
    </div>
</body>
</html>