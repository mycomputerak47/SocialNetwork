<?php
//this script check version of php and other required things for installation of SocialNetwork
/*
If you are at this page, it is supposed that you are doing installation for the first time
if that's not the case then there is some problem with your files in the /protected folder
*/

###############################################################################################
## THIS SCRIPT WILL RUN WHEN THE FORM IS SBUMITTED
###############################################################################################

if(!isset($_GET['set_language'])){
    $error = "";
}

//when the language selection is submitted
if(isset($_GET['set_language'])){
// check whether any variable is empty 
    if(!isset($_GET['installed']) || !isset($_GET['date']) || !isset($_GET['php_version']) || !isset($_GET['IP_add']) || !isset($_GET['language'])){
        $error= <<<ERROR
    <div class='alert alert-danger'>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Danger!</strong> Something went wrong. Please try again.
</div>
ERROR;
        
    }
    else{
$setup_status_file = dirname(__FILE__).'/../protected/details/setup_status.json' ;
 //store everything in a json file
    $file_written = file_put_contents($setup_status_file,json_encode($_REQUEST));
    if($file_written){
        header("location:MySql_setup.php");
        
    }
        
}
}



$title="install-welcome";
include dirname(__FILE__).'/inc/header.php';

//prints index page
include dirname(__FILE__).'/inc/index_page.php';


?>