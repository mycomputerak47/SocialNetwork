<?php
if(isset($_GET['u'])){
    $this_user = $_GET['u'];
    if(ctype_alnum($l_uname)){
        //check if user exists
        $check = mysqli_query($conn, "SELECT * FROM profile WHERE username='".$l_uname."'");
        if(mysqli_num_rows($check) == 1){
            $get = mysqli_fetch_assoc($check);
            $l_street = $get['street'];
            $l_zip = $get['zip'];
            $l_city = $get['city'];
            $l_state = $get['state'];
            $l_country = $get['country'];
            $l_DOB = $get['birthday'];
        }
        else{
            echo '<h2>User does not exist</h2>';
            exit();
        }
    }
}
?>