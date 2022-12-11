<?php
    require_once "inc/opening_tags.php";

    // START: TOP BANNER
    $tb = mysqli_query($dbconn,"SELECT * FROM `banners` WHERE location = 'topbar'");
    if(mysqli_num_rows($tb) > 0) {
        $tbr = mysqli_fetch_assoc($tb);
        if($tbr['status'] == "active") {
            $tbr['meta'] = unserialize($tbr['banner_meta']);
?>
            <a href="<?php echo $tbr['meta']['link'] ?>" class="top-banner">
                <?php
                if($tbr['meta']['custom_code'] != "") {
                    echo $tbr['meta']['custom_code'];
                } else {
                ?>
                <img src="<?php echo $tbr['image_link'] ?>" height="<?php echo $tbr['meta']['height'] ?>" width="100%"/>
                <?php
                }
                ?>
            </a>
<?php
        }
    }
    // END: TOP BANNER
?>
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
    <!-- START:  -->
    <!-- END:  -->
 
<!-- test -->
<?php  
    require_once "inc/closing_tags.php";
?>
