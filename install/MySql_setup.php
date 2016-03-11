<?php
/*
This script is used to store connection settings for MySql Database server
*/

if(!isset($_POST['setup_database'])){
    $error = "";
}
if(isset($_POST['setup_database'])){
    if(isset($_POST['host']) && isset($_POST['username'])  && isset($_POST['database'])){
        $setup_database_file = dirname(__FILE__).'/../protected/server/MySql_connection.json' ;
        //store connection details in this file
        $file_written = file_put_contents($setup_database_file,json_encode($_REQUEST));
        if($file_written){
        header("location:network_setup.php");   
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

$title="Databse Setup";
include dirname(__FILE__).'/inc/header.php';

//prints index page
include dirname(__FILE__).'/inc/MySql_setup_page.php';


?>