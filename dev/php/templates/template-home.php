<?php
/*
Template Name: Homepage
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
							<img align="left" class="leftAlignImage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-image1.png" /><h2>Ons restaurant</h2>
							<p>
								Voor een heerlijk diner bent u bij Indonesisch 
								Restaurant Selamat Makan aan het juiste 
								adres, want letterlijk vertaald betekent 
								selamat makan: smakelijk eten!

								<br />Ons restaurant is in een typische Indonesische sfeer ingericht. Er heerst 
								een knusse en gezellige ambiance, maar het is toch behouden van klassiek 
								koloniale accenten. U kunt er genieten van heerlijke Indonesische 
								gerechten en rijsttafels.
							</p>
						</div>

						<div class="content-left">
							
							<a href="/menukaart/"><img align="right" class="rightAlignImage" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-image2.png" /></a>
							<h2>Onze menukaart</h2>
							
							<p>
								Onze menukaart bevat niet alleen rijsttafels, 
								maar kent ook à la carte mogelijkheden. 
								Zie voor een beschrijving van de gerechten 
								onze menukaart. U kunt bij ons uitstekend 
								terecht voor uw zakelijke diners, feestjes en 
								met gezelschappen van 8 tot 20 personen 
								of meer.
							</p>
						</div>

						<div class="content-left">
							<h2>Catering</h2>
							<p>
								Wij kunnen een heerlijke Indonesische catering voor u verzorgen. Neem hiervoor <a href="/contact/">contact</a> met ons op!
							</p>
						</div>
				</div>
				<div class="u-gridCol4">
						<div class="content-right">
							<h2>Bestel en laat bezorgen</h2>
							<a href="http://selamatmakan.avondeten.com/"><div class="bestel-button">Online eten bestellen</div></a>
							<p>
								Gemakkelijke uw eten laten bezorgen als u dat wiltqwerqwe	
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
			u telefonisch plaatsen of via de <a href="/reserveren/">reserveringstool</a>. U kunt ons bereiken op telefoonnummer 030-2368917.</p>
		</div>
	</div>

<?php get_footer(); ?>
