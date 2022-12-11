<?php
require_once "config.php";
$dbconn = mysqli_connect($config['db']['self']['server'], $config['db']['self']['username'], $config['db']['self']['password'], $config['db']['self']['name']);

// if(!$dbconn) {
//     echo "error";
// } else {
//     echo "success";
// }

?>