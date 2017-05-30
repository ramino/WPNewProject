<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="site-header">
	<div class="container">
		<header>
			<div class="text-md-right hidden-md-down">
				<div class="header-info">
					<span class="header-info--item">
						<?php get_template_part('build/img/icon', 'phone.svg'); ?><a href="tel:+420 xxx">+42x xxx xxx xxx</a> (po-pá: xx-xx)
					</span>
					<span class="header-info--item">
						<?php get_template_part('build/img/icon', 'email.svg'); ?><a href="mailto:info@xx.xx">info@xx.com</a>
					</span>
					<ul><?php //pll_the_languages(); ?></ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="site-branding">
						<?php the_custom_header_markup(); ?>

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
						<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-sm-8">
					<div class="header-info">
						<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
							<div id="site-header-menu" class="site-header-menu">
								<?php if ( has_nav_menu( 'primary' ) ) : ?>
									<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'menu_class'     => 'nav nav-pills nav-fill primary-menu',
											 ) );
										?>
									</nav><!-- .main-navigation -->
								<?php endif; ?>
							</div><!-- .site-header-menu -->
						<?php endif; ?>
					</div>
				</div>
			</div>
		
				
		</header>

	<?php if ( get_header_image() ) : ?>
		<?php
			$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
		?>
		
		<?php if ( is_front_page() && is_home() ) : ?>
			<div class="banner">
				<img src="" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<div class="banner-wrapper">
				</div>
			</div><!--/.banner-->
		<?php endif; ?>
		
	<?php endif; // End header image check. ?>
	</div>
</div><!-- .site-header -->

