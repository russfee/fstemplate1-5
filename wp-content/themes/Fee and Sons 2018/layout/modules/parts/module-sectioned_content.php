<?php // MODULE - SECTIONED CONTENT ?>
			
			<div class="row constrain" style="<?php the_sub_field('row_padding_top'); ?><?php the_sub_field('row_padding_bottom'); ?>">

<?php if(get_sub_field('sectioned_content_repeater')): ?>
				
				
					<?php while(has_sub_field('sectioned_content_repeater')): ?>
	<div class="sectioned-content-container">
		<h3 style="padding: 0 0 20px 0;"><?php the_sub_field('sectioned_title'); ?></h3>
		<div class="sectioned-image" style="background-image: url(<?php the_sub_field('sectioned_image'); ?>)"></div> <!--sectioned-image-->
		<?php the_sub_field('sectioned_paragraph'); ?>
	</div> <!--news-story-container-->
					<?php endwhile; ?>
				<?php endif; ?>

			</div> <!--row-->
