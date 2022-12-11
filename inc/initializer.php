<?php
    $current_page = basename($_SERVER["PHP_SELF"], '.php');
    require "config.php";
    
    // START: CSS FILES LOADING
    // Global Css Files
    $load['css'][] = "assets/css/library/bootstrap.min.css";
    $load['css'][] = "assets/css/root.css";
    $load['css'][] = "assets/css/resetter.css";
    $load['css'][] = "assets/css/style.css";
    $load['css'][] = "assets/css/library/toastr.css";
    // $load['css'][] = "https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css?v=100";
    // Css File For This Page
    if(file_exists($config['web_info']['base_path'].'/assets/css/pages/'.$current_page.'.css')) {
        $load['css'][] = "/assets/css/pages/".$current_page.".css";
    }
    // END: CSS FILES LOADING

    // START: JS FILES LOADING
    // Global Js Files
    $load['js'][] = "assets/js/library/jquery.min.js";
    $load['js'][] = "assets/js/library/bootstrap.min.js";
    $load['js'][] = "assets/js/library/toastr.min.js";
    $load['js'][] = "assets/js/script.js";
    // js File For This Page
    if(file_exists($config['web_info']['base_path'].'/assets/js/pages/'.$current_page.'.js')) {
        $load['js'][] = "/assets/js/pages/".$current_page.".js";
    }
    // END: JS FILES LOADING

    // Database File
    if(isset($load['database']) && $load['database'] === false) {
    } else {
        require "db.php";
    }
    if(!$dbconn) {
        header("Location:".$config['web_info']['major_error']);
    }

    // Global Function File
    if(isset($load['global_function']) && $load['global_function'] === false) {
    } else {
        require "functions.php";
    }
    
    // Function File For This Page
    if(file_exists($config['web_info']['base_path'].'/inc/functions/'.$current_page.'.php')) {
        require_once "functions/".$current_page.".php";
    }
    
?>
