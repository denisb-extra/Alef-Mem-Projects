<?php $td = get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='shortcut icon' type='image/x-icon' href='<?=$td?>/images/favicon.ico' />


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$td?>/css/style.css">
	<link rel="stylesheet" href="<?=$td?>/css/jquery.fancybox.css">
	
	<script src="<?=$td?>/js/jquery-3.2.0.min.js"></script>
	<script src="<?=$td?>/js/owl.carousel.js"></script> 
	<script src="<?=$td?>/js/main.js"></script>
	<script src="<?=$td?>/js/jquery.fancybox.js"></script>
	<script src="<?=$td?>/js/jquery-ias.min.js"></script>
	
	
	<?php wp_head(); ?>
</head>

<body>

<header>
	
	<div class="hamburger hamburger--squeeze js-hamburger">
		<div class="hamburger-box">
			<div class="hamburger-inner"></div>
		</div>
	</div>
	<a class="logo-cont" href="<?=get_home_url();?>">
		<img src="<?=get_field("header", "options")["logo"]["url"];?>" alt="<?=get_field("header", "options")["logo"]["title"];?>">
	</a>

	<div class="tel">
		<p class="text">חייג</p>
		<a href="tel:<?=get_field("header", "options")["tel"];?>" class="link"><?=get_field("header", "options")["tel"];?></a>
	</div>
	
	<a class="tel-mobile" href="tel:<?=get_field("header", "options")["tel"];?>">
		<i class="fa fa-phone" aria-hidden="true"></i>
	</a>

	

	<?php 
		$args = array(
			'theme_location'  => 'top-menu',
			'container_class' => 'mobile-menu-cont',
			'menu_class'      => 'mobile-menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => ''
		);
		wp_nav_menu( $args );
	?>	
	<?php if(get_field("header", "options")["popup"]): ?>
		<div class="popup-button">
			<div class="inner">
				<img src="<?=$td?>/images/icons/popup-button.png" alt="">
			</div>
		</div>
	
		<div class="popup">
			<img src="<?=get_field("header", "options")["popup"]["url"];?>" alt="<?=get_field("header", "options")["popup"]["title"];?>">
			<div class="close-popup">&#215;</div>
		</div>
	<?php endif; ?>
		
</header>

<script>
	$(document).ready(function ($) {
		$(".popup-button").on("click", function(){
			$(".popup").toggle("slow");
		});
		$(".close-popup").on("click", function(){
			$(".popup").toggle("slow");
		});
	});
</script>