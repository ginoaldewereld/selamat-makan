<?php
/*
Template Name: Referenties-all
*/
?>

<?php get_header(); ?>



<div class="header-slogan">
    <div class="u-gridContainer">
        Welkom bij <strong>Selamat Makan</strong>!
    </div>
</div>

	<div class="Content--home u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol10">
						<div class="content-left">
							<h2>Alle referenties</h2>
							<?php echo do_shortcode('[RICH_REVIEWS_SHOW num="900"]'); ?>
						</div>

				</div>		
			</div>
	</div>

<?php get_footer(); ?>
