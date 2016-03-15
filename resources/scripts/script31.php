<?php
//remove friend script
require_once __DIR__.'/../../includes/imp/get_connection_details.php';

$l_uname = $_GET['me_user'];$this_uname = $_GET['this_user'];
//Friend array for logged in user
  $add_friend_check = mysqli_query($conn, "SELECT friend_array FROM users WHERE username='$l_uname'");
  $get_friend_row = mysqli_fetch_assoc($add_friend_check);
  $friend_array = $get_friend_row['friend_array'];
  $friend_array_explode = explode(",",$friend_array);
  $friend_array_count = count($friend_array_explode);
  
  //Friend array for user who owns profile
  $add_friend_check_username = mysqli_query($conn,"SELECT friend_array FROM users WHERE username='$this_uname'");
  $get_friend_row_username = mysqli_fetch_assoc($add_friend_check_username);
  $friend_array_username = $get_friend_row_username['friend_array'];
  $friend_array_explode_username = explode(",",$friend_array_username);
  $friend_array_count_username = count($friend_array_explode_username);
  
  $usernameComma = ",".$this_uname;
  $usernameComma2 = $this_uname.",";
  
  $userComma = ",".$l_uname;
  $userComma2 = $l_uname.",";
  
  if (strstr($friend_array,$usernameComma)) {
   $friend1 = str_replace("$usernameComma","",$friend_array);
  }
  else
  if (strstr($friend_array,$usernameComma2)) {
   $friend1 = str_replace("$usernameComma2","",$friend_array);
  }
  else
  if (strstr($friend_array,$this_uname)) {
   $friend1 = str_replace("$this_uname","",$friend_array);
  }
  //Remove logged in user from other persons array
  if (strstr($friend_array_username,$userComma)) {
   $friend2 = str_replace("$userComma","",$friend_array);
  }
  else
  if (strstr($friend_array_username,$userComma2)) {
   $friend2 = str_replace("$userComma2","",$friend_array);
  }
  else
  if (strstr($friend_array_username,$l_uname)) {
   $friend2 = str_replace("$l_uname","",$friend_array);
  }
else{
    $friend2 = '';$friend1 = '';
}

  $removeFriendQuery = mysqli_query($conn,"UPDATE users SET friend_array='$friend1' WHERE username='$l_uname'");
  $removeFriendQuery_username = mysqli_query($conn,"UPDATE users SET friend_array='$friend2' WHERE username='$this_uname'");
  echo "Friend Removed ...";
  
?>