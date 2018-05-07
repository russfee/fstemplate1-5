
	
			<?php
			get_template_part ('layout/footer/footer_layout');
			?>


<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/meanmenu.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">


<!-- JS
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Google Fonts
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Google Analytics
================================================== -->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<?php wp_footer(); ?>
</body>
</html>