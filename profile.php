<?php
require_once(__DIR__.'/includes/imp/get_connection_details.php');
require_once(__DIR__.'/includes/imp/checkLoggedIn.php');
###################################################################
//get details of this user
if(!isset($_GET['u'])){
    die('<h2>Some error occured</h2>');
}

require_once __DIR__.'/resources/scripts/script21.php';
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
$title='profile';
include_once __DIR__.'/includes/parts/head.php';
include_once __DIR__.'/includes/parts/header.php';
include_once __DIR__.'/includes/parts/profile/nav-tab.php';
include_once __DIR__.'/includes/parts/profile/profile.php';
include_once __DIR__.'/includes/parts/footer.php';
?>
<script type="text/javascript">var this_user = '<?php print($this_user)?>'</script>
<script src="./js/profile.js"></script>
