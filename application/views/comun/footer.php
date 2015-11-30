</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <?php
    if(count($ruta)>0)
    {
        ?>
    <script src="<?php echo $ruta ?>"></script>
    <?php
    }
    ?>
  </body>
</html>