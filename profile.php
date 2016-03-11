<?php
require_once(__DIR__.'/includes/imp/get_connection_details.php');
require_once(__DIR__.'/includes/imp/checkLoggedIn.php');
###################################################################
//get details of this user
if(!isset($_GET['u'])){
    die('<h2>Some error occured</h2>');
}

if(isset($_GET['u'])){
    $this_user = $_GET['u'];
    if(ctype_alnum($this_user)){
        //check if user exists
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username='".$this_user."'");
        if(mysqli_num_rows($check) == 1){
            $get = mysqli_fetch_assoc($check);
            $this_uname = $get['username'];
            $this_fname = $get['fname'];
            $this_lname = $get['lname'];
            $this_about = $get['aboutme'];
            $this_profilepic = $get['profile_pic'];
        }
        else{
            echo '<h2>User does not exist</h2>';
            exit();
        }
    }
}
    
###################################################################
//
    // ADD FRIEND BUTTON IF YOU ARE IN FRIEND LIST ELSE REMOVE FRIEND BUTTON
$friendsArray = "";
$countFriends = "";
$friendsArray12 = "";
$addAsFriend = "";
$selectFriendsQuery = mysqli_query($conn,"SELECT friend_array FROM users WHERE username='$this_user'");
$friendRow = mysqli_fetch_assoc($selectFriendsQuery);
$friendArray = $friendRow['friend_array'];
if ($friendArray != "") {
   $friendArray = explode(",",$friendArray);
   $countFriends = count($friendArray);
   $friendArray12 = array_slice($friendArray, 0);

$i = 0;
if (in_array($l_uname,$friendArray)) {
 $addfr_btn = 0;
}
else
{
 $addAsFriend = '<input type="submit" name="addfriend" value="Add Friend">';
}
$addfr_btn = 1; 
}
###############################################################################


include_once __DIR__.'/includes/parts/profile_pg.php';

?>
<script src="./js/profile.js"></script>
