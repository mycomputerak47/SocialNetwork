<?php
session_start();
include(dirname(__FILE__).'/../includes/imp/get_connection_details.php');
include(dirname(__FILE__).'/../includes/parts/head.php');
include(dirname(__FILE__).'/../components/'.$language.'/pages/header.php');
include(dirname(__FILE__).'/../components/'.$language.'/pages/login/content.php');
include(dirname(__FILE__).'/../components/'.$language.'/pages/footer.php');

print($_SESSION['id']);
?>
