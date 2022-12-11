<?php

// Website Basic Info
$config['web_info']['favicon'] = '';
$config['web_info']['page_title_prefix'] = ' | Ecommerce Website';
$config['web_info']['major_error'] = 'errors.php';



// Database Info
$config['db']['self']['server'] = "localhost";
$config['db']['self']['username'] = "root";
$config['db']['self']['password'] = "";
$config['db']['self']['name'] = "ecommerce";





// function generateRandomString($length = 30) {
//     return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
// }
// $pass = crypt('testingcode', '$2y$10$'.generateRandomString(30)."$");
// echo $pass;


?>