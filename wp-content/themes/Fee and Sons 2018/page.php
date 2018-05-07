<?php get_header(); ?>

	<div class="row">
		<div class="sixteencol" id="banner">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</div><!-- banner -->
    </div><!-- row -->
    
    <div class="row">
      	<div class="sixteencol first">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div><!-- sixteencol -->
    </div><!-- row -->

<?php get_footer(); ?>
