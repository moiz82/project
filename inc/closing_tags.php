    <!-- ALL JS LOAD -->
    <?php
      if(isset($load['js'])){
        foreach($load['js'] as $js) {
    ?>
          <script src="<?php echo $js ?>"></script>
    <?php
        }
      }
    ?>
  </body>
</html>