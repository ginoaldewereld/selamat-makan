<?php
/*
Template Name: Landingspage
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
				<div class="u-gridCol8">
						<div class="content-left">
							<img align="left" class="leftAlignImage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-image1.png" />
							<p>
							<h2><?php the_title(); ?></h2>
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
							</p>
						</div>

				</div>
				<div class="u-gridCol4">
						<div class="content-right">
							<h2>Bestel en laat bezorgen</h2>
							<a href="http://selamatmakan.avondeten.com/"><div class="bestel-button">Online eten bestellen</div></a>
							<p>
								Gemakkelijke uw eten laten bezorgen	
							</p>
						</div>

						<div class="content-right">
							<h2>reserveer een tafel</h2>
							<iframe frameborder="0" src="http://www.tafelwijzer.nl/system/iframe?apikey=2013-216007" style="width: 290px; height: 316px;"></iframe>
						</div>
				</div>			
			</div>
	</div>

	<div class="content-bottom">
		<div class="u-gridContainer">
			<p>Onze openingstijden zijn van dinsdag t/m zondag vanaf 17:00 uur. Op maandag zijn wij gesloten. Reserveringen kunt 
			u telefonisch plaatsen of via de reserveringstool. U kunt ons bereiken op telefoonnummer 030-2368917.</p>
		</div>
	</div>

<?php get_footer(); ?>
