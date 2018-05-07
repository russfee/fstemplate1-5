<?php // Products - Alternating Module ?>

<div class="row">
	
	<?php if(get_sub_field('products_repeater')): ?>
				
				
					<?php while(has_sub_field('products_repeater')): ?>
				
						<div class="products-alternating-container" style="background-image: linear-gradient(<?php the_sub_field('products_background_colour'); ?>), url(<?php the_sub_field('products_background_pattern'); ?>);">
							<div class="products-alternating-content">
								<div class="products-alternating-image-<?php the_sub_field('image_alignment'); ?>">
									<img style="<?php the_sub_field('circle'); ?>" src="<?php the_sub_field('product_image'); ?>">
								</div> <!--products-alternating-image-->
								<div class="products-alternating-written-<?php the_sub_field('image_alignment'); ?>" style="color: <?php the_sub_field('product_text_colour'); ?> ; background-image: url(<?php the_sub_field('paragraph_background_image'); ?>); background-repeat: no-repeat; background-position-x: 50%;background-position-y: 50%; <?php the_sub_field('paragraph_align'); ?>">
									<h3 style="color: <?php the_sub_field('product_text_colour'); ?>"><?php the_sub_field('product_title'); ?></h3>
									<p><?php the_sub_field('product_paragraph'); ?></p>
									

<?php if( get_sub_field('button_text') ): ?>
									<div class="btn primary" style="width: 40%; text-align: center;margin-top: 20px;">
 									<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a>
									</div> <!--btn-primary-->
<?php endif; ?>
									
								</div> <!--products-alternating-written-->
							</div> <!--products-alternating-content-->
						</div> <!--products-alternating-container-->
				
					<?php endwhile; ?>
				<?php endif; ?>
	
</div> <!--row-->
