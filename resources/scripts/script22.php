<?php
//print all post on the wall of profile of the user whose profile is being visited
//Working  : print posts
//called from includes/parts/profile/posts.php using require function 
$getposts = mysqli_query($conn, "SELECT * FROM posts WHERE user_posted_to = '$this_user' ORDER BY id DESC LIMIT 10"); //or
        //die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($getposts)){
        $id = $row['id'];
        $body = $row['body'];
        $date_added = $row['date_added'];
        $added_by = $row['added_by'];
        $user_posted_to = $row['user_posted_to'];
        //get profile pric of user whose post is being printed
        $get_pic = mysqli_query($conn, "SELECT * FROM users WHERE username = '$added_by'");
        $get_pic = mysqli_fetch_assoc($get_pic);
        $pic_ = $get_pic['profile_pic'];
echo <<<THIS

                <div class="posts">
        <a href="{$added_by}"><img src="userdata/profilepics/{$pic_}" width="40" height="40"><span>&nbsp;&nbsp;{$added_by}</span></a>&nbsp;&nbsp;<small class="text-muted">{$date_added}</small>
        <br><br><div >
            {$body}
        </div><br>
        <div class="well well-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span></div>
                </div><br><br>

THIS;
    }
?>