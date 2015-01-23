		<div class="footer-upper">
			<div class="u-gridContainer">
				<div class="u-gridRow">
						<div class="u-gridCol9">
						<a href="#"><img class="header-boven-contact-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logofooter.png" ></a>
						</div>


				</div>
			</div>
		</div>
		<div class="footer-bottom">	
			<div class="u-gridContainer">
				<div class="u-gridRow">
					
						<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<div class="Footer-inner u-gridRow">
							<?php dynamic_sidebar( 'footer-widgets' ); ?>
						</div>
						<?php endif; ?>
					
				</div>

					<!-- Copyright info -->
					<p class="footer-bloginfo">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Built by 
							<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span style="color:orange">Gevonden</span></a>
					</p>
			</div>
		</div>


  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/smoothscroll.js"></script>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stickybar.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
