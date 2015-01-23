<?php
/*
Template Name: Menukaart
*/
?>

<?php get_header(); ?>



<div class="header-slogan">
    <div class="u-gridContainer">
        Welkom bij <strong>Selamat Makan</strong>!
    </div>
</div>
	<div class="Content--home u-gridContainer">
				<div class="menu-menu">
					<div id="sticky-anchor"></div>
					<div class="menu-box">
						Kies een categorie uit onze menukaart: 
						<select class="menu-selector">
						  <option value="p1">Voorgerechten</option>
						  <option value="p2">Hoofdgerechten</option>
						  <option value="p3">Rijsttafel "Besar"</option>
						  <option value="p4">Rijsttafel "Kecil"</option>
						  <option value="p5">Mihoen "Istemewah"</option>
						  <option value="p6">Nasi Goreng Speciaal</option>
						  <option value="p7">Vegetarische Rijsttafel</option>
						  <option value="p8">Nagerechten</option>
						  <option value="p9">Drankenkaart</option>
						</select>
					</div>
				</div>

				<a name="p1"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=1]'); ?>
						</div>
					</div>

					<a name="p2"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=2]'); ?>
						</div>
					</div>

					<a name="p3"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">

							<?php echo do_shortcode('[WP_Restaurant_Menu id=3]'); ?>
						</div>
					</div>

					<a name="p4"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=4]'); ?>
						</div>
					</div>

					<a name="p5"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=5]'); ?>
						</div>
					</div>

					<a name="p6"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=6]'); ?>
						</div>
					</div>

					<a name="p7"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=8]'); ?>
						</div>
					</div>

					<a name="p8"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=9]'); ?>
						</div>
					</div>

					<a name="p9"></a>
					<div class="menu-outer">
						<div class="menu-categorie <?php echo $class; ?>">
							<?php echo do_shortcode('[WP_Restaurant_Menu id=10]'); ?>
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
