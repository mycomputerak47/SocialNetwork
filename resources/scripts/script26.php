<?php

//UPLOAD PROFILE PICTURE
if (isset($_FILES['profilepic'])) {
    if(isset($_FILES["profilepic"])){
   if (((@$_FILES["profilepic"]["type"]=="image/jpeg") || (@$_FILES["profilepic"]["type"]=="image/png") || (@$_FILES["profilepic"]["type"]=="image/gif"))&&(@$_FILES["profilepic"]["size"] < 1048576)) //1 Megabyte
  {
   $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $rand_dir_name = substr(str_shuffle($chars), 0, 15);
   mkdir("userdata/profilepics/$rand_dir_name");

   if (file_exists("userdata/profilepics/$rand_dir_name/".@$_FILES["profilepic"]["name"]))
   {
    echo @$_FILES["profilepic"]["name"]." Already exists";
   }
   else
   {
    //move_uploaded_file(@$_FILES["profilepic"]["tmp_name"],"userdata/profilepics/$rand_dir_name/".$_FILES["profilepic"]["name"]);
       move_uploaded_file(@$_FILES["profilepic"]["tmp_name"],"userdata/profilepics/$rand_dir_name/".$username.'.jpg');
    //echo "Uploaded and stored in: userdata/profilepics/$rand_dir_name/".@$_FILES["profilepic"]["name"];
    //$profile_pic_name = @$_FILES["profilepic"]["name"];
    $profile_pic_query = mysqli_query($conn,"UPDATE users SET profile_pic='$rand_dir_name/$username.jpg' WHERE username='$username'");
    
    
   }
  }
  else
  {
      echo "<h3 class='error'>Invailid File! Your image must be no larger than 1MB and it must be either a .jpg, .jpeg, .png or .gif</h3>";
  }
    }
    else{
        echo "<h3 class='error'>please select an image. </h3>";
    }
  }
?>