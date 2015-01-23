<?php
/*
Template Name: Referenties
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
							<h2>Laatste 6 referenties</h2>
							<?php echo do_shortcode('[RICH_REVIEWS_SHOW num="6"]'); ?>
						</div>

						<div class="content-left">
							<h2>Schrijf er zelf een!</h2><br />
							<?php echo do_shortcode('[RICH_REVIEWS_FORM]'); ?>
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
