<div class="top-bar-container" style="background-color: <?php the_field('background_colour', 'options'); ?>;">
	<div class="top-bar-content">
		
		<?php if(get_field('text_repeater', 'options')): ?>
				
				
					<?php while(has_sub_field('text_repeater','options')): ?>
				
								<div class="top-bar-item">
									<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
								</div> <!--top-bar-item-->
					
				
					<?php endwhile; ?>
				<?php endif; ?>
				
<?php if(get_field('icon_repeater', 'options')): ?>
				
				
					<?php while(has_sub_field('icon_repeater', 'options')): ?>
				
								<div class="top-bar-image">
									<a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('icon'); ?>"></a>
								</div> <!--top-bar-image-->

				
					<?php endwhile; ?>
				<?php endif; ?>
		
	</div> <!--top-bar-content-->
</div> <!--top-bar-container-->