<?php
//check if you are this_user 's friend
require_once __DIR__.'/../../includes/imp/get_connection_details.php';

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
 $addfr_btn = 1; 
}

}elseif ($friendArray == ""){$addfr_btn = 1; }
//print_r($friendArray);

?>