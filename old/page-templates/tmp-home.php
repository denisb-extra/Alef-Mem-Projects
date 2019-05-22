<?php
    // Template Name: Home Page
?>
<?php $td = get_template_directory_uri(); ?>
<?php get_header(); ?>


<section class="slider-top">
	<div class="blink-layer">
		<div class="blink-1">
			<img src="<?=$td?>/images/blink.png" alt="">
		</div>
		<div class="blink-2">
			<img src="<?=$td?>/images/blink.png" alt="">
		</div>
	</div>
	<div class="slider">
		<div class="item">
			<img src="<?=$td?>/images/index/slider/1-d.jpg" alt="">
		</div>
		<div class="item">
			<img src="<?=$td?>/images/index/slider/2-d.jpg" alt="">
		</div>
	</div>

	<div class="inner">
		<p class="line-1"><?=get_field("part-top")["line-1"];?></p>
		<p class="line-2"><?=get_field("part-top")["line-2"];?></p>
	</div>
</section>

<section class="about">
	<div class="section-inner">
		<div class="part-image">
			<img src="<?=get_field("about")["image"]["url"];?>" alt="<?=get_field("about")["image"]["title"];?>">
		</div>
		<div class="part-content">
			<p class="title"><?=get_field("about")["title-1"];?></p>
			<div class="content">
				<?=get_field("about")["content"];?>
			</div>
			<a href="<?=get_permalink(641);?>" class="more">צפיה בפרויקטים</a>
			<div class="services">
				<p class="title"><?=get_field("about")["line-2"];?></p>
				<div class="boxes">
					<?php
						$items = get_field("about")["services"];
						foreach($items as $item):
						$item = $item["service"];
					?>
					<?php if($item->post_content):?>
						<a class="box" href="<?=get_permalink($item->ID);?>">
							<p class="title"><?=$item->post_title?></p>
							<p class="text"><?=$item->post_excerpt;?></p>
						</a>
					<?php else: ?>
						<div class="box">
							<p class="title"><?=$item->post_title?></p>
							<p class="text"><?=$item->post_excerpt;?></p>
						</div>
					<?php endif; ?>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="projects">
	<div class="boxes">
		<?php
			$items = get_field("projects");
			foreach($items as $item):
			$item = $item["project"];
		?>
			<a class="box" href="<?=get_permalink($item->ID);?>">
				<div class="image">
					<img src="<?=get_the_post_thumbnail_url($item->ID, "project-archive") ?>" alt="<?=$item->post_title?>">
				</div>
				<div class="caption">
					<div class="project">PROJECT</div>
					<div class="plus"></div>
					<div class="title"><?=$item->post_title?></div>
				</div>
			</a>
		<?php endforeach; ?>
		

	</div>
</section>

<?php get_template_part( 'template-parts/contact-bottom' ); ?>

<section class="advantages">
	<div class="section-inner">
		<div class="boxes">
			<?php
				$items = get_field("advs");
				foreach($items as $item):
			?>
				<div class="box">
					<p><?=$item["text"];?></p>
				</div>
			<?php endforeach; ?>
			
	
		</div>
	</div>
</section>

<script>
	$(document).ready(function ($) {
		
		
		
		$('.slider-top .slider').addClass("owl-carousel");
		$('.slider-top .slider').addClass("owl-theme");
		$('.slider-top .slider').owlCarousel({
			items : 1, 
			margin:0,
			nav:false, 
			dots: false,
			autoplay: true,
			loop:true,
			autoplayTimeout: 2000,
			autoplaySpeed: 2000,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			touchDrag: false,
			mouseDrag: false
			
		});
		
		var w = $(".slider-top .slider").width();
		var percent = w / 1863;
		$(".blink-layer").css("transform", "scale("+percent+")");
		
		var h = 0;
		
		$(".services .box .text").each(function(){
			if($(this).height() > h) h = $(this).height();
		});
		
		$(".services .box").each(function(){
			$(this).css("height", h + 95);
		});
		
	});
</script>
	
<?php get_footer(); ?>