<?php
    // Template Name: Before After Page
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


<section class="before-after">
	<div class="section-inner">
		<div class="boxes">
		
			<?php
				$i=0;
				$items = get_field("images");
				foreach($items as $item):
				$i++;
			?>
				<a class="box" data-fancybox="group-<?=$i?>" href="<?=$item['before']["url"]?>">
					<img src="<?=$item['before']["sizes"]["before-after"]?>" alt="<?=$item['before']["title"]?>">
					<p>לפני</p>
				</a>
				<a class="box" data-fancybox="group-<?=$i?>" href="<?=$item['after']["url"]?>">
					<img src="<?=$item['after']["sizes"]["before-after"]?>" alt="<?=$item['after']["title"]?>">
					<p>אחרי</p>
				</a>
				<hr>
			<?php endforeach; ?>


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


	
<?php get_footer(); ?>