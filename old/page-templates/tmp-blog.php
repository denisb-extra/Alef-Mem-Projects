<?php
    // Template Name: Blog Page
?>
<?php $td = get_template_directory_uri(); ?>
<?php get_header(); ?>


<?php get_template_part( 'template-parts/top-inner' ); ?>


<?php if(get_field("text-top")):?>
<section class="text-top">
	<div class="section-inner">
		<div class="content">
			<?=get_field("text-top");?>
		</div>
	</div>
</section>
<?php endif; ?>


<section class="blog">
	<div class="section-inner">
		<div class="boxes">
			<?php 
				$query = new WP_Query( array(
					'post_type'     => "post",
					'posts_per_page'=> -1,
				) );
				while( $query->have_posts() ) : $query->the_post();
				$image = get_the_post_thumbnail_url($post, "post-archive");
				if(!$image) $image = $td."/images/no-photo.jpg"
			?>
		
				<a class="box" href="<?=get_permalink();?>">
					<div class="image">
						<img src="<?=$image ?>" alt="<?=$post->post_title?>">
					</div>
					<div class="content">
						<p class="title"><?php the_title();?></p>
						<p class="text">
							<?=get_the_excerpt()?>
						</p>
						<p class="more">המשך קריאה <span>>></span></p>
					</div>
				</a>
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
			
		</div>
	</div>
</section>


<?php if(get_field("text-bottom")):?>
<section class="text-top">
	<div class="section-inner">
		<div class="content">
			<?=get_field("text-bottom");?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/contact-bottom' ); ?>
	
<script>
	$(document).ready(function ($) {

		
	});
</script>

<?php get_footer(); ?>