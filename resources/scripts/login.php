<?php
session_start();
require_once dirname(__FILE__).'/../../includes/imp/get_connection_details.php';

if(isset($_POST['user']) && isset($_POST['pass'])){
 $u = $_POST['user'];$p = $_POST['pass'];
    /*
    *
        *   ADD SOME SECURITY HEERE   *
    *
    */
    
    $p = md5($p);//p_encrypted
    $sql = mysqli_query($conn,"SELECT id FROM users WHERE username = '".$u."' AND password = '".$p."' LIMIT 1");
    //count returned result
    $cnt = mysqli_num_rows($sql);
    if($cnt == 1){
        while($res = mysqli_fetch_assoc($sql)){
            $id = $res['id'];
        }
        $_SESSION['user']  =$u;
        $_SESSION['id'] = $id;
        print("<script>window.location='./../index.php'");
    }
    //print("<script>window.location='./../index.php'");
    //print($_SESSION['user'].$_SESSION['id']);
}
    ?>