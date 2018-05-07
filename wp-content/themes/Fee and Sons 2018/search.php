<?php get_header(); ?>

	<h1><?php the_search_query(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<div class="post-thumbnail">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</div><!-- post-thumbnail -->
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p><?php the_time('F j, Y'); the_author_posts_link() ?></p>
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div><!-- post-excerpt -->
		</div><!-- post-single -->
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2>No Results</h2>
			<p>Please use the search for below to try again.</p>
			<?php get_search_form(); /* Outputs the default Wordpress search form */ ?>
		</div><!-- no-results -->
	<?php endif; ?>

	<div class="oldernewer">
		<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
		<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div><!-- oldernewer -->
	
<!-- SIDEBAR -->

<?php get_sidebar(); ?>	

<!-- FOOTER CONTENT -->

<?php get_footer(); ?>
