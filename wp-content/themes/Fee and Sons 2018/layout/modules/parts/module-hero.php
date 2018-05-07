<?php // Hero Module ?>
<div class="row <?php the_sub_field('hero_banner_width'); ?>">
	<div id="banner" style="background-image: url(<?php the_sub_field('banner_image'); ?>);">
		<div class="banner-content <?php the_sub_field('banner_overlay'); ?> <?php the_sub_field('text_alignment'); ?>"> 
			<div class="home-banner-headline <?php the_sub_field('text_color'); ?>">
			<?php the_sub_field('banner_headline'); ?>
			</div> <!--home-banner-headline-->
			<div class="home-banner-subtitle <?php the_sub_field('text_color'); ?>">
			<?php the_sub_field('banner_subheading'); ?>
			</div> <!--home-banner-headline-->
			<div class="btn-primary">
			<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a>
			</div> <!--btn-primary-->

		</div> <!--banner-content-->
	</div> <!--banner-->
</div><!--row-->

