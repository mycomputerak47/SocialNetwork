<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:./../../index.php');
}
header('location:./../index.php');
?>