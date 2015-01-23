<?php
/*
Template Name: Reserveren
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<h2 class="other-title"><?php the_title(); ?></h2>
				<article class="Content-article u-gridCol4 content-left" id="post-<?php the_ID(); ?>">
					<iframe frameborder="0" src="http://www.tafelwijzer.nl/system/iframe?apikey=2013-216007" style="width: 290px; height: 316px;"></iframe>
				</article>
				<div class="u-gridCol8 content-left">
					Wilt u reserveren om lekker bij ons te komen eten? Dat kan! Onze openingstijden zijn van dinsdag t/m zondag vanaf 17:00 uur. Op maandag zijn wij gesloten. <br/><br/>Reserveringen kunt u telefonisch plaatsen of via de reserveringstool hiernaast. <br/><br/> U kunt ons bereiken op telefoonnummer 030-2368917.
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


