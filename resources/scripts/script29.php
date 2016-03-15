<?php
//update details in database
//Working  : change fender
//called from about.php in accout setting using AJAX request
require_once __DIR__.'/../../includes/imp/get_connection_details.php';
$this_page_words = file_get_contents(__DIR__.'/../../components/'.$language.'/pages/account_setting.json');
$var092 = json_decode($this_page_words,TRUE);

$DOB = $_GET['DOB'];$user  =$_GET['user'];
$update = mysqli_query($conn,"UPDATE profile SET birthday = '$DOB' WHERE username = '$user'");
if($update){
echo <<<THIS
<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>{$var092['success']}</strong>{$var092['actionSuccess']}</div>
THIS;
}
else{
    //do nothing
    echo <<<THIS
<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>{$var092['alert']} !&nbsp;&nbsp;</strong>{$var092['alertmsg']}</div>
THIS;
}

?>