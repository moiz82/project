<?php
  require_once "initializer.php";
?>
<!doctype html>
<html lang="en">
  <head>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Page Title -->
    <title>
      <?php 
          if(isset($page_title) && $page_title != "") {
              echo $page_title.$config['web_info']['page_title_prefix'];
          } else {
              echo ucwords($current_page).$config['web_info']['page_title_prefix'];
          }
      ?>
    </title>
    <!-- END: Page Title -->
    
    <!-- ALL CSS LOAD -->
    <?php
      if(isset($load['css'])){
        foreach($load['css'] as $css) {
    ?>
          <link rel="stylesheet" href="<?php echo $css."?v=".time() ?>">
    <?php
        }
      }
    ?>

  </head>
  <body>