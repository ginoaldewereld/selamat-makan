<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'>

    <meta name="google-translate-customization" content="ea3346ec0845d14d-f80fdae074d7b763-gaa8fd86b2d920988-10"></meta>
    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- HEADER UPPER -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<div class="u-gridContainer">
<div class="google-translate">

            <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'nl', includedLanguages: 'nl,de,en,es,fr,it,ja', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        </div>
</div>
<header class="header-boven">
    <div class="header-boven-contact u-gridContainer u-gridRow">
        <div class="header-boven-contact-wrapper1 u-gridCol6">
            <a href="/index.php/"><img class="header-boven-contact-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoheader.png" ></a>
        </div>
        <div class="header-nummer u-gridCol6">
            
            <div class="image-banner"><img width="23" src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefoon.png" />
            030-2368917</div>
            <span class="header-straat">Voorstraat 100, Utrecht </span>
        </div>
    </div>
</header> 

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- NAVIGATION -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<nav class="header-midden">
    <nav class="Bot-Nav">
        <div class="u-gridContainer header-midden-nav">
            <div class="Nav-toggle u-cf">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
            </div>
 
            <?php include 'includes/navigation.php'; ?>
            
        </div>
    </nav>         
</nav>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- BX-SLIDER -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->

<div class="relative">
    <div class="header-onderkant"><!-- onderkant header slider-->
                <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider-image1.png" >
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider-image2.png" >
                        <img class="header-onderkant-slider-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider-image3.png" >

                </div>   <!-- einde slider van de onderkant header -->   
    </div>

        <a href="/referenties/"><div class="reference">
                        <?php echo do_shortcode('[RICH_REVIEWS_SHOW num="1"]'); ?>
        </div></a>
</div>
