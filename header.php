<!DOCTYPE html>
<html lang="en">

<head>
	<!-- <title>Blog Site Template</title>   -->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Site Template">
	<meta name="author" content="https://youtube.com/FollowAndrew">
	<!-- <link rel="shortcut icon" href="/wp-content/themes/mijobrands-theme/assets/images/logo.png"> -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
	<script type="text/javascript">
		(function() {
			emailjs.init("user_1gwjqPYf6NoCQKgQFEYoN");
		})();
	</script>


	<?php
	wp_head();
	?>

</head>

<body>
	<script>
		AOS.init();
	</script>

	<header class="">

		<nav class="navbar">

			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button> -->

			<div class="nav_items">

				<p>HotCoffee</p>

				<?php
				get_search_form();
				?>

				<?php
				wp_nav_menu(
					array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="">%3$s</ul>'
					)
				);
				?>


			</div>


		</nav>
	</header>