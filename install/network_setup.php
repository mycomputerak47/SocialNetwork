<?php
/*
This script is used to store connection settings for MySql Database server
*/

if(!isset($_GET['set_network'])){
    $error = "";
}
if(isset($_GET['set_network'])){
    if(isset($_GET['network_name'])){
        $setup_network_name_file = dirname(__FILE__).'/../protected/details/network_name.json' ;
        //store connection details in this file
        $file_written = file_put_contents($setup_network_name_file,json_encode($_REQUEST));
        if($file_written){
        header("location:finished.php");   
    }   
    }
    else{
        $error= <<<ERROR
    <div class='alert alert-danger'>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Danger!</strong> Something went wrong. Please try again.
</div>
ERROR;
    }
}

$title="network name Setup";
include dirname(__FILE__).'/inc/header.php';

//prints index page
include dirname(__FILE__).'/inc/network_setup_page.php';


?>