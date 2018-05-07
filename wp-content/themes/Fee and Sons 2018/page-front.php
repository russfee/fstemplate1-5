<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<!--==========BANNER START*============-->
<div class="row constrain">
	<div  id="banner" style="background-image: url(<?php the_field('banner_image'); ?>);">
				<div class="banner-content" style="background: <?php the_field('banner_color_single'); ?><?php the_field('opacity') ?>;background: <?php the_field('gradient_type'); ?>(<?php the_field('banner_color_gradient_top') ?><?php the_field('opacity') ?>, <?php the_field('banner_color_gradient_bottom') ?><?php the_field('opacity') ?>)">
					<div class="home-banner-headline"><?php the_field('banner_headline'); ?></div> <!--home-banner-headline-->
					<div class="home-banner-subtitle"><?php the_field('banner_subtitle'); ?></div> <!--home-banner-subtitle-->
					<?php if( get_post_meta($post->ID, 'button_text', true) ) { ?>

					<div class="button home-banner-button"><?php the_field('button_text'); ?></div> <!--button-->

<?php } ?>
			</div> <!--banner-content-->
	</div><!-- banner -->
</div><!-- row -->
<!--==========BANNER END*============-->
<!--==========OPENING BLURB START*============-->
<div class="row constrain spacing-top spacing-bottom">
	<div class="standard-content-container">
			<?php the_field('text_blurb'); ?>
	</div> <!--standard-content-container-->
</div><!-- row -->
<!--==========OPENING BLURB END*============-->

<?php get_footer(); ?>
