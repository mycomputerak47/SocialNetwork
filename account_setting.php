<?php
require_once(__DIR__.'/includes/imp/get_connection_details.php');
require_once(__DIR__.'/includes/imp/checkLoggedIn.php');
$title='Account Settings';
include_once __DIR__.'/includes/parts/head.php';
include_once __DIR__.'/includes/parts/header.php';
$this_page_words = file_get_contents(__DIR__.'/components/'.$language.'/pages/account_setting.json');
$var091 = json_decode($this_page_words,TRUE);

echo <<<THIS

<div class='container'>

</div>

THIS;
?>