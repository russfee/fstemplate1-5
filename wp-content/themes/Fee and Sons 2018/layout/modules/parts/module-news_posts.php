<?php // MODULE - NEWS POSTS ?>
<div class="row constrain">
<!--==========EVENT LIST START*============-->
<?php

$args = array(
	'post_type' => 'news',
	'posts_per_page' => -1 ); //haven't hooked this up to ACF yet.
	
	$loop = new WP_Query ( $args );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="news-story-container">
		<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<div class="news-date"><p><?php the_field('date'); ?></p></div> <!--news-date-->
		<img src="<?php the_field('story_image'); ?>">
		<p><?php the_field('story_excerpt'); ?> <a href="<?php the_permalink() ?>">...Read More</a></p>
	</div> <!--news-story-container-->
<?php endwhile; ?>


<!--==========EVENT LIST END*============--></div> <!--row-->