    <footer class="footer">
      <div class="container">
      	<div class="col-md-6">
        	<p class="text-muted m-20"><?php echo of_get_option('footer_copyright'); ?></p>
      	</div>
      	<div class="col-md-6">
	        <p class="text-muted m-20 pull-right">
	        	<?php wp_nav_menu(array('theme_location' => 'footer-menu','menu_class'=>'nav navbar-nav navbar-right','container'=>'ul')); ?>
	        </p>
      	</div>
      </div>
    </footer>
</body>
</html>