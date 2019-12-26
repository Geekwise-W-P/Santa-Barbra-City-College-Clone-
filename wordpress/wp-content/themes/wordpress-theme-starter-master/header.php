<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
			});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
		<div class="row">
			<div class="col-1">			
				<nav class="navbar bg-dark">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">SBCC</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Link 1</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Link 2</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Link 3</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Link 4</a>
						</li>

					</ul>
			
				</nav>
			</div>
		</div>
			</header>
			<!-- /header -->
