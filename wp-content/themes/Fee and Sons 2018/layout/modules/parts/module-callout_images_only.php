<?php // Callout Images Only ?>

<div class="row constrain">
<div class="callout-io-container" style="<?php the_sub_field('row_padding_top'); ?><?php the_sub_field('row_padding_bottom'); ?>">
	
	<?php if(get_sub_field('image_io_repeater')): ?>
				
				
					<?php while(has_sub_field('image_io_repeater')): ?>
				
						<div class="callout-io-image" style="background-image: linear-gradient(<?php the_sub_field('tint_image'); ?>), url(<?php the_sub_field('image'); ?>); <?php the_sub_field('circle'); ?>">
							<div class="callout-io-title"style="<?php the_sub_field('title_colour'); ?> font-size: <?php the_sub_field('title_font_size'); ?>; font-weight: <?php the_sub_field('font_weight'); ?>;"><?php the_sub_field('title'); ?></div> <!--callout-io-title-->
						</div> <!--callout-io-image-->	
				
					<?php endwhile; ?>
				<?php endif; ?>
	

</div> <!--callout0-io-container-->
</div> <!--row-->
