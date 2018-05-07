<?php
/*
Template Name: Sub Page
*/
?>
<?php get_header(); ?>
<?php
get_template_part ('layout/banner-sub-page/banner-sub-page');
?>
<div class="sub-page-content-container">
	<div class="sub-page-content-topper" style="background-color: #4295CB;"></div>
		<?php
		get_template_part ('layout/modules/module', 'loop');
		?>
</div> <!--sub-page-content-container-->
<?php get_footer(); ?>
