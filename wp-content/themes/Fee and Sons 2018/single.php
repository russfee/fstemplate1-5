<?php get_header(); ?>

<div class="row">
	<div class="sixteencol" id="banner">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	</div><!-- banner -->
   </div><!-- row -->
    
<div class="row">
   	<div class="tencol first">

<!-- MAIN BODY CONTENT -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="post-thumbnail">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div><!-- post-thumbnail -->
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages( $args ); ?>
				</div><!-- post-content -->
			</article>

			<div id="post-meta">
				<p><?php the_time('F j, Y'); ?></p>
				<p>Categories: <?php the_category(', ') ?></p>
			</div><!-- post-meta -->

			<?php /* If a user fills out their bio info, it's included here */ ?>
			<div id="post-author">
				<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); } ?></p>
				<div id="author-description">
					<h3><?php the_author_posts_link() ?></h3>
					<?php the_author_meta('description') ?> 
				</div><!-- author-description -->
			</div><!-- post-author -->

		</div><!-- post -->

		<div class="newer-older">
			<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?>
			<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
		</div><!-- newer-older -->
		<div class="clear"></div><!-- clear -->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>

	</div><!-- tencol -->
		
	<div class="sixcol last" id="sidebar">

<!-- SIDEBAR -->

<?php get_sidebar(); ?>	

	</div><!-- sixcol -->
</div><!-- row -->

<!-- FOOTER CONTENT -->

<?php get_footer(); ?>