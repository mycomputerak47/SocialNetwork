<?php
session_start();
include(dirname(__FILE__).'/../includes/imp/get_connection_details.php');
$title = 'login';
include(dirname(__FILE__).'/../includes/parts/head.php');
?>
<style>
nav .navbar-right{
display:none}
</style>
<?php 
include(dirname(__FILE__).'/../includes/parts/header.php');
include(dirname(__FILE__).'/../includes/parts/login.php');

?>
