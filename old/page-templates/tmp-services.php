<?php
    // Template Name: Services Page
?>
<?php $td = get_template_directory_uri(); ?>
<?php get_header(); ?>


<?php get_template_part( 'template-parts/top-inner' ); ?>



<section class="about">
	<div class="section-inner">
		<div class="part-image">
			<img src="<?=get_field("image")["url"];?>" alt="<?=get_field("image")["title"];?>">
		</div>
		<div class="part-content">
			<div class="services">
				<p class="title"><?=get_field("services-main")["title"];?></p>
				<div class="boxes">
					<?php
						$items = get_field("services-main")["services"];
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

				<p class="title"><?=get_field("services-more")["title"];?></p>
				
				
				<div class="boxes">
					<?php
						$items = get_field("services-more")["services"];
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


<?php get_template_part( 'template-parts/contact-bottom' ); ?>
	
<?php get_footer(); ?>