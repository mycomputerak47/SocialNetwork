<?php
$title="finished";
include dirname(__FILE__).'/inc/header.php';

?>
<body>    
<div id="wrapper">
    <div class="header" title="SocialNetwork">
        <p class="logo">SocialNetwork</p>
    </div>
    <div class="welcome-box" title="welcome-box">
        <h2 class="text-warning"><abbr>Welcome</abbr></h2>to <h3 class="bg-success">
        <?php
        $i = file_get_contents(dirname(__FILE__).'/../protected/details/network_name.json');
        $i = json_decode($i, TRUE);
        echo $i['network_name'];
        ?>
        </h3><br/>
        <hr/>
        Installation Successfully finished. Have a great time.
        <hr/>
        <a href="../index.php" class="btn btn-success btn-lg">finish</a>
    </div>
    <footer>
        The Open Source Social Network, A product of team SocialNetwork
    </footer>
    </div>
</body>
</html>