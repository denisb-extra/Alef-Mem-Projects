<?php 
	global $title_top;
	if(!isset($title_top)) $title_top = $post -> post_title;
	if(!isset($title_top)) $title_top = "א.מ ניהול פרוייקטים";
?>



<section class="top-inner">
	<div class="inner">
		<h1 class="title"><?=$title_top?></h1>
	</div>
</section>
<section class="breadcrumbs">
	<div class="section-inner">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p class="line">','</p>
		');
		}
		?>
	</div>
</section>