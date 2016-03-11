<?php

// print all friends from the list
if ($countFriends != 0) {
foreach ($friendArray12 as $key => $value) {
 $i++;
 $getFriendQuery = mysqli_query($conn,"SELECT * FROM users WHERE username='$value' LIMIT 1");
 $getFriendRow = mysqli_fetch_assoc($getFriendQuery);
 $friendUsername = $getFriendRow['username'];
$friendFname =  $getFriendRow['fname'];
    $friendLname =  $getFriendRow['lname'];
 $friendProfilePic = $getFriendRow['profile_pic'];

 if ($friendProfilePic == "") {
  echo "<a class='btn btn-default' href='$friendUsername'><img src='userdata/profilepics/default-profile-pic.jpg' alt=\"$friendUsername's Profile\" title=\"$friendUsername's Profile\"
  height='100' width='100'class='img-thumbnail' style='padding-right: 6px;'><br/>$friendFname $friendLname</a>";
 }
 else
 {
  echo "<a href='$friendUsername' class='btn btn-default'><img src='userdata/profilepics/$friendProfilePic' alt=\"$friendUsername's Profile\" title=\"$friendUsername's
  Profile\" class='img-thumbnail' height='100' width='100' style='padding-left: 6px;display:inline'><br/>$friendFname $friendLname</a>";
 }
}
}
else
echo $username." has no friends yet.";

?>