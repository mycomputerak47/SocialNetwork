<?php
if(isset($_GET['u'])){
    $this_user = $_GET['u'];
    if(ctype_alnum($this_user)){
        //check if user exists
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username='".$this_user."'");
        if(mysqli_num_rows($check) == 1){
            $get = mysqli_fetch_assoc($check);
            $this_uname = $get['username'];
            $this_fname  = $get['fname'];
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
?>