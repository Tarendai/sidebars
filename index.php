<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" >
	<?php wp_head(); ?>
</head>
<body class="<?php echo body_class(); ?>">
	<nav>
		<?php wp_nav_menu();
		?>
	</nav>
	<section>
		<?php
		if ( have_posts() ) {
			while( have_posts() ) {
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
				</article>
		<?php
			}
		}
		?>
	</section>
	<section class="sidebar">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</section>
	<?php wp_footer(); ?>
</body>
</html>
