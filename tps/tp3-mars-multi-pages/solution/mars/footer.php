

</div>
    <div class="col-sm-2 sidenav">
   	 <?php
       if (is_active_sidebar('right-colonne')){
            dynamic_sidebar('right-colonne'); 	
          }
        ?>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<?php wp_footer() ?>
</body>
</html>
