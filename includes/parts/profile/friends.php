<?php
//print all friends
require_once __DIR__.'/../../imp/get_connection_details.php';
$this_page_words = file_get_contents(__DIR__.'/../../../components/'.$language.'/pages/profile.json');
$var076 = json_decode($this_page_words,TRUE);

$this_user = $_GET['u'];
$l_uname = $_GET['l_uname'];
require_once __DIR__.'/../../../resources/scripts/script30.php';

if ($countFriends != 0) {
foreach ($friendArray12 as $key => $value) {
 $i++;
 $getFriendQuery = mysqli_query($conn,"SELECT * FROM users WHERE username='$value'");
 $getFriendRow = mysqli_fetch_assoc($getFriendQuery);
 $friendUsername = $getFriendRow['username'];
 $friendProfilePic = $getFriendRow['profile_pic'];

 if ($friendProfilePic == "") {
  echo "<a href='$friendUsername'><img src='img/default-profile-pic.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\"
  height='50' width='40' style='padding-right: 6px;'></a>";
 }
 else
 {
  echo "<a href='$friendUsername'><img src='userdata/profilepics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's
  Profile\" height='50' width='40' style='padding-left: 6px;'></a>";
 }
}
}
else
echo $username." has no friends yet.";
?>