<?php
//save post in database
//Working  : send post
//called from includes/parts/profile/posts.php using AJAX request
require_once __DIR__.'/../../includes/imp/get_connection_details.php';
$post = $_GET['postBody'];
$added_by = $_GET['postBy'];
$user_posted_to = $_GET['postTo'];
if($post !=""){
    $date_added = date("d-m-y");
    $sql_command = "INSERT INTO posts VALUES('','$post','$date_added','$added_by','$user_posted_to')";
    $query = mysqli_query($conn,$sql_command) or die(mysqli_error($conn));
    if($query){
        echo 'posted successfully..';
    }
}
else{
    echo 'You must enter something in your post field before you post it !!!';
}

?>