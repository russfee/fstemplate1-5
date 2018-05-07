<?php get_header(); ?>
<?php
get_template_part ('layout/banner-sub-page/banner-sub-page');
?>
<div class="sub-page-content-container">
	<div class="sub-page-content-topper" style="background-color: #4295CB;"></div>
		
		<!-- MAIN BODY CONTENT -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
			<div class="row constrain">
				<h2 style="margin-top: 40px;"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="news-date"><p><?php the_field('date'); ?></p></div><!--news-date-->
				<div class="story_image_container">
					<img src="<?php the_field('story_image'); ?>">
				</div> <!--story_image_container-->
				<?php the_field('story'); ?>
			</div> <!--row-->
			</article>

			<div class="row constrain">
			<div id="post-meta">
				<p><?php the_time('F j, Y'); ?></p>
				<p>Categories: <?php the_category(', ') ?></p>
			</div><!-- post-meta -->
			<div class="newer-older" style="padding-bottom: 40px;">
				<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?>
				<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
			</div><!-- newer-older -->
			<div class="clear"></div><!-- clear -->

			</div> <!--row-->

			<?php /* If a user fills out their bio info, it's included here */ ?>
			

		</div><!-- post -->


	


	<?php endwhile; /* end loop */ ?>
	

</div> <!--sub-page-content-container-->
<?php get_footer(); ?>
