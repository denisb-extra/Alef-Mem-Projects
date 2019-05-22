<?php
    // Template Name: Projects Page
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


<?php
$query = new WP_Query(array(
    'post_type' => 'project',
    'post_status' => 'publish',
	'posts_per_page' => 4
));
?>
<section class="projects">
	<div class="boxes">
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<?php
				$img = get_the_post_thumbnail_url($post->ID, "project-archive");
				if(!$img) $img = $td . "/images/index/projects/1.jpg";
			?>
			<a class="box" href="<?= get_permalink(); ?>">
				<div class="image">
					<img src="<?=$img ?>" alt="<?=$post->post_title?>">
				</div>
				<div class="caption">
					<div class="project">PROJECT</div>
					<div class="plus"></div>
					<div class="title"><?=$post->post_title?></div>
				</div>
			</a>
		<?php endwhile; ?>
	</div>
	
	<div id="pagination">
		<a href="<?=$td?>/loaders/projects.php?page_num=1" class="next">next</a>
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
		
		var ias = $.ias({
		  container:  '.boxes',
		  item:       '.box',
		  pagination: '#pagination',
		   next:       ".next"
		});
		
	});
</script>

<?php get_footer(); ?>