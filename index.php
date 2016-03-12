<?php
/*
The SocialNetwork
Author : Divakar Parashar
Date : feb 28, 2016
*/
//check for setup details
require_once(dirname(__FILE__).'/includes/imp/get_connection_details.php');
//check user is logged in
require_once(dirname(__FILE__).'/includes/imp/checkLoggedIn.php');
//print page cotent 
print('logged in as : '.$l_fname);
$title= $this_network;
include_once __DIR__.'/includes/parts/head.php';
include_once __DIR__.'/includes/parts/header.php';

?>
