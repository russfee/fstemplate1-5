<!--FOOTER-->

<div class="row">
	<div class="footer-upper-container" style="background-color: <?php the_field('footer_background_colour', 'options'); ?>;">
		<div class="contact-section-container">
			
			<?php if(get_field('contact_repeater', 'option')): ?>
				
				
					<?php while(has_sub_field('contact_repeater', 'option')): ?>
						<div class="contact-group-container">
							<div class="contact-group-icon">
								<img src="<?php the_sub_field('contact_icon'); ?>">
							</div> <!--contact-group-icon-->	
							<div class="contact-group-text">
								<a href="<?php the_sub_field('contact_link'); ?>"><?php the_sub_field('contact_text'); ?></a>
							</div> <!--contact-group-text-->	
						</div> <!--contact-group-container-->
				
					<?php endwhile; ?>
				<?php endif; ?>
			
			
		
		</div> <!--contact-section-container-->
		<div class="footer-nav-container">
			<?php wp_nav_menu( array('menu' => 'Footer' )); ?>
		</div> <!--footer-nav-container-->
		<div class="footer-rule" style="background-color: <?php the_field('footer_rule_colour', 'options'); ?>;"></div> <!--footer-rule-->
		<div class="footer-logo"> <img src="<?php the_field('footer_logo', 'options'); ?>"></div> <!--footer-logo-->
	</div> <!--footer-upper-container-->
</div> <!--row-->
<div class="row">
			<div class="footer-lower-container" style="background-color: <?php the_field('bottom_bar_background_colour', 'options'); ?>; color: #fff;">
			<div class="copyright">
				<p style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>">&copy; <?php echo date("Y") ?> Maxwell Developments</p>
			</div><!-- copyright -->
			<div class="designed-by">
				<p style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>">Website designed by <a title="Fee and Sons Creative" style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>" href="http://feeandsonscreative.com" target="_blank" rel="nofollow">Fee and Sons Creative</a></p>
			</div><!-- designed-by-->
		</div> <!--footer-container-->
	</div><!-- row -->
</div><!-- container -->
