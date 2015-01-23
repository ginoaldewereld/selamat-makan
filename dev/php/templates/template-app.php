<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h2 class="other-title"><?php the_title(); ?></h2>
				<aside class="u-gridCol3">
					<img width="200" src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone6.png" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol9 content-left" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 
						<br/><br/>
					<a href="https://play.google.com/store/apps/details?id=com.wSelamatMakan">Download de app hier</a>

						<br/><br/>

					<img  width="200" src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.jpg" />
					<br />
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


