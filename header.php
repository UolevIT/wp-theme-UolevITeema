<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112670789-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-112670789-1');
		</script>
		<title>
			<?php bloginfo('name'); ?> | 
			<?php is_front_page() ? bloginfo('description') : wp_title(); ?>	
		</title>
		<meta name="description" content="Ratkaisemme arjen pienet sekä suuret tietotekniset ongelmatilanteet. Tarjoamme verkkosivut, 3D-mallinnukset ja it-palvelut yrityksille ja yksityisille.">
		<meta name="keywords" content="it-ratkaisuja, it-palvelut, yrityksille, yksityisille, verkkosivut, 3D-mallinnukset, UolevIT">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UV-Compatible" content="ie-edge">
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/kuvat/UolevIT_faviconv3.png" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:900|Montserrat" rel="stylesheet" defer>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/tether.min.css">	
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
		<?php wp_head(); ?>
	</head>
<body>
	<!--<nav id="nav-korjaus" class="navbar navbar-expand-md navbar-light bg-faded">
		<a class="navbar-brand nav-fix" href="index.html" itemscope itemtype="http://schema.org/Brand">
		<img class="mobilelogo" src="kuvat/UolevIT_logo_Rovaniemi_Lappi.svg" itemprop="logo" alt="UolevIT-logo, Rovaniemi, Lappi">		
		</a>
		<button id="ham-korjaus" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">

		<!-- VALIKKO TOIMII with Bootstrap 4.0.0 -->
	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
	  <a class="navbar-brand nav-fix" href="index.html" itemscope itemtype="http://schema.org/Brand">
			<img class="mobilelogo" src="<?php bloginfo('template_url'); ?>/kuvat/UolevIT_logo_Rovaniemi_Lappi.svg" itemprop="logo" alt="UolevIT-logo, Rovaniemi, Lappi">		
	  </a>
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	        <?php
	        wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'depth'             => 2,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav',
	            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'            => new WP_Bootstrap_Navwalker()
			) );
	        ?>
	    </div>
	</nav>
	<header id="showcase" class="grid">
	  <div class="bg-image"></div>
	  <div id="cw" class="content-wrap">
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	  </div>
	  <div id="scbtn1" class="content-wrap">
		<a href="#kortti1" class="btn" title="Siirry alemmas osioon verkkosivut">Lue lisää verkkosivuista</a>
	  </div>
	  <div id="scbtn2" class="content-wrap">
		<a href="#kortti2" class="btn header" title="Siirry alemmas osioon 3D-palvelut">Lue lisää 3D-palveluista</a>
	  </div>
	  <div id="scbtn3" class="content-wrap">
		<a href="#kortti3" class="btn header" title="Siirry alemmas osioon IT-palvelut">Lue lisää IT-palveluista</a>
	  </div>
	</header>