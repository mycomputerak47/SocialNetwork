<?php
    /*
    #############################################################
    THIS SCRIPT PRINTS 10 RECENT POSTS DONE FOR YOU
    #############################################################
    */
    
    $getposts = mysqli_query($conn, "SELECT * FROM posts WHERE user_posted_to = '$this_user' ORDER BY id DESC LIMIT 10") or
        die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($getposts)){
        $id = $row['id'];
        $body = $row['body'];
        $date_added = $row['date_added'];
        $added_by = $row['added_by'];
        $user_posted_to = $row['user_posted_to'];
        $added_by_pic = mysqli_query($conn, "SELECT * FROM users WHERE username = '$added_by'");
        $added_by_pic = mysqli_fetch_assoc($added_by_pic);
        $added_by_pic = $added_by_pic['profile_pic'];
        echo <<<POST
        <div class="row">
        <div class="col-sm-2">
          <div class="well">
           <p><a href='$added_by'>$added_by</a></p>
           <img src="userdata/profilepics/$added_by_pic" class="img-circle" height="55" width="55" alt="Avatar">
           <p>$date_added</p>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="well">
            <p>$body</p>
          </div>
        </div>
      </div>
POST;
    }
    /*
    #############################################################
        ENDS HERE
    #############################################################
    */
    ?>