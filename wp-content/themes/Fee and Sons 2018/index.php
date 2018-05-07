<?php get_header(); ?>

<div class="row">
	<div class="sixteencol" id="banner">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	</div><!-- banner -->
   </div><!-- row -->
    
<div class="row">
   	<div class="tencol first">


<!-- MAIN BODY CONTENT -->
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<div class="post-thumbnail">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div><!-- post-thumbnail -->
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="post-content">
					<?php the_content();?>
				</div><!-- post-content -->
				<div class="post-meta">
					<p><?php the_time('F j, Y'); the_author_posts_link(); ?></p>
					<p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
					<p>Categories: <?php the_category(', ') ?></p>
					<p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
				</div><!-- post-meta -->
			</div><!-- post-single -->
		<?php endwhile; else: ?>
			<div class="no-results">
				<p><strong>There are no results for this search.</strong></p>
				<p>We apologize for any inconvenience, please hit back on your browser or use the search form below.</p>
				<?php get_search_form(); ?>
			</div><!-- no-results -->
		<?php endif; ?>
			
		<div class="oldernewer">
			<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div><!-- oldernewer -->

	</div><!-- tencol -->
		
	<div class="sixcol last" id="sidebar">

<!-- SIDEBAR -->

<?php get_sidebar(); ?>	

	</div><!-- sixcol -->
</div><!-- row -->

<!-- FOOTER CONTENT -->

<?php get_footer(); ?>