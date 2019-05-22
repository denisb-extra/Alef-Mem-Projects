<?php
    // Template Name: About Page
?>
<?php $td = get_template_directory_uri(); ?>
<?php get_header(); ?>



<?php get_template_part( 'template-parts/top-inner' ); ?>



<section class="about-inner">
	<div class="section-inner">
		<div class="part-content">
			<div class="content">
				<?php the_content();?>
			</div>

			<a class="projects-box" href="<?=get_permalink(641);?>">
				<div class="image">
					<img src="<?=$td?>/images/inner/about/projects.jpg" alt="">
				</div>
				<div class="caption">
					<div class="inner">
						<p class="title">לצפייה בפרויקטים</p>
						<p class="subtitle">לחץ כאן </p>
					</div>
					
				</div>
			</a>
		</div>
		<div class="part-image">
			<img src="<?=get_the_post_thumbnail_url() ?>" alt="<?=the_title();?>">
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/contact-bottom' ); ?>


	
<?php get_footer(); ?>