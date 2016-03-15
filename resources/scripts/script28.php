<?php
//update details in database
//Working  : change Address
//called from about.php in accout setting using AJAX request
require_once __DIR__.'/../../includes/imp/get_connection_details.php';
$this_page_words = file_get_contents(__DIR__.'/../../components/'.$language.'/pages/account_setting.json');
$var092 = json_decode($this_page_words,TRUE);

$user  =$_GET['user'];
$street = $_GET['street'];
$zip = $_GET['zip'];
$city = $_GET['city'];
$state = $_GET['state'];
$country = $_GET['country'];
$update = mysqli_query($conn,"UPDATE profile SET street = '$street', zip = '$zip', city = '$city', state = '$state', country = '$country' WHERE username = '$user'");
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