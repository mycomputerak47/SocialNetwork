<?php
if(isset($_GET['u'])){
    $this_user = $_GET['u'];
    if(ctype_alnum($this_user)){
        //check if user exists
        $check = mysqli_query($conn, "SELECT * FROM profile WHERE username='".$this_user."'");
        if(mysqli_num_rows($check) == 1){
            $get = mysqli_fetch_assoc($check);
            $this_street = $get['street'];
            $this_zip = $get['zip'];
            $this_city = $get['city'];
            $this_state = $get['state'];
            $this_country = $get['country'];
        }
        else{
            echo '<h2>User does not exist</h2>';
            exit();
        }
    }
}
?>