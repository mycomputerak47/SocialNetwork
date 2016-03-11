<?php
/*
get various connection details including language of install, date etc
*/
$credentials = file_get_contents(dirname(__FILE__).'/../../protected/details/setup_status.json');
$get_credentials = json_decode($credentials,TRUE);
if($get_credentials['installed'] == 'no'){

    echo "<script>window.location.assign('./install/')</script>";
}else{
    
    $language = $get_credentials['language'];
    //print('your language'.$language);
}
$network_name = file_get_contents(dirname(__FILE__).'/../../protected/details/network_name.json');
$get_network_name = json_decode($network_name,TRUE);

$this_network = $get_network_name['network_name'];
    //print('your network name'.$this_network);

//get MySql connection details
$server_connection = file_get_contents(dirname(__FILE__).'/../../protected/server/MySql_connection.json');
$get_conn_details = json_decode($server_connection, TRUE);
$CONNECTION['host'] = $get_conn_details['host'];
$CONNECTION['user'] = $get_conn_details['username'];
$CONNECTION['pass'] = $get_conn_details['password'];
$CONNECTION['DB'] = $get_conn_details['database'];

$conn = new mysqli($CONNECTION['host'],$CONNECTION['user'],$CONNECTION['pass'],$CONNECTION['DB']);

//check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else{
//    print("Welcome to $this_network. Your preferred language is $language. We will be Launching soon. Have a great time.");
}
?>