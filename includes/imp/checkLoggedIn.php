<?php
session_start();
if(!isset($_SESSION['id'])){
    //print(dirname(__FILE__));
    header('location:./login/login.php');
}
if(isset($_SESSION['id'])){
    //if there is no profile pic set
    
    // get details about user
    $session_id = $_SESSION['id'];
    $chk_sql = mysqli_query($conn,"select * from users where id = '$session_id'");
    while($chk_res = mysqli_fetch_assoc($chk_sql)){
        //l denotes details about logged in user
        $l_id = $chk_res['id'];
        $l_fname = $chk_res['fname'];
        $l_lname = $chk_res['lname'];
        $l_uname = $chk_res['username'];
        $l_profPic = $chk_res['profile_pic'];
    if($l_profPic == NULL){
        $l_profPic = 'userdata/profilepics/default-profile-pic.jpg';    
    }else{
        $l_profPic = 'userdata/profilepics/'.$l_profPic;    
    }    
    }
    
}

?>