<?php
    // Template Name: Contact Page
?>
<?php $td = get_template_directory_uri(); ?>
<?php get_header(); ?>



<?php get_template_part( 'template-parts/top-inner' ); ?>


<section class="contact">
	<div class="decor">
		<img src="<?=$td?>/images/inner/decor-contact.jpg" alt="">
	</div>
	<div class="section-inner">
		<div class="part-contacts">
			<p class="title">פרטי התקשרות</p>
			<div class="content">
				<?=get_field("contacts");?>
			</div>
		</div>
		<div class="part-form">
			<p class="title">נשמח לשמוע ממכם</p>
			<p class="text">לקבלת מידע נרחב אודות השירותים של א.מ בנייה שיפוצים וגמר השאירו פרטים ונציגנו ייצרו אתכם קשר.</p>


			<?php
				echo do_shortcode('[contact-form-7 id="745" title="טופס יצירת קשר בעמוד צור קשר"]');
			?>
			
		</div>
	</div>
</section>


	
<?php get_footer(); ?>